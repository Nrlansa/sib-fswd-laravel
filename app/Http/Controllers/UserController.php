<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $data['list_user'] = User::all();
        return view('user.index', $data);
    }
    function create(){
        $data['list_role'] = Role::all();
        return view('user.create',$data);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'id_role' => 'required',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'id_role.required' => 'ID Role harus diisi.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal harus terdiri dari 6 karakter.',
        ]);
        
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->id_role = request('id_role');
        if (request('password')) $user->password = request('password');
        $user->save();

        return redirect('/admin/user')->with('success', 'data berhasil ditambahkan');
    }
    public function show(User $user)
    {
        $data['user'] = $user;
        return view('user.show', $data);
    }

    public function edit(User $user)
    {
        $data['user'] = $user;
        return view('user.edit', $data);
    }
    public function update(Request $request , User $user)
    {
      
        $user->name = request('name');
        $user->email = request('email');
        $user->id_role = request('id_role');
        if (request('password')) $user->password = request('password');
        $user->save();

        return redirect('/admin/user')->with('success', 'data berhasil diedit');
       
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/admin/user')->with('success', 'Data Berhasil Dihapus');
    }

}
