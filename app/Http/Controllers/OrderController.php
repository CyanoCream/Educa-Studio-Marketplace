<?php

namespace App\Http\Controllers;
use App\Order;
use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $orders = Order::where('id_user', $id)->get();
        $sumorders = Order::where('id_user', $id)->sum('total_harga');
        
        

        return view('pesanan.index', [
            'orders' => $orders,
            'sumorders' => $sumorders
        ]);
    }
    public function navindex()
    {
        
        if(auth()->user()){
            $id = auth()->user()->id;
            $orders = Order::where('id_user', $id)->where('status_order', 0)->get();
            $sumorders = Order::where('id_user', $id)->where('status_order', 0)->sum('total_harga');
            $totalpesan = Order::where('id_user', $id)->where('status_order', 0)->count();
        }else{
            $orders = [];
            $sumorders = 0;
            $totalpesan = 0;
        }
    
        return view('layout.master', [
            'orders' => $orders,
            'sumorders' => $sumorders,
            'totalpesan' => $totalpesan
        ]);
    }
    public function nav2index()
    {
        
        if(auth()->user()){
            $id = auth()->user()->id;
            $orders = Order::where('id_user', $id)->where('status_order', 0)->get();
            $sumorders = Order::where('id_user', $id)->where('status_order', 0)->sum('total_harga');
            $totalpesan = Order::where('id_user', $id)->where('status_order', 0)->count();
        }else{
            $orders = [];
            $sumorders = 0;
            $totalpesan = 0;
        }
       
        return view('katalog.index', [
            'orders' => $orders,
            'sumorders' => $sumorders,
            'totalpesan' => $totalpesan
        ]);
    }

    public function navpesanan(Request $request)
    {
       
           

        if(auth()->user()){
            $id = auth()->user()->id;
            $orders = Order::where('id_user', $id)->where('status_order', 0)->where('nama_produk', 'like','%'.$request->cari.'%')->get();
            $sumorders = Order::where('id_user', $id)->where('status_order', 0)->sum('total_harga');
            $totalpesan = Order::where('id_user', $id)->where('status_order', 0)->count();
            
        }
        elseif(auth()->user()){

            $id = auth()->user()->id;
            $orders = Order::where('id_user', $id)->where('status_order', 0)->get();
            $sumorders = Order::where('id_user', $id)->where('status_order', 0)->sum('total_harga');
            $totalpesan = Order::where('id_user', $id)->where('status_order', 0)->count();
        }
        else{
            $orders = [];
            $sumorders = 0;
            $totalpesan = 0;
        }
    //    dd($orders);
        return view('pesanan.index', [
            'orders' => $orders,
            'sumorders' => $sumorders,
            'totalpesan' => $totalpesan
        ]);
    }

    public function getOrder()
    {
        $orders = Order::all();

        return view('layout.navbar', [
            'orders' => $orders
        ]);
    }

    public function getDataOrder()
    {
        $orders = Order::all();

        return view('layouts.index', [
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoice($invoice)
    {
        if(auth()->user()){
            $id = auth()->user()->id;
            $orders = Order::where('id_user', $id)->where('status_order', 1)->where('id', $invoice)->first();
            // $sumorders = Order::where('id_user', $id)->sum('total_harga');
            // $totalpesan = Order::where('id_user', $id)->count();
        }


        else{
            $orders = [];
            // $sumorders = 0;
            // $totalpesan = 0;
        }
        // dd ($orders);
       
        return view('history.invoice', [
            'orders' => $orders,
            // 'sumorders' => $sumorders,
            // 'totalpesan' => $totalpesan,
            // 'request'
        ]);
    }

    public function orderup(Request $request)
    {
        if(auth()->user()){
            $id = auth()->user()->id;
            $orders = Order::where('id_user', $id)->where('status_order', 0)->where('nama_produk', 'like','%'.$request->cari.'%')->orderByRaw('updated_at - created_at DESC')->get();
            $sumorders = Order::where('id_user', $id)->where('status_order', 0)->sum('total_harga');
            $totalpesan = Order::where('id_user', $id)->where('status_order', 0)->count();
         
        }else{
            $orders = [];
            $sumorders = 0;
            $totalpesan = 0;
        }
    //    dd($orders);
        return view('pesanan.indexdesc', [
            'orders' => $orders,
            'sumorders' => $sumorders,
            'totalpesan' => $totalpesan
        ]);
    }

    public function orderdown(Request $request)
    {
        if(auth()->user()){
            $id = auth()->user()->id;
            $orders = Order::where('id_user', $id)->where('status_order', 0)->where('nama_produk', 'like','%'.$request->cari.'%')->orderByRaw('updated_at - created_at ASC')->get();
            $sumorders = Order::where('id_user', $id)->where('status_order', 0)->sum('total_harga');
            $totalpesan = Order::where('id_user', $id)->where('status_order', 0)->count();
         
        }else{
            $orders = [];
            $sumorders = 0;
            $totalpesan = 0;
        }
    //    dd($orders);
        return view('pesanan.indexasc', [
            'orders' => $orders,
            'sumorders' => $sumorders,
            'totalpesan' => $totalpesan
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
        $orders = Order::where('id_user', Auth::id())->where('status_order',0)->get();
        foreach ($orders as $pesanan) {
            
            $barang = Produk::where('id', $pesanan->id_produk)->first();
            $barang->stock = $barang->stock-$pesanan->jumlah_pesanan;
            $barang->update();
            $pesanan->status_order = 1;
            $pesanan->alamat_pen = auth()->user()->alamat;
            $pesanan->provinsi = auth()->user()->provinsi;
            $pesanan->kota = auth()->user()->kota;
            $pesanan->kecamatan = auth()->user()->kecamatan;
            $pesanan->kurir = $request->kurir;
            $pesanan->metode_pembayaran = $request->metode_pembayaran;
            $pesanan->update(); 

        }
        
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $checkout = Order::where('user_id', Auth::user()->id)->where('status_order',0)->first();
        
        // for(i=1, i == where('status_order',0),i++)
       
    //    $detail_order = Order::insert();

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
        $orders= Order::find($id)->delete();
        return redirect()->back();
    }
}
