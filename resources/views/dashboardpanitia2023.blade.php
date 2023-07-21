@extends('layouts.admin')
@section('navmaping')
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Beranda</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Kelompok</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/alfa" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Delta</span>
    </a>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/beta" class="menu-link">
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
    <a href="/daypresensi" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Presensi</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Pelanggaran</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/anakkumelanggar" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Pelanggaran Anakku di Delta</span>
    </a>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/anakkumelanggarbeta" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Pelanggaran Anakku di Echo</span>
    </a>
</li>
@endsection

@section('navsfd')
<li class="menu-item menu-item-active" aria-haspopup="true">
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
<li class="menu-item " aria-haspopup="true">
    <a href="{{ url('sfd') }}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Input Pelanggaran</span>
    </a>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="{{ url('rekap') }}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Rekap Pelanggaran</span>
    </a>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="{{ url('masterData') }}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Master Data Pelanggaran</span>
    </a>
</li>
<!-- <li class="menu-item " aria-haspopup="true">
    <a href="{{ url('listkendala') }}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Bukti Kendala</span>
    </a>
</li> -->

@endsection

@section('naved')
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
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
    <a href="/ed" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Rundown</span>
    </a>
</li>
<li class="menu-section ">
    <h4 class="menu-text">Pengumuman</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="/pengumuman" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Pengumuman</span>
    </a>
</li>
@endsection
@section('navad')
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Presensi</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="/ad" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Rekap Presensi</span>
    </a>
</li>

@endsection
@section('navkoorcab')
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section ">
    <h4 class="menu-text">Rector Cup</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="/kandidat" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Kandidat</span>
    </a>
</li>
@endsection
@section('navkontingen')
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section ">
    <h4 class="menu-text">Rector Cup</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/kontingen" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Cabang</span>
    </a>
</li>
@endsection
@section('navbph')
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Dashboard</span>
    </a>
</li>
<li class="menu-section ">
    <h4 class="menu-text">Informasi</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item" aria-haspopup="true">
    <a href="/bph" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Lihat Informasi</span>
    </a>
</li>
@endsection

@section('navitd')
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/homeadmin" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text ">Beranda</span>
    </a>
</li>
<li class="menu-section">
    <h4 class="menu-text">Admin</h4>
    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="/itd" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Maharu</span>
    </a>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="{{url('itdpanitia')}}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Daftar Panitia</span>
    </a>
</li>
<li class="menu-item " aria-haspopup="true">
    <a href="{{url('itdpresensi')}}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Presensi</span>
    </a>
</li>
@endsection

<!--begin::Content-->
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid mt-5">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-xxl-8 order-2 order-xxl-1">
                    <!--begin::Mixed Widget 1-->
                    <div class="card card-custom gutter-b shadow-none">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-5">
                                <h2 class="d-flex align-items-center text-dark font-weight-bold secondary-font">
                                    Hai,&nbsp<span class="text-primary secondary-font">{{Auth::user()->divisi}}</span>
                                </h2>
                            </div>
                            <div class="d-flex align-items-center mb-6">
                                <h1 class="font-weight-bolder text-primary display-3 secondary-font">
                                    {{Auth::user()->name}}</h1>
                            </div>
                            <div>
                                <h5 class="text-dark font-weight-normal pb-2"><small
                                        class="text-muted">NRP&nbsp</small>{{Auth::user()->nrp}}</h5>
                                <h5 class="text-dark font-weight-normal pb-2"><small
                                        class="text-muted">Email&nbsp</small>{{Auth::user()->email}}</h5>
                                @if(Auth::user()->divisi =='MAPING')
                                <h5 class="text-dark font-weight-normal pb-2"><small
                                        class="text-muted">Kelompok&nbsp</small>Delta {{Auth::user()->alpha}}</h5>
                                <h5 class="text-dark font-weight-normal pb-2"><small
                                        class="text-muted">Kelompok&nbsp</small>Echo {{Auth::user()->beta}}</h5>
                                @endif
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Body-->
                    </div>
                </div>

                <!-- <div class="card card-custom bg-danger card-stretch gutter-b"> -->
                <!--begin::Header-->
                <!-- <div class="card-body border-0 py-5">
                        <h1 class="font-weight-bolder text-white" style="margin-bottom: 0.5vw;">{{Auth::user()->name}}</h1>
                        <h2 class="text-white" style="font-weight: normal; font-size: 100%;">{{Auth::user()->nrp}}</h2>
                        <h2 class="text-white" style="font-weight: normal; font-size: 100%;">{{Auth::user()->email}}</h2>
                        @if(Auth::user()->divisi =='MAPING')
                        <h2 class="text-white" style="font-weight: normal; font-size: 100%;">Kelompok Delta : {{Auth::user()->alpha}}</h2>
                        <h2 class="text-white" style="font-weight: normal; font-size: 100%;">Kelompok Echo : {{Auth::user()->beta}}</h2>
                        @endif
                    </div>
                </div> -->
                <!--end::Mixed Widget 1-->

                <!-- <div class="col-xxl-8 order-2 order-xxl-1"> -->
                <!--begin::List Widget 9-->
                <!-- <div class="card card-custom card-stretch gutter-b"> -->
                <!--begin::Header-->
                <!-- <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="font-weight-bolder text-dark">Rundown</span>

                                @if(count($listrundown)>0)
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">  <?php //echo date('d F, Y', strtotime($listrundown[0]->tanggal)); 
                                                                                                ?></span>
                                @endif
                            </h3>
                        </div> -->
                <!--end::Header-->
                <!--begin::Body-->
                <!-- <div class="card-body pt-4">
                            <div class="timeline timeline-5">

                                <div class="timeline-items">
                                    @foreach($listrundown as $r)
                                    <?php //$rd_awal = date('H:i', strtotime($r->waktu_awal));
                                    //$rd_akhir = date('H:i', strtotime($r->waktu_akhir));
                                    //if (date("H:i") > $rd_akhir) { ?> -->
                <!--begin::Item-->
                <!-- <div class="timeline-item"> -->
                <!--begin::Icon-->
                <!-- <div class="timeline-media bg-light-success">
                                                <span class="svg-icon svg-icon-success svg-icon-2x"> -->
                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Check.svg-->
                <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) " />
                                                        </g>
                                                    </svg> -->
                <!--end::Svg Icon-->
                <!-- </span>
                                            </div> -->
                <!--end::Icon-->

                <!--begin::Info-->
                <!-- <div class="timeline-desc timeline-desc-light-success">
                                                <span class="font-weight-bolder text-success"><?php //echo $rd_awal . "-" . $rd_akhir . " WIB"; ?></span>
                                                <p class="font-weight-normal text-dark-50 pt-1 pb-2">
                                                    {{$r->kegiatan}}
                                                </p>
                                            </div> -->
                <!--end::Info-->
                <!-- </div> -->
                <!--end::Item-->
                <?php //} else { ?>
                <!--begin::Item-->
                <!-- <div class="timeline-item"> -->
                <!--begin::Icon-->
                <!-- <div class="timeline-media bg-light-primary">
                                                <span class="svg-icon svg-icon-primary svg-icon-2x"> -->
                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Waiting.svg-->
                <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        </g>
                                                    </svg> -->
                <!--end::Svg Icon-->
                <!-- </span>
                                            </div> -->
                <!--end::Icon-->

                <!--begin::Info-->
                <!-- <div class="timeline-desc timeline-desc-light-primary">
                                                <span class="font-weight-bolder text-primary"><?php //echo $rd_awal . "-" . $rd_akhir . " WIB"; ?></span>
                                                <p class="font-weight-normal text-dark-50 pb-2">
                                                    {{$r->kegiatan}}
                                                </p>
                                            </div> -->
                <!--end::Info-->
                <!-- </div> -->
                <!--end::Item-->
                <?php //} ?>
                <!-- @endforeach
                                </div>
                            </div>
                        </div> -->
                <!--end: Card Body-->
                <!-- </div> -->
                <!--end: List Widget 9-->

                <!-- </div> -->
            </div>

            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection
<!--end::Content-->