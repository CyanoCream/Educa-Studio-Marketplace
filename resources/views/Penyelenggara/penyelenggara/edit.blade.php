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
						<li class="breadcrumb-item"><a href="{{route('daftarPenyelenggara_penyelenggara')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Edit Penyelenggara</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form class="form" action="{{ route('updatePenyelenggara_penyelenggara',['id'=>Auth::user()->id])}}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-field">
							<div class="css-1k4vibs text-center">
								
								<canvas style="width: 50px; height: 25px;"></canvas>
								<div class="css-4r2xna">
									<div class="container-body">
										<div class="body">
											<img src="https://kiddo.id/wp-content/uploads/2020/02/icon-kiddo.png" alt="" width="150px">
										</div>
										<div class="container-btn-ubah">
											<input type="file" name="icon_penyelenggara" accept="image/png, image/jpeg, image/jpg" class="css-17jnaqn">
										</div>
									</div>
								</div>
								<div class="css-1y5cgar">
								</div>
							</div>
							<div class="css-4r2xna">
								<div class="css-utaa48"><strong>Nama Penyelenggara </strong></div>
								<input label="Nama Lengkap" placeholder="" name="nama_penyelenggara" type="text" rows="1" class="css-13f9adq w-100" value="">
							</div>
							<div class="css-4r2xna">
								<div class="css-utaa48"><strong>kota Penyelenggara </strong></div>
								<input label="Nama Lengkap" placeholder="" name="kota_penyelenggara" type="text" rows="1" class="css-13f9adq w-100" value="">
							</div>
							<div class="css-4r2xna">
								<div class="css-utaa48"><strong>Deskripsi </strong></div>
								<input label="Nama Lengkap" placeholder="" name="deskripsi" type="text" rows="1" class="css-13f9adq w-100" value="">
							</div>
							<div class="css-4r2xna">
								<div class="css-utaa48"><strong>Jam Operasional </strong></div>
								<input label="Nama Lengkap" placeholder="" name="jam_operasional" type="text" rows="1" class="css-13f9adq w-100" value="">
							</div>
	
							<input type="hidden" name="role" value="{{ Auth::user()->role }}">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary" data-dismiss="modal">Submit</button>
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
