<?php

namespace App\Http\Controllers;
use App\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesertas = peserta::all();

        return view('admin.peserta.index', [
            'pesertas' => $pesertas
        ]);
    }

    public function getPeserta()
    {
        $pesertas = peserta::all();

        return $pesertas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.peserta.create');
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
            'tgl_pembayaran' => 'required|string|max:255' ,
            'jumlah_dana' => 'required|integer' ,
            'nama_peserta' => 'required|string|max:255' ,
            'nama_panggilan' => 'required|string|max:255' ,
            'jenis_kelamin' => 'required|string|max:255' ,
            'hubungan' => 'required|string|max:255' ,
        ]);

        $peserta = new peserta($validatedData);
        $peserta->save();

        return redirect(route('daftarPeserta'));
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
        $peserta = peserta::find($id);
        return view('admin.peserta.edit', [
            'peserta' => $peserta
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $peserta)
    {
        $validatedData = $request->validate([
            'id_produk' => 'required|integer' ,
            'tgl_pembayaran' => 'required|string|max:255' ,
            'jumlah_dana' => 'required|integer' ,
            'nama_peserta' => 'required|string|max:255' ,
            'nama_panggilan' => 'required|string|max:255' ,
            'jenis_kelamin' => 'required|string|max:255' ,
            'hubungan' => 'required|string|max:255' ,
        ]);

        $peserta = peserta::find($peserta);

        $peserta->id_produk = $request->id_produk;
        $peserta->tgl_pembayaran = $request->tgl_pembayaran;
        $peserta->jumlah_dana = $request->jumlah_dana;
        $peserta->nama_peserta = $request->nama_peserta;
        $peserta->nama_panggilan = $request->nama_panggilan;
        $peserta->jenis_kelamin = $request->jenis_kelamin;
        $peserta->hubungan = $request->hubungan;
        $peserta->save();

        return redirect(route('daftarPeserta'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peserta = peserta::find($id)->delete();
        return redirect()->back();
    }
}
