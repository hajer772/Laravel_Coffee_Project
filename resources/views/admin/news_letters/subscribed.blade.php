@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.news_letters'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('words.news_letters') }}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}" class="text-muted">{{ __('words.home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{ __('words.show_news_letters') }}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap py-5">
            <div class="card-title">
                <h3 class="card-title">{{ __('words.show_news_letters') }}</h3>
            </div>

            <div class="card-toolbar">
                <!--begin::Dropdown-->

                <div class="dropdown dropdown-inline mr-2">
                    <!--begin::Button-->

                </div>
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="custom_datatable">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('words.message') }}</th>
                    <th>{{ __('words.created_at') }}</th>
                    <th>{{ __('words.actions') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ formatDate($user->created_at) }}</td>
                        <td nowrap="nowrap">
                            @if(auth('admin')->user()->hasPermission('delete_subscribed_users-news_letters'))
                                <form id="delete-form-{{ $user->id }}" style="display: inline-table;"
                                      action="{{ route('news-letters.delete_subscribed_users', $user->id) }}"
                                      method="post">
                                    @csrf
                                    @method('post')

                                    <button type="button" class="btn btn-sm btn-clean btn-icon m-1"
                                            title="{{__('words.delete')}}"
                                            data-toggle="modal" data-target="#deleteModalSizeSm-{{ $user->id }}">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                            <i class="fa fa-trash"></i>
                                        </span>
                                    </button>
                                    <div class="modal fade" id="deleteModalSizeSm-{{$user->id}}" tabindex="-1"
                                         role="dialog"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{__('words.delete_confirm')}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body"> {{ __('message.delete_message') }} <b
                                                        class="">
                                                        @if($user->name)
                                                            {{$user->name}}
                                                        @elseif($user->title)
                                                            {!! $user->title !!}
                                                        @else
                                                            {{$user->email}}
                                                        @endif
                                                    </b></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn gray btn-outline-secondary"
                                                            data-dismiss="modal">{{__('words.cancel')}}</button>
                                                    <button type="submit"
                                                            class="btn gray btn-outline-danger">{{__('words.delete')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>

    </div>
@endsection
