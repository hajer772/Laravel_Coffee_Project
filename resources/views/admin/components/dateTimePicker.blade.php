@if($name && $label)
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <label class="d-block">{{$label}}</label>
            <div class="input-group date" id="kt_datetimepicker_1" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" placeholder="Select date &amp; time"
                       data-target="#kt_datetimepicker_1" name="{{$name}}" value="{{$value}}" />
                <div class="input-group-append" data-target="#kt_datetimepicker_1" data-toggle="datetimepicker">
                    <span class="input-group-text">
                        <i class="ki ki-calendar"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endif
