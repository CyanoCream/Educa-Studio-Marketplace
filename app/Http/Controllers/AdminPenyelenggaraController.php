<?php

namespace App\Http\Controllers;
use App\Penyelenggara;
use App\Produk;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        
        foreach ($penyelenggaras as &$p) {
            $produk = Produk::find($p['id_produk']);
            if($produk){
                $p['produk'] = $produk->nama_produk;
            }else{
                $p['produk'] = '-';
            }

        }

        return view('admin.penyelenggara.index', [
            'penyelenggaras' => $penyelenggaras
        ]);
    }

    //admin penyelenggara
    public function index_p()
    {
        $ide = auth()->user()->id;
        $penyelenggaras = penyelenggara::where('id_user', $ide)->get();
        
        foreach ($penyelenggaras as &$p) {
            $produk = Produk::find($p['id_produk']);
            if($produk){
                $p['produk'] = $produk->nama_produk;
            }else{
                $p['produk'] = '-';
            }

        }

        // dump($penyelenggaras);

        return view('Penyelenggara.penyelenggara.index', [
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

    //admin penyelenggara
    public function create_p()
    {
        return view('Penyelenggara.penyelenggara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('icon_penyelenggara')) {
            $icon_penyelenggara = $request->file('icon_penyelenggara');
            $fileName = str_random(30).'.'.$icon_penyelenggara->getClientOriginalExtension();
            $imageName = $fileName;
            $icon_penyelenggara->move('images/', $fileName);
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

    //admin penyelenggara
    public function store_p(Request $request)
    {

        if ($request->hasFile('icon_penyelenggara')) {
            $icon_penyelenggara = $request->file('icon_penyelenggara');
            $fileName = str_random(30).'.'.$icon_penyelenggara->getClientOriginalExtension();
            $imageName = $fileName;
            $icon_penyelenggara->move('images/', $fileName);
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

        return redirect(route('daftarPenyelenggara_penyelenggara'));
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

    //admin penyelenggara
    public function edit_p($id)
    {
        $penyelenggara = user::find($id);
        return view('Penyelenggara.penyelenggara.edit', [
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


        $penyelenggara = penyelenggara::find($penyelenggara);

        if ($request->hasFile('icon_penyelenggara')) {
            $icon_penyelenggara = $request->file('icon_penyelenggara');
            $fileName = str_random(30).'.'.$icon_penyelenggara->getClientOriginalExtension();
            $imageName = $fileName;
            $icon_penyelenggara->move('images/', $fileName);
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

    //admin penyelenggara
    public function update_p(Request $request, $penyelenggara)
    {


        
        $penyelenggara = user::find($penyelenggara);

        if ($request->hasFile('icon_penyelenggara')) {
            $icon_penyelenggara = $request->file('icon_penyelenggara');
            $fileName = str_random(30).'.'.$icon_penyelenggara->getClientOriginalExtension();
            $imageName = $fileName;
            $icon_penyelenggara->move('images/', $fileName);
        } else {
            $fileName = 'noimage.png';
        }
        

        $penyelenggara->icon_penyelenggara = $fileName;

        $penyelenggara->nama_penyelenggara = $request->nama_penyelenggara;
        $penyelenggara->kota_penyelenggara = $request->kota_penyelenggara;
        $penyelenggara->deskripsi = $request->deskripsi;
        $penyelenggara->jam_operasional = $request->jam_operasional;
        $penyelenggara->update();

        return redirect()->back();
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

    //admin penyelenggara
    public function destroy_p($id)
    {
        $penyelenggara = penyelenggara::find($id)->delete();
        return redirect()->back();
    }
}
