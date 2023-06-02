<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function loginProcess()
    {
    if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
        
        $user = Auth::user();
        if ($user->id_role == 1) {
            return redirect('/admin/dashboard')->with('success', 'Login Berhasil');
        }
        if ($user->id_role == 2) {
            return redirect('/staff/dashboard')->with('success', 'Login Berhasil');
        }
        if ($user->id_role == 3) {
            return redirect('/')->with('success', 'Login Berhasil');
        }
    } else {
        return back()->with('danger', 'Login Gagal, silahkan cek username dan password anda');
    }
}
    public function logout()
    {

        auth()->logout();

        return redirect('/login');
    }

}
