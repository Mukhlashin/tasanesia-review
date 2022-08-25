<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outlet;

class OutletController extends Controller
{
    public function index() {
        $outlet = Outlet::all();
        return view('table-outlet', compact('outlet'));
    }

    public function create()
    {
        // Method untuk menampilkan form create post
        return view('table-outlet');
    }

    public function store(Request $request)
    {            
        Outlet::create([
        'nama_outlet' => $request->nama_outlet
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
    }
}
