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

<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label @error($name) text-danger @enderror">{{$label}}</label>
    <div class="col-lg-9 col-xl-9">
        <input class="form-control form-control-lg form-control-solid @error($name) is-invalid @enderror"
            name="{{$name}}"
            type="{{$type ?? "text"}}"
            placeholder="{{$label . ' را وارد کنید. '}}"
            autocomplete="{{$autocomplete}}"
            @if($datepicker)  data-jdp @endif
            @if($autosearch)  auto-search="{{$autosearch}}" @endif
            @if($disabled)  disabled @endif
            value="{{old($name , $value)}}"
        />

        @if($autosearch)
            <div class=" zindex-2 w-100 d-none" parent="{{$name}}">
                <div class="list-group">
                </div>
            </div>
        @endif
        @error($name)
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
</div>
