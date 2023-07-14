<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PresensiController extends Controller
{
    //[Yobong] funtion pake ngecek sudah jam presensi dan sudah presensi atau belum
    public function cekPresensi(){
        $nrp = Auth::user()->nrp;
        $now =  Carbon::now();
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
            if(($now>=$pa->waktu_buka_awal) && ($now<= date('Y-m-d H:i:s', strtotime('+60 minutes', strtotime($pa->waktu_tutup_awal))))){
                $jam_presensi= 'Presensi Awal';
                $presensi = 'true';
                $awal = $pa->waktu_buka_awal;
                $akhir = $pa->waktu_tutup_awal;
            }
            else if (($now>=$pa->waktu_buka_akhir) && ($now<= date('Y-m-d H:i:s', strtotime('+60 minutes', strtotime($pa->waktu_tutup_akhir))))){
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

        return view('presensi.index',['presensi'=>$presensi, 'status'=>$status, 'jam_presensi'=>$jam_presensi, 'awal'=>$awal,'akhir'=>$akhir, 'now'=>$now]);
    }

     //[Yobong] funtion untuk melakukan presensi
    public function presensi(Request $request){
        $jam = strtolower($request->get('presensi'));
        // $jam = strtolower("Presensi Awal");
        $status = explode(" ", $jam);
        $nrp = Auth::user()->nrp;
        // $nrp = 160419045;
        $now = Carbon::now();
        $waktu = 'waktu_'.$status[1];
        $rekap = 'rekap_'.$status[1];
        $hariIni = date('Y-m-d',strtotime($now));
        $id_presensi = DB::table('presensis')->where('tanggal','=',$hariIni)->get();
        
        if($status[1] == 'awal'){
            $waktu_tutup = $id_presensi[0]->waktu_tutup_awal;
        }
        else{
            $waktu_tutup = $id_presensi[0]->waktu_tutup_akhir;
        }
        //ngecek presensi
        $cek_presensi = DB::table('rekap_presensis')->where('idpresensi', $id_presensi[0]->idpresensi)->where('nrp', $nrp)->get();
        foreach ($cek_presensi as $r){
            if($status[1] == 'awal'){
                if($r->rekap_awal == 1){
                    $status_presensi = 'sudah';
                }else{
                    $status_presensi = 'belum';
                }
            }
            else {
                if($r->rekap_akhir == 1){
                    $status_presensi = 'sudah';
                }else{
                    $status_presensi = 'belum';
                }
            }
        }
        if($status_presensi == 'belum'){
            // $pelanggaran_ringan = date('Y-m-d H:i:s', strtotime('+15 minutes', strtotime($waktu_tutup)));
            // $pelanggaran_sedang = date('Y-m-d H:i:s', strtotime('+60 minutes', strtotime($waktu_tutup)));
            if($now<= $waktu_tutup){
                $update = DB::table('rekap_presensis')
                ->where('idpresensi', $id_presensi[0]->idpresensi)
                ->where('nrp', $nrp)
                ->update([$waktu => $now, $rekap => 1]);
                

                return response()->json(array(
                    'status'=>'berhasil',
                    'msg'=> "Berhasil Melakukan Presensi"
                ),200);
            } 
            // else if(($now>$waktu_tutup) && ($now<= $pelanggaran_ringan)){
            //     $jam_telat = date('H:i:s',strtotime(Carbon::now()));
            //     $keterangan = "terlambat melakukan absensi ".$status[1].". Absensi dilakukan pada jam ". $jam_telat;
            //     $update = DB::table('rekap_presensis')
            //     ->where('idpresensi', $id_presensi[0]->idpresensi)
            //     ->where('nrp', $nrp)
            //     ->update([$waktu => $now, $rekap => 1]);

            //     $insert = DB::table('user_pelanggarans')
            //     ->insert(['idpelanggaran'=>4,'users_nrp'=>$nrp,'tanggal'=>$hariIni,'keterangan'=>$keterangan]);

            //     return response()->json(array(
            //         'status'=>'berhasil',
            //         'msg'=> "Berhasil Melakukan Presensi, <br> Tetapi Kamu Telat sehingga Mendapatkan Pelanggaran.<br>Besok Jangan Telat Lagi"
            //     ),200);
            // } else if(($now>$pelanggaran_ringan) && ($now<= $pelanggaran_sedang)){
            //     $jam_telat = date('H:i:s',strtotime(Carbon::now()));
            //     $keterangan = "terlambat melakukan absensi ".$status[1].". Absensi dilakukan pada jam ". $jam_telat;
            //     $update = DB::table('rekap_presensis')
            //     ->where('idpresensi', $id_presensi[0]->idpresensi)
            //     ->where('nrp', $nrp)
            //     ->update([$waktu => $now, $rekap => 1]);

            //     $insert = DB::table('user_pelanggarans')
            //     ->insert(['idpelanggaran'=>5,'users_nrp'=>$nrp,'tanggal'=>$hariIni,'keterangan'=>$keterangan]);

            //     return response()->json(array(
            //         'status'=>'berhasil',
            //         'msg'=> "Berhasil Melakukan Presensi, <br> Tetapi Kamu Telat sehingga Mendapatkan Pelanggaran.<br>Besok Jangan Telat Lagi"
            //     ),200);
            // }
            else{
                return response()->json(array(
                    'status'=>'gagal',
                    'msg'=> "Gagal melakukan presensi. Waktu presensi sudah berakhir. <br> silahkan refresh halaman untuk mendapatkan informasi terbaru"
                ),200);
            }
        }
        else{
            return response()->json(array(
                'status'=>'Sudah Absensi',
                'msg'=> "Kamu Sudah Mekakukan Absensi, Silahkan Melakukan Absensi di Jam Berikutnya"
            ),200);
        }
     }
}
