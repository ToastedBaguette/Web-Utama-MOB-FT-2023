@extends('layouts.maharu2022')
@section('content')
		{{-- OPENING --}}
		<section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center py-5 bg-map" data-image-src="{{ url('./assets/img/map.png')}}">
			{{-- <div class="container py-0 py-md-18">
				<div class="row">
					<div class="col-lg-6 col-xl-5 mx-auto">
						<h2 class="display-5 mb-5 mx-md-10 mx-lg-0"><span class="typer text-dark" data-loop="false" data-delay="100" data-words="Hi {{$nama}}"></span><span class="cursor text-dark" data-owner="typer"></span></h2>
					</div>
					<!-- /column -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container --> --}}

			<div class="container text-center">
				<div class="row gx-lg-8 gx-xl-12 gy-10 gy-xl-0 align-items-center">
					<div class="col-lg-7 order-lg-2" >
						<figure><img class="img-fluid" src="{{ url('./assets/mob-assets/happy student.svg') }}" srcset="{{ url('./assets/mob-assets/happy student.svg') }} 2x" alt=""/></figure>
					</div>
					<div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
						<h2 class="display-5 mb-5 mx-md-10 mx-lg-0 text-center"><span class="typer text-dark" data-loop="false" data-delay="100" data-words="Hi {{$nama}}"></span><span class="cursor text-dark" data-owner="typer"></span></h2>
					</div>
				</div>
			</div>
		</section>

		<section id="jadwal" class="wrapper bg-light">
      <div class="container py-10">
        <div class="row text-center">
          <div class="col-xl-10 mx-auto">
            <h3 class="display-4 mb-10 px-xxl-15">Jadwal MOB FT 2022</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gy-6">
          <div class="col-md-6 col-lg-4">
            <a class="card shadow-lg lift h-100">
              <div class="card-body p-5 d-flex flex-row">
                <div>
                  <span class="avatar bg-purple text-white w-11 h-11 fs-20 me-4">22</span>
                </div>
                <div>
                  <span class="badge bg-pale-purple text-purple rounded py-1 mb-2">Agustus 2022</span>
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
                  <span class="avatar bg-blue text-white w-11 h-11 fs-20 me-4">23</span>
                </div>
                <div>
                  <span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Agustus 2022</span>
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
                  <span class="avatar bg-aqua text-white w-11 h-11 fs-20 me-4">24</span>
                </div>
                <div>
                  <span class="badge bg-pale-aqua text-aqua rounded py-1 mb-2">Agustus 2022</span>
                  <h4 class="mb-1">MOB FT Hari Ketiga</h4>
                </div>
              </div>
            </a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
    </section>

		{{-- ABSENSI --}}
		<section class="wrapper bg-light">
			<div class="card shadow m-lg-5 p-lg-5 bg-primary">
				<div class="card-body">
					<div class="row text-center">
						<div class="col-xl-10 mx-auto">
							<h3 class="display-4 mb-5 px-xxl-15 text-white">Absensi</h3>
						</div>
						<!-- /column -->
					</div>
					@if(count($presensi) == 0)
					<div class="row text-center">
						<div class="col-xl-10 mx-auto">
							<h3 class="display-4 mb-5 px-xxl-15 fs-25 text-white">Sabar ya, belum ada absensi yang dibuka</h3>
						</div>
					</div>
					@else
					<div class="table-separate">
						<table class="table p-lg-5">
							<thead class="text-center text-white">
								<tr>
									<th scope="col">Tanggal</th>
									<th scope="col">Absensi Awal</th>
									<th scope="col">Absensi Akhir</th>
								</tr>
							</thead>
							<tbody class="text-center text-white">
								@foreach($presensi as $p)
								<tr >
									<th scope="row">{{$p->tanggal}}</th>
									<td>
										@if($p->rekap_awal == 1)
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-check-lg" viewBox="0 0 16 16" style="background-color: #198754; padding: 2px; border-radius:0.2rem">
											<path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"></path>
										</svg>
										@else
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-x-lg" viewBox="0 0 16 16" style="background-color: #dc3545; padding: 2px; border-radius:0.2rem">
											<path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"></path>
										</svg>
										@endif
									</td>
									<td>
										@if($p->rekap_akhir == 1)
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-check-lg" viewBox="0 0 16 16" style="background-color: #198754; padding: 2px; border-radius:0.2rem">
											<path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"></path>
										</svg>
										@else
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-x-lg" viewBox="0 0 16 16" style="background-color: #dc3545; padding: 2px; border-radius:0.2rem">
											<path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"></path>
										</svg>
										@endif
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					@endif
				</div>
			</div>
		</section>

		{{-- PELANGGARAN --}}
		<section class="wrapper bg-light">
			<div class="card shadow m-lg-5 p-lg-5 ">
				<div class="card-body">
					<div class="row text-center">
						<div class="col-xl-10 mx-auto">
							<h3 class="display-4 mb-10 px-xxl-15">Pelanggaran</h3>
						</div>
						<!-- /column -->
					</div>
					@if(count($pelanggaran) == 0)
					<div class="row text-center">
						<div class="col-xl-10 mx-auto">
							<h3 class="display-4 mb-10 px-xxl-15 fs-25">Good Job, masih belum punya pelanggaran nih</h3>
						</div>
					</div>
					@else
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
								@foreach($pelanggaran as $p)
								<tr>
									<th scope="row">{{$p->jenis_pelanggaran}}</th>
									<td>{{$p->tanggal}}</td>
									<td>{{$p->nama_pelanggaran}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					@endif
				</div>
			</div>


		</section>
@endsection