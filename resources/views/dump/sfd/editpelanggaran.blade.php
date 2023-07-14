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
            
            <h4>Ubah Pelanggaran</h4>
            @foreach($dataUbah as $d)
            <form method="POST" action="{{url('sfd/'.$d->idrekap)}}">
                        @csrf
                        @method("DELETE")
                    <button type="submit" class="btn btn-danger" style="float:right;" onclick="if(!confirm('Yakin nih ngapus data ini ?')) return false;">Hapus Data Pelanggaran</button>
            </form>
            
            <form role="form" method="POST" action="{{url('sfd/'.$d->idrekap)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label>NRP Mahasiswa</label>
                    <input type="text" class="form-control" id="nrp" name="nrp" value="{{$d->users_nrp}}" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$d->name}}" readonly>
                </div>
                <div class="form-group">
                    <label>Pilih Pelanggaran</label>
                    <select class="form-control" id='pelanggaran' name='pelanggaran' required>
                    @foreach($pelanggaran as $p)
                        @if($p->idpelanggaran == $d->idpelanggaran)
                        <option value="{{$p->idpelanggaran}}" selected>{{$p->jenis_pelanggaran}} - {{$p->nama_pelanggaran}}</option>
                        @else
                        <option value="{{$p->idpelanggaran}}">{{$p->jenis_pelanggaran}} - {{$p->nama_pelanggaran}}</option>
                        @endif
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Pelanggaran</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$d->tanggal}}" required>
                </div>
                <div class="form-group">
                    <label>Keterangan Tambahan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan">{{$d->keterangan}}</textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
        </div>
    </div>

    @endsection