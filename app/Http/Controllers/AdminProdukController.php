<?php

namespace App\Http\Controllers;
use App\Produk;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProdukController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth::user()->role != 'admin')
        {
            return redirect()->back();
        }
        $produks = DB::table('users')
        ->join('tbl_produks', 'users.id', '=', 'tbl_produks.user_id')
        ->select('users.*', 'tbl_produks.*')
        ->get();
        // dd($produks);
        return view('admin.produk.index', [
            'produks' => $produks
        ]);
    }

    //admin penyelenggara
    public function index_p()
    {
        $produks = DB::table('users')
        ->join('tbl_produks', 'users.id', '=', 'tbl_produks.user_id')
        ->select('users.*', 'tbl_produks.*')
        ->get();
        $id = auth()->user()->id;
        $produks = Produk::where('user_id', $id)->get();
        // dd($produks);
        return view('Penyelenggara.produk.index', [
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
        $user = User::where('role','penyelenggara')->get();
        // dd($user);
        $penyelenggara = User::all();
        return view('admin.produk.create', [
            'user' => $user
        ]);
    }

    //admin penyelenggara
    public function create_p(Request $request)
    {
        $user = User::where('role','penyelenggara')->get();
        return view('Penyelenggara.produk.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        $produk = new produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->kategori = $request->kategori;
        $produk->harga_produk = $request->harga_produk;
        $produk->status_pertemuan = $request->status_pertemuan;
        $produk->stock = $request->stock;
        $produk->pertemuan = $request->pertemuan;
        $produk->waktu_temu = $request->waktu_temu;
        $produk->umur = $request->umur;
        $produk->keterangan = $request->keterangan;
        $produk->manfaat = $request->manfaat;
        $produk->bundling = $request->bundling;
        $produk->user_id = $request->user_id;
        $produk->save();

        return redirect(route('daftarProduk'));
    }

    //admin penyelenggara
    public function store_p(Request $request)
    {
        $produk = new produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->kategori = $request->kategori;
        $produk->harga_produk = $request->harga_produk;
        $produk->status_pertemuan = $request->status_pertemuan;
        $produk->stock = $request->stock;
        $produk->pertemuan = $request->pertemuan;
        $produk->waktu_temu = $request->waktu_temu;
        $produk->umur = $request->umur;
        $produk->keterangan = $request->keterangan;
        $produk->manfaat = $request->manfaat;
        $produk->bundling = $request->bundling;
        $produk->user_id = $request->user_id;
        $produk->save();

       
        // dd($penyelenggara);
        return redirect(route('daftarPenyelenggara_produk'));
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
        $user = User::all();
        $produk = produk::find($id);
        return view('admin.produk.edit', [
            'user' => $user,
            'produk' => $produk
        ]);
    }

    //admin penyelenggara
    public function edit_p($id)
    {
        $user = User::all();
        $produk = produk::find($id);
        return view('Penyelenggara.produk.edit', [
            'user' => $user,
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
    
        // $validatedData = $request->validate([
        //     'nama_produk' => 'required|string|max:255' ,
        //     'kategori' => 'required|string|max:255' ,
        //     'harga_produk' => 'required|string|max:255' ,
        //     'status_produk' => 'required|string|max:255' ,
        //     'stock' => 'required|integer' ,
        //     'pertemuan' => 'required|string|max:255' ,
        //     'waktu_temu' => 'required|integer' ,
        //     'umur' => 'required|string|max:255' ,
        //     'keterangan' => 'required|string|max:255' ,
        //     'manfaat' => 'required|string|max:255' ,
        //     'bundling' => 'required|string|max:255' ,
        //     'user_id' => 'required|integer' ,
        // ]);

        $produk = produk::find($produk);

        $produk->nama_produk = $request->nama_produk;
        $produk->kategori = $request->kategori;
        $produk->harga_produk = $request->harga_produk;
        $produk->status_pertemuan = $request->status_pertemuan;
        $produk->stock = $request->stock;
        $produk->pertemuan = $request->pertemuan;
        $produk->waktu_temu = $request->waktu_temu;
        $produk->umur = $request->umur;
        $produk->keterangan = $request->keterangan;
        $produk->manfaat = $request->manfaat;
        $produk->bundling = $request->bundling;
        $produk->user_id = $request->user_id;
        $produk->update();
        //user_id ditrequest dengan tabel user menggunakan select option
        return redirect(route('daftarProduk'));
    }

    //admin penyelenggara
    public function update_p(Request $request, $produk)
    {
    
        $produk = produk::find($produk);

        $produk->nama_produk = $request->nama_produk;
        $produk->kategori = $request->kategori;
        $produk->harga_produk = $request->harga_produk;
        $produk->status_pertemuan = $request->status_pertemuan;
        $produk->stock = $request->stock;
        $produk->pertemuan = $request->pertemuan;
        $produk->waktu_temu = $request->waktu_temu;
        $produk->umur = $request->umur;
        $produk->keterangan = $request->keterangan;
        $produk->manfaat = $request->manfaat;
        $produk->bundling = $request->bundling;
        $produk->user_id = $request->user_id;
        $produk->update();

        return redirect(route('daftarPenyelenggara_produk'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = produk::find($id)->delete();
        return redirect()->back();
    }

    //admin penyelenggara
    public function destroy_p($id)
    {
        $produk = produk::find($id)->delete();
        return redirect()->back();
    }
}
