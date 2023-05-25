<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use App\Models\produk\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function index()
    {
        $data['list_kategori'] = Kategori::all();
        return view('produk.kategori.index', $data);
    }
}
