<?php

namespace App\Http\Controllers;
use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
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
        $produks = Produk::all();

        return view('produk.index', [
            'produks' => $produks
        ]);
    }

    public function getProduk()
    {
        $produks = Produk::all();
        
        return $produks;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();

        $produk = new Produk($data);
        $produk->save();

        $status = 400;
        $message = "Gagal menyimpan product!";

        if($produk){
            $status = 200;
            $message = "Berhasil menyimpan product!";
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ]);
    }

    public function insertProduk(Request $request)
    {
        $data = $request->all();

        $produk = new Produk($data);
        $produk->save();

        $status = 400;
        $message = "Gagal menyimpan product!";

        if($produk){
            $status = 200;
            $message = "Berhasil menyimpan product!";
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteProduk(Request $request)
    {
        if (request()->ajax()) {
            $id = $request->data;

            $produk = Produk::find($id);

            $produk->delete();

            return "sukses";
        }
    }
}
