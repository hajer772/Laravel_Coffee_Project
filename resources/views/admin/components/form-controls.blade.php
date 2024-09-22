@if ($name && $value && $role)
    @if(auth('admin')->user()->hasPermission('reply-' . $role))
        <a href="{{ route($name . '.reply', $value->id) }}" class="btn btn-sm btn-clean btn-icon m-1"
           title="{{__('words.reply')}}">
        <span class="svg-icon svg-icon-primary svg-icon-2x">
            <i class="fas fa-reply"></i>
        </span>
        </a>
    @endif

    @if(auth('admin')->user()->hasPermission('read-' . $role))
        <a href="{{ route($name . '.show', $value->id) }}" class="btn btn-sm btn-clean btn-icon m-1"
           title="{{__('words.show')}}">
        <span class="svg-icon svg-icon-primary svg-icon-2x">
            <i class="fa fa-eye"></i>
        </span>
        </a>
    @endif

    @if(auth('admin')->user()->hasPermission('update-' . $role))
        <a href="{{ route($name . '.edit', $value->id) }}" class="btn btn-sm btn-clean btn-icon m-1"
           title="{{__('words.edit')}}">
        <span class="svg-icon svg-icon-md svg-icon-primary">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
            <i class="fa fa-edit"></i>
            <!--end::Svg Icon-->
        </span>
        </a>

    @endif

    @if(auth('admin')->user()->hasPermission('resend-' . $role))
        <a href="{{ route($name . '.edit', $value->id) }}" class="btn btn-sm btn-clean btn-icon m-1"
           title="{{__('words.resend')}}">
        <span class="svg-icon svg-icon-md svg-icon-primary">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
            <i class="fas fa-sync-alt"></i>
            <!--end::Svg Icon-->
        </span>
        </a>

    @endif


    @if(auth('admin')->user()->hasPermission('delete-' . $role) || auth('admin')->user()->hasPermission('delete_subscribed_users-' . $role))
        <form id="delete-form-{{ $value->id }}" style="display: inline-table;"
              action="{{ route($name . '.destroy', $value->id) }}" method="post">
            @csrf
            @method('delete')

            <button type="button" class="btn btn-sm btn-clean btn-icon m-1" title="{{__('words.delete')}}"
                    data-toggle="modal" data-target="#deleteModalSizeSm-{{ $value->id }}">
            <span class="svg-icon svg-icon-md svg-icon-primary">
                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                <i class="fa fa-trash"></i>
            </span>
            </button>
            <div class="modal fade" id="deleteModalSizeSm-{{$value->id}}" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">{{__('words.delete_confirm')}}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body"> {{ __('message.delete_message') }} <b
                                class="">
                                @if($value->name)
                                    {{$value->name}}
                                @elseif($value->title)
                                    {!! $value->title !!}
                                @else
                                    {{$value->email}}
                                @endif
                            </b></div>
                        <div class="modal-footer">
                            <button type="button" class="btn gray btn-outline-secondary"
                                    data-dismiss="modal">{{__('words.cancel')}}</button>
                            <button type="submit" class="btn gray btn-outline-danger">{{__('words.delete')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
@endif
