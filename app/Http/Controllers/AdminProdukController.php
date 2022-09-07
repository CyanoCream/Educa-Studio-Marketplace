<?php

namespace App\Http\Controllers;
use App\Produk;
use Illuminate\Http\Request;

class AdminProdukController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = produk::all();
        return view('admin.produk.index', [
            'produks' => $produks
        ]);
    }

    public function getProduk()
    {
        $produks = produk::all();
        return $produks;
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create(Request $request)
    {
        return view('admin.produk.create');
        // $data = $request->all();

        // $produk = new Produk($data);
        // $produk->save();

        // $status = 400;
        // $message = "Gagal menyimpan product!";

        // if($produk){
        //     $status = 200;
        //     $message = "Berhasil menyimpan product!";
        // }

        // return response()->json([
        //     'status' => $status,
        //     'message' => $message,
        //     'data' => $data
        // ]);
    }

    // public function insertProduk(Request $request)
    // {
    //     $data = $request->all();

    //     $produk = new Produk($data);
    //     $produk->save();

    //     $status = 400;
    //     $message = "Gagal menyimpan product!";

    //     if($produk){
    //         $status = 200;
    //         $message = "Berhasil menyimpan product!";
    //     }

    //     return response()->json([
    //         'status' => $status,
    //         'message' => $message,
    //         'data' => $data
    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_kategori' => 'required|integer' ,
            'nama_produk' => 'required|string|max:255' ,
            'harga_produk' => 'required|integer' ,
            'pertemuan' => 'required|string|max:255' ,
            'waktu_temu' => 'required|integer' ,
            'umur' => 'required|string|max:255' ,
            'keterangan' => 'required|string' ,
            'manfaat' => 'required|string' ,
            'bundling' => 'required|string|max:255' ,
        ]);

        $produk = new produk($validatedData);
        $produk->save();

        return redirect(route('daftarProduk'));
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
        $produk = produk::find($id);
        return view('admin.produk.edit', [
            'produk' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $produk)
    {
    
        $validatedData = $request->validate([
            'id_kategori' => 'required|integer' ,
            'nama_produk' => 'required|string|max:255' ,
            'harga_produk' => 'required|integer' ,
            'pertemuan' => 'required|string|max:255' ,
            'waktu_temu' => 'required|integer' ,
            'umur' => 'required|string|max:255' ,
            'keterangan' => 'required|string' ,
            'manfaat' => 'required|string' ,
            'bundling' => 'required|string|max:255' ,
        ]);

        $produk = produk::find($produk);

        $produk->id_kategori = $request->id_kategori;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->pertemuan = $request->pertemuan;
        $produk->waktu_temu = $request->waktu_temu;
        $produk->umur = $request->umur;
        $produk->keterangan = $request->keterangan;
        $produk->manfaat = $request->manfaat;
        $produk->bundling = $request->bundling;
        $produk->save();

        return redirect(route('daftarProduk'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($produk)
    {
        // if (request()->ajax()) {
        //     $id = $request->data;

        //     $produk = Produk::find($id);

        //     $produk->delete();

        //     return "sukses";
        // }
        $produk->delete();
        return redirect(route('daftarProduk'));
    }
}
