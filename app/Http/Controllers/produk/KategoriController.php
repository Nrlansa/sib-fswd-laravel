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
    function store()
    {
        $kategori = new Kategori();
        $kategori->name =  request('name');
        $kategori->save();

        return redirect('/kategori')->with('success', 'data berhasil ditambahkan');
    }
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect('/kategori')->with('success', 'Data Berhasil Dihapus');
    }
}
