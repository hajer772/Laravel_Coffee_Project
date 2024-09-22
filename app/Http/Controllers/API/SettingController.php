<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\ContactUsRequest;
use App\Http\Resources\ContactUsResource;
use App\Http\Resources\SettingResource;
use App\Mail\ContactMail;
use App\Models\ContactUs;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Util\Exception;


class SettingController extends Controller
{
    private $setting;
    private $contact;

    public function __construct(Setting $setting, ContactUs $contact)
    {
        $this->setting = $setting;
        $this->contact = $contact;
    }
    public function index()
    {
        try {
            $settings = $this->setting->first();
            return successResponse(
                new SettingResource($settings),
                trans("message.retrieved_successfully"),
                200
            );
        } catch (Exception $e) {

            return failureResponse([], trans("message.something_wrong"), 400);
        }
    }

    public function contact(ContactUsRequest $request)
    {
        try {
            $requested_data = $request->only(['name', 'email', 'message','phone']);
            $contact = $this->contact->create($requested_data);

            Mail::to(settings()->contact_email)->send(new ContactMail($contact));
            return successResponse(new ContactUsResource($contact), __('message.sent_successfully'), 200);

        } catch (\Exception $e) {
            return failureResponse(__('message.something_wrong'), 'error', 500);
        }
    }
}
