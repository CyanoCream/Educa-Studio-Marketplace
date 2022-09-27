<?php

namespace App\Http\Controllers;
use App\Order;
use App\Produk;
use App\User;
use DB;
use Illuminate\Http\Request;
class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $orders = order::all();
        $orders = DB::table('tbl_produks')
        ->join('tbl_orders','tbl_orders.id_produk' , '=', 'tbl_produks.id' )
        // ->join('tbl_orders', 'users.id', '=', 'tbl_orders.id_penyelenggara')
        ->select('tbl_orders.nama_produk')
        ->get();
        // dd($orders);
        return view('admin.order.index', [
            'orders' => $orders
        ]);
    }

    public function getOrder()
    {
        $orders = order::all();

        return $orders;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $produks = Produk::all();
        // dd($produks);
        return view('admin.order.create',[
            'produks' => $produks,
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
        $validatedData = $request->validate([
            'status_order' => 'required|string|max:255' ,
            'id_penyelenggara' => 'required|integer' ,
            'jumlah_pesanan' => 'required|integer' ,
            'total_harga' => 'required|string|max:255' ,
            'kurir' => 'required|string|max:255' ,
            'alamat_pen' => 'required|string|max:255' ,
            'provinsi' => 'required|string|max:255' ,
            'kota' => 'required|string|max:255' ,
            'kecamatan' => 'required|string|max:255' ,
            'metode_pembayaran' => 'required|string|max:255' ,
            'nama_produk' => 'required|string|max:255' ,
        ]);
        $order = new order($validatedData);
        $order->save();

        return redirect(route('daftarOrder'));
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
        $order = order::find($id);
        return view('admin.order.edit', [
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $order)
    {
        $validatedData = $request->validate([
            'status_order' => 'required|string|max:255' ,
            'id_penyelenggara' => 'required|integer' ,
            'jumlah_pesanan' => 'required|integer' ,
            'total_harga' => 'required|string|max:255' ,
            'kurir' => 'required|string|max:255' ,
            'alamat_pen' => 'required|string|max:255' ,
            'provinsi' => 'required|string|max:255' ,
            'kota' => 'required|string|max:255' ,
            'kecamatan' => 'required|string|max:255' ,
            'metode_pembayaran' => 'required|string|max:255' ,
            'nama_produk' => 'required|string|max:255' ,
        ]);

        $order = order::find($order);

        $order->status_order = $request->status_order;
        $order->id_penyelenggara = $request->id_penyelenggara;
        $order->jumlah_pesanan = $request->jumlah_pesanan;
        $order->total_harga = $request->total_harga;
        $order->kurir = $request->kurir;
        $order->alamat_pen = $request->alamat_pen;
        $order->provinsi = $request->provinsi;
        $order->kota = $request->kota;
        $order->kecamatan= $request->kecamatan;
        $order->metode_pembayaran = $request->metode_pembayaran;
        $order->nama_produk = $request->nama_produk;
        $order->save();

        return redirect(route('daftarOrder'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = order::find($id)->delete();
        return redirect()->back();
    }
}
