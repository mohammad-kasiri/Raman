@extends('admin.layout.master' , ['title' => 'لیست نقش ها'])
@section('title' , 'لیست نقش ها')

@section('subheader')
    @can('roles.create')
        @php
            $buttons = [
                ['title' => 'افزودن نقش جدید' , 'icon' => '<i class="fas fa-plus icon-nm"></i>' , 'route' => route('admin.roles.create') ],
            ];
        @endphp
    @endcan
    <x-dashboard.subheader :links='$buttons ?? []' :title="'لیست نقش ها'" />

@endsection

@section('content')
    @can('roles.index')
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
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">
                            لیست نقش ها
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table ">
                            <thead>
                                <tr class="text-muted">
                                    <th class="text-center">#</th>
                                    <th class="text-center">عنوان</th>
                                    <th class="text-center">توضیحات</th>
                                    @can('roles.edit')
                                        <th class="text-center">عملیات</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $key=>$role)
                                <tr>
                                    <td class="text-center align-middle"> {{ $key +1 }}  </td>
                                    <td class="text-center align-middle"> {{$role->label}}</td>
                                    <td class="text-center align-middle text-nowrap"> {{ $role->description }} </td>
                                    @can('roles.edit')
                                        <td class="text-center align-middle text-nowrap">
                                            <a href="{{route('admin.roles.edit' , $role->id)}}" class="btn btn-icon btn-circle btn-sm btn-outline-success" data-container="body"  data-delay="500" data-toggle="popover" data-placement="top" data-content="مجوز ها">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    @endcan
@endsection
