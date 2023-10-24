<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;




class PetugasController extends Controller
{
    function petugas (){
        return view('petugas');
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
            'password' =>  hash::make($pw),
            'telp' => $telp,
            'level' => $level,
        ]);
        return redirect('/login_petugas');
}
        function data_petugas (){

            $petugas = DB::table('petugas')->get();

            return view('data_petugas',['petugas' => $petugas]); 

        }
       
}