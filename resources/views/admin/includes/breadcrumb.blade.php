<div class="d-flex align-items-baseline flex-wrap mr-5">
    <!--begin::Page Title-->
    <h5 class="text-dark font-weight-bold my-1 mr-5"><a href="{{route('admin.home')}}" class="text-muted">{{__('words.home')}}</a></h5>
    <!--end::Page Title-->
    <!--begin::Breadcrumb-->
    @if($first_title != '')
    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
        <li class="breadcrumb-item">
            <a href="{{route($first_route)}}" class="text-muted">{{$first_title}}</a>
        </li>
        @if($second_title != '')
        <li class="breadcrumb-item">
            <a href="{{route($second_title)}}" class="text-muted">{{$second_title}}</a>
        </li>
        @endif
    </ul>
    @endif
    <!--end::Breadcrumb-->
</div>
