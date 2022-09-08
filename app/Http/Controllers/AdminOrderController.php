<?php

namespace App\Http\Controllers;
use App\Order;
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
            'status_order' => 'required|string|max:255' ,
            'id_produk' => 'required|integer' ,
            'id_penyelenggara' => 'required|integer' ,
            'jumlah_pesanan' => 'required|integer' ,
            'kurir' => 'required|string|max:255' ,
            'alamat_pen' => 'required|string|max:255' ,
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
            'id_produk' => 'required|integer' ,
            'id_penyelenggara' => 'required|integer' ,
            'jumlah_pesanan' => 'required|integer' ,
            'kurir' => 'required|string|max:255' ,
            'alamat_pen' => 'required|string|max:255' ,
        ]);

        $order = order::find($order);

        $order->status_order = $request->status_order;
        $order->id_produk = $request->id_produk;
        $order->id_penyelenggara = $request->id_penyelenggara;
        $order->jumlah_pesanan = $request->jumlah_pesanan;
        $order->kurir = $request->kurir;
        $order->alamat_pen = $request->alamat_pen;
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
