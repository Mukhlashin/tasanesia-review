<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanaman;
use App\Models\Kategori;
use App\Models\Outlet;
class TanamanController extends Controller
{
    public function index() {
        $tanaman = Tanaman::all();
        $kategori = Kategori::all();
        $outlet = Outlet::all();
        // dd($outlet);
        return view('table-tanaman', compact('tanaman','kategori','outlet'));
    }

    public function create()
    {
        // Method untuk menampilkan form create post
        return view('table-tanaman');
    }

    public function store(Request $request)
    {            
        $request->validate([
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file_name = $request->images->getClientOriginalName();
        $image = $request->images->move('img', $file_name);

        Tanaman::create([
        'nama_produk' => $request->nama_produk,
        'foto_produk' => $image,
        'outlet_id' => $request->outlet_id,
        'kategori_id' => $request->kategori_id,
        'deskripsi' => $request->deskripsi,
        'jumlah_stok' => $request->jumlah_stok,
        'kodefikasi' => $request->kodefikasi,
        'angkatan' => $request->angkatan,
        'jumlah_tanaman_seangkatan' => $request->jumlah_tanaman_seangkatan,
        'varian_tanaman' => $request->varian_tanaman,
        'jumlah_daun' => $request->jumlah_daun,
        'tinggi_daun' => $request->tinggi_daun,
        'kondisi_tanaman' => $request->kondisi_tanaman,
        'harga' =>$request->harga,
        'harga_grosir' =>$request->harga_grosir,
        'harga_amerika' =>$request->harga_amerika,
        'produsen' => $request->produsen,
        'nama_produsen' => $request->nama_produsen]);

        // dd($request);

        return back();
    }
    public function show($id)
    {
        // Method untuk menampilkan single post / detail dari sebuah post
    }
    public function edit($id)
    {
        {
            $data = Product::find($id);
            return view('edit-tanaman', ['data' => $data]);
        }
    }
    public function update(Request $request, $id)
    {
        // $data = Product::find($id);
    }

    public function destroy(Request $request)
    {
        // Method untuk menghapus data post
        $request->destroy();
        Alert::success('Success', 'Data Product sudah di hapus');
        return back();
    }

    public function search()
    {

        $kategori = Kategori::all();
        $outlet = Outlet::all();
        $search_text = $_GET['query'];
        $tanaman = Tanaman::where('nama_produk', 'LIKE', '%'.$search_text.'%')->get();  
        // $product = Product::all();
        return view('table-tanaman', compact('tanaman','kategori','outlet'));
    }
}

