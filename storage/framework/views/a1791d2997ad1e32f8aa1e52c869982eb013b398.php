
<?php $__env->startSection('navmaping'); ?>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="" class="menu-link">
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
    <a href="/alfa2" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Delta</span>
    </a>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/beta2" class="menu-link">
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
    <a href="/daftarpresensi2" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Presensi</span>
    </a>
</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navsfd'); ?>
<li class="menu-item " aria-haspopup="true">
    <a href="" class="menu-link">
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
<li class="menu-item menu-item-active" aria-haspopup="true">
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('naved'); ?>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section ">
    <h4 class="menu-text">Acara</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="<?php echo e(url('sfd')); ?>" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Rundown</span>
    </a>
</li>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbph'); ?>
<li class="menu-item" aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section ">
    <h4 class="menu-text">Informasi</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/bph" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Lihat Informasi</span>
    </a>
</li>
<?php $__env->stopSection(); ?>
<!--begin::Content-->
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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3 secondary-font">Hai BPH, <?php echo e(Auth::user()->name); ?></h2>
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
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-xxl-6 order-2 order-xxl-1 text-center">
                <!--begin::List Widget 9-->
                <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="font-weight-bolder text-dark">Total Absen Awal</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">yang sudah absen di hari ini</span>
                            </h3>
                        </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-4">

                            <h1><?php echo e($allawalyes[0]->jumAllAwal); ?> / <?php echo e($allmaharu[0]->jumAll); ?></h1>
                        </div>
                <!--end: Card Body-->
                </div>
                <!--end: List Widget 9-->
                </div>

                <div class="col-xxl-6 order-2 order-xxl-1 text-center">
                <!--begin::List Widget 9-->
                <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="font-weight-bolder text-dark">Total Absen Akhir</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">yang sudah absen di hari ini</span>
                            </h3>
                        </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-4">
                    <h1><?php echo e($allakhiryes[0]->jumAllAkhir); ?> / <?php echo e($allmaharu[0]->jumAll); ?></h1>
                </div>
                <!--end: Card Body-->
                </div>
                <!--end: List Widget 9-->
                </div>

                </div>
            <div class="row">
                <div class="col-xxl-12 order-2 order-xxl-1 text-center">
                <!--begin::List Widget 9-->
                <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="font-weight-bolder text-dark">Total Pelanggaran</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">yang pelanggaran di hari ini</span>

                            </h3>
                        </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-4">
                           <h1 id="hasil1"><?php echo e($pelanggaran[0]->jumlahPelanggaran); ?></h1>
                        </div>
                <!--end: Card Body-->
                </div>
                <!--end: List Widget 9-->
                </div>

            </div>

            <div class="row pl-3 pr-3">
                <div class="col-xxl-12 order-2 order-xxl-1 text-center">
                    <!--begin::List Widget 9-->
                    <a target="_blank" href="<?php echo e(route('ad.index')); ?>" class="btn btn-success btn-lg btn-block">Lihat Rekap Presensi</a>
                    <a target="_blank" href="<?php echo e(url('/rekap')); ?>" class="btn btn-primary btn-lg btn-block">Lihat Rekap Pelanggaran</a>
                    <!--end: List Widget 9-->
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-xxl-12 order-2 order-xxl-1 text-center">
                    <a target="_blank" href="<?php echo e(url('/rekap')); ?>" class="btn btn-primary btn-lg btn-block">Lihat Rekap Pelanggaran</a>
                </div>
            </div> -->
            <!-- <br>
            <div class="row">
                <div class="col-xxl-12 order-2 order-xxl-1 text-center"> -->
            <!--begin::List Widget 9-->
            <!-- <a target="_blank" href="" class="btn btn-success btn-lg btn-block">Lihat Rekap Rector Cup</a> -->
            <!--end: List Widget 9-->
            <!-- </div>
            </div> -->

            <!--end::Dashboard-->
            <!-- </div> -->
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <?php $__env->stopSection(); ?>
    <!--end::Content-->

    <?php $__env->startSection('script'); ?>
    <script>
        $('#btnKelompokTanggal1').on('click', function(e) {
            var alfa = $('#btnKelompokTanggal1').val();
            $.ajax({
                type: "POST",
                url: "<?php echo e(route('kelompok')); ?>",
                data: {
                    '_token': '<?php echo csrf_token() ?>',
                    'alfa': groupby_id
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
    </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nicov\Documents\GitHub\Web-Utama-MOB-FT-2023\resources\views/bph/index.blade.php ENDPATH**/ ?>