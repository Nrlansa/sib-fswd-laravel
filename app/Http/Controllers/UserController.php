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

}
