@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.create_page'))
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
                <span class="text-muted">{{ __('words.create_page') }}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@extends('admin.components.create-form')
@section('form_action', route('pages.store'))
@section('form_type', 'POST')

@section('form_content')
    @method('post')
    <div class="card card-custom mb-2">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">{{ __('words.create_page') }}</h3>
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
                            <label>{{ __('words.title') }} - {{ __('words.locale-' . $locale) }}<span
                                    class="text-danger">
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

                        <div class="col form-group sub-title-container">
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

                        <div class="col form-group description-container">
                            <label>{{ __('words.description') }}({{ __('words.locale-' . $locale) }})<span
                                    class="text-danger">*</span></label>
                            <textarea
                                class="form-control ckeditor @error($locale . '.description') is-invalid @enderror "
                                type="text"
                                name="{{ $locale . '[description]' }}"
                                rows="4">{{ old($locale . '.description') }} </textarea>
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
           <div class="container-fluid">
               <div class="row">
                   {{-- Has Title start --}}
                   <div class="col form-group">
                       <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="has_title" value="1"
                                  {{old('has_title') ? "checked" : ""}} id="has_title">
                           @error('has_title')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                           @enderror
                           <label class="form-check-label" for="flexCheckDefault">
                               {{ __('words.has_title') }}
                           </label>
                       </div>
                   </div>
                   {{-- Has Title end --}}

                   {{-- Has Subtitle start --}}
                   <div class="col form-group">
                       <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="has_sub_title" value="1"
                                  {{old('has_sub_title') ? "checked" : ""}} id="has_sub_title">
                           @error('has_sub_title')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                           @enderror
                           <label class="form-check-label" for="flexCheckDefault">
                               {{ __('words.has_sub_title') }}
                           </label>
                       </div>
                   </div>
                   {{-- Has Subtitle end --}}

                   {{-- Has discreption start --}}
                   <div class="col form-group">
                       <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="has_description" value="1"
                                  {{old('has_description') ? "checked" : ""}} id="has_description">
                           @error('has_description')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                           @enderror
                           <label class="form-check-label" for="flexCheckDefault">
                               {{ __('words.has_description') }}
                           </label>
                       </div>
                   </div>
                   {{-- Has discreption end --}}

                   {{-- Has link start --}}
                   <div class="col form-group">
                       <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="has_link" value="1" {{old('has_link') ? "checked" : ""}} id="has_link">
                           @error('has_link')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                           @enderror
                           <label class="form-check-label" for="has_link">
                               {{ __('words.has_link') }}
                           </label>
                       </div>
                   </div>
                   {{-- Has link end --}}

                   {{-- Has video start --}}
                   <div class="col form-group">
                       <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="has_video" value="1" {{old('has_video') ? "checked" : ""}} id="has_video">
                           @error('has_video')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                           @enderror
                           <label class="form-check-label" for="has_video">
                               {{ __('words.has_video') }}
                           </label>
                       </div>
                   </div>
                   {{-- Has video start --}}

                   {{-- Has image start --}}
                   <div class="col form-group">
                       <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="has_image" value="1" {{old('has_image') ? "checked" : ""}} id="has_image">
                           @error('has_image')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                           @enderror
                           <label class="form-check-label" for="has_image">
                               {{ __('words.has_image') }}
                           </label>
                       </div>
                   </div>
                   {{-- Has image start --}}
               </div>
               <div class="row">
                   {{-- identifier start --}}
                   <div class="col form-group">
                       <label>{{ __('words.identifier') }}<span class="text-danger"> * </span></label>
                       <div class="input-group">
                           <div class="input-group-prepend">
                               <span class="input-group-text"><i class="flaticon-edit"></i></span>
                           </div>
                           <input type="text" name="{{ 'identifier' }}" placeholder="{{ __('words.identifier') }}"
                                  class="form-control  pl-5 min-h-40px @error('identifier') is-invalid @enderror"
                                  value="{{ old('identifier') }}">
                           @error('[identifier]')
                           <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                       </div>
                   </div>
                   {{-- identifier end --}}

                   {{-- link start --}}
                   <div class="col form-group" id="link-container">
                       <label>{{ __('words.link') }}<span class="text-danger"></span></label>
                       <div class="input-group">
                           <div class="input-group-prepend">
                               <span class="input-group-text"><i class="flaticon-edit"></i></span>
                           </div>
                           <input type="text" name="{{ 'link' }}" placeholder="{{ __('words.link') }}"
                                  class="form-control  pl-5 min-h-40px @error('link') is-invalid @enderror"
                                  value="{{ old('link') }}">
                           @error('[link]')
                           <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                       </div>
                   </div>
                   {{-- link end --}}

                   {{-- video start --}}
                   <div class="col form-group" id="video-container">
                       <label>{{ __('words.video') }}<span class="text-danger"></span></label>
                       <div class="input-group">
                           <div class="input-group-prepend">
                               <span class="input-group-text"><i class="flaticon-edit"></i></span>
                           </div>
                           <input type="text" name="{{ 'video' }}" placeholder="{{ __('words.video') }}"
                                  class="form-control  pl-5 min-h-40px @error('video') is-invalid @enderror"
                                  value="{{ old('video') }}">
                           @error('[video]')
                           <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
                       </div>
                   </div>
                   {{-- video end --}}
               </div>

               <div class="row">
                      <div class="col" id="image_container">
                          @include('admin.components.image', [
                          'label' => __('words.image'),
                          'value' => old('image'),
                          'name' => 'image',
                          'id' => 'kt_image_5',
                          'required' => false,
                      ])
                      </div>

               </div>
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
    <script src="{{ @asset('js/handlePagesInputs.js') }}"></script>
@endsection
