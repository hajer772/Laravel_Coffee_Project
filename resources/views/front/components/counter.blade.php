<!-- Start Counters Section -->
<section class="parallax bg-img1">
    <div class="container">
        <div class="row">
            <!-- Counter-1 -->
            <div class="bg-overlay bg-black opacity-4"></div>

            @foreach ($counters as $counter )
            <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="parallax-box text-white">
                    <i class="{{ $counter->icon }}" aria-hidden="true"></i>
                    <h2 class="count">{{ $counter->number }}</h2>
                    <h5>{{ $counter->title }}</h5>
                </div>
            </div>
            @endforeach
        
        </div>
    </div>
</section>
<!-- End Counters Section -->