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
						<li class="breadcrumb-item"><a href="{{route('daftarPelanggan')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Edit Pelanggan</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updatePelanggan',['id'=>$pelanggan->id]) }}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="foto">foto</label>
							<input type="file" name="foto" id="foto" class="form-control" required="required" value="{{ $pelanggan->foto }}" placeholder="Masukkan foto">
						</div>

						<div class="form-group">
							<label for="nama_pelanggan">nama pelanggan</label>
							<input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" required="required" value="{{ $pelanggan->nama_pelanggan }}" placeholder="Masukkan nama_pelanggan">
						</div>

                        <div class="form-group">
							<label for="no_telp">no.telp</label>
							<input type="text" name="no_telp" id="no_telp" class="form-control" required="required" value="{{ $pelanggan->no_telp }}" placeholder="Masukkan no_telp">
						</div>

                        <div class="form-group">
							<label for="alamat_pel">alamat pelanggan</label>
							<input type="text" name="alamat_pel" id="alamat_pel" class="form-control" required="required" value="{{ $pelanggan->alamat_pel }}" placeholder="Masukkan alamat_pel">
						</div>

                        <div class="form-group">
							<label for="provinsi_pel">provinsi pelanggan</label>
							<input type="text" name="provinsi_pel" id="provinsi_pel" class="form-control" required="required" value="{{ $pelanggan->provinsi_pel }}" placeholder="Masukkan provinsi_pel">
						</div>

                        <div class="form-group">
							<label for="kota_pel">kota pelanggan</label>
							<input type="text" name="kota_pel" id="kota_pel" class="form-control" required="required" value="{{ $pelanggan->kota_pel }}" placeholder="Masukkan kota_pel">
						</div>

                        <div class="form-group">
							<label for="kecamatan_pel">kecamatan pelanggan</label>
							<input type="text" name="kecamatan_pel" id="kecamatan_pel" class="form-control" required="required" value="{{ $pelanggan->kecamatan_pel }}" placeholder="Masukkan kecamatan_pel">
						</div>

						<div class="text-right">
							<a href="{{ route('daftarPelanggan') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
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
