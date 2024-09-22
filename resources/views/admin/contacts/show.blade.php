@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.show_contact'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('words.contacts') }}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}" class="text-muted">{{ __('words.home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('contacts.index') }}" class="text-muted">{{ __('words.show_contacts') }}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{ __('words.show_contact') }}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">{{ __('words.show_contact') }}</h3>
            </div>
             @if(count(config('translatable.locales')) !== 1)
                <div class="card-toolbar">
                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                        @foreach (config('translatable.locales') as $key => $locale)
                            <li class="nav-item">
                                <a class="nav-link  @if ($key == 0) active @endif" data-toggle="tab"
                                   href="{{ '#' . $locale }}">{{ __('words.locale-' . $locale) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-12 col-sm-6 mb-5">
                        <div class="bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.type') }}:</h5>
                            </div>
                            <span
                                class="badge
                                    @if ($contact->type === 'telephone') badge-success
                                    @elseif($contact->type === 'mobile') badge-danger
                                    @elseif($contact->type === 'email') badge-warning
                                    @else badge-primary @endif">{{ __('words.' . $contact->type) }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-5">
                        <div class="bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.contact') }}:</h5>
                            </div>
                            <p class="m-0" dir="ltr" style="text-align: match-parent;">
                                {{ $contact->contact }}
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-5">
                        <div class="bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.status') }}:</h5>
                            </div>
                            <span
                                class="badge
                            @if ($contact->status === 1) badge-success text-white
                            @else badge-secondary text-dark @endif">{{ $contact->getActive() }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-5">
                        <div class="bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.icon') }}:</h5>
                            </div>
                            <p class="m-0 phone">
                                {{ $contact->icon }}
                            </p>
                        </div>
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col-12 col-sm-6 mb-5">
                        <div class="bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.created_at') }}:</h5>
                            </div>
                            <p class="m-0">{{ formatDate($contact->created_at) }}</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 mb-5">
                        <div class="bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.updated_at') }}:</h5>
                            </div>
                            <p class="m-0">
                                {{ formatDate($contact->created_at) == formatDate($contact->updated_at) ? '--' : formatDate($contact->updated_at) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            @permission('update-contacts')
                <div class="card-footer">
                    <div class="row">
                        <div class="col-4">
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-block btn-outline-info">
                                {{ __('words.edit') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endpermission
        </div>
    </div>
@endsection
