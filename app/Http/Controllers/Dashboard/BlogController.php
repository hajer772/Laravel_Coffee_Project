<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    private $blog;

    public function __construct(Blog $blog)
    {
        $this->middleware(['permission:read-blog'])->only('index', 'show');
        $this->middleware(['permission:create-blog'])->only('create', 'store');
        $this->middleware(['permission:update-blog'])->only('edit', 'update');
        $this->middleware(['permission:delete-blog'])->only('destroy');
        $this->blog = $blog;
    }

    public function index()
    {
        try {
            $blogs = $this->blog->latest('id')->get();
            return view('admin.blog.index', compact('blogs'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(BlogRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $blog = $this->blog->create($requested_data);
            $blog->uploadFile();

            return redirect()->route('blog.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(BlogRequest $request, Blog $blog)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $requested_data['updated_at'] = Carbon::now();
            $blog->update($requested_data);

            $blog->updateFile();

            return redirect()->route('blog.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Blog $blog)
    {
        try {
            $blog->deleteFile();
            $blog->delete();
            return redirect()->route('blog.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
