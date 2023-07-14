<div class="modal-body">
    <form role="form" method='POST' action="{{route('daftar') }}" enctype="multipart/form-data">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Daftar {{$dataTampil[0]->nama_cabang}}</h4>
        </div>
        <div class="modal-body">
            @csrf
            <div class="form-body">
            <div class="form-group">
                <label >Prestasi yang pernah diperoleh</label>
                <textarea class="form-control" name="prestasi" id="prestasi" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label >Upload file persyaratan (File dalam format .PDF)</label>
                <input type="file" class="form-control" accept="application/pdf" id='filesyarat' name='filesyarat' required>
                <input type="hidden" name='idrc' value="{{$dataTampil[0]->idrc}}">
                <input type="hidden" name='nrp' value="{{Auth::user()->nrp}}">
            </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </form>
</div>