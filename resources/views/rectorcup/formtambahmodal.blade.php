<div class="modal-body">
    <form role="form" method='POST' action="{{route('tambahmedal') }}" enctype="multipart/form-data">
        <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
            <h4 class="modal-title">Medali Cabang {{$data[0]->nama_cabang}}</h4>
        </div>
        <div class="modal-body">
            @csrf
            <div class="form-group">
                <label>Medali</label>
                <div class="radio-list">
                    <label class="radio">
                        <input type="radio" name="radios1" checked="checked" id="gold" onclick="changeMedal();" class="form-control" />
                        <span></span>
                        <img src="./img/gold.png" alt="Medali Emas" style="width: 20%; height: 20%;">
                      
                    </label>
                    <label class="radio">
                        <input type="radio" name="radios1" id="silver" onclick="changeMedal();" class="form-control" />
                        <span></span>
                        <img src="./img/silver.png" alt="Medali Perak" style="width: 20%; height: 20%;">
                    </label>
                    <label class="radio">
                        <input type="radio" name="radios1" id="bronze" onclick="changeMedal();" class="form-control" />
                        <span></span>
                        <img src="./img/bronze.png" alt="Medali Perunggu" style="width: 20%; height: 20%;">
                    </label>
                </div>
            </div>
            <input type="hidden" id="medal" name="medal" value="NULL">
            <input type="hidden" id="juara" name="juara" value="NULL">
            <input type="hidden" id="idrc" name="idrc" value="{{$data[0]->idrc}}">

            <!-- <input type="radio" id="bronze" onclick="changeMedal();" class="form-control" name="radAnswer">Bronze
            <input type="radio" id="silver" onclick="changeMedal();" class="form-control" name="radAnswer">Silver
            <input type="radio" id="gold" onclick="changeMedal();" class="form-control" name="radAnswer">Gold -->

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">Tambah</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        </div>
    </form>
</div>

<script>
    function changeMedal() {
        if (document.getElementById('bronze').checked) {
            document.getElementById('medal').value = "Perunggu";
            document.getElementById('juara').value = "3";
        } else if (document.getElementById('silver').checked) {
            document.getElementById('medal').value = "Perak";
            document.getElementById('juara').value = "2";
        } else if (document.getElementById('gold').checked) {
            document.getElementById('medal').value = "Emas";
            document.getElementById('juara').value = "1";
        }
    }
</script>