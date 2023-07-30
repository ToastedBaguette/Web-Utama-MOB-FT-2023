<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Presensi;
use Illuminate\Support\Facades\DB;

class ITDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alldata_mhr = DB::table('users')->where('status','maharu')->get();
        // $listPresensi = DB::table('presensis')->get();
        return view('itd.main',["maharu"=>$alldata_mhr]);
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
    public function listpanitia()
    {
        $alldata_mhr = DB::table('users')->where('status','panitia')->get();
        // $listPresensi = DB::table('presensis')->get();
        return view('itd.listpanit',["maharu"=>$alldata_mhr]);
    }
    public function listpresensi()
    {
        $data = DB::table('presensis')->get();
        // $listPresensi = DB::table('presensis')->get();
        return view('itd.listpresensi',["data"=>$data]);
    }
    public function resetpassworduser($nrp)
    {
        $hashed = Hash::make($nrp);
        $affected = DB::table('users')
            ->where('nrp', $nrp)
            ->update(['password' => $hashed, 'is_reset' => 0]);

        if ($affected) {
            return redirect()->route('itd.index')
            ->with('status','Password sudah di reset, ingatin untuk isi password baru!');
        }else{
            return redirect()->route('itd.index')
            ->with('error','Password gagal di reset!');
        }
    }
    public function resetpasswordpanit($nrp)
    {
        $hashed = Hash::make($nrp);
        $affected = DB::table('users')
            ->where('nrp', $nrp)
            ->update(['password' => $hashed, 'is_reset' => 0]);

        if ($affected) {
            return redirect()->route('itdlistpanita')
            ->with('status','Password sudah di reset, ingatin untuk isi password baru!');
        }else{
            return redirect()->route('itdlistpanita')
            ->with('error','Password gagal di reset!');
        }
    }
    public function ubahdata(Request $request)
    {
        $nrp = $request->get('nrp');
        $nama = $request->get('namalengkap');
        $noTelepon = $request->get('no_hp');
        $idLine = $request->get('id_line');
        $email = $request->get('email');
        $instagram = $request->get('instagram');
        $asalSekolah = $request->get('asal_sekolah');
        $alpha = $request->get('alpha');
        $beta = $request->get('beta');

        $affected = DB::table('users')
            ->where('nrp', $nrp)
            ->update(['name'=> $nama,'email' =>$email,'id_line' => $idLine,'no_hp'=> $noTelepon, 'instagram' => $instagram, 'asal_sekolah' => $asalSekolah,'alpha' => $alpha,'beta'=>$beta]);

        if ($affected) {
            return redirect('/itd')
            ->with('status','Data sudah diubah!');
        }else{
            return redirect('/itd')
            ->with('error','Data gagal diubah!');
        }

    }
    public function tambahpresensi(Request $request)
    {
        $tanggal = $request->tanggal;
        $waktu_awal_buka = $request->waktu_awal_buka;
        $waktu_awal_tutup = $request->waktu_awal_tutup;
        $waktu_akhir_buka = $request->waktu_akhir_buka;
        $waktu_akhir_tutup = $request->waktu_akhir_tutup;
        $insert = DB::table('presensis')->insertGetId([
            'tanggal' => $tanggal,
            'waktu_buka_awal' => $waktu_awal_buka,
            'waktu_tutup_awal' => $waktu_awal_tutup,
            'waktu_buka_akhir' => $waktu_akhir_buka,
            'waktu_tutup_akhir' => $waktu_akhir_tutup
        ]);

        // $presensi_id = DB::table('presensis')->latest()->idpresensi->get();

        $alldata = User::where('status', 'maharu')->get();
        foreach ($alldata as $key) {
            $insert_rekap = DB::table('rekap_presensis')->insert([
                'nrp' => $key->nrp,
                'idpresensi' => $insert,
                'rekap_awal' => 0,
                'rekap_akhir' => 0
            ]);
        }
        if ($insert) {
            return redirect()->route('itdlistpresensi')
            ->with('status','Presensi baru berhasil ditambahkan!');
        }else{
            return redirect()->route('itdlistpresensi')
            ->with('status','Presensi baru gagal ditambahkan!');
        }

    }

    public function setPassword(){
        $this->authorize('hanyaitd');
        $users = DB::table('users')->select('nrp')->get();
        foreach ($users as $u){
            $password = Hash::make($u->nrp);
            DB::table('users')->where('nrp', $u->nrp)->update(['password' => $password, 'is_reset'=> 0]);
        }

        return 'password sudah di update dengan nrp';
    }
}
