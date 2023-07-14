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

            <!-- begin: sweetalert -->

            @if (session('status'))
            <div class="alert alert-custom alert-light-success fade show mb-5" role="alert" style="width:100%; Max-height:5em;">
                <div class="alert-icon"><i class="flaticon2-check-mark icon-lg"></i></div>
                <div class="alert-text" style="font-size:120%;"><label for="">{{session('status')}}</label></div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
            @elseif (session('error'))
            <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert" style="width:100%; Max-height:5em;">
                <div class="alert-icon"><i class="flaticon2-warning "></i></div>
                <div class="alert-text">{{session('error')}}</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
            @endif


            <!-- end: sweetalert -->


            <!-- start: daftar pengumuman -->
            <div class="card card-custom" style="min-height:200px;">
                <div class="card-header">
                    <div class="card-title">

                        <h3 class="card-label">Daftar Pengumuman</h3>
                    </div>
                    <a href="/pengumuman/buat">
                        <button type="button" class="btn btn-success" style="float:right;margin-top:10%;">Tambah Pengumuman</button>
                    </a>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->

                    @if(count($listp) > 0)
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable" style="text-align:center;">
                        <thead style="text-align:center;">
                            <th>Id</th>
                            <th>Isi Pengumuman</th>
                            <th>Aksi</th>

                        </thead>
                        <tbody style="text-align:center;">
                            @foreach($listp as $r)
                            <tr>
                                <td>{{$r->idpengumuman}}</td>
                                <td>{{$r->isi}}</td>
                                <td style="text-align:center;">
                                    <a href="{{url('deletePengumuman/'.$r->idpengumuman)}}" class="btn btn-danger">Hapus</a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot style="text-align:center;">
                            <th>Id</th>
                            <th>Isi Pengumuman</th>
                            <th>Aksi</th>
                        </tfoot>
                    </table>
                    @elseif(count($listp) === 0)
                    <h4 style="color:#bebebe;text-align: center;margin-top:2%;">Belum ada pengumuman</h4>
                    @endif

                    <!--end: Datatable-->
                </div>
            </div>
            <!-- end: daftar pengumuman -->

        </div>

        <!--end::Card-->
    </div>
</div>
<!--end::Card-->
<!--end::Container-->

<!--end::Entry-->


@endsection
@section('script')
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<!-- pake script ini buat tambahan ya -->
<script>
    CKEDITOR.replace('editor1');
</script>

<!--begin::Page Vendors(used by this page)-->
<script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('admin/js/pages/crud/datatables/basic/paginations.js') }}"></script>

@endsection
