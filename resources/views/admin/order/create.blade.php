@extends('admin.master')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Create</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('daftarOrder')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Tambah Order</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('storeOrder') }}" method="post">
						{{csrf_field()}}

						<div class="form-group">
							<label for="status_order">status order</label>
							<input type="text" name="status_order" id="status_order" class="form-control" required="required" placeholder="Masukkan status order">
						</div>

						<div class="form-group">
							<label for="id_penyelenggara">nama penyelenggara</label>
							<select class="form-control" name="id_penyelenggara" id="id_penyelenggara" required="required">
								@foreach ($produks as $pdk)
								   <option value="{{$pdk->id}}">{{$pdk->nama_penyelenggara}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="jumlah_pesanan">jumlah pesanan</label>
							<input type="text" name="jumlah_pesanan" id="jumlah_pesanan" class="form-control" required="required" placeholder="Masukkan jumlah pesanan">
						</div>

						<div class="form-group">
							<label for="total_harga">total harga</label>
							<input type="text" name="total_harga" id="total_harga" class="form-control" required="required" placeholder="Masukkan total_harga">
						</div>

                        <div class="form-group">
							<label for="kurir">kurir</label>
							<input type="text" name="kurir" id="kurir" class="form-control" required="required" placeholder="Masukkan kurir">
						</div>

                        <div class="form-group">
							<label for="alamat_pen">alamat penerima</label>
							<input type="text" name="alamat_pen" id="alamat_pen" class="form-control" required="required" placeholder="Masukkan alamat pen">
						</div>

						<div class="form-group">
							<label for="provinsi">provinsi</label>
							<input type="text" name="provinsi" id="provinsi" class="form-control" required="required" placeholder="Masukkan provinsi">
						</div>

						<div class="form-group">
							<label for="kota">kota</label>
							<input type="text" name="kota" id="kota" class="form-control" required="required" placeholder="Masukkan kota">
						</div>

						<div class="form-group">
							<label for="kecamatan">kecamatan</label>
							<input type="text" name="kecamatan" id="kecamatan" class="form-control" required="required" placeholder="Masukkan kecamatan">
						</div>

						<div class="form-group">
							<label for="metode_pembayaran">metode pembayaran</label>
							<input type="text" name="metode_pembayaran" id="metode_pembayaran" class="form-control" required="required" placeholder="Masukkan metode pembayaran">
						</div>

						<div class="form-group">
							<label for="id_produk">nama produk</label>
							<select class="form-control" name="id_produk" id="id_produk" required="required">
								@foreach ($produks as $pdk)
								   <option value="{{$pdk->id}}">{{$pdk->nama_produk}}</option>
								@endforeach
							</select>
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