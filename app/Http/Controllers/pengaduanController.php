<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



use App\models\pengaduan;

use function Laravel\Prompts\alert;

class pengaduanController extends Controller
{
    function index(){
        return view('halaman');
    }
    function home(){

        $Judul = 'SELAMAT DATANG DIWEKIDI';

        return view('home', ['TextJudul' => $Judul]);
    }
    function table(){

       // $pengaduan = DB::table('pengaduan')->get();
       $pengaduan = pengaduan::all();

        return view('table',['pengaduan' => $pengaduan]);   
            
    }
    function buat(){
        return view('isi_laporan');
    }
    function login(){
        return view('login');
    }

    function proses_tambah_pengaduan (request $request){

       Auth::user()->nik;
        $request->validate([
            'isi_laporan' => 'required|min:5'
        ]);
        
        $nama_foto = $request->gambar->getClientOriginalName();

        $request->gambar->storeAs('public/image', $nama_foto);

        $isi_laporan = $request->isi_laporan;
        

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date ('Y-m-d'),
            'nik' => Auth::user()->nik,
            'isi_laporan' => $isi_laporan,
            'foto' => $request->gambar->getClientOriginalName(),
            'status' => '0'
        ]);

        return redirect('/table');
    }
    function update($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', '=', $id)->first();
        return view ('/update',['pengaduan' => $pengaduan]);
        
    }

    function proses_update(request $request , $id){

       
        $isi_laporan = $request->isi_laporan;

        DB::table('pengaduan')->where('id_pengaduan','=',$id)->update([
            
            'isi_laporan' => $isi_laporan,
            'status' => '0',
         
        ]);
        
        return redirect('/table');
    }
    
    function hapus ($id){
        //  $konfirmasi = confirm("Apakah Anda yakin ingin menghapus?");
      
        // if($konfirmasi){// 
            DB::table('pengaduan')->where('id_pengaduan', '=', $id)->delete();
            // alert("data dihapus");
    //     }esle{

        
        return redirect('/table')->with("pesan","data berhasil dihapus");
    // }
}

    function detail ($id ){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id)->get();
        $tanggapan = DB::table('tanggapan')->where('id_petugas','54')->get();
        // $tanggapan = DB::table('tanggapan')->join('tanggapan.id_petugas')->where('tanggapan.nama_petugas')->get();
        
        return view ('/detail',['pengaduan' => $pengaduan ,'tanggapan' => $tanggapan ]);
        
    }
    

    // function detail_laporan($id){
    //     $keterangan = DB::table('tanggapan')->where('id_pengaduan', '=', $id)->get();
    //     return view('/detail',['tanggapan' => $keterangan]);
    // }

}
