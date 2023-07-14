@extends('layouts.admin')
@section('style')
<link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('navsfd')
<li class="menu-item " aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section ">
    <h4 class="menu-text">Pelanggaran</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="{{ url('sfd') }}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Input Pelanggaran</span>
    </a>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="{{ url('rekap') }}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Rekap Pelanggaran</span>
    </a>
</li>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="{{ url('listkendala') }}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Bukti Kendala</span>
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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Bukti Kendala</h2>

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

                <div class="card card-custom" style="min-width:100%;">
                    <div class="card-header card-header-tabs-line">
                        <div class="card-title">
                            <h3 class="card-label">Daftar Bukti Kendala</h3>
                        </div>
                    </div>
                    <div class="card-body" style="min-width:100%;min-height:250px;">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1_2" role="tabpanel">
                                @if(count($listkendala)< 1)
                                    <h4 style="color:#bebebe;text-align: center;margin-top:8%;">Belum ada laporan kendala dari maharu</h4>
                                @else
                                <table class="table table-separate table-head-custom table-checkable" id="kt_datatable" style="width: 100%;" style="text-align:center;">
                                    <thead style="text-align:center;">
                                        <tr>
                                            <th style="min-width:112px">NRP</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Alpha</th>
                                            <th>Beta</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Deskripsi</th>
                                            <th>File</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($listkendala as $l)
                                         
                                         <tr>
                                            <td style="text-align:center;" >{{$l->nrp}}</td>
                                            <td >{{$l->name}}</td>
                                            <td style="text-align:center;">{{$l->alpha}}</td>
                                            <td style="text-align:center;">{{$l->beta}}</td>
                                            <td style="text-align:center;">{{$l->tanggal}}</td>
                                            <td style="text-align:center;">{{$l->waktu}}</td>
                                            <td >{{$l->deskripsi}}</td>
                                            @php
                                                $filename = $l->file;
                                                $ext = explode('.',trim($filename))[1];
                                            @endphp
                                            <td style="text-align:center;"><a class="btn btn-danger" href="{{ asset('img/sfd_bukti/'.$l->file)}}" download="{{$l->name}}_{{$l->nrp}}_A{{$l->alpha}}_B{{$l->beta}}_{{$l->deskripsi}}.{{$ext}}">Download File</a> </td>
                                            @if($l->status=="Belum Dilihat")
                                            <td style="text-align:center;"><a  class="btn btn-warning" href="{{route('ubahStatusKendala', $l->idkendala)}}">{{$l->status}}</a></td>
                                            @else
                                            <td style="text-align:center;"><a  class="btn btn-warning" href="{{route('kembalikanStatusKendala', $l->idkendala)}}">{{$l->status}}</a></td>
                                            @endif

                                            </tr>
                    
                                        @endforeach
                                    </tbody>
                                    <tfoot style="text-align:center;">
                                        <tr>
                                            <th>NRP</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Alpha</th>
                                            <th>Beta</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Deskripsi</th>
                                            <th>File</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!--end: Datatable-->
                                @endif
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

@endsection