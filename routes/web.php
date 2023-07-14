<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/welcomemaharu', function () {
//     return view('welcomemaharu');
// });
// Route::get('/noven', function () {
//     return view('noven');
// });

Route::middleware(['auth'])->group(function(){

    // Route::get('/perkenalanjurusan', 'HomeController@perkenalanjurusan');
    // Route::post('cekjawabanjurusan', 'HomeController@cekjawabanjurusan')->name('cekjawabanjurusan');

    Route::get('/homeadmin', function () {
        $reset = Auth::user()->is_reset;
        $now =  Carbon::now();
        $hariIni = date('Y-m-d',strtotime($now));

        if($reset==1){
            $listrundown = DB::table('rundowns')->where('tanggal','=',$hariIni)->orderBy('tanggal', 'asc')->orderBy('waktu_awal', 'asc')->get();

            return view('home2', compact('listrundown'));
        }
        else{
            return redirect('/reset');
        }
    })->name('homeadmin');

    Route::get('/reset', function () {
        $reset = Auth::user()->is_reset;
        if($reset==1){
            return redirect()->route('start');
        }
        else{
            return view('resetpassword2022');
        }

    });
    Route::get('/start', 'HomeController@start')->name('start');

    //Route ED
    // Route::resource('ed', 'EDController');
    // Route::get('ed', 'EDController@index')->name('ed');
    // Route::get('/pengumuman', function () {
    //     $listp = DB::table('list_pengumuman')->get();
    //     return view('ed.pengumuman', compact('listp'));
    // })->name('pengumuman');
    // Route::get('/pengumuman/buat', function () {
    //     return view('ed.create');
    // });
    // Route::post('ed/tambahrundown', 'EDController@AddRundown')->name('tambahrundown');
    // Route::post('createPengumuman', 'EDController@AddPengumuman')->name('createPengumuman');
    // Route::get('ubahrd/{id}', 'EDController@ubahrd')->name('ubahrd');
    // Route::get('deletePengumuman/{id}', 'EDController@deletePengumuman')->name('deletePengumuman');
    // Route::post('showrd', 'EDController@showrd')->name('showrd');

    //Route ITD
    Route::resource('itd','ITDController')->middleware('can:hanyaitd');
    Route::get('itdpanitia', 'ITDController@listpanitia')->middleware('can:hanyaitd')->name('itdlistpanita');
    Route::get('itdpresensi', 'ITDController@listpresensi')->middleware('can:hanyaitd')->name('itdlistpresensi');
    Route::get('resetpwd/{nrp}', 'ITDController@resetpassworduser')->middleware('can:hanyaitd');
    Route::get('resetpwdpanit/{nrp}', 'ITDController@resetpasswordpanit')->middleware('can:hanyaitd');
    Route::post('ubahdata', 'ITDController@ubahdata')->name('ubahdata');
    Route::post('tambahpresensi', 'ITDController@tambahpresensi')->name('tambahpresensi');

    //Route Maping
    Route::resource('maping','MapingController')->middleware('can:hanyamaping');
    Route::get('alfa','MapingController@showAlfa')->middleware('can:hanyamaping')->name('showalfa');
    Route::get('beta','MapingController@showBeta')->middleware('can:hanyamaping')->name('showbeta');
    Route::get('daypresensi','MapingController@showDayPresensi')->middleware('can:hanyamaping');
    Route::get('anakkumelanggar','MapingController@rekappelanggaran')->middleware('can:hanyamaping')->name('anakkumelanggar');
    Route::get('anakkumelanggarbeta','MapingController@rekappelanggaranbeta')->middleware('can:hanyamaping')->name('anakkumelanggarbeta');
    Route::post('presensimaharu','MapingController@presensi')->name('presensimaharu');
    Route::post('listpresensi', 'MapingController@listpresensi')->name('listpresensi');
    Route::post('dayrecappresensi', 'MapingController@dayrecappresensi')->name('dayrecappresensi');
    //bikinan cath
    Route::post('presensi','MapingController@presensi')->name('presensimaping');
    Route::post('presensialfa','MapingController@presensialfa')->name('presensialfa2');
    Route::post('presensibeta','MapingController@presensibeta')->name('presensibeta2');

    //Route SFD
    Route::resource('sfd','SFDController')->middleware('can:hanyasfd');
    Route::post('kelompok', 'SFDController@listKelompok')->name('kelompok');
    Route::post('mahasiswa', 'SFDController@listMahasiswa')->name('mahasiswa');
    Route::post('tambahPelanggaran', 'SFDController@tambahPelanggaran')->name('tambahPelanggaran');
    Route::get('/rekap','SFDController@rekap')->middleware('can:hanyapanitia')->name('rekapPelanggaran');
    // Route::get('/listkendala','SFDController@kendala'); //baru untuk kendala
    // Route::get('ubahStatusKendala/{id}', 'SFDController@ubahStatusKendala')->name('ubahStatusKendala'); //baru untuk update status kendala
    // Route::get('kembalikanStatusKendala/{id}', 'SFDController@kembalikanStatusKendala')->name('kembalikanStatusKendala'); //baru untuk kembalikan status kendala
    Route::post('showRekap','SFDController@showRekap')->name('showRekap');
    Route::get('/masterData', 'SFDController@masterData')->middleware('can:hanyasfd')->name('masterData'); // route untuk akses halaman master data
    Route::post('hapus','SFDController@hapus')->name('hapusPelanggaran');
    Route::post('editpelanggaran','SFDController@editpelanggaran')->name('editPelanggaran');

    //upload bukti kendala mahasiswa
    // Route::get('/kendala','SFDController@formBukti');
    // Route::post('tambahBukti', 'SFDController@tambahBukti')->name('tambahBukti');


    //untuk aktivitas rector cup
    // Route::get('/rcactivity','ProfileController@rcactivity');
    // Route::post('tebaksandi', 'ProfileController@tebaksandi')->name('tebaksandi');

    //Route RC Mahasiswa
    // Route::resource('rectorcup','RectorCupController');
    // Route::post('showSyarat','RectorCupController@showSyarat')->name('persyaratan');
    // Route::post('showDaftar','RectorCupController@showDaftar')->name('daftarrc');
    // Route::post('daftarrc', 'RectorCupController@daftarrc')->name('daftar');

    //Route RC Koorcab
    // Route::get('/kandidat', 'RectorCupController@PendaftarRC');
    //Route RC Koorcab
    // Route::get('/kontingen', 'RectorCupController@Kontingen');
    // Route::get('/kontingen/{id}', 'RectorCupController@KontingenShowPendaftar');

    // Route::post('showPrestasi','RectorCupController@showPrestasi')->name('prestasi');
    // Route::post('editDetailRC','RectorCupController@editDetailRC')->name('editDetailRC');
    // Route::post('terimaRC','RectorCupController@terimaRC')->name('terimaRC');
    // Route::post('ubahdetail','RectorCupController@ubahdetail')->name('ubahdetail');
    // Route::post('tambahmedal','RectorCupController@tambahmedal')->name('tambahmedal');
    // Route::post('showtambahMedal','RectorCupController@showtambahMedal')->name('showtambahMedal');
    // Route::post('tolakRC','RectorCupController@tolakRC')->name('tolakRC');

    //Route untuk sharing petuah numpang homecontroller
    // Route::get('/petuah', 'HomeController@Petuah');
    // Route::post('cekjawabanpetuah', 'HomeController@cekjawabanpetuah')->name('cekjawabanpetuah');

    Route::get('/dashboard', 'HomeController@index')->name('home');
    Route::get('/set', 'UserController@setpassword')->name('setpass');
    Route::post('resetpassword', 'UserController@resetpassword')->name('resetpassword');

    //[Yobong] Route untuk presensi
    Route::get('/presensi','PresensiController@cekPresensi')->name('presensi');
    Route::post('/presensi/ok','PresensiController@presensi')->name('presensiOk');

    //[Yobong] Route untuk profile
    Route::get('/profile','ProfileController@profile')->name('profile');
    Route::post('/profile/simpan','ProfileController@profileSimpan')->name('profileSimpan');

    //[Yobong] Route untuk AD
    Route::resource('ad', 'ADController')->middleware('can:hanyapanitia');
    Route::post('/ads/listKelompok','ADController@listKelompok')->name('listKelompokAd');
    Route::get("/ads/tampil",'ADController@tampil')->name('tampilAd');


    // [Cath] ED -- unused
    // Route::post('ed/tambahrundown', 'EDController@AddRundown')->name('tambahrundown');

    // [Jose]
    // ^ Login
    // Route::get('/cobalogin', function () {
    //     return view('auth.login2');
    // });

    // ^ Reset Password
    // Route::get('/reset2', function () {
    //     return view('resetpassword2');
    // });

    // ^ Profile
    // Route::get('/profil2', function () {
    //     return view('profile.index2');
    // });

    // ^ Rector Cup
    // Route::get('/rectorcup2', function () {
    //     return view('rectorcup.indexcoba');
    // });

    // ^ Petuah
    // Route::get('/petuah2', function () {
    //     return view('petuah.index2');
    // });

    // ^ Coba Header
    // Route::get('/header', function () {
    //     return view('header');
    // });

    Route::resource('bph', 'BPHController')->middleware('can:hanyabph');

    Route::get('/ormawa', function () {
        return view('profile.ormawa');
    })->name('ormawa');
});

Route::get('/', function () {
    // $perunggu = DB::select(DB::raw("SELECT count(medali) as Jumlah FROM `rc_cabang` where medali='Perunggu'"));
    // $emas = DB::select(DB::raw("SELECT count(medali) as Jumlah FROM `rc_cabang` where medali='Emas'"));
    // $perak = DB::select(DB::raw("SELECT count(medali) as Jumlah FROM `rc_cabang` where medali='Perak'"));

    // $now =  Carbon::now();
    // $hariIni = date('Y-m-d',strtotime($now));
    // $getMenanghariIni = DB::table('rc_cabang')->whereNotNull('tanggal_juara')->get();

    // return view('welcome',["menangToday"=>$getMenanghariIni,"emas"=>$emas, "perunggu"=>$perunggu, "perak"=>$perak]);
    return view('welcome2022');
})->name('welcome');

//route update password
route::get('/setPassword','ITDController@setPassword')->name('itd.setpassword');

Auth::routes();

//[Rony] Route test
// Route::get('/resetpassword2022', function () {
//     return view('resetpassword2022');
// })->name('resetpassword2022');

// Route::get('/loginnew', function () {
//     return view('auth.login2022');
// })->name('loginnew');

// Route::get('/maharunew', function () {
//     return view('home2022');
// })->name('maharunew');

Route::get('/ubahprofilnew', function () {
    return view('profile.profile2022');
})->name('ubahprofilnew');

// Route::get('/ormawa', function () {
//     return view('profile.ormawa');
// })->name('ormawa');

//Route untuk chat
// Route::get('/ask', 'ChatController@index')->name('ask')->middleware('auth');;
// Route::get('/message/{id}', 'ChatController@getMessage')->name('message')->middleware('auth');;
// Route::post('message', 'ChatController@sendMessage')->middleware('auth');;

