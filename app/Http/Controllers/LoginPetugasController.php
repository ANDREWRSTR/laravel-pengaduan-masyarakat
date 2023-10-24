<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginPetugasController extends Controller
{
    public function login_petugas(){
        return view('login_petugas');
    }
    function proses_login_petugas(Request $request){

        $data_login = $request->only("username","password");
        if(auth::guard("petugas")->attempt($data_login)){

            return redirect("data_petugas");
            
           
        }else{

            return redirect("login_petugas")->with("error","username atau password salah");
            
            
        }
    }
}
