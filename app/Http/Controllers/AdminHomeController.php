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


    //about
    public function indextentang()
    {
        $about = Tentang::all();
        dd($about);
        return view('premium.index', [
            'about' => $about
        ]);  
    }
    public function createtoabout(Request $request)
    {
            return view('admin.about.create');
    }
    public function storeabout(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $about = $request->file('gambar');
            $fileName = str_random(30).'.'.$about->getClientOriginalExtension();
            $imageName = $fileName;
            $about->move('images/', $fileName);
        } else {
            $fileName = 'noimage.png';
        }

        $about = new Tentang;
        $about->gambar = $fileName;
        $about->judul = $request->judul;
        $about->keterangan = $request->keterangan;
        $about->save();

        // return view('admin.about.index');
        return redirect(route('about'));
    }

    public function indexabout()
    {
        $about = Tentang::all();
        // dd($about);
        return view('admin.about.index', [
            'about' => $about
        ]);    
    }

    public function edittentang($id)
    {
        $about = Tentang::find($id);
        return view('admin.about.edit', [
            'about' => $about
        ]);
    }

    public function updateabout(Request $request, $about)
    {
        $about = Tentang::find($about);

        if ($request->hasFile('gambar')) {
            $about = $request->file('gambar');
            $fileName = str_random(30).'.'.$about->getClientOriginalExtension();
            $imageName = $fileName;
            $about->move('images/', $fileName);
        } else {
            $fileName = 'noimage.png';
        }

        $about->gambar = $fileName;
        $about->judul = $request->judul;
        $about->keterangan = $request->keterangan;
        $about->save();

        return view('admin.about.index', [
            'about' => $about
        ]);

    }

    public function destroyabout($id)
    {
        $about = Tentang::find($id)->delete();
        return redirect()->back();
    }
}
