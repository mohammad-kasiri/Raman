@extends('admin.layout.master' , ['title' => ' ویرایش نقش های ' . $user->full_name])
@section('title' , ' ویرایش نقش های ' . $user->full_name)

@section('subheader')
    @can('roles.index')
        @php
            $buttons = [
                ['title' => 'بازگشت به لیست مدیرها' , 'icon' => '<i class="fas fa-undo icon-nm"></i>' , 'route' => route('admin.roles.users.index') ],
            ];
        @endphp
    @endcan
    <x-dashboard.subheader :links='$buttons ?? []' :title="'ویرایش نقش های ' . $user->full_name" />
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
        <form action="{{route('admin.roles.users.update' , $user->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="card card-custom mb-4">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">
                            نقش های {{$user->full_name}}
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    @foreach($roles as  $role)
                        <div class="row">
                            <div class="col-12">
                                <x-dashboard.form.checkbox
                                    name="roles[{{$role->id}}]"
                                    value="{{ $role->id }}"
                                    checked="{{ in_array($role->id , $user->roles->pluck('id')->toArray() ) ? 1 : 0}}"
                                >
                                    {{ $role->label }}
                                </x-dashboard.form.checkbox>
                                <p class="ml-9 text-muted my-4">
                                    {{ $role->description }}
                                </p>
                            </div>
                        </div>
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
