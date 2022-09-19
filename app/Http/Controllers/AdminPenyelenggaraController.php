<?php

namespace App\Http\Controllers;
use App\Penyelenggara;
use App\Produk;
use Illuminate\Http\Request;

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

    public function penyelenggaraindex()
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

    public function penyelenggaragetPenyelenggara()
    {
        $penyelenggaras = penyelenggara::all();

        return $penyelenggaras;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function penyelenggaracreate()
    {
        return view('admin.penyelenggara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function penyelenggarastore(Request $request)
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

        return redirect(route('penyelenggara.daftarPenyelenggara'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function penyelenggaraedit($id)
    {
        $penyelenggara = penyelenggara::find($id);
        return view('admin.penyelenggara.edit', [
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
    public function penyelenggaraupdate(Request $request, $penyelenggara)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function penyelenggaradestroy($id)
    {
        $penyelenggara = penyelenggara::find($id)->delete();
        return redirect()->back();
    }

    //admin-penyelenggara

    public function admin_p() {
        return view('Penyelenggara.dashboard');
    }
    public function admin_penyelenggara() {
        return view('Penyelenggara.penyelenggara.index');
    }
}
