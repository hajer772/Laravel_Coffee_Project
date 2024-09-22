<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class StandAloneController extends Controller
{
    public function index()
    {
        //$features=Feature::all();
        //$products=Product::all();
       // $sliders=Slider::all();
       $contacts=Contact::all();

        return view("front.pages.standalone",compact("contacts"));
    }

}
