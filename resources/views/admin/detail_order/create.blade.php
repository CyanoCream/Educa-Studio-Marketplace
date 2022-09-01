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
						<li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{route('daftarDetail_Order')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" style="align-items: center; display: flex;">Tambah Detail Orders</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('storeDetail_Order') }}" method="post">
						{{csrf_field()}}

						{{-- <div class="form-group">
							<label for="id_order">id_order</label>
							<select class="form-control" name="id_order" id="id_order">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div> --}}

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
							<label for="qty_order">qty_order</label>
							<input type="text" name="qty_order" id="qty_order" class="form-control" required="required" placeholder="Masukkan qty_order">
						</div>

						<div class="text-right">
							<a href="{{ route('daftarDetail_Order') }}" class="btn btn-outline-secondary mr-2"
								role="button">Batal</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection