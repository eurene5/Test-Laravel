@php
    $type ??= 'text';
    $name ??= '';
    $class ??= null;
    $value ??= null;
    $label ??= ucfirst($name);
    $placeholder ??= ucfirst($label);
@endphp

<div @class(['mb-3', $class])>
    <label class="form-label" for="{{$name}}">{{$label}}</label>
    @if ($type === 'textarea')
        <textarea rows="5" class="form-control @error($name) is-invalid @enderror" placeholder="{{$placeholder}}" name="{{$name}}">{{ old($name, $value) }}</textarea>
    @else
        <input class="form-control @error($name) is-invalid @enderror" type="{{$type}}" placeholder="{{$placeholder}}" name="{{$name}}" value="{{old($name, $value)}}" />
    @endif
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>