@props([
    "active" => false ,
])
<!--begin::Toggle-->
<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
	    <span class="svg-icon svg-icon-xl svg-icon-primary">
            <x-dashboard.icons.svg.compiling/>
        </span>
        @if($active)
            <span class="pulse-ring"></span>
        @endif
    </div>
</div>
<!--end::Toggle-->
