@extends('admin.layouts.master')
@section('title',settings()->website_title .' | '. __('words.create_admin'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{__('words.roles')}}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{route('admin.home')}}" class="text-muted">{{__('words.home')}}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('admin-users.index')}}" class="text-muted">{{__('words.show_admin')}}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{__('words.create_admin')}}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">{{__('words.create_admin')}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{route('admin-users.store')}}" method="POST" autocomplete="off"
                  enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    <div class="row">
                        <div class="input-group col-6 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="first_name"
                                   class="form-control @error('first_name') is-invalid @enderror"
                                   value="{{ old('first_name') }}" placeholder="{{__('words.first_name')}}">
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
                        </div>

                        <div class="input-group col-6 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="last_name"
                                   class="form-control @error('last_name') is-invalid @enderror"
                                   value="{{ old('last_name') }}" placeholder="{{__('words.last_name')}}">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group col-6 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}" placeholder="{{__('words.email')}}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
                        </div>

                        <div class="input-group col-6 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   value="{{ old('password') }}" placeholder="{{__('words.password')}}">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
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

                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>{{__('words.roles')}}</label>
                            <select name="role_id"
                                    class="form-control @error('role_id') is-invalid @enderror">
                                <option value="" selected>{{__('words.choose')}}</option>
                                @foreach($roles as $role)
                                    <option
                                        value="{{$role->id}}" {{old('role_id') == $role->id ? "selected" : ""}}>{{$role->name}}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 input">
                            <label for="active" class="checkbox-inline">{{__('words.active')}}</label>

                            <span class="switch switch-icon">
                                <label>
                                    <input type="checkbox" id="active"
                                           name="active" value="1"/>
                                    <span></span>
                                </label>
                            </span>
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
            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
