@extends('Penyelenggara.master')

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
						<li class="breadcrumb-item"><a href="{{route('daftarPenyelenggara_produk')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Edit Produk</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updatePenyelenggara_produk',['id'=>$produk->id]) }}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="nama_produk">nama produk</label>
							<input type="text" name="nama_produk" id="nama_produk" class="form-control" required="required" value="{{ $produk->nama_produk }}" placeholder="Masukkan nama produk">
						</div>

						<div class="form-group">
                            <label for="kategori">Kategori</label>
							<select id="kategori" name="kategori" class="form-control">
                                <option selected>---  Select  ---</option>
								<option>Pilihan</option>
                                <option>Aktivitas</option>
                                <option>Kursus</option>
                                <option>Experience</option>
                                <option>Gratis</option>
                            </select>
                        </div>

						<div class="form-group">
							<label for="harga_produk">harga produk</label>
							<input type="text" name="harga_produk" id="harga_produk" class="form-control" required="required" value="{{ $produk->harga_produk }}" placeholder="Masukkan harga produk">
						</div>

						<div class="form-group">
							<label for="status_pertemuan">status pertemuan (contoh : Online atau Offline)</label>
							<input type="text" name="status_pertemuan" id="status_pertemuan" class="form-control" required="required" value="{{ $produk->status_pertemuan }}" placeholder="Masukkan status pertemuan">
						</div>

						<div class="form-group">
							<label for="stock">stock</label>
							<input type="text" name="stock" id="stock" class="form-control" required="required" value="{{ $produk->stock }}" placeholder="Masukkan stock">
						</div>

						<div class="form-group">
							<label for="pertemuan">pertemuan (contoh : 1x Seminggu)</label>
							<input type="text" name="pertemuan" id="pertemuan" class="form-control" required="required" value="{{ $produk->pertemuan }}" placeholder="Masukkan pertemuan">
						</div>

						<div class="form-group">
							<label for="waktu_temu">waktu temu (contoh : 1,2,3,...)</label>
							<input type="text" name="waktu_temu" id="waktu_temu" class="form-control" required="required" value="{{ $produk->waktu_temu }}" placeholder="Masukkan waktu temu">
						</div>

						<div class="form-group">
							<label for="umur">umur (contoh : 4 Tahun)</label>
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
							<label for="bundling">bundling (contoh : modul + sertifikat)</label>
							<input type="text" name="bundling" id="bundling" class="form-control" required="required" value="{{ $produk->bundling }}" placeholder="Masukkan bundling">
						</div>

						<div class="form-group">
							<label for="user_id">nama penyelenggara</label>
							<select class="form-control" name="user_id" id="user_id" required="required">
                                @foreach ($user as $u)                                    
                                   <option value="{{$u->id}}">{{$u->nama_penyelenggara}}</option>
                                @endforeach
                            </select>
						</div>
						
						<div class="text-right">
							<a href="{{ route('daftarPenyelenggara_produk') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
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
