    <!-- Start About Section -->
    <section class="about" id="about">
        <div class="container">
            <!--Heading-->
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 text-center wow fadeIn"
                    style="visibility: visible; animation-name: fadeIn;">
                    <div class="heading-area d-inline-block">
                        <div class="mb-4"><img src=" {{ asset('front/images/about-border.png') }}" alt="About-line">
                        </div>
                        <h6 class="sub-title alt-font text-sec">{{ __('words.about-subtitle') }}</h6>
                        <h2 class="title main-font text-main my-4">{{ __('words.about-title') }}</h2>
                        <p class="paragraph alt-font text-sec">{{ __('words.about-paragraph') }}</p>
                    </div>
                </div>
            </div>

            <!-- App Detail -->
            <div class="row align-items-center">
                @php
                    $counter = 0;
                    $counterclass = 1;
                @endphp

                @foreach ($services as $service)
                    @php
                        $counter++;
                    @endphp
                    @if ($counter === 1 || $counter == 4)
                        <div class="col-lg-4 {{ $counterclass === 1 ? 'mb-5' : '' }} mb-lg-0 wow {{ $counterclass === 1 ? 'fadeInLeft' : 'fadeInRight' }}"
                            data-wow-duration="1s" data-wow-delay=".5s">
                    @endif

                    <div class="row app-feature">
                        <div class="col-12 col-lg-2 p-lg-0">
                            <i class="{{ $service->icon }}"></i>
                        </div>
                        <div class="col-12 col-lg-10 p-lg-0">
                            <h4 class="mb-3">{{ $service->title }}</h4>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                    @if ($counter == 3 || $counter === 3)
                      </div>
                    @endif
                    @if ($counter === 3)
                        @php
                            $counterclass++;
                        @endphp
                        <!-- App Slier -->
                        <div class="col-lg-4 mb-5 mb-lg-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <!-- App Image -->
                            <div class="app-image">
                                <img src=" {{ asset('front/images/loves.jpg') }}" alt="image"
                                    style= "width:251px !important; height:444px !important">
                            </div>
                        </div>
                    @endif
                 @endforeach

              </div>
        </div>
    </section>
    <!-- End About Section -->
