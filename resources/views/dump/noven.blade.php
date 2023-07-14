@extends('layouts.admin')
@section('style')
<link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('navmaping')
<li class="menu-item" aria-haspopup="true">
    <a target="_blank" href="https://preview.keenthemes.com/metronic/demo5/builder.html" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Beranda</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Kelompok</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a target="_blank" href="https://preview.keenthemes.com/metronic/demo5/builder.html" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text  ">Alfa</span>
    </a>
</li>
<li class="menu-item" aria-haspopup="true">
    <a target="_blank" href="https://preview.keenthemes.com/metronic/demo5/builder.html" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Beta</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Presensi</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item" aria-haspopup="true">
    <a target="_blank" href="https://preview.keenthemes.com/metronic/demo5/builder.html" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Presensi</span>
    </a>
</li>
@endsection


@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Kelompok Alfa</span></h2>

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

                        <h3 class="card-label">Daftar Nama</h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                        <thead>
                            <tr>
                                <th>NRP</th>
                                <th>Nama Lengkap</th>
                                <th>Alfa</th>
                                <th>Beta</th>
                                <th>Asal Sekolah</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alpha as $mhr)
                            <tr>
                                <td>
                                    <a href='#modalChange_{{$mhr->nrp}}' data-toggle='modal'>
                                        <button type="button" class="btn btn-dark" style="min-width:100px">{{$mhr->nrp}}</button>
                                    </a>
                                    <div class="modal fade" id="modalChange_{{$mhr->nrp}}" tabindex="-1" role="basic" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{$mhr->name}}</h4>
                                                </div>
                                                <div class="modal-body ml-3">
                                                    Nama Lengkap : {{$mhr->name}} <br>
                                                    No. Telp : {{$mhr->no_hp}} <br>
                                                    Line : {{$mhr->id_line}} <br>
                                                    Email : {{$mhr->email}} <br>
                                                    Instagram : {{$mhr->instagram}} <br>
                                                    Asal Sekolah : {{$mhr->asal_sekolah}} <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$mhr->name}}</td>
                                <td>{{$mhr->alpha}}</td>
                                <td>{{$mhr->beta}}</td>
                                <td>{{$mhr->asal_sekolah}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>NRP</th>
                                <th>Nama Lengkap</th>
                                <th>Alfa</th>
                                <th>Beta</th>
                                <th>Asal Sekolah</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">

                        <h3 class="card-label">Input Presensi Alfa</h3>
                        <small>Pastikan melakukan absensi sebelum jam yang tertera</small>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                        <thead>
                            <tr>
                                <th>NRP</th>
                                <th>Nama Lengkap</th>
                                <th>Alfa</th>
                                <th>Beta</th>
                                <th>Asal Sekolah</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alpha as $mhr)
                            <tr>
                                <td>
                                    <a href='#modalChange_{{$mhr->nrp}}' data-toggle='modal'>
                                        <button type="button" class="btn btn-dark" style="min-width:100px">{{$mhr->nrp}}</button>
                                    </a>
                                    <div class="modal fade" id="modalChange_{{$mhr->nrp}}" tabindex="-1" role="basic" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{$mhr->name}}</h4>
                                                </div>
                                                <div class="modal-body ml-3">
                                                    Nama Lengkap : {{$mhr->name}} <br>
                                                    No. Telp : {{$mhr->no_hp}} <br>
                                                    Line : {{$mhr->id_line}} <br>
                                                    Email : {{$mhr->email}} <br>
                                                    Instagram : {{$mhr->instagram}} <br>
                                                    Asal Sekolah : {{$mhr->asal_sekolah}} <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$mhr->name}}</td>
                                <td>{{$mhr->alpha}}</td>
                                <td>{{$mhr->beta}}</td>
                                <td>{{$mhr->asal_sekolah}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>NRP</th>
                                <th>Nama Lengkap</th>
                                <th>Alfa</th>
                                <th>Beta</th>
                                <th>Asal Sekolah</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!--end: Datatable-->
            </div>
        </div>
    </div>
    <!--end::Card-->

    <!--end::Container-->
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