<?php

namespace App\Http\Controllers;

use App\Pelanggaran;
use App\RekapPelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Datetime;
use Carbon\Carbon;

class SFDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // PUN10!!!!!!!!!!!!!!!
        $this->authorize('hanyasfd');
        $ringan = DB::select("SELECT * FROM `pelanggarans` where jenis_pelanggaran = 'ringan'");
        $sedang = DB::select("SELECT * FROM `pelanggarans` where jenis_pelanggaran = 'sedang'");
        $berat = DB::select("SELECT * FROM `pelanggarans` where jenis_pelanggaran = 'berat'");
        return view('sfd.index', compact('ringan','sedang','berat'));
        //[Cath] comment sementara
        // return view('sfd.index2', compact('ringan','sedang','berat'));
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
        $this->authorize('hanyasfd');
        $arrMhs = $request->get('mahasiswa');
        $berhasil = 0;
        $gagal = 0;
        if(!is_array($arrMhs))
        {
            return redirect()->route('sfd.index')->with('error', 'Tidak ada mahasiswa yang dipilih!');
        }
        foreach ($arrMhs as $a){
            $pelanggaran = new RekapPelanggaran();
            $pelanggaran->users_nrp= $a;
            $pelanggaran->idpelanggaran = $request->get('pelanggaran');
            $pelanggaran->tanggal = $request->get('tanggal');
            $pelanggaran->keterangan = $request->get('keterangan');

            $count = DB::table('user_pelanggarans')
            ->where('idpelanggaran', $pelanggaran->idpelanggaran)
            ->where('users_nrp', $a)
            ->where('tanggal', $pelanggaran->tanggal)
            ->count();

            if($count == 0){
                $pelanggaran->save();
                $berhasil++;
            }
            else{
                $gagal++;
            }
        }
        $status = '';
        $keterangan = '';
        if($berhasil > 0){
            $status = 'status';
            if($gagal > 0){
                $keterangan = $berhasil . ' data pelanggaran berhasil ditambahkan, ' . $gagal . ' maharu sudah memiliki pelanggaran yang sama pada tanggal tersebut!';
            }
            else{
                $keterangan = $berhasil . ' data pelanggaran berhasil ditambahkan!';
            }
        }
        else{
            $status = 'error';
            $keterangan = 'Maharu sudah memiliki pelanggaran yang sama pada tanggal tersebut!';
        }

        return redirect()->route('sfd.index')
        ->with($status, $keterangan); //[Cath]
        // return redirect()->route('sfd.index2')
        // ->with('status','Data berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggaran $pelanggaran, $id)
    {
        $dataTampil = DB::select(DB::raw("select r.*, p.nama_pelanggaran from user_pelanggarans r inner join pelanggarans p on r.idpelanggaran = p.idpelanggaran where r.users_nrp = $id"));
        // dd($dataTampil);
        return view('sfd.showrekap',["dataTampil"=>$dataTampil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggaran $pelanggaran, $id)
    {
        $this->authorize('hanyasfd');
        $pelanggaran = RekapPelanggaran::find($id);
        $dataUbah = DB::select(DB::raw("SELECT u.name, p.nama_pelanggaran, r.* from users u inner join user_pelanggarans r on u.nrp = r.users_nrp INNER JOIN pelanggarans p on r.idpelanggaran = p.idpelanggaran where idrekap = $id"));
        $pelanggaran = DB::select(DB::raw("SELECT * from pelanggarans"));
        // return view('sfd.editpelanggaran', compact('dataUbah','pelanggaran'));
        //[Cath] coba
        return view('sfd.editpelanggaran2', compact('dataUbah','pelanggaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggaran $pelanggaran,  $id)
    {
        $data_update = RekapPelanggaran::find($id);
        $data_update->users_nrp = $request->get('nrp');
        $data_update->idpelanggaran=$request->get('pelanggaran');
        $data_update->tanggal=$request->get('tanggal');
        $data_update->keterangan=$request->get('keterangan');
        $status = '';
        $keterangan = '';

        $count = DB::table('user_pelanggarans')
            ->where('idpelanggaran', $data_update->idpelanggaran)
            ->where('users_nrp', $data_update->users_nrp)
            ->where('tanggal', $data_update->tanggal)
            ->where('idrekap', '<>', $data_update->idrekap)
            ->count();

        if($count == 0){
            $data_update->save();
            $status = 'status';
            $keterangan = 'Data berhasil diperbarui!';
        }
        else{
            $status = 'error';
            $keterangan = 'Maharu sudah memiliki pelanggaran yang sama pada tanggal tersebut!';
        }

        return redirect()->route('sfd.edit', $id)
        ->with($status, $keterangan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggaran $pelanggaran, $id)
    {
        try{
            $pelanggaran = RekapPelanggaran::find($id);
            $pelanggaran->delete();
            return redirect('/rekap')->with('status','Data berhasil dihapus cuy');
        }
        catch(\PDOException $e){
            $msg="Gagal menghapus data. Kalo masih ga bisa hubungi ITD aja ya!";
            return redirect('/rekap')->with('error',$msg);
        }
    }

    public function listKelompok(Request $request)
    {
        $pengelompokkan = $request->groupby_id;

        $listKelompok = DB::table('users')
        ->select($pengelompokkan)
        ->where('status','=','maharu')
        ->groupBy($pengelompokkan)
        ->orderBy($pengelompokkan, 'ASC')
        ->get();

        return response()->json([
            'listkelompok' => $listKelompok
        ]);

    }

    public function listMahasiswa(Request $request)
    {
        $pengelompokkan = $request->group;
        $kelompok = $request->kelompok;

        $listMahasiswa = DB::table('users')
        ->select('nrp', 'name')
        ->where('status','=','maharu')
        ->where($pengelompokkan, $kelompok)
        ->orderBy('nrp', 'ASC')
        ->get();

        return response()->json([
            'listMahasiswa' => $listMahasiswa
        ]);

    }

    public function tambahPelanggaran(Request $request)
    {
        $pelanggaran = new Pelanggaran();
        $pelanggaran->nama_pelanggaran= $request->get('namapelanggaran');
        $pelanggaran->jenis_pelanggaran= $request->get('jenispelanggaran');
        $pelanggaran->save();
        return redirect()->route('masterData')
        ->with('status','Pelanggaran baru berhasil ditambahkan!'); //[Cath]
        // return redirect()->route('sfd.index2')
        // ->with('status','Pelanggaran baru berhasil ditambahkan!');
    }

    public function rekap()
    {
        $this->authorize('hanyapanitia');
        $hari1 = DB::select(DB::raw("SELECT u.nrp, u.name, u.alpha, u.beta, p.nama_pelanggaran,p.idpelanggaran, p.jenis_pelanggaran, r.idrekap, r.tanggal, r.keterangan from users u INNER JOIN user_pelanggarans r on u.nrp = r.users_nrp inner join pelanggarans p on p.idpelanggaran = r.idpelanggaran where tanggal ='2022-08-22'"));
        $hari2 = DB::select(DB::raw("SELECT u.nrp, u.name, u.alpha, u.beta, p.nama_pelanggaran,p.idpelanggaran, p.jenis_pelanggaran, r.idrekap,r.tanggal, r.keterangan from users u INNER JOIN user_pelanggarans r on u.nrp = r.users_nrp inner join pelanggarans p on p.idpelanggaran = r.idpelanggaran where tanggal = '2022-08-23'"));
        $hari3 = DB::select(DB::raw("SELECT u.nrp, u.name, u.alpha, u.beta, p.nama_pelanggaran,p.idpelanggaran, p.jenis_pelanggaran, r.idrekap,r.tanggal, r.keterangan from users u INNER JOIN user_pelanggarans r on u.nrp = r.users_nrp inner join pelanggarans p on p.idpelanggaran = r.idpelanggaran where tanggal = '2022-08-24'"));
        
        $now = Carbon::now();
        $hariIni = date('Y-m-d',strtotime($now));
        $pelanggaran =  DB::select(DB::raw("SELECT COUNT(idrekap) as jumlahPelanggaran FROM user_pelanggarans WHERE tanggal = '$hariIni'"));

        // return view('sfd.rekap', compact('hari1','hari2','hari3'));
        // [Cath] nyoba tok
        return view('sfd.rekap2', compact('hari1','hari2','hari3','pelanggaran'));
    }

    public function showRekap(Request $request){
        $nrp = $request->get("nrp");
        $dataTampil = DB::select(DB::raw("select r.*, p.nama_pelanggaran from user_pelanggarans r inner join pelanggarans p on r.idpelanggaran = p.idpelanggaran where r.users_nrp = $nrp"));
        $tanggal = DB::select(DB::raw("select r.tanggal from user_pelanggarans r inner join pelanggarans p on r.idpelanggaran = p.idpelanggaran where r.users_nrp = $nrp"));

        for($i = 0; $i < count($tanggal); $i++){
            $str = strtotime($tanggal[$i]->tanggal);
            $date[$i] = date('d/m/Y',$str);
        }
        return response()->json(array(
            'status'=>'oke',
            // 'msg'=>view('sfd.showrekap',compact('dataTampil'))->render()
            // [Cath] coba
            'msg'=>view('sfd.showrekap2',compact('dataTampil', 'date'))->render()
        ),200);
    }

    //maharu ke halaman kendala
    public function formBukti(Request $request){
        $usernrp = Auth::user()->nrp;
        $listkendala = DB::select("SELECT * FROM `kendala_maharu` where nrp = $usernrp");
        return view('profile.kendala', compact('listkendala'));
    }

    public function tambahBukti(Request $request)
    {
        $usernrp = Auth::user()->nrp;
        $kendala = $request->get("kendala");
        $file=$request->file('filebukti');
        $imgFolder='img/sfd_bukti';
        $tanggal = date('Y-m-d',strtotime(Carbon::now()));
        $jam = date('H:i:s',strtotime(Carbon::now()));
        $imgFile=time()."_".$file->getClientOriginalName();
        $file->move($imgFolder,$imgFile);
        DB::table('kendala_maharu')->insert([
            'deskripsi' => $kendala,
            'tanggal' =>  $tanggal,
            'waktu' => $jam,
            'file' => $imgFile,
            'nrp' => $usernrp,
        ]);
        return redirect('/kendala')->with('status','Kendala kamu berhasil ditambahkan! Nantinya bakal ditinjau SFD lebih lanjut ya');
    }

    //sfd ke list kendala
    public function kendala(Request $request){
        $this->authorize('hanyasfd');
        $listkendala = DB::select("SELECT k.*, u.name, u.alpha, u.beta FROM `kendala_maharu` k INNER JOIN users u on k.nrp = u.nrp");
        return view('profile.sfd_kendala', compact('listkendala'));
    }

    public function ubahStatusKendala($id){
        $name = Auth::user()->name;
        $namapanitia = explode(' ',trim($name))[0];
        $update = DB::table('kendala_maharu')
                    ->where('idkendala', $id)
                    ->update(['status' => 'Dilihat oleh '.$namapanitia]);
                    return redirect('/listkendala')->with('status','Yeey kamu berhasil mengubah status!');
    }

    public function kembalikanStatusKendala($id){
        $update = DB::table('kendala_maharu')
                    ->where('idkendala', $id)
                    ->update(['status' => 'Belum Dilihat']);
                    return redirect('/listkendala')->with('status','Status berhasil dikembalikan. Lain kali lebih hati-hati ya');
    }

    public function masterData()
    {
        $listPelanggaran = DB::table('pelanggarans')->get();
        return view('sfd.datapelanggaran', compact('listPelanggaran'));
    }

    public function editpelanggaran(Request $request){
        $id = $request->get('id_edit');
        $nama = $request->get('namapelanggaran');
        $jenis = $request->get('jenispelanggaran');
        $update = [
            'nama_pelanggaran'=>$nama,
            'jenis_pelanggaran'=>$jenis
        ];
        DB::table('pelanggarans')->where('idpelanggaran', $id)->update($update);
        return redirect()->route('masterData')
        ->with('status','Pelanggaran berhasil diedit!');
    }

    public function hapus(Request $request){
        $id = $request->get('id_hapus');
        DB::table('pelanggarans')->where('idpelanggaran', $id)->delete();
        return redirect()->route('masterData')
        ->with('status','Pelanggaran berhasil dihapus!');
    }

}
