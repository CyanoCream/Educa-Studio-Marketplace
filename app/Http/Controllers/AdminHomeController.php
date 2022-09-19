<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\User;
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

}
