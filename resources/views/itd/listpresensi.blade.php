@extends('layouts.admin')
@section('style')
<link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('navitd')
<li class="menu-item " aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Admin</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="/itd" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Maharu</span>
    </a>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="{{url('itdpanitia')}}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Panitia</span>
    </a>
</li>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="{{url('itdpresensi')}}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Presensi</span>
    </a>
</li>

@endsection


@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="">
                <!-- d-flex align-items-center mr-1 -->
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5 ml-3">
                    <!--begin::Page Title-->
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Heyo anak ITD, {{Auth::user()->name}}</h2>

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
            <div class="">
                @if (session('status'))
                <div class="alert alert-custom alert-light-success fade show mb-5" role="alert" style="width:100%; Max-height:4em;">
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

            </div>
            <!-- end: sweetalert -->
            <!-- <a href='#modalAdd' data-toggle='modal'>
                <button type="button" class="btn btn-success" style="min-width:100px">Tambah Presensi</button>
            </a> -->
            <div class="card card-custom shadow-none">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Daftar Presensi</h3>
                    </div>
                    <div class="card-toolbar">
                        <a href='#modalAdd' data-toggle='modal'>
                            <button type="button" class="btn btn-success" style="min-width:100px">Tambah Presensi</button>
                        </a>
                        <!-- <a href="#" class="btn btn-sm btn-success font-weight-bold">
                            <i class="flaticon2-cube"></i>Reports</a> -->
                    </div>
                </div>

                <!-- <div class="card-header">
                    <div class="card-title">

                        <h3 class="card-label">Daftar Presensi</h3>
                    </div>
                </div> -->
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Waktu Awal Buka</th>
                                <th>Waktu Awal Tutup</th>
                                <th>Waktu Akhir Buka</th>
                                <th>Waktu Akhir Tutup</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>
                                    <a href='#modalChange_{{$d->idpresensi}}' data-toggle='modal'>
                                        <button type="button" class="btn btn-success" style="min-width:50px">{{$d->idpresensi}}</button>
                                    </a>
                                    <div class="modal fade" id="modalChange_{{$d->idpresensi}}" tabindex="-1" role="basic" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{$d->tanggal}}</h4>
                                                </div>
                                                <div class="modal-body ml-3">

                                                    <button type="submit" class="btn btn-success mt-4">Ubah</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$d->tanggal}}</td>
                                <td>{{$d->waktu_buka_awal}}</td>
                                <td>{{$d->waktu_tutup_awal}}</td>
                                <td>{{$d->waktu_buka_akhir}}</td>
                                <td>{{$d->waktu_tutup_akhir}}</td>


                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Waktu Awal Buka</th>
                                <th>Waktu Awal Tutup</th>
                                <th>Waktu Akhir Buka</th>
                                <th>Waktu Akhir Tutup</th>
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
            <div class="modal-header">
                <h4 class="modal-title">Tambah Presensi</h4>
            </div>
            <div class="modal-body ml-3">
                <form action="{{ route('tambahpresensi') }}" method="post">
                    @csrf
                    <label for="" class="text-primary">Tanggal</label><br>
                    <input type="date" class="form-control" name="tanggal" required><br>
                    <label for="" class="text-primary">Waktu Awal Buka</label><br>
                    <input type="time" class="form-control" name="waktu_awal_buka" required><br>
                    <label for="" class="text-primary">Waktu Awal Tutup</label><br>
                    <input type="time" class="form-control" name="waktu_awal_tutup" required><br>
                    <label for="" class="text-primary">Waktu Akhir Buka</label><br>
                    <input type="time" class="form-control" name="waktu_akhir_buka" required><br>
                    <label for="" class="text-primary">Waktu Awal Tutup</label><br>
                    <input type="time" class="form-control" name="waktu_akhir_tutup" required><br>

                    <button type="submit" class="btn btn-success mt-4">Tambah</button>
                </form>
            </div>
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