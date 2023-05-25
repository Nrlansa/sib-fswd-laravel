<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use App\Models\produk\Lproduk;
use Illuminate\Http\Request;

class LprodukController extends Controller
{
    function index()
    {
        $data['list_listproduk'] = Lproduk::all();
        return view('produk.listproduk.index', $data);
    }
}
