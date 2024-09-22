@section('content')
    @if ($errors->any())
        <div class="alert alert-custom alert-danger" role="alert">
            <div class="alert-text">
                @foreach ($errors->all() as $error)
                    <span class="d-flex align-items-center">
                            <div class="alert-icon" style="padding-inline-end: 5px">
                                <i style="font-size: 14px" class="flaticon-warning"></i>
                            </div> {{ $error }}
                        </span>
                @endforeach
            </div>
        </div>
    @endif

<form action="@yield('form_action')" method="@yield('form_type')" autocomplete="off"
      enctype="multipart/form-data" id="form">
    <div class="card-body">
        @csrf
        @yield('form_content')
    </div>

</form>

@endsection

{{--  {{}} --}}
