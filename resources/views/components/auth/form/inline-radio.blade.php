@php
    $id = \Illuminate\Support\Str::random(10);
@endphp

<input class="auth--radio" type="radio"
       {{old($name) == $value ? 'checked' : ''}}
       {{ $attributes->merge(['name'         =>  $name])  }}
       {{ $attributes->merge(['value'        =>  $value])  }}
       id="{{$id}}">

<label class="auth--radio" for="{{$id}}">
    {{$slot}}
</label>

