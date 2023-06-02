<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use App\Models\produk\Kategori;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class KategoriController extends Controller
{
    function index()
    {
        $data['list_kategori'] = Kategori::all();
        return view('produk.kategori.index', $data);
    }
    function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => [
                'required',
                'max:255',
                Rule::unique('categories')->ignore($request->id),
            ],
        ], [
            'name.required' => 'Nama kategori harus diisi.',
            'name.max' => 'Nama kategori tidak boleh melebihi 255 karakter.',
            'name.unique' => 'Nama kategori sudah ada dalam sistem.',
        ]);

        $kategori = new Kategori();
        $kategori->name =  request('name');
        $kategori->save();

        return redirect('/admin/kategori')->with('success', 'data berhasil ditambahkan');
    }
    public function update(Request $request, Kategori $kategori)
    {
        $validatedData = $request->validate([
            'name' => [
                'required',
                'max:255',
                Rule::unique('kategori')->ignore($kategori->id),
            ],
        ], [
            'name.required' => 'Nama kategori harus diisi.',
            'name.max' => 'Nama kategori tidak boleh melebihi 255 karakter.',
            'name.unique' => 'Nama kategori sudah ada dalam sistem.',
        ]);
        $kategori->name = request('name');

        $kategori->save();

        return redirect('/admin/kategori')->with('success', 'Data berhasil diedit');
    }
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect('/admin/kategori')->with('success', 'Data Berhasil Dihapus');
    }
}
