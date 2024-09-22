{{-- delete image start --}}
<div class='form-check form-check-inline mx-2'>
    <input type='checkbox' name='deleteFile'
           class='form-check-input checkImage @error('deleteFile') is-invalid @enderror'>
    <label class='form-check-label'
           for='deleteFile'>{{__('words.delete')}}</label>

    @error('deleteFile')
    <span class='invalid-feedback' role='alert'>
                <strong>$message</strong>
            </span>
    @enderror
</div>
{{-- delete image end --}}

