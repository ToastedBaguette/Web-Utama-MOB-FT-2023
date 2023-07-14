<div class="lqd-modal-head">
	<header class="fancy-heading text-center">
		<h2>Unggah bukti tidak melanggar</h2>
	</header>
</div><!-- /.lqd-modal-head -->

<div class="lqd-modal-content">
	<div class="row">
		<div class="col-md-12">

			<div class="row">

				<div class="lqd-column col-md-12 px-4 pt-10 pb-10">

					<div class="row">

						<div class="lqd-column col-md-10 col-md-offset-1">

							<div class="contact-form contact-form-inputs-underlined contact-form-button-circle">
								<form action="{{route('tambahBukti')}}" method='POST' enctype="multipart/form-data" >
                                @csrf
									<div class="row d-flex flex-wrap">
										<div class="lqd-column col-md-12 mb-10">
											<header class="fancy-heading">
												<h6>Unggah Bukti (File <b>gambar</b>, maks. 2MB)</h6>
											</header>
											<input class="lh-25 mb-10" type="file" name="filebukti" id="filebukti" aria-invalid="false" accept="image/*" required>
											<input type="hidden" name='idrekap' value="{{$idrekap}}">
										</div>
										<div class="lqd-column col-md-12 text-md-right">
											<input type="submit" value="Unggah" class="font-size-13 ltr-sp-1 font-weight-bold">
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
var uploadField = document.getElementById("filebukti");

uploadField.onchange = function() {
    if(this.files[0].size > 2097152){
       alert("Ukuran file kamu kebesaran! Harus dibawah 2MB ya");
       this.value = "";
    };
};

</script>