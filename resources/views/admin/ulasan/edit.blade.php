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
						<li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{route('daftarUlasan')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" style="align-items: center; display: flex;">Edit Ulasan</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updateUlasan',['id'=>$ulasan->id]) }}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="penilaian">penilaian</label>
							<input type="text" name="penilaian" id="penilaian" class="form-control" required="required" value="{{ $ulasan->penilaian }}" placeholder="Masukkan penilaian">
						</div>

						<div class="text-right">
							<a href="{{ route('daftarUlasan') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
