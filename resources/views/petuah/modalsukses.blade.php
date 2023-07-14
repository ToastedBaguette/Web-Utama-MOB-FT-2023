<div class="lqd-modal-head">
	<header class="fancy-heading text-center">
		<h2>Jawaban Kamu Benar</h2>
	</header>
</div><!-- /.lqd-modal-head -->

<div class="lqd-modal-content">

	<div class="row">
		<div class="col-md-12">

			<div class="row">
				<div class="lqd-column col-md-8 col-md-offset-2 text-center" id="contentSyarat">
					<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000" class="bi bi-x-lg lity-close" viewBox="0 0 16 16" data-lity-close>
                        <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                    </svg>

                    @foreach($petuah as $j)
						<h5>Petuahmu adalah:</h5>
						<div class="lqd-column col-md-12 text-center">
							<div class="liquid-img-group-container">
								<div class="liquid-img-group-inner">
									<div class="liquid-img-group-single" data-reveal="true" data-reveal-options='{ "direction":"tb" }'>
										<figure>
											<img src="{{asset('img/petuah/'.$j->idpetuah.'.png')}}" alt="{{$j->nama_petuah}}" style="width:30%; height: 30%"/>
										</figure>
									</div><!-- /.liquid-img-group-single -->
								</div><!-- /.liquid-img-group-inner -->
							</div><!-- /.liquid-img-group-container -->
							
							<h3 class="mt-30">{{$j->nama_petuah}}</h3>
						</div><!-- /.col-md-4 -->
						<a href="{{$j->link_zoom}}" class="btn btn-md btn-solid round lh-15 wide px-2" style="border-radius: 2rem;" target="_blank">
						<span>
							<span class="btn-txt">Buka Zoom sekarang</span>
						</span>
						</a>
                    @endforeach
			    </div><!-- /.col-md-8 col-md-offset-2 -->
			</div><!-- /.row -->

		</div><!-- /.col-md-12 -->

	</div><!-- /.row -->

</div><!-- /.lqd-modal-content -->