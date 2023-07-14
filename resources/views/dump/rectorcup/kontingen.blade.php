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

            <table class="table table-paginate" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">Nama Cabang</th>
                        <th scope="col">Medali</th>
                        <th scope="col">Tanggal Seleksi</th>
                        <th scope="col">Jam Seleksi</th>
                        <th scope="col">Status</th>
                        <th scope="col">Kuota</th>
                        <th scope="col">Koorcab</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $h)
                    <tr>
                        <td>{{$h->nama_cabang}}</td>
                        <td>{{$h->medali}}</td>
                        <td>{{$h->tanggal_seleksi}}</td>
                        <td>{{$h->jam_seleksi}}</td>
                        <td>{{$h->status}}</td>
                        <td>{{$h->kuota}}</td>
                        <td>{{$h->nrp_koor}} - {{$h->name}}</td>
                        <td><a href="{{url('/kontingen/'.$h->idrc)}}" class="btn btn-info">Lihat Pendaftar</a></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

            </div>
        </div>


    </div>
@endsection