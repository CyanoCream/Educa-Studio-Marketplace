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
                            <input type="hidden" name="nama" value="{{ Auth::user()->name }}">
                        </div>

						<div class="form-group">
							<input type="hidden" name="email" value="{{ Auth::user()->email }}">
						</div>

						<div class="form-group">
							<input type="hidden" name="nomorponsel" value="{{ Auth::user()->notelp }}">
						</div>

						<div class="form-group">
							<label for="topik">topik</label>
							<input type="text" name="topik" id="topik" class="form-control" required="required" value="{{ $hubungikami->topik }}" placeholder="Masukkan topik">
						</div>

						<div class="form-group">
							<label for="pesan">pesan</label>
							<textarea type="text" name="pesan" id="pesan" rows="3" class="form-control" required="required"></textarea>
						</div>

						<div class="text-right">
							<a href="{{ route('daftarHubungi_Kami') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
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
