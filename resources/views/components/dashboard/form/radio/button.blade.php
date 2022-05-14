@props([
    'name' ,
    'label' ,
    'value' ,
    'color' => 'primary' ,
    'checked' => false
])
<label class="radio radio-{{$color}} radio-lg">
    <input
        type="radio"
        name="{{$name}}"
        value="{{$value}}"
        {{old($name) == $value ? 'checked' : ''}}
        @if($checked) checked @endif
    >
    <span></span>
    {{$label}}
</label>
