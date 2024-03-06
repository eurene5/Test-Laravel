@php
    $class ??= null;
    $value ??= null;
@endphp

<div @class(['mb-3', $class])>
    <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    <select class="form-control @error($name) is-invalid @enderror" name="{{ $name }}">
        @foreach($options as $option)
            <option value="
                        @if($option->id_type_entreprise)
                            {{$option->id_type_entreprise}}
                        @elseif ( $option->id_type_client)
                            {{$option->id_type_client}}
                        @else
                            {{$option->libelle}}
                        @endif
                    "
            @if(old($name, $value) !== null) selected="selected" @endif >
                {{$option->libelle}}
            </option>
        @endforeach
    </select>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>