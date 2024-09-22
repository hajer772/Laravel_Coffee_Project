@if($name && $label || $value)
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <label class="d-block">{{$label}}</label>

            <div class="input-group date">
                <input type="text" class="form-control" id="kt_datepicker_2" readonly="readonly" placeholder="{{$label}}" name="{{$name}}" value="{{$value}}" />
                <div class="input-group-append">
                <span class="input-group-text">
                    <i class="la la-calendar-check-o"></i>
                </span>
                </div>
            </div>
        </div>
    </div>
@endif



