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
            <!-- hi rex -->
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif
            <h4>Daftar cabang Rector Cup 2021</h4>

            <!-- start of riwayat -->
            <h6>Riwayat Daftar</h6>
            <table class="table table-paginate" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">Nama Cabang</th>
                        <th scope="col">Tanggal Seleksi</th>
                        <th scope="col">Jam Seleksi</th>
                        <th scope="col">Status</th>
                        <th scope="col">Nama Kwarcab</th>
                        <th scope="col">Kontak (LINE)</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($riwayatdftr as $h)
                    <tr>
                        <td>{{$h->nama_cabang}}</td>
                        <td>{{$h->tanggal_seleksi}}</td>
                        <td>{{$h->jam_seleksi}}</td>
                        <!-- style dibawah jangan dihapus. gunanya buat ngasih enter di setiap akhir 1 point  -->
                        @if($h->is_lolos == -1)
                        <td>Ditolak</td>
                        @elseif($h->is_lolos == 0)
                        <td>Menunggu</td>
                        @else
                        <td>Diterima</td>
                        @endif
                        <td>{{$h->nama_kwarcab}}</td>
                        <td>{{$h->id_line}}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            <!-- end of riwayat -->

            <h6>Daftar Cabang RC</h6>
            <table class="table table-paginate" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">Nama Cabang</th>
                        <th scope="col">Status</th>
                        <th scope="col">Kuota</th>
                        <th scope="col">Tanggal Seleksi</th>
                        <th scope="col">Jam Seleksi</th>
                        <th scope="col">Syarat Daftar</th>
                        <!-- Hilangkan aksi kalau sudah daftar 2x -->
                        @if($jumlahambil[0]->jumlahambil < 2)
                        <th scope="col">Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                @foreach($listrc as $h)
                    <tr>

                    <!-- cek sudah pernah daftar belom -->
                    <?php $sudah = false;?>
                        @foreach($riwayatdftr as $r)
                            @if($r->rc_idrc == $h->idrc)
                            <?php $sudah = true;?>
                            @continue
                            @else
                            <?php $sudah = false;?>
                            @endif
                        @endforeach

                        <td>{{$h->nama_cabang}}</td>
                        <td>{{$h->status}}</td>
                        <td>{{$h->kuota}}</td>
                        <td>{{$h->tanggal_seleksi}}</td>
                        <td>{{$h->jam_seleksi}}</td>
                        <td><a href="#show" onclick="getsyarat({{$h->idrc}})" data-toggle='modal'>Lihat Syarat</a></td>
                        @if($jumlahambil[0]->jumlahambil < 2)
                        <!-- ingetin nanti kalo ditutup buttonnya di disable -->
                            @if($h->status=="Buka")
                                <?php
                                    if($sudah==true){
                                        echo("<td>Sudah daftar</td>");
                                    }
                                    else{?>
                                        <td><a href="#show" onclick="getDaftar({{$h->idrc}}, {{$usernrp}})" data-toggle="modal">Cek Pendaftaran</a></td>
                                    <?php
                                    }
                                ?>
                                
                            @else
                                <td>Pendaftaran ditutup</td>
                            @endif
                        @endif
                    </tr>

                @endforeach
                </tbody>
            </table>

            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="show" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="modalContent">
                <!-- content ny pake ajax -->
                </div>
            </div>
        </div>
        <!-- end of modal -->

    </div>
    <script>
    function getsyarat(idrc){
        $.ajax({
        type:'POST',
        url:'{{route("persyaratan")}}',
        data:{
            '_token':'<?php echo csrf_token() ?>',
            'idrc':idrc
        },
        success: function(data){
            $('#modalContent').html(data.msg)
        }
        });
    } 

    function getDaftar(idrc, nrp){
        $.ajax({
        type:'POST',
        url:'{{route("daftarrc")}}',
        data:{
            '_token':'<?php echo csrf_token() ?>',
            'idrc':idrc,
            'nrp':nrp,

        },
        success: function(data){
            $('#modalContent').html(data.msg)
        }
        });
    } 
</script>
@endsection