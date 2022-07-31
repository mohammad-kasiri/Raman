@extends('admin.layout.master' , ['title' => ' ویرایش مجوز های ' . $role->label])
@section('title' , ' ویرایش مجوز های ' . $role->label)

@section('subheader')
    @can('roles.index')
        @php
            $buttons = [
                ['title' => 'بازگشت به لیست نقش ها' , 'icon' => '<i class="fas fa-undo icon-nm"></i>' , 'route' => route('admin.roles.index') ],
            ];
        @endphp
    @endcan
    <x-dashboard.subheader :links='$buttons ?? []' :title="'ویرایش مجوز های ' . $role->label" />
@endsection

@section('content')
    <!--begin::Container-->
    <div class=" container ">
        <!--begin::Notice-->
        @if(\Illuminate\Support\Facades\Session::has('message'))
            <div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon2-checkmark"></i></div>
                <div class="alert-text">{{\Illuminate\Support\Facades\Session::get('message')}}</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="نزدیک">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
        @endif
        <!--end::Notice-->
        <!--begin::Card-->
        <form action="{{route('admin.roles.update' , $role->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="card card-custom mb-4">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">
                            اطلاعات کلی
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <x-dashboard.form.row-input     label="عنوان"     name="label"         value="{{$role->label}}" />
                            <x-dashboard.form.text.textarea label="توضیحات"  name="description"   value="{{$role->description}}" rows="2"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">
                            لیست مجوز ها
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    @foreach($permissions as $permission)
                        <x-dashboard.form.checkbox
                            name="permissions[{{$permission->id}}]"
                            value="{{ $permission->id }}"
                            checked="{{in_array($permission->id , $role->permissions->pluck('id')->toArray() )  ? 1 : 0}}"
                        >
                            {{$permission->label}}
                        </x-dashboard.form.checkbox>
                        <div class="row my-5">
                            @foreach($permission->children as $permit)
                                <div class="col-md-4 my-1">
                                    <x-dashboard.form.checkbox
                                        name="permissions[{{$permit->id}}]"
                                        value="{{ $permit->id }}"
                                        checked="{{in_array($permit->id , $role->permissions->pluck('id')->toArray() )  ? 1 : 0}}"
                                    >
                                        {{ $permit->label }}
                                    </x-dashboard.form.checkbox>
                                </div>
                            @endforeach
                        </div>
                        <hr>
                    @endforeach
                    <button class="btn btn-success float-right">
                        <i class="far fa-save"></i>
                        ثبت تغییرات
                    </button>
                </div>
            </div>
        </form>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@endsection
