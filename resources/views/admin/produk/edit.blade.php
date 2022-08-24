@extends('admin.layout')

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
						<li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{route('daftarProduk')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" style="align-items: center; display: flex;">Edit Produk</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updateProduk',['id'=>$produk->id]) }}" method="post">
						{{ csrf_field() }}

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
							<label for="id_kategori">id_kategori</label>
							<input type="text" name="id_kategori" id="id_kategori" class="form-control" required="required" value="{{ $produk->id_kategori }}" placeholder="Masukkan id_kategori">
						</div>

						<div class="form-group">
							<label for="nama_produk">nama_produk</label>
							<input type="text" name="nama_produk" id="nama_produk" class="form-control" required="required" value="{{ $produk->nama_produk }}" placeholder="Masukkan nama_produk">
						</div>

						<div class="form-group">
							<label for="harga_produk">harga_produk</label>
							<input type="text" name="harga_produk" id="harga_produk" class="form-control" required="required" value="{{ $produk->harga_produk }}" placeholder="Masukkan harga_produk">
						</div>

						<div class="form-group">
							<label for="pertemuan">pertemuan</label>
							<input type="text" name="pertemuan" id="pertemuan" class="form-control" required="required" value="{{ $produk->pertemuan }}" placeholder="Masukkan pertemuan">
						</div>

						<div class="form-group">
							<label for="waktu_temu">waktu_temu</label>
							<input type="text" name="waktu_temu" id="waktu_temu" class="form-control" required="required" value="{{ $produk->waktu_temu }}" placeholder="Masukkan waktu_temu">
						</div>

						<div class="form-group">
							<label for="umur">umur</label>
							<input type="text" name="umur" id="umur" class="form-control" required="required" value="{{ $produk->umur }}" placeholder="Masukkan umur">
						</div>

                        <div class="form-group">
							<label for="keterangan">keterangan</label>
							<textarea name="keterangan" id="keterangan" rows="3" class="form-control" required="required" placeholder="Masukkan keterangan"></textarea>
						</div>

                        <div class="form-group">
							<label for="manfaat">manfaat</label>
                            <textarea name="manfaat" id="manfaat" rows="3" class="form-control" required="required" placeholder="Masukkan manfaat"></textarea>
						</div>

                        <div class="form-group">
							<label for="bundling">bundling</label>
							<input type="text" name="bundling" id="bundling" class="form-control" required="required" value="{{ $produk->bundling }}" placeholder="Masukkan bundling">
						</div>

						<div class="text-right">
							<a href="{{ route('daftarProduk') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
