@php
    $class ??= null;
@endphp

<div @class(['form-check form-switch', $class]) >
    <input type="hidden" value="N" name="{{ $name }}">
    <input @checked(old($name, $value ?? false)) type="checkbox" value="O" name="{{ $name }}" class="form-check-input @error($name)  is-invalid @enderror " role="switch" id="{{ $name }}">
    <label for="{{ $name }}" class="form-check-label">{{ $label }}</label>
    @error($name)
    <div class="invalid-feedback" >
        {{ $message }}
    </div>
    @enderror
</div>