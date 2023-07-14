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

            <!-- REKAP PELANGGARAN BOLEH PAKE ACCORDION ATAU TAB PER HARI -->
            <!-- siaap pak bos -->
            <h4>Rekap Pelanggaran</h4>
            @if(count($hari1) > 0)
            <br>Hari - 1
            <table class="table table-paginate" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">NRP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alpha</th>
                        <th scope="col">Beta</th>
                        <th scope="col">Pelanggaran</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($hari1 as $h)
                    <tr>
                        <td>{{$h->nrp}}</td>
                        <td><a href="#showRekap" onclick="getRekap({{$h->nrp}})" data-toggle='modal'>{{$h->name}}</a></td>
                        <td>{{$h->alpha}}</td>
                        <td>{{$h->beta}}</td>
                        <td>{{$h->nama_pelanggaran}}</td>
                        <td>{{$h->keterangan}}</td>
                        <td><a href="{{ url('sfd/'.$h->idrekap.'/edit')}}" class="btn btn-warning">Ubah</a></td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            @endif

            <!-- cek jika hari 2 sudah ada pelanggaran, untuk mempercantik tampilan bisa di else lalu tambahkan string keterangan -->
            @if(count($hari2) >0)
            <br>Hari - 2
            <table class="table table-paginate" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">NRP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alpha</th>
                        <th scope="col">Beta</th>
                        <th scope="col">Pelanggaran</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($hari2 as $h)
                    <tr>
                        <td>{{$h->nrp}}</td>
                        <td><a href="#showRekap" onclick="getRekap({{$h->nrp}})" data-toggle='modal'>{{$h->name}}</a></td>
                        <td>{{$h->alpha}}</td>
                        <td>{{$h->beta}}</td>
                        <td>{{$h->nama_pelanggaran}}</td>
                        <td>{{$h->keterangan}}</td>
                        <td><a href="{{ url('sfd/'.$h->idrekap.'/edit')}}" class="btn btn-warning">Ubah</a></td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            @endif

            <!-- cek jika hari 3 sudah ada pelanggaran, untuk mempercantik tampilan bisa di else lalu tambahkan string keterangan -->
            @if(count($hari3) >0)
            <br>Hari -3
            <table class="table table-paginate" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">NRP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alpha</th>
                        <th scope="col">Beta</th>
                        <th scope="col">Pelanggaran</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($hari3 as $h)
                    <tr>
                        <td>{{$h->nrp}}</td>
                        <td><a href="#showRekap" onclick="getRekap({{$h->nrp}})" data-toggle="modal" data-target="#showRekap">{{$h->name}}</a></td>
                        <td>{{$h->alpha}}</td>
                        <td>{{$h->beta}}</td>
                        <td>{{$h->nama_pelanggaran}}</td>
                        <td>{{$h->keterangan}}</td>
                        <td><a href="{{ url('sfd/'.$h->idrekap.'/edit')}}" class="btn btn-warning">Ubah</a></td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            @endif

        </div>
    </div>

        <!-- modal -->
        <div class="modal fade" id="showRekap" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="modalContent">
                <!-- ini harusnya diakses dari route show, diambil dari showrekap.blade.php -->
                </div>
            </div>
        </div>
        <!-- end of modal -->

</div>

<script>
function getRekap(nrp){
    $.ajax({
      type:'POST',
      url:'{{route("showRekap")}}',
      data:{
        '_token':'<?php echo csrf_token() ?>',
        'nrp':nrp
      },
      success: function(data){
        $('#modalContent').html(data.msg)
      }
    });
  }
</script>

@endsection
