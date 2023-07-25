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

// [Nico] Welcome MOB-FT 2023
Route::get('/', function () {
    return view('welcome2023');
})->name('welcome');

Route::middleware(['auth'])->group(function(){

    // Route::get('/perkenalanjurusan', 'HomeController@perkenalanjurusan');
    // Route::post('cekjawabanjurusan', 'HomeController@cekjawabanjurusan')->name('cekjawabanjurusan');

    Route::get('/homeadmin', function () {
        $reset = Auth::user()->is_reset;
        $now =  Carbon::now();
        $hariIni = date('Y-m-d',strtotime($now));

        if($reset==1){
            $listrundown = DB::table('rundowns')->where('tanggal','=',$hariIni)->orderBy('tanggal', 'asc')->orderBy('waktu_awal', 'asc')->get();

            return view('dashboardpanitia2023', compact('listrundown'));
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

    Route::resource('bph', 'BPHController')->middleware('can:hanyabph');

    Route::get('/ormawa', function () {
        return view('profile.ormawa');
    })->name('ormawa');
});

//route update password
route::get('/setPassword','ITDController@setPassword')->name('itd.setpassword');

Auth::routes();

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

