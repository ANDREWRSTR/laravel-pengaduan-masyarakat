<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use App\models\pengaduan;

class PetugasController extends Controller
{
    function petugas (){
        return view('registrasi_petugas');
    }
    function proses_registrasi_petugas (request $request){

        
        $nama = $request-> nama_petugas;
        $un = $request-> username;
        $pw = $request-> password;
        $telp = $request-> telp;
        $level = $request-> level;

        DB::table('petugas')->insert([
            
            'nama_petugas' => $nama,
            'username' => $un,
            'password' =>  Hash::make($pw),
            'telp' => $telp,
            'level' => $level,
        ]);
        return redirect('/login_petugas');
}
        function data_petugas (){

            $petugas = DB::table('petugas')->get();

            return view('data_petugas',['petugas' => $petugas]); 

        }
        
        function halaman_petugas (){
            $pengaduan = pengaduan::all();

            return view ('petugas',['pengaduan' => $pengaduan]);
        }
      
        function status($id){
            $pengaduan = DB::table('pengaduan')->where('id_pengaduan', '=', $id)->first();
            return view ('proses',['pengaduan' => $pengaduan]);
            
        }
        function proses_status(request $request , $id){

            $status = $request->status;
    
            DB::table('pengaduan')->where('id_pengaduan','=',$id)->update([
                
                'status' => $status,
            ]);
            return redirect('/petugas');
        }    
        function proses_tanggapan(request $request, $id, ){

            $tanggapan = $request->keterangan;

            DB::table('tanggapan')->insert([

                'id_pengaduan' => $id,
                'tgl_tanggapan' => date ('Y-m-d'),
                'tanggapan' => $tanggapan,
                'id_petugas' => Auth::guard("petugas")->user()->id
            ]);
            return redirect('/petugas');
        }
        function tanggapan($id){
            $pengaduan = DB::table('pengaduan')->where('id_pengaduan', '=', $id)->first();
            return view ('tanggapan',['pengaduan' => $pengaduan]);
        }


         function logout(){
            Auth::guard("petugas")->logout();
    
            return redirect("login_petugas");
        }
}