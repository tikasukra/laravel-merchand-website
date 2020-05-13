<?php

namespace App\Http\Controllers;
// import class Auth
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
        //
        public function showLoginForm()
        {
            return view("login-form");
        }
        public function login(Request $request)
        {
            // dd($request->all);
            $credential = $request->only("username", "password");
            if (Auth::attempt($credential)) { //kembalikan true atau false
                # code...
                // jika sukses menuju ke halaman biodata mahasiswa
                return redirect()->route("biodata.index");
            } else {
                # code...
                // jika gagal kembali ke halaman login
                return redirect()->back();
            }
        }
        
        // logout user
        public function logout(){
    
            Auth::logout(); //logout user
    
            // redirect ke halaman login
            return redirect()->route("login");
    
        }
}
