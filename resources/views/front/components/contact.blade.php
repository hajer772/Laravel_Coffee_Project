<!-- Start Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <!-- Map area -->
            <div class="col-12 col-md-7 pl-md-0 wow fadeInLeft order-2 order-md-1 padding-top" data-wow-duration="1s"
                data-wow-delay=".5s">
                <div class="mapouter">
                    <div id="map" class="full-map bg-img-map"></div>
                </div>
            </div>
            <!-- Form area -->
            <div class="col-12 col-md-5 pr-md-0 wow fadeInRight order-1 order-md-2" data-wow-duration="1s"
                data-wow-delay=".5s">
                <div class="heading-area">
                    <div class="mb-4"><img src=" {{ asset('front/images/gallery-border.png') }}" alt="Border">
                    </div>
                    <h2 class="title main-font text-main mb-2">{{ __('words.contact-title') }}</h2>
                </div>
                <!-- Contact Form -->
                <form method='post'class="contact-form" id="contact-form-data" action="{{ route('front.send') }}">
                    @csrf
                    <div id="result"></div>
                    <!-- Name Field -->
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="{{ __('words.contact-input-name') }}"
                            required="" id="userName" name="userName">
                    </div>
                    <!-- Email Field -->
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="{{ __('words.contact-input-email') }}"
                            required="" id="userEmail" name="userEmail">
                    </div>
                    <!-- Contact Field -->
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="{{ __('words.contact-input-contact') }}"
                            required="" id="contact" name="contact">
                    </div>
                    <!-- Message Field -->
                    <div class="form-group">
                        <textarea class="form-control" placeholder="{{ __('words.contact-textarea') }}" id="userMessage" name="userMessage"></textarea>
                    </div>
                    <!--Button-->
                    {{-- <div class="form-group">
                        <div id='message' style="display: none; "> <span class="badge badge-success">Your order has been sent successfully!</span> </div>
                    </div> --}}

                    <button type="submit" href="javascript:void(0);" id="submit_btn" onclick="m()"
                        class="contact_btn btn button btn-medium btn-rounded btn-grey w-100 d-block mt-5 mb-3 ">
                        {{ __('words.contact-button') }}</button>
                    {{-- <button type='submit' id="try" onclick="m()"> ok</button> --}}
                </form>

                @if ($errors->any())
                    <div class="message error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @elseif (session()->has('success'))
                    <div class="message alert alert-success alert-dismissible">
                        <span class="close">&times;</span>
                        <strong> {{ __("words.message-confirmation") }}</strong>
                      </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->
