<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TestimonialRequest;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TestimonialController extends Controller
{
    private $testimonial;

    public function __construct(Testimonial $testimonial)
    {
        $this->middleware(['permission:read-testimonials'])->only('index', 'show');
        $this->middleware(['permission:create-testimonials'])->only('create', 'store');
        $this->middleware(['permission:update-testimonials'])->only('edit', 'update');
        $this->middleware(['permission:delete-testimonials'])->only('destroy');
        $this->testimonial = $testimonial;
    }

    public function index()
    {
        try {
            $testimonials = $this->testimonial->latest('id')->get();
            return view('admin.testimonials.index', compact('testimonials'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(TestimonialRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $testimonial = $this->testimonial->create($requested_data);
            $testimonial->uploadFile();

            return redirect()->route('testimonials.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $requested_data['updated_at'] = Carbon::now();
            $testimonial->update($requested_data);

            $testimonial->updateFile();

            return redirect()->route('testimonials.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Testimonial $testimonial)
    {
        try {
            $testimonial->deleteFile();
            $testimonial->delete();
            return redirect()->route('testimonials.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }
}
