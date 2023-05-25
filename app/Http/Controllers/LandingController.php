<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    function index(){
        $data['list_landing'] = Landing::all();
        return view('components.landing.page', $data);
    }
}
