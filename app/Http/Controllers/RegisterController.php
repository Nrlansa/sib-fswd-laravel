<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        $data['list_role'] = Role::all();
        return view('auth.register', $data);
    }
    public function RegisterProcess(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
            'id_role' => 'required',
        ]);
        // @dd($validatedData);
        try {
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
                'id_role' => $validatedData['id_role'],
            ]);

            return redirect('/login')->with('success', 'Registrasi berhasil. Silakan login.');
        } catch (\Exception $e) {
            return redirect('/register')->with('danger', 'Registrasi gagal. Silakan coba lagi.');
        }
    }
}

