<?php
namespace App\Http\Controllers;

use App\RectorCup;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RectorCupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listrc = RectorCup::All();
        $usernrp = Auth::user()->nrp;
        $riwayatdftr = DB::select(DB::raw("SELECT r.*, c.nama_cabang, c.tanggal_seleksi, c.jam_seleksi, u.id_line, u.name as 'nama_kwarcab' FROM ambil_rc r inner join rc_cabang c on c.idrc = r.rc_idrc left join users u on u.nrp = c.nrp_koor WHERE r.users_nrp = $usernrp"));
        $jumlahambil = DB::select(DB::raw("SELECT count(users_nrp) as jumlahambil from ambil_rc where users_nrp = $usernrp"));
        return view('rectorcup.index', compact('listrc', 'usernrp', 'jumlahambil', 'riwayatdftr'));
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
     * @param  \App\RectorCup  $rectorCup
     * @return \Illuminate\Http\Response
     */
    public function show(RectorCup $rectorCup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RectorCup  $rectorCup
     * @return \Illuminate\Http\Response
     */
    public function edit(RectorCup $rectorCup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RectorCup  $rectorCup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RectorCup $rectorCup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RectorCup  $rectorCup
     * @return \Illuminate\Http\Response
     */
    public function destroy(RectorCup $rectorCup)
    {
        //
    }

    //tampilkan modal syarat
    public function showSyarat(Request $request){
        $idrc = $request->get("idrc");
        $dataTampil = DB::select(DB::raw("SELECT persyaratan1,persyaratan2,persyaratan3,persyaratan4,persyaratan5,persyaratan6,persyaratan7, persyaratan8 FROM rc_syaratketentuan where idrc = $idrc"));
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('rectorcup.syaratrc',compact('dataTampil'))->render()
        ),200);
    }

    // tampilkan form daftar buat mahasiswa
    public function showDaftar(Request $request){
        $idrc = $request->get("idrc");
        $nrp = $request->get("nrp");
        $status = DB::select(DB::raw("SELECT rc_idrc from ambil_rc where users_nrp = $nrp and rc_idrc = $idrc"));

        $dataTampil = DB::select(DB::raw("SELECT idrc, nama_cabang FROM rc_cabang where idrc = $idrc"));
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('rectorcup.formdaftar',compact('dataTampil'))->render()
        ),200);

    }

    //mahasiswa daftar
    public function daftarrc(Request $request)
    {
        if((\Carbon\Carbon::now()) < (\Carbon\Carbon::parse('July 28 2021 23:59:59'))){
            if(!$request->has('filesyarat')){
                DB::table('ambil_rc')->insert([
                    'rc_idrc' => $request->get('idrc'),
                    'users_nrp' => $request->get('nrp'),
                    'is_lolos' => 0,
                    'prestasi' => $request->get('prestasi'),
                ]);
            }
            else{
                $file=$request->file('filesyarat');
                $imgFolder='persyaratanrc';
                $imgFile=time()."_".$file->getClientOriginalName();
                $file->move($imgFolder,$imgFile);

                DB::table('ambil_rc')->insert([
                    'rc_idrc' => $request->get('idrc'),
                    'users_nrp' => $request->get('nrp'),
                    'is_lolos' => 0,
                    'prestasi' => $request->get('prestasi'),
                    'file_syarat'=>$imgFile
                ]);
            }
            return redirect()->route('rectorcup.index')
            ->with('status','Kamu berhasil mendaftar!');
        }
        else{
            return redirect()->route('rectorcup.index')
            ->with('error','Waktu pendaftaran sudah habis!');
        }
    }

    //sisi panitia mulai dari sini

    //arahkan ke view pendaftar
    public function PendaftarRC(){
        $this->authorize('hanyapanitia');
        $usernrp = Auth::user()->nrp;
        $data =DB::select(DB::raw("SELECT r.*, p.users_nrp as nrp_pendaftar, p.is_lolos, p.prestasi, p.file_syarat, u.name, u.alpha, u.beta, u.id_line, u.no_hp from rc_cabang r inner join ambil_rc p on r.idrc = p.rc_idrc INNER join users u on u.nrp = p.users_nrp where r.nrp_koor = $usernrp"));
        $nama_rc = DB::select(DB::raw("select * from rc_cabang where nrp_koor = $usernrp"));
        // return view('rectorcup.pendaftar', compact('data'));
        // [Cath] coba
        return view('rectorcup.pendaftar2', compact('data', 'nama_rc'));

    }


    //show modal prestasi, ini ga pake view jadi langsung di dalam 'msg', semangat! :D
    public function showPrestasi(Request $request){
        $idrc = $request->get("idrc");
        $nrp = $request->get("nrp_mhs");
        $prestasi = DB::select(DB::raw("SELECT u.name,u.nrp, a.prestasi from ambil_rc a inner join users u on  u.nrp = a.users_nrp where a.users_nrp = $nrp and a.rc_idrc = $idrc"));

        if($prestasi[0]->prestasi!=null){
            $prestasis = preg_replace("/\r\n|\r|\n/", '<br/>', $prestasi[0]->prestasi);
            return response()->json(array(
                'status'=>'oke',
                'msg'=>"<div class='modal-header'>
                <h4 class='modal-title'>Prestasi&nbsp;<span class='text-primary'>".$prestasi[0]->nrp."</span></h4>
                </div>
                <div class='modal-body'>".
                $prestasis
                ."</div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-default' data-dismiss='modal'>Tutup</button>
                </div>"
            ),200);
        }
        else{
            return response()->json(array(
                'status'=>'oke',
                'msg'=>"<div class='modal-header'>
                <h4 class='modal-title'>Prestasi&nbsp;<span class='text-primary'>".$prestasi[0]->nrp."</span></h4>
                </div>
                <div class='modal-body'>
                <label style='position: absolute;top: 50%; -webkit-transform: translateY(-50%); transform: translateY(-50%);translateX(25%); transform: translateX(25%);'>
                Kandidat memilih mengosongkan kolom prestasi</label>
                </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-default' data-dismiss='modal'>Tutup</button>
                </div>"
            ),200);
        }
    }

    //update database terima mhs dan kurangi kuotanya
    public function terimaRC(Request $request){
        $idrc = $request->get("idrc");
        $nrp = $request->get("nrp_mhs");
        $kuota = DB::select(DB::raw("SELECT kuota from rc_cabang where idrc = $idrc"));
        $kuota = (int)$kuota[0]->kuota -1;


        $update = DB::table('ambil_rc')
                    ->where('rc_idrc', $idrc)
                    ->where('users_nrp', $nrp)
                    ->update(['is_lolos' => 1]);

        $update = DB::table('rc_cabang')
                    ->where('idrc', $idrc)
                    ->update(['kuota' => $kuota]);
        return redirect('/kandidat')->with('status','Berhasil Menerima Peserta');
    }

    //update database tolak mhs
    public function tolakRC(Request $request){
        $idrc = $request->get("idrc");
        $nrp = $request->get("nrp_mhs");
        $update = DB::table('ambil_rc')
                    ->where('rc_idrc', $idrc)
                    ->where('users_nrp', $nrp)
                    ->update(['is_lolos' => -1]);
        return redirect('/kandidat')->with('status','Berhasil Menolak Peserta');
    }

    //panggil view formubahdetail beserta data kiriman
    public function editDetailRC(Request $request){
        $idrc = $request->get("idrc");
        $nrp = Auth::user()->nrp;
        $data = DB::select(DB::raw("SELECT * from rc_cabang where nrp_koor = $nrp and idrc = $idrc"));
        // print_r($data);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('rectorcup.formubahdetail',compact('data'))->render()
        ),200);
    }

    //tampilkan modal tambah medal
    public function showtambahMedal(Request $request){
        $idrc = $request->get("idrc");
        $data = DB::select(DB::raw("SELECT * from rc_cabang where idrc = $idrc"));
        // print_r($data);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('rectorcup.formtambahmodal',compact('data'))->render()
        ),200);
    }

    //terima data dari form ubah detail lalu kirim ke db
    public function ubahdetail(Request $request){

        $idrc = $request->get("idrc");
        $tanggal = $request->get("tanggal");
        $waktu = strval($request->get("waktu"));
        $status = $request->get("status");
        $kuota = $request->get("kuota");
        $update = DB::table('rc_cabang')
                    ->where('idrc', $idrc)
                    ->update(['tanggal_seleksi' => $tanggal, 'jam_seleksi'=>$waktu, 'status'=>$status, 'kuota'=>$kuota]);
        return redirect('/kandidat')->with('status','Berhasil memperbarui detail');
    }

    //tambahkan medal ke db
    public function tambahmedal(Request $request){
        $medal = strval($request->get("medal"));
        $juara = $request->get("juara");
        $idrc = $request->get("idrc");
        $date = Carbon::now();
        $date_store = $date->toDateString();
        // echo $medal . $juara . $idrc;
        $update = DB::table('rc_cabang')
                    ->where('idrc', $idrc)
                    ->update(['juara' => $juara, 'medali'=>$medal, 'tanggal_juara'=>$date_store]);
                    return redirect('/kandidat')->with('status','Berhasil menambahkan medali');
    }

    //UNTUK KONTINGEN

    //index
    public function Kontingen(){
        $this->authorize('hanyapanitia');
        $data =DB::select(DB::raw("SELECT r.*, u.name from rc_cabang r left join users u on nrp_koor = nrp"));
        // return view('rectorcup.kontingen', compact('data'));
        // [Cath] coba
        return view('rectorcup.kontingen2', compact('data'));
    }

    //tampilkan pendaftar per cabang
    public function KontingenShowPendaftar($id){
        $this->authorize('hanyapanitia');
        $data =DB::select(DB::raw("select r.*, c.nama_cabang, c.medali, u.name from ambil_rc r inner join rc_cabang c on r.rc_idrc = c.idrc left join users u on r.users_nrp = u.nrp where r.rc_idrc = $id"));
        $nama_rc = DB::select(DB::raw("select * from rc_cabang where idrc = $id"));
        // return view('rectorcup.kontingenshow', compact('data'));
        // [Cath] coba
        return view('rectorcup.kontingenshow2', compact('data', 'nama_rc'));
    }

}
