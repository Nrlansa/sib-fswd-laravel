<?php

namespace App\Http\Controllers\user;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    function index()
    {
        $data['list_role'] = Role::all();
        return view('user.role.index', $data);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'role' => 'required|in:admin,staff,user',
        ]);
        $role = new Role();
        $role->role = $validatedData['role'];
        $role->save();

        return redirect('/role')->with('success', 'data berhasil ditambahkan');
    }

}
