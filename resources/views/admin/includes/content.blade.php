<div class="content flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    @include('admin.includes.alerts.success')
    @include('admin.includes.alerts.errors')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            @yield('content')
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
