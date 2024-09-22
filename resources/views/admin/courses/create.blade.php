@extends('admin.layouts.master')
@section('title',settings()->website_title .' | '. __('words.create_course'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{__('words.courses')}}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{route('admin.home')}}" class="text-muted">{{__('words.home')}}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('courses.index')}}" class="text-muted">{{__('words.show_courses')}}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{__('words.create_course')}}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@extends('admin.components.create-form')
@section('form_action',route('courses.import'))
@section('form_type', 'POST')

@section('form_content')
    @method('post')
    <div class="card card-custom">
        <div class="card-body">

            <div class="form-group row">
                @include('admin.components.files',['label'=>__('words.files'),'name'=>'courses','multi'=>'','accept' => 'application/msword, application/vnd.ms-excel,.xlsx, application/vnd.ms-powerpoint,text/plain, application/pdf'])
            </div>

        </div>

    </div>


    <div class="card-footer">
        <div class="row">
            <div class="col-4">
                <button type="submit" class="btn btn-block btn-outline-success">
                    {{__('words.create')}}
                </button>
            </div>
        </div>
    </div>


@endsection
