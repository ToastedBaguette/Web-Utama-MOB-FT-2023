<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;

class ADController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('hanyapanitia');

        $tanggal = DB::table('presensis')->select('tanggal','idpresensi')->get();
        $list = array();

        $now = Carbon::now();
        $hariIni = date('Y-m-d',strtotime($now));
        $countAllMaharuPresensi =  DB::select(DB::raw("SELECT COUNT(nrp) as jumAll FROM presensis a INNER JOIN rekap_presensis q on a.idpresensi=q.idpresensi WHERE tanggal = '$hariIni'"));
        $countAllMaharuPresensiAWALYES =  DB::select(DB::raw("SELECT COUNT(nrp) as jumAllAwal FROM presensis a INNER JOIN rekap_presensis q on a.idpresensi=q.idpresensi WHERE tanggal = '$hariIni' and rekap_awal = 1"));
        $countAllMaharuPresensiAKHIRYES =  DB::select(DB::raw("SELECT COUNT(nrp) as jumAllAkhir FROM presensis a INNER JOIN rekap_presensis q on a.idpresensi=q.idpresensi WHERE tanggal = '$hariIni' and rekap_akhir = 1"));


        // return view('ad.index',['tanggal'=>$tanggal]);
        //[Cath] coba
        return view('ad.index2',['tanggal'=>$tanggal,
        'list'=>$list,
        'allmaharu'=>$countAllMaharuPresensi,
        'allawalyes'=>$countAllMaharuPresensiAWALYES,
        'allakhiryes'=>$countAllMaharuPresensiAKHIRYES]);
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

    public function tampil(Request $request){
        $this->authorize('hanyapanitia');

        // $now = Carbon::now();
        // $hariIni = date('Y-m-d',strtotime($now));

        $group = $request->get('group');
        $nomer = $request->get('nomer');
        $hari = $request->get('hari');

        $tanggal = DB::table('presensis')->select('tanggal','idpresensi')->get();

        $countAllMaharuPresensi =  DB::select(DB::raw("SELECT COUNT(nrp) as jumAll FROM presensis a INNER JOIN rekap_presensis q on a.idpresensi=q.idpresensi WHERE a.idpresensi = '$hari'"));
        $countAllMaharuPresensiAWALYES =  DB::select(DB::raw("SELECT COUNT(nrp) as jumAllAwal FROM presensis a INNER JOIN rekap_presensis q on a.idpresensi=q.idpresensi WHERE a.idpresensi = '$hari' and rekap_awal = 1"));
        $countAllMaharuPresensiAKHIRYES =  DB::select(DB::raw("SELECT COUNT(nrp) as jumAllAkhir FROM presensis a INNER JOIN rekap_presensis q on a.idpresensi=q.idpresensi WHERE a.idpresensi = '$hari' and rekap_akhir = 1"));
        $data = DB::table('rekap_presensis')
                ->join('presensis', 'rekap_presensis.idpresensi','=','presensis.idpresensi')
                ->join('users', 'rekap_presensis.nrp','=','users.nrp')
                ->where('users.'.$group,$nomer)
                ->where('presensis.idpresensi','=',$hari)->get();
        // dd($countAllMaharuPresensi);
        return view('ad.index2',[
            'group'=>$group,
            'nomer'=>$nomer,
            'hari'=>$hari,
            'tanggal'=>$tanggal,
            'list'=>$data,
            'allmaharu'=>$countAllMaharuPresensi,
            'allawalyes'=>$countAllMaharuPresensiAWALYES,
            'allakhiryes'=>$countAllMaharuPresensiAKHIRYES]);
    }

}
