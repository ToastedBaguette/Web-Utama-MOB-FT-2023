@extends('layouts.admin')
@section('style')
<link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('navkontingen')
<li class="menu-item" aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section ">
    <h4 class="menu-text">Rector Cup</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/kontingen" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Cabang</span>
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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Rector Cup 2021</h2>

                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>

    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">

                    <h3 class="card-label">Daftar Cabang</h3>
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                    <thead style="text-align:center;">
                        <tr>
                            <th>Nama Cabang</th>
                            <th>Medali</th>
                            <th>Tanggal Seleksi</th>
                            <th>Jam Seleksi</th>
                            <th>Status</th>
                            <th>Kuota</th>
                            <th>Koorcab</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody style="text-align:center;">
                        @foreach($data as $h)
                        <tr>
                            <td>{{$h->nama_cabang}}</td>
                            <td>{{$h->medali}}</td>
                            <td>{{$h->tanggal_seleksi}}</td>
                            <td>{{$h->jam_seleksi}}</td>
                            <td>{{$h->status}}</td>
                            <td>{{$h->kuota}}</td>
                            <td>{{$h->nrp_koor}} - {{$h->name}}</td>
                            <td><a href="{{url('/kontingen/'.$h->idrc)}}" class="btn btn-success" style="max-width:100px;">Detail</a></td>
                        </tr>

                        @endforeach
                    </tbody>
                    <tfoot style="text-align:center;">
                        <tr>
                            <th>Nama Cabang</th>
                            <th>Medali</th>
                            <th>Tanggal Seleksi</th>
                            <th>Jam Seleksi</th>
                            <th>Status</th>
                            <th>Kuota</th>
                            <th>Koorcab</th>
                            <th>Aksi</th>

                        </tr>
                    </tfoot>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->

        <!--end::Container-->
    </div>
</div>
<!--end::Entry-->

@endsection
@section('script')
<!--begin::Page Vendors(used by this page)-->
<script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('admin/js/pages/crud/datatables/basic/paginations.js') }}"></script>

<!--end::Page Scripts-->
@endsection