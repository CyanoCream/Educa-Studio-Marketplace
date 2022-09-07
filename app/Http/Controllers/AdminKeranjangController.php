<?php

namespace App\Http\Controllers;
use App\Keranjang;
use Illuminate\Http\Request;

class AdminKeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keranjangs = keranjang::all();

        return view('admin.keranjang.index', [
            'keranjangs' => $keranjangs
        ]);
    }

    public function getKeranjang()
    {
        $keranjangs = keranjang::all();

        return $keranjangs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.keranjang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_produk' => 'required|integer' ,
            'qty_ker' => 'required|integer' ,
            'waktu' => 'required|string|max:255' ,
            'harga_produk' => 'required|integer' ,
            'packing' => 'required|string|max:255' ,
        ]);

        $keranjang = new keranjang($validatedData);
        $keranjang->save();

        return redirect(route('daftarKeranjang'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keranjang = keranjang::find($id);
        return view('admin.keranjang.edit', [
            'keranjang' => $keranjang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $keranjang)
    {
        $validatedData = $request->validate([
            'id_produk' => 'required|integer' ,
            'qty_ker' => 'required|integer' ,
            'waktu' => 'required|string|max:255' ,
            'harga_produk' => 'required|integer' ,
            'packing' => 'required|string|max:255' ,
        ]);

        $keranjang = keranjang::find($keranjang);

        $keranjang->id_produk = $request->id_produk;
        $keranjang->qty_ker = $request->qty_ker;
        $keranjang->waktu = $request->waktu;
        $keranjang->harga_produk = $request->harga_produk;
        $keranjang->packing = $request->packing;
        $keranjang->save();

        return redirect(route('daftarKeranjang'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keranjang = keranjang::find($id)->delete();
        return redirect()->back();
    }
}
