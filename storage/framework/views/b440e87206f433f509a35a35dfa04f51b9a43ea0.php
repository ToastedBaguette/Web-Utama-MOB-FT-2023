<!-- sudah ber template ini -->

<?php $__env->startSection('style'); ?>

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
<li class="menu-item" aria-haspopup="true">
    <a href="<?php echo e(url('masterData')); ?>" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Master Data Pelanggaran</span>
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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Hai SFD, <?php echo e(Auth::user()->name); ?></span></h2>
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
            <?php elseif(session('error')): ?>
            <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert" style="width:100%; Max-height:5em;">
                <div class="alert-icon"><i class="flaticon2-warning "></i></div>
                <div class="alert-text" style="font-size:125%;"><?php echo e(session('error')); ?></div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
            <?php endif; ?>
            <!--begin::Card-->
            <div class="card card-custom shadow-none">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Tambah Pelanggaran Baru</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('sfd.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <!-- <div class="form-group">
                    <label>Pilih Pengelompokkan</label>
                    <select class="form-control" id='groupby' name='groupby'>
                        <option value="">--Pilih Pengelompokkan--</option>
                        <option value="alpha">Alpha</option>
                        <option value="beta">Beta</option>
                    </select>
                </div> -->
                        <label for="">Kelompok</label>
                        <select class="form-control" id='groupby' name='groupby' style="width:100%;" required>
                            <option value="">--Pilih Kelompok--</option>
                            <option value="alpha">Delta</option>
                            <option value="beta">Echo</option>
                        </select>
                        <br>

                        <!-- <div class="form-group">
                    <label>Pilih Kelompok</label>
                    <select class="form-control" id='kelompok' name='kelompok' required>
                        <option value="">--Pilih Kelompok--</option>
                    </select>
                </div> -->

                        <label for="">Nomor Kelompok</label>
                        <select class="form-control" id='kelompok' name='kelompok' required style="width:100%;">
                            <option value="">--Pilih Kelompok Dahulu--</option>

                        </select>
                        <br>

                        <!-- <div class="form-group">
                    <label>Pilih Mahasiswa</label>
                    <div id="tambah_mahasiswa">
                        <select class="form-control" id='mahasiswa' name='mahasiswa[]' multiple required>
                            <option value="">--Pilih Kelompok Terlebih Dahulu--</option>
                        </select>
                    </div>
                </div> -->


                        <!-- <label for="">Mahasiswa</label>
                        <select class="form-control" id='mahasiswa' name='mahasiswa[]' multiple required> -->
                        <!-- <option value="">--Pilih Kelompok Terlebih Dahulu--</option> -->

                        <!-- </select> -->

                        <label for="">Mahasiswa</label>
                        <div class="form-control checkbox-list card card-custom card-stretch shadow-none" id='mahasiswa' required>
                            --Pilih Kelompok Terlebih Dahulu--
                        </div>
                        <br>


                        <!-- <div class="form-group">
                    <label>Pilih Pelanggaran</label>
                    <select class="form-control" id='pelanggaran' name='pelanggaran' required>
                        <option value="">--Pilih Pelanggaran--</option>
                        <?php $__currentLoopData = $ringan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($p->idpelanggaran); ?>"><?php echo e($p->jenis_pelanggaran); ?> - <?php echo e($p->nama_pelanggaran); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $sedang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($p->idpelanggaran); ?>"><?php echo e($p->jenis_pelanggaran); ?> - <?php echo e($p->nama_pelanggaran); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $berat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($p->idpelanggaran); ?>"><?php echo e($p->jenis_pelanggaran); ?> - <?php echo e($p->nama_pelanggaran); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if(Auth::user()->nrp == "160219045" ||Auth::user()->nrp == "160219003" ): ?>{
                        <option value="pelanggaranbaru">--Tambah Pelanggaran--</option>
                        <?php endif; ?>
                    </select>
                </div> -->

                        <label for="">Pelanggaran</label>
                        <select class="form-control" id='pelanggaran' name='pelanggaran' required>
                            <option value="">--Pilih Pelanggaran--</option>
                            <?php $__currentLoopData = $ringan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($p->idpelanggaran); ?>"><?php echo e($p->jenis_pelanggaran); ?> - <?php echo e($p->nama_pelanggaran); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $sedang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($p->idpelanggaran); ?>"><?php echo e($p->jenis_pelanggaran); ?> - <?php echo e($p->nama_pelanggaran); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $berat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($p->idpelanggaran); ?>"><?php echo e($p->jenis_pelanggaran); ?> - <?php echo e($p->nama_pelanggaran); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- <option value="pelanggaranbaru">--Tambah Pelanggaran Baru--</option> -->
                        </select>

                        <br>

                        <!-- <div class="form-group">
                    <label>Tanggal Pelanggaran</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div> -->

                        <label for="">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        <br>


                        <!-- <div class="form-group">
                    <label>Keterangan Tambahan (opsional)</label>
                    <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                </div> -->

                        <label for="">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Opsional"></textarea>
                        <br>

                        <button type="submit" class="btn btn-success mt-4" style="width: 100%;">Tambah</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--end::Card-->
    <!-- begin::Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form role="form" method='POST' action="<?php echo e(route('tambahPelanggaran')); ?>">
                    <div class="modal-header">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                        <h4 class="modal-title">Tambah Pelanggaran Baru</h4>
                    </div>
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <div class="form-body">
                            <div class="form-group">
                                <label>Nama Pelanggaran</label>
                                <input type="text" class="form-control" id="namapelanggaran" name="namapelanggaran" required placeholder="Nama Pelanggaran">
                            </div>
                            <div class="form-group">
                                <label>Jenis Pelanggaran</label>
                                <select class="form-control" id='jenispelanggaran' name='jenispelanggaran' required>
                                    <option value="">--Pilih Jenis Pelanggaran--</option>
                                    <option value="Ringan">Ringan</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Berat">Berat</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default mt-4" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success mt-4">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end::Modal -->
    <!--end::Container-->
</div>
<!--end::Entry-->



</div>
</div>
</div>
<!--end::Card-->
<!-- begin::Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method='POST' action="<?php echo e(route('tambahPelanggaran')); ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah Pelanggaran Baru</h4>
                </div>
                <div class="modal-body">
                    <?php echo csrf_field(); ?>
                    <div class="form-body">
                        <div class="form-group">
                            <label>Deskripsi Pelanggaran</label>
                            <input type="text" class="form-control" id="namapelanggaran" name="namapelanggaran" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Pelanggaran</label>
                            <select class="form-control" id='jenispelanggaran' name='jenispelanggaran' required>
                                <option value="">--Jenis Pelanggaran--</option>
                                <option value="Ringan">Ringan</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Berat">Berat</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end::Modal -->
<!--end::Container-->
</div>
<!--end::Entry-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
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

    $('#kelompok').on('change', function(e) {
        var kelompok = e.target.value;
        var group = $('#groupby').val();
        // window.alert(group);
        $.ajax({
            type: "POST",
            url: "<?php echo e(route('mahasiswa')); ?>",
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'kelompok': kelompok,
                'group': group

            },
            // success: function(data) {
            //     $('#mahasiswa').empty();
            //     for (let i = 0; i < data.listMahasiswa.length; i++) {
            //         $('#mahasiswa').append('<option value="' + data.listMahasiswa[i].nrp + '">' + data.listMahasiswa[i].nrp + ' - ' + data.listMahasiswa[i].name + '</option>');
            //     }

            // }

            // success: function(data) {
            //     $('#mahasiswa').empty();
            //     $('#mahasiswa').append('<label class="checkbox"><input type="checkbox" id="checkallmahasiswa"><span></span>Pilih semua mahasiswa</input></label>')
            //     for (let i = 0; i < data.listMahasiswa.length; i++) {
            //         $('#mahasiswa').append('<label class="checkbox"><input type="checkbox" class="checkmahasiswa" name="' + data.listMahasiswa[i].nrp + '"><span></span>' + data.listMahasiswa[i].nrp + ' - ' + data.listMahasiswa[i].name + '</input></label>');
            //     }
            // }

            success: function(data) {
                $('#mahasiswa').empty();
                $('#mahasiswa').append('<label class="checkbox"><input type="checkbox" id="checkallmahasiswa" onClick="toggle(this)" name="selectall"><span></span>Pilih semua mahasiswa</input></label>')
                for (let i = 0; i < data.listMahasiswa.length; i++) {
                    $('#mahasiswa').append('<label class="checkbox"><input type="checkbox" class="checkmahasiswa" name="mahasiswa[]" value="' +  data.listMahasiswa[i].nrp + '" onClick="uncheck()"><span></span>' + data.listMahasiswa[i].nrp + ' - ' + data.listMahasiswa[i].name + '</input></label>');
                }
            }
        })
    });

    $('#pelanggaran').change(function() {
        var opval = $(this).val();
        if (opval == "pelanggaranbaru") {
            $('#myModal').modal("show");
        }
    });

    // pilih semua mahasiswa, semua checkboxes di bawahnya langsung checked
    // $("#checkallmahasiswa").change(function() {
    //     if ($(this).is(":checked")) {
    //         $(".checkmahasiswa").each(function() {
    //             $(this).prop('checked', true);
    //         });
    //     } else {
    //         $(".checkmahasiswa").each(function() {
    //             $(this).prop('checked', false);
    //         });
    //     }
    // });

    function toggle(source) {
    checkboxes = document.getElementsByClassName('checkmahasiswa');
        for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.checked;
        }
    }

    function uncheck() {
        // $("#checkallmahasiswa").prop("checked", false);
        document.getElementById("checkallmahasiswa").checked = false;
    }



    // 1 checkboxes di bawah di uncheck, pilih semua mahasiswa ikut unchecked
    // $(".checkmahasiswa").change(function() {
    //     var allSelected = true;

    //     $(".checkmahasiswa").each(function() {
    //         if (!$(this).is(":checked")) {
    //             $("#checkallmahasiswa").prop('checked', false);
    //             allSelected = false;
    //         }
    //     });

    //     if (allSelected)
    //         $("#checkallmahasiswa").prop('checked', true);
    // });
</script>

<!--end::Page Scripts-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Catherine\Panitia\Web-Utama-MOB-FT-2023\resources\views/sfd/index.blade.php ENDPATH**/ ?>