@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form method="POST" action="{{url('ed/'.$rundown[0]->idrundown)}}">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger" style="float:right;" onclick="if(!confirm('Yakin nih ngapus data ini ?')) return false;" value="$rundown[0]->idrundown">Hapus Data Pelanggaran</button>
            </form>
            <form role="form" method='POST' action="{{ url('ed/'.$rundown[0]->idrundown) }}">

                @csrf
                @method("PUT")
                <div class="form-body">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{$rundown[0]->tanggal}}" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label>Waktu Awal</label>
                            <input type="time" class="form-control" id="waktu_awal" name="waktu_awal" value="{{ \Carbon\Carbon::createFromFormat('H:i:s', $rundown[0]->waktu_awal)->format('h:i') }}" required>
                        </div>
                        <div class="form-group col-6">
                            <label>Waktu Akhir</label>
                            <input type="time" class="form-control" id="waktu_akhir" name="waktu_akhir" value="{{ \Carbon\Carbon::createFromFormat('H:i:s', $rundown[0]->waktu_akhir)->format('h:i') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Kegiatan</label>
                        <input type="text" class="form-control" id="kegiatan" name="kegiatan" value="{{$rundown[0]->kegiatan}}" required>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input type="text" class="form-control" id="content" name="content" value="{{$rundown[0]->content}}">
                    </div>
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
    <!-- end::Modal -->


    @endsection
    <script>

    </script>