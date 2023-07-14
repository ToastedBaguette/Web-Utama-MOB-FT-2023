@extends('layouts.app')

@section('content')

<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

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

        @foreach($petuah as $d)

        <h5>Petunjuk nama petuah :</h5>
            <div class="form-group">
                <label>{{$d->clue}}</label>
                <input type="text" id="jawaban" name="jawaban" required>
            </div>
            <h6 style="color:red; display:none;" id="pesan">Jawaban masih kurang tepat</h6>
            <a href="#modal" class="btn btn-info" data-toggle='modal' id="myBtn">Submit</a>

        @endforeach

        <br><br>
        <h4>List Petuah</h4>
            <div class="row">
                @foreach($listPetuah as $d)
                <div class="column">
                    <img src="{{asset('img/petuah/'.$d->idpetuah.'.jpg')}}" style="width:100%">
                    <center><h5>{{$d->nama_petuah}}</h5></center>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modalContent">    
            <!-- pre loader disini kalo mau -->
            </div> 
        </div>
    </div>

</div>

<script>
$("#myBtn").click(function(){
    var jawaban = $("#jawaban").val();

    $.ajax({
      type:'POST',
      url:'{{route("cekjawabanpetuah")}}',
      data:{
        '_token':'<?php echo csrf_token() ?>',
        'jawaban':jawaban
      },
      success: function(data){
          if(data=="salah bos"){
            $("#pesan").css("display", "block");
          }else{
            $('#modalContent').html(data.msg)
          }
      }
    });
    
});

</script>
@endsection