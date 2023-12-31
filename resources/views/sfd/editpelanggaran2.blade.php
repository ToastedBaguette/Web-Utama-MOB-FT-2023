@extends('layouts.admin')
@section('style')

@endsection
@section('navsfd')
<li class="menu-item " aria-haspopup="true">
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
<li class="menu-item" aria-haspopup="true">
    <a href="{{ url('sfd') }}" class="menu-link">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">Input Pelanggaran</span>
    </a>
</li>
<li class="menu-item menu-item-active" aria-haspopup="true">
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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Ubah Detail Pelanggaran</h2>
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
            @foreach($dataUbah as $d)
            <div class="card card-custom shadow-none">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">{{$d->users_nrp}} - {{$d->name}}</h3>
                    </div>
                    <div class="card-toolbar">
                        <a href="{{route('rekapPelanggaran')}}" class="btn btn-secondary mr-2">Back</a>
                        <form method="POST" action="{{url('sfd/'.$d->idrekap)}}" id="formhapus">
                            @csrf
                            @method("DELETE")
                            <button type="button" class="btn btn-danger mr-2" id="btnhapus" value="{{$d->idrekap}}">Hapus Data</button>
                        </form>
                    </div>
                    <!-- <a href="{{route('rekapPelanggaran')}}" class="btn btn-secondary">Back</a> -->
                    <!-- <form method="POST" action="{{url('sfd/'.$d->idrekap)}}" id="formhapus">
                        @csrf
                        @method("DELETE")
                        <button type="button" class="btn btn-danger" style="float:right;margin-top:7.5%;" id="btnhapus" value="{{$d->idrekap}}">Hapus Data</button>
                    </form> -->
                </div>
                <div class="card-body">
                    <form method="POST" action="{{url('sfd/'.$d->idrekap)}}">
                        @csrf
                        @method("PUT")
                        <label for="">NRP</label>
                        <input type="text" class="form-control bg-gray-100" id="nrp" name="nrp" value="{{$d->users_nrp}}" readonly>
                        <br>
                        <label for="">Nama</label>
                        <input type="text" class="form-control bg-gray-100" id="nama" name="nama" value="{{$d->name}}" readonly>
                        <br>

                        <label>Pilih Pelanggaran</label>
                        <select class="form-control" id='pelanggaran' name='pelanggaran' required>
                            <!-- style="width:100%;" -->
                            @foreach($pelanggaran as $p)
                            @if($p->idpelanggaran == $d->idpelanggaran)
                            <option value="{{$p->idpelanggaran}}" selected>{{$p->jenis_pelanggaran}} - {{$p->nama_pelanggaran}}</option>
                            @else
                            <option value="{{$p->idpelanggaran}}">{{$p->jenis_pelanggaran}} - {{$p->nama_pelanggaran}}</option>
                            @endif
                            @endforeach
                        </select>
                        <br>

                        <label>Tanggal Pelanggaran</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$d->tanggal}}" required>
                        <br>

                        <label>Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan">{{$d->keterangan}}</textarea>
                        <br>
                        <button type="submit" class="btn btn-success mt-4" style="width: 100%;">Ubah</button>
                    </form>
                    @endforeach
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