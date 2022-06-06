@extends('admin.layout.master' , ['title' => ' مشاهده ی پروفایل پزشک'])
@section('title' , 'مشاهده ی پروفایل پزشک')
@section('subheader')
    @php
        $buttons = [
            [
                'title'  =>  'لیست پزشک ها' ,
                'icon'   =>  '<i class="fas fa-undo icon-nm"></i>' ,
                'route'  =>  route('admin.doctors.index') ,
                'color'  =>  'btn-light-warning'
             ],
        ];
    @endphp
    <x-dashboard.subheader :links='$buttons' :title="' پروفایل ' . $doctor->fullname" />
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
                                <div class="symbol-label" style="background-image:url('{{ $doctor->avatar() }}')"></div>
                                <i class="symbol-badge bg-success"></i>
                            </div>
                            <div>
                                <p  class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">
                                    {{$doctor->fullname}}
                                </p>
                                <div class="text-muted">
                                    جنسیت : {{$doctor->gender()}}
                                </div>
                            </div>
                        </div>
                        <!--end::User-->

                        <!--begin::مخاطب-->
                        <div class="py-9">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">ایمیل:</span>
                                <a href="mailto:{{$doctor->email ?? ''}}" class="text-muted text-hover-primary">{{$doctor->email ? : 'وارد نشده'}}</a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">تلفن:</span>
                                <a href="tel:{{$doctor->mobile}}" class="text-muted text-hover-primary">{{$doctor->mobile}}</a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">آخرین ورود:</span>
                                <p class="text-muted text-hover-primary">{{$doctor->last_login()}}</p>
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
                            @can('patients.edit')
                                <div class="navi-item mb-2">
                                    <a  href="{{route('admin.doctors.edit' , $doctor->id)}}" class="navi-link py-4 ">
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
                            @endcan
                            @can('patients.session.index')
                                <div class="navi-item mb-2">
                                    <a href="{{route('admin.doctors.session.index' , $doctor->id)}}" class="navi-link py-4 ">
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
                            @endcan
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
                    <div class="@can('doctors.session.index') col-lg-7 @endcan  @cannot('doctors.session.index') col-lg-12 @endcannot">
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
                                                    هزینه مشاوره هر دقیقه (تومان)
                                                </p>
                                            </td>
                                            <td class="text-right">
                                                    <span class="text-muted font-weight-bold">
                                                        {{$doctor?->doctor->price_per_minute ?? 'وارد نشده'}}
                                                    </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0">
                                                <p  class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                                    قابلیت نمایش روی سایت
                                                </p>
                                            </td>
                                            <td class="text-right">
                                                    <span class="text-muted font-weight-bold">
                                                        {{$doctor?->doctor->is_visible ? "قابل مشاهده" : "غیر قابل مشاهده"}}
                                                    </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="pl-0">
                                                <p class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                                    مدت سابقه کاری
                                                </p>
                                            </td>
                                            <td class="text-right">
                                                    <span class="text-muted font-weight-bold">
                                                        {{$doctor?->doctor?->firstDayOfWork() ?? 'وارد نشده' }}
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
                                                        {{$doctor->created_at()}}
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
                    @can('patients.session.index')
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
                                    @foreach($doctor->userSessions as $userSession)
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
                    @endcan
                </div>
                <!--end::Row-->

                <!--begin::Row-->
                <div class="row">
                    <div class="col-lg-4">
                        <!--begin::لیست Widget 14-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h2 class="card-title font-weight-bolder text-dark">سوابق</h2>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2">
                                @if(!is_null($doctor->doctor->educational_background))
                                    <h5 class="card-title font-weight-bolder text-dark">سوابق تحصیلی</h5>
                                    @foreach(explode(\App\Models\Doctor::SEPRATOR_CHARACTOR, $doctor->doctor->educational_background) as $education)
                                        <div class="d-flex align-items-center mb-4">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-bar bg-success align-self-stretch"></span>
                                            <!--end::Bullet-->
                                            <!--begin::متن-->
                                            <div class="d-flex flex-column flex-grow-1 ml-4">
                                                <a  class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                 {{$education}}
                                                </a>
                                            </div>
                                            <!--end::متن-->
                                        </div>
                                        <!--end:Item-->
                                    @endforeach
                                @endif

                                @if(!is_null($doctor->doctor->working_background))
                                    <h5 class="card-title font-weight-bolder text-dark">سوابق کاری</h5>
                                    @foreach(explode(\App\Models\Doctor::SEPRATOR_CHARACTOR, $doctor->doctor->working_background) as $work)
                                    <div class="d-flex align-items-center mb-4">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-bar bg-primary align-self-stretch"></span>
                                        <!--end::Bullet-->
                                        <!--begin::متن-->
                                        <div class="d-flex flex-column flex-grow-1 ml-4">
                                            <a  class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                {{$work}}
                                            </a>
                                        </div>
                                        <!--end::متن-->
                                    </div>
                                    <!--end:Item-->
                                @endforeach
                                @endif
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::لیست Widget 14-->
                    </div>
                    <div class="col-lg-5">
                        <!--begin::لیست Widget 14-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h2 class="card-title font-weight-bolder text-dark">بایوگرافی</h2>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2">
                                {{$doctor->doctor->bio}}
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::لیست Widget 14-->
                    </div>
                    <div class="col-lg-3">
                        <!--begin::لیست Widget 10-->
                        <div class="card card-custom  card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">شبکه های اجتماعی</h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body pt-0">
                                @foreach($doctor->socialMedias as $socialMedia)
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center flex-wrap mb-10">
                                        <!--begin::سیمبل-->
                                        <div class="symbol symbol-50 symbol-light mr-5 text-center">
                                            <span class="symbol-label">
                                                <i class="{{$socialMedia->font_awesome}} icon-3x text-center"></i>
                                            </span>
                                        </div>
                                        <!--end::سیمبل-->
                                        <!--begin::متن-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <a href="{{$socialMedia->socialMedia->link}}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">
                                                {{$socialMedia->fa_title}}
                                            </a>
                                            <span class="text-muted font-weight-bold">
                                                 {{$socialMedia->en_title}}
                                            </span>
                                        </div>
                                        <!--end::متن-->
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

            </div>
            <!--end::Content-->
        </div>
        <!--end::پروفایل بررسی-->
    </div>
    <!--end::Entry-->
@endsection
