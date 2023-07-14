<div class="modal-header" style="text-align:center">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title" >Syarat dan Ketentuan</h4>
</div>
<div class="modal-body">
  <ul>
  @foreach($dataTampil[0] as $d)
       <li>{{$d}}</li>
    @endforeach
  </ul>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>