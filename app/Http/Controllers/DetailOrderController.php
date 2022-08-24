<?php

namespace App\Http\Controllers;
use App\Detail_order;
use Illuminate\Http\Request;

class DetailOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_orders = detail_order::all();
        return view('admin.detail_order.index', [
            'detail_orders' => $detail_orders
        ]);
    }

    public function getDetailOrder()
    {
        $detail_orders = detail_order::all();

        return $detail_orders;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.detail_order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = validator($request->all(), [
            'id_order' => 'required|string|max:255' ,
            'id_produk' => 'required|string|max:255' ,
            'id_varian_order' => 'required|string|max:255' ,
            'qty_order' => 'required|string|max:255' ,
        ])->validate();

        $detail_order = new Detail_order($validatedData);
        $detail_order->save();

        return redirect(route('daftarDetail_Order'));
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
        return view('admin.detail_order.edit', [
            'detail_order' => $detail_order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailOrder $detail_order)
    {
        $validatedData = validator($request->all(), [
            'id_order' => 'required|string|max:255' ,
            'id_produk' => 'required|string|max:255' ,
            'id_varian_order' => 'required|string|max:255' ,
            'qty_order' => 'required|string|max:255' ,
        ])->validate();

        $detail_order = new detail_order($validatedData);
        $detail_order->save();

        return redirect(route('daftarDetail_Order'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail_order->delete();
        return redirect(route('daftarDetail_Order'));
    }
}
