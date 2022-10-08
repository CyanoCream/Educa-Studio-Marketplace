<?php

namespace App\Http\Controllers;
use App\Ulasan;
use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;

class AdminUlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ulasans = ulasan::all();
        // $produks = Produk::where('id', )->get();
        // return $id;

        $ulasans = DB::table('tbl_ulasans')
            ->join('tbl_produks', 'tbl_ulasans.id_produk', '=', 'tbl_produks.id')
            ->select('tbl_ulasans.*', 'tbl_produks.*')
            ->get();

        // return $ulasans;    
        return view('admin.ulasan.index', [
            'ulasans' => $ulasans,
        ]);
    }

    //produk-detail review
    public function index_pd()
    {
        $ulasans = ulasan::all();
        // return $ulasan;
        return view('produk_detail.index', [
            'ulasans' => $ulasans
        ]);
    }

    public function getUlasan()
    {
        $ulasans = ulasan::all();

        return $ulasans;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = User::all();
        $produks = Produk::all();
        return view('admin.ulasan.create',[
            'produks' => $produks,
            'user' => $user
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
        // $validatedData = $request->validate([
        //     'id_user' => 'required|integer' ,
        //     'id_produk' => 'required|integer' ,
        //     'nama' => 'required|string|max:255' ,
        //     'email' => 'required|string|max:255' ,
        //     'penilaian' => 'required|string|max:255' ,
        // ]);

        $ulasan = new ulasan();
        
        $ulasan->id_user = $request->id_user;
        $ulasan->id_produk = $request->id_produk;
        $ulasan->nama = $request->nama;
        $ulasan->email = $request->email;
        $ulasan->penilaian = $request->penilaian;
        $ulasan->save();

        return redirect(route('daftarUlasan'));
    }

    //produk-detail review
    public function store_pd(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nama' => 'required|string|max:255' ,
        //     // 'email' => 'required|string|max:255' ,
        //     'penilaian' => 'required|string|max:255' ,
        // ]);

        $ulasan = new ulasan();
        
        $ulasan->id_user = Auth::user()->id;
        $ulasan->id_produk = $request->id_produk;
        $ulasan->nama = Auth::user()->name;
        $ulasan->email = Auth::user()->email;
        $ulasan->bintang = $request->bintang;
        $ulasan->penilaian = $request->penilaian;
        $ulasan->save();
        
        
        // $bin = Ulasan::where('id_produk', $id)->pluck('bintang')->avg();
        // $produk = Produk::find('id_produk');
        // $produk->bintang = $request->bintang;
        // $produk->update();



        // return redirect(route('daftarUlasan_pd'));
        return redirect()->back();
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
        $produks = Produk::all();
        $ulasan = ulasan::find($id);
        // return $user;
        return view('admin.ulasan.edit', [
            'ulasan' => $ulasan,
            'produk' => $produks,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ulasan)
    {
        $validatedData = $request->validate([
            'id_user' => 'required|integer' ,
            'id_produk' => 'required|integer' ,
            'nama' => 'required|string|max:255' ,
            'email' => 'required|string|max:255' ,
            'penilaian' => 'required|string' ,
        ]);

        $ulasan = ulasan::find($ulasan);

        $ulasan->id_user = $request->id_user;
        $ulasan->id_produk = $request->id_produk;
        $ulasan->nama = $request->nama;
        $ulasan->email = $request->email;
        $ulasan->penilaian = $request->penilaian;
        $ulasan->save();

        return redirect(route('daftarUlasan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ulasan = Ulasan::find($id)->delete();
        return redirect()->back();
    }

    //produk-detail review
    public function destroy_pd($id)
    {
        $ulasan = Ulasan::find($id)->delete();
        return redirect()->back();
    }
}
