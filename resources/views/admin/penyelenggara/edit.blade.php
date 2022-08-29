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
						<li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{route('daftarPenyelenggara')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" style="align-items: center; display: flex;">Edit Penyelenggara</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updatePenyelenggara',['id'=>$penyelenggara->id]) }}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="id_produk">id_produk</label>
							<select class="form-control" name="id_produk" id="id_produk">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
						</div>

						<div class="form-group">
							<label for="nama_penyelenggara">nama_penyelenggara</label>
							<input type="text" name="nama_penyelenggara" id="nama_penyelenggara" class="form-control" required="required" value="{{ $penyelenggara->nama_penyelenggara }}" placeholder="Masukkan nama_penyelenggara">
						</div>

						<div class="form-group">
							<label for="icon_penyelenggara">icon_penyelenggara</label>
							<input type="text" name="icon_penyelenggara" id="icon_penyelenggara" class="form-control" required="required" value="{{ $penyelenggara->icon_penyelenggara }}" placeholder="Masukkan icon_penyelenggara">
						</div>

						<div class="form-group">
							<label for="kota_penyelenggara">kota_penyelenggara</label>
							<input type="text" name="kota_penyelenggara" id="kota_penyelenggara" class="form-control" required="required" value="{{ $penyelenggara->kota_penyelenggara }}" placeholder="Masukkan kota_penyelenggara">
						</div>

						<div class="form-group">
							<label for="deskripsi">deskripsi</label>
							<textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" required="required" placeholder="Masukkan deskripsi"></textarea>
						</div>

                        <div class="form-group">
							<label for="jam_operasional">jam_operasional</label>
							<input type="text" name="jam_operasional" id="jam_operasional" class="form-control" required="required" value="{{ $penyelenggara->jam_operasional }}" placeholder="Masukkan jam_operasional">
						</div>

						<div class="text-right">
							<a href="{{ route('daftarPenyelenggara') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection