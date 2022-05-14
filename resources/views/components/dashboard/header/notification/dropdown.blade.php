<!--begin::دراپ دان-->
<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
    <form>
        <!--begin::Header-->
        <div class="d-flex flex-column py-12 bgi-size-cover bgi-no-repeat rounded-top"
             style="background-image: url({{asset('dashboard/img/notifications-bg.jpg')}})">
            <!--begin::Title-->
            <h4 class="d-flex flex-center rounded-top">
                <p class="text-white">اعلان ها</p>
            </h4>
            @if(count($notifications) > 0)
                <h4 class="d-flex flex-center rounded-top">
                    <a class="btn btn-outline-white btn-sm">ثبت همه به عنوان خوانده شده</a>
                </h4>
            @endif

            <!--end::Title-->
        </div>
        <!--end::Header-->

        <!--begin::Content-->
        <div class="tab-content">

            <!--begin::Tabpane-->
            <div class="tab-pane active show p-8">

                @if(count($notifications) > 0)
                <!--begin::Scroll-->
                <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
                    <!--begin::Item-->
                    @foreach($notifications as $notification)
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::سیمبل-->
                            <div class="symbol symbol-40 symbol-light-primary mr-5">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        {!! $notification->icon !!}
                                   </span>
                                </span>
                            </div>
                            <!--end::سیمبل-->

                            <!--begin::متن-->
                                <div class="d-flex flex-column font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 ">
                                        {{$notification->message}}
                                    </a>
                                    <span class="text-muted">{{$notification->time}}</span>
                                </div>
                            <!--end::متن-->
                        </div>
                    @endforeach
                    <!--end::Item-->
                </div>
                <!--end::Scroll-->
                @else
                    <div class="d-flex flex-center text-center text-muted min-h-200px">
                        هیچ اعلان جدیدی وجود ندارد
                    </div>
                @endif
                <!--begin::اکشن-->

{{--                <div class="d-flex flex-center pt-7">--}}
{{--                    <a href="#" class="btn btn-light-primary font-weight-bold text-center">--}}
{{--                       مشاهده همه--}}
{{--                    </a>--}}
{{--                </div>--}}

                <!--end::اکشن-->
            </div>
            <!--end::Tabpane-->
            <!--begin::Nav-->

            <!--end::Nav-->
        </div>
        <!--end::Content-->
    </form>
</div>
<!--end::دراپ دان-->
