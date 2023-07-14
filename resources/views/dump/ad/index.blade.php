@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h4>Rekap Absensi</h4>
            <label for="groupby">Alfa/Beta</label>
            <select name="" id="groupby">
                <option value="-" selected disabled>--Pilih--</option>
                <option value="alpha">Alfa</option>
                <option value="beta">Beta</option>
            </select><br>
            <label for="kelompok">Kelompok</label>
            <select name="" id="kelompok">
                <option value="-" selected disabled>--Pilih Kelompok--</option>
            </select><br>

            <select name="" id="tanggal">
                <option value="" selected disabled>Pilih tanggal</option>
                <?php
                foreach ($tanggal as $t) {
                    echo "<option value=" . $t->idpresensi . ">" . date('d-M-Y', strtotime($t->tanggal)) . "</option>";
                }
                ?>
            </select> <br>

            <button id="tampil" type="button">Tampil</button> <br> <br>
            <table class="table table-paginate" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <tr>
                        <th style="vertical-align: middle;" rowspan="2">Nama</th>
                        <th style="vertical-align: middle;" rowspan="2">NRP</th>
                        <th colspan="3">Kehadiran</th>
                    </tr>
                    <tr>
                        <th>Awal</th>
                        <th>Akhir</th>
                    </tr>
                    </tr>
                </thead>
                <tbody id="list">

                </tbody>
            </table>



        </div>
    </div>
</div>

<script>
    $('#groupby').on('change', function(e) {
        var groupby_id = e.target.value;
        $.ajax({
            type: "POST",
            url: "{{ route('kelompok') }}",
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'groupby_id': groupby_id
            },
            success: function(data) {
                $('#kelompok').empty();
                $('#kelompok').append('<option selected value="">--Pilih Kelompok--</option>');
                // window.alert(groupby_id);

                for (let i = 0; i < data.listkelompok.length; i++) {
                    $.each(data.listkelompok[i], function(index, listkelompok) {
                        $('#kelompok').append('<option value="' + listkelompok + '">' + listkelompok + '</option>');
                    })
                }

            }
        })
    });

    $('#tampil').on('click', function(e) {
        alert('oke');
        // $('#list').html('');
        // var group = $('#groupby').val();
        // var nomer = $('#kelompok').val();
        // var tanggal = $('#tanggal').val();


        // if (group == "") {
        //     alert('pilih dahulu combobox alpha/beta');
        // }
        // if (nomer == "") {
        //     alert('pilih dahulu combobox kelompok');
        // }
        // if (tanggal == "") {
        //     alert('pilih dahulu combobox tanggal');
        // }
        // if ((group != "") && (nomer != "") && (tanggal != "")) {
        //     $.ajax({
        //         type: "POST",
        //         url: "{{ route('tampilAd') }}",
        //         data: {
        //             '_token': '<?php echo csrf_token() ?>',
        //             'group': group,
        //             'nomer': nomer,
        //             'hari': tanggal
        //         },
        //         success: function(data) {
        //             $.each(data.list, function(key, value) {
        //                 var awal = '';
        //                 var akhir = '';
        //                 if (data.list[key].rekap_awal == 1) {
        //                     awal = 'checked';
        //                 }
        //                 if (data.list[key].rekap_akhir == 1) {
        //                     akhir = 'checked';
        //                 }
        //                 $('#list').append(`<tr>
        //                         <td>` + data.list[key].name + `</td>
        //                         <td>` + data.list[key].nrp + `</td>
        //                         <td><input type="checkbox" onclick="return false;"` + awal + `></td>
        //                         <td><input type="checkbox" onclick="return false;"` + akhir + `></td>
        //                         </tr>
        //                     `);
        //             });
        //         }
        //     })
        // }

    });
</script>
@endsection
