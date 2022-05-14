<div class="form-group mb-5">
    <input
        class="form-control h-auto form-control-solid py-4 px-8 @error($name) is_invalid @enderror "
        {{ $attributes->merge(['type'         => 'text']) }}
        {{ $attributes->merge(['autocomplete' => 'off']) }}
        {{ $attributes->merge(['value'        => old($name)])  }}
        {{ $attributes->merge(['name'         =>  $name])  }}
    >
    @error($name)
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
