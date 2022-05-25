@props([
    'label' ,
    'name'  ,
    'type'  ,
    'value' => '',
    'autocomplete' => 'off',
    'datepicker'   => false,
    'autosearch'   => false,
    'disabled'     => false,
])
@php
    $id = \Illuminate\Support\Str::random(10);
@endphp
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="{{$id}}" name="">
    <label class="custom-control-label @error($name) text-danger @enderror" for="{{$id}}">
        {{ $subject->title }}
    </label>
</div>
