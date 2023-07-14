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

            @if($data==null)
                <h2 style="margin: auto;width: 100%;padding: 10px;" class="gray">Belum ada pendaftar untuk cabang ini</h2>
            @else
                <h4>Data pendaftar Rector Cup 2021 cabang {{$data[0]->nama_cabang}}</h4>

                <table class="table table-paginate" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">NRP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Prestasi</th>
                            <th scope="col">File</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $h)
                        <tr>
                            <td>{{$h->users_nrp}} </td>
                            <td>{{$h->name}} </td>
                            <td><a href="#show" onclick="getprestasi({{$h->rc_idrc}}, {{$h->users_nrp}})" data-toggle='modal' class="btn btn-info">Lihat</a></td>
                            <td><a href="{{asset('persyaratanrc/'.$h->file_syarat)}}" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" style="max-width:20px;">Download File</a></td>
                            @if($h->is_lolos == -1)
                            <td>Ditolak</td>
                            @elseif($h->is_lolos == 0)
                            <td>Menunggu</td>
                            @else
                            <td>Diterima</td>
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
                        <
                        </div>
                </div>
            </div>
            <!-- end of modal -->
            @endif

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
    </script>
@endsection