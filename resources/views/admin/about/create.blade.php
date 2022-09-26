@extends('admin.master')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right ml-0">
                        <li class="breadcrumb-item"><a href="{{ route('daftarProduk') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Produk</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('about.created') }}" method="post">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="nama_produk">Gambar</label>
                            <input type="file" name="gambar" id="nama_produk" class="form-control"
                                required="required" placeholder="Masukkan nama produk">
                        </div>

                        <div class="form-group">
                            <label for="status_pertemuan">Judul</label>
                            <input type="text" name="judul" id="status_pertemuan" class="form-control"
                                required="required" placeholder="Masukkan status pertemuan">
                        </div>

                        <div class="form-group">
                            <label for="stock">Keterangan</label>
                            <input type="text" name="keterangan" id="stock" class="form-control" required="required"
                                placeholder="Masukkan stock">
                        </div>
                        <div class="text-right">
                            <a href="{{ route('about') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
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