<div class="modal-header">
    <h4 class="modal-title">Pelanggaran&nbsp;<span class="text-primary">{{$dataTampil[0]->users_nrp}}</span></h4>
</div>
<div class="modal-body ml-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Pelanggaran</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
        @for ($i = 0; $i < count($dataTampil); $i++)
            <tr>
                <td>{{$date[$i]}}</td>
                <td>{{$dataTampil[$i]->nama_pelanggaran}}</td>
                <td>{{$dataTampil[$i]->keterangan}}</td>
            </tr>
        @endfor
        </tbody>
    </table>
</div>