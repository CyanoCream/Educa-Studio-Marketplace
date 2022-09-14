<?php

namespace App\Http\Controllers;
use App\Gambar;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminGambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambars = Gambar::all();

        return view('admin.gambar.index', [
            'gambars' => $gambars
        ]);
    }

    public function getGambar()
    {
        $gambars = Gambar::all();

        return $gambars;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gambar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $fileName = str_random(30).'.'.$gambar->getClientOriginalExtension();
            $imageName = $fileName;
            $gambar->move('images/', $fileName);
        } else {
            $fileName = 'noimage.png';
        }
        

        $gambar = new Gambar();
        $gambar->gambar = $fileName;
        $gambar->id_produk =  $request->id_produk;
        $gambar->save();

        return redirect(route('daftarGambar'));
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
        $gambar = Gambar::find($id);
        return view('admin.gambar.edit', [
            'gambar' => $gambar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $gambar)
    {
                
        $gambar = Gambar::find($gambar);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $fileName = str_random(30).'.'.$gambar->getClientOriginalExtension();
            $imageName = $fileName;
            $gambar->move('images/', $fileName);
        } else {
            $fileName = 'noimage.png';
        }

        $gambar->gambar = $request->gambar;
        $gambar->id_produk = $request->id_produk;
        $gambar->save();

        return redirect(route('daftarGambar'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
   

    $gambar = Gambar::find($id)->delete();
        return redirect()->back();
    }

    public function penyelenggaraindex()
    {
        $gambars = Gambar::all();

        return view('admin.gambar.index', [
            'gambars' => $gambars
        ]);
    }

    public function penyelenggaragetGambar()
    {
        $gambars = Gambar::all();

        return $gambars;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function penyelenggaracreate()
    {
        return view('admin.gambar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function penyelenggarastore(Request $request)
    {
        
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $fileName = str_random(30).'.'.$gambar->getClientOriginalExtension();
            $imageName = $fileName;
            $gambar->move('images/', $fileName);
        } else {
            $fileName = 'noimage.png';
        }
        

        $gambar = new Gambar();
        $gambar->gambar = $fileName;
        $gambar->id_produk =  $request->id_produk;
        $gambar->save();

        return redirect(route('daftarGambar'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function penyelenggarashow($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function penyelenggaraedit($id)
    {
        $gambar = Gambar::find($id);
        return view('admin.gambar.edit', [
            'gambar' => $gambar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function penyelenggaraupdate(Request $request, $gambar)
    {
                
        $gambar = Gambar::find($gambar);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $fileName = str_random(30).'.'.$gambar->getClientOriginalExtension();
            $imageName = $fileName;
            $gambar->move('images/', $fileName);
        } else {
            $fileName = 'noimage.png';
        }

        $gambar->gambar = $request->gambar;
        $gambar->id_produk = $request->id_produk;
        $gambar->save();

        return redirect(route('daftarGambar'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function penyelenggaradestroy($id)
    {
   

    $gambar = Gambar::find($id)->delete();
        return redirect()->back();
    }
}