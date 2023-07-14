@extends('layouts.admin')
@section('style')
<link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('navkoorcab')
<li class="menu-item " aria-haspopup="true">
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
    <a href="/kandidat" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Kandidat</span>
    </a>
</li>
@endsection
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="margin-top:-1%">
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">


        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->

            <!-- d-flex align-items-center mr-1 -->
            <!--begin::Page Heading-->
            <div class="align-items-baseline  mr-5">
                <!--begin::Page Title-->
                <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">
                    @if($data!=null)
                    @if($data[0]->medali!=null)
                    @if($data[0]->medali=='Emas')
                    <img src="{{ asset('img/gold.png')}}" alt="Medali Emas" style="width: 50px; height: 50px;">
                    @endif
                    @if($data[0]->medali=='Perak')
                    <img src="{{ asset('img/silver.png')}}" alt="Medali Perak" style="width: 50px; height: 50px;">
                    @endif
                    @if($data[0]->medali=='Perunggu')
                    <img src="{{ asset('img/bronze.png')}}" alt="Medali Perunggu" style="width: 50px; height: 50px;">
                    @endif
                    @endif
                    @endif
                    Cabang {{$nama_rc[0]->nama_cabang}}
                </h2>
                <!--end::Page Title-->
            </div>
            <!--end::Page Heading-->
            <!--end::Info-->
        </div>

    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="">
        <!--begin::Container-->
        <div class="container">
            <!-- begin: sweetalert -->
            <div class="">
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
            </div>
            <!-- end: sweetalert -->
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <ul style="list-style: none; margin-left:-10%;margin-top:5%;margin-bottom:5%;">
                            <li style="margin-bottom:10px;"><span class="text-primary">Tanggal seleksi</span>&nbsp; {{ \Carbon\Carbon::parse($nama_rc[0]->tanggal_seleksi)->format('d/m/Y')}}</li>
                            <li style="margin-bottom:10px;"><span class="text-primary">Jam seleksi</span>&nbsp; {{$nama_rc[0]->jam_seleksi}}</li>
                            <li style="margin-bottom:10px;"><span class="text-primary">Status</span>&nbsp; {{$nama_rc[0]->status}}</li>
                            <li style="margin-bottom:10px;"><span class="text-primary">Kuota</span>&nbsp; {{$nama_rc[0]->kuota}} orang</li>


                            <a href="#show" onclick="editDetailRC({{$nama_rc[0]->idrc}})" data-toggle='modal' class="btn btn-warning" style="margin-top:5%">Ubah Detail</a>
                            @if($data!=null)
                            @if($data[0]->medali==null)
                            <a href="#show" onclick="showtambahMedal({{$data[0]->idrc}})" data-toggle='modal' class="btn btn-success" style="margin-top:5%">Tambah Medali</a>
                            @endif
                            @endif
                        </ul>
                    </div>

                </div>


                <div class="card-body" style="min-height:150px;width:100%;">
                    @if($data==null)
                    <h4 style="color:#bebebe;text-align: center; margin-top: 4%;">Belum ada kandidat</h4>
                    @else
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                        <thead style="text-align:center;">
                            <tr>
                                <th>NRP</th>
                                <th>Nama Lengkap</th>
                                <th>Alfa</th>
                                <th>Beta</th>
                                <th>Prestasi</th>
                                <th>ID Line</th>
                                <th>No. Telp</th>
                                <th>Kelengkapan Dokumen</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody style="text-align:center;">
                            @foreach($data as $h)
                            <tr>
                                <td>{{$h->nrp_pendaftar}}</td>
                                <td>{{$h->name}}</td>
                                <td>{{$h->alpha}}</td>
                                <td>{{$h->beta}}</td>

                                <td><a href="#show" onclick="getprestasi({{$h->idrc}}, {{$h->nrp_pendaftar}})" data-toggle='modal' class="btn btn-success">Tampilkan</a></td>
                                <td>{{$h->id_line}}</td>
                                <td>{{$h->no_hp}}</td>
                                @if($h->file_syarat!=null)
                                <td><a href="{{ asset('persyaratanrc/'.$h->file_syarat)}}" target="_blank" class="text-success"><img src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" style="max-width:20px;">&nbsp;Unduh Dokumen</a></td>
                                @else
                                <td>&nbsp;Tidak ada dokumen</td>
                                @endif
                                @if($h->is_lolos == -1)
                                <td>Ditolak</td>
                                @elseif($h->is_lolos == 0 && $h->kuota>0)
                                <td>
                                    <!-- TERIMA ATAU TOLAK PENDAFTAR -->
                                    <form action="{{route('terimaRC')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$h->idrc}}" name='idrc'>
                                        <input type="hidden" value="{{$h->nrp_pendaftar}}" name='nrp_mhs'>
                                        <button type="submit" class="btn btn-warning" style="min-width:75px;">Terima</button>
                                    </form>
                                    <br>
                                    <form action="{{route('tolakRC')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$h->idrc}}" name='idrc'>
                                        <input type="hidden" value="{{$h->nrp_pendaftar}}" name='nrp_mhs'>
                                        <button type="submit" class="btn btn-danger" style="min-width:75px;">Tolak</button>
                                    </form>
                                    <!-- SELESAI TERIMA ATAU TOLAK PENDAFTAR -->
                                    @elseif($h->is_lolos == 1)
                                <td>Diterima</td>
                                @elseif($h->is_lolos == 0 && $h->kuota< 1) <td>Kuota sudah terpenuhi</td>
                                    @endif
                            </tr>

                            @endforeach
                        </tbody>
                        <tfoot style="text-align:center;">
                            <tr>
                                <th>NRP</th>
                                <th>Nama Lengkap</th>
                                <th>Alfa</th>
                                <th>Beta</th>
                                <th>Prestasi</th>
                                <th>ID Line</th>
                                <th>No. Telp</th>
                                <th>Kelengkapan Dokumen</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!--end: Datatable-->
                    @endif
                </div>
            </div>

            <!--end::Card-->
        </div>

        <!--end::Entry-->

    </div>
</div>

<!-- modal -->
<!-- tanpa header -->
<div class="modal fade" id="show" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="modalContent" style="min-height:250px;">
            <div class="iconbox-icon-wrap text-center" style="margin:auto;">
                <span class="iconbox-icon-container mb-45">
                    <img src="{{ asset('img/loading.gif')}}" style="width:50px; height:50px;" />
                </span>
            </div>
        </div>
    </div>
</div>
<!-- end of modal -->






@endsection

@section('script')
<!--begin::Page Vendors(used by this page)-->
<script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('admin/js/pages/crud/datatables/basic/paginations3tabel.js') }}"></script>
<!--end::Page Scripts-->

<script>
    function getprestasi(idrc, nrp_mhs) {
        $.ajax({
            type: 'POST',
            url: '{{route("prestasi")}}',
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'idrc': idrc,
                'nrp_mhs': nrp_mhs
            },
            success: function(data) {
                $('#modalContent').html(data.msg)
            }
        });
    }


    function editDetailRC(idrc) {
        $.ajax({
            type: 'POST',
            url: '{{route("editDetailRC")}}',
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'idrc': idrc,
            },
            success: function(data) {
                $('#modalContent').html(data.msg)
            }
        });
    }

    function showtambahMedal(idrc) {
        $.ajax({
            type: 'POST',
            url: '{{route("showtambahMedal")}}',
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'idrc': idrc,
            },
            success: function(data) {
                $('#modalContent').html(data.msg)
            }
        });
    }
</script>

<script>
    function changeStatus() {
        if (document.getElementById('chckbox').checked) {
            document.getElementById('status').value = "Buka";
        } else {
            document.getElementById('status').value = "Tutup";
        }
    }
</script>
@endsection