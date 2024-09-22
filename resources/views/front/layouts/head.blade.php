<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="Creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>@yield("title") </title>
    <link href="{{ asset('front/images/favicon.ico') }}" rel="icon">

    @if (app()->getLocale() == 'ar')
     
        <!-- Bundle -->
        <link href="{{ asset('front/css/bundle.min.ar.css') }}" rel="stylesheet">
        <!-- Plugin Css -->
        <link href="{{ asset('front/css/owl.carousel.min.ar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/jquery.fancybox.min.css') }}">

        <link rel="stylesheet" href="{{ asset('front/css/swiper.min.ar.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/LineIcons.min.ar.css') }}">
        <!-- Style Sheet -->
        <link href="{{ asset('front/css/line-awesome.min.ar.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/style.ar.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet"> --}}
@else

    <!-- Favicon -->
    <!-- Bundle -->
    <link href="{{ asset('front/css/bundle.min.css') }}" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="{{ asset('front/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/LineIcons.min.css') }}">
    <!-- Style Sheet -->
    <link href="{{ asset('front/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet"> --}}

    @endif
</head>
