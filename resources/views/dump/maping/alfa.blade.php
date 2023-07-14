@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h4>Kelompok Alpha</h4>
            <table class="table table-paginate" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">NRP</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Alpha</th>
                        <th scope="col">Beta</th>
                        <th scope="col" style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($alpha as $mhr)
                    <tr>
                        <td>{{$mhr->nrp}}</td>
                        <td>{{$mhr->name}}</td>
                        <td>{{$mhr->alpha}}</td>
                        <td>{{$mhr->beta}}</td>
                        <td style="text-align:center;">
                            <a href='#modalChange_{{$mhr->nrp}}' data-toggle='modal'>
                                <button type="button" class="btn btn-dark">Detail</button>
                            </a>
                            <div class="modal fade" id="modalChange_{{$mhr->nrp}}" tabindex="-1" role="basic" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content" >
                                        <div class="modal-header">
                                            <h4 class="modal-title">{{$mhr->name}}</h4>
                                        </div>
                                        <div class="modal-body ml-3">
                                        Nama Lengkap : {{$mhr->name}} <br>
                                        No. Telp : {{$mhr->no_hp}} <br>
                                        Line : {{$mhr->id_line}} <br>
                                        Email : {{$mhr->email}} <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-5">
            <h4>Presensi Alpha</h4>
            <form action="{{route('presensimaharu')}}" method="post">
            @csrf
            <select class="form-select" name="idpresensi" id="listpresensi" style="width:100%;">
                <option value="-">--Pilih Tanggal--</option>
                @foreach($presensi as $p)
                <option value="{{$p->tanggal}}">{{$p->tanggal}}</option>
                @endforeach
            </select>
            <br>
            <select class="form-select" name="waktu_presensi" id="jam" style="width:100%;">

            </select>
            <small>Pastikan melakukan absensi sebelum jam yang tertera</small>
            <br>
            <br>
            <select class="form-select" name="mahasiswa[]" style="width:100%;" size="10"  multiple aria-label="multiple select example">
            @foreach($alpha as $mhr)
                <option value="{{$mhr->nrp}}">{{$mhr->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-success mt-4">Submit</button>
        </div>
        </form>
    </div>
<br>
<hr>
<br>
    <div class="row justify-content-center">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
        <div class="col-md-1"></div>

        <div class="col-md-10">
            <h4>Presensi Alpha</h4>
            <form action="{{route('presensimaharu')}}" method="post">
            @csrf
            <select class="form-select" name="idpresensi" id="listpresensi" style="width:100%;">
                <option value="-">--Pilih Tanggal--</option>
                @foreach($presensi as $p)
                <option value="{{$p->tanggal}}">{{$p->tanggal}}</option>
                @endforeach
            </select>
            <br>
            <select class="form-select" name="waktu_presensi" id="jam" style="width:100%;">

            </select>
            <small>Pastikan melakukan absensi sebelum jam yang tertera</small>
            <br>
            <br>
            <select class="form-select" name="mahasiswa[]" style="width:100%;" size="10"  multiple aria-label="multiple select example">
            @foreach($alpha as $mhr)
                <option value="{{$mhr->nrp}}">{{$mhr->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-1">
            <button type="submit" class="btn btn-success mt-4">Submit</button>
        </div>
        </form>
    </div>

    <br>
<hr>
<br>
</div>
<script>
$('#listpresensi').on('change', function(e) {
            var tanggal = e.target.value;
            // window.alert(tanggal);
            $.ajax({
                type: "POST",
                url: "{{ route('listpresensi') }}",
                data: {
                    '_token': '<?php echo csrf_token() ?>',
                    'tanggal': tanggal
                },
                success: function(data) {
                    $('#jam').empty();
                    for (let i = 0; i < data.listWaktu.length; i++) {
                        $('#jam').append('<option value="waktu_awal">Absensi Awal : ' + data.listWaktu[i].waktu_buka_awal + ' - ' + data.listWaktu[i].waktu_tutup_awal + '</option>');
                        $('#jam').append('<option value="waktu_akhir">Absensi Akhir : ' + data.listWaktu[i].waktu_buka_akhir + ' - ' + data.listWaktu[i].waktu_tutup_akhir + '</option>');
                    }

                }
            })
        });
</script>
@endsection
