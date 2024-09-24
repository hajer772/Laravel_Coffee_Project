<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Testimonial;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $counters = Counter::all();
        $testimonials = Testimonial::all();
        $contacts = Contact::all();
        $products=Product::all();

        if ($request->has('category')) {
            $category = $request->input('category');

            if ($category === 'All') {
                $products = Product::all();
            } else {
                $products = Product::where('category_id', $category)->get();
            }

            return view("front.index", compact("counters", "products", 'testimonials', 'contacts'));
        }



        return view("front.index", compact("counters", "products", 'testimonials', 'contacts'));






        //  dd($request);



    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
