<!--begin::Header-->
<div id="kt_header" class="header  header-fixed ">
    <!--begin::Container-->
    <div class=" container-fluid  d-flex align-items-stretch justify-content-end">
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::جستجو-->
            <div class="dropdown" id="kt_quick_search_toggle">
                <x-dashboard.header.search.item/>
                <x-dashboard.header.search.dropdown/>
            </div>
            <!--end::جستجو-->

            <!--begin::اعلان ها-->
            <x-dashboard.notification/>
            <!--end::اعلان ها-->
            <!--begin::User-->
            <div class="topbar-item">
                <span class="text-dark-50 font-weight-bolder font-size-base d-md-inline mr-3">
                    @yield('user_name', $name ?? 'پنل مدیریت')
                </span>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
