<!-- Start Slider Section -->
<section class="slider p-md-0">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- First Slide -->
            <div class="swiper-slide">
                <div class="bg-overlay bg-black opacity-4"></div>
                <img src=" {{ asset('front/images/coffee-left.jpg') }}" alt="slider">
                <div class="container slider-text">
                    <div class="row">
                        <div class="col-12 col-md-6"></div>
                        <div class="col-12 col-md-6 text-center mb-0 mb-md-5 {{(App::isLocale('ar') ? 'text-md-right' : 'text-md-left')}}" >
                            <h1 class="main-font slider-heading">{{ __("words.slider1-subtitle") }} <span class="d-block">{{ __("words.slider1-title") }}</span></h1>
                            <p class="alt-font slider-para py-2">{{ __("words.slider1-paragraph") }}</p>
                            <a href="#about" class="scroll btn button btn-medium btn-rounded btn-white mb-5">{{ __("words.slider1-button") }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Slide -->
            <div class="swiper-slide">
                <div class="bg-overlay bg-black opacity-4"></div>
                <img src=" {{ asset('front/images/coffee-center.jpg') }}" alt="slider">
                <div class="container slider-text">
                    <div class="row">
                        <div class="col-12 col-md-8 col-lg-7 offset-md-2 offset-lg-3 text-center mb-0 mb-md-5">
                            <h1 class="main-font slider-heading">{{ __("words.slider2-subtitle") }} <span class="d-block">{{ __("words.slider2-title") }}</span></h1>
                            <p class="alt-font slider-para py-2">{{ __("words.slider2-paragraph") }}</p>
                            <a href="#about" class="scroll btn button btn-medium btn-rounded btn-white mb-5">{{ __("words.slider2-button") }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Third Slide -->
            <div class="swiper-slide">
                <div class="bg-overlay bg-black opacity-4"></div>
                <img src=" {{ asset('front/images/coffee-right.jpg') }}" alt="slider">
                <div class="container slider-text">
                    <div class="row">
                        <div class="col-12 col-md-6 text-center mb-0 mb-md-5  {{(App::isLocale('ar') ? 'text-md-right' : 'text-md-left')}}">
                            <h1 class="main-font slider-heading">{{ __("words.slider3-subtitle") }} <span class="d-block">{{ __("words.slider3-title") }}</span></h1>
                            <p class="alt-font slider-para py-2">{{ __("words.slider3-paragraph") }}</p>
                            <a href="#about" class="scroll btn button btn-medium btn-rounded btn-white mb-5">{{ __("words.slider3-button") }}</a>
                        </div>
                        <div class="col-12 col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- Social Icons -->
    <ul class="social-icons social-icons-simple revicon white d-none d-lg-block">
        <li class="d-table"><a href="javascript:void(0)" class="social-icon"><i class="fab fa-facebook-f"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="social-icon"><i class="fab fa-twitter"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="social-icon"><i class="fab fa-linkedin-in"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="social-icon"><i class="fab fa-instagram"></i> </a> </li>
    </ul>
</section>
<!-- End Slider Section-->