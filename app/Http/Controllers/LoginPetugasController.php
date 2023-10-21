<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginPetugasController extends Controller
{
    public function login_petugas(){
        return view('login_petugas');
    }
}
