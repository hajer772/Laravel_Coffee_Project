@if ($name && $label && $id)
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <label class="d-block">
                {{ $label }}
                @if ($required)
                    <span class="text-danger">*</span>
                @endif
            </label>
            <div class="image-input-wrapper" style="background-image: url({{ $value }})">
            </div>
            <div class="image-input image-input-empty image-input-outline" id="{{ $id }}"
                style="background-image: url({{ $value }})">
                <div class="image-input-wrapper"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                    data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" name="{{ $name }}" accept="image/*" />
                    <input type="hidden" name="profile_avatar_remove" />
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                    data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                    data-action="remove" data-toggle="tooltip" title="Remove avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
            </div>
        </div>
        @isset($deleteImage)
            @include('admin.components.deleteImage')
        @endisset
    </div>
@endif
