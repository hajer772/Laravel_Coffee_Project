<!-- Start Reviews Section -->
<section class="reviews" id="reviews">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image -->
            <div class="col-12 col-md-6 wow  order-2 order-md-1 pt-5 pt-md-0 {{(App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft')}}" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="reviews-img">
                    <img src=" {{ asset( 'front/images/reviews.jpg'  ) }}" alt="Testimonial">
                </div>
            </div>
            <!-- Content -->
            <div class="col-12 col-md-6 wow  order-1 order-md-2 {{(App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft')}}" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="heading-area text-center">
                    <div class="mb-4"><img src=" {{ asset( 'front/images/gallery-border.png'  ) }}" alt="About-line"></div>
                    <h2 class="title main-font text-main my-4">{{ __("words.review-title") }}</h2>
                </div>
                <div class="testimonial-carousel">
                    <div class="testimonial-box owl-carousel owl-theme">
                        @foreach ($testimonials as $testimonial)
                            <!-- Item-1 -->
                            <div class="item text-center animate-fade">
                                <div class="icon-holder"><i class="fas fa-quote-right"></i></div>
                                <p class="text">{{ $testimonial->description }}</p>
                                <div class="img-holder"><img src=" {{ $testimonial->image }}" alt="Image"></div>
                                <h4 class="user-name">{{ $testimonial->client_name }}</h4>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Reviews Section -->