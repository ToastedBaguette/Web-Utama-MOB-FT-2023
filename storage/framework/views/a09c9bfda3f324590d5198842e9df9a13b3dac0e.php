
<?php $__env->startSection('style'); ?>
<link href="<?php echo e(asset('admin/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navmaping'); ?>
<li class="menu-item " aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Kelompok</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/alfa" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Delta</span>
    </a>
</li>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/beta" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Echo</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Presensi</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/daypresensi" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Presensi</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Pelanggaran</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/anakkumelanggar" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Pelanggaran Anakku di Delta</span>
    </a>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/anakkumelanggarbeta" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Pelanggaran Anakku di Echo</span>
    </a>
</li>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="margin-top:-1%">
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Hai Maping, <?php echo e(Auth::user()->name); ?></span></h2>

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
            <!--begin::Card-->

            <!-- begin: sweetalert -->
            <div class="">
                <?php if(session('status')): ?>
                <div class="alert alert-custom alert-light-success fade show mb-5" role="alert" style="width:100%; Max-height:5em;">
                    <div class="alert-icon"><i class="flaticon2-check-mark icon-lg"></i></div>
                    <div class="alert-text" style="font-size:120%;"><label for=""><?php echo e(session('status')); ?></label></div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>
                <?php elseif(session('error')): ?>
                <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert" style="width:100%; Max-height:5em;">
                    <div class="alert-icon"><i class="flaticon2-warning "></i></div>
                    <div class="alert-text"><?php echo e(session('error')); ?></div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>
                <?php endif; ?>

            </div>
            <!-- end: sweetalert -->

            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">

                        <h3 class="card-label">Daftar Mahasiswa Kelompok Echo <?php echo e(Auth::user()->beta); ?></h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable" style="text-align:center;">
                        <thead>
                            <tr>
                                <th>NRP</th>
                                <th>Nama Lengkap</th>
                                <th>Delta</th>
                                <th>Echo</th>
                                <th>Asal Sekolah</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $beta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <a href='#modalChange_<?php echo e($mhr->nrp); ?>' data-toggle='modal'>
                                        <button type="button" class="btn btn-success" style="min-width:100px"><?php echo e($mhr->nrp); ?></button>
                                    </a>
                                    <div class="modal fade" id="modalChange_<?php echo e($mhr->nrp); ?>" tabindex="-1" role="basic" aria-hidden="true" style="text-align:LEFT;">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"><?php echo e($mhr->name); ?></h4>
                                                </div>
                                                <div class="modal-body ml-3">
                                                    <label for="" class="text-primary">Nama Lengkap</label><br>
                                                    <label for=""><?php echo e($mhr->name); ?></label><br><br>
                                                    <label for="" class="text-primary">No Telp.</label><br>
                                                    <label for=""><?php echo e($mhr->no_hp); ?></label><br><br>
                                                    <label for="" class="text-primary">ID Line</label><br>
                                                    <label for=""><?php echo e($mhr->id_line); ?></label><br><br>
                                                    <label for="" class="text-primary">Email</label><br>
                                                    <label for=""><?php echo e($mhr->email); ?></label><br><br>
                                                    <label for="" class="text-primary">Instagram</label><br>
                                                    <label for=""><?php echo e($mhr->instagram); ?></label><br><br>
                                                    <label for="" class="text-primary">Asal Sekolah</label><br>
                                                    <label for=""><?php echo e($mhr->asal_sekolah); ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo e($mhr->name); ?></td>
                                <td><?php echo e($mhr->alpha); ?></td>
                                <td><?php echo e($mhr->beta); ?></td>
                                <td><?php echo e($mhr->asal_sekolah); ?></td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>NRP</th>
                                <th>Nama Lengkap</th>
                                <th>Delta</th>
                                <th>Echo</th>
                                <th>Asal Sekolah</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
            <!--begin::Card-->
            <?php if($presensi != 'saat ini belum ada presensi yang sedang dibuka'): ?>
                <div class="card card-custom" style="margin-top:50px;">
                    <div class="card-header">
                        <div class="card-title">

                            <h3 class="card-label">Input Presensi Echo</h3>
                            <small>Pastikan melakukan absensi sebelum jam yang tertera</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('presensimaping')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="asal" value="beta">
                            <label for="">Tanggal</label>
                            <br>
                            <label for=""><?php echo e($presensi); ?></label>
                            <br>
                            <label for="">Waktu Presensi</label>
                            <select class="form-control" name="waktu_presensi" id="jam" style="width:100%;" required>
                                <option value="waktu_awal">Awal</option>
                                <option value="waktu_akhir">Akhir</option>
                            </select>
                            <br>
                            <label for="">Nama Mahasiswa</label>
                            <div class="form-control checkbox-list card card-custom card-stretch" required>
                                <?php $__currentLoopData = $beta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label class="checkbox">
                                    <input type="checkbox" name='mahasiswa[]' value="<?php echo e($mhr->nrp); ?>"><span></span><?php echo e($mhr->name); ?>

                                </label>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <!-- <select class="form-control" name="mahasiswa[]" style="width:100%;" size="10" multiple aria-label="multiple select example" required>
                                <?php $__currentLoopData = $beta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($mhr->nrp); ?>"><?php echo e($mhr->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select> -->

                            <button type="submit" class="btn btn-success mt-4" style="width: 100%;">Kirim</button>
                        </form>


                    </div>

                    <!-- end: Form -->
                </div>
            <?php endif; ?>

        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!--begin::Page Vendors(used by this page)-->
<script src="<?php echo e(asset('admin/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="<?php echo e(asset('admin/js/pages/crud/datatables/basic/paginations.js')); ?>"></script>
<!--end::Page Scripts-->
<script>
    $('#listpresensi').on('change', function(e) {
        var tanggal = e.target.value;
        // window.alert(tanggal);
        $.ajax({
            type: "POST",
            url: "<?php echo e(route('listpresensi')); ?>",
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'tanggal': tanggal
            },
            success: function(data) {
                $('#jam').empty();
                $('#jam').append('<option value="">--Pilih Waktu Presensi--</option>');
                for (let i = 0; i < data.listWaktu.length; i++) {
                    $('#jam').append('<option value="waktu_awal">Awal</option>');
                    $('#jam').append('<option value="waktu_akhir">Akhir</option>');
                    //$('#jam').append('<option value="waktu_awal">Awal (' + data.listWaktu[i].waktu_buka_awal.substr(data.listWaktu[i].waktu_buka_awal.length - 8) + ' - ' + data.listWaktu[i].waktu_tutup_awal.substr(data.listWaktu[i].waktu_tutup_awal.length - 8) + ')</option>');
                    //$('#jam').append('<option value="waktu_akhir">Akhir (' + data.listWaktu[i].waktu_buka_akhir.substr(data.listWaktu[i].waktu_buka_akhir.length - 8) + ' - ' + data.listWaktu[i].waktu_tutup_akhir.substr(data.listWaktu[i].waktu_tutup_akhir.length - 8) + ')</option>');
                }

            }
        })
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nicov\Documents\GitHub\Web-Utama-MOB-FT-2023\resources\views/maping/beta2.blade.php ENDPATH**/ ?>