{{-- <div>
    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" {{ $value ? 'checked' : '' }}>
    <label for="{{ $name }}">{{ $label }}</label>
</div> --}}


@php
if (!isset($class)) {
    $class = null;
}

@endphp
<div class="mb-3 row ">
    <label class="form-check-label col-md-4  text-md-end text-start" for="{{  $name }}">{{ $label }}</label>
<div class="form-check form-switch col-md-6">
    <input type="hidden" name="{{ $name }}" value="0">
    <input @checked(old($name,$value ?? false) ) class=" form-check-input @error($name) is-invalid @enderror" role="switch" type="checkbox" name="{{ $name }}" id="{{ $name }}" value="1" {{ $value ? 'checked' : '' }}>

</div>
     @error($name)
     <div class="invalid-feedback">
        {{ $message }}
     </div>
@enderror

</div>
