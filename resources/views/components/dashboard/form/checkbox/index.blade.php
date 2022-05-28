@props([
    'name',
    'value'    => '',
    'disabled' => false,
    'checked',
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
               {{$checked == '1' ? 'checked' : ''}}
        />
        <span></span>
        {{$slot}}
    </label>
</div>
