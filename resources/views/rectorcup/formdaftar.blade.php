<div class="lqd-modal-head">
	<header class="fancy-heading text-center">
		<h2>Daftar {{$dataTampil[0]->nama_cabang}}</h2>
	</header>
</div><!-- /.lqd-modal-head -->

<div class="lqd-modal-content">
	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000" class="bi bi-x-lg lity-close" viewBox="0 0 16 16" data-lity-close>
		<path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
	</svg>

	<div class="row">
		<div class="col-md-12">

			<div class="row">

				<div class="lqd-column col-md-12 px-4 pt-10 pb-10">

					<div class="row">

						<div class="lqd-column col-md-10 col-md-offset-1">

							<div class="contact-form contact-form-inputs-underlined contact-form-button-circle">
								<form action="{{route('daftar') }}" method='POST' enctype="multipart/form-data">
									<div class="row d-flex flex-wrap">
										<div class="lqd-column col-md-12 mb-10">
                                        @csrf
										    <header class="fancy-heading">
											    <h6>Prestasi yang pernah diperoleh</h6>
										    </header>
											<textarea cols="10" rows="6" name="prestasi" aria-required="true" aria-invalid="false" placeholder="Isi Prestasi Disini"></textarea>
										</div><!-- /.col-md-12 -->
										<div class="lqd-column col-md-12 mb-10">
											<header class="fancy-heading">
												<h6>Upload File Persyaratan (File dalam bentuk <b>.PDF</b>, maks. 2MB)</h6>
											</header>
											<input class="lh-25 mb-10" type="file" name="filesyarat" id="filesyarat" aria-invalid="false" accept="application/pdf">
											<input type="hidden" name='idrc' value="{{$dataTampil[0]->idrc}}">
                							<input type="hidden" name='nrp' value="{{Auth::user()->nrp}}">
										</div>
										<div class="lqd-column col-md-12 text-md-right">
											<input type="submit" value="Daftar" class="font-size-13 ltr-sp-1 font-weight-bold">
										</div><!-- /.col-md-6 -->
									</div><!-- /.row -->
								</form>
							</div><!-- /.contact-form -->

						</div><!-- /.col-md-10 col-md-offset-1 -->

					</div><!-- /.row -->

				</div><!-- /.lqd-column col-md-12 -->

			</div><!-- /.row -->

		</div><!-- /.col-md-12 -->

	</div><!-- /.row -->

</div><!-- /.lqd-modal-content -->

<script>
	//cek kalo file lebih dari 2MB
var uploadField = document.getElementById("filesyarat");

uploadField.onchange = function() {
    if(this.files[0].size > 2097152){
       alert("Ukuran file kamu kebesaran! Harus dibawah 2MB ya");
       this.value = "";
    };
};

</script>