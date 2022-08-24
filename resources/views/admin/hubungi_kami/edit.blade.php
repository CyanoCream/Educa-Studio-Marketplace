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
					<form action="{{ route('updateHubungi_Kami',['id'=>$hubungi_kami->id]) }}" method="post">
						@csrf

						{{-- <div class="form-group">
							<label for="id_jurusan">Nama Jurusan</label>
							<select class="form-control" name="id_jurusan" id="id_jurusan" required="required">
								@foreach ($jurusans as $jurusan)
								<option value="{{$jurusan->id}}"
									{{$jurusan->id == $mata_pelajaran->id_jurusan ? 'selected' : ''}}>
									{{$jurusan->nama}}
								</option>
								@endforeach
							</select>
						</div> --}}

						<div class="form-group">
							<label for="id_pelanggan">id_pelanggan</label>
							<input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control" required="required" value="{{ $hubungi_kami->id_pelanggan }}" placeholder="Masukkan id_pelanggan">
						</div>

						<div class="form-group">
							<label for="nama">nama</label>
							<input type="text" name="nama" id="nama" class="form-control" required="required" value="{{ $hubungi_kami->nama }}" placeholder="Masukkan nama">
						</div>

						<div class="form-group">
							<label for="email">email</label>
							<input type="text" name="email" id="email" class="form-control" required="required" value="{{ $hubungi_kami->email }}" placeholder="Masukkan email">
						</div>

						<div class="form-group">
							<label for="nomor_ponsel">nomor_ponsel</label>
							<input type="text" name="nomor_ponsel" id="nomor_ponsel" class="form-control" required="required" value="{{ $hubungi_kami->nomor_ponsel }}" placeholder="Masukkan nomor_ponsel">
						</div>

						<div class="form-group">
							<label for="topik">topik</label>
							<input type="text" name="topik" id="topik" class="form-control" required="required" value="{{ $hubungi_kami->topik }}" placeholder="Masukkan topik">
						</div>

						<div class="form-group">
							<label for="pesan">pesan</label>
							<input type="text" name="pesan" id="pesan" class="form-control" required="required" value="{{ $hubungi_kami->pesan }}" placeholder="Masukkan pesan">
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
