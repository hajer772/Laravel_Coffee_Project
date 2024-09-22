@extends('admin.layouts.master')

@section('breadcrumb')
@include('admin.includes.breadcrumb',['first_title' => ''])
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <h1>{{settings()->website_title}}</h1>
            </div>
        </div>

        <div class="row">
{{--            <div class="col-12 d-flex align-items-center justify-content-center">--}}
{{--                <img src="{{settings()->logo}}" class="img-fluid rounded" style="width: 200px;" alt="logo">--}}
{{--            </div>--}}

            @permission('read-admins')
            <div class="col-xl-4">
                <div class="card card-custom card-stretch gutter-b wave wave-primary wave-animate-slow">
                    <div class="card-body">
                        <i class="flaticon-users fa-3x"></i>
                        <span class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block">{{ \App\Models\Admin::count() }}</span>
                        <span class="font-weight-bold font-size-sm"><a href="{{route('admin-users.index')}}">{{__('words.admins')}}</a></span>
                    </div>
                </div>
            </div>
            @endpermission

            @permission('read-projects')
            <div class="col-xl-4">
                <div class="card card-custom card-stretch gutter-b wave wave-primary wave-animate-slow">
                    <div class="card-body">
                        <i class="fas fa-project-diagram  fa-3x"></i>
                        <span class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block">{{ \App\Models\Project::count() }}</span>
                        <span class="font-weight-bold font-size-sm"><a href="{{route('projects.index')}}">{{__('words.projects')}}</a></span>
                    </div>
                </div>
            </div>
            @endpermission

            @permission('read-services')
            <div class="col-xl-4">
                <div class="card card-custom card-stretch gutter-b wave wave-primary wave-animate-slow">
                    <div class="card-body">
                        <i class="fab fa-servicestack fa-3x"></i>
                        <span class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block">{{ \App\Models\Service::count() }}</span>
                        <span class="font-weight-bold font-size-sm"><a href="{{route('services.index')}}">{{__('words.services')}}</a></span>
                    </div>
                </div>
            </div>
            @endpermission
        </div>
    </div>
@endsection
