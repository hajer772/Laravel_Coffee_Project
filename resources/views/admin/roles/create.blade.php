@extends('admin.layouts.master')
@section('title',settings()->website_title .' | '. __('words.create_role'))
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
                <span class="text-muted">{{__('words.create_role')}}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    @if ($errors->has('permissions'))
        <div class="row mr-2 ml-2">
            <div class="alert alert-danger alert-dismissible fade show btn-block text-center mb-2" role="alert">
                <div class="error">{{ $errors->first('permissions') }}</div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

    @endif

    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">{{__('words.create_role')}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{route('roles.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-6 mb-3">
                        <label for="name">{{__('words.name')}}</label>
                        <input type="text" name="name"
                               class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name') }}" placeholder="{{__('words.name')}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-6 mb-3">
                        <label for="description">{{__('words.description')}}</label>
                        <input type="text" name="description"
                               class="form-control @error('description') is-invalid @enderror"
                               value="{{ old('description') }}" placeholder="{{__('words.description')}}">
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <hr>

                <div class="form-group row">
                    <label class="col-6 col-form-label">{{__('words.all')}}</label>
                    <div class="col-6">
                                            <span class="switch switch-brand">
                                                <label>
                                                    <input type="checkbox" id="check_all" name="permissions">
                                                    <span></span>
                                                </label>
                                            </span>
                    </div>
                </div>
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
                                            <label class="col-6 col-form-label"
                                                   for="{{$value . '-' . $key}}">{{__('words.'.$value)}}</label>
                                            <div class="col-6">
                                            <span class="switch switch-icon">
                                                <label>
                                                    <input type="checkbox" id="{{$value . '-' . $key}}"
                                                           name="permissions[]" value="{{$value . '-' . $key}}"/>
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
@section('scripts')

@endsection
