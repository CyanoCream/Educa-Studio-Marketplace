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
					<ol class="breadcrumb float-sm-right d-flex">
						<li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{route('daftarDetail_Order')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" style="align-items: center; display: flex;">Tambah Detail Orders</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('storeDetail_Order') }}" method="post">
						{{csrf_field()}}

						<div class="form-group">
							<label for="id_order">id order</label>
							<input type="text" name="id_order" id="id_order" class="form-control" required="required" placeholder="Masukkan id order">
						</div>

						<div class="form-group">
							<label for="id_produk">id produk</label>
							<input type="text" name="id_produk" id="id_produk" class="form-control" required="required" placeholder="Masukkan id produk">
						</div>

						<div class="form-group">
							<label for="nama_produk">nama produk</label>
							<input type="text" name="nama_produk" id="nama_produk" class="form-control" required="required" placeholder="Masukkan nama produk">
						</div>

						<div class="form-group">
							<label for="harga">harga</label>
							<input type="text" name="harga" id="harga" class="form-control" required="required" placeholder="Masukkan harga">
						</div>

						<div class="form-group">
							<label for="kurir">kurir</label>
							<input type="text" name="kurir" id="kurir" class="form-control" required="required" placeholder="Masukkan kurir">
						</div>

						<div class="form-group">
							<label for="jumlah">jumlah</label>
							<input type="text" name="jumlah" id="jumlah" class="form-control" required="required" placeholder="Masukkan jumlah">
						</div>

						<div class="form-group">
							<label for="jumlah_harga">jumlah harga</label>
							<input type="text" name="jumlah_harga" id="jumlah_harga" class="form-control" required="required" placeholder="Masukkan jumlah harga">
						</div>

						<div class="text-right">
							<a href="{{ route('daftarDetail_Order') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
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