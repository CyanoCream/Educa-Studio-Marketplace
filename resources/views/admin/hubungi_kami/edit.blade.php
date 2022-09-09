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
						<li class="breadcrumb-item"><a href="{{route('daftarHubungi_Kami')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Edit Hubungi Kami</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updateHubungi_Kami',['id'=>$hubungikami->id]) }}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="nama">nama</label>
							<input type="text" name="nama" id="nama" class="form-control" required="required" value="{{ $hubungikami->nama }}" placeholder="Masukkan nama">
						</div>

						<div class="form-group">
							<label for="email">email</label>
							<input type="text" name="email" id="email" class="form-control" required="required" value="{{ $hubungikami->email }}" placeholder="Masukkan email">
						</div>

						<div class="form-group">
							<label for="nomor_ponsel">nomor ponsel</label>
							<input type="text" name="nomorponsel" id="nomor_ponsel" class="form-control" required="required" value="{{ $hubungikami->nomor_ponsel }}" placeholder="Masukkan nomor_ponsel">
						</div>

						<div class="form-group">
							<label for="topik">topik</label>
							<input type="text" name="topik" id="topik" class="form-control" required="required" value="{{ $hubungikami->topik }}" placeholder="Masukkan topik">
						</div>

						<div class="form-group">
							<label for="pesan">pesan</label>
							<textarea type="text" name="pesan" id="pesan" rows="3" class="form-control" required="required" placeholder="Masukkan pesan"></textarea>
						</div>

						<div class="text-right">
							<a href="{{ route('daftarHubungi_Kami') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
