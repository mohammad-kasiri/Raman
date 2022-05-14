<!--begin::زیر هدر-->
<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
    <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::اطلاعات-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">{{$title}}</h5>
            <!--end::Page Title-->
            <!--begin::اقدامات-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
            <!--end::اقدامات-->
        </div>
        <!--end::اطلاعات-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            @isset($links)
                @foreach($links as $link)
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                    <a href="{{$link['route']}}" class="btn {{$link['color'] ?? 'btn-light-info'}} font-weight-bolder btn-sm">
                        {!! $link['icon'] !!}
                        {{$link['title']}}
                    </a>
                @endforeach
            @endisset
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--end::زیر هدر-->
