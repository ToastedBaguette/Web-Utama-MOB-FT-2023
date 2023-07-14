<div class="lqd-modal-head">
	<header class="fancy-heading text-center">
		<h2>Syarat dan Ketentuan</h2>
	</header>
</div><!-- /.lqd-modal-head -->

<div class="lqd-modal-content">

	<div class="row">
		<div class="col-md-12">

			<div class="row">
				<div class="lqd-column col-md-8 col-md-offset-2" id="contentSyarat">
					<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000" class="bi bi-x-lg lity-close" viewBox="0 0 16 16" data-lity-close>
                        <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                    </svg>
                    <ul>
                    @foreach($dataTampil[0] as $d)
					 @if($d != null)
                        <li style="color: darkgray">{{$d}}</li>
					 @endif
                    @endforeach
                    </ul>
			    </div><!-- /.col-md-8 col-md-offset-2 -->
			</div><!-- /.row -->

		</div><!-- /.col-md-12 -->

	</div><!-- /.row -->

</div><!-- /.lqd-modal-content -->