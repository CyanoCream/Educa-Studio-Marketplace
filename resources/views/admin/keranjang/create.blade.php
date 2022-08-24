@extends('admin.layout')

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
						<li class="breadcrumb-item"><a href="{{route('daftarKeranjang')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Tambah Keranjang</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('storeKeranjang') }}" method="post">
						{{csrf_field()}}

						<div class="form-group">
							<label for="id_produk">id_produk</label>
							<input type="text" name="id_produk" id="id_produk" class="form-control" required="required" placeholder="Masukkan id_produk">
						</div>

						<div class="form-group">
							<label for="qty_ker">qty_ker</label>
							<input type="text" name="qty_ker" id="qty_ker" class="form-control" required="required" placeholder="Masukkan qty_ker">
						</div>

						<div class="form-group">
							<label for="waktu">waktu</label>
							<input type="text" name="waktu" id="waktu" class="form-control" required="required" placeholder="Masukkan waktu">
						</div>

						<div class="form-group">
							<label for="harga_produk">harga_produk</label>
							<input type="text" name="harga_produk" id="harga_produk" class="form-control" required="required" placeholder="Masukkan harga_produk">
						</div>

						<div class="form-group">
							<label for="packing">packing</label>
							<input type="text" name="packing" id="packing" class="form-control" required="required" placeholder="Masukkan packing">
						</div>

						<div class="text-right">
							<a href="{{ route('daftarKeranjang') }}" class="btn btn-outline-secondary mr-2"
								role="button">Batal</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection