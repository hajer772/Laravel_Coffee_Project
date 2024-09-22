<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\FaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FaqController extends Controller
{
    private $faq;

    public function __construct(Faq $faq)
    {
        $this->middleware(['permission:read-faqs'])->only('index', 'show');
        $this->middleware(['permission:create-faqs'])->only('create', 'store');
        $this->middleware(['permission:update-faqs'])->only('edit', 'update');
        $this->middleware(['permission:delete-faqs'])->only('destroy');
        $this->faq = $faq;
    }

    public function index()
    {
        try {
            $faqs = $this->faq->latest('id')->get();
            return view('admin.faqs.index', compact('faqs'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(FaqRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token']);
            $this->faq->create($requested_data);

            return redirect()->route('faqs.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Faq $faq)
    {
        return view('admin.faqs.show', compact('faq'));
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(FaqRequest $request, Faq $faq)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token']);
            $requested_data['updated_at'] = Carbon::now();
            $faq->update($requested_data);
            return redirect()->route('faqs.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Faq $faq)
    {
        try {
            $faq->delete();
            return redirect()->route('faqs.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
