@props([
    'label' ,
    'name'  ,
    'searchable' => 'false'
])
<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label @error($name) text-danger @enderror ">{{$label}}</label>
    <div class="col-lg-9 col-xl-9">
        <select name="{{$name}}"
                class="form-control selectpicker form-control-lg form-control-solid  @error($name) is-invalid @enderror"
                data-live-search="{{$searchable}}">
            {{$slot}}
        </select>
        @error($name)
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
    </div>

</div>
