<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PartnerController extends Controller
{
    private $partner;

    public function __construct(Partner $partner)
    {
        $this->middleware(['permission:read-partners'])->only('index', 'show');
        $this->middleware(['permission:create-partners'])->only('create', 'store');
        $this->middleware(['permission:update-partners'])->only('edit', 'update');
        $this->middleware(['permission:delete-partners'])->only('destroy');
        $this->partner = $partner;
    }

    public function index()
    {
        try {
            $partners = $this->partner->latest('id')->get();
            return view('admin.partners.index', compact('partners'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(PartnerRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $partner = $this->partner->create($requested_data);
            $partner->uploadFile();

            return redirect()->route('partners.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Partner $partner)
    {
        return view('admin.partners.show', compact('partner'));
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(PartnerRequest $request, Partner $partner)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $requested_data['updated_at'] = Carbon::now();
            $partner->update($requested_data);

            $partner->updateFile();

            return redirect()->route('partners.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Partner $partner)
    {
        try {
            $partner->deleteFile();
            $partner->delete();
            return redirect()->route('partners.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
