@extends('admin.layouts.master')
@section('title',settings()->website_title .' | '. __('words.show_role'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{__('words.roles')}}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{route('admin.home')}}" class="text-muted">{{__('words.home')}}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('roles.index')}}" class="text-muted">{{__('words.show_roles')}}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{__('words.show_role')}}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header">
            <h3 class="card-title">{{__('words.show_role')}}</h3>
        </div>
        <div class="card-body p-10">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="mb-7 bg-light p-5 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">{{__('words.name')}}:</h5>
                        </div>
                        <p class="m-0">{{ $role->name }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-7 bg-light p-5 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">{{__('words.description')}}:</h5>
                        </div>
                        <p class="m-0">{{ $role->description }}</p>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="mb-7 bg-light p-5 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">{{__('words.updated_by')}}:</h5>
                        </div>
                        <p class="m-0">{{ $role->updated_by }}</p>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <div class="form-group row">
                @foreach (config('laratrust_seeder.roles') as $key => $values)
                    <div class="col-md-3">
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">{{__('words.'.$key)}}</h3>
                            </div>
                            <div class="card-body">
                                @foreach ($values as $value)
                                    <div class="form-group row">
                                        <label
                                            class="col-6 col-form-label {{$role->hasPermission($value . '-' . $key) ? 'text-success' : ''}}"
                                            for="{{$value . '-' . $key}}">{{__('words.'.$value)}}</label>
                                        <div class="col-6">
                                            <span class="switch switch-icon">
                                                <label>
                                                    <input type="checkbox" id="{{$value . '-' . $key}}"
                                                           disabled {{$role->hasPermission($value . '-' . $key) ? 'checked' : ''}}/>
                                                    <span></span>
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>

        @if(auth('admin')->user()->hasPermission('update-roles'))
            <div class="card-footer">
                <div class="row">
                    <div class="col-4">
                        <a href="{{route('roles.edit',$role->id)}}"
                           class="btn btn-block btn-outline-info">
                            {{__('words.edit')}}
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
