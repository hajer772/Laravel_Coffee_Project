<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\InnerPage;


class StandAloneController extends Controller
{
    public function index()
    {
        $contentInnerPages = InnerPage::all();
       
       $contacts=Contact::all();

        return view("front.pages.standalone",compact("contacts",'contentInnerPages'));
    }

}
