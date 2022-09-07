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
						<li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{route('daftarGambar')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" style="align-items: center; display: flex;">Edit Gambar</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updateGambar',['id'=>$gambar->id]) }}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="gambar">gambar</label>
							<input type="file" name="gambar" id="gambar" class="form-control" required="required" value="{{ $gambar->gambar }}" placeholder="Masukkan gambar">
						</div>

<<<<<<< HEAD
						<div class="form-group">
							<label for="id_produk">id_produk</label>
							<input type="text" name="id_produk" id="id_produk" class="form-control" required="required" value="{{ $gambar->id_produk }}" placeholder="Masukkan id_produk">
						</div>
=======
						{{-- <div class="form-group">
							<label for="id_produk">id_produk</label>
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
						</div> --}}
>>>>>>> 8a8b1e0d3fb23705eeedc5f741612dcae2a73a3c

						<div class="text-right">
							<a href="{{ route('daftarGambar') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
