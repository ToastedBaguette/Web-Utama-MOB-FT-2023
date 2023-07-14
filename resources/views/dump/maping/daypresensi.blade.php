 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Rekap Presensi</h4>
            <label for="groupby">Alfa/Beta</label>
            <select name="" id="groupby">
                <option value="-">--Pilih--</option>
                <option value="alpha">Alfa</option>
                <option value="beta">Beta</option>
            </select><br>
            <label for="kelompok">Kelompok</label>
            <select name="" id="kelompok" disabled>

            </select><br>
            <select name="" id="pilihtanggal">
                <option value="-">--Pilih Tanggal--</option>
                @foreach($presensi as $p)
                <option value="{{$p->tanggal}}">{{$p->tanggal}}</option>
                @endforeach
            </select><br>
            <small>Format tanggal yyy/mm/dddd</small>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-paginate" id="datapresensi" cellspacing="0" width="100%">
                <thead style="text-align:center;">
                    <tr>
                        <th style="vertical-align: middle;" rowspan="2">Nama</th>
                        <th style="vertical-align: middle;" rowspan="2">NRP</th>
                        <th colspan="3">Kehadiran</th>
                    </tr>
                    <tr>
                        <th>Awal</th>
                        <th>Akhir</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
    </div>

</div>
<script>
    $('#groupby').on('change', function(e) {
        var groupby_id = e.target.value;
        if (groupby_id == "alpha") {
            $('#kelompok').html('<option value="' + {{Auth::user()->alpha}} + '">'+ {{Auth::user()->alpha}} + '</option>');
        } else {
            $('#kelompok').html('<option value="' + {{Auth::user()->beta}} + '">' + {{ Auth::user()->beta}} + '</option>');
        }
    });
    $('#pilihtanggal').on('change', function(e) {
        var tanggal = e.target.value;
        var kelompok = $('#kelompok').val();

        $.ajax({
            type: "POST",
            url: "{{ route('dayrecappresensi') }}",
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'tanggal': tanggal,
                'kelompok': kelompok
            },
            success: function(data) {
                $('#tbody').empty();
                for (let i = 0; i < data.listData.length; i++) {
                    $('#tbody').append(`<tr>
                        <td>` + data.listData[i].name + `</td>
                        <td style="text-align:center;">` + data.listData[i].nrp + `</td>
                        <td style="text-align:center;">` + data.listData[i].rekap_awal + `</td>
                        <td style="text-align:center;">` + data.listData[i].rekap_akhir + `</td>
                        </tr>`);
                }

            }
        })

    });
</script>
@endsection
