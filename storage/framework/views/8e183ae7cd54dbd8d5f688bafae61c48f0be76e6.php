

<?php $__env->startSection('content'); ?>
		
		<section class="wrapper bg-light">
			<?php if(session('status')): ?>
                <div class="alert alert-success alert-icon alert-dismissible fade show" role="alert">
                    <i class="uil uil-check-circle"></i> <?php echo e(session('status')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
			<?php elseif(session('error')): ?>
                <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
                    <i class="uil uil-times-circle"></i> <?php echo e(session('error')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
			<?php endif; ?>
				<div class="card m-5 p-5">
						<div class="card-body">
								<h2>Profil</h2>
								<p>Klik Simpan untuk mengubah data</p>
								<form class="mt-5" method="post" action="<?php echo e(route('profileSimpan')); ?>">
								<?php echo csrf_field(); ?>
									<div class="form-group row">
										<label for="InputNama">Nama Lengkap</label>
										<input type="text" class="form-control" id="InputNama" name="nama" value="<?php echo e($data->name); ?>" required>
									</div>
									<div class="form-group row mt-2">
										<label for="InputSekolah">Asal Sekolah</label>
										<input type="text" class="form-control" id="InputSekolah" name="sekolah" value="<?php echo e($data->asal_sekolah); ?>" required>
									</div>
									<div class="form-group row mt-2">
										<label for="InputTelepon">No. Telp</label>
										<input type="number" class="form-control" id="InputTelp" name="no_telp" value="<?php echo e($data->no_hp); ?>" required>
									</div>
									<div class="form-group row mt-2">
										<label for="InputLine">ID Line</label>
										<input type="text" class="form-control" id="InputLine" name="line" value="<?php echo e($data->id_line); ?>" required>
									</div>
									<div class="form-group row mt-2">
										<label for="InputInstagram">Instagram</label>
										<input type="text" class="form-control" id="InputInstagram" name="instagram" value="<?php echo e($data->instagram); ?>" required>
									</div>
									<div class="form-group row mt-2">
										<label for="InputEmail">Email</label>
										<input type="text" class="form-control" id="InputEmail" name="email" value="<?php echo e($data->email); ?>" required>
									</div>
									<button type="submit" class="btn btn-primary rounded-pill mt-5">Simpan</button>
								</form>
						</div>
					</div>

		</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.maharu2023', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nicov\Documents\GitHub\Web-Utama-MOB-FT-2023\resources\views/profile/profile2022.blade.php ENDPATH**/ ?>