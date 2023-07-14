<!-- ini tidak jadi dipakai -->

@extends('layouts.admin')
@section('style')

@endsection
@section('navsfd')
<li class="menu-item " aria-haspopup="true">
    <a href="" class="menu-link">
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
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="{{ url('sfd') }}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Input Pelanggaran</span>
    </a>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="{{ url('rekap') }}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Rekap Pelanggaran</span>
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

                        <h3 class="card-label">Input Pelanggaran Baru</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('presensimaharu')}}" method="post">
                        @csrf
                        <!-- <div class="form-group">
                    <label>Pilih Pengelompokkan</label>
                    <select class="form-control" id='groupby' name='groupby'>
                        <option value="">--Pilih Pengelompokkan--</option>
                        <option value="alpha">Alpha</option>
                        <option value="beta">Beta</option>
                    </select>
                </div> -->
                        <label for="">Kelompok :</label>
                        <select class="form-control" id='groupby' name='groupby' style="width:100%;">
                            <option value="-">--Pilih Kelompok--</option>
                            <option value="alpha">Alfa</option>
                            <option value="beta">Beta</option>
                        </select>
                        <br>

                        <!-- <div class="form-group">
                    <label>Pilih Kelompok</label>
                    <select class="form-control" id='kelompok' name='kelompok' required>
                        <option value="">--Pilih Kelompok--</option>
                    </select>
                </div> -->

                        <label for="">Nomor Kelompok :</label>
                        <select class="form-control" id='kelompok' name='kelompok' required style="width:100%;">
                            <option value="-">--Pilih Kelompok Dahulu--</option>

                        </select>
                        <br>

                        <!-- <div class="form-group">
                    <label>Pilih Mahasiswa</label>
                    <div id="tambah_mahasiswa">
                        <select class="form-control" id='mahasiswa' name='mahasiswa[]' multiple required>
                            <option value="">--Pilih Kelompok Terlebih Dahulu--</option>
                        </select>
                    </div>
                </div> -->


                        <label for="">Mahasiswa :</label>
                        <select class="form-control" id='mahasiswa' name='mahasiswa[]' multiple required>
                            <!-- <option value="">--Pilih Nomor Kelompok Dahulu--</option> -->

                        </select>
                        <br>


                        <!-- <div class="form-group">
                    <label>Pilih Pelanggaran</label>
                    <select class="form-control" id='pelanggaran' name='pelanggaran' required>
                        <option value="">--Pilih Pelanggaran--</option>
                        @foreach($ringan as $p)
                        <option value="{{$p->idpelanggaran}}">{{$p->jenis_pelanggaran}} - {{$p->nama_pelanggaran}}</option>
                        @endforeach
                        @foreach($sedang as $p)
                        <option value="{{$p->idpelanggaran}}">{{$p->jenis_pelanggaran}} - {{$p->nama_pelanggaran}}</option>
                        @endforeach
                        @foreach($berat as $p)
                        <option value="{{$p->idpelanggaran}}">{{$p->jenis_pelanggaran}} - {{$p->nama_pelanggaran}}</option>
                        @endforeach
                        @if(Auth::user()->nrp == "160219045" ||Auth::user()->nrp == "160219003" ){
                        <option value="pelanggaranbaru">--Tambah Pelanggaran--</option>
                        @endif
                    </select>
                </div> -->

                        <label for="">Jenis Pelanggaran :</label>
                        <select class="form-control" id='pelanggaran' name='pelanggaran' required>
                            <option value="">--Pilih Jenis Pelanggaran--</option>
                            @foreach($ringan as $p)
                            <option value="{{$p->idpelanggaran}}">{{$p->jenis_pelanggaran}} - {{$p->nama_pelanggaran}}</option>
                            @endforeach
                            @foreach($sedang as $p)
                            <option value="{{$p->idpelanggaran}}">{{$p->jenis_pelanggaran}} - {{$p->nama_pelanggaran}}</option>
                            @endforeach
                            @foreach($berat as $p)
                            <option value="{{$p->idpelanggaran}}">{{$p->jenis_pelanggaran}} - {{$p->nama_pelanggaran}}</option>
                            @endforeach
                            @if(Auth::user()->nrp == "160219045" ||Auth::user()->nrp == "160219003" ){
                            <option value="pelanggaranbaru">--Tambah Pelanggaran--</option>
                            @endif
                        </select>

                        <br>

                        <!-- <div class="form-group">
                    <label>Tanggal Pelanggaran</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div> -->

                        <label for="">Tanggal :</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        <br>


                        <!-- <div class="form-group">
                    <label>Keterangan Tambahan (opsional)</label>
                    <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                </div> -->

                        <label for="">Keterangan: </label>
                        <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Opsional"></textarea>
                        <br>

                        <button type="submit" class="btn btn-success mt-4" style="width: 100%;">Kirim</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--end::Card-->
    <!-- begin::Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method='POST' action="{{ route('tambahPelanggaran') }}">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Pelanggaran Baru</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label>Deskripsi Pelanggaran</label>
                                <input type="text" class="form-control" id="namapelanggaran" name="namapelanggaran" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Pelanggaran</label>
                                <select class="form-control" id='jenispelanggaran' name='jenispelanggaran' required>
                                    <option value="">--Jenis Pelanggaran--</option>
                                    <option value="Ringan">Ringan</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Berat">Berat</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Kirim</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end::Modal -->
    <!--end::Container-->
</div>
<!--end::Entry-->

<!-- <div class="form-group">
                    <label>Tanggal Pelanggaran</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div> -->

<label for="">Tanggal :</label>
<input type="date" class="form-control" id="tanggal" name="tanggal" required>
<br>


<!-- <div class="form-group">
                    <label>Keterangan Tambahan (opsional)</label>
                    <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                </div> -->

<label for="">Keterangan: </label>
<textarea class="form-control" id="keterangan" name="keterangan" placeholder="Opsional"></textarea>
<br>

<button type="submit" class="btn btn-success mt-4" style="width: 100%;">Kirim</button>
</form>
</div>

</div>
</div>
</div>
<!--end::Card-->
<!-- begin::Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method='POST' action="{{ route('tambahPelanggaran') }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah Pelanggaran Baru</h4>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label>Deskripsi Pelanggaran</label>
                            <input type="text" class="form-control" id="namapelanggaran" name="namapelanggaran" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Pelanggaran</label>
                            <select class="form-control" id='jenispelanggaran' name='jenispelanggaran' required>
                                <option value="">--Jenis Pelanggaran--</option>
                                <option value="Ringan">Ringan</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Berat">Berat</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Kirim</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end::Modal -->
<!--end::Container-->
</div>
<!--end::Entry-->

@endsection
@section('script')
<script type="text/javascript">
    $('#groupby').on('change', function(e) {
        var groupby_id = e.target.value;
        $.ajax({
            type: "POST",
            url: "{{ route('kelompok') }}",
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'groupby_id': groupby_id
            },
            success: function(data) {
                $('#kelompok').empty();
                $('#kelompok').append('<option selected value="">--Pilih Nomor Kelompok--</option>');
                // window.alert(groupby_id);

                for (let i = 0; i < data.listkelompok.length; i++) {
                    $.each(data.listkelompok[i], function(index, listkelompok) {
                        $('#kelompok').append('<option value="' + listkelompok + '">' + listkelompok + '</option>');
                    })
                }

            }
        })
    });

    $('#kelompok').on('change', function(e) {
        var kelompok = e.target.value;
        var group = $('#groupby').val();
        // window.alert(group);
        $.ajax({
            type: "POST",
            url: "{{ route('mahasiswa') }}",
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'kelompok': kelompok,
                'group': group

            },
            success: function(data) {
                $('#mahasiswa').empty();
                for (let i = 0; i < data.listMahasiswa.length; i++) {
                    $('#mahasiswa').append('<option value="' + data.listMahasiswa[i].nrp + '">' + data.listMahasiswa[i].nrp + ' - ' + data.listMahasiswa[i].name + '</option>');
                }

            }
        })
    });

    $('#pelanggaran').change(function() {
        var opval = $(this).val();
        if (opval == "pelanggaranbaru") {
            $('#myModal').modal("show");
        }
    });
</script>
<!--end::Page Scripts-->
@endsection