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
						<li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{route('daftarPelanggan')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" style="align-items: center; display: flex;">Edit Pelanggan</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updatePelanggan',['id'=>$pelanggan->id]) }}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="foto">foto</label>
							<input type="text" name="foto" id="foto" class="form-control" required="required" value="{{ $pelanggan->foto }}" placeholder="Masukkan foto">
						</div>

						<div class="form-group">
							<label for="waktu_daftar">waktu_daftar</label>
							<input type="text" name="waktu_daftar" id="waktu_daftar" class="form-control" required="required" value="{{ $pelanggan->waktu_daftar }}" placeholder="Masukkan waktu_daftar">
						</div>

						<div class="form-group">
							<label for="nama_pelanggan">nama_pelanggan</label>
							<input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" required="required" value="{{ $pelanggan->nama_pelanggan }}" placeholder="Masukkan nama_pelanggan">
						</div>

						<div class="form-group">
							<label for="email_pelanggan">email_pelanggan</label>
							<input type="text" name="email_pelanggan" id="email_pelanggan" class="form-control" required="required" value="{{ $pelanggan->email_pelanggan }}" placeholder="Masukkan email_pelanggan">
						</div>

						<div class="form-group">
							<label for="password">password</label>
							<input type="text" name="password" id="password" class="form-control" required="required" value="{{ $pelanggan->password }}" placeholder="Masukkan password">
						</div>

                        <div class="form-group">
							<label for="no_telp">no_telp</label>
							<input type="text" name="no_telp" id="no_telp" class="form-control" required="required" value="{{ $pelanggan->no_telp }}" placeholder="Masukkan no_telp">
						</div>

                        <div class="form-group">
							<label for="alamat_pel">alamat_pel</label>
							<input type="text" name="alamat_pel" id="alamat_pel" class="form-control" required="required" value="{{ $pelanggan->alamat_pel }}" placeholder="Masukkan alamat_pel">
						</div>

                        <div class="form-group">
							<label for="provinsi_pel">provinsi_pel</label>
							<input type="text" name="provinsi_pel" id="provinsi_pel" class="form-control" required="required" value="{{ $pelanggan->provinsi_pel }}" placeholder="Masukkan provinsi_pel">
						</div>

                        <div class="form-group">
							<label for="kota_pel">kota_pel</label>
							<input type="text" name="kota_pel" id="kota_pel" class="form-control" required="required" value="{{ $pelanggan->kota_pel }}" placeholder="Masukkan kota_pel">
						</div>

                        <div class="form-group">
							<label for="kecamatan_pel">kecamatan_pel</label>
							<input type="text" name="kecamatan_pel" id="kecamatan_pel" class="form-control" required="required" value="{{ $pelanggan->kecamatan_pel }}" placeholder="Masukkan kecamatan_pel">
						</div>

                        <div class="form-group">
							<label for="level_user">level_user</label>
							<input type="text" name="level_user" id="level_user" class="form-control" required="required" value="{{ $pelanggan->level_user }}" placeholder="Masukkan level_user">
						</div>

						<div class="text-right">
							<a href="{{ route('daftarPelanggan') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
