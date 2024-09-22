<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SettingContactRequest;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SettingContactController extends Controller
{
    private $contact;
    private $setting;

    public function __construct(Contact $contact, Setting $setting)
    {
        $this->middleware(['permission:read-contacts'])->only('index', 'show');
        $this->middleware(['permission:create-contacts'])->only('create', 'store');
        $this->middleware(['permission:update-contacts'])->only('edit', 'update');
        $this->middleware(['permission:delete-contacts'])->only('destroy');
        $this->contact = $contact;
        $this->setting = $setting;
    }

    public function index()
    {
        try {
            $contacts = $this->setting->first()->contact()->latest('id')->get();
            return view('admin.contacts.index', compact('contacts'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.contacts.create');
    }

    public function store(SettingContactRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token']);
            $this->setting->first()->contact()->create($requested_data);

            return redirect()->route('contacts.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' =>__('message.something_wrong')]);
        }
    }

    public function show($id)
    {
        try {
            $contact = $this->contact->find($id);
            return view('admin.contacts.show', compact('contact'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function edit($id)
    {
        try {
            $contact = $this->contact->find($id);
            return view('admin.contacts.edit', compact('contact'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function update(SettingContactRequest $request, $id)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $contact = $this->contact->find($id);
            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $requested_data['updated_at'] = Carbon::now();
            $contact->update($requested_data);

            return redirect()->route('contacts.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy($id)
    {
        try {
            $contact = $this->contact->find($id);
            $contact->delete();
            return redirect()->route('contacts.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
