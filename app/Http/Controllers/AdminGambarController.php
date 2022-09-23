<?php

namespace App\Http\Controllers;
use App\Gambar;
use App\Produk;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;

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

    //admin penyelenggara
    public function index_p()
    {
        $id = auth()->user()->id;
        
        $gambars = Gambar::where('user_id', $id)->get();
        // dd($gambars);

        return view('Penyelenggara.gambar.index', [
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

    //admin penyelenggara
    public function create_p()
    {
        return view('Penyelenggara.gambar.create');
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
        $gambar->user_id = $request->user_id;
        $gambar->save();

        return redirect(route('daftarGambar'));
    }


    //admin penyelenggara
    public function store_p(Request $request)
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
        $gambar->user_id = $request->user_id;
        $gambar->save();

        return redirect(route('daftarPenyelenggara_gambar'));
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

    //admin penyelenggara
    public function edit_p($id)
    {
        $gambar = Gambar::find($id);
        return view('Penyelenggara.gambar.edit', [
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
        $gambar->user_id = $request->user_id;
        $gambar->save();

        return redirect(route('daftarGambar'));
    }

    //admin penyelenggara
    public function update_p(Request $request, $gambar)
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
        $gambar->user_id = $request->user_id;
        $gambar->save();

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
        $gambar = Gambar::find($id)->delete();
        return redirect()->back();
    }



    public function destroy_p($id)
    {
        $gambar = Gambar::find($id)->delete();
        return redirect()->back();
    }
}