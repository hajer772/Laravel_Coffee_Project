@if($name && $label || $value)
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <label class="d-block">{{$label}}</label>
            <div class="input-group date">
                <input class="form-control" id="kt_timepicker_1" readonly="readonly" placeholder="{{$label}}"
                       type="text" name="{{$name}}" value="{{$value}}"/>
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="far fa-clock"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endif
