<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order::all();

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
        return view('admin.order.create');
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
            'id_pelanggan' => 'required|integer' ,
            'status_order' => 'required|string|max:255' ,
            'id_produk' => 'required|integer' ,
            'id_penyelenggara' => 'required|string|max:255' ,
            'pengiriman' => 'required|string|max:255' ,
            'kurir' => 'required|string|max:255' ,
            'alamat_pen' => 'required|string|max:255' ,
            'provinsi_pen' => 'required|string|max:255' ,
            'kota_pen' => 'required|string|max:255' ,
            'kecamatan_pen' => 'required|string|max:255' ,
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
            'id_pelanggan' => 'required|integer' ,
            'status_order' => 'required|string|max:255' ,
            'id_produk' => 'required|integer' ,
            'id_penyelenggara' => 'required|string|max:255' ,
            'pengiriman' => 'required|string|max:255' ,
            'kurir' => 'required|string|max:255' ,
            'alamat_pen' => 'required|string|max:255' ,
            'provinsi_pen' => 'required|string|max:255' ,
            'kota_pen' => 'required|string|max:255' ,
            'kecamatan_pen' => 'required|string|max:255' ,
        ]);

        $order = order::find($order);

        $order->id_pelanggan = $request->id_pelanggan;
        $order->status_order = $request->status_order;
        $order->id_produk = $request->id_produk;
        $order->id_penyelenggara = $request->id_penyelenggara;
        $order->pengiriman = $request->pengiriman;
        $order->kurir = $request->kurir;
        $order->alamat_pen = $request->alamat_pen;
        $order->provinsi_pen = $request->provinsi_pen;
        $order->kota_pen = $request->kota_pen;
        $order->kecamatan_pen = $request->kecamatan_pen;
        $order->save();

        return redirect(route('daftarOrder'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($order)
    {
        $order->delete();
        return redirect(route('daftarOrder'));
    }
}
