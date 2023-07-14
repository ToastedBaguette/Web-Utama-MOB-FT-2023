@extends('layouts.admin')
@section('style')

@endsection

@section('naved')
<li class="menu-item " aria-haspopup="true">
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
<li class="menu-item menu-item-active" aria-haspopup="true">
    <a href="/create" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Buat Pengumuman</span>
    </a>
</li>
@endsection


@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="margin-top:-1%">
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="">
                <!-- d-flex align-items-center mr-1 -->
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Ubah Detail Acara</h2>

                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>

    </div>

    <!--end::Subheader-->
    <!--begin::Entry-->

    <!-- awalnya -->
    <!-- <div class="d-flex flex-column-fluid"> -->
    <div class="">
        <!--begin::Container-->
        <div class="container">

            <!-- begin: sweetalert -->
            <div class="">
                @if (session('status'))
                <div class="alert alert-custom alert-light-success fade show mb-5" role="alert" style="width:100%; Max-height:5em;">
                    <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
                    <div class="alert-text" style="font-size:125%;">{{session('status')}}</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>
                @elseif (session('error'))
                <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert" style="width:100%; Max-height:5em;">
                    <div class="alert-icon"><i class="flaticon2-warning "></i></div>
                    <div class="alert-text" style="font-size:125%;">{{session('error')}}</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>
                @endif

            </div>
            <!-- end: sweetalert -->

            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">

                        <h3 class="card-label">{{$rundown[0]->kegiatan}}</h3>

                    </div>
                    <form method="POST" action="{{url('ed/'.$rundown[0]->idrundown)}}" id="formhapus">
                        @csrf
                        @method("DELETE")
                        <button type="button" class="btn btn-danger" style="float:right;margin-top:7.5%;" id="btnhapus" value="{{$rundown[0]->idrundown}}">Hapus Acara</button>
                    </form>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('ed/'.$rundown[0]->idrundown) }}">
                        @csrf
                        @method("PUT")
                        <label for="">Tanggal</label>
                        <input type="date" class="form-control bg-gray-100" id="date" name="date" value="{{$rundown[0]->tanggal}}" required>
                        <br>
                        <div style="display:grid; grid-template-columns: auto auto;grid-column-gap:20px;">
                            <div>
                                <label>Waktu Awal</label>
                                <input type="time" class="form-control" id="waktu_awal" name="waktu_awal" value="{{ \Carbon\Carbon::createFromFormat('H:i:s', $rundown[0]->waktu_awal)->format('h:i') }}" required>
                            </div>
                            <div>
                                <label>Waktu Akhir</label>
                                <input type="time" class="form-control" id="waktu_akhir" name="waktu_akhir" value="{{ \Carbon\Carbon::createFromFormat('H:i:s', $rundown[0]->waktu_akhir)->format('h:i') }}" required>
                            </div>
                        </div>
                        <br>
                        <label>Kegiatan</label>
                        <input type="text" class="form-control" id="kegiatan" name="kegiatan" value="{{$rundown[0]->kegiatan}}" required>

                        <br>

                        <label>Konten</label>
                        <input type="text" class="form-control" id="content" name="content" value="{{$rundown[0]->content}}">
                        <br>

                        <button type="submit" class="btn btn-success mt-4" style="width: 100%;">Ubah</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--end::Card-->

    <!--end::Container-->
</div>
<!--end::Entry-->


@endsection
@section('script')
<script>
    $("#btnhapus").click(function(e) {
        Swal.fire({
            title: "Yakin mau ngapus?",
            text: "Karena yang bisa dikembalikan cuma kenangan",
            icon: "warning",
            confirmButtonText: "Hapus",
            showCancelButton: true,
            cancelButtonText: "Batal",
            confirmButtonColor: '#1BC5BD',
            reverseButtons: true
        }).then(function(result) {
            if (result.value) {
                document.getElementById("formhapus").submit();

            }
        });
    });
</script>
<!--end::Page Scripts-->
@endsection