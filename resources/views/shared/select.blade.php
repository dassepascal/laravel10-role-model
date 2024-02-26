@php

    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= ucfirst($name);
@endphp

<div class="mb-3 row">
    <label for="{{ $label }}" class="col-md-4 col-form-label text-md-end text-start">{{ $label }}</label>
    <div class="col-md-6">
       <select name="{{ $name }}[]" id="{{ $name }}" multiple>
            @foreach ($options as $k =>$v)
            <option @selected($value->contains($k)) value="{{ $k }}" >{{ $v }}</option>
            @endforeach
        </select>
        @if ($errors->has($name))
        <span class="text-danger">{{ $errors->first($name) }}</span>
        @endif


    </div>
