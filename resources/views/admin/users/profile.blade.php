@extends('admin.layouts.master')
@section('title',settings()->website_title .' | '. __('words.profile'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{__('words.profile')}}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{route('admin.home')}}" class="text-muted">{{__('words.home')}}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{__('words.profile')}}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">{{__('words.profile')}}</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-custom alert-danger" role="alert">
                    <div class="alert-text">
                        @foreach ($errors->all() as $error)
                            <span class="d-flex align-items-center">
                            <div class="alert-icon" style="padding-inline-end: 5px">
                                <i style="font-size: 14px" class="flaticon-warning"></i>
                            </div> {{ $error }}
                        </span>
                        @endforeach
                    </div>
                </div>
            @endif

            <form action="{{route('admin.profile.update',$profile->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$profile->id}}">
                <div class="row">
                    <div class="input-group col-6 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="first_name"
                               class="form-control @error('first_name') is-invalid @enderror"
                               value="{{$profile->first_name}}"
                               placeholder="{{__('words.first_name')}}">
                    </div>

                    <div class="input-group col-6 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="last_name"
                               class="form-control @error('last_name') is-invalid @enderror"
                               value="{{ $profile->last_name }}"
                               placeholder="{{__('words.last_name')}}">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group col-6 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" name="email"
                               class="form-control @error('email') is-invalid @enderror" disabled
                               value="{{$profile->email}}" placeholder="{{__('words.email')}}">
                    </div>

                    <div class="input-group col-6 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               value="{{ old('password') }}" placeholder="{{__('words.password')}}"
                               autocomplete="off" readonly
                               onfocus="this.removeAttribute('readonly');">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group col-6 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" name="password_confirmation"
                               class="form-control @error('password_confirmation') is-invalid @enderror"
                               value="{{ old('password_confirmation') }}"
                               placeholder="{{__('words.confirm_password')}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="d-block">{{__('words.profile_image')}}</label>
                            <div class="image-input-wrapper"
                                 style="background-image: url({{ $profile->image }}">
                            </div>
                            <div class="image-input image-input-empty image-input-outline" id="kt_image_3"
                                 style="background-image: url({{ $profile->image}})">
                                <div class="image-input-wrapper"></div>
                                <label
                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="image" accept="image/*"/>
                                    <input type="hidden" name="profile_avatar_remove"/>
                                </label>
                                <span
                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                                <span
                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                @if(auth('admin')->user()->hasPermission('updateProfile-admins'))
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-block btn-outline-success">
                                    {{__('words.update')}}
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
