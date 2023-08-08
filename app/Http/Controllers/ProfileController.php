<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //[yobong] untuk ambil isi profile
    public function profile(){
        $nrp = Auth::user()->nrp;
        $data = DB::table('users')->where('nrp', $nrp)->get()[0];

        //ambil data absensi
        //$absensi = DB::table('rekap_presensis')->join('presensis','rekap_presensis.idpresensi','=', 'presensis.idpresensi')->where('nrp',$nrp)->get();

        //ambil data pelanggaran
        //$pelanggaran = DB::table('user_pelanggarans')->join('pelanggarans','user_pelanggarans.idpelanggaran','=','pelanggarans.idpelanggaran')->where('users_nrp',$nrp)->get();
        //return view('profile.index',['maharu'=>$data,'absensi'=>$absensi, 'pelanggaran'=>$pelanggaran]);
        return view('profile.profile2023', compact("data"));
    }

    //[yobong] untuk ngubah profile peserta
    public function profileSimpan(Request $request){
        $nrp = Auth::user()->nrp;
        $nama = $request->get('nama');
        $no_telp = $request->get('no_telp');
        $line = $request->get('line');
        $email = $request->get('email');
        $sekolah = $request->get('sekolah');
        $instagram = $request->get('instagram');

        $update=DB::table('users')
            ->where('nrp', $nrp)
            ->update(['name'=>$nama,
                    'no_hp'=>$no_telp,
                    'id_line'=>$line,
                    'email'=>$email,
                    'asal_sekolah'=>$sekolah,
                    'instagram'=>$instagram]);
        if($update > 0){
            return redirect('profile')->with('status', 'Data behasil diubah');
        }
        return redirect('profile')->with('error', 'Data gagal diubah');
    }

    //aktivitas rektor cup
    public function rcactivity(){
        $list = DB::select("SELECT * FROM `aktifitas_rc`");
        return view('rc_activity', compact('list'));
    }

    public function tebaksandi(Request $request){
        $beta = Auth::user()->beta;
        $list = DB::select("SELECT * FROM `aktifitas_rc` where beta =  $beta");
        if($list[0]->status_tebak == 0){

            $nama = strtolower($request->get('katasandi'));

            if(strtolower($list[0]->kata_sandi) == $nama){
                //update database
                $update=DB::table('aktifitas_rc')
                ->where('beta', $beta)
                ->update(['status_tebak'=>1]);
                $status = "Jawaban anda benar!";
                return redirect('/rcactivity')->with('status', $status);
            }
            else{
                $status = "Jawaban anda salah!";
                return redirect('/rcactivity')->with('error', $status);
            }
            

        }
        else{
            $status = "Kelompok anda sudah menjawab";
            return redirect('/rcactivity')->with('error', $status);
        }
    }
}
