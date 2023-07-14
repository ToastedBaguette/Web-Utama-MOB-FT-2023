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
<li class="menu-item menu-item-active" aria-haspopup="true">
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
<li class="menu-item" aria-haspopup="true">
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

<!--begin::Content-->
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

            <!--begin::Daftar Nama -->
            <div class="card card-custom shadow-none">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Daftar Presensi</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/dayrecappresensi" method="post">
                        @csrf
                        <label for="groupby">Nama Kelompok</label>
                        <select name="groupby" id="groupby" class="form-control" required>
                            <option value="">--Pilih Nama Kelompok --</option>
                            <option value="alpha">Delta</option>
                            <option value="beta">Echo</option>
                        </select><br>

                        <label for="kelompok">Nomor Kelompok</label>
                        <select id="kelompok" disabled class="form-control" required>

                        </select><br>
                        <input type="hidden" value="" name="kelompok" id="hidden-kelompok">
                        <label for="tanggal">Tanggal</label>
                        <select name="tanggal" id="pilihtanggal" class="form-control" required>
                            <option value="" selected>--Pilih tanggal--</option>
                            @foreach($presensi as $p)
                            <option value="{{$p->tanggal}}">{{ \Carbon\Carbon::parse($p->tanggal)->format('d/m/Y')}}</option>
                            @endforeach
                        </select>
                        <button id="tampil" type="submit" class="btn btn-success mt-4">Tampil</button>
                    </form>

                    <!--end: Form-->

                    <!--begin: Datatable-->
                    @if($listData!=null)
                    <br>
                    <hr>
                    <br>
                    @if ($groupby == 'alpha')
                    <h3 style="margin: auto;width: 100%;padding: 10px;" class="gray">Presensi Delta {{$kelompok}}</h3>

                    @elseif ($groupby == 'beta')
                    <h3 style="margin: auto;width: 100%;padding: 10px;" class="gray">Presensi Echo {{$kelompok}}</h3>

                    @endif

                    <h3 style="margin: auto;width: 100%;padding: 10px;" class="gray">{{ \Carbon\Carbon::parse($tanggal)->format('d/m/Y')}}</h3>
                    <br>
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable" style="margin-top:1em;">
                        <thead style="text-align:center;">
                            <tr>
                            <tr>
                                <th style="vertical-align: middle;" rowspan="2">Nama</th>
                                <th style="vertical-align: middle;" rowspan="2">NRP</th>
                                <th colspan="2">Kehadiran</th>

                            </tr>
                            <tr>
                                <th>Awal</th>
                                <th>Akhir</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <?php
                            $awal = '';
                            $akhir = '';

                            if (count($listData) > 0) {
                                foreach ($listData as $l) {
                                    if ($l->rekap_awal == 1) {
                                        $awal = 'checked';
                                    }
                                    if ($l->rekap_akhir == 1) {
                                        $akhir = 'checked';
                                    }
                                    echo "
                                <tr>
                                <td>" . $l->name . "</td>
                                <td style='text-align:center;'>" . $l->nrp . "</td>
                                <td style='text-align:center;'><input type='checkbox' onclick='return false;'" . $awal . "></td>
                                <td style='text-align:center;'><input type='checkbox' onclick='return false;'" . $akhir . "></td>
                                </tr>";
                                    $awal = '';
                                    $akhir = '';
                                }
                            }
                            ?>

                        </tbody>
                        <tfoot style="text-align:center;">
                            <tr>
                            <tr>
                                <th style="vertical-align: middle;" rowspan="2">Nama</th>
                                <th style="vertical-align: middle;" rowspan="2">NRP</th>
                                <th>Awal</th>
                                <th>Akhir</th>

                            </tr>
                            <tr>
                                <th colspan="2">Kehadiran</th>
                            </tr>
                            </tr>
                        </tfoot>
                    </table>
                    @endif
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Presensi Harian-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Demo Panel-->
@endsection
<!--end::Content-->

@section('script')
<!--begin::Page Vendors(used by this page)-->
<script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('admin/js/pages/crud/datatables/basic/paginations3tabel.js') }}"></script>
<!--end::Page Scripts-->
<script>
        $('#groupby').on('change', function(e) {
        var groupby_id = e.target.value;
        if (groupby_id == "alpha") {
            document.getElementById("hidden-kelompok").value = {{Auth::user()->alpha}}; //set value on myInputID
            $('#kelompok').html('<option value="' + {{Auth::user()->alpha}} + '">'+ {{Auth::user()->alpha}} + '</option>');

        } else {
            document.getElementById("hidden-kelompok").value = {{Auth::user()->beta}}; //set value on myInputID
            $('#kelompok').html('<option value="' + {{Auth::user()->beta}} + '">' + {{ Auth::user()->beta}} + '</option>');
        }
    });
    // $('#pilihtanggal').on('change', function(e) {
    //     var tanggal = e.target.value;
    //     var kelompok = $('#kelompok').val();

    //     $.ajax({
    //         type: "POST",
    //         url: "{{ route('dayrecappresensi') }}",
    //         data: {
    //             '_token': '<?php echo csrf_token() ?>',
    //             'tanggal': tanggal,
    //             'kelompok': kelompok
    //         },
    //         success: function(data) {
    //             $('#tbody').empty();
    //             for (let i = 0; i < data.listData.length; i++) {
    //                 $('#tbody').append(`<tr>
    //                     <td>` + data.listData[i].name + `</td>
    //                     <td style="text-align:center;">` + data.listData[i].nrp + `</td>
    //                     <td style="text-align:center;">` + data.listData[i].rekap_awal + `</td>
    //                     <td style="text-align:center;">` + data.listData[i].rekap_akhir + `</td>
    //                     </tr>`);
    //             }

    //         }
    //     });

    // });
</script>
@endsection
