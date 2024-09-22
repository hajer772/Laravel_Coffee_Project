<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\NewsletterRequest;
use App\Http\Resources\NewsletterResource;
use App\Mail\SubscribedMail;
use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    private $newsletter;

    public function __construct(NewsLetter $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    public function __invoke(NewsletterRequest $request)
    {
        try {
            $requested_data = $request->only('email');
            $newsletter = $this->newsletter->create($requested_data);
            Mail::to($requested_data)->send(new SubscribedMail($newsletter));
            return successResponse(new NewsletterResource($newsletter), 'Created successfully', 200);
        }catch (\Exception $e){
            return failureResponse($e->getMessage(), 'error', 400);
            return failureResponse(__("message.something_wrong"), 'error', 400);
        }
    }
}
