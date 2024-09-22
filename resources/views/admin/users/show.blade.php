@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.show_admin'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('words.roles') }}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}" class="text-muted">{{ __('words.home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('admin-users.index') }}" class="text-muted">{{ __('words.show_admins') }}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{ __('words.show_admin') }}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header">
            <h3 class="card-title">{{ __('words.show_role') }}</h3>
        </div>
        <div class="card-body p-10">
            <div class="row mb-3">
                <div class="col-md-3">
                    <div class="mb-7 bg-light p-5 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">{{ __('words.first_name') }}:</h5>
                        </div>
                        <p class="m-0">{{ $user->first_name }}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-7 bg-light p-5 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">{{ __('words.last_name') }}:</h5>
                        </div>
                        <p class="m-0">{{ $user->last_name ? $user->last_name : '--' }}</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-7 bg-light p-5 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">{{ __('words.email') }}:</h5>
                        </div>
                        <p class="m-0">{{ $user->email }}</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-7 bg-light p-5 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">{{ __('words.activity') }}:</h5>
                        </div>
                        <p class="m-0"><span class="badge rounded-pill text-white {{$user->active == 1 ? 'bg-success' : 'bg-danger'}}">{{ $user->getActive() }}</span></p>
                    </div>
                </div>

            </div>

            <div class="row mb-3">
                <div class="col-md-3">
                    <div class="mb-7 bg-light p-5 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">{{ __('words.created_by') }}:</h5>
                        </div>
                        <p class="m-0">{{ $user->created_by }}</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-7 bg-light p-5 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">{{ __('words.created_at') }}:</h5>
                        </div>
                        <p class="m-0">{{ formatDate($user->created_at) }}</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-7 bg-light p-5 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">{{ __('words.updated_by') }}:</h5>
                        </div>
                        <p class="m-0">{{ $user->updated_by ? $user->updated_by : '--' }}</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-7 bg-light p-5 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">{{ __('words.updated_at') }}:</h5>
                        </div>
                        <p class="m-0">
                            {{ formatDate($user->created_at) == formatDate($user->updated_at) ? '--' : formatDate($user->updated_at) }}
                        </p>
                    </div>
                </div>
            </div>
            <br>

        </div>

        @if (auth('admin')->user()->hasPermission('update-admins'))
            <div class="card-footer">
                <div class="row">
                    <div class="col-4">
                        <a href="{{ route('admin-users.edit', $user->id) }}" class="btn btn-block btn-outline-info">
                            {{ __('words.edit') }}
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
