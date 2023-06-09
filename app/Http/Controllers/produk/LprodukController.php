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
            'name' => 'required',
            'category_id' => 'required',
            'status' => 'required|in:accepted,rejected,waiting',
            'price' => 'required|numeric',
        ], [
            'name.required' => 'Nama Produk harus diisi.',
            'category_id.required'=>'Kategori Wajib diisi',
            'price.required' => 'isi dalam angka rupiah',
            'status.required'=>'status wajib di pilih'
        ]);
        $lproduk = new Lproduk();
        $lproduk->name = request('name');
        $lproduk->category_id = request('category_id');
        $lproduk->status = $validatedData['status'];
        $lproduk->description = request('description');
        $lproduk->price = request('price');
        $lproduk->save();

        return redirect('/admin/listproduk')->with('success', 'data berhasil ditambahkan');
    }
    function edit(Lproduk $lproduk, Kategori $kategori ){
        $data['list_kategori'] = Kategori::all();
        $data['lproduk'] = $lproduk;
        return view('produk.listproduk.edit', $data);
    }
    public function update(Request $request, Lproduk $lproduk)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'status' => 'required|in:accepted,rejected,waiting',
            'price' => 'required|numeric',
        ]);
        $lproduk->name = request('name');
        $lproduk->category_id = request('category_id');
        $lproduk->status = $validatedData['status'];
        $lproduk->description = request('description');
        $lproduk->price = request('price');
        
        $lproduk->save();

        return redirect('/admin/listproduk')->with('success', 'data berhasil ditambahkan');
    }

    function show(Lproduk $lproduk, $id, Kategori $kategori)
    {
        $lproduk = Lproduk::with('categories')->find($id);
        $data['lproduk'] = $lproduk;
        return view('produk.listproduk.show', $data);
    }

}



