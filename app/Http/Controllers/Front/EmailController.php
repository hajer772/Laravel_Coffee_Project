<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\MyEmail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $formData = [
            'userName' => $request->input('userName'),
            'emailmessage' => $request->input('userMessage'),
            'email' => $request->input('userEmail'),
            'contact' => $request->input('contact'),

        ];
        //   Mail::to('hagerashry0@gmail.com')->send(new MyEmail($name));
        Mail::to($formData['email'])->send(new MyEmail($formData));
        // return view("front.index");


        return redirect()->back()->with('success', '');
    }
}
