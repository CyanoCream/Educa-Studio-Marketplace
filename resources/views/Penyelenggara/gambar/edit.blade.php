@extends('Penyelenggara.master')

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
						<li class="breadcrumb-item" style="align-items: center; display: flex;"><a
								href="{{route('daftarPenyelenggara_gambar')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" style="align-items: center; display: flex;">Edit Gambar</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updatePenyelenggara_gambar',['id'=>$gambar->id]) }}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="gambar">gambar</label>
							<input type="file" name="gambar" id="gambar" class="form-control" required="required"
								value="{{ $gambar->gambar }}" placeholder="Masukkan gambar">
						</div>
						<div class="form-group">
							<label for="user_id">nama produk</label>
							<select class="form-control" name="id_produk" id="nama_produk" required="required">
                                @foreach ($produk as $u)                                    
                                   <option value="{{$u->id}}">{{$u->nama_produk}}</option>
                                @endforeach
                            </select>
						</div>
						<input type="hidden" value="{{Auth::user()->id}}" name="user_id">
						<div class="text-right">
							<a href="{{ route('daftarPenyelenggara_gambar') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
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