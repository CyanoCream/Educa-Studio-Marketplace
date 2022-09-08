<?php

namespace App\Http\Controllers;
use App\Penyelenggara;
use Illuminate\Http\Request;

class AdminPenyelenggaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyelenggaras = penyelenggara::all();

        return view('admin.penyelenggara.index', [
            'penyelenggaras' => $penyelenggaras
        ]);
    }

    public function getPenyelenggara()
    {
        $penyelenggaras = penyelenggara::all();

        return $penyelenggaras;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penyelenggara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'id_produk' => 'required|integer' ,
        //     'icon_penyelenggara' => 'required|string|max:255' ,
        //     'nama_penyelenggara' => 'required|string|max:255' ,
        //     'kota_penyelenggara' => 'required|string|max:255' ,
        //     'deskripsi' => 'required|string|max:255' ,
        //     'jam_operasional' => 'required|string|max:255' ,
        // ]);

        // $penyelenggara = penyelenggara::find($penyelenggara);

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $fileName = str_random(30).'.'.$icon->getClientOriginalExtension();
            $imageName = $fileName;
            $icon->move('upload/', $fileName);
        } else {
            $fileName = 'noimage.png';
        }

        $penyelenggara = new penyelenggara();

        $penyelenggara->id_produk = $request->id_produk;
        $penyelenggara->icon_penyelenggara = $fileName;
        $penyelenggara->nama_penyelenggara = $request->nama_penyelenggara;
        $penyelenggara->kota_penyelenggara = $request->kota_penyelenggara;
        $penyelenggara->deskripsi = $request->deskripsi;
        $penyelenggara->jam_operasional = $request->jam_operasional;
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
    public function update(Request $request, $penyelenggara)
    {
        // $validatedData = $request->validate([
        //     'id_produk' => 'required|integer' ,
        //     'nama_penyelenggara' => 'required|string|max:255' ,
        //     'icon_penyelenggara' => 'required|string|max:255' ,
        //     'kota_penyelenggara' => 'required|string|max:255' ,
        //     'deskripsi' => 'required|string|max:255' ,
        //     'jam_operasional' => 'required|string|max:255' ,
        // ]);

        $penyelenggara = penyelenggara::find($penyelenggara);

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $fileName = str_random(30).'.'.$icon->getClientOriginalExtension();
            $imageName = $fileName;
            $icon->move('upload/', $fileName);
        } else {
            $fileName = 'noimage.png';
        }

        $penyelenggara->id_produk = $request->id_produk;
        $penyelenggara->icon_penyelenggara = $fileName;
        $penyelenggara->nama_penyelenggara = $request->nama_penyelenggara;
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
        $penyelenggara = penyelenggara::find($id)->delete();
        return redirect()->back();
    }
}
