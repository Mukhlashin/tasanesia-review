<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index() {
        $kategori = Kategori::all();
        return view('table-kategori', compact('kategori'));
    }

    public function create()
    {
        // Method untuk menampilkan form create post
        return view('table-kategori');
    }

    public function store(Request $request)
    {            
        Kategori::create([
        'nama_kategori' => $request->nama_kategori
        ]);

        // dd($request);

        return back();
    }

    public function show($id)
    {
        // Method untuk menampilkan single post / detail dari sebuah post
    }
    public function edit($id)
    {
        // Method untuk menampilkan halaman edit post
    }
    public function update(Request $request, $id)
    {
        // Method untuk melakukan update data post ke database
    }

    public function destroy(Request $request)
    {
        // Method untuk menghapus data post
        $kategori->delete();
        Alert::success('Success', 'Data kategori sudah di hapus');
        return back();
    }
}
