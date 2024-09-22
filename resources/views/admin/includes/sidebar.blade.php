<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="{{ route('admin.home') }}" class="brand-logo">
            <img alt="Logo" src="{{ settings()->logo }}" style="width: 60px;height: 60px;" />
        </a>
        <!--end::Logo-->
        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path
                            d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                            fill="#000000" fill-rule="nonzero"
                            transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                        <path
                            d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                            transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </button>
        <!--end::Toolbar-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                {{-- home route start --}}
                <li class="menu-item {{ request()->routeIs('admin.home') ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{ route('admin.home') }}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                    <path
                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>

                        <span class="menu-text">{{ __('words.home') }}</span>
                    </a>
                </li>
                {{-- home route end --}}

                {{-- role routes start --}}
                @permission('read-roles')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('roles.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                            fill="#000000" opacity="0.3" />
                                        <path
                                            d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                            fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-text">{{ __('words.roles') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-roles')
                                    <li class="menu-item  {{ request()->routeIs('roles.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('roles.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-roles')
                                    <li class="menu-item  {{ request()->routeIs('roles.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('roles.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- role routes end --}}

                {{-- admin routes start --}}
                @permission('read-admins')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('admin-users.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span
                                class="svg-icon menu-icon"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Group.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path
                                            d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path
                                            d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg><!--end::Svg Icon-->
                            </span>
                            <span class="menu-text">{{ __('words.admins') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-admins')
                                    <li class="menu-item  {{ request()->routeIs('admin-users.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('admin-users.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-admins')
                                    <li class="menu-item  {{ request()->routeIs('admin-users.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('admin-users.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- admin routes end --}}

                {{-- newsection routes start --}}
                @permission('read-newsections')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('newsections.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fas fa-heart svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.newsections') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-newsections')
                                    <li class="menu-item  {{ request()->routeIs('newsections.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('newsections.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-newsections')
                                    <li class="menu-item  {{ request()->routeIs('newsections.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('newsections.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- newsection routes end --}}

                {{-- slider routes start --}}
                @permission('read-sliders')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('sliders.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fas fa-photo-video svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.sliders') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-sliders')
                                    <li class="menu-item  {{ request()->routeIs('sliders.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('sliders.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-sliders')
                                    <li class="menu-item  {{ request()->routeIs('sliders.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('sliders.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- slider routes end --}}

                {{-- features routes start --}}
                @permission('read-features')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('features.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fas fa-star svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.features') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-features')
                                    <li class="menu-item  {{ request()->routeIs('features.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('features.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-features')
                                    <li class="menu-item  {{ request()->routeIs('features.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('features.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- features routes end --}}
                {{-- client routes start --}}
                @permission('read-clients')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('clients.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fas fa-handshake svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.clients') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-clients')
                                    <li class="menu-item  {{ request()->routeIs('clients.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('clients.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-clients')
                                    <li class="menu-item  {{ request()->routeIs('clients.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('clients.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- client routes end --}}

                {{-- counters routes start --}}
                @permission('read-counters')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('counters.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fas fa-stopwatch svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.counters') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-counters')
                                    <li class="menu-item  {{ request()->routeIs('counters.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('counters.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-counters')
                                    <li class="menu-item  {{ request()->routeIs('counters.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('counters.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- counters routes end --}}

                {{-- category routes start --}}
                @permission('read-categories')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('categories.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fas fa-layer-group svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.categories') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-categories')
                                    <li class="menu-item  {{ request()->routeIs('categories.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('categories.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-categories')
                                    <li class="menu-item  {{ request()->routeIs('categories.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('categories.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- category routes end --}}

                {{-- product routes start --}}
                @permission('read-products')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('products.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fab fa-product-hunt svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.products') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-products')
                                    <li class="menu-item  {{ request()->routeIs('products.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('products.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-products')
                                    <li class="menu-item  {{ request()->routeIs('products.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('products.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- product routes end --}}

                {{-- service routes start --}}
                @permission('read-services')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('services.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fab fa-servicestack svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.services') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-services')
                                    <li class="menu-item  {{ request()->routeIs('services.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('services.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-services')
                                    <li class="menu-item  {{ request()->routeIs('services.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('services.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- service routes end --}}

                {{-- project routes start --}}
                @permission('read-projects')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('projects.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fas fa-project-diagram svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.projects') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-projects')
                                    <li class="menu-item  {{ request()->routeIs('projects.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('projects.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-projects')
                                    <li class="menu-item  {{ request()->routeIs('projects.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('projects.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- project routes end --}}


                {{-- team routes start --}}
                @permission('read-teams')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('teams.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fas fa-gopuram svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.teams') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-teams')
                                    <li class="menu-item  {{ request()->routeIs('teams.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('teams.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-teams')
                                    <li class="menu-item  {{ request()->routeIs('teams.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('teams.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- team routes end --}}

                {{-- testimonial routes start --}}
                @permission('read-testimonials')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('testimonials.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fas fa-people-arrows svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.testimonials') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-testimonials')
                                    <li class="menu-item  {{ request()->routeIs('testimonials.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('testimonials.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-testimonials')
                                    <li class="menu-item  {{ request()->routeIs('testimonials.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('testimonials.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- testimonial routes end --}}

                {{-- partner routes start --}}
                @permission('read-partners')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('partners.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fas fa-handshake svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.partners') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-partners')
                                    <li class="menu-item  {{ request()->routeIs('partners.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('partners.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-partners')
                                    <li class="menu-item  {{ request()->routeIs('partners.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('partners.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- partner routes end --}}

                {{-- portfolio routes start --}}
                @permission('read-portfolios')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('portfolios.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fas fa-window-restore svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.portfolios') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-portfolios')
                                    <li class="menu-item  {{ request()->routeIs('portfolios.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('portfolios.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-portfolios')
                                    <li class="menu-item  {{ request()->routeIs('portfolios.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('portfolios.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- portfolio routes end --}}

                {{-- page routes start --}}
                @permission('read-pages')
                    <li class="menu-item {{ request()->routeIs('pages.*') ? 'menu-item-active' : '' }}"
                        aria-haspopup="true">
                        <a href="{{ route('pages.index') }}" class="menu-link">
                            <i class="fas fa-file svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.pages') }}</span>
                        </a>
                    </li>
                @endpermission
                {{-- page routes end --}}

                {{-- blog routes start --}}
                @permission('read-blog')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('blog.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fab fa-blogger-b  svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.blog') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-blog')
                                    <li class="menu-item  {{ request()->routeIs('blog.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('blog.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-blog')
                                    <li class="menu-item  {{ request()->routeIs('blog.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('blog.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- blog routes end --}}

                {{-- faq routes start --}}
                @permission('read-faqs')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('faqs.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="far fa-question-circle svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.faqs') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-faqs')
                                    <li class="menu-item  {{ request()->routeIs('faqs.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('faqs.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-faqs')
                                    <li class="menu-item  {{ request()->routeIs('faqs.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('faqs.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- faq routes end --}}

                {{-- contact routes start --}}
                @permission('read-contacts')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('contacts.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fab fa-contao svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.contacts') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-contacts')
                                    <li class="menu-item  {{ request()->routeIs('contacts.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('contacts.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-contacts')
                                    <li class="menu-item  {{ request()->routeIs('contacts.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('contacts.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- contact routes end --}}

                {{-- course routes start --}}
                @permission('read-courses')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('courses.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fas fa-upload svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.courses') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-courses')
                                    <li class="menu-item  {{ request()->routeIs('courses.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('courses.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-courses')
                                    <li class="menu-item  {{ request()->routeIs('courses.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('courses.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- course routes end --}}

                {{-- contact_requests route start --}}
                @permission('read-contact_us')
                    <li class="menu-item {{ request()->routeIs('contact_requests.*') ? 'menu-item-active' : '' }}"
                        aria-haspopup="true">
                        <a href="{{ route('contact_requests.index') }}" class="menu-link">
                            <i class="fas fa-comment-alt svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.contact_requests') }}</span>
                        </a>
                    </li>
                @endpermission
                {{-- contact_requests route end --}}

                {{-- news letter routes start --}}
                @permission('read-news_letters')
                    <li class="menu-item menu-item-submenu {{ request()->routeIs('news-letters.*') ? 'menu-item-open menu-item-here' : '' }}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <i class="fas fa-mail-bulk svg-icon menu-icon"></i>
                            <span class="menu-text">{{ __('words.news_letters') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @permission('read-news_letters')
                                    <li class="menu-item  {{ request()->routeIs('news-letters.index') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('news-letters.index') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.show_all') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('create-news_letters')
                                    <li class="menu-item  {{ request()->routeIs('news-letters.create') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('news-letters.create') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.create') }}</span>
                                        </a>
                                    </li>
                                @endpermission

                                @permission('show_subscribed_users-news_letters')
                                    <li class="menu-item  {{ request()->routeIs('news-letters.subscribed') ? 'menu-item-active' : '' }}"
                                        aria-haspopup="true">
                                        <a href="{{ route('news-letters.subscribed') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ __('words.subscribed') }}</span>
                                        </a>
                                    </li>
                                @endpermission
                            </ul>
                        </div>
                    </li>
                @endpermission
                {{-- news letter routes end --}}

                {{-- setting route start --}}
                @permission('read-settings')
                    <li class="menu-item {{ request()->routeIs('settings.*') ? 'menu-item-active' : '' }}"
                        aria-haspopup="true">
                        <a href="{{ route('settings.index') }}" class="menu-link">
                            <i class="fas fa-users-cog svg-icon menu-icon"></i>

                            <span class="menu-text">{{ __('words.settings') }}</span>
                        </a>
                    </li>
                @endpermission
                {{-- setting route end --}}
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
