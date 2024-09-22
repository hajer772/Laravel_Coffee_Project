<!-- Start Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-12 text-center">
                <div class="footer-social">
                    <ul class="list-unstyled social-icons social-icons-simple">
                        @foreach ($contacts as $contact)
                            <li><a class="social-icon wow fadeInUp" href="javascript:void(0)"><i
                                        class="{{ $contact->icon }}" aria-hidden="true"></i> </a> </li>
                        @endforeach

                    </ul>
                </div>
                <!--Text-->
                <p class="company-about fadeIn text-white">&copy; {{ __("words.love_made") }} <a
                        href="javascript:void(0);">{{ __("words.theme") }}</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Section -->
