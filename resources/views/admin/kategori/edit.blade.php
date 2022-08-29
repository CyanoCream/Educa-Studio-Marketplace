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
						<li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{route('daftarKategori')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" style="align-items: center; display: flex;">Edit Kategori</li>
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
						{{ csrf_field() }}

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