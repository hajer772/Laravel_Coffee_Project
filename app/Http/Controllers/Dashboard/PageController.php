<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    private $page;

    public function __construct(Page $page)
    {
        $this->middleware(['permission:read-pages'])->only('index', 'show');
        $this->middleware(['permission:create-pages'])->only('create', 'store');
        $this->middleware(['permission:update-pages'])->only('edit', 'update');
        $this->middleware(['permission:delete-pages'])->only('destroy');
        $this->page = $page;
    }

    public function index()
    {
        try {
            $pages = $this->page->latest('id')->get();
            return view('admin.pages.index', compact('pages'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(PageRequest $request)
    {
        try {
            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $page = $this->page->create($requested_data);
            $page->uploadFile();

            return redirect()->route('pages.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Page $page)
    {
        return view('admin.pages.show', compact('page'));
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(PageRequest $request, Page $page)
    {
        try {
            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $page->update($requested_data);
            $requested_data['updated_at'] = Carbon::now();
            $page->updateFile();

            return redirect()->route('pages.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }    }

    public function destroy(Page $page)
    {
        try {
            $page->deleteFile();
            $page->delete();
            return redirect()->route('pages.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
