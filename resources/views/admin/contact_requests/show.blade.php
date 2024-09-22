@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.show_contact_requests'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('words.contact_requests') }}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}" class="text-muted">{{ __('words.home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('contact_requests.index') }}" class="text-muted">{{ __('words.show_contact_requests') }}</a>
            </li>
            <li class="breadcrumb-item">
                <apan class="text-muted">{{ __('words.show_contact_requests') }}</apan>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">{{ __('words.show_contact_requests') }}</h3>
            </div>

        </div>
        <div class="card-body p-10">
            <div class="tab-content">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.name') }}
                                    :</h5>
                            </div>
                            <p class="m-0 text-capitalize">{{ $contact_request->name }}</p>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.email') }}
                                    :</h5>
                            </div>
                            {{ $contact_request->email }}
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.phone') }}
                                    :</h5>
                            </div>
                            {{ $contact_request->phone }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <div class="bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.created_at') }}:</h5>
                            </div>
                            <p class="m-0">{{ formatDate($contact_request->created_at) }}</p>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="mb-7 bg-light p-5 rounded h-100 text-capitalize">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.message') }}
                                    :</h5>
                            </div>
                            {{ $contact_request->message }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
