<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ReplyRequest;
use App\Mail\ReplyMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactRequestController extends Controller
{
    private $contact_us_request;


    public function __construct(ContactUs $contact_us_request)
    {
        $this->middleware(['permission:read-contact_us'])->only('index', 'show');
        $this->middleware(['permission:delete-contact_us'])->only('destroy');
        $this->middleware(['permission:reply-contact_us'])->only('reply');
        $this->contact_us_request = $contact_us_request;
    }

    public function index()
    {
        try {
            $contact_us_requests = $this->contact_us_request->latest('id')->get();
            return view('admin.contact_requests.index', compact('contact_us_requests'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }


    public function show(ContactUs $contact_request)
    {
        return view('admin.contact_requests.show', compact('contact_request'));
    }


    public function destroy(ContactUs $contact_request)
    {
        try {
            $contact_request->delete();
            return redirect()->route('contact_requests.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }


    public function reply(ContactUs $contact_request)
    {
        // return $contact_request;
        return view('admin.contact_requests.reply', compact('contact_request'));
    }

    public function send_mail(ReplyRequest $request)
    {
        // return $request;
        try {
            $contact = $this->contact_us_request->find($request->id);
            $request_data = $request->only(['subject', 'message']);

            Mail::to($contact->email)->send(new ReplyMail($request_data));
            return redirect()->route('contact_requests.index')->with(['success' => __('message.reply')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }
}
