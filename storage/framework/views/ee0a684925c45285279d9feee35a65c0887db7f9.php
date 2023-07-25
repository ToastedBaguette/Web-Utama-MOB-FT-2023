
<?php $__env->startSection('content'); ?>

<section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center py-5 bg-map"
	data-image-src="<?php echo e(url('./assets/img/map.png')); ?>">
	<div class="container text-center">
		<div class="row gx-lg-8 gx-xl-12 gy-10 gy-xl-0 align-items-center">
			<div class="col-lg-7 order-lg-2">
				<figure><img class="img-fluid" src="<?php echo e(url('./assets/mob-assets/happy student.svg')); ?>"
						srcset="<?php echo e(url('./assets/mob-assets/happy student.svg')); ?> 2x" alt="" /></figure>
			</div>
			<div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
				<h2 class="display-5 mb-5 mx-md-10 mx-lg-0 text-center"><span class="typer text-dark secondary-font"
						data-loop="false" data-delay="100" data-words="Hi <?php echo e($nama); ?>"></span><span
						class="cursor text-dark" data-owner="typer"></span></h2>
			</div>
		</div>
	</div>
</section>
<section id="jadwal" class="wrapper bg-light">
	<div class="container py-10">
		<div class="row text-center">
			<div class="col-xl-10 mx-auto">
				<h3 class="display-4 mb-10 px-xxl-15 secondary-font">Jadwal MOB FT 2023</h3>
			</div>
			<!-- /column -->
		</div>
		<!-- /.row -->
		<div class="row gy-6">
			<div class="col-md-6 col-lg-4">
				<a class="card shadow-lg lift h-100">
					<div class="card-body p-5 d-flex flex-row">
						<div>
							<span class="avatar bg-footer text-white w-11 h-11 fs-20 me-4">17</span>
						</div>
						<div>
							<span class="badge bg-footer text-white rounded py-1 mb-2">Agustus 2023</span>
							<h4 class="mb-1">MOB FT Hari Pertama</h4>
						</div>
					</div>
				</a>
			</div>
			<!--/column -->
			<div class="col-md-6 col-lg-4">
				<a class="card shadow-lg lift h-100">
					<div class="card-body p-5 d-flex flex-row">
						<div>
							<span class="avatar bg-footer text-white w-11 h-11 fs-20 me-4">18</span>
						</div>
						<div>
							<span class="badge bg-footer text-white rounded py-1 mb-2">Agustus 2023</span>
							<h4 class="mb-1">MOB FT Hari Kedua</h4>
						</div>
					</div>
				</a>
			</div>
			<!--/column -->
			<div class="col-md-6 col-lg-4">
				<a class="card shadow-lg lift h-100">
					<div class="card-body p-5 d-flex flex-row">
						<div>
							<span class="avatar bg-footer text-white w-11 h-11 fs-20 me-4">19</span>
						</div>
						<div>
							<span class="badge bg-footer text-white rounded py-1 mb-2">Agustus 2023</span>
							<h4 class="mb-1">MOB FT Hari Ketiga</h4>
						</div>
					</div>
				</a>
			</div>
			<!--/column -->
		</div>
		<!--/.row -->
</section>


<section class="wrapper bg-light"">
			<div class=" card shadow m-lg-5 p-lg-5 bg-footer">
	<div class="card-body">
		<div class="row text-center">
			<div class="col-xl-10 mx-auto">
				<h3 class="display-4 mb-5 px-xxl-15 text-white secondary-font">Absensi</h3>
			</div>
			<!-- /column -->
		</div>
		<?php if(count($presensi) == 0): ?>
		<div class="row text-center">
			<div class="col-xl-10 mx-auto">
				<h3 class="display-4 mb-5 px-xxl-15 fs-25 text-white secondary-font">Sabar ya, belum ada absensi yang
					dibuka</h3>
			</div>
		</div>
		<?php else: ?>
		<div class="table-separate">
			<table class="table p-lg-5">
				<thead class="text-center text-white">
					<tr>
						<th scope="col" style="color: white">Tanggal</th>
						<th scope="col" style="color: white">Absensi Awal</th>
						<th scope="col" style="color: white">Absensi Akhir</th>
					</tr>
				</thead>
				<tbody class="text-center text-white">
					<?php $__currentLoopData = $presensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<th scope="row" style="color: white"><?php echo e($p->tanggal); ?></th>
						<td>
							<?php if($p->rekap_awal == 1): ?>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
								class="bi bi-check-lg" viewBox="0 0 16 16"
								style="background-color: #198754; padding: 2px; border-radius:0.2rem">
								<path
									d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z">
								</path>
							</svg>
							<?php else: ?>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
								class="bi bi-x-lg" viewBox="0 0 16 16"
								style="background-color: #dc3545; padding: 2px; border-radius:0.2rem">
								<path
									d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z">
								</path>
							</svg>
							<?php endif; ?>
						</td>
						<td>
							<?php if($p->rekap_akhir == 1): ?>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
								class="bi bi-check-lg" viewBox="0 0 16 16"
								style="background-color: #198754; padding: 2px; border-radius:0.2rem">
								<path
									d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z">
								</path>
							</svg>
							<?php else: ?>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
								class="bi bi-x-lg" viewBox="0 0 16 16"
								style="background-color: #dc3545; padding: 2px; border-radius:0.2rem">
								<path
									d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z">
								</path>
							</svg>
							<?php endif; ?>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
		<?php endif; ?>
	</div>
	</div>
</section>


<section class="wrapper bg-light">
	<div class="card shadow m-lg-5 p-lg-5 ">
		<div class="card-body">
			<div class="row text-center">
				<div class="col-xl-10 mx-auto">
					<h3 class="display-4 mb-10 px-xxl-15 secondary-font">Pelanggaran</h3>
				</div>
				<!-- /column -->
			</div>
			<?php if(count($pelanggaran) == 0): ?>
			<div class="row text-center">
				<div class="col-xl-10 mx-auto">
					<h3 class="display-4 mb-10 px-xxl-15 fs-25 secondary-font">Good Job, masih belum punya pelanggaran
						nih</h3>
				</div>
			</div>
			<?php else: ?>
			<div class="table-responsive p-5">
				<table class="table p-lg-5">
					<thead class="text-center">
						<tr>
							<th scope="col-3">Jenis</th>
							<th scope="col-3">Tanggal</th>
							<th scope="col-6">Keterangan</th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php $__currentLoopData = $pelanggaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<th scope="row"><?php echo e($p->jenis_pelanggaran); ?></th>
							<td><?php echo e($p->tanggal); ?></td>
							<td><?php echo e($p->nama_pelanggaran); ?></td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.maharu2023', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nicov\Documents\GitHub\Web-Utama-MOB-FT-2023\resources\views/dashboardmaharu2023.blade.php ENDPATH**/ ?>