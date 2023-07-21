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
<li class="menu-item  menu-item-active" aria-haspopup="true">
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
<li class="menu-item" aria-haspopup="true">
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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Acara</h2>

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
            <div class="alert alert-custom alert-light-success fade show mb-5" role="alert"
                style="width:100%; Max-height:5em;">
                <div class="alert-icon"><i class="flaticon2-check-mark icon-lg"></i></div>
                <div class="alert-text" style="font-size:120%;"><label for="">{{session('status')}}</label></div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
            @elseif (session('error'))
            <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert"
                style="width:100%; Max-height:5em;">
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

            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">

                        <h3 class="card-label">Rundown</h3>
                    </div>
                    <a href='#modalAdd' data-toggle='modal'>
                        <button type="button" class="btn btn-success" style="float:right;margin-top:10%;">Tambah
                            Acara</button>
                    </a>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                        <thead style="text-align:center;">
                            <tr>
                            <tr>
                                <!-- <th rowspan="2">ID</th> -->
                                <th rowspan="2">Tanggal</th>
                                <th colspan="2">Waktu</th>
                                <th rowspan="2">Kegiatan</th>
                                <th rowspan="2">Konten</th>
                                <th rowspan="2">Media</th>
                                <th rowspan="2">Aksi</th>
                            </tr>
                            <tr>
                                <th>Awal</th>
                                <th>Akhir</th>
                            </tr>
                            </tr>

                        </thead>
                        <tbody style="text-align:center;">
                            @foreach($rd as $r)
                            <tr>
                                <!-- <td>{{$r->idrundown}}</td> -->
                                <td>{{ \Carbon\Carbon::parse($r->tanggal)->format('d/m/Y')}}</td>
                                <td>{{$r->waktu_awal}}</td>
                                <td>{{$r->waktu_akhir}}</td>
                                <td>{{$r->kegiatan}}</td>
                                <td>{{$r->content}}</td>
                                <td>{{$r->media}}</td>
                                <td style="text-align:center;"><a href="{{ url('ed/'.$r->idrundown.'/edit')}}"
                                        class="btn btn-warning">Ubah</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot style="text-align:center;">
                            <tr>
                            <tr>
                                <th rowspan="2">Tanggal</th>
                                <th>Awal</th>
                                <th>Akhir</th>
                                <th rowspan="2">Kegiatan</th>
                                <th rowspan="2">Konten</th>
                                <th rowspan="2">Media</th>
                                <th rowspan="2">Aksi</th>
                            </tr>
                            <tr>
                                <th colspan="2">Waktu</th>
                            </tr>
                            </tr>
                        </tfoot>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->


        </div>
    </div>
    <!--end::Card-->

    <!--end::Container-->
</div>
<!--end::Entry-->
<div class="modal fade" id="modalAdd" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">
            <form action="{{ route('tambahrundown') }}" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Acara</h4>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label for="">Tanggal</label><br>
                            <input type="date" class="form-control" name="date"><br>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>Waktu Awal</label>
                                <input type="time" class="form-control" id="waktu_awal" name="waktu_awal" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Waktu Akhir</label>
                                <input type="time" class="form-control" id="waktu_akhir" name="waktu_akhir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kegiatan</label>
                            <input type="text" class="form-control" id="kegiatan" name="kegiatan" required>
                        </div>
                        <div class="form-group">
                            <label>Konten</label>
                            <input type="text" class="form-control" id="content" name="content">
                        </div>
                        <div class="form-group">
                            <label>Media</label>
                            <select class="form-control" id='media' name='media' style="width:100%;" required>
                                <option value="youtube">Youtube</option>
                                <option value="link">Link</option>
                                <option value="form">Form</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<!--begin::Page Vendors(used by this page)-->
<script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('admin/js/pages/crud/datatables/basic/paginations.js') }}"></script>

<!--end::Page Scripts-->
@endsection