<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;



class masyarakatController extends Controller
{
    function data_warga (){

        $masyarakat = DB::table('masyarakat')->get();

        return view('masyarakat',['masyarakat' => $masyarakat]); 

    }
    function buatakun (){
        return view('registrasi');
    }
    
    function proses_registrasi (request $request){

        $nik = $request-> nik;
        $nama = $request-> nama;
        $un = $request-> username;
        $pw = $request-> password;
        $telp = $request-> telp;

        DB::table('masyarakat')->insert([
            'nik' => $nik,
            'nama' => $nama,
            'username' => $un,
            'password' => hash::make($pw),
            'telp' => $telp
        ]);

        return redirect('/login');
    }



    
}
