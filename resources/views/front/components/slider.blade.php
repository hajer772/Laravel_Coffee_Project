<!-- Start Slider Section -->
<section class="slider p-md-0">
    <div class="swiper-container">
        <div class="swiper-wrapper">


            @php
                $counter = 0;

            @endphp

            @foreach ($sliders as $slider)
                @php
                    $counter++;
                @endphp
                <!-- First Slide -->
                <div class="swiper-slide">
                    <div class="bg-overlay bg-black opacity-4"></div>

                    <img src=" {{ $slider->image }}" alt="slider">
                    <div class="container slider-text">

                        <div class="row">
                            @if ($counter === 1)
                                <div class="col-12 col-md-6"></div>
                            @endif

                            <div
                                class="col-12 {{ $counter === 2 ? 'col-md-8 col-lg-7 offset-md-2 offset-lg-3' : 'col-md-6' }} text-center mb-0 mb-md-5 {{ $counter === 2 ? '' : (App::isLocale('ar') ? 'text-md-right' : 'text-md-left') }}">

                                <h1 class="main-font slider-heading">{{ $slider->subtitle }} <span
                                        class="d-block">{{ $slider->title }}</span></h1>
                                <p class="alt-font slider-para py-2">{{ $slider->description }}</p>
                                <a href="#about"
                                    class="scroll btn button btn-medium btn-rounded btn-white mb-5">{{ $slider->button }}</a>
                            </div>


                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- Social Icons -->
    <ul class="social-icons social-icons-simple revicon white d-none d-lg-block">

        @php
            $counter = 0;
        @endphp
        @foreach ($contacts as $contact)
            @php
                $counter++;
            @endphp

            @if ($counter === 3 || $counter === 6)
                @continue
            @endif
            <li class="d-table"><a href="javascript:void(0)" class="social-icon"><i class="{{ $contact->icon }}"></i>
                </a> </li>
        @endforeach

    </ul>
</section>
<!-- End Slider Section-->
