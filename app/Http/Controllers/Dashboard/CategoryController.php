<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    private $category;

    public function __construct(Category $category)
    {
        $this->middleware(['permission:read-categories'])->only('index', 'show');
        $this->middleware(['permission:create-categories'])->only('create', 'store');
        $this->middleware(['permission:update-categories'])->only('edit', 'update');
        $this->middleware(['permission:delete-categories'])->only('destroy');
        $this->category = $category;
    }

    public function index()
    {
        try {
            $categories = $this->category->latest('id')->get();
            return view('admin.categories.index', compact('categories'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $category = $this->category->create($requested_data);
            $category->uploadFile();

            return redirect()->route('categories.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image','deleteFile']);
            $requested_data['updated_at'] = Carbon::now();
            if ($request->has('deleteFile')){
                $category->deleteFile();
            }
            $category->update($requested_data);

            $category->updateFile();

            return redirect()->route('categories.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Category $category)
    {
        try {
            $category->deleteFile();
            $category->delete();
            return redirect()->route('categories.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
