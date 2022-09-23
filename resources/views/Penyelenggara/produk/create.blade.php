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
                    <ol class="breadcrumb float-sm-right ml-0">
                        <li class="breadcrumb-item"><a href="{{ route('daftarPenyelenggara_produk') }}">Dashboard</a></li>
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
                    <form action="{{ route('storePenyelenggara_produk') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nama_produk">nama produk</label>
                            <input type="text" name="nama_produk" id="nama_produk" class="form-control"
                                required="required" placeholder="Masukkan nama produk">
                        </div>
                        
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                                <select id="kategori" name="kategori" class="form-control">
                                    <option selected>pilih kategori</option>
                                    <option value="">Aktivitas</option>
                                    <option value="">Kursus</option>
                                    <option value="">Experience</option>
                                    <option value="">Gratis</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="harga_produk">harga produk</label>
                            <input type="text" name="harga_produk" id="harga_produk" class="form-control"
                                required="required" placeholder="Masukkan harga produk">
                        </div>

                        <div class="form-group">
                            <label for="status_pertemuan">status pertemuan</label>
                            <input type="text" name="status_pertemuan" id="status_pertemuan" class="form-control"
                                required="required" placeholder="Masukkan status pertemuan">
                        </div>

                        <div class="form-group">
                            <label for="stock">stock</label>
                            <input type="text" name="stock" id="stock" class="form-control" required="required"
                                placeholder="Masukkan stock">
                        </div>

                        <div class="form-group">
                            <label for="pertemuan">pertemuan</label>
                            <input type="text" name="pertemuan" id="pertemuan" class="form-control" required="required"
                                placeholder="Masukkan pertemuan">
                        </div>

                        <div class="form-group">
                            <label for="waktu_temu">waktu temu</label>
                            <input type="text" name="waktu_temu" id="waktu_temu" class="form-control"
                                required="required" placeholder="Masukkan waktu temu">
                        </div>

                        <div class="form-group">
                            <label for="umur">umur</label>
                            <input type="text" name="umur" id="umur" class="form-control" required="required"
                                placeholder="Masukkan umur">
                        </div>

                        <div class="form-group">
                            <label for="keterangan">keterangan</label>
                            <textarea name="keterangan" id="keterangan" rows="3" class="form-control"
                                required="required" placeholder="Masukkan keterangan"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="manfaat">manfaat</label>
                            <textarea name="manfaat" id="manfaat" rows="3" class="form-control" required="required"
                                placeholder="Masukkan manfaat"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="bundling">bundling</label>
                            <input type="text" name="bundling" id="bundling" class="form-control" required="required"
                                placeholder="Masukkan bundling">
                        </div>

                        <div class="form-group">
                            <label for="user_id">user id</label>
                            <input type="text" name="user_id" id="user_id" class="form-control" required="required"
                                placeholder="Masukkan user id">
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