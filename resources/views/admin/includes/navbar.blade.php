<div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Page Heading-->
            @yield('breadcrumb')
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Languages-->
            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a class="{{ LaravelLocalization::getCurrentLocaleNative() == $properties['native'] ? 'd-none' : '' }}"
                    rel="alternate" hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    <span class="symbol symbol-30 mr-3">
                        @if ($localeCode == 'en')
                            <span class="navi-text">{{ __('words.english') }}</span>
                        @elseif ($localeCode == 'ar')
                            <span class="navi-text">{{ __('words.arabic') }}</span>
                        @else
                            <span class="navi-text">{{ $properties['native'] }}</span>
                        @endif
                    </span>
                </a>
            @endforeach
            <!--end::Languages-->

            <!--begin::User-->
            <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                    id="kt_quick_user_toggle">
                    <span
                        class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">{{ __('words.hi') }}</span>
                    <span
                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ auth('admin')->user()->first_name . ' ' . auth('admin')->user()->last_name }}</span>
                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                        <span
                            class="symbol-label font-size-h5 font-weight-bold">{{ mb_substr(auth('admin')->user()->first_name, 0, 1) }}</span>

                            
                    </span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
