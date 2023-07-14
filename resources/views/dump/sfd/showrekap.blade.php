<div class="modal-header" style="text-align:center;">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
  <h4 class="modal-title">Rekap pelanggaran untuk {{$dataTampil[0]->users_nrp}}</h4>
</div>
<div class="modal-body">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nama Pelanggaran</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Keterangan</th>
      </tr>
    </thead>
    <tbody>
      @foreach($dataTampil as $d)
      <tr>
        <td>{{$d->nama_pelanggaran}}</td>
        <td>{{$d->tanggal}}</td>
        <td>{{$d->keterangan}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>