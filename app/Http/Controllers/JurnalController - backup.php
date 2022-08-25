<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreJurnalRequest;
use App\Models\Jurnal;
use App\Models\Tanaman;

class JurnalController extends Controller
{
    public function index() {
        $jurnal = Jurnal::all();
        $tanaman = Tanaman::all();
        return view('table-jurnal', compact('jurnal','tanaman'));
    }

    public function store(StoreJurnalRequest $request)
    {            
        Jurnal::create([
        'tanaman_id' => $request->tanaman_id,
        'stok_terbaru' => $request->stok_terbaru,
        'type' => $request->type,
        'keterangan' => $request->keterangan,
        'harga_terbaru' => $request->harga_terbaru,
        ]);

        // dd($request);

        return back();
    }
}
