<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\FeatureRequest;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class FeatureController extends Controller
{
    private $feature;

    public function __construct(Feature $feature)
    {
        $this->middleware(['permission:read-features'])->only('index', 'show');
        $this->middleware(['permission:create-features'])->only('create', 'store');
        $this->middleware(['permission:update-features'])->only('edit', 'update');
        $this->middleware(['permission:delete-features'])->only('destroy');
        $this->feature = $feature;
    }

    public function index()
    {
        try {
            $features = $this->feature->latest('id')->get();
            return view('admin.features.index', compact('features'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.features.create');
    }

    public function store(FeatureRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove']);
            $feature = $this->feature->create($requested_data);
            // $feature->uploadFile();

            return redirect()->route('features.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Feature $feature)
    {
        return view('admin.features.show', compact('feature'));
    }

    public function edit(Feature $feature)
    {
        return view('admin.features.edit', compact('feature'));
    }

    public function update(FeatureRequest $request, Feature $feature)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove']);
            $requested_data['updated_at'] = Carbon::now();
            $feature->update($requested_data);

            // $feature->updateFile();

            return redirect()->route('features.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Feature $feature)
    {
        try {
            // $feature->deleteFile();
            $feature->delete();
            return redirect()->route('features.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
