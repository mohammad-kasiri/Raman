@extends('admin.layout.master' , ['title' => ' مشاهده ی پروفایل '])
@section('title' , 'مشاهده ی پروفایل')
@section('subheader')
    @php
        $buttons = [
            [
                'title'  =>  'لیست بیماران' ,
                'icon'   =>  '<i class="fas fa-undo icon-nm"></i>' ,
                'route'  =>  route('admin.patients.index') ,
                'color'  =>  'btn-light-warning'
             ],
        ];
    @endphp
    <x-dashboard.subheader :links='$buttons' :title="' پروفایل ' . $patient->fullname" />
@endsection

@section('content')
    <!--begin::Entry-->
    <!--begin::Container-->
    <div class=" container ">
        <!--begin::پروفایل بررسی-->
        <div class="d-flex flex-row">
            <!--begin::Aside-->
            <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
                <!--begin::پروفایل Card-->
                <div class="card card-custom card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::User-->
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-60 symbol-xxl-100 mr-5  align-self-start align-self-xxl-center">
                                <div class="symbol-label" style="background-image:url('{{ $patient->avatar() }}')"></div>
                                <i class="symbol-badge bg-success"></i>
                            </div>
                            <div>
                                <p  class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">
                                    {{$patient->fullname}}
                                </p>
                                <div class="text-muted">
                                    جنسیت : {{$patient->gender()}}
                                </div>
                            </div>
                        </div>
                        <!--end::User-->

                        <!--begin::مخاطب-->
                        <div class="py-9">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">ایمیل:</span>
                                <a href="mailto:{{$patient->email ?? ''}}" class="text-muted text-hover-primary">{{$patient->email ? : 'وارد نشده'}}</a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">تلفن:</span>
                                <a href="tel:{{$patient->mobile}}" class="text-muted text-hover-primary">{{$patient->mobile}}</a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">آخرین ورود:</span>
                                <p class="text-muted text-hover-primary">{{$patient->last_login()}}</p>
                            </div>
                        </div>
                        <!--end::مخاطب-->

                        <!--begin::Nav-->
                        <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                            <div class="navi-item mb-2">
                                <a href="#" class="navi-link py-4 active">
                                    <span class="navi-icon mr-2">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/desgin/Layers.svg-->
                                                <x-dashboard.icons.svg.user/>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-size-lg">
                                        اطلاعات کلی
                                    </span>
                                </a>
                            </div>
                            <div class="navi-item mb-2">
                                <a  href="custom/apps/profile/profile-1/personal-information.html" class="navi-link py-4 ">
                                    <span class="navi-icon mr-2">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/User.svg-->
                                                <x-dashboard.icons.svg.layer/>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-size-lg">
                                        لیست جلسات مشاوره
                                    </span>
                                </a>
                            </div>
                            <div class="navi-item mb-2">
                                <a  href="{{route('admin.patients.edit' , $patient->id)}}" class="navi-link py-4 ">
                                    <span class="navi-icon mr-2">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/User.svg-->
                                                <x-dashboard.icons.svg.edit/>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-size-lg">
                                        ویرایش کاربر
                                    </span>
                                </a>
                            </div>
                            <div class="navi-item mb-2">
                                <a href="custom/apps/profile/profile-1/account-information.html" class="navi-link py-4 ">
                                    <span class="navi-icon mr-2">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/کد/Compiling.svg-->
                                                <x-dashboard.icons.svg.compiling/>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-size-lg">
                                        نشست های کاربر
                                    </span>
                                </a>
                            </div>
                            <div class="navi-item mb-2">
                                <a href="custom/apps/profile/profile-1/account-information.html" class="navi-link py-4 ">
                                    <span class="navi-icon mr-2">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/کد/Compiling.svg-->
                                                <x-dashboard.icons.svg.money/>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-size-lg">
                                        لیست تراکنش ها
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::پروفایل Card-->
            </div>
            <!--end::Aside-->

            <!--begin::Content-->
            <div class="flex-row-fluid ml-lg-8">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-lg-7">
                        <!--begin::لیست Widget 14-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">اطلاعات کلی کاربر</h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body pt-2">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-vertical-center">
                                        <tbody>
                                            <tr>
                                                <td class="pl-0">
                                                    <p  class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                                        شغل
                                                    </p>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-muted font-weight-bold">
                                                        {{$patient?->patient->career ?? 'وارد نشده'}}
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0">
                                                    <p class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                                        استان و شهر
                                                    </p>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-muted font-weight-bold">
                                                        {{$patient?->patient?->livingCity() ?? "وارد نشده"}}
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0">
                                                    <p class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                                        آدرس
                                                    </p>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-muted font-weight-bold cursor-pointer" data-container="body"  data-delay="500" data-toggle="popover" data-placement="top" data-content=" {{$patient?->patient->address ?? 'وارد نشده'}}">
                                                        {{$patient?->patient?->addressWithLimit() ?? 'وارد نشده'}}
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0">
                                                    <p class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                                        تاریخ تولد
                                                    </p>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-muted font-weight-bold">
                                                        {{$patient?->patient?->birthdate() ?? 'وارد نشده' }}
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0">
                                                    <p class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                                        سن
                                                    </p>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-muted font-weight-bold">
                                                        {{$patient?->patient?->age() ?? 'وارد نشده' }}
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0">
                                                    <p class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                                        وضعیت تاهل
                                                    </p>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-muted font-weight-bold">
                                                        {{$patient->patient->marital_status ?? 'وارد نشده'}}
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0">
                                                    <p class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                                        تاریخ عضویت در سایت
                                                    </p>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-muted font-weight-bold">
                                                        {{$patient->created_at()}}
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::لیست Widget 14-->
                    </div>
                    <div class="col-lg-5">
                        <!--begin::لیست Widget 10-->
                        <div class="card card-custom  card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">سابقه نشست ها</h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body pt-0">
                                @foreach($patient->userSessions as $userSession)
                                    <!--begin::Item-->
                                        <div class="mb-6">
                                            <!--begin::Content-->
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <!--begin::Section-->
                                                <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                    <!--begin::اطلاعات-->
                                                    <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                        <!--begin::Title-->
                                                        <a class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">
                                                            {{$userSession->created_at()}}
                                                        </a>
                                                        <!--end::Title-->
                                                        <!--begin::Data-->
                                                        <span class="text-muted font-weight-bold">
                                                            {{$userSession->ip_address}}
                                                        </span>
                                                        <!--end::Data-->
                                                    </div>
                                                    <!--end::اطلاعات-->
                                                    <div class="d-flex flex-column align-items-cente py-2 text-right">
                                                        <!--begin::Title-->
                                                        <a class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1 d-block">
                                                            {{$userSession->browser}}
                                                        </a>
                                                        <!--end::Title-->
                                                        <!--begin::Data-->
                                                        <span class="text-muted font-weight-bold">
                                                            {{$userSession->platform}}
                                                        </span>
                                                        <!--end::Data-->
                                                    </div>
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                    <!--end::Item-->
                                @endforeach
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end: Card-->
                        <!--end: لیست Widget 10-->
                    </div>
                </div>
                <!--end::Row-->

                <!--begin::پیشرفت Table: Widget 7-->
                <div class="card card-custom gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">آخرین جلسات مشاوره</span>
                            <a href="#" class="text-muted mt-3  text-hover-primary font-weight-bold font-size-sm">مشاهده ی همه</a>
                        </h3>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body py-2">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-borderless table-vertical-center">
                                <thead>
                                <tr>
                                    <th class="p-0" style="width: 50px"></th>
                                    <th class="p-0" style="min-width: 200px"></th>
                                    <th class="p-0" style="min-width: 120px"></th>
                                    <th class="p-0" style="min-width: 120px"></th>
                                    <th class="p-0" style="min-width: 120px"></th>
                                    <th class="p-0" style="min-width: 160px"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="p-0 py-4">
                                        <div class="symbol symbol-50 symbol-light">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">سان برجسته</a>
                                        <div>
                                            <span class="font-weight-bolder">پست الکترونیک:</span>
                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                2,000,000دلار
                            </span>
                                        <span class="text-muted font-weight-bold">
                                پرداخت شده
                            </span>
                                    </td>
                                    <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                  جی اس,  جی اس
                            </span>
                                    </td>
                                    <td class="text-right">
                                        <span class="label label-lg label-light-primary label-inline">تایید شده</span>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/تنظیمات-1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"/>
        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/general/زباله ها.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 py-4">
                                        <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">تلگرام موبایل</a>
                                        <span class="text-muted font-weight-bold d-block"><span class="font-weight-bolder text-dark-75">FTP:</span> bprow@bnc.cc</span>
                                    </td>
                                    <td class="text-right">
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                4,600,000دلار
                            </span>
                                        <span class="text-muted font-weight-bold">
                                پرداخت شده
                            </span>
                                    </td>
                                    <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                 دیتابیس
                            </span>
                                    </td>
                                    <td class="text-right">
                                        <span class="label label-lg label-light-warning label-inline">میزان پیشرفت</span>
                                    </td>
                                    <td class="p-0 text-right">
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/تنظیمات-1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"/>
        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/general/زباله ها.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 py-4">
                                        <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">مدیریت سیسکو</a>
                                        <span class="text-muted font-weight-bold d-block"><span class="font-weight-bolder text-dark-75">FTP:</span> bprow@bnc.cc</span>
                                    </td>
                                    <td class="text-right">
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                560,000دلار
                            </span>
                                        <span class="text-muted font-weight-bold">
                                پرداخت شده
                            </span>
                                    </td>
                                    <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                لاراول, مترونیک
                            </span>
                                    </td>
                                    <td class="text-right">
                                        <span class="label label-lg label-light-success label-inline">موفقیت</span>
                                    </td>
                                    <td class="p-0 text-right">
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/تنظیمات-1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"/>
        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/general/زباله ها.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 py-4">
                                        <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">استودیوی بیت</a>
                                        <span class="text-muted font-weight-bold d-block">FTP: bprow@bnc.cc</span>
                                    </td>
                                    <td class="text-right pr-0">
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                دلار57,000
                            </span>
                                        <span class="text-muted font-weight-bold">
                                پرداخت شده
                            </span>
                                    </td>
                                    <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                آنگولارجی اس, C#
                            </span>
                                    </td>
                                    <td class="text-right">
                                        <span class="label label-lg label-light-danger label-inline">رد شد</span>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/تنظیمات-1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"/>
        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/general/زباله ها.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 py-4">
                                        <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">اپلیکیشن مترونیک</a>
                                        <span class="text-muted font-weight-bold d-block"><span class="font-weight-bolder text-dark-75">FTP:</span> bprow@bnc.cc</span>
                                    </td>
                                    <td class="text-right">
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                45,200,000دلار
                            </span>
                                        <span class="text-muted font-weight-bold">
                                پرداخت شده
                            </span>
                                    </td>
                                    <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                ری اکت
                            </span>
                                    </td>
                                    <td class="text-right">
                                        <span class="label label-lg label-light-warning label-inline">میزان پیشرفت</span>
                                    </td>
                                    <td class="p-0 text-right">
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/تنظیمات-1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"/>
        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/general/زباله ها.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::پیشرفت Table Widget 7-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::پروفایل بررسی-->
    </div>
    <!--end::Entry-->
@endsection
