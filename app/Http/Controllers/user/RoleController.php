<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    function index()
    {
        $data['list_role'] = User::all();
        return view('user.role.index', $data);
    }
}
