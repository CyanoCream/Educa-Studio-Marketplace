<?php

namespace App\Http\Controllers;
use App\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggans = pelanggan::all();

        return view('admin.pelanggan.index', [
            'pelanggans' => $pelanggans
        ]);
    }

    public function getPelanggan()
    {
        $pelanggans = pelanggan::all();

        return $pelanggans;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelanggan.create');
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
            'foto' => 'required|string|max:255' ,
            'waktu_daftar' => 'required|string|max:255' ,
            'nama_pelanggan' => 'required|string|max:255' ,
            'email_pelanggan' => 'required|string|max:255' ,
            'password' => 'required|string|max:255' ,
            'no_telp' => 'required|string|max:255' ,
            'alamat_pel' => 'required|string|max:255' ,
            'provinsi_pel' => 'required|string|max:255' ,
            'kota_pel' => 'required|string|max:255' ,
            'kecamatan_pel' => 'required|string|max:255' ,
            'level_user' => 'required|integer' ,
        ]);

        $pelanggan = new pelanggan($validatedData);
        $pelanggan->save();

        return redirect(route('daftarPelanggan'));
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
        $pelanggan = pelanggan::find($id);
        return view('admin.pelanggan.edit', [
            'pelanggan' => $pelanggan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pelanggan)
    {
        $validatedData = $request->validate([
            'foto' => 'required|string|max:255' ,
            'waktu_daftar' => 'required|string|max:255' ,
            'nama_pelanggan' => 'required|string|max:255' ,
            'email_pelanggan' => 'required|string|max:255' ,
            'password' => 'required|string|max:255' ,
            'no_telp' => 'required|string|max:255' ,
            'alamat_pel' => 'required|string|max:255' ,
            'provinsi_pel' => 'required|string|max:255' ,
            'kota_pel' => 'required|string|max:255' ,
            'kecamatan_pel' => 'required|string|max:255' ,
            'level_user' => 'required|integer' ,
        ]);

        $pelanggan = pelanggan::find($pelanggan);

        $pelanggan->foto = $request->foto;
        $pelanggan->waktu_daftar = $request->waktu_daftar;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->email_pelanggan = $request->email_pelanggan;
        $pelanggan->password = $request->password;
        $pelanggan->no_telp = $request->no_telp;
        $pelanggan->alamat_pel = $request->alamat_pel;
        $pelanggan->provinsi_pel = $request->provinsi_pel;
        $pelanggan->kota_pel = $request->kota_pel;
        $pelanggan->kecamatan_pel = $request->kecamatan_pel;
        $pelanggan->level_user = $request->level_user;
        $order->save();

        return redirect(route('daftarPelanggan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pelanggan)
    {
        $pelanggan->delete();
        return redirect(route('daftarPelanggan'));
    }
}
