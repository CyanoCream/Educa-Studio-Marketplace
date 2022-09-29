@extends('admin.master')

@section('content')

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Edit</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('daftarOrder')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Edit Order</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	
	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updateOrder',['id'=>$order->id]) }}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="status_order">status order</label>
							<select id="status_order" name="status_order" class="form-control">
                                <option selected>---  Select  ---</option>
                                <option value="0">Di Keranjang</option>
                                <option value="1">Di Bayar</option>
                            </select>
						</div>

						<div class="form-group">
							<label for="jumlah_pesanan">jumlah pesanan</label>
							<input type="text" name="jumlah_pesanan" id="jumlah_pesanan" class="form-control" required="required" value="{{ $order->jumlah_pesanan }}" placeholder="Masukkan jumlah pesanan">
						</div>

						<div class="form-group">
							<label for="total_harga">total harga</label>
							<input type="text" name="total_harga" id="total_harga" class="form-control" required="required" value="{{ $order->total_harga }}" placeholder="Masukkan total harga">
						</div>

						<div class="form-group">
							<label for="kurir">kurir</label>
							<input type="text" name="kurir" id="kurir" class="form-control" required="required" value="{{ $order->kurir }}" placeholder="Masukkan kurir">
						</div>

                        <div class="form-group">
							<label for="alamat_pen">alamat penerima</label>
							<input type="text" name="alamat_pen" id="alamat_pen" class="form-control" required="required" value="{{ $order->alamat_pen }}" placeholder="Masukkan alamat pen">
						</div>

						<div class="form-group">
							<label for="provinsi">provinsi</label>
							<input type="text" name="provinsi" id="provinsi" class="form-control" required="required" value="{{ $order->provinsi }}" placeholder="Masukkan provinsi">
						</div>

						<div class="form-group">
							<label for="kota">kota</label>
							<input type="text" name="kota" id="kota" class="form-control" required="required" value="{{ $order->kota }}" placeholder="Masukkan kota">
						</div>

						<div class="form-group">
							<label for="kecamatan">kecamatan</label>
							<input type="text" name="kecamatan" id="kecamatan" class="form-control" required="required" value="{{ $order->kecamatan }}" placeholder="Masukkan kecamatan">
						</div>

						<div class="form-group">
							<label for="metode_pembayaran">metode pembayaran</label>
							<input type="text" name="metode_pembayaran" id="metode_pembayaran" class="form-control" required="required" value="{{ $order->metode_pembayaran }}" placeholder="Masukkan metode pembayaran">
						</div>

						<div class="form-group">
							<label for="nama_produk">nama produk</label>
							<input type="text" name="nama_produk" id="nama_produk" class="form-control" required="required" value="{{ $order->nama_produk }}" placeholder="Masukkan nama produk">
						</div>

						<div class="text-right">
							<a href="{{ route('daftarOrder') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
							<button type="submit" onclick="save(this)" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    save = function (button) {
        swal({
			title: "Sukses",
			icon: "success",
			button: false,
		});
    }
</script>
@endsection
