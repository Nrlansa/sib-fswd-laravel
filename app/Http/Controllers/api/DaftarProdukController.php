<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\produk\Kategori;
use App\Models\produk\Lproduk;
use Illuminate\Http\Request;


class DaftarprodukController extends Controller
{
    public function index()
    {
        $listProduk = Lproduk::all();
        return response()->json(['data' => $listProduk]);
    }

    public function show($id)
    {
        $lproduk = Lproduk::findOrFail($id);
        return response()->json(['data' => $lproduk]);
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
            'category_id.required' => 'Kategori Wajib diisi',
            'price.required' => 'Isi dalam angka rupiah',
            'status.required' => 'Status wajib dipilih'
        ]);

        $lproduk = new Lproduk();
        $lproduk->name = $request->input('name');
        $lproduk->category_id = $request->input('category_id');
        $lproduk->status = $validatedData['status'];
        $lproduk->description = $request->input('description');
        $lproduk->price = $request->input('price');
        $lproduk->save();

        return response()->json(['message' => 'Data berhasil ditambahkan']);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'status' => 'required|in:accepted,rejected,waiting',
            'price' => 'required|numeric',
        ]);

        $lproduk = Lproduk::findOrFail($id);
        $lproduk->name = $request->input('name');
        $lproduk->category_id = $request->input('category_id');
        $lproduk->status = $validatedData['status'];
        $lproduk->description = $request->input('description');
        $lproduk->price = $request->input('price');
        $lproduk->save();

        return response()->json(['message' => 'Data berhasil diperbarui']);
    }

    public function destroy($id)
    {
        $lproduk = Lproduk::findOrFail($id);
        $lproduk->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }

}
