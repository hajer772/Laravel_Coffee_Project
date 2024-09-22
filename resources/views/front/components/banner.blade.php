<!-- Start Banner Section -->
<section class="page-title">
    <div class="bg-overlay bg-black opacity-6">   <img src=" {{ asset('front/images/coffee-left.jpg') }}" alt="slider"></div>
 

    <div class="container">
        <h2 class="hide-cursor">{{ trans("words.stand-banner-title") }}</h2>
        <ul class="page-breadcrumb link">
            <li><a href="{{ route("front.index") }}"><span class="icon fas fa-home"></span>{{ __("words.stand-banner-path1") }}</a></li>
            <li>{{ __("words.stand-banner-path2") }}</li>
        </ul>
    </div>
</section>
<!-- End Banner Section -->