<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $data['list_user'] = User::all();
        return view('user.index', $data);
    }
    function create(){
        return view('user.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'role' => 'required|in:staff,admin', 
        ]);
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->role = $validatedData['role'];
        if (request('password')) $user->password = request('password');
        // @dd($user);
        $user->save();

        return redirect('/user')->with('success', 'data berhasil ditambahkan');
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
        $validatedData = $request->validate([
            'role' => 'required|in:staff,admin',
        ]);
      
        $user->name = request('name');
        $user->email = request('email');
        $user->role = $validatedData['role'];
        if (request('password')) $user->password = request('password');
        $user->save();

        return redirect('/user')->with('success', 'data berhasil diedit');
       
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/user')->with('success', 'Data Berhasil Dihapus');
    }

}
