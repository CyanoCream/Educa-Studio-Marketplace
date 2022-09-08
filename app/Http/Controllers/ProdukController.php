<?php

namespace App\Http\Controllers;
use App\Produk;
use App\Order;
use Illuminate\Http\Request;
use Auth;

class ProdukController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $produks = Produk :: where('stock','=',5)->get();
    
        $produks = Produk::all();

        return view('produk.index', [
            'produks' => $produks
        ]);
    }

    public function getProduk()
    {
        $produks = Produk::with('gambar','penyelenggara')->get();
        // $gambars = Gambar::all();
        // $produks = Produk::with('gambar')->where('stock','<=',10)->get();

        return $produks;
    }

    public function getProdukLimited()
    {

        $limited = Produk::with('gambar')->where('stock','<=',10)->get();
        return $limited;
    }

    public function getProdukNew()
    {

        $new = Produk::with('gambar')->orderByRaw('updated_at - created_at DESC')->get();
        return $new;
    }

    public function getProdukPopular()
    {

        $popular = Produk::with('gambar')->where('kategori','Gratis')->get();
        return $popular;
    }

    public function getProdukPilihan()
    {

        $pilihan = Produk::with('gambar')->where('kategori','Pilihan')->get();
        return $pilihan;
    }

    public function getProdukAktivitas()
    {

        $aktivitas = Produk::with('gambar')->where('kategori','Aktivitas')->get();
        return $aktivitas;
    }

    public function getProdukKursus()
    {

        $kursus = Produk::with('gambar')->where('kategori','Kursus')->get();
        return $kursus;
    }

    public function getProdukExperience()
    {

        $experience = Produk::with('gambar')->where('kategori','Experience')->get();
        return $experience;
    }

    public function getProdukKesehatan()
    {

        $kesehatan = Produk::with('gambar')->where('kategori','Kesehatan')->get();
        return $kesehatan;
    }


    public function getDetailProduk($id)
    {
        $produks = Produk::with('gambar', 'penyelenggara')->where('id', $id)->first();
        // $gambars = Gambar::all();
        
        return $produks;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();

        $produk = new Produk($data);
        $produk->save();

        $status = 400;
        $message = "Gagal menyimpan product!";

        if($produk){
            $status = 200;
            $message = "Berhasil menyimpan product!";
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ]);
    }

    public function insertProduk(Request $request)
    {
        $data = $request->all();

        $produk = new Produk($data);
        $produk->save();

        $status = 400;
        $message = "Gagal menyimpan product!";

        if($produk){
            $status = 200;
            $message = "Berhasil menyimpan product!";
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produks = Produk::with('gambar', 'penyelenggara')->where('id', $id)->first();
        
        // return $produks;
        return view('produk_detail.index', ['produk' => $produks]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteProduk(Request $request)
    {
        if (request()->ajax()) {
            $id = $request->data;

            $produk = Produk::find($id);

            $produk->delete();

            return "sukses";
        }
    }

    public function addData(Request $request, $id) {
        
        // $data = $request->all();

        // $data_order = [
        //     "id_users" => Auth::user()->id,
        //     "status_order" => 0,
        //     "id_produk" => $data['id_produk'],
        //     "id_penyelenggara" => $data['id_penyelenggara'],
        //     "kurir" => $data ['kurir'],
        //     "alamat_pen" => ['alamat_pen'],
        // ];

        // $data_peserta = [
        //     "id_produk" => $data ['id_produk'],
        //     "tgl_lahir" => $data['tgl_lahir'],
        //     "nama_peserta" => $data['nama_peserta'],
        //     "nama_panggilan" => $data['nama_panggilan'],
        //     "jenis_kelamin" => $data['jenis_kelamin'],
        //     "hubungan" => $data['hubungan'],
        // ];
        //     $order = new Order($data_order);
        //     $order->save();
        //     $peserta = new Peserta($data_peserta);
        //     $peserta-> save();
        //     $produk = new Produk($data);
        //     $produk->save();
        

        //     return view('pesanan.index');

        $produks = Produk::where('id', $id)->first();

    	//validasi apakah melebihi stok
    	if($request->jumlah_pesan > $produks->stock)
    	{
    		return redirect('pesanan'.$id);
    	}

    	//cek validasi
    	$cek_orders = Order::where('id_pelanggan', Auth::user()->id)->where('status_order',0)->first();
    	//simpan ke database pesanan
    	if(empty($cek_orders))
    	{
    		$orders = new Order;
	    	$orders->id_pelanggan = Auth::user()->id;
	    	$orders->id_produk =  $request->id_produk;
            $orders->id_penyelenggara = $request->id_penyelenggara;
            $orders->kurir = 'jnt';
            $orders->alamat_pen = 'tidak tahu';
	    	$orders->status_order = 0;
            $orders->jumlah_pesanan = $request->jumlah_pesanan;
	    	$orders->save();
    	} 
        return redirect()->back();


    	// //simpan ke database pesanan detail
    	// $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

    	// //cek pesanan detail
    	// $cek_pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
    	// if(empty($cek_pesanan_detail))
    	// {
    	// 	$pesanan_detail = new PesananDetail;
	    // 	$pesanan_detail->barang_id = $barang->id;
	    // 	$pesanan_detail->pesanan_id = $pesanan_baru->id;
	    // 	$pesanan_detail->jumlah = $request->jumlah_pesan;
	    // 	$pesanan_detail->jumlah_harga = $barang->harga*$request->jumlah_pesan;
	    // 	$pesanan_detail->save();
    	// }else
    	// {
    	// 	$pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();

    	// 	$pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

    	// 	//harga sekarang
    	// 	$harga_pesanan_detail_baru = $barang->harga*$request->jumlah_pesan;
	    // 	$pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
	    // 	$pesanan_detail->update();
    	}

    	//jumlah total
    	// $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    	// $pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_pesan;
    	// $pesanan->update();

        // Alert::success('Thank You', 'Pesanan Anda Sedang Diproses');

        // return redirect('home');

    
}
