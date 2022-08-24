<?php

namespace App\Http\Controllers;
use App\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
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
        $validatedData = validator($request->all(), [
            'id_produk' => 'required|string|max:255' ,
            'qty_ker' => 'required|string|max:255' ,
            'waktu' => 'required|string|max:255' ,
            'harga_produk' => 'required|string|max:255' ,
            'packing' => 'required|string|max:255' ,
        ])->validate();

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
    public function update(Request $request, Keranjang $keranjang)
    {
        $validatedData = validator($request->all(), [
            'id_produk' => 'required|string|max:255' ,
            'qty_ker' => 'required|string|max:255' ,
            'waktu' => 'required|string|max:255' ,
            'harga_produk' => 'required|string|max:255' ,
            'packing' => 'required|string|max:255' ,
        ])->validate();

        $keranjang = new keranjang($validatedData);
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
        $keranjang->delete();
        return redirect(route('daftarKeranjang'));
    }
}
