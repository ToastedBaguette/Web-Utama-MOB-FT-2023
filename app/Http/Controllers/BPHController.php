<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use DB;

class BPHController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $this->authorize('hanyabph');

        $dataMaharu = DB::table('users')
        ->where('status', '=', 'maharu')
        ->get();

        $now = Carbon::now();
        $hariIni = date('Y-m-d',strtotime($now));
        $countAllMaharuPresensi =  DB::select(DB::raw("SELECT COUNT(nrp) as jumAll FROM presensis a INNER JOIN rekap_presensis q on a.idpresensi=q.idpresensi WHERE tanggal = '$hariIni'"));
        $countAllMaharuPresensiAWALYES =  DB::select(DB::raw("SELECT COUNT(nrp) as jumAllAwal FROM presensis a INNER JOIN rekap_presensis q on a.idpresensi=q.idpresensi WHERE tanggal = '$hariIni' and rekap_awal = 1"));
        $countAllMaharuPresensiAKHIRYES =  DB::select(DB::raw("SELECT COUNT(nrp) as jumAllAkhir FROM presensis a INNER JOIN rekap_presensis q on a.idpresensi=q.idpresensi WHERE tanggal = '$hariIni' and rekap_akhir = 1"));
        // dd($countAllMaharuPresensi);

        $tanggal = DB::table('presensis')->select('tanggal','idpresensi')->get();
        $countAllMaharuPelanggaran =  DB::select(DB::raw("SELECT COUNT(idrekap) as jumlahPelanggaran FROM user_pelanggarans WHERE tanggal = '$hariIni'"));

        return view('bph.index',['allmaharu'=>$countAllMaharuPresensi,
        'allawalyes'=>$countAllMaharuPresensiAWALYES,
        'allakhiryes'=>$countAllMaharuPresensiAKHIRYES,
        'presensi'=>$tanggal,
        'pelanggaran'=>$countAllMaharuPelanggaran,
        'now'=>$now]);


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
}
