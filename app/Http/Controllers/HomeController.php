<?php

namespace App\Http\Controllers;

use App\DataPengajuan;
use App\KategoriSurat;
use App\Mail\NotifJadi;
use App\Mail\NotifVerifikasi;
use App\Mail\NotifTolak;
use yajra\Datatables\Datatables;
use App\Pesanan;
use App\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use PDF;
use Illuminate\Support\Facades\View;


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

    public function index()
    {
        $kategori = KategoriSurat::get();
        // dd($kategori->first()->pengajuan()->whereHas('pesanan',function($q){
        //     return $q->where('status',0);
        // })->get());

        
        return view('admin.dashboard.index', compact('kategori'));
    }

    public function listkategori($id)
    {
        $pengajuan = DataPengajuan::where('kategori_surat_id', $id)->orderBy('created_at', 'DESC')->get();
        //dd($pengajuan);
        $title = KategoriSurat::find($id);
        $kat = $id;
        return view('admin.dashboard.listkategori', compact('pengajuan', 'title','kat'));
    }

    public function verifKelahiran($id)
    {
        $data = DB::table('data_pengajuans')
                        ->join('data_kelahiran', 'data_pengajuans.data','=','data_kelahiran.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_kelahiran.*','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan','nomer_surat')
                        ->first();              
        return view('admin.dashboard.verifLahir', compact('data'));
    }
    public function verifKematian($id)
    {
        $data = DB::table('data_pengajuans')
                        ->join('data_kematian', 'data_pengajuans.data','=','data_kematian.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_kematian.*','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan','nomer_surat')
                        ->first();              
        return view('admin.dashboard.verifMati', compact('data'));
    }
    public function verifUmum($id)
    {
        $data = DB::table('data_pengajuans')
                        ->join('data_pengantar_umum', 'data_pengajuans.data','=','data_pengantar_umum.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_pengantar_umum.*','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan','nomer_surat')
                        ->first();              
        return view('admin.dashboard.verifUmum', compact('data'));
    }
    public function verifPengantarPindah($id)
    {
        $data = DB::table('data_pengajuans')
                        ->join('data_pengantar_pindah', 'data_pengajuans.data','=','data_pengantar_pindah.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_pengantar_pindah.*','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan','nomer_surat')
                        ->first();              
        return view('admin.dashboard.verifPindah', compact('data'));
    }
    public function verifPermohonanPindah($id)
    {
        $data = DB::table('data_pengajuans')
                        ->join('data_permohonan_pindah', 'data_pengajuans.data','=','data_permohonan_pindah.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_permohonan_pindah.*','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan','nomer_surat')
                        ->first();
        
        $pengajuan = DB::table('data_pengajuans')
                        ->join('data_permohonan_pindah', 'data_pengajuans.data','=','data_permohonan_pindah.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_permohonan_pindah.*','data_permohonan_pindah.id AS id_perm','nama_pemesan','nomer_surat')
                        ->first(); 
    
        $data_kel = DB::table('keluarga_pindah')
                                ->where('id_perm_pindah',$pengajuan->id_perm)
                                ->get();                              
        return view('admin.dashboard.verifPermohonanPindah', compact('data','data_kel'));
    }
    public function verifPengantarDatang($id)
    {
        $data = DB::table('data_pengajuans')
                        ->join('data_surat_pindah_datang', 'data_pengajuans.data','=','data_surat_pindah_datang.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_surat_pindah_datang.*','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan','nomer_surat')
                        ->first(); 
        $pengajuan = DB::table('data_pengajuans')
                        ->join('data_surat_pindah_datang', 'data_pengajuans.data','=','data_surat_pindah_datang.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_surat_pindah_datang.*','data_pengajuans.id AS id_perm','nama_pemesan','nomer_surat')
                        ->first(); 
        $data_kel = DB::table('keluarga_datang')
                                ->where('id_perm_pindah',$pengajuan->id_perm)
                                ->get();              
        return view('admin.dashboard.verifDatang', compact('data','data_kel'));
    }
    public function verifPermohonanDatang($id)
    {
        $data = DB::table('data_pengajuans')
                        ->join('data_permohonan_pindah_datang', 'data_pengajuans.data','=','data_permohonan_pindah_datang.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_permohonan_pindah_datang.*','data_pengajuans.id AS pengajuan_id','pesanans.id AS pesanan_id','data_pengajuans.kategori_surat_id AS halaman','nama_pemesan','nomer_surat')
                        ->first();              
        return view('admin.dashboard.verifPermohonanDatang', compact('data'));
    }

    public function riwayat()
    {
        $pengajuan = DataPengajuan::with(['kategori', 'pesanan'])->orderBy('created_at', 'DESC')->paginate(10);
        //dd($pengajuan);
        return view('admin.riwayat', compact('pengajuan'));
    }

    public function verifikasi(Request $request)
    {
        dd($request->all());
        $idpesan = $request->id_pesanan;
        $idpengaju = $request->id_pengaju;
        $pesanan = Pesanan::find($idpesan);
        $pengajuan = DataPengajuan::with(['kategori', 'warga'])->find($idpengaju);
        if(!empty($pengajuan->warga->email))
        {
            Mail::to($pengajuan->warga->email)->send(new NotifVerifikasi($pengajuan));
        }

        // dd('berhasil');
        $pesanan->update([
            'tanggal_verifikasi' => now(),
            'status' => 1,
        
            
        ]);
        
        return redirect('/Administrator/list-kategori/'.$request->kat);
        
    }

    public function tolak(Request $request){
        // $idpesan = $request->id_pesanan;
        // $idpengaju = $request->id_pengaju;


        $id= $request->idpesantolak;
        //dd($request->all());
        $pesanan = Pesanan::find($id);
        //dd($pesanan->pengajuan);
        $pengajuan = DataPengajuan::with(['kategori','warga','pesanan'])->find($id);
        
        
        
        if(!empty($pengajuan->warga->email)){
            Mail::to($pengajuan->warga->email)->send( new NotifTolak($pengajuan));
        }
    
        $pesanan->update([
            'status'=>3,
        ]);

        return redirect('/Administrator/list-kategori/'.$request->kat);
    }

    public function print($id)
    {
        $cek_kat = DB::table('data_pengajuans')
                        ->where('id',$id)
                        ->first();
        switch ($cek_kat->kategori_surat_id) {
            //keterangan kelahiran
            case '1':
                $kategori = DB::table('kategori_surats')
                        ->join('data_pengajuans', 'kategori_surats.id','=','data_pengajuans.kategori_surat_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('kategori_surats.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_kelahiran', 'data_pengajuans.data','=','data_kelahiran.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_kelahiran.*','nama_pemesan','nomer_surat')
                        ->first(); 
                $pdf = PDF::loadview('suratkelahiran', compact('pengajuan','kategori'))->setPaper('f4', 'portrait');
                return $pdf->stream();
                break;
            //keterangan kematian
            case '2':
                $kategori = DB::table('kategori_surats')
                        ->join('data_pengajuans', 'kategori_surats.id','=','data_pengajuans.kategori_surat_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('kategori_surats.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_kematian', 'data_pengajuans.data','=','data_kematian.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_kematian.*','nama_pemesan','nomer_surat')
                        ->first(); 
                //return view('suratkematian');
                $pdf = PDF::loadview('suratkematian', compact('pengajuan','kategori'))->setPaper('a4', 'portrait');
                return $pdf->stream();
                break;
            //pengantar umum
            case '3':
                $kategori = DB::table('kategori_surats')
                        ->join('data_pengajuans', 'kategori_surats.id','=','data_pengajuans.kategori_surat_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('kategori_surats.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_pengantar_umum', 'data_pengajuans.data','=','data_pengantar_umum.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_pengantar_umum.*','nama_pemesan','nomer_surat')
                        ->first(); 
                $pdf = PDF::loadview('suratketerangan', compact('pengajuan','kategori'))->setPaper('f4', 'portrait');
                return $pdf->stream();
                break;
            //pengantar pindah
            case '4':
                $kategori = DB::table('kategori_surats')
                        ->join('data_pengajuans', 'kategori_surats.id','=','data_pengajuans.kategori_surat_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('kategori_surats.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_pengantar_pindah', 'data_pengajuans.data','=','data_pengantar_pindah.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_pengantar_pindah.*','nama_pemesan','nomer_surat')
                        ->first(); 
                $pdf = PDF::loadview('suratpengantarpindah', compact('pengajuan','kategori'))->setPaper('f4', 'portrait');
                return $pdf->stream();
                break;
            //permohonan pindah wni
            case '5':
                $kategori = DB::table('kategori_surats')
                        ->join('data_pengajuans', 'kategori_surats.id','=','data_pengajuans.kategori_surat_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('kategori_surats.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_permohonan_pindah', 'data_pengajuans.data','=','data_permohonan_pindah.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_permohonan_pindah.*','data_permohonan_pindah.id AS id_perm','nama_pemesan','nomer_surat')
                        ->first(); 
                 $data_kel = DB::table('keluarga_pindah')
                                ->where('id_perm_pindah',$pengajuan->id_perm)
                                ->get();
                $pdf = PDF::loadview('formpindahwni', compact('pengajuan','kategori','data_kel'))->setPaper('f4', 'portrait');
                return $pdf->stream();
                break;
            //pengantar datang
            case '6':
                $kategori = DB::table('kategori_surats')
                        ->join('data_pengajuans', 'kategori_surats.id','=','data_pengajuans.kategori_surat_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('kategori_surats.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_surat_pindah_datang', 'data_pengajuans.data','=','data_surat_pindah_datang.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_surat_pindah_datang.*','data_pengajuans.id AS id_perm','nama_pemesan','nomer_surat')
                        ->first(); 
                 $data_kel = DB::table('keluarga_datang')
                                ->where('id_perm_pindah',$pengajuan->id_perm)
                                ->get();
                $pdf = PDF::loadview('formpindahdatangwni', compact('pengajuan','kategori','data_kel'))->setPaper('f4', 'portrait');
                return $pdf->stream();
                break;
            //permohonan datang    
            case '7':
                $kategori = DB::table('kategori_surats')
                        ->join('data_pengajuans', 'kategori_surats.id','=','data_pengajuans.kategori_surat_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('kategori_surats.*')
                        ->first(); 
                $pengajuan = DB::table('data_pengajuans')
                        ->join('data_permohonan_pindah_datang', 'data_pengajuans.data','=','data_permohonan_pindah_datang.id')
                        ->join('pesanans','data_pengajuans.id','=','pesanans.data_pengajuan_id')
                        ->where('data_pengajuans.id', $id)
                        ->select('data_permohonan_pindah_datang.*','data_pengajuans.id AS id_perm','nama_pemesan','nomer_surat')
                        ->first(); 
                 $data_kel = DB::table('keluarga_perm_datang')
                                ->where('id_perm_pindah',$pengajuan->id_perm)
                                ->get();
                $pdf = PDF::loadview('suratketeranganpindahdatang', compact('pengajuan','kategori','data_kel'))->setPaper('f4', 'portrait');
                return $pdf->stream();
                break;
            
        }
    }

    public function emailjadi($id)
    {
        $pengajuan = DataPengajuan::with(['kategori', 'warga', 'pesanan'])->find($id);

        if(!empty($pengajuan->warga->email))
        {
            Mail::to($pengajuan->warga->email)->send(new NotifJadi($pengajuan));
        }

        // dd('berhasil');
        $pengajuan->pesanan->update([
            'tanggal_jadi' => now(),
            'status' => 2,
        ]);

        return redirect()->back()->with(['success' => 'Data Jadi']);
    }

    public function admin()
    {
        $pegawai = User::get();
        return view('pegawai.index', compact('pegawai'));
    }

    public function editadmin($id)
    {
        $pegawai = User::find($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    public function register()
    {
        return view('pegawai.register');
    }

    public function registerstore(Request $request)
    {
        
        $request->validate([
            'nomor_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',

        ]);

        $user = User::create([
            'nomer_pegawai' => $request->nomor_pegawai,
            'nama' => $request->nama_pegawai,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password,
        ]);
        return redirect(route('admin.index'));
        // $request->validate([
        //     'nomor_pegawai' => 'required',
        //     'nama_pegawai' => 'required',
        //     'email' => 'required',
        //     'password' => 'required|confirmed',
        // ]);

    //     $user = User::create([
    //         'nomer_pegawai' => $request->nomor_pegawai,
    //         'nama' => $request->nama_pegawai,
    //         'email' => $request->email,
    //         'role' => $request->role,
    //         'password' => $request->password,
    //     ]);
    //     return redirect(route('admin.index'));
    }

    public function adminupdate(Request $request, $id)
    {
        $request->validate([
            'nomor_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'email' => 'required',
            'password' => 'nullable|confirmed',
        ]);
        //dd($request->all());

        $admin = User::find($id);
        $password = $admin->password;

        if($request->has('password')){
            $password = $request->password;
        }

        $admin->update([
            'nomer_pegawai' => $request->nomor_pegawai,
            'nama' => $request->nama_pegawai,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $password,
        ]);
        return redirect(route('admin.index')); 
    }

    public function destroyadmin($id)
    {
        $admin = User::find($id);
        $admin->delete();
        return redirect(route('admin.index')); 
    }

    public function listdatakategori(DataPengajuan $pesanan){
        //return $pesanan->id;
        $view = View::make('admin.dashboard.load')->with('pesanan',$pesanan)->render();

        return response()->json(['view'=>$view,'nama'=>$pesanan->nama_pemesan],200);
        //return response ;
    }

    public function cekPesanan(){
        return response()->json(['jumlah'=>DataPengajuan::count()],200);
    }

    public function rekapTahun(Request $request){
        
        
        $pengajuan = DataPengajuan::orderBy('created_at','ASC')->get()->groupBy(function($item){
            return $item->created_at->format('Y');
        });
        $tahun=(array_keys($pengajuan->toArray()));
        //$filtertahun= $request->get('tahun');
        //$filterbulan= $request->get('bulan');
        // if($filtertahun){
        //     $dataPenhajuan= DataPengajuan::where('created_at',$filtertahun)->paginate(10);
        // }


        return view('admin.rekap.rekapTahun', compact('tahun'));

    }
    public function rekapdata(Request $request){
        $pengajuan = DataPengajuan::with(['kategori','pesanan','warga']);

        if($request->tahun != 'all'){
            $pengajuan= $pengajuan->whereYear('created_at',$request->tahun);
        }
        if($request->bulan != 'all'){
            $pengajuan= $pengajuan->whereMonth('created_at',$request->bulan);
        }

        return Datatables::of($pengajuan)->make();
        
    }

    public function ambil($id)
    {
        $pengajuan = DataPengajuan::with(['kategori', 'warga', 'pesanan'])->find($id);

        // dd('berhasil');
        $pengajuan->pesanan->update([
            'is_ambil' => true,
        ]);

        return redirect()->back()->with(['success' => 'DataDiambil']);
    }
    
}
