@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.show_news_letter'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('words.news_letters') }}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}" class="text-muted">{{ __('words.home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('news-letters.index') }}" class="text-muted">{{ __('words.show_news_letters') }}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{ __('words.show_news_letter') }}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card card-custom">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.subject') }}:</h5>
                            </div>
                            <p class="m-0">{!! $newsLetter->subject !!}</p>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.message') }}:</h5>
                            </div>
                            <p class="m-0">{!! $newsLetter->message !!}</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.created_at') }}:</h5>
                            </div>
                            <p class="m-0">{{ formatDate($newsLetter->created_at) }}</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.updated_at') }}:</h5>
                            </div>
                            <p class="m-0">
                                {{ formatDate($newsLetter->created_at) == formatDate($newsLetter->updated_at) ? '--' : formatDate($newsLetter->updated_at) }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            @permission('resend-news_letters')
                <div class="card-footer">
                    <div class="row">
                        <div class="col-4">
                            <a href="{{ route('news-letters.edit', $newsLetter->id) }}" class="btn btn-block btn-outline-info">
                                {{ __('words.resend') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endpermission
        </div>
    </div>
@endsection
