<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\NewSectionRequest;
use App\Models\NewSection;
use Illuminate\Support\Carbon;

class NewSectionController extends Controller
{
    private $newsection;

    public function __construct(NewSection $newsection)
    {
        $this->middleware(['permission:read-newsections'])->only('index', 'show');
        $this->middleware(['permission:create-newsections'])->only('create', 'store');
        $this->middleware(['permission:update-newsections'])->only('edit', 'update');
        $this->middleware(['permission:delete-newsections'])->only('destroy');
        $this->newsection = $newsection;
    }

    public function index()
    {
        try {
            $newsections = $this->newsection->latest('id')->get();
            return view('admin.newsections.index', compact('newsections'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.newsections.create');
    }

    public function store(NewSectionRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);
            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $newsection = $this->newsection->create($requested_data);
            $newsection->uploadFile();

            return redirect()->route('newsections.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(NewSection $newsection)
    {
        return view('admin.newsection.show', compact('newsection'));
    }

    public function edit(NewSection $newsection)
    {
        return view('admin.newsections.edit', compact('newsection'));
    }

    public function update(NewSectionRequest $request, NewSection $newsection)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);
            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $requested_data['updated_at'] = Carbon::now();
            $newsection->update($requested_data);

            $newsection->updateFile();

            return redirect()->route('newsections.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(NewSection $newsection)
    {
        try {
            $newsection->deleteFile();
            $newsection->delete();
            return redirect()->route('newsections.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
