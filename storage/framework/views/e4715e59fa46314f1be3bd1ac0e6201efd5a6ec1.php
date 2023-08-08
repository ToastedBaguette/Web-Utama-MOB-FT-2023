
<?php $__env->startSection('style'); ?>
<link href="<?php echo e(asset('admin/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navad'); ?>
<li class="menu-item " aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Presensi</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/ad" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Rekap Presensi</span>
    </a>
</li>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5 ml-3">
                    <!--begin::Page Title-->
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Hai AD, <?php echo e(Auth::user()->name); ?></h2>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 order-2 order-xxl-1 text-center">
                    <!--begin::List Widget 9-->
                    <div class="card card-custom bg-success card-stretch gutter-b shadow-none">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label text-white font-weight-bolder">Total Absen Awal</span>
                                <span class="text-white mt-3 font-weight-normal font-size-sm">yang sudah absen di hari ini</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <h1 id="hasil1" class="text-white"><?php echo e($allawalyes[0]->jumAllAwal); ?> / <?php echo e($allmaharu[0]->jumAll); ?></h1>
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end: List Widget 9-->
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12 order-2 order-xxl-1 text-center">
                    <!--begin::List Widget 9-->
                    <div class="card card-custom bg-success card-stretch gutter-b shadow-none">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label text-white font-weight-bolder">Total Absen Akhir</span>
                                <span class="text-white mt-3 font-weight-normal font-size-sm">yang sudah absen di hari ini</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <h1 id="hasil1" class="text-white"><?php echo e($allakhiryes[0]->jumAllAkhir); ?> / <?php echo e($allmaharu[0]->jumAll); ?></h1>
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end: List Widget 9-->
                </div>
            </div>

            <div class="card card-custom card-stretch shadow-none">
                <div class="card card-custom shadow-none card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Rekap Presensi</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/ads/tampil" method='get'>
                            <label for="groupby">Nama Kelompok</label>
                            <select name="group" id="groupby" class="form-control" required>
                                <option value="">--Pilih Nama Kelompok --</option>
                                <option value="alpha">Jurusan</option>
                                <option value="beta">Teta</option>
                            </select><br>

                            <label for="kelompok">Nomor Kelompok</label>
                            <select name="nomer" id="kelompok" class="form-control" required>
                                <option value="">--Pilih Nama Kelompok Dahulu--</option>
                            </select><br>
                            <label for="tanggal">Tanggal</label>
                            <select name="hari" id="tanggal" class="form-control" required>
                                <option value="">--Pilih tanggal--</option>
                                <?php
                                foreach ($tanggal as $t) {
                                    echo "<option value=" . $t->idpresensi . ">" . date('d/m/Y', strtotime($t->tanggal)) . "</option>";
                                }
                                ?>
                            </select>
                            <button id="tampil" type="submit" class="btn btn-success mt-4">Tampil</button>

                        </form>


                        <!-- begin: Table -->

                        <br>
                        <hr>
                        <br>
                        <?php if($list!=null): ?>
                        <?php if($group == 'alpha'): ?>
                        <h3 style="margin: auto;width: 100%;padding: 10px;" class="gray">Presensi Jurusan <?php echo e($nomer); ?></h3>
                        <?php elseif($group == 'beta'): ?>
                        <h3 style="margin: auto;width: 100%;padding: 10px;" class="gray">Presensi Teta <?php echo e($nomer); ?></h3>
                        
                        <?php endif; ?>

                        <h3 style="margin: auto;width: 100%;padding: 10px;" class="gray">Presensi tanggal <?php echo date('d F Y', strtotime($list[0]->tanggal)) ?> </h3>
                        <br>
                        <?php if(count($list) > 0): ?>
                        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable" style="margin-top:1em;">
                            <thead style="text-align:center;">
                                <tr>
                                <tr>
                                    <th style="vertical-align: middle;" rowspan="2">Nama</th>
                                    <th style="vertical-align: middle;" rowspan="2">NRP</th>
                                    <th colspan="2">Kehadiran</th>

                                </tr>
                                <tr>
                                    <th>Awal</th>
                                    <th>Akhir</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody id="list" style="min-height:500px;text-align:center;">
                                <?php
                                $awal = '';
                                $akhir = '';

                                if (count($list) > 0) {
                                    foreach ($list as $l) {
                                        if ($l->rekap_awal == 1) {
                                            $awal = 'checked';
                                        }
                                        if ($l->rekap_akhir == 1) {
                                            $akhir = 'checked';
                                        }
                                        echo "
                                            <tr>
                                            <td style='text-align:left;'>" . $l->name . "</td>
                                            <td style='text-align:center;'>" . $l->nrp . "</td>
                                            <td style='text-align:center;'><input type='checkbox' onclick='return false;'" . $awal . "></td>
                                            <td style='text-align:center;'><input type='checkbox' onclick='return false;'" . $akhir . "></td>
                                            </tr>";
                                        $awal = '';
                                        $akhir = '';
                                    }
                                }
                                ?>
                            </tbody>
                            <tfoot style="text-align:center;">
                                <tr>
                                <tr>
                                    <th style="vertical-align: middle;" rowspan="2">Nama</th>
                                    <th style="vertical-align: middle;" rowspan="2">NRP</th>
                                    <th>Awal</th>
                                    <th>Akhir</th>
                                </tr>
                                <tr>
                                    <th colspan="2">Kehadiran</th>
                                </tr>
                                </tr>
                            </tfoot>
                        </table>
                        <?php elseif(count($list) === 0): ?>
                        <h4 style="color:#bebebe;text-align: center;margin-top:5%;">Belum ada data</h4>
                        <?php endif; ?>
                        <?php endif; ?>
                        <!-- end: Table -->
                    </div>
                </div>
            </div>
        </div>
        <!--end::Card-->

        <!--end::Container-->
    </div>
    <!--end::Entry-->


    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
    <!--begin::Page Vendors(used by this page)-->
    <script src="<?php echo e(asset('admin/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="<?php echo e(asset('admin/js/pages/crud/datatables/basic/paginations3tabel.js')); ?>"></script>
    <!--end::Page Scripts-->
    <script>
        $('#groupby').on('change', function(e) {
            var groupby_id = e.target.value;
            $.ajax({
                type: "POST",
                url: "<?php echo e(route('kelompok')); ?>",
                data: {
                    '_token': '<?php echo csrf_token() ?>',
                    'groupby_id': groupby_id
                },
                success: function(data) {
                    $('#kelompok').empty();
                    $('#kelompok').append('<option selected value="">--Pilih Nomor Kelompok--</option>');
                    // window.alert(groupby_id);

                    for (let i = 0; i < data.listkelompok.length; i++) {
                        $.each(data.listkelompok[i], function(index, listkelompok) {
                            $('#kelompok').append('<option value="' + listkelompok + '">' + listkelompok + '</option>');
                        })
                    }

                }
            })
        });
    </script>

    </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Github Repository\Web-Utama-MOB-FT-2023\resources\views/ad/index2.blade.php ENDPATH**/ ?>