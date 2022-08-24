<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $k = Kategori::all();
    //     return $k;
    // }
    // public function getKategori()
    // {
    //     $kategoris = Kategori::all();

    //     return $kategoris;
    $kategoris = kategori::all();
    return view('admin.kategori.index', [
        'kategoris' => $kategoris
    ]);
    }

    public function getKategori()
    {
        $kategoris = kategori::all();
        return $kategoris;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
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
            'nama-kategori' => 'required|string|max:255' ,
        ])->validate();

        $kategori = new kategori($validatedData);
        $kategori->save();

        return redirect(route('daftarKategori'));
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
        return view('admin.kategori.edit', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $validatedData = validator($request->all(), [
            'nama-kategori' => 'required|string|max:255' ,
        ])->validate();

        $kategori = new kategori($validatedData);
        $kategori->save();

        return redirect(route('daftarKategori'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori->delete();
        return redirect(route('daftarKategori'));
    }
}
