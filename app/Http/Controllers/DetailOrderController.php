<?php

namespace App\Http\Controllers;
use App\Detail_order;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Produk;
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

        $detail_orders = Detail_order::all();
        return view('admin.detail_order.index', [
            'detail_orders' => $detail_orders
        ]);
    }

    public function getDetailOrder()
    {
        $detail_orders = Detail_order::all();

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
        $validatedData = $request->validate([
            'id_order' => 'required|integer' ,
            'id_produk' => 'required|integer' ,
            'id_varian_order' => 'required|integer' ,
            'qty_order' => 'required|integer' ,
        ]);

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
    public function show(Request $request)
    {
                
        if(auth()->user()){
            $id = auth()->user()->id;
            $produks = Produk::all();
            $orders = Order::where('id_user', $id)->where('status_order', 1)->where('id', 'like','%'.$request->cari.'%')->get();
            $sumorders = Order::where('id_user', $id)->where('status_order', 1)->sum('total_harga');
            $totalpesan = Order::where('id_user', $id)->where('status_order', 1)->count();
        }

        elseif(auth()->user()){
            $id = auth()->user()->id;
            $orders = Order::where('id_user', $id)->where('status_order', 1)->get();
            $sumorders = Order::where('id_user', $id)->where('status_order', 1)->sum('total_harga');
            $totalpesan = Order::where('id_user', $id)->where('status_order', 1)->count();
        }
        else{
            $orders = [];
            $sumorders = 0;
            $totalpesan = 0;
        }

        
        // dd ($orders);
        // dump($orders);
       
        return view('history.index', [
            'orders' => $orders,
            'sumorders' => $sumorders,
            'totalpesan' => $totalpesan,
            // 'request'
        ]);
    }

    public function filterhistoryup()
    {
                
        if(auth()->user()){
            $id = auth()->user()->id;
            $orders = Order::where('id_user', $id)->where('status_order', 1)->orderByRaw('updated_at - created_at DESC')->get();
            $sumorders = Order::where('id_user', $id)->where('status_order', 1)->sum('total_harga');
            $totalpesan = Order::where('id_user', $id)->where('status_order', 1)->count();
        }else{
            $orders = [];
            $sumorders = 0;
            $totalpesan = 0;
        }
       
        return view('history.desc', [
            'orders' => $orders,
            'sumorders' => $sumorders,
            'totalpesan' => $totalpesan
        ]);
    }

    public function filterhistorydown()
    {
                
        if(auth()->user()){
            $id = auth()->user()->id;
            $orders = Order::where('id_user', $id)->where('status_order', 1)->orderByRaw('updated_at - created_at ASC')->get();
            $sumorders = Order::where('id_user', $id)->where('status_order', 1)->sum('total_harga');
            $totalpesan = Order::where('id_user', $id)->where('status_order', 1)->count();
        }else{
            $orders = [];
            $sumorders = 0;
            $totalpesan = 0;
        }
       
        return view('history.asc', [
            'orders' => $orders,
            'sumorders' => $sumorders,
            'totalpesan' => $totalpesan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail_order = Detail_order::find($id);
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
    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'id_order' => 'required|integer' ,
        //     'id_produk' => 'required|integer' ,
        //     'id_varian_order' => 'required|integer' ,
        //     'qty_order' => 'required|integer' ,
        // ]);

        // $detail_order = Detail_order::find($id);

        // $detail_order->id_order = $request->id_order;
        // $detail_order->id_produk = $request->id_produk;
        // $detail_order->id_varian_order = $request->id_varian_order;
        // $detail_order->qty_order = $request->qty_order;
        // $detail_order->save();

        // return redirect(route('daftarDetail_Order'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail_order = Detail_order::find($id)->delete();
        return redirect()->back();
    }
}
