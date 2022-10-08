<?php

namespace App\Http\Controllers;
use App\Produk;
use App\Order;
use App\Gambar;
use App\User;
use App\Ulasan;
use App\Penyelenggara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

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
        // $produks = DB::table('tbl_produks')
        // ->leftjoin('tbl_gambars', 'tbl_produks.id', '=', 'tbl_gambars.id_produk')
        // ->leftjoin('tbl_ulasans', 'tbl_produks.id', '=', 'tbl_ulasans.id_produk')
        // ->select('tbl_produks.*', 'tbl_ulasans.bintang->', 'tbl_gambars.gambar')
        // ->get();
        
        // $gambars = Gambar::all();
        $produks = Produk::with('gambar')->with('Ulasan')->get();
        $ulasan = Ulasan::all();

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

        $popular = Produk::with('gambar')->where('harga_produk', 0)->get();
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
    
    public function getProdukGratis()
    {

        $gratis = Produk::with('gambar')->where('kategori',0)->get();
        return $gratis;
    }

    public function getDetailProduk($id)
    {
        $produks = Produk::with('gambar')->where('id', $id)->first();
        // $gambars = Gambar::all();
        
        return $produks;
    }

    public function bintang()
    {
        
        $bintang = Ulasan::all();
        // $gambars = Gambar::all();
        
        return $bintang;
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
        $produks = DB::table('tbl_produks')->join('tbl_gambars', 'tbl_gambars.id_produk', '=', 'tbl_produks.id')
        ->join('users', 'users.id', '=', 'tbl_produks.user_id')
        ->select('tbl_produks.*','tbl_gambars.gambar', 'users.nama_penyelenggara','users.kota_penyelenggara','users.icon_penyelenggara','users.deskripsi','users.jam_operasional')->get();
        $produk = $produks->where('id',$id);
        // ->where('id', $id)->first();
        $bintang = Ulasan::where('id_produk', $id)->pluck('bintang')->avg();
        $ulasans = Ulasan::where('id_produk', $id)->get();
        // dd($produk);
        // dd($ulasans);
        // dd($bintang);
        return view('produk_detail.index', [
            'produk' => $produk,
            'ulasans' => $ulasans,
            'bintang' => $bintang
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
        // dd($request);
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
    	$cek_orders = Order::where('id', Auth::user()->id)->where('status_order',0)->first();
    	//simpan ke database pesanan

        $orders = new Order;
        $orders->id_user = Auth::user()->id;
        $orders->id_produk =  $request->id_produk;
        $orders->kurir = 'null';
        $orders->alamat_pen = 'null';
        $orders->provinsi ='null';
        $orders->kota = 'null';
        $orders->kecamatan = 'null';
        $orders->metode_pembayaran = 'null';
        $orders->status_order = 0;
        $orders->nama_produk = $request->nama_produk;
        $orders->jumlah_pesanan = $request->jumlah_pesanan;
        $orders->total_harga = $produks->harga_produk * $request->jumlah_pesanan;
        $orders->save();

    	if(empty($cek_orders))
    	{
    		
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
        public function ajax(Request $request)
        {
            $name = $request->name;
            $results = Produk::where('nama_produk', 'like','%'.$name.'%')->with('gambar')->get();
            // return $results;



            $c = count($results);

            if ($c == 0){
                return '<p class="text-center"> Sorry data not found </p>';
            }else{
                return view('ajaxpage')->with([
                    'data' => $results
                ]);
                // return $results;
            }

        }
        public function read()
        {
            return '<p class="text-center">please input data search: Promo, Private, Keteraampilan</p>';
        }

        public function search()
        {
            return view ('search');
         }

         public function addWishlist(Request $request, $id) {
        
            // $data = $request->all();
            // dd($request);
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
            $cek_orders = Order::where('id', Auth::user()->id)->where('status_order',0)->first();
            //simpan ke database pesanan
    
            $orders = new Order;
            $orders->id_user = Auth::user()->id;
            $orders->id_produk =  $request->id_produk;
            $orders->kurir = 'null';
            $orders->alamat_pen = 'null';
            $orders->provinsi ='null';
            $orders->kota = 'null';
            $orders->kecamatan = 'null';
            $orders->metode_pembayaran = 'null';
            $orders->status_order = 2;
            $orders->nama_produk = $request->nama_produk;
            $orders->jumlah_pesanan = $request->jumlah_pesanan;
            $orders->total_harga = $produks->harga_produk * $request->jumlah_pesanan;
            $orders->save();
    
            if(empty($cek_orders))
            {
                
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
            
            public function addCompare(Request $request, $id) {
        
                // $data = $request->all();
                // dd($request);
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
                $cek_orders = Order::where('id', Auth::user()->id)->where('status_order',0)->first();
                //simpan ke database pesanan
        
                $orders = new Order;
                $orders->id_user = Auth::user()->id;
                $orders->id_produk =  $request->id_produk;
                $orders->kurir = 'null';
                $orders->alamat_pen = 'null';
                $orders->provinsi ='null';
                $orders->kota = 'null';
                $orders->kecamatan = 'null';
                $orders->metode_pembayaran = 'null';
                $orders->status_order = 3;
                $orders->nama_produk = $request->nama_produk;
                $orders->jumlah_pesanan = $request->jumlah_pesanan;
                $orders->total_harga = $produks->harga_produk * $request->jumlah_pesanan;
                $orders->save();
        
                if(empty($cek_orders))
                {
                    
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
    
}
