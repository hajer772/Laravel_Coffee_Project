@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.edit_contact'))
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
                <span class="text-muted">{{ __('words.edit_contact') }}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@extends('admin.components.create-form')
@section('form_action', route('contacts.update', $contact->id))
@section('form_type', 'POST')

@section('form_content')
    @method('put')
    <input type="hidden" name="id" value="{{ $contact->id }}">
    <div class="card card-custom">
        <div class="card-body">
            <div class="form-group row">
                <div class="form-group col-12 col-sm-5 col-md-4 col-xl-3">
                    <label for="type">{{ __('words.type') }}</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-random"></i></span>
                        </div>
                        <select id="type" name="type" class="form-control @error('type') is-invalid @enderror">
                            <option value="" hidden>{{ __('words.choose') }}</option>
                            <option value="telephone" {{ old('type', $contact->type) == 'telephone' ? 'selected' : '' }}>
                                {{ __('words.telephone') }}
                            </option>
                            <option value="mobile" {{ old('type', $contact->type) == 'mobile' ? 'selected' : '' }}>
                                {{ __('words.mobile') }}
                            </option>
                            <option value="whatsapp" {{ old('type', $contact->type) == 'whatsapp' ? 'selected' : '' }}>
                                {{ __('words.whatsapp') }}
                            </option>
                            <option value="email" {{ old('type', $contact->type) == 'email' ? 'selected' : '' }}>
                                {{ __('words.email') }}
                            </option>
                            <option value="social" {{ old('type', $contact->type) == 'social' ? 'selected' : '' }}>
                                {{ __('words.social') }}</option>
                        </select>
                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-12 col-sm-7 col-md-8 col-xl-9">
                    <label>{{ __('words.contact') }}</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-handshake"></i></span>
                        </div>
                        <input type="text" name="contact" dir="ltr" style="text-align: match-parent;" class="form-control @error('contact') is-invalid @enderror"
                            value="{{ old('contact', $contact->contact) }}" placeholder="{{ __('words.contact') }}">

                        @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group row">
                @include('admin.components.icon', [
                    'label' => __('words.icon'),
                    'value' => old('icon', $contact->icon),
                    'required' => false,
                ])
            </div>

            <div class="form-group row">
                @include('admin.components.switch', [
                    'label' => __('words.status'),
                    'name' => 'status',
                    'val' => old('status', $contact->status),
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

@push('scripts')
    <script src="{{ @asset('js/handleInputIcons.js') }}"></script>
@endpush
