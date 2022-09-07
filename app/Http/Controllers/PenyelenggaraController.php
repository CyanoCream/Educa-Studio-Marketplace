<?php

namespace App\Http\Controllers;
use App\Penyelenggara;
use Illuminate\Http\Request;

class PenyelenggaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyelenggaras = Penyelenggara::all();

        return view('penyelenggara.index', [
            'penyelenggaras' => $penyelenggaras
        ]);
    }

    public function getPenyelenggara()
    {
        $penyelenggaras = Penyelenggara::all();

        return $penyelenggaras;
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
            'nama_penyelenggara' => 'required|string|max:255' ,
            'icon_penyelenggara' => 'required|string|max:255' ,
            'kota_penyelenggara' => 'required|string|max:255' ,
            'deskripsi' => 'required|string|max:255' ,
            'jam_operasional' => 'required|string|max:255' ,
        ]);

        $penyelenggara = new penyelenggara($validatedData);
        $penyelenggara->save();

        return redirect(route('daftarPenyelenggara'));
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
        $penyelenggara = penyelenggara::find($id);
        return view('admin.penyelenggara.edit', [
            'penyelenggara' => $penyelenggara
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_produk' => 'required|integer' ,
            'nama_penyelenggara' => 'required|string|max:255' ,
            'icon_penyelenggara' => 'required|string|max:255' ,
            'kota_penyelenggara' => 'required|string|max:255' ,
            'deskripsi' => 'required|string|max:255' ,
            'jam_operasional' => 'required|string|max:255' ,
        ]);

        $penyelenggara = penyelenggara::find($penyelenggara);

        $penyelenggara->id_produk = $request->id_produk;
        $penyelenggara->nama_penyelenggara = $request->nama_penyelenggara;
        $penyelenggara->icon_penyelenggara = $request->icon_penyelenggara;
        $penyelenggara->kota_penyelenggara = $request->kota_penyelenggara;
        $penyelenggara->deskripsi = $request->deskripsi;
        $penyelenggara->jam_operasional = $request->jam_operasional;
        $penyelenggara->save();

        return redirect(route('daftarPenyelenggara'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penyelenggara->delete();
        return redirect(route('daftarPenyelenggara'));
    }
}
