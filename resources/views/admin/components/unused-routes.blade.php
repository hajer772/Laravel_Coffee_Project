{{-- project routes start --}}
@permission('read-projects')
<li class="menu-item menu-item-submenu {{ request()->routeIs('projects.*') ? 'menu-item-open menu-item-here' : '' }}"
    aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <i class="fas fa-project-diagram svg-icon menu-icon"></i>
        <span class="menu-text">{{__('words.projects')}}</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">

            @permission('read-projects')
            <li class="menu-item  {{ request()->routeIs('projects.index') ? 'menu-item-active' : '' }}"
                aria-haspopup="true">
                <a href="{{route('projects.index')}}" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">{{__('words.show_all')}}</span>
                </a>
            </li>
            @endpermission

            @permission('create-projects')
            <li class="menu-item  {{ request()->routeIs('projects.create') ? 'menu-item-active' : '' }}"
                aria-haspopup="true">
                <a href="{{route('projects.create')}}" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">{{__('words.create')}}</span>
                </a>
            </li>
            @endpermission
        </ul>
    </div>
</li>
@endpermission
{{-- project routes end --}}
