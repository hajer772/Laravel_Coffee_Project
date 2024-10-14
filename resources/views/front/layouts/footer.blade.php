<!-- Start Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-12 text-center">
                <div class="footer-social">
                    <ul class="list-unstyled social-icons social-icons-simple">
                        @foreach ($contacts as $contact)
                            <li>
                                @if ($contact->type==="email")
                                <a class="social-icon wow fadeInUp" href="mailto:{{ $contact->contact }}" target="_blank"> <i
                                    class="{{ $contact->icon }}" aria-hidden="true"></i> </a> 
                                @else
                                
                                <a class="social-icon wow fadeInUp" href="{{ $contact->contact }}" target="_blank"> <i
                                        class="{{ $contact->icon }}" aria-hidden="true"></i> </a> 
                                    
                                @endif
                                    </li>
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
