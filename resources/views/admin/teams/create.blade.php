@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.create_team'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('words.teams') }}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}" class="text-muted">{{ __('words.home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('teams.index') }}" class="text-muted">{{ __('words.show_teams') }}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{ __('words.create_team') }}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@extends('admin.components.create-form')
@section('form_action', route('teams.store'))
@section('form_type', 'POST')

@section('form_content')
    @method('post')
    <div class="card card-custom mb-2">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">{{ __('words.create_team') }}</h3>
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
                    <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}"
                        role="tabpanel">
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
                                    value="{{ old($locale . '.title') }}">
                                @error($locale . '[title]')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col form-group">
                            <label>{{ __('words.sub_title') }} - {{ __('words.locale-' . $locale) }}<span
                                    class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[sub_title]' }}"
                                    placeholder="{{ __('words.sub_title') }}"
                                    class="form-control  pl-5 min-h-40px @error($locale . '.sub_title') is-invalid @enderror"
                                    value="{{ old($locale . '.sub_title') }}">
                                @error($locale . '[sub_title]')
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
                                name="{{ $locale . '[description]' }}" rows="4">{{ old($locale . '.description') }} </textarea>
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
                <div class="input-group col-4">
                    <label>{{ __('words.facebook') }}</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                        </div>
                        <input type="text" name="facebook"
                            class="form-control link @error('facebook') is-invalid @enderror" value="{{ old('facebook') }}"
                            placeholder="{{ __('words.facebook') }}">

                        @error('facebook')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-group col-4">
                    <label>{{ __('words.instagram') }}</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                        </div>
                        <input type="text" name="instagram"
                            class="form-control link @error('instagram') is-invalid @enderror"
                            value="{{ old('instagram') }}" placeholder="{{ __('words.instagram') }}">

                        @error('instagram')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-group col-4">
                    <label>{{ __('words.twitter') }}</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fab fa-twitter-square"></i></span>
                        </div>
                        <input type="text" name="twitter"
                            class="form-control link @error('twitter') is-invalid @enderror" value="{{ old('twitter') }}"
                            placeholder="{{ __('words.twitter') }}">

                        @error('twitter')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group row">
                @include('admin.components.image', [
                    'label' => __('words.image'),
                    'value' => old('image'),
                    'name' => 'image',
                    'id' => 'kt_image_3',
                    'required' => false,
                ])

                @include('admin.components.switch', [
                    'label' => __('words.status'),
                    'name' => 'status',
                    'val' => old('status'),
                    'required' => false,
                ])

            </div>

        </div>

    </div>


    <div class="card-footer">
        <div class="row">
            <div class="col-4">
                <button type="submit" class="btn btn-block btn-outline-success">
                    {{ __('words.create') }}
                </button>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script>
        $("#form").submit(function(e) {
            e.preventDefault();
            let links = document.querySelectorAll('.link');
            links.forEach(function(link) {
                let position = link.value.includes('https');
                if (position > -1) {
                    let enhancedLink = link.value.replace("https://", "http://");
                    link.value = enhancedLink;
                }
            });
            this.submit();
        });
    </script>
@endsection
