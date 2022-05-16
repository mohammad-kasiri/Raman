@extends('admin.layout.master' , ['title' => 'لیست بیماران'])
@section('title' , 'لیست بیماران')

@section('subheader')
    @can('patients.create')
        @php
            $buttons = [
                ['title' => 'افزودن بیمار جدید' , 'icon' => '<i class="fas fa-plus icon-nm"></i>' , 'route' => route('admin.patients.create') ],
            ];
        @endphp
        <x-dashboard.subheader :links='$buttons' :title="'لیست بیماران'" />
    @endcan
@endsection

@section('content')
    @can('patients.index')
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
                            لیست بیماران
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table ">
                            <thead>
                            <tr class="text-muted">
                                <th class="text-center">#</th>
                                <th class="text-center">تصویر</th>
                                <th class="text-center">نام</th>
                                <th class="text-center">تلفن همراه</th>
                                @can('patients.show')
                                    <th class="text-center">عملیات</th>
                                @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($patients as $key=>$patient)
                                <tr>
                                    <td class="text-center align-middle"> {{\App\Functions\PaginationCounter::item($patients , $key)}} </td>
                                    <td class="text-center align-middle"> <img src="{{$patient->avatar()}}" width="40px"></td>
                                    <td class="text-center align-middle text-nowrap"> {{$patient->full_name}}</td>
                                    <td class="text-center align-middle"> <a href="tel:{{$patient->mobile}}">{{$patient->mobile}}</a> </td>
                                    @can('patients.show')
                                    <td class="text-center align-middle text-nowrap">
                                        <a href="{{route('admin.patients.show' , $patient->id)}}" class="btn btn-icon btn-circle btn-sm btn-outline-info " data-container="body"  data-delay="500" data-toggle="popover" data-placement="top" data-content="مشاهده">
                                            <i class="far fa-eye"></i>
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
            <div class="text-center mt-5">
                {{$patients->render()}}
            </div>
        </div>
        <!--end::Container-->
    @endcan
@endsection

{{--
<!--begin::جستجو Form-->
<div class="mb-7">
    <div class="row align-items-center">
        <div class="col-lg-9 col-xl-8">
            <div class="row align-items-center">
                <div class="col-md-4 my-2 my-md-0">
                    <div class="input-icon">
                        <input type="text" class="form-control" placeholder="جستجو..." id="kt_datatable_search_query" />
                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                    </div>
                </div>

                <div class="col-md-4 my-2 my-md-0">
                    <div class="d-flex align-items-center">
                        <label class="mr-3 mb-0 d-none d-md-block">جنسیت:</label>
                        <select class="form-control selectpicker" id="kt_datatable_search_status">
                            <option value="">همه</option>
                            <option value="male">آقا</option>
                            <option value="female">خانم</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 my-2 my-md-0">
                    <div class="d-flex align-items-center">
                        <label class="mr-3 mb-0 d-none d-md-block">نوع:</label>
                        <select class="form-control selectpicker" id="kt_datatable_search_type">
                            <option value="">همه</option>
                            <option value="1">Online</option>
                            <option value="2">Retail</option>
                            <option value="3">Direct</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0 text-center text-md-left">
            <a href="#" class="btn btn-light-primary px-6 font-weight-bold ">
                جستجو
            </a>
        </div>
    </div>
</div>
<!--end::جستجو Form-->
--}}
