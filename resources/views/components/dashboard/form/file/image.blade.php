@props([
    'name' ,
    'label' ,
    'id'   ,
    'default_image'
 ])
<div class="row">
    <label class="col-xl-3 col-lg-3 col-form-label @error($name) text-danger @enderror">
        {{ $label }}
    </label>
    <div class="col-lg-9 col-xl-9">
        <div class=" image-input image-input-outline" id="{{ $id }}">
            <div class="image-input-wrapper"
                 style="background-image: url( {{ $default_image }} )">
            </div>
            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                   data-action="change"
                   data-toggle="tooltip"
                   title="تغییر آواتار"
                   data-original-title="تغییر آواتار">

                <i class="fa fa-pen icon-sm text-muted"></i>
                <input type="file" name="{{ $name }}" accept=".png, .jpg, .jpeg"/>
                <input type="hidden" name="profile_avatar_remove"/>
            </label>

            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="لغو آواتار">
    		    <i class="ki ki-bold-close icon-xs text-muted"></i>
    	    </span>
        </div>
        @error($name)
            <small class="text-danger d-block">{{$message}}</small>
        @enderror
    </div>


</div>
