@extends('layouts.admin')
@section('style')
<link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('naved')
<li class="menu-item " aria-haspopup="true">
    <a href="/home2" class="menu-link">
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
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Rundown</span>
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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Rekap Pelanggaran Harian</h2>
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
            <!--begin::Row-->
            <div class="row">
                <a href="#modaltambahrd" data-toggle="modal" type="button" class="btn btn-info">Tambah Baru</a><br><br>
     
                <!--begin::Card-->
                <div class="card card-custom" style="min-width:100%;">
                    <div class="card-header card-header-tabs-line">
                        <div class="card-title">
                            <h3 class="card-label">Rundown Acara</h3>
                        </div>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_2">Hari ke-1</a>
                                </li>
                            <!-- @if(count($hari2) >0) -->
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_2">Hari ke-2</a>
                                </li>
                            <!-- @endif -->
                            <!-- @if(count($hari3) >0) -->
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_2">Hari ke-3</a>
                                </li>
                            <!-- @endif -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" style="min-width:100%;">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1_2" role="tabpanel">
                                <!-- @if(count($hari1) > 0) -->
                                <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                    <thead style="text-align:center;">
                                    <tr>
                                    <tr>
                                        <th style="vertical-align: middle;" rowspan="2">Tanggal</th>
                                        <th colspan="2">Waktu</th>
                                        <th style="vertical-align: middle;" rowspan="2">Kegiatan</th>
                                        <th style="vertical-align: middle;" rowspan="2">Content</th>

                                    </tr>
                                    <tr>
                                        <th>Awal</th>
                                        <th>Akhir</th>
                                    </tr>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($hari1 as $h)
                                        <tr>
                                            <td><a href="#showRekap" onclick="getRekap({{$h->nrp}})" data-toggle='modal' class="text-success">{{$h->nrp}}</a></td>
                                            <td>{{$h->tanggal}}</td>
                                            <td>{{$h->alpha}}</td>
                                            <td>{{$h->beta}}</td>
                                            <td>{{$h->jenis_pelanggaran}}</td>
                                            <td>{{$h->nama_pelanggaran}}</td>
                                            <td>{{$h->keterangan}}</td>
                                            modal nya entar dulu
                                            <td><a href="{{ url('sfd/'.$h->idrekap.'/edit')}}" class="btn btn-warning">Ubah</a></td>

                                        </tr>
                                        @endforeach -->
                                    </tbody>
                                    <tfoot style="text-align:center;">
                                    <tr>
                                    <tr>
                                        <th style="vertical-align: middle;" rowspan="2">Tanggal</th>
                                        <th>Awal</th>
                                        <th>Akhir</th>
                                        <th style="vertical-align: middle;" rowspan="2">Kegiatan</th>
                                        <th style="vertical-align: middle;" rowspan="2">Content</th>

                                    </tr>
                                    <tr>
                                        <th colspan="2">Waktu</th>
                                    </tr>
                                    </tr>
                                    </tfoot>
                                </table>
                                <!--end: Datatable-->
                                <!-- @endif -->
                            </div>

                            <!-- @if(count($hari2) >0) -->
                            <div class="tab-pane fade" id="kt_tab_pane_2_2" role="tabpanel">
                            </div>
                            <!-- @endif -->

                            <!-- @if(count($hari3) >0) -->
                            <div class="tab-pane fade" id="kt_tab_pane_3_2" role="tabpanel">
                               </div>
                            <!-- @endif -->
                        </div>


                    </div>
                    <!--end::Card-->
                    <!--end::Example-->

                    <!-- </div> -->

                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
        <!-- modal -->
        <div class="modal fade" id="showRekap" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" id="modalContent">



                    <!-- ini harusnya diakses dari route show, diambil dari showrekap.blade.php -->



                </div>
            </div>
        </div>
        <!-- end of modal -->
    </div>

    <!-- begin::Modal -->
<div class="modal fade" id="modaltambahrd" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method='POST' action="{{ route('tambahrundown') }}">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Kegiatan</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" id="date" name="date" required>
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
                                <label>Content</label>
                                <input type="text" class="form-control" id="content" name="content" required>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end::Modal -->
@endsection

@section('script')
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('admin/js/pages/crud/datatables/basic/paginations3tabel.js') }}"></script>
    <!--end::Page Scripts-->
@endsection
