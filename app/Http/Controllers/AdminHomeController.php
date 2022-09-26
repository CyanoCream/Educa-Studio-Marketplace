<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\User;
use App\Tentang;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if(auth::user()->role != 'admin'){
        $produks = Produk::all();
        return view ('layout.master');
        
       }
       return view('admin.dashboard');

    }
    public function getUser()
    {
        $users = User::all();

        return $users;
    }

    public function index_p()
    {
        return view('Penyelenggara.dashboard');
    }

    public function indextentang()
    {
        $about = Tentang::all();
        // dd($about);
        return view('premium.index', [
            'about' => $about
        ]);  
    }
    public function createtoabout(Request $request)
    {
            return view('admin.about.create');
    }
    public function createabout(Request $request)
    {
        $about = new Tentang;
        $about->gambar = $request->gambar;
        $about->judul = $request->judul;
        $about->keterangan = $request->keterangan;
        $about->save();

        return view('admin.about.index');
    }

    public function indexabout()
    {
        $about = Tentang::all();
        // dd($about);
        return view('admin.about.index', [
            'about' => $about
        ]);    
    }
    public function edittentang(id $id)
    {
        $about = Tentang::find($id);
        return view('admin.about.edit', [
            'about' => $about
        ]);
    }
    public function updateabout()
    {
        $about = new Tentang;
        $about->gambar = $request->gambar;
        $about->judul = $request->judul;
        $about->keterangan = $request->keterangan;
        $about->update();
        return view('admin.about.edit', [
            'about' => $about
        ]);

    }
    public function destroyabout($id)
    {
        $about = Tentang::find('id', $id);
        return view('admin.about.edit', [
            'about' => $about
        ]);
    }
}
