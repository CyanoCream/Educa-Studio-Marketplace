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
					<ol class="breadcrumb float-sm-right d-flex">
						<li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{route('daftarKeranjang')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" style="align-items: center; display: flex;">Tambah Keranjang</li>
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
<<<<<<< HEAD
							<input type="text" name="id_produk" id="id_produk" class="form-control" required="required" placeholder="Masukkan id_produk">
=======
							<select class="form-control" name="id_produk" id="id_produk">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
>>>>>>> 8a8b1e0d3fb23705eeedc5f741612dcae2a73a3c
						</div>

						<div class="form-group">
							<label for="qty_ker">qty_ker</label>
							<input type="text" name="qty_ker" id="qty_ker" class="form-control" required="required" placeholder="Masukkan qty_ker">
						</div>

						<div class="form-group">
							<label for="waktu">waktu</label>
<<<<<<< HEAD
							<input type="text" name="waktu" id="waktu" class="form-control" required="required" placeholder="Masukkan waktu">
=======
							<input type="date" name="waktu" id="waktu" class="form-control" required="required" placeholder="Masukkan waktu">
>>>>>>> 8a8b1e0d3fb23705eeedc5f741612dcae2a73a3c
						</div>

						<div class="form-group">
							<label for="harga_produk">harga_produk</label>
							<input type="text" name="harga_produk" id="harga_produk" class="form-control" required="required" placeholder="Masukkan harga_produk">
						</div>

						<div class="form-group">
							<label for="packing">packing</label>
<<<<<<< HEAD
							<input type="text" name="packing" id="packing" class="form-control" required="required" placeholder="Masukkan packing">
=======
							<select class="form-control" name="packing" id="packing">
								<option>Paket Sudah Siap</option>
								<option>Paket Dalam Perjalan</option>
								<option>Paket Sudah Sampai</option>
							</select>
>>>>>>> 8a8b1e0d3fb23705eeedc5f741612dcae2a73a3c
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