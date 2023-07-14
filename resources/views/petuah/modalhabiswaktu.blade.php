<div class="lqd-modal-head">
	<header class="fancy-heading text-center">
		<h2>Yahh sayang banget waktu menjawabnya sudah habis</h2>
	</header>
</div><!-- /.lqd-modal-head -->

<div class="lqd-modal-content">

	<div class="row">
		<div class="col-md-12">

			<div class="row">
				<div class="lqd-column col-md-8 col-md-offset-2 text-center" id="contentSyarat">

                    <h5>Tapi jangan berkecil hati... kamu masih mendapatkan link zoomnya kok</h5>
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