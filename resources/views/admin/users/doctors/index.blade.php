@extends('admin.layout.master' , ['title' => 'لیست پزشک ها'])
@section('title' , 'لیست پزشکان')

@section('subheader')
    @can('doctors.create')
        @php
            $buttons = [
                ['title' => 'افزودن پزشک جدید' , 'icon' => '<i class="fas fa-plus icon-nm"></i>' , 'route' => route('admin.doctors.index') ],
            ];
        @endphp
    @endcan
    <x-dashboard.subheader :links='$buttons ?? []' :title="'لیست پزشک ها'" />
@endsection

@section('content')
    @can('doctors.index')
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
                            لیست پزشک ها
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
                                @can('doctors.show')
                                    <th class="text-center">عملیات</th>
                                @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($doctors as $key=>$doctor)
                                <tr>
                                    <td class="text-center align-middle"> {{\App\Functions\PaginationCounter::item($doctors , $key)}} </td>
                                    <td class="text-center align-middle"> <img src="{{ $doctor->avatar() }}" width="40px"></td>
                                    <td class="text-center align-middle text-nowrap"> {{ $doctor->full_name }}</td>
                                    <td class="text-center align-middle"> <a href="tel:{{ $doctor->mobile }}">{{ $doctor->mobile }}</a> </td>
                                    @can('patients.show')
                                        <td class="text-center align-middle text-nowrap">
                                            <a href="{{ route('admin.doctors.show' , $doctor->id) }}" class="btn btn-icon btn-circle btn-sm btn-outline-info " data-container="body"  data-delay="500" data-toggle="popover" data-placement="top" data-content="مشاهده">
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
                {{$doctors->render()}}
            </div>
        </div>
        <!--end::Container-->
    @endcan
@endsection
