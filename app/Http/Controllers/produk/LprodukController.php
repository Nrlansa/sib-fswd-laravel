<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use App\Models\produk\Kategori;
use App\Models\produk\Lproduk;
use Illuminate\Http\Request;

class LprodukController extends Controller
{
    function index()
    {
        $data['list_listproduk'] = Lproduk::all();
        return view('produk.listproduk.index', $data);
    }
    function create()
    {
        $data['list_kategori'] = Kategori::all();
        return view('produk.listproduk.create', $data);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'status' => 'required|in:accepted,rejected,waiting',
        ]);
        $lproduk = new Lproduk();
        $lproduk->name = request('name');
        $lproduk->category_id = request('category_id');
        $lproduk->status = $validatedData['status'];
        $lproduk->description = request('description');
        $lproduk->price = request('price');
        // @dd($lproduk);
        $lproduk->save();

        return redirect('/listproduk')->with('success', 'data berhasil ditambahkan');
    }
    function edit(Lproduk $lproduk, Kategori $kategori ){
        $data['list_kategori'] = Kategori::all();
        $data['lproduk'] = $lproduk;
        return view('produk.listproduk.edit', $data);
    }
    public function update(Request $request, Lproduk $lproduk)
    {
        $validatedData = $request->validate([
            'status' => 'required|in:accepted,rejected,waiting',
        ]);
        $lproduk->name = request('name');
        $lproduk->category_id = request('category_id');
        $lproduk->status = $validatedData['status'];
        $lproduk->description = request('description');
        $lproduk->price = request('price');
        // @dd($lproduk);
        $lproduk->save();

        return redirect('/listproduk')->with('success', 'data berhasil ditambahkan');
    }
}
