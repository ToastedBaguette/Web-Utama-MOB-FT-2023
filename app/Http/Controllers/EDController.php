<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Rundown;

class EDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('hanyaed');

        $rundown = DB::table('rundowns')->orderBy('tanggal', 'asc')->orderBy('waktu_awal', 'asc')->get();
        $listp = DB::table('list_pengumuman')->get();
        return view('ed.index',["rd"=>$rundown, "pengumuman"=>$listp]);
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
        $this->authorize('hanyaed');

        $show =  DB::table('rundowns')->where('idrundown','=',$id)->get();
        return view('ed.ubahrd2',["rundown"=>$show]);
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
        $this->authorize('hanyaed');

        $data_update = Rundown::find($id);
        $data_update->tanggal = $request->get('date');
        $data_update->waktu_awal=$request->get('waktu_awal');
        $data_update->waktu_akhir=$request->get('waktu_akhir');
        $data_update->kegiatan=$request->get('kegiatan');
        $data_update->content=$request->get('content');
        $data_update->save();
        return redirect()->route('ed')
        ->with('status','Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $this->authorize('hanyaed');

            $rundown = Rundown::find($id);
            $rundown->delete();
            return redirect('/ed')->with('status','Data berhasil dihapus cuy');
        }
        catch(\PDOException $e){
            $msg="Gagal menghapus data. Kalo masih ga bisa hubungi ITD aja ya!";
            return redirect('/ed')->with('error',$msg);
        }
    }

    public function AddRundown(Request $request){
        $this->authorize('hanyaed');

        // dd($request);
        $tanggal = $request->date;
        $waktu_awal = $request->waktu_awal;
        $waktu_akhir = $request->waktu_akhir;
        $kegiatan = $request->kegiatan;
        $content = $request->content;
        $media = $request->media;

        $insert = DB::table('rundowns')->insert([
            'tanggal' => $tanggal,
            'waktu_awal' => $waktu_awal,
            'waktu_akhir' => $waktu_akhir,
            'kegiatan' => $kegiatan,
            'content' => $content,
            'media' => $media
        ]);

        if ($insert) {
            return redirect()->route('ed')
            ->with('status','Kegiatan baru berhasil ditambahkan!');
        }else{
            return redirect()->route('ed')
            ->with('status','Kegiatan baru gagal ditambahkan!');
        }

    }
    public function AddPengumuman(Request $request){
        $this->authorize('hanyaed');

        // dd($request);
        $isi = $request->editor1;
        $insert = DB::table('list_pengumuman')->insert([
            'isi' => $isi,

        ]);
        if ($insert) {
            return redirect()->route('pengumuman')
                ->with('status','Pengumuman baru berhasil ditambahkan!');
        }
    }

    public function ubahrd($id){
        $this->authorize('hanyaed');

        // $id = $request->id;
        $show =  DB::table('rundowns')->where('idrundown','=',$id)->get();
        return view('ed.ubahrd2',["rundown"=>$show]);

    }
    public function showrd(Request $request){
        $this->authorize('hanyaed');

        $id = $request->id;
        $show =  DB::table('rundowns')->where('idrundown','=',$id)->get();
        return view('ed.ubahrd2',["show"=>$show]);

    }

    public function deletePengumuman($id){
        $this->authorize('hanyaed');

        // dd($id);
        $affected = DB::table('list_pengumuman')->where('idpengumuman', '=', $id)->delete();
        return redirect('/pengumuman')->with('status','Pengumuman berhasil dihapus!');
    }
}
