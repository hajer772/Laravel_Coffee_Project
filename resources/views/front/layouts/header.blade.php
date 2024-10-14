<!-- Start Loader -->
<div class="loader-bg">
    <div class="smoke-loader">
        <div class="smoke-wave">
            <div class="smoke1"></div>
            <div class="smoke2"></div>
            <div class="smoke3"></div>
        </div>
        <div class="coffee-cup">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 360"
                xml:space="preserve" height="80" style="fill: #ffffff;">
                <g>
                    <g>
                        <path d="M450.6,72.6c-1.2,17-5.9,50-5.9,50c38.5,51.2-2.3,103.2-34.5,114c0,0-16.6,32.4-26.4,46.9C449,280.1,501,229.1,501,166.8
                C501,128.5,481.4,94.1,450.6,72.6L450.6,72.6z" />
                        <path d="M332.6,308.2h-24.1c61.7-52.8,102.7-155,102.7-274.9c0-11.3-9.1-20.4-20.4-20.4H31.4C20.1,12.9,11,22,11,33.3
                c0,120,41,222.1,102.7,274.9H89.5c-11.3,0-20.4,9.1-20.4,20.4S78.2,349,89.5,349h243.1c11.3,0,20.4-9.1,20.4-20.4
                S343.9,308.2,332.6,308.2L332.6,308.2z" />
                    </g>
                </g>
            </svg>
        </div>
    </div>
</div>
<!-- End Loader -->

<!-- Start Header -->
<header id="home" class="cursor-light">
    <div class="inner-header nav-icon">
        <div class="main-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-3 col-lg-1">
                        <a class="navbar-brand link" href="{{ route('front.index') }}">
                            <img src="{{ asset('front/images/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="col-8 col-lg-10 simple-navbar d-flex align-items-center justify-content-end">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="navbar-nav ml-auto d-flex align-items-center">
                                    <a class="nav-link home link"
                                        href="{{ route('front.index') }}#home">{{ __('words.home') }}</a>
                                    <a class="nav-link link"
                                        href="{{ route('front.index') }}#about">{{ trans('words.about') }}</a>
                                    <a class="nav-link link"
                                        href="{{ route('front.index') }}#menu">{{ trans('words.menu') }}</a>
                                    <a class="nav-link link"
                                        href="{{ route('front.index') }}#reviews">{{ trans('words.review') }}</a>
                                    <a class="nav-link link "
                                        href="{{ route('front.index') }}#blog">{{ trans('words.news') }}</a>
                                    <a href=""
                                        class="btn button btn-medium btn-rounded btn-transparent ml-0 ml-lg-5"
                                        data-animation-duration="500" data-fancybox
                                        data-src="#animatedModal">{{ __('words.order-now') }}</a>

                                    <span class="menu-line link"><i aria-hidden="true"
                                            class="fa fa-angle-down"></i></span>
                                </div>
                            </div>

                        </nav>
                    </div>

                    <div class="col-1 col-lg-1 simple-navbar d-flex align-items-center justify-content-end">

                        <!--begin::Languages-->
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="{{ LaravelLocalization::getCurrentLocaleNative() == $properties['native'] ? 'd-none' : '' }}"
                                rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">


                                <span class="symbol symbol-30 mr-3 text-white">
                                    @if ($localeCode == 'en')
                                        <span class="navi-text">{{ __('words.english') }}</span>
                                    @elseif ($localeCode == 'ar')
                                        <span class="navi-text">{{ __('words.arabic') }}</span>
                                    @else
                                        <span class="navi-text">{{ $properties['native'] }}</span>
                                    @endif
                                </span>

                            </a>
                        @endforeach
                        <!--end::Languages-->
                    </div>
                </div>
            </div>
        </div>
        <!--toggle btn-->
        <a href="javascript:void(0)" class="sidemenu_btn link" id="sidemenu_toggle">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
    <!--Side Nav-->
    <div class="side-menu hidden side-menu-opacity">
        <div class="bg-overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <div class="container">
                <div class="row w-100 side-menu-inner-content">
                    <div class="col-12 d-flex justify-content-center align-items-center text-center">
                        <a href="{{ route('front.index') }}" class="navbar-brand"><img
                                src="{{ asset('front/images/logo.png') }}" alt="logo"></a>
                    </div>
                    <div
                        class="col-12 col-lg-8 text-center {{ App::isLocale('ar') ? 'text-lg-right' : 'text-lg-left' }}">
                        <nav class="side-nav w-100">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('front.index') }}#home">{{ __('words.home') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('front.index') }}#about">{{ __('words.about') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('front.index') }}#menu">{{ __('words.menu') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('front.index') }}#reviews">{{ __('words.review') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('front.index') }}#blog">{{ __('words.news') }}</a>
                                </li>
                                <li class="get-started-btn">
                                    <a href="" class="btn button btn-medium btn-rounded btn-transparent"
                                        data-animation-duration="500" data-fancybox
                                        data-src="#animatedModal">{{ __('words.order-now') }}</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div
                        class="col-12 col-lg-4 d-flex align-items-center text-center {{ App::isLocale('ar') ? 'text-lg-right' : 'text-lg-left' }}">
                        <div class="side-footer text-white w-100">
                            <div class="menu-company-details">
                                <span>+1 631 123 4567</span>
                                <span>email@website.com</span>
                            </div>
                            <ul class="social-icons-simple">
                                <li><a class="facebook-text-hvr" href="javascript:void(0)"><i
                                            class="fab fa-facebook-f"></i> </a> </li>
                                <li><a class="twitter-text-hvr" href="javascript:void(0)"><i
                                            class="fab fa-twitter"></i> </a> </li>
                                <li><a class="youtube-text-hvr" href="javascript:void(0)"><i
                                            class="fab fa-youtube"></i> </a> </li>
                                <li><a class="instagram-text-hvr" href="javascript:void(0)"><i
                                            class="fab fa-instagram"></i> </a> </li>
                            </ul>
                            <p class="text-white">&copy; {{ __('words.love_made') }} {{ __('words.theme') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>

    <!--Get Started Model Popup-->
    <div class="quote-content hidden animated-modal" id="animatedModal">
        <!--Heading-->
        <div class="pb-5 text-center">
            <span class="text-pink font-weight-200 font-20">{{ trans('words.megaone') }}</span>
            <h2 class="main-font font-weight-600 text-sec mt-2">{{ __('words.place-order') }}</h2>
        </div>
        <!--Contact Form-->
        <form class="contact-form" id="modal-contact-form-data" action="{{ route('front.send') }}">
            @csrf
            <div class="row">
                <!--Result-->
                <div class="col-12" id="quote_result"></div>
            

                    <!--Left Column-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="userName" name="userName"
                                placeholder="{{ __('words.name') }}" required="" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="contact" name="contact"
                                placeholder="{{ __('words.contact') }} #" required="" type="text">
                        </div>
                    </div>

                    <!--Right Column-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="userEmail" name="userEmail"
                                placeholder="{{ __('words.email') }}" required="" type="email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="quote_address" name="userAddress"
                                placeholder="{{ __('words.city') }}" required="" type="text">
                        </div>
                    </div>

                    <!--Full Column-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" id="userMessage" name="userMessage" placeholder="{{ trans('words.explain') }} "></textarea>
                        </div>
                    </div>

                    <!--Button-->

                    <div class="col-md-12">
                        <div class="form-check">
                            <label class="checkbox-lable font-weight-200 font-16">{{ trans('words.contact-phone') }}
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        {{-- <a href="javascript:void(0)"
                                        class="btn button btn-medium btn-rounded btn-grey modal_contact_btn"
                                        id="quote_submit_btn">{{ __("words.Submit_Now") }}</a> --}}

                        <button type="submit" href="javascript:void(0)"
                            class="btn button btn-medium btn-rounded btn-grey modal_contact_btn"
                            id="quote_submit_btn">{{ __('words.Submit_Now') }}</button>



                    </div>

            </div>
        </form>
    </div>
</header>
<!-- End Header -->
