@extends('admin.master')

@section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Create</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Tambah Detail Orders</li>
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

                    <div class="form-group">
                        <label for="id_order">id_order</label>
                        <input type="text" name="id_order" id="id_order" class="form-control" required="required" placeholder="Masukkan id_order">
                    </div>

					<div class="form-group">
						<label for="id_produk">id_produk</label>
						<input type="text" name="id_produk" id="id_produk" class="form-control" required="required" placeholder="Masukkan id_produk">
					</div>

                    <div class="form-group">
						<label for="id_varian_order">id_varian_order</label>
						<input type="text" name="id_varian_order" id="id_varian_order" class="form-control" required="required" placeholder="Masukkan id_varian_order">
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
@endsection