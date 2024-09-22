    <!-- Start About Section -->
    <section class="about" id="about">
        <div class="container">
            <!--Heading-->
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="heading-area d-inline-block">
                        <div class="mb-4"><img src=" {{ asset( 'front/images/about-border.png'  ) }}" alt="About-line"></div>
                        <h6 class="sub-title alt-font text-sec">{{__("words.about-subtitle") }}</h6>
                        <h2 class="title main-font text-main my-4">{{ __("words.about-title") }}</h2>
                        <p class="paragraph alt-font text-sec">{{ __("words.about-paragraph") }}</p>
                    </div>
                </div>
            </div>
            <!-- App Detail -->
            <div class="row align-items-center">
                <!-- Services 1,2,3 -->
                <div class="col-lg-4 mb-5 mb-lg-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <!-- Item -->
                    <div class="row app-feature">
                        <div class="col-12 col-lg-2 p-lg-0">
                            <i class="lni lni-coffee-cup"></i>
                        </div>
                        <div class="col-12 col-lg-10 p-lg-0">
                            <h4 class="mb-3">{{ trans("words.about-item1-title") }}</h4>
                            <p>{{ trans("words.about-item1-paragraph") }}</p>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="row app-feature">
                        <div class="col-12 col-lg-2 p-lg-0">
                            <i class="lni lni-fresh-juice"></i>
                        </div>
                        <div class="col-12 col-lg-10 p-lg-0">
                            <h4 class="mb-3">{{ trans("words.about-item2-title") }}</h4>
                            <p>{{ trans("words.about-item2-paragraph") }}</p>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="row app-feature">
                        <div class="col-12 col-lg-2 p-lg-0">
                            <i class="lni lni-emoji-smile"></i>
                        </div>
                        <div class="col-12 col-lg-10 p-lg-0">
                            <h4 class="mb-3">{{ trans("words.about-item3-title") }}</h4>
                            <p>{{ trans("words.about-item3-paragraph") }}</p>
                        </div>
                    </div>
                </div>
                <!-- App Slier -->
                <div class="col-lg-4 mb-5 mb-lg-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <!-- App Image -->
                    <div class="app-image">
                        <img src=" {{ asset( 'front/images/loves.jpg'  ) }}" alt="image" style= "width:251px !important; height:444px !important">
                    </div>
                </div>
                <!-- Services 4,5,6 -->
                <div class="col-lg-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                    <!-- Item -->
                    <div class="row app-feature">
                        <div class="col-12 col-lg-2 p-lg-0">
                            <i class="lni lni-coffee-cup"></i>
                        </div>
                        <div class="col-12 col-lg-10 p-lg-0">
                            <h4 class="mb-3">{{ trans("words.about-item4-title") }}</h4>
                            <p>{{ trans("words.about-item4-paragraph") }}</p>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="row app-feature">
                        <div class="col-12 col-lg-2 p-lg-0">
                            <i class="lni lni-juice"></i>
                        </div>
                        <div class="col-12 col-lg-10 p-lg-0">
                            <h4 class="mb-3">{{ trans("words.about-item5-title") }}</h4>
                            <p>{{ trans("words.about-item5-paragraph") }}</p>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="row app-feature">
                        <div class="col-12 col-lg-2 p-lg-0">
                            <i class="lni lni-emoji-smile"></i>
                        </div>
                        <div class="col-12 col-lg-10 p-lg-0">
                            <h4 class="mb-3">{{ trans("words.about-item6-title") }}</h4>
                            <p>{{ trans("words.about-item6-paragraph") }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->