
<?php $__env->startSection('style'); ?>
<link href="<?php echo e(asset('admin/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navitd'); ?>
<li class="menu-item " aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Admin</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/itd" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Maharu</span>
    </a>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="<?php echo e(url('itdpanitia')); ?>" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Panitia</span>
    </a>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="<?php echo e(url('itdpresensi')); ?>" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Presensi</span>
    </a>
</li>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="">
                <!-- d-flex align-items-center mr-1 -->
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5 ml-3">
                    <!--begin::Page Title-->
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Heyo anak ITD,
                        <?php echo e(Auth::user()->name); ?></h2>

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
                <div class="alert alert-custom alert-light-success fade show mb-5" role="alert"
                    style="width:100%; Max-height:4em;">
                    <div class="alert-icon"><i class="flaticon2-check-mark icon-lg"></i></div>
                    <div class="alert-text" style="font-size:120%;"><label for=""><?php echo e(session('status')); ?></label></div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>
                <?php elseif(session('error')): ?>
                <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert"
                    style="width:100%; Max-height:5em;">
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

            <div class="card card-custom shadow-none">
                <div class="card-header">
                    <div class="card-title">

                        <h3 class="card-label">Daftar Nama Maharu</h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                        <thead>
                            <tr>
                                <th>NRP</th>
                                <th>Nama Lengkap</th>
                                <th>Delta</th>
                                <th>Echo</th>
                                <th>Sudah Reset?</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $maharu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <span><?php echo e($mhr->nrp); ?></span>
                                    <!-- <a href='#modalChange_<?php echo e($mhr->nrp); ?>' data-toggle='modal'>
                                        <button type="button" class="btn btn-success" style="min-width:100px"><?php echo e($mhr->nrp); ?></button>
                                    </a> -->
                                    <div class="modal fade" id="modalChange_<?php echo e($mhr->nrp); ?>" tabindex="-1" role="basic"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"><?php echo e($mhr->name); ?></h4>
                                                </div>
                                                <div class="modal-body ml-3">
                                                    <form action="<?php echo e(route('ubahdata')); ?>" method="post" >
                                                    <?php echo csrf_field(); ?>
                                                    <label for="" class="text-primary">Nama Lengkap</label><br>
                                                    <input type="text" class="form-control" value="<?php echo e($mhr->name); ?>"
                                                        name="namalengkap"><br>
                                                    <label for="" class="text-primary">No Telp.</label><br>
                                                    <input type="text" class="form-control" value="<?php echo e($mhr->no_hp); ?>"
                                                        name="no_hp"><br>
                                                    <label for="" class="text-primary">ID Line</label><br>
                                                    <input type="text" class="form-control" value="<?php echo e($mhr->id_line); ?>"
                                                        name="id_line"><br>
                                                    <label for="" class="text-primary">Email</label><br>
                                                    <input type="text" class="form-control" value="<?php echo e($mhr->email); ?>"
                                                        name="email"><br>
                                                    <label for="" class="text-primary">Instagram</label><br>
                                                    <input type="text" class="form-control" value="<?php echo e($mhr->instagram); ?>"
                                                        name="instagram"><br>
                                                    <label for="" class="text-primary">Asal Sekolah</label><br>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo e($mhr->asal_sekolah); ?>" name="asal_sekolah"><br>
                                                    <label for="" class="text-primary">Delta</label><br>
                                                    <input type="text" class="form-control" value="<?php echo e($mhr->alpha); ?>"
                                                        name="alpha"><br>
                                                    <label for="" class="text-primary">Echo</label><br>
                                                    <input type="text" class="form-control" value="<?php echo e($mhr->beta); ?>"
                                                        name="beta"><br>
                                                    <input type="hidden" name = "nrp" value ="<?php echo e($mhr->nrp); ?>">
                                                    <button type="submit" class="btn btn-success mt-4">Ubah</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo e($mhr->name); ?></td>
                                <td><?php echo e($mhr->alpha); ?></td>
                                <td><?php echo e($mhr->beta); ?></td>
                                <td>
                                    <?php if($mhr->is_reset == 1): ?>
                                    Sudah
                                    <?php else: ?>
                                    Belum
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href='#modalChange_<?php echo e($mhr->nrp); ?>' data-toggle='modal'>
                                        <button type="button" class="btn btn-success mt-2 mb-2">Ubah</button>
                                    </a>
                                    <a href="<?php echo e(url('resetpwd/'.$mhr->nrp)); ?>">
                                        <!-- <button type="submit" class="btn btn-danger">Reset</button> -->
                                        <button type="submit" class="btn btn-danger mt-2 mb-2">Reset</button>
                                    </a>
                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>NRP</th>
                                <th>Nama Lengkap</th>
                                <th>Delta</th>
                                <th>Echo</th>
                                <th>Sudah Reset?</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->


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
<script src="<?php echo e(asset('admin/js/pages/crud/datatables/basic/paginations.js')); ?>"></script>

<!--end::Page Scripts-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Catherine\Panitia\Web-Utama-MOB-FT-2023\resources\views/itd/main.blade.php ENDPATH**/ ?>