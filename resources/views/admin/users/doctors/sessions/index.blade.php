@extends('admin.layout.master' , ['title' => 'لیست نشست های پزشک'])
@section('title' , 'لیست نشست های پزشک')

@section('subheader')
    @can('patients.create')
        @php
            $buttons = [
                ['title' => 'مشاهده پزشک' , 'icon' => '<i class="fas fa-undo icon-nm"></i>' , 'route' => route('admin.doctors.show' , $doctor->id) ],
            ];
        @endphp
    @endcan
    <x-dashboard.subheader :links='$buttons ?? []' :title="'لیست نشست های پزشک'" />
@endsection

@section('content')
    <div class=" container ">
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">
                        نشست های {{$doctor->fullname}}
                    </h3>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table ">
                        <thead>
                        <tr class="text-muted">
                            <th class="text-center">#</th>
                            <th class="text-center">دستگاه</th>
                            <th class="text-center">مرورگر</th>
                            <th class="text-center">پلتفرم</th>
                            <th class="text-center">IP</th>
                            <th class="text-center">IP City</th>
                            <th class="text-center">IP Country</th>
                            <th class="text-center">IP ISP</th>
                            <th class="text-center">منطقه زمانی</th>
                            <th class="text-center">تاریخ ثبت</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sessions as $key=>$session)
                            <tr>
                                <td class="text-center align-middle"> {{\App\Functions\PaginationCounter::item($sessions , $key)}} </td>
                                <td class="text-center align-middle"> {{$session->device}} </td>
                                <td class="text-center align-middle"> {{ $session-> browser}} </td>
                                <td class="text-center align-middle"> {{ $session->platform }} </td>
                                <td class="text-center align-middle"> {{ $session->ip_address }} </td>
                                <td class="text-center align-middle"> {{ $session->city }} </td>
                                <td class="text-center align-middle"> {{ $session->country }} </td>
                                <td class="text-center align-middle"> {{ $session->isp }} </td>
                                <td class="text-center align-middle"> {{ $session->timezone }} </td>
                                <td class="text-center align-middle"> {{ $session->created_at() }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end::Card-->
        <div class="text-center mt-5">
            {{$sessions->render()}}
        </div>
    </div>
    <!--end::Container-->
@endsection
