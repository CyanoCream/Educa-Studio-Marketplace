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
					<ol class="breadcrumb float-sm-right d-flex">
						<li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{route('daftarOrder')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" style="align-items: center; display: flex;">Edit Order</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updateOrder',['id'=>$order->id]) }}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="status_order">status order</label>
							<input type="text" name="status_order" id="status_order" class="form-control" required="required" value="{{ $order->status_order }}" placeholder="Masukkan status_order">
						</div>

						<div class="form-group">
							<label for="id_produk">id produk</label>
							<input type="text" name="id_produk" id="id_produk" class="form-control" required="required" value="{{ $order->id_produk }}" placeholder="Masukkan id_produk">
						</div>

						<div class="form-group">
							<label for="id_penyelenggara">id penyelenggara</label>
							<input type="text" name="id_penyelenggara" id="id_penyelenggara" class="form-control" required="required" value="{{ $order->id_penyelenggara }}" placeholder="Masukkan id_penyelenggara">
						</div>

						<div class="form-group">
							<label for="jumlah_pesanan">jumlah pesanan</label>
							<input type="text" name="jumlah_pesanan" id="jumlah_pesanan" class="form-control" required="required" value="{{ $order->jumlah_pesanan }}" placeholder="Masukkan jumlah_pesanan">
						</div>

						<div class="form-group">
							<label for="kurir">kurir</label>
							<input type="text" name="kurir" id="kurir" class="form-control" required="required" value="{{ $order->kurir }}" placeholder="Masukkan kurir">
						</div>

                        <div class="form-group">
							<label for="alamat_pen">alamat penerima</label>
							<input type="text" name="alamat_pen" id="alamat_pen" class="form-control" required="required" value="{{ $order->alamat_pen }}" placeholder="Masukkan alamat_pen">
						</div>
						<div class="text-right">
							<a href="{{ route('daftarOrder') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
