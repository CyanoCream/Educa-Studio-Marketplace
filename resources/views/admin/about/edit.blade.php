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
					<ol class="breadcrumb float-sm-right d-flex">
						<li class="breadcrumb-item"><a href="{{route('about')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Edit About</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('about.update',['id'=>$about->id]) }}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="gambar">gambar</label>
							<input type="file" name="gambar" id="gambar" class="form-control" required="required"
								value="{{ $about->gambar }}" placeholder="Masukkan gambar">
						</div>

						<div class="form-group">
							<label for="judul">judul</label>
							<input type="text" name="judul" id="judul" class="form-control" required="required"
								value="{{ $about->judul }}" placeholder="Masukkan judul">
						</div>

						<div class="form-group">
							<label for="keterangan">keterangan</label>
							<textarea name="keterangan" id="keterangan" rows="3" class="form-control" required="required" placeholder="Masukkan keterangan"></textarea>
						</div>

						<div class="text-right">
							<a href="{{ route('about') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
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