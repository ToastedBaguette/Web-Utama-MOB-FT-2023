<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Datetime;
use Carbon\Carbon;
use App\RekapPresensi;
use Symfony\Component\Console\Logger\ConsoleLogger;

class MapingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('hanyamaping');

        if (Auth::user()->divisi == 'MAPING') {
            $beta = Auth::user()->beta;
            $alpha = Auth::user()->alpha;

            //daftar kelompok beta
            $kelBeta = DB::table('users')
                ->where('status', '=', 'maharu')
                ->where('beta', '=', $beta)
                ->get();

            //daftar kelompok alpha
            $kelAlpha = DB::table('users')
                ->where('status', '=', 'maharu')
                ->where('alpha', '=', $alpha)
                ->get();

            $presensibuka = DB::table('presensis')->get();

        }

        return view('maping.index', ["alpha" => $kelAlpha, "beta" => $kelBeta, "presensi" => $presensibuka]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function listpresensi(Request $request)
    {
        $this->authorize('hanyapanitia');
        $tanggal = $request->tanggal;

        $listWaktu = DB::table('presensis')
            ->where('tanggal', '=', $tanggal)
            ->get();

        return response()->json([
            'listWaktu' => $listWaktu
        ]);
    }

    public function showDayPresensi()
    {
        $this->authorize('hanyapanitia');
        $listWaktu = DB::table('presensis')->get();
        $listData = array();
        // return view('maping.daypresensi', ["presensi" => $listWaktu]);
        // [Cath] coba
        // dd($listWaktu);
        return view('maping.daypresensi2', ["presensi" => $listWaktu, 'listData' =>$listData, 'user'=>Auth::user()]);
    }
    public function dayrecappresensi(Request $request)
    {
        $this->authorize('hanyapanitia');
        $kelompok = $request->kelompok;
        $tanggal = $request->tanggal;
        $groupby = $request->groupby;
        //ambil isi halaman balik
        $listWaktu = DB::table('presensis')->get();
        // echo $kelompok;
        // echo $tanggal;
        // $listData = DB::table('rekap_presensis')
        // ->join('presensis', 'rekap_presensis.idpresensi', '=', 'presensis.idpresensi')
        // ->join('users', 'users.nrp', '=', 'rekap_presensis.nrp')
        // ->select('nrp, rekap_awal, rekap_akhir, name, tanggal')
        // ->where('users.alpha','=',$kelompok)
        // ->where('presensis.tanggal','=',$tanggal)
        // ->get();
        if($groupby=="alpha"){
            $listData = DB::select(DB::raw("SELECT w.nrp as nrp, rekap_awal, rekap_akhir, name, tanggal FROM `rekap_presensis` a inner join presensis q ON a.idpresensi=q.idpresensi INNER JOIN users w ON a.nrp=w.nrp WHERE w.alpha='$kelompok' and q.tanggal='$tanggal'"));
        }
        else if($groupby=="beta"){
            $listData = DB::select(DB::raw("SELECT w.nrp as nrp, rekap_awal, rekap_akhir, name, tanggal FROM `rekap_presensis` a inner join presensis q ON a.idpresensi=q.idpresensi INNER JOIN users w ON a.nrp=w.nrp WHERE w.beta='$kelompok' and q.tanggal='$tanggal'"));
        }

         // dd($listData);
        return view('maping.daypresensi2', ["presensi" => $listWaktu,"kelompok" => $kelompok,"groupby" => $groupby,"tanggal" => $tanggal, 'listData' =>$listData]);
    }

    public function presensi(Request $request)
    {
        $this->authorize('hanyapanitia');
        $arrMhs = $request->get('mahasiswa');
        print_r($arrMhs);
        $waktuPresensi = $request->get('waktu_presensi');
        $now =  Carbon::now();
        // $nowtime = date('H:i:s',strtotime($now));
        $idPresensi = DB::table('presensis')->where('tanggal', date('Y-m-d',strtotime($now)))->get()[0]->idpresensi;
        // $pelanggaran = -1;
        // $menitTelat = -1;
        // $waktuAkhir = $now;
        // if ($waktuPresensi == "waktu_awal") {
        //     $waktuAkhir = DB::table('presensis')->where('idpresensi', $idPresensi)->get()[0]->waktu_tutup_awal;
        // }
        // if($nowtime > $waktuAkhir){
        //     $menitTelat = (strtotime($nowtime) - strtotime($waktuAkhir)) / 60;
        //     if($menitTelat > 30){
        //         $pelanggaran = 2;
        //     }
        //     elseif($menitTelat > 20){
        //         $pelanggaran = 1;
        //     }
        //     elseif($menitTelat > 10){
        //         $pelanggaran = 0;
        //     }
        // }
        // $id = DB::table('rekap_presensis')
        // ->join('presensis', 'rekap_presensis.idpresensi', '=', 'presensis.idpresensi')->select('tanggal')->groupBy('tanggal')->get();
        foreach ($arrMhs as $a) {
            if ($waktuPresensi == "waktu_awal") {
                $affected = DB::table('rekap_presensis')
                    ->where('nrp', $a)
                    ->where('idpresensi', $idPresensi)
                    ->update([
                        'waktu_awal' => $now,
                        'rekap_awal' => 1
                    ]);
            } else {
                $affected = DB::table('rekap_presensis')
                    ->where('nrp', $a)
                    ->where('idpresensi', $idPresensi)
                    ->update([
                        'waktu_akhir' => $now,
                        'rekap_akhir' => 1
                    ]);
            }
            // if($pelanggaran > -1){
            //     DB::table('user_pelanggarans')->insert(['idpelanggaran'=>$pelanggaran, 'users_nrp'=>$a, 'tanggal'=>date('Y-m-d',strtotime($now))]);
            // }
        }
        $return = '';
        if($request->get('asal') == 'alfa')
        {
            $return = 'showalfa';
        }
        else{
            $return = 'showbeta';
        }
        // echo $id[0]->tanggal;
        return redirect()->route($return)->with('status', 'Berhasil manambahkan presensi');
    }

    public function presensiAlfa(Request $request)
    {
        $this->authorize('hanyapanitia');
        $arrMhs = $request->get('mahasiswa');
        $now =  Carbon::now();
        // $id = DB::table('rekap_presensis')
        // ->join('presensis', 'rekap_presensis.idpresensi', '=', 'presensis.idpresensi')->select('tanggal')->groupBy('tanggal')->get();
        foreach ($arrMhs as $a) {
            if ($request->get('waktu_presensi') == "waktu_awal") {
                $affected = DB::table('rekap_presensis')
                    ->where('nrp', $a)
                    ->update([
                        'waktu_awal' => $now,
                        'rekap_awal' => 1
                    ]);
            } else {
                $affected = DB::table('rekap_presensis')
                    ->where('nrp', $a)
                    ->update([
                        'waktu_akhir' => $now,
                        'rekap_akhir' => 1
                    ]);
            }
        }
        // echo $id[0]->tanggal;
        return redirect()->route('showalfa')->with('status', 'Berhasil manambahkan presensi');
        // return response()->view('maping.alfa2', compact('//nama variabel yang dikirim'))->with('status', 'Absen berhasil ditambahkan');
    }

    public function presensiBeta(Request $request)
    {
        $arrMhs = $request->get('mahasiswa');
        $now =  Carbon::now();
        // $id = DB::table('rekap_presensis')
        // ->join('presensis', 'rekap_presensis.idpresensi', '=', 'presensis.idpresensi')->select('tanggal')->groupBy('tanggal')->get();
        foreach ($arrMhs as $a) {
            if ($request->get('waktu_presensi') == "waktu_awal") {
                $affected = DB::table('rekap_presensis')
                    ->where('nrp', $a)
                    ->update([
                        'waktu_awal' => $now,
                        'rekap_awal' => 1
                    ]);
            } else {
                $affected = DB::table('rekap_presensis')
                    ->where('nrp', $a)
                    ->update([
                        'waktu_akhir' => $now,
                        'rekap_akhir' => 1
                    ]);
            }
        }
        // echo $id[0]->tanggal;
        return redirect()->route('showbeta')->with('status', 'Berhasil manambahkan presensi');
        // return response()->view('maping.beta2')->with('status', 'Absen berhasil ditambahkan');
    }

    public function showAlfa()
    {
        $this->authorize('hanyamaping');

        if (Auth::user()->divisi == 'MAPING') {
            $presensi ='saat ini belum ada presensi yang sedang dibuka';
            $alpha = Auth::user()->alpha;
            //daftar kelompok alpha
            $kelAlpha = DB::table('users')
                ->where('status', '=', 'maharu')
                ->where('alpha', '=', $alpha)
                ->get();
            $now =  Carbon::now();
            $tanggal = date('Y-m-d',strtotime($now));
            $presensibuka = DB::table('presensis')
            ->where('tanggal', '=', $tanggal)
            ->get();
            // dd($presensibuka);
            if(count($presensibuka)> 0){
                $presensi = $presensibuka[0]->tanggal;
            }
        }

        return view('maping.alfa2', ["alpha" => $kelAlpha, "presensi" => $presensi]);
    }

    // [Cath] cuma coba aja
    // public function showAlfa2()
    // {
    //     $this->authorize('hanyamaping');

    //     if (Auth::user()->divisi == 'MAPING') {
    //         $alpha = Auth::user()->alpha;

    //         $kelAlpha = DB::table('users')
    //             ->where('status', '=', 'maharu')
    //             ->where('alpha', '=', $alpha)
    //             ->get();

    //         $presensibuka = DB::table('presensis')->get();
    //     }

    //     return view('maping.alfa2', ["alpha" => $kelAlpha, "presensi" => $presensibuka]);
    // }

    public function showBeta()
    {
        $this->authorize('hanyamaping');

        if (Auth::user()->divisi == 'MAPING') {
            $presensi ='saat ini belum ada presensi yang sedang dibuka';
            $beta = Auth::user()->beta;
            //daftar kelompok alpha
            $kelBeta = DB::table('users')
                ->where('status', '=', 'maharu')
                ->where('beta', '=', $beta)
                ->get();
            $now =  Carbon::now();
            $tanggal = date('Y-m-d',strtotime($now));
            $presensibuka = DB::table('presensis')
                ->where('tanggal', '=', $tanggal)
                ->get();
            if(count($presensibuka)> 0){
                $presensi = $presensibuka[0]->tanggal;
            }
        }
        return view('maping.beta2', ["beta" => $kelBeta, "presensi" => $presensi]);
    }
    public function rekappelanggaran()
    {
        $this->authorize('hanyamaping');
        $alfa = Auth::user()->alpha;
        $hari1 = DB::select(DB::raw("SELECT u.nrp, u.name, u.alpha, u.beta, p.nama_pelanggaran,p.idpelanggaran, p.jenis_pelanggaran, r.idrekap, r.tanggal, r.keterangan from users u INNER JOIN user_pelanggarans r on u.nrp = r.users_nrp inner join pelanggarans p on p.idpelanggaran = r.idpelanggaran where tanggal ='2022-08-22' and u.alpha='$alfa' "));
        $hari2 = DB::select(DB::raw("SELECT u.nrp, u.name, u.alpha, u.beta, p.nama_pelanggaran,p.idpelanggaran, p.jenis_pelanggaran, r.idrekap,r.tanggal, r.keterangan from users u INNER JOIN user_pelanggarans r on u.nrp = r.users_nrp inner join pelanggarans p on p.idpelanggaran = r.idpelanggaran where tanggal = '2022-08-23' and u.alpha='$alfa' "));
        $hari3 = DB::select(DB::raw("SELECT u.nrp, u.name, u.alpha, u.beta, p.nama_pelanggaran,p.idpelanggaran, p.jenis_pelanggaran, r.idrekap,r.tanggal, r.keterangan from users u INNER JOIN user_pelanggarans r on u.nrp = r.users_nrp inner join pelanggarans p on p.idpelanggaran = r.idpelanggaran where tanggal = '2022-08-24' and u.alpha='$alfa' "));

        return view('maping.rekap_pelanggaran', compact('hari1','hari2','hari3'));
    }
    public function rekappelanggaranbeta()
    {
        $this->authorize('hanyamaping');
        $beta = Auth::user()->beta;
        $hari1 = DB::select(DB::raw("SELECT u.nrp, u.name, u.alpha, u.beta, p.nama_pelanggaran,p.idpelanggaran, p.jenis_pelanggaran, r.idrekap, r.tanggal, r.keterangan from users u INNER JOIN user_pelanggarans r on u.nrp = r.users_nrp inner join pelanggarans p on p.idpelanggaran = r.idpelanggaran where tanggal ='2022-08-22' and  u.beta='$beta' "));
        $hari2 = DB::select(DB::raw("SELECT u.nrp, u.name, u.alpha, u.beta, p.nama_pelanggaran,p.idpelanggaran, p.jenis_pelanggaran, r.idrekap,r.tanggal, r.keterangan from users u INNER JOIN user_pelanggarans r on u.nrp = r.users_nrp inner join pelanggarans p on p.idpelanggaran = r.idpelanggaran where tanggal = '2022-08-23' and  u.beta='$beta' "));
        $hari3 = DB::select(DB::raw("SELECT u.nrp, u.name, u.alpha, u.beta, p.nama_pelanggaran,p.idpelanggaran, p.jenis_pelanggaran, r.idrekap,r.tanggal, r.keterangan from users u INNER JOIN user_pelanggarans r on u.nrp = r.users_nrp inner join pelanggarans p on p.idpelanggaran = r.idpelanggaran where tanggal = '2022-08-24' and  u.beta='$beta' "));

        return view('maping.rekap_pelanggaran_beta', compact('hari1','hari2','hari3'));
    }
    //   [Cath] cuma nyoba
    // public function showBeta2()
    // {
    //     $this->authorize('hanyamaping');

    //     if (Auth::user()->divisi == 'MAPING') {
    //         $beta = Auth::user()->beta;
    //         $kelBeta = DB::table('users')
    //             ->where('status', '=', 'maharu')
    //             ->where('beta', '=', $beta)
    //             ->get();

    //         $presensibuka = DB::table('presensis')->get();
    //     }

    //     return view('maping.beta2', ["beta" => $kelBeta, "presensi" => $presensibuka]);
    // }
}
