@if ($name || $label)
    <div class="col-md-6 col-sm-12 input">
        <label for="{{ $name }}">
            {{ $label }}
            @if ($required)
                <span class="text-danger"> * </span>
            @endif
        </label>

        <span class="switch switch-icon">
            <label>
                <input type="checkbox" id="{{ $name }}" name="{{ $name }}" value="1"
                    {{ !isset($val) ? 'checked' : '' }} {{ $val == 1 ? 'checked' : '' }} />
                <span></span>
            </label>
        </span>
    </div>
@endif
