@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.show_page'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('words.pages') }}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}" class="text-muted">{{ __('words.home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('pages.index') }}" class="text-muted">{{ __('words.show_pages') }}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{ __('words.show_page') }}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">{{ __('words.show_page') }}</h3>
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
        <div class="card-body p-10">
            <div class="tab-content">
                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}"
                         role="tabpanel">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="mb-7 bg-light p-5 rounded h-100">
                                    <div class="card-title">
                                        <h5 class="font-weight-bolder text-dark">{{ __('words.title') }}
                                            - {{ __('words.locale-' . $locale) }}:</h5>
                                    </div>
                                    <p class="m-0">{{ $page->translate($locale)->title }}</p>
                                </div>
                            </div>

                            @if ($page->has_sub_title == true)
                                <div class="col-md-6">
                                    <div class="mb-7 bg-light p-5 rounded h-100">
                                        <div class="card-title">
                                            <h5 class="font-weight-bolder text-dark">{{ __('words.sub_title') }}
                                                - {{ __('words.locale-' . $locale) }}:</h5>
                                        </div>
                                        <p class="m-0">{{ $page->translate($locale)->sub_title }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>

                        @if ($page->has_description == true)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-7 bg-light p-5 rounded h-100">
                                        <div class="card-title">
                                            <h5 class="font-weight-bolder text-dark">{{ __('words.description') }}
                                                - {{ __('words.locale-' . $locale) }}:</h5>
                                        </div>
                                        {!! $page->translate($locale)->description !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="row mb-3">
                    @if ($page->has_link == true)
                        <div class="col-md-2">
                            <div class="mb-7 bg-light p-5 rounded h-100">
                                <div class="card-title">
                                    <h5 class="font-weight-bolder text-dark">{{ __('words.link') }}:</h5>
                                </div>
                                <p class="m-0"><a href="{{ $page->link }}" target="_blank">{{ $page->link }}</a></p>
                            </div>
                        </div>
                    @endif

                    @if ($page->has_video == true)
                        <div class="col-md-2">
                            <div class="mb-7 bg-light p-5 rounded h-100">
                                <div class="card-title">
                                    <h5 class="font-weight-bolder text-dark">{{ __('words.video') }}:</h5>
                                </div>
                                <p class="m-0"><a href="{{ $page->video }}" target="_blank">{{ $page->video }}</a></p>
                            </div>
                        </div>
                    @endif

                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.created_at') }}:</h5>
                            </div>
                            <p class="m-0">{{ formatDate($page->created_at) }}</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.updated_at') }}:</h5>
                            </div>
                            <p class="m-0">
                                {{ formatDate($page->created_at) == formatDate($page->updated_at) ? '--' : formatDate($page->updated_at) }}
                            </p>
                        </div>
                    </div>
                </div>

                @if ($page->has_image == true)
                    <div class="row">
                        <div class="col-8">
                            <a href="{{$page->image}}"
                               data-toggle="lightbox" data-title="{{$page->title}}"
                               data-gallery="gallery">
                                <img src="{{ $page->image }}" class="img-fluid mb-2 image-galley"
                                     onerror="this.src='{{ asset('uploads/default_image.png') }}'" alt="page image"/>
                            </a>
                        </div>
                    </div>
                @endif
            </div>

            @permission('update-pages')
            <div class="card-footer">
                <div class="row">
                    <div class="col-4">
                        <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-block btn-outline-info">
                            {{ __('words.edit') }}
                        </a>
                    </div>
                </div>
            </div>
            @endpermission
        </div>
    </div>
@endsection
