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
						<li class="breadcrumb-item"><a href="{{route('daftarGambar')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Tambah Gambar</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('storeGambar') }}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}

						<div class="form-group">
							<label for="gambar">gambar</label>
							<input type="file" name="gambar" id="gambar" class="form-control" required="required" placeholder="Masukkan gambar">
						</div>

						<div class="form-group">
							<label for="id_produk">id produk</label>
							<input type="text" name="id_produk" id="id_produk" class="form-control" required="required" placeholder="Masukkan id produk">
						</div>

						<div class="form-group">
							<label for="user_id">user id</label>
							<input type="text" name="user_id" id="user_id" class="form-control" required="required" placeholder="Masukkan user id">
						</div>

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