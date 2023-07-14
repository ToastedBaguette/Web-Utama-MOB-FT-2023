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
            <h4>Pendaftar Rector Cup 2021 cabang {{$data[0]->nama_cabang}}</h4>
            <ul>
            <li>Tanggal Seleksi : {{$data[0]->tanggal_seleksi}}</li>
            <li>Jam Seleksi : {{$data[0]->jam_seleksi}}</li>
            <li>Status : {{$data[0]->status}}</li>
            <li>Kuota : {{$data[0]->kuota}} orang</li> <br>
            <a href="#show" onclick="editDetailRC({{$data[0]->idrc}})" data-toggle='modal' class="btn btn-info">Edit Detail</a>
            @if($data[0]->medali==null)
            <a href="#show" onclick="showtambahMedal({{$data[0]->idrc}})" data-toggle='modal' class="btn btn-info">Tambah Medal & Juara</a>
            @endif
            </ul>
            <br>
            <table class="table table-paginate" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">NRP</th>
                        <th scope="col">Nama Pendaftar</th>
                        <th scope="col">Alpha</th>
                        <th scope="col">Beta</th>
                        <th scope="col">Prestasi</th>
                        <th scope="col">ID Line</th>
                        <th scope="col">No HP</th>
                        <th scope="col">File Pendaftaran</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $h)
                    <tr>
                        <td>{{$h->nrp_pendaftar}}</td>
                        <td>{{$h->name}}</td>
                        <td>{{$h->alpha}}</td>
                        <td>{{$h->beta}}</td>
                        
                        <td><a href="#show" onclick="getprestasi({{$h->idrc}}, {{$h->nrp_pendaftar}})" data-toggle='modal' class="btn btn-info">Lihat</a></td>
                        <td>{{$h->id_line}}</td>
                        <td>{{$h->no_hp}}</td>
                        <td><a href="{{asset('persyaratanrc/'.$h->file_syarat)}}" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" style="max-width:20px;">Download File</a></td>
                        @if($h->is_lolos == -1)
                            <td>Ditolak</td>
                        @elseif($h->is_lolos == 0 && $h->kuota>0)
                        <td>
                        <!-- TERIMA ATAU TOLAK PENDAFTAR -->
                        <form action="{{route('terimaRC')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$h->idrc}}" name='idrc'>
                            <input type="hidden" value="{{$h->nrp_pendaftar}}" name='nrp_mhs'>
                            <button type="submit" class="btn btn-warning">Terima</button>
                        </form>
                        <form action="{{route('tolakRC')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$h->idrc}}" name='idrc'>
                            <input type="hidden" value="{{$h->nrp_pendaftar}}" name='nrp_mhs'>
                            <button type="submit" class="btn btn-danger">Tolak</button>
                        </form>
                        <!-- SELESAI TERIMA ATAU TOLAK PENDAFTAR -->
                        @elseif($h->is_lolos == 1)
                            <td>Diterima</td>
                        @elseif($h->is_lolos == 0 && $h->kuota< 1)
                            <td>Limit Kuota</td>
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
                <!-- ini harusnya diakses dari route show, diambil dari showrekap.blade.php -->
                </div>
            </div>
        </div>
        <!-- end of modal -->

    </div>
    <script>
        function getprestasi(idrc, nrp_mhs){
            $.ajax({
            type:'POST',
            url:'{{route("prestasi")}}',
            data:{
                '_token':'<?php echo csrf_token() ?>',
                'idrc':idrc,
                'nrp_mhs':nrp_mhs
            },
            success: function(data){
                $('#modalContent').html(data.msg)
            }
            });
        } 


        function editDetailRC(idrc){
            $.ajax({
            type:'POST',
            url:'{{route("editDetailRC")}}',
            data:{
                '_token':'<?php echo csrf_token() ?>',
                'idrc':idrc,
            },
            success: function(data){
                $('#modalContent').html(data.msg)
            }
            });
        } 

        function showtambahMedal(idrc){
            $.ajax({
            type:'POST',
            url:'{{route("showtambahMedal")}}',
            data:{
                '_token':'<?php echo csrf_token() ?>',
                'idrc':idrc,
            },
            success: function(data){
                $('#modalContent').html(data.msg)
            }
            });
        } 
    </script>
@endsection