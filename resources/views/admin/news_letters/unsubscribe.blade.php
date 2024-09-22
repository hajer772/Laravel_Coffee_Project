<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--begin::Head-->
<head>
    <meta charset="utf-8"/>
    <title>{{settings()->website_title}}</title>
    <meta name="description" content="Login page example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="canonical" href="https://keenthemes.com/metronic"/>

    <!--end::Fonts-->
@if(App::isLocale('ar'))

    <!--begin::Page Custom Styles(used by this page)-->
        <link href="{{asset('dashboard/css/pages/login/classic/login-5.rtl.css')}}" rel="stylesheet" type="text/css"/>
        <!--end::Page Custom Styles-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="{{asset('dashboard/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('dashboard/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('dashboard/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <link href="{{asset('dashboard/css/themes/layout/header/base/light.rtl.css')}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('dashboard/css/themes/layout/header/menu/light.rtl.css')}}" rel="stylesheet"
              type="text/css"/>
        <link href="{{asset('dashboard/css/themes/layout/brand/dark.rtl.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('dashboard/css/themes/layout/aside/dark.rtl.css')}}" rel="stylesheet" type="text/css"/>
        <!--end::Layout Themes-->
@else
    <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
        <!--end::Fonts-->
        <!--begin::Page Custom Styles(used by this page)-->
        <link href="{{asset('dashboard/css/pages/login/classic/login-5.css')}}" rel="stylesheet" type="text/css"/>
        <!--end::Page Custom Styles-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="{{asset('dashboard/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('dashboard/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('dashboard/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <link href="{{asset('dashboard/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('dashboard/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('dashboard/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('dashboard/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css"/>
        <!--end::Layout Themes-->
    @endif

    <link rel="shortcut icon" href="{{settings()->favicon}}"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="{{asset('dashboard/css/custom.css')}}" rel="stylesheet" type="text/css"/>

</head>
<!--end::Head-->
<!--begin::Body-->
<body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}" id="kt_body"
      class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
@include('admin.includes.alerts.success')
@include('admin.includes.alerts.errors')
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
             style="background:linear-gradient(to bottom,rgba(29, 46, 64,0.2),rgba(29, 46, 64, 0.6)),url({{asset('dashboard/media/bg/bg-2.jpg')}})">
            <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-15">
                    <a href="#">
                        <img src="{{settings()->logo}}" class="max-h-75px" alt=""/>
                    </a>
                </div>
                <!--end::Login Header-->
                <div class="n">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-20">
                        <h1>{{settings()->website_title}}</h1>
                        <h3>Hello {{$user->email}},</h3>
                        <p>We are very sad to unsubscribe with to confirm your unsubscription please press below
                            button</p>
                        <form action="{{route('news-letters.unsubscribe_action')}}" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <button type="submit" class="btn btn-danger btn-sm">Unsubscribe</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <footer class="fixed-bottom">
        <div class="text-center text-white" style="background:linear-gradient(to bottom,rgba(29, 46, 64,0.8),rgba(29, 46, 64, 0.8));padding: 0.5rem;">{{settings()->copyrights}}</div>
    </footer>
</div>
<!--end::Main-->
@include('admin.includes.theme.scripts')
</body>
<!--end::Body-->
</html>
