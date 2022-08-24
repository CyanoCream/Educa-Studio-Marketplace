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
						<li class="breadcrumb-item"><a href="{{route('daftarKategori')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Edit Kategori</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updateKategori',['id'=>$kategori->id]) }}" method="post">
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
							<label for="nama_kategori">nama_kategori</label>
							<input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required="required" value="{{ $kategori->nama_kategori }}" placeholder="Masukkan nama_kategori">
						</div>

						<div class="text-right">
							<a href="{{ route('daftarKategori') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
