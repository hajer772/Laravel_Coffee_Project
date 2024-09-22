<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ServiceRequest;
use App\Http\Requests\Dashboard\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SliderController extends Controller
{
    private $slider;

    public function __construct(Slider $slider)
    {
        $this->middleware(['permission:read-sliders'])->only('index', 'show');
        $this->middleware(['permission:create-sliders'])->only('create', 'store');
        $this->middleware(['permission:update-sliders'])->only('edit', 'update');
        $this->middleware(['permission:delete-sliders'])->only('destroy');
        $this->slider = $slider;
    }

    public function index()
    {
        try {
            $sliders = $this->slider->latest('id')->get();
            return view('admin.sliders.index', compact('sliders'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(SliderRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);
            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $slider = $this->slider->create($requested_data);
            $slider->uploadFile();

            return redirect()->route('sliders.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Slider $slider)
    {
        return view('admin.sliders.show', compact('slider'));
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(SliderRequest $request, Slider $slider)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);
            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $requested_data['updated_at'] = Carbon::now();
            $slider->update($requested_data);

            $slider->updateFile();

            return redirect()->route('sliders.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Slider $slider)
    {
        try {
            $slider->deleteFile();
            $slider->delete();
            return redirect()->route('sliders.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
