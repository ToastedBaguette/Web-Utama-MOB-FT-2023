@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@section('content')
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <div class="row justify-content-cent er">
            <div class="col-md-8">
                <div class="card">
                <h3>{{$jam_presensi}}</h3> <h5><?php echo date('d-M-Y',strtotime($now)); ?></h5>
                @if(($awal != '') && ($akhir != ''))
                    <h4>lakukan presensi dari jam <?php echo date('H:i',strtotime($awal)); ?> hingga <?php echo date('H:i',strtotime($akhir)); ?></h4>
                @endif
                    <div class="card-body">
                    @if($presensi == 'false')
                        <button type="button" disabled>Presensi</button>
                    @else
                        @if($status == 'belum')
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal">Presensi</button>
                        @else
                        <button type="button" disabled>Anda sudah melakukan presensi</button>
                        @endif
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah kamu yakin melakuka presensi?
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
      <form action="/presensi/ok" method="post">
        @csrf
        <input type="hidden" value="{{$jam_presensi}}" name='presensi'>
        <button type="submit" class="btn btn-primary">Ya</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endsection