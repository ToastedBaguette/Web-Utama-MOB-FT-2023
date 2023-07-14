@extends('layouts.admin')
@section('style')
<link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('naved')
<li class="menu-item " aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section ">
    <h4 class="menu-text">Acara</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="/ed" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Rundown</span>
    </a>
</li>
<li class="menu-section ">
    <h4 class="menu-text">Pengumuman</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/pengumuman" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Pengumuman</span>
    </a>
</li>
@endsection


@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="margin-top:-1%">
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="">
                <!-- d-flex align-items-center mr-1 -->
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Pengumuman</h2>

                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>

    </div>

    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">

                        <h3 class="card-label">Buat Pengumuman Baru</h3>
                    </div>

                </div>
                <div class="card-body" style="min-height:400px;">
                    <form action="{{route('createPengumuman')}}" method="post">
                        @csrf
                        <textarea name="editor1" required></textarea>
                        <button type="submit" class="btn btn-success mt-4" style="width:100PX;float:right;">Buat</button>
                    </form>
                </div>
            </div>
            <!--end::Card-->
        </div>

        <!--end::Card-->
    </div>
</div>
<!--end::Card-->



<!--end::Container-->
<!-- </div> -->
<!--end::Entry-->

@endsection
@section('script')
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<!-- pake script ini buat tambahan ya -->
<script>
    CKEDITOR.replace('editor1');
</script>

@endsection