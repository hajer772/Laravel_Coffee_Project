@if($name && $label)
    <div class="col-md-6 col-sm-12">
        <label for="formFileSm" class="col-form-label">{{$label}}</label>
        <input type="file" name="{{$name}}" {{$multi}}
               class="form-control form-control-sm @error($name) is-invalid @enderror" accept="{{$accept}}" id="formFileSm">
        @error($name)
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
        @enderror
    </div>
@endif
