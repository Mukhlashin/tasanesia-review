<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;
use App\Models\Tanaman;


class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurnal = Jurnal::all();
        $tanaman = Tanaman::all();
        return view('table-jurnal', compact('jurnal','tanaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jurnal::create([
            'tanaman_id' => $request->tanaman_id,
            'stok_terbaru' => $request->stok_terbaru,
            'type' => $request->type,
            'keterangan' => $request->keterangan,
            'harga_terbaru' => $request->harga_terbaru,
            ]);

            if($request->type == 'penambahan') {
                return $this->updateTambahStock($request, $request->tanaman_id, $request->stok_terbaru);
            } else {
                return $this->updateKurangStock($request, $request->tanaman_id, $request->stok_terbaru);
            }
    
            // dd($request);
    
            return back();
    }

    public function updateTambahStock($id, $stock) {
        $product = Tanaman::find($id);
        $currentStock = $product->jumlah_stok;
        $updateStock = $currentStock + $stock;
        $product = Tanaman::where('id', $id)->update(['jumlah_stok' => $updateStock]);
        return back();
        // dd($request);
    }

    public function updateKurangStock(Request $request, $id, $stock) {
        $product = Tanaman::find($id);
        $currentStock = $product->jumlah_stok;
        $updateStock = $currentStock - $stock;
        $product = Tanaman::where('id', $id)->update(['jumlah_stok' => $updateStock]);
        return back();
        // dd($request);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function show(Jurnal $jurnal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurnal $jurnal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurnal $jurnal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurnal $jurnal)
    {
        //
    }
}
