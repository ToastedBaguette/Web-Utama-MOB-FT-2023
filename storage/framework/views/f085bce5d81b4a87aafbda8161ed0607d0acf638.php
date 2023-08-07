
<?php $__env->startSection('style'); ?>
<link href="<?php echo e(asset('admin/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navsfd'); ?>
<li class="menu-item " aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section ">
    <h4 class="menu-text">Pelanggaran</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="<?php echo e(url('sfd')); ?>" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Input Pelanggaran</span>
    </a>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="<?php echo e(url('rekap')); ?>" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Rekap Pelanggaran</span>
    </a>
</li>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="<?php echo e(url('masterData')); ?>" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Master Data Pelanggaran</span>
    </a>
</li>
<!-- <li class="menu-item" aria-haspopup="true">
    <a href="" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Bukti Kendala</span>
    </a>
</li> -->

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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Hai SFD, <?php echo e(Auth::user()->name); ?></span></h2>
                    <!-- fe tolong pindahin btn ini nanti ke kiri ya-->
                    <!-- <button class='btn btn-success mt-4' data-toggle="modal" data-target="#Mdl-Tambah">Tambah Pelanggaran</button> -->
                </div>
                <!--end::Page Title-->
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div>
                <?php if(session('status')): ?>
                <!-- <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div> -->
                <div class="alert alert-custom alert-light-success fade show mb-5" role="alert" style="width:100%; Max-height:5em;">
                    <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
                    <div class="alert-text" style="font-size:125%;"><?php echo e(session('status')); ?></div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <!--begin::Card-->
            <div class="card card-custom shadow-none">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">Data Pelanggaran</h3>
                    </div>
                    <div class="card-toolbar">
                        <a href='#modalAdd'>
                            <button type="button" class="btn btn-success mt-4" data-toggle="modal" data-target="#Mdl-Tambah">Tambah Pelanggaran</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                        <thead>
                            <tr>
                                <th>Nama Pelanggaran</th>
                                <th>Jenis Pelanggaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!-- <tr>
                            <th style="text-align: center;">Nama Pelanggaran</th>
                            <th style="text-align: center;">Jenis Pelanggaran</th>
                            <th style="text-align: center;" colspan="2">Action</th>
                        </tr> -->
                        <tbody>
                            <?php $__currentLoopData = $listPelanggaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggaran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td id='nama_<?php echo e($pelanggaran->idpelanggaran); ?>'><?php echo e($pelanggaran->nama_pelanggaran); ?>

                                </td>
                                <td id='jenis_<?php echo e($pelanggaran->idpelanggaran); ?>'><?php echo e($pelanggaran->jenis_pelanggaran); ?>

                                </td>
                                <td>
                                    <button class='btn btn-success mt-4 btn-edit' data-toggle="modal" id-pelanggaran='<?php echo e($pelanggaran->idpelanggaran); ?>' data-target="#Mdl-Edit">Edit</button>
                                    <button class='btn btn-primary mt-4 btn-hapus' data-toggle="modal" id-pelanggaran='<?php echo e($pelanggaran->idpelanggaran); ?>' data-target="#Mdl-hapus">Hapus</button>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama Pelanggaran</th>
                                <th>Jenis Pelanggaran</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end::Card-->
    <!-- begin::Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
        </table>

        </table>
    </div>
</div>
</div>
</div>
<!--end::Card-->
<!-- begin::Modal Tambah -->
<div class="modal fade" id="Mdl-Tambah" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form role="form" method='POST' action="<?php echo e(route('tambahPelanggaran')); ?>">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                    <h4 class="modal-title">Tambah Pelanggaran Baru</h4>
                </div>
                <div class="modal-body ml-3">
                    <?php echo csrf_field(); ?>
                    <div class="form-body">
                        <div class="form-group">
                            <label>Nama Pelanggaran</label>
                            <input type="text" class="form-control" id="namapelanggaran" name="namapelanggaran" required placeholder="Nama Pelanggaran">
                        </div>
                        <div class="form-group">
                            <label>Jenis Pelanggaran</label>
                            <select class="form-control" id='jenispelanggaran' name='jenispelanggaran' required>
                                <option value="" selected hidden>--Pilih Jenis Pelanggaran--</option>
                                <option value="Ringan">Ringan</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Berat">Berat</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mt-4" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success mt-4">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end::Modal Tambah -->
<!--end::Container-->
</div>
<!--end::Entry-->
</div>
</div>
</div>
<!--end::Card-->

<!-- begin::Modal Edit -->
<div class="modal fade" id="Mdl-Edit" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form role="form" method='POST' action="<?php echo e(route('editPelanggaran')); ?>">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                    <h4 class="modal-title">Edit Pelanggaran</h4>
                </div>
                <div class="modal-body">
                    <?php echo csrf_field(); ?>
                    <div class="form-body">
                        <div class="form-group">
                            <label>Nama Pelanggaran</label>
                            <input type="text" class="form-control" id="editnamapelanggaran" name="namapelanggaran" required placeholder="Nama Pelanggaran">
                        </div>
                        <input type="hidden" id='id_edit' value="" name='id_edit'>
                        <div class="form-group">
                            <label>Jenis Pelanggaran</label>
                            <select class="form-control" id='editjenispelanggaran' name='jenispelanggaran' required>
                                <option value="" hidden selected>--Pilih Jenis Pelanggaran--</option>
                                <option value="Ringan">Ringan</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Berat">Berat</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mt-4" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success mt-4">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- end::Modal Edit -->

<!-- begin::Modal Hapus -->
<div class="modal fade" id="Mdl-hapus" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form role="form" method='POST' action="<?php echo e(route('hapusPelanggaran')); ?>">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                    <h4 class="modal-title">Hapus Pelanggaran</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id='id_hapus' value="" name='id_hapus'>
                    <?php echo csrf_field(); ?>
                    <div class="form-body">
                        <div>Yakin untuk menghapus pelanggaran ini?</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default mt-4" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary mt-4">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- end::Modal Hapus -->
<!--end::Container-->
</div>
<!--end::Entry-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $('.btn-hapus').on('click', function() {
        let id = $(this).attr('id-pelanggaran');
        $('#id_hapus').attr('value', id);
    });

    $('.btn-edit').on('click', function() {
        var id = $(this).attr('id-pelanggaran');
        var nama = $('#nama_' + id).text();
        var jenis = $('#jenis_' + id).text();
        console.log(nama);
        console.log(jenis);
        $('#editnamapelanggaran').attr('value', nama);
        $('#editjenispelanggaran').val(jenis);
        $('#id_edit').attr('value', id);
    });
</script>

<!--begin::Page Vendors(used by this page)-->
<script src="<?php echo e(asset('admin/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="<?php echo e(asset('admin/js/pages/crud/datatables/basic/paginations.js')); ?>"></script>
<!--end::Page Scripts-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nicov\Documents\GitHub\Web-Utama-MOB-FT-2023\resources\views/sfd/datapelanggaran.blade.php ENDPATH**/ ?>