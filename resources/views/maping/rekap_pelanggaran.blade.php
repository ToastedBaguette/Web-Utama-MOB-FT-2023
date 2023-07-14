@extends('layouts.admin')
@section('style')
<link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('navmaping')
<li class="menu-item " aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Kelompok</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/alfa" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Delta</span>
    </a>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/beta" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Echo</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Presensi</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/daypresensi" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Presensi</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Pelanggaran</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/anakkumelanggar" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Pelanggaran Anakku di Delta</span>
    </a>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/anakkumelanggarbeta" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Pelanggaran Anakku di Echo</span>
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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Hai Maping, {{Auth::user()->name}}</h2>

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
            <div class="">
                <!-- <div class="col-xl-6"> -->
                <!--begin::Example-->
                <!--begin::Card-->
                <!-- begin: sweetalert -->

                <div class="">
                    @if (session('status'))
                    <div class="alert alert-custom alert-light-success fade show mb-5" role="alert" style="width:100%; Max-height:5em;">
                        <div class="alert-icon"><i class="flaticon2-check-mark icon-lg"></i></div>
                        <div class="alert-text" style="font-size:125%;"><label for="">{{session('status')}}</label></div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                    @elseif (session('error'))
                    <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert" style="width:100%; Max-height:5em;">
                        <div class="alert-icon"><i class="flaticon2-warning "></i></div>
                        <div class="alert-text" style="font-size:125%;">{{session('error')}}</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- end: sweetalert -->

                <div class="card card-custom shadow-none" style="min-width:100%;">
                    <div class="card-header card-header-tabs-line">
                        <div class="card-title">
                            <h3 class="card-label">Daftar Pelanggaran Delta</h3>
                        </div>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_2">Hari 1</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_2">Hari 2</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_2">Hari 3</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4_2">Hari 4</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_5_2">RC 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_6_2">RC 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_7_2">RC 3</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-body" style="min-width:100%;min-height:250px;">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1_2" role="tabpanel">
                                @if(count($hari1) > 0)
                                <table class="table table-separate table-head-custom table-checkable" id="kt_datatable" style="width: 100%;" style="text-align:center;">
                                    <thead style="text-align:center;">
                                        <tr>
                                            <th style="min-width:112px">NRP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Delta</th>
                                            <th>Echo</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Pelanggaran</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($hari1 as $h)
                                        <tr>
                                            <td style="text-align:center;"><a href="#showRekap" onclick="getRekap({{$h->nrp}})" data-toggle='modal' class="text-success"><button type="button" class="btn btn-success" style="width:100px">{{$h->nrp}}</button></a></td>
                                            <td>{{$h->name}}</td>
                                            <td style="text-align:center;">{{$h->alpha}}</td>
                                            <td style="text-align:center;">{{$h->beta}}</td>
                                            <td style="text-align:center;">{{$h->jenis_pelanggaran}}</td>
                                            <td>{{$h->nama_pelanggaran}}</td>
                                            <td>{{$h->keterangan}}</td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot style="text-align:center;">
                                        <tr>
                                            <th>NRP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Delta</th>
                                            <th>Echo</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Pelanggaran</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!--end: Datatable-->
                                @elseif(count($hari3) == 0)
                                <h4 style="color:#bebebe;text-align: center;margin-top:8%;">Belum ada data</h4>
                                @endif
                            </div>


                            <div class="tab-pane fade" id="kt_tab_pane_2_2" role="tabpanel">
                                @if(count($hari2) >0)
                                <table class="table table-separate table-head-custom table-checkable" id="kt_datatable2" style="  width: 100%;">
                                    <thead style="text-align:center;">
                                        <tr>
                                            <th style="min-width:112px">NRP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Delta</th>
                                            <th>Echo</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Pelanggaran</th>
                                            <th>Keterangan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($hari2 as $h)
                                        <tr>
                                            <td style="text-align:center;"><a href="#showRekap" onclick="getRekap({{$h->nrp}})" data-toggle='modal' class="text-success"><button type="button" class="btn btn-success" style="width:100px">{{$h->nrp}}</button></a></td>
                                            <td>{{$h->name}}</td>
                                            <td style="text-align:center;">{{$h->alpha}}</td>
                                            <td style="text-align:center;">{{$h->beta}}</td>
                                            <td style="text-align:center;">{{$h->jenis_pelanggaran}}</td>
                                            <td>{{$h->nama_pelanggaran}}</td>
                                            <td>{{$h->keterangan}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot style="text-align:center;">
                                        <tr>
                                            <th>NRP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Delta</th>
                                            <th>Echo</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Pelanggaran</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                @elseif(count($hari3) == 0)
                                <h4 style="color:#bebebe;text-align: center;margin-top:8%;">Belum ada data</h4>
                                @endif
                                <!--end: Datatable-->
                            </div>



                            <div class="tab-pane fade" id="kt_tab_pane_3_2" role="tabpanel">
                                @if(count($hari3) >0)
                                <table class="table table-separate table-head-custom table-checkable" id="kt_datatable3" style="width: 100%;">
                                    <thead style="text-align:center;">
                                        <tr>
                                            <th style="min-width:112px">NRP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Delta</th>
                                            <th>Echo</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Pelanggaran</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($hari3 as $h)
                                        <tr>
                                            <td style="text-align:center;"><a href="#showRekap" onclick="getRekap({{$h->nrp}})" data-toggle='modal' class="text-success"><button type="button" class="btn btn-success" style="min-width:100px">{{$h->nrp}}</button></a></td>
                                            <td>{{$h->name}}</td>
                                            <td style="text-align:center;">{{$h->alpha}}</td>
                                            <td style="text-align:center;">{{$h->beta}}</td>
                                            <td style="text-align:center;">{{$h->jenis_pelanggaran}}</td>
                                            <td>{{$h->nama_pelanggaran}}</td>
                                            <td>{{$h->keterangan}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot style="text-align:center;">
                                        <tr>
                                            <th>NRP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Delta</th>
                                            <th>Echo</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Pelanggaran</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                @elseif(count($hari3) == 0)
                                <h4 style="color:#bebebe;text-align: center;margin-top:8%;">Belum ada data</h4>
                                @endif
                                <!--end: Datatable-->
                            </div>



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
                <div class="modal-content" id="modalContent" style="min-height:250px;" style="text-align:left;">
                    <div class="iconbox-icon-wrap text-center" style="margin:auto;">
                        <span class="iconbox-icon-container mb-45">
                            <img src="{{ asset('img/loading.gif')}}" style="width:50px; height:50px;" />
                        </span>
                    </div>

                </div>
            </div>
        </div>
        <!-- end of modal -->
    </div>
</div>
@endsection
@section('script')
<!--begin::Page Vendors(used by this page)-->
<script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('admin/js/pages/crud/datatables/basic/paginations3tabel.js') }}"></script>
<!--end::Page Scripts-->

<script>
    function getRekap(nrp) {
        $.ajax({
            type: 'POST',
            url: '{{route("showRekap")}}',
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'nrp': nrp
            },
            success: function(data) {
                $('#modalContent').html(data.msg)
            }
        });
    }
</script>
@endsection
