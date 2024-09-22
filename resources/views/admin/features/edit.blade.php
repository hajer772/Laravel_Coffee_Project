@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.edit_feature'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('words.features') }}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}" class="text-muted">{{ __('words.home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('features.index') }}" class="text-muted">{{ __('words.show_features') }}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{ __('words.edit_feature') }}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@extends('admin.components.create-form')
@section('form_action', route('features.update', $feature->id))
@section('form_type', 'POST')

@section('form_content')
    @method('put')
    <input type="hidden" name="id" value="{{ $feature->id }}">
    <div class="card card-custom mb-2">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">{{ __('words.edit_feature') }}</h3>
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
        <div class="card-body">
            <div class="tab-content">
                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="tab-pane fade show @if ($key == 0) active @endif"
                        id="{{ $locale }}" role="tabpanel">
                        <div class="col form-group">
                            <label>{{ __('words.title') }} - {{ __('words.locale-' . $locale) }}<span class="text-danger">
                                    * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[title]' }}"
                                    placeholder="{{ __('words.title') }}"
                                    class="form-control  pl-5 min-h-40px @error($locale . '.title') is-invalid @enderror"
                                    value="{{ old($locale . '.title', $feature->translate($locale)->title) }}">
                                @error($locale . '[title]')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col form-group">
                            <label>{{ __('words.description') }}({{ __('words.locale-' . $locale) }})<span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control ckeditor @error($locale . '.description') is-invalid @enderror " type="text"
                                name="{{ $locale . '[description]' }}" rows="4">{{ old($locale . '.description', $feature->translate($locale)->description) }} </textarea>
                            @error($locale . '[description]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="card card-custom">
        <div class="card-body">
            <div class="form-group row">
                @include('admin.components.icon', [
                    'label' => __('words.icon'),
                    'value' => old('icon', $feature->icon),
                    'required' => false,
                ])
            </div>

            <div class="form-group row">
                @include('admin.components.switch', [
                    'label' => __('words.status'),
                    'name' => 'status',
                    'val' => old('status', $feature->status),
                    'required' => false,
                ])
            </div>
        </div>
    </div>


    <div class="card-footer">
        <div class="row">
            <div class="col-4">
                <button type="submit" class="btn btn-block btn-outline-success">
                    {{ __('words.update') }}
                </button>
            </div>
        </div>
    </div>


@endsection
