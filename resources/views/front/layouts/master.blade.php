<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    
@include('front.layouts.head')
<body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}"
data-spy="scroll" data-target=".navbar" data-offset="90">

@include('front.layouts.header')

@yield("content")

@include("front.layouts.footer")

@include('front.layouts.scripts')

</body>
</html>