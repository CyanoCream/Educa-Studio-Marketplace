<?php

namespace App\Http\Controllers;
use App\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AdminPelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggans = Pelanggan::all();

        return view('admin.pelanggan.index', [
            'pelanggans' => $pelanggans
        ]);
    }

    public function getPelanggan()
    {
        $pelanggans = Pelanggan::all();

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
        
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fileName = str_random(30).'.'.$foto->getClientOriginalExtension();
            $imageName = $fileName;
            $foto->move('images/', $fileName);
        } else {
            $fileName = 'noimage.png';
        }
        
        $pelanggan = new Pelanggan();
        $pelanggan->foto = $fileName;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->no_telp = $request->no_telp;
        $pelanggan->alamat_pel = $request->alamat_pel;
        $pelanggan->provinsi_pel = $request->provinsi_pel;
        $pelanggan->kota_pel = $request->kota_pel;
        $pelanggan->kecamatan_pel = $request->kecamatan_pel;
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
        $pelanggan = Pelanggan::find($id);
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
    public function update(Request $request, $id)
    {

        $pelanggan = Pelanggan::find($id);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fileName = str_random(30).'.'.$foto->getClientOriginalExtension();
            $imageName = $fileName;
            $foto->move('images/', $fileName);
        } else {
            $fileName = 'noimage.png';
        }
        
        $pelanggan->foto = $fileName;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->no_telp = $request->no_telp;
        $pelanggan->alamat_pel = $request->alamat_pel; 
        $pelanggan->provinsi_pel = $request->provinsi_pel;
        $pelanggan->kota_pel = $request->kota_pel;
        $pelanggan->kecamatan_pel = $request->kecamatan_pel;
        $pelanggan->update();

        return redirect(route('daftarPelanggan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id)->delete();
        return redirect()->back();
    }
}
