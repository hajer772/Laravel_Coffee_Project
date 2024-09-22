<head>
    <meta charset="utf-8" />
    <title>@yield('title', settings()->website_title)</title>
    <meta name="description" content="Header dark theme example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <link href="{{ asset('dashboard/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
          type="text/css" />


@if (app()->getLocale() == 'ar')
    <!--begin::Page Vendors Styles(used by this page)-->
        <link href="{{ asset('dashboard/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css') }}" rel="stylesheet"
              type="text/css" />
        <!--end::Page Vendors Styles-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="{{ asset('dashboard/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard/plugins/custom/prismjs/prismjs.bundle.rtl.css') }}" rel="stylesheet"
              type="text/css" />
        <link href="{{ asset('dashboard/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <link href="{{ asset('dashboard/css/themes/layout/header/base/dark.rtl.css') }}" rel="stylesheet"
              type="text/css" />
        <link href="{{ asset('dashboard/css/themes/layout/header/menu/dark.rtl.css') }}" rel="stylesheet"
              type="text/css" />
        <link href="{{ asset('dashboard/css/themes/layout/brand/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard/css/themes/layout/aside/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
        <!-- Ekko Lightbox -->
        <link rel="stylesheet" href="{{ asset('Dashboard/plugins/ekko-lightbox/ekko-lightboxAr.css') }}">
        <!--end::Layout Themes-->
@else
    <!--begin::Page Vendors Styles(used by this page)-->
        <link href="{{ asset('dashboard/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
              type="text/css" />
        <!--end::Page Vendors Styles-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="{{ asset('dashboard/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet"
              type="text/css" />
        <link href="{{ asset('dashboard/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard/css/pages/error/error-6.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <link href="{{ asset('dashboard/css/themes/layout/header/base/dark.css') }}" rel="stylesheet"
              type="text/css" />
        <link href="{{ asset('dashboard/css/themes/layout/header/menu/dark.css') }}" rel="stylesheet"
              type="text/css" />
        <link href="{{ asset('dashboard/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />

        <!-- Ekko Lightbox -->
        <link rel="stylesheet" href="{{ asset('Dashboard/plugins/ekko-lightbox/ekko-lightbox.css') }}">
        <!--end::Layout Themes-->
    @endif


    <link href="{{ asset('dashboard/css/custom.css') }}" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="{{ settings()->favicon }}" />

    @yield('styles')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link href="{{ asset('dashboard/css/iconpicker-1.5.0.css') }}" rel="stylesheet" type="text/css" />

    @stack('scripts')
</head>
