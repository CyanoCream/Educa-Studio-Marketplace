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
    public function createtentang()
    {
        // 
    }
    public function edittentang()
    {
        // 
    }
    public function updatetentang()
    {
        // 
    }
    public function destroytentang()
    {
        //
    }
}
