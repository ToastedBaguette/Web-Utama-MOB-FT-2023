@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif
            <h4>Tambah Pelanggaran Baru</h4>
            <form role="form" method="POST" action="{{route('sfd.store')}}">
                @csrf
                <div class="form-group">
                    <label>Pilih Pengelompokkan</label>
                    <select class="form-control" id='groupby' name='groupby'>
                        <option value="">--Pilih Pengelompokkan--</option>
                        <option value="alpha">Alpha</option>
                        <option value="beta">Beta</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Kelompok</label>
                    <select class="form-control" id='kelompok' name='kelompok' required>
                        <option value="">--Pilih Kelompok--</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Mahasiswa</label>
                    <div id="tambah_mahasiswa">
                        <select class="form-control" id='mahasiswa' name='mahasiswa[]' multiple required>
                            <option value="">--Pilih Kelompok Terlebih Dahulu--</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
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
                </div>

                <div class="form-group">
                    <label>Tanggal Pelanggaran</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>

                <div class="form-group">
                    <label>Keterangan Tambahan (opsional)</label>
                    <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


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
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
                    $('#kelompok').append('<option selected value="">--Pilih Kelompok--</option>');
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

    @endsection
