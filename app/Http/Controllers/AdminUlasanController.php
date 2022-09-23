<?php

namespace App\Http\Controllers;
use App\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ulasans = ulasan::all();

        return view('admin.ulasan.index', [
            'ulasans' => $ulasans
        ]);
    }

    //produk-detail review
    public function index_pd()
    {
        $ulasans = ulasan::all();
        
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
        return view('admin.ulasan.create');
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
            'id_user' => 'required|integer' ,
            'id_produk' => 'required|integer' ,
            'nama' => 'required|string|max:255' ,
            'email' => 'required|string|max:255' ,
            'penilaian' => 'required|string|max:255' ,
        ]);

        $ulasan = new ulasan($validatedData);
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
        
        $ulasan->nama = Auth::user()->name;
        $ulasan->id_user = $request->id_user;
        $ulasan->id_produk = $request->id_produk;
        $ulasan->nama = $request->nama;
        $ulasan->email = $request->email;
        $ulasan->penilaian = $request->penilaian;
        $ulasan->save();

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
        $ulasan = ulasan::find($id);
        return view('admin.ulasan.edit', [
            'ulasan' => $ulasan
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
