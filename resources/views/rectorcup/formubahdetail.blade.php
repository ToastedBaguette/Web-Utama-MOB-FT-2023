<div class="modal-body">
    <form role="form" method='POST' action="{{route('ubahdetail') }}">
        <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
            <h4 class="modal-title" style="">Ubah Detail Cabang {{$data[0]->nama_cabang}}</h4>
        </div>
        <div class="modal-body">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label>Tanggal Seleksi</label>
                    <input class="form-control" type="date" name="tanggal" value="{{$data[0]->tanggal_seleksi}}" required>
                </div>
                <div class="form-group">
                    <label>Waktu Seleksi</label>
                    <input class="form-control" type="time" name="waktu" value="{{$data[0]->jam_seleksi}}" required>
                </div>
                <!-- <div class="form-group">
                    <label>Status</label>
                    <input type="hidden" id="status" name="status" value="{{$data[0]->status}}">
                    <input type="hidden" id="idrc" name="idrc" value="{{$data[0]->idrc}}"> -->
                {{--@if($data[0]->status=="Buka")--}}
                <!-- <input class="form-control" type="checkbox" checked="checked" onclick="changeStatus();" id="chckbox" name="chckbox" /> -->
                {{--@else--}}
                <!-- <input class="form-control" type="checkbox" onclick="changeStatus();" id="chckbox" name="chckbox" /> -->
                {{--@endif--}}
                <!-- </div> -->
                <div class="form-group">
                    <label>Status</label>
                    <input type="hidden" id="status" name="status" value="{{$data[0]->status}}">
                    <input type="hidden" id="idrc" name="idrc" value="{{$data[0]->idrc}}">
                    <span class="switch switch-success">
                        <label>
                        @if($data[0]->status=="Buka")
                        <input class="form-control" type="checkbox" checked="checked" onclick="changeStatus();" id="chckbox" name="chckbox" />
                        @else
                        <input class="form-control" type="checkbox" onclick="changeStatus();" id="chckbox" name="chckbox"/>
                        @endif
                        <span></span>
                        </label>
                    </span>
                    <!-- </div> -->
                </div>
                <div class="form-group">
                    <label>Kuota</label>
                    <input class="form-control" type="number" name="kuota" value="{{$data[0]->kuota}}" required />
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">Ubah</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        </div>
    </form>
</div>

<script>
    function changeStatus() {
        if (document.getElementById('chckbox').checked) {
            document.getElementById('status').value = "Buka";
        } else {
            document.getElementById('status').value = "Tutup";
        }
    }
</script>