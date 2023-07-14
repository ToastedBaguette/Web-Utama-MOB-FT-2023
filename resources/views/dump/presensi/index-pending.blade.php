@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <form action="/profile/simpan" method='post'>
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                    <div class="card-header"><h3>Profile</h3></div>
                        <div class="card-body">
                                @foreach($maharu as $mhr)
                                    <label for="nama">
                                    Nama:
                                    <input type="text" name="nama" id='nama' value="{{$mhr->name}}">
                                    </label> <br>
                                    <label for="sekolah">
                                    Asal Sekolah:
                                    <input type="text" name="sekolah" id='sekolah' value="{{$mhr->asal_sekolah}}">
                                    </label> <br>
                                    <label for="no_telp">
                                    No. Telp:
                                    <input type="text" name="no_telp" id="no_telp" value="{{$mhr->no_hp}}">
                                    </label><br>
                                    <label for="line">
                                    Line:
                                    <input type="text" name="line" id="line" value="{{$mhr->id_line}}">
                                    </label><br>
                                    <label for="instagram   ">
                                    Instagram:
                                    <input type="text" name="instagram" id="instagram" value="{{$mhr->instagram}}">
                                    </label><br>
                                    <label for="email">
                                    Email:
                                    <input type="text" name="email" id="email" value="{{$mhr->email}}">
                                    </label>
                                @endforeach
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                    <div class="card-header"><h3>Absensi</h3></div>
                        <div class="card-body">
                                <table>
                                    <thead>
                                        <th>Tangal</th>
                                        <th>Awal</th>
                                        <th>Akhir</th>
                                    </thead>
                                    <tbody>
                                        @foreach($absensi as $absen)
                                            <tr>
                                            <td>{{$absen->tanggal}}</td>
                                            @if($absen->rekap_awal == 0)
                                                <td><input type="checkbox" onclick="return false;"></td>
                                            @else
                                                <td><input type="checkbox" onclick="return false;" checked></td>
                                            @endif
                                            @if($absen->rekap_akhir == 0)
                                                <td><input type="checkbox" onclick="return false;" ></td>
                                            @else
                                                <td><input type="checkbox" onclick="return false;" checked></td>
                                            @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                    <div class="card-header"><h3>Pelanggaran</h3></div>
                        <div class="card-body">
                                <table>
                                    <thead>
                                        <th>Nama</th>
                                        <th>Jenis</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                    </thead>
                                    <tbody>
                                        @foreach($pelanggaran as $p)
                                            <tr>
                                                <td>{{$p->nama_pelanggaran}}</td>
                                                <td>{{$p->jenis_pelanggaran}}</td>
                                                <td><?php echo date('d-M-Y',strtotime($p->tanggal));?> </td>
                                                <td>{{$p->keterangan}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
