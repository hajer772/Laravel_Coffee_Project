<!-- JavaScript -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4fusEY9kSwNHgtK8KOgyoTsyP5Tb2NXo"></script>


<script src=" {{ asset('front/js/bundle.min.js') }}"></script>

<!-- Plugin Js -->

<script src=" {{ asset('front/js/jquery.appear.js') }}"></script>

<script src=" {{ asset('front/js/wow.min.js') }}"></script>
<script src=" {{ asset('front/js/parallaxie.min.js') }}"></script>
<script src=" {{ asset('front/js/jquery.fancybox.min.js') }}"></script>
<script src=" {{ asset('front/js/map.js') }}"></script>

<!-- CUSTOM JS -->
<script src=" {{ asset('front/js/contact_us.js') }}"></script>
<script src=" {{ asset('front/js/script.js') }}"></script>
<script src=" {{ asset('front/js/owl.carousel.min.js') }}"></script>

<!-- CUSTOM JS -->
<script src=" {{ asset('front/js/swiper.min.js') }}"></script>

@if (app()->getLocale() == 'ar')
    <script src=" {{ asset('front/js/owl.carousel.min.ar.js') }}"></script>
@else
    <script src=" {{ asset('front/js/owl.carousel.min.js') }}"></script>
@endif
<!-- javascript -->
