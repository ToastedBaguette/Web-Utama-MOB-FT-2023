<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $now =  Carbon::now();
        // $hariIni = date('Y-m-d',strtotime($now));
        // $getpengumuman = DB::table('list_pengumuman')->get();
        // $getjadwalkegiatan = DB::table('rundowns')->where('tanggal','=',$hariIni)->orderBy('tanggal', 'asc')->orderBy('waktu_awal', 'asc')->get();
        // $alldata = DB::table('users')->where('nrp',Auth::user()->nrp)->get();
        // // $reset = DB::table('users')->select('is_reset')->where('nrp', Auth::user()->nrp)->get();
        // // dd($getjadwalkegiatan);

        // //cek presensi
        // $nrp = Auth::user()->nrp;
        // $jam_presensi = 'Tidak ada presensi saat ini';
        // $presensi = 'false';
        // $status = 'belum';
        // $awal='';
        // $akhir='';
        // $id_presensi =1;
        // $hariIni = date('Y-m-d',strtotime($now));
        // $date_presensi = DB::table('presensis')->where('tanggal',$hariIni)->get();

        // if (count($date_presensi)>0){
        //     $id_presensi = $date_presensi[0]->idpresensi;
        // }

        // $cek_presensi_awal=DB::table('presensis')->where('idpresensi', $id_presensi)->get();
        // foreach ($cek_presensi_awal as $pa){
        //     if(($now>=$pa->waktu_buka_awal) && ($now<= $pa->waktu_tutup_awal)){
        //         $jam_presensi= 'Presensi Awal';
        //         $presensi = 'true';
        //         $awal = $pa->waktu_buka_awal;
        //         $akhir = $pa->waktu_tutup_awal;

        //     }
        //     else if (($now>=$pa->waktu_buka_akhir) && ($now<= $pa->waktu_tutup_akhir)){
        //         $jam_presensi= 'Presensi Akhir';
        //         $presensi = 'true';
        //         $awal = $pa->waktu_buka_akhir;
        //         $akhir = $pa->waktu_tutup_akhir;
        //     }
        // }
        //     $rekap = DB::table('rekap_presensis')->where('idpresensi', $id_presensi)->where('nrp', $nrp)->get();
        //     foreach ($rekap as $r){
        //         if($jam_presensi == 'Presensi Awal'){
        //             if($r->rekap_awal == 1){
        //                 $status = 'sudah';
        //             }
        //         }
        //         else {
        //             if($r->rekap_akhir == 1){
        //                 $status = 'sudah';
        //             }
        //         }
        //     }

        // // return view('home',["data"=>$alldata]);
        // // return view('home',["data"=>$alldata]);
        $nrp = Auth::user()->nrp;
        $nama = Auth::user()->name;
        $now =  Carbon::now();
        $hariIni = date('Y-m-d',strtotime($now));
        $presensi = DB::table("rekap_presensis")
        ->join("presensis", "rekap_presensis.idpresensi", "=", "presensis.idpresensi")
        ->where("presensis.tanggal", "<=", $now)
        ->where("rekap_presensis.nrp", "=", $nrp)
        ->get();
        $pelanggaran = DB::table("user_pelanggarans")
        ->join("pelanggarans", "user_pelanggarans.idpelanggaran", "=", "pelanggarans.idpelanggaran")
        ->where("user_pelanggarans.users_nrp", "=", $nrp)
        ->get();
        if(Auth::user()->is_reset == 0){
            return view('resetpassword2022');
        }
        if(Auth::user()->status == 'panitia'){
            return redirect('/homeadmin');
        }
        return view('dashboardmaharu2023',compact('nama', 'presensi', 'pelanggaran'));
    }

    public function start(){
        $now =  Carbon::now();
        $hariIni = date('Y-m-d',strtotime($now));
        $getpengumuman = DB::table('list_pengumuman')->get();
        $getjadwalkegiatan = DB::table('rundowns')->where('tanggal','=',$hariIni)->orderBy('tanggal', 'asc')->orderBy('waktu_awal', 'asc')->get();
        $alldata = DB::table('users')->where('nrp',Auth::user()->nrp)->get();
        // $reset = DB::table('users')->select('is_reset')->where('nrp', Auth::user()->nrp)->get();
        // dd($getjadwalkegiatan);

        //cek presensi
        $nrp = Auth::user()->nrp;
        $jam_presensi = 'Tidak ada presensi saat ini';
        $presensi = 'false';
        $status = 'belum';
        $awal='';
        $akhir='';
        $id_presensi =1;
        $hariIni = date('Y-m-d',strtotime($now));
        $date_presensi = DB::table('presensis')->where('tanggal',$hariIni)->get();

        if (count($date_presensi)>0){
            $id_presensi = $date_presensi[0]->idpresensi;
        }

        $cek_presensi_awal=DB::table('presensis')->where('idpresensi', $id_presensi)->get();
        foreach ($cek_presensi_awal as $pa){
            if(($now>=$pa->waktu_buka_awal) && ($now<= date('Y-m-d H:i:s', strtotime('+30 minutes', strtotime($pa->waktu_tutup_awal))))){
                $jam_presensi= 'Presensi Awal';
                $presensi = 'true';
                $awal = $pa->waktu_buka_awal;
                $akhir = $pa->waktu_tutup_awal;

            }
            else if (($now>=$pa->waktu_buka_akhir) && ($now<= date('Y-m-d H:i:s', strtotime('+30 minutes', strtotime($pa->waktu_tutup_akhir))))){
                $jam_presensi= 'Presensi Akhir';
                $presensi = 'true';
                $awal = $pa->waktu_buka_akhir;
                $akhir = $pa->waktu_tutup_akhir;

            }

        }

            $rekap = DB::table('rekap_presensis')->where('idpresensi', $id_presensi)->where('nrp', $nrp)->get();
            foreach ($rekap as $r){
                if($jam_presensi == 'Presensi Awal'){
                    if($r->rekap_awal == 1){
                        $status = 'sudah';
                    }
                }
                else {
                    if($r->rekap_akhir == 1){
                        $status = 'sudah';
                    }
                }
            }

        if(Auth::user()->is_reset == 0){
            return view('resetpassword');
        }
        else
        {
            if (Auth::user()->status == 'panitia') {
                $this->authorize('hanyapanitia');
                return redirect()->route('homeadmin');
            } else {
                return view('home',["data"=>$alldata, "pengumuman"=>$getpengumuman, "jadwal"=>$getjadwalkegiatan,'presensi'=>$presensi, 'status'=>$status, 'jam_presensi'=>$jam_presensi, 'p_awal'=>$awal,'p_akhir'=>$akhir, 'now'=>$now]);
            }


        }

    }

    //[REXX!] sharing petuah index
    public function Petuah(){

        $usersAlpha = Auth::user()->alpha;
        $listPetuah = DB::select(DB::raw("SELECT * from petuah"));
        if($usersAlpha == 1 || $usersAlpha == 2){
            $nrp = Auth::user()->nrp;
            $split = substr($nrp, 0, 4);
            if($split == "1601"){
                $petuah = DB::select(DB::raw("select p.idpetuah, p.nama_petuah, p.clue, p.link_zoom, d.waktu_selesai from petuah p inner join daftar_petuah d on p.idpetuah = d.idpetuah inner join alpha a on a.idalpha = d.idalpha where a.idalpha = 1"));
            }
            else{
                $petuah = DB::select(DB::raw("select p.idpetuah, p.nama_petuah, p.clue, p.link_zoom, d.waktu_selesai from petuah p inner join daftar_petuah d on p.idpetuah = d.idpetuah inner join alpha a on a.idalpha = d.idalpha where a.idalpha = 2"));
            }
        }
        else{
            $petuah = DB::select(DB::raw("select p.idpetuah, p.nama_petuah, p.clue, p.link_zoom, d.waktu_selesai from petuah p inner join daftar_petuah d on p.idpetuah = d.idpetuah inner join alpha a on a.idalpha = d.idalpha where a.idalpha = $usersAlpha"));
        }
        return view('petuah.index', compact('listPetuah', 'petuah'));
    }

    public function cekjawabanpetuah(Request $request){

        $usersAlpha = Auth::user()->alpha;

        if($usersAlpha == 1 || $usersAlpha == 2){
            $nrp = Auth::user()->nrp;
            $split = substr($nrp, 0, 4);
            if($split == "1601"){
                $petuah = DB::select(DB::raw("select p.idpetuah, p.nama_petuah, p.clue, p.link_zoom, d.waktu_selesai from petuah p inner join daftar_petuah d on p.idpetuah = d.idpetuah inner join alpha a on a.idalpha = d.idalpha where a.idalpha = 1"));
            }
            else{
                $petuah = DB::select(DB::raw("select p.idpetuah, p.nama_petuah, p.clue, p.link_zoom, d.waktu_selesai from petuah p inner join daftar_petuah d on p.idpetuah = d.idpetuah inner join alpha a on a.idalpha = d.idalpha where a.idalpha = 2"));
            }
        }
        else{
            $petuah = DB::select(DB::raw("select p.idpetuah, p.nama_petuah, p.clue, p.link_zoom, d.waktu_selesai from petuah p inner join daftar_petuah d on p.idpetuah = d.idpetuah inner join alpha a on a.idalpha = d.idalpha where a.idalpha = $usersAlpha"));
        }

        $now = date('H:i');
        $waktu_selesai = date('H:i', strtotime($petuah[0]->waktu_selesai));
        $jawaban = strtolower($petuah[0]->nama_petuah);
        if($now <= $waktu_selesai){
            $jawabanUser = strtolower($request->get("jawaban"));

            if($jawaban == $jawabanUser){
                return response()->json(array(
                    'status'=>'oke',
                    'msg'=>view('petuah.modalsukses',compact('petuah'))->render()
                ),200);
            }
            else{
                return response()->json(array(
                    'status'=>'oke',
                    'msg'=>view('petuah.modalsalah')->render()
                ),200);
            }
        }
        else{
            return response()->json(array(
                'status'=>'oke',
                'msg'=>view('petuah.modalhabiswaktu',compact('petuah'))->render()
            ),200);
        }

    }
    public function cekjawabanjurusan(Request $request){
        $nrp = Auth::user()->nrp;
        $splitnrp = substr($nrp, 0, 4);
        $jawaban = DB::table('perkenalan_jurusan')->where('jurusan','=',$splitnrp)->get();
        $jawabandb = strtolower($jawaban[0]->jawaban);

        // dd($jawabandb);
        $jawabanUser = strtolower($request->get("jawaban"));

            if($jawabandb == $jawabanUser){
                return response()->json(array(
                    'status'=>'BENER',
                    'msg'=>view('perkenalan_jurusan.modalsukses',compact('jawaban'))->render()
                ),200);
            }
            else{
                return response()->json(array(
                    'status'=>'SALAH',
                    'msg'=>view('perkenalan_jurusan.modalsalah')->render()
                ),200);
            }

    }

    public function perkenalanjurusan(){
        $nrp = Auth::user()->nrp;
        $splitnrp = substr($nrp, 0, 4);
        $data = DB::table('perkenalan_jurusan')->where('jurusan','=',$splitnrp)->get();

        return view('perkenalan_jurusan.perkenalanjurusan', compact('data'));
    }

}
