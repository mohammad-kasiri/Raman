@props([
    'name'  ,
    'value' => '',
    'disabled'     => false,
])
@php
    $id = \Illuminate\Support\Str::random(10);
@endphp
<div class="checkbox-inline">
    <label class="checkbox checkbox-outline checkbox-success" for="{{$id}}">
        <input type="checkbox"
               name="{{ $name }}"
               value="{{ $value }}"
               id="{{$id}}"

               @if(old($name))
                   @foreach(old($name) as $item)
                       {{$$item == $name->id ? "checked" : ""}}
                   @endforeach
               @endif
        />
        <span></span>
        {{$slot}}
    </label>
</div>
