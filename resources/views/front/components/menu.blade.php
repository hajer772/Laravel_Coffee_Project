<!-- Start Menu Section -->
<section class="menu portfolio-three pb-0" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 text-center wow fadeIn"
                style="visibility: visible; animation-name: fadeIn;">
                <div class="heading-area d-inline-block">
                    <div class="mb-4"><img src=" {{ asset('front/images/gallery-border.png') }}" alt="Border"></div>
                    <h6 class="sub-title alt-font text-sec">{{ __('words.menu-subtitle') }}</h6>
                    <h2 class="title main-font text-main my-4">{{ __('words.menu-title') }}</h2>
                    <p class="paragraph alt-font text-sec">{{ __('words.menu-paragraph') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">



        <div class="container">
            {{-- <div class="search">
                <h1>{{ __('words.menu-all') }}</h1>
                <input type="text" name="" id="find" placeholder="search here...." onkeyup="search()">

                
            </div> --}}

            <div class="items">
                <form method="get" action="{{ route('front.index') }}#menu">
                    <ul>
                        <li><button name="category" value="All" type="submit" class="item">{{ __('words.menu-all') }}</button></li>
                        <li><button name="category" value="1" type="submit" class="item" >{{ __("words.menu-hot") }}</button></li>
                        <li><button name="category" value="2" type="submit" class="item" >{{ __("words.menu-cold") }}</button></li>
                        <li><button name="category" value="3" type="submit" class="item" >{{ __("words.menu-espresso") }}</button></li>
                        <li><button name="category" value="4" type="submit" class="item">{{ __("words.menu-ice-cream") }}</button></li>
                    </ul>
                </form>
            </div>
            <div class="product-list row">


                @foreach ($products as $product)
                    <!-- Menu Item 4 -->
                    <div class="product col-sm-6 col-md-4 col-lg-3">
                        <div class="item-img">
                            <a href="{{ $product->image }}" data-fancybox="images">
                                <img src=" {{ $product->image }}" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info text-center">
                                        <span class="image-hover mb-3"><i class="lni-coffee-cup"></i></span>
                                        <h5 class="text-white">{{ __('words.menu-hover-img') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <h3>{{ $product->title }}</h3>
                            <h4>{{ $product->price }}</h4>
                        </div>

                    </div>
                @endforeach



            </div>
        </div>


        {{-- <div class="row m-0">
            
             <!-- Menu Item 1 -->
            <div class="col-md-2 items graphic">
                <div class="item-img">
                    <a href="{{ asset('front/images/1.jpg') }}" data-fancybox="images">
                        <img src=" {{ asset('front/images/1.jpg') }}" alt="image"
                            style= "width:330px !important; height:420px !important">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info text-center">
                                <span class="image-hover mb-3"><i class="lni-coffee-cup"></i></span>
                                <h5 class="text-white">{{ __('words.menu-hover-img') }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Menu Item 2 -->
            <div class="col-md-8 items graphic">
                <div class="item-img">
                    <a href="{{ asset('front/images/2.jpg') }}" data-fancybox="images">
                        <img src=" {{ asset('front/images/2.jpg') }}" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info text-center">
                                <span class="image-hover mb-3"><i class="lni-coffee-cup"></i></span>
                                <h5 class="text-white">{{ __('words.menu-hover-img') }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Menu Item 3 -->
            <div class="col-md-2 items graphic">
                <div class="item-img">
                    <a href="{{ asset('front/images/3.jpg') }}" data-fancybox="images">
                        <img src="{{ asset('front/images/3.jpg') }}" alt="image"
                            style= "width:330px !important; height:420px !important">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info text-center">
                                <span class="image-hover mb-3"><i class="lni-coffee-cup"></i></span>
                                <h5 class="text-white">{{ __('words.menu-hover-img') }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @foreach ($products as $product)
                <!-- Menu Item 4 -->
                <div class="col-md-3 items graphic">
                    <div class="item-img">
                        <a href="{{ $product->image }}" data-fancybox="images">
                            <img src=" {{ $product->image }}" alt="image"
                                style= "width:460px !important; height:330px !important">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info text-center">
                                    <span class="image-hover mb-3"><i class="lni-coffee-cup"></i></span>
                                    <h5 class="text-white">{{ __('words.menu-hover-img') }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach 
           
        </div> --}}

    </div>

</section>

<!-- End Menu Section -->


