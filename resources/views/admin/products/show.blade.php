@extends('admin.layouts.master')
@section('title',settings()->website_title .' | '.__('words.show_product'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{__('words.products')}}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{route('admin.home')}}" class="text-muted">{{__('words.home')}}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('products.index')}}" class="text-muted">{{__('words.show_products')}}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{__('words.show_product')}}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">{{__('words.show_product')}}</h3>
            </div>
            <div class="card-toolbar">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    @foreach (config('translatable.locales') as $key => $locale)

                        <li class="nav-item">
                            <a class="nav-link  @if ($key == 0) active @endif" data-toggle="tab"
                               href="{{ '#' . $locale }}">{{__('words.locale-' . $locale)}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card-body p-10">
            <div class="tab-content">
                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}"
                         role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-7 bg-light p-5 rounded h-100">
                                    <div class="card-title">
                                        <h5 class="font-weight-bolder text-dark">{{__('words.title')}}
                                            - {{__('words.locale-' . $locale)}}:</h5>
                                    </div>
                                    <p class="m-0">{{ $product->translate($locale)->title }}</p>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-7 bg-light p-5 rounded h-100">
                                    <div class="card-title">
                                        <h5 class="font-weight-bolder text-dark">{{__('words.description')}}
                                            - {{__('words.locale-' . $locale)}}:</h5>
                                    </div>
                                    {!! $product->translate($locale)->description !!}
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{__('words.activity')}}:</h5>
                            </div>
                            <p class="m-0"><span
                                    class="badge rounded-pill text-white {{$product->status == 1 ? 'bg-success' : 'bg-danger'}}">{{ $product->getActive() }}</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{__('words.category')}}:</h5>
                            </div>
                            <p class="m-0">{{ $product->category ? $product->category->name : '' }}</p>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{__('words.image')}}:</h5>
                            </div>
                            <a href="{{$product->image}}"
                               data-toggle="lightbox" data-title="{{$product->title}}"
                               data-gallery="gallery">
                                <img src="{{$product->image}}"
                                     class="img-fluid mb-2 image-galley"
                                     onerror="this.src='{{asset('uploads/default_image.png')}}'"
                                     alt="category image"/>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    {{-- files start --}}
                    @if($files->isNotEmpty())
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-primary">
                                        <div class="card-header bg-secondary py-1 m-0">
                                            <h4 class="card-title">{{__('words.files')}}</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                @foreach($files as $file)
                                                    <div class="col-sm-3 ">
                                                        <a href="{{$file->path}}" target="_blank" download>
                                                            <img class="index_image"
                                                                 src="{{asset('uploads/pdf.png')}}" alt="file">
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    {{-- files end --}}
                </div>
            </div>

            @permission('update-products')
            <div class="card-footer">
                <div class="row">
                    <div class="col-4">
                        <a href="{{route('products.edit',$product->id)}}"
                           class="btn btn-block btn-outline-info">
                            {{__('words.edit')}}
                        </a>
                    </div>
                </div>
            </div>
            @endpermission
        </div>
    </div>
@endsection
