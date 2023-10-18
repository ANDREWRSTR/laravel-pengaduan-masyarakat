<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\models\pengaduan;

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

       
        $request->validate([
            'isi_laporan' => 'required|min:5'
        ]);
        
        $nama_foto = $request->gambar->getClientOriginalName();

        $request->gambar->storeAs('public/image', $nama_foto);

        $isi_laporan = $request->isi_laporan;
        

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date ('Y-m-d'),
            'nik' => '2',
            'isi_laporan' => $isi_laporan,
            'foto' => $request->gambar->getClientOriginalName(),
            'status' => 'proses'
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
         
        ]);
        
        return redirect('/table');
    }
    function hapus ($id){
        DB::table('pengaduan')->where('id_pengaduan', '=', $id)->delete();
        return redirect('/table');
    }
    function detail ($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', '=', $id)->get();
        return view ('/detail',['pengaduan' => $pengaduan]);
        
    }

    function detail_laporan($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', '=', $id)->get();
        return view('/detail_laporan',['pengaduan' => $pengaduan]);
    }
}
