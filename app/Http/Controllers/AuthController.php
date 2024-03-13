<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function Login(){
        return view("Login");
    }
    public function CekLogin(Request $request){
        if (!Auth::attempt(['nama' => $request->nama, 'password' => $request->password])){
            return redirect("/login");
        }else {
            return redirect("/beranda");
        }
    }
    public function Register(){
        return view("Register");
    }
    public function SimpanUser(Request $request){
        $user = User::create([
            'nama' => $request->nama,
            'password' => bcrypt($request->password)
        ]);
        return redirect("/login");
    }
    public function Logout(){
        Auth::logout();
        return redirect("/login");
    }
}
