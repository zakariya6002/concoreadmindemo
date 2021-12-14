@extends('admin.admin_master')

@section('admin')
<div class="d-flex flex-wrap flex-stack mb-6">
    <!--begin::Title-->
    <h3 class="fw-bolder my-2">My Documents
        <span class="fs-6 text-gray-400 fw-bold ms-1">100+ resources</span>
    </h3>
    <!--end::Title-->
    <!--begin::Controls-->
    <div class="d-flex my-2">
        <a href="#" class='btn btn-primary btn-sm' data-bs-toggle="tooltip" title="Coming soon">File Manager</a>
    </div>
    <!--end::Controls-->
</div>
<div class="row g-6 g-xl-9 mb-6 mb-xl-9">

    <!--begin::Col-->
    <div class="col-md-6 col-lg-4 col-xl-3">
        <!--begin::Card-->
        <div class="card h-100">
            <!--begin::Card body-->
            <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                <!--begin::Name-->
                <a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
                    <!--begin::Image-->
                    <div class="symbol symbol-75px mb-5">
                        <img src="{{url('backend/media/svg/files/folder-document.svg')}}" alt="" />
                    </div>
                    <!--end::Image-->
                    <!--begin::Title-->
                    <div class="fs-5 fw-bolder mb-2">Personal</div>
                    <!--end::Title-->
                </a>
                <!--end::Name-->
                <!--begin::Description-->
                <div class="fs-7 fw-bold text-gray-400">25 files</div>
                <!--end::Description-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Col-->
</div>

@endsection