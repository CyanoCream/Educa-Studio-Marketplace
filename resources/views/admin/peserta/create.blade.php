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
                        <ol class="breadcrumb float-sm-right ml-0 d-flex">
                            <li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{ route('daftarPeserta') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" style="align-items: center; display: flex;">Tambah Peserta</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('storePeserta') }}" method="post" id="tambahPeserta">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="id_produk">id_produk</label>
<<<<<<< HEAD
                                <input type="text" name="id_produk" id="id_produk" class="form-control" required="required" placeholder="Masukkan id_produk">
=======
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
>>>>>>> 8a8b1e0d3fb23705eeedc5f741612dcae2a73a3c
                            </div>
    
                            <div class="form-group">
                                <label for="tgl_pembayaran">tgl_pembayaran</label>
<<<<<<< HEAD
                                <input type="text" name="tgl_pembayaran" id="tgl_pembayaran" class="form-control" required="required" placeholder="Masukkan tgl_pembayaran">
=======
                                <input type="date" name="tgl_pembayaran" id="tgl_pembayaran" class="form-control" required="required" placeholder="Masukkan tgl_pembayaran">
>>>>>>> 8a8b1e0d3fb23705eeedc5f741612dcae2a73a3c
                            </div>
    
                            <div class="form-group">
                                <label for="jumlah_dana">jumlah_dana</label>
                                <input type="text" name="jumlah_dana" id="jumlah_dana" class="form-control" required="required" placeholder="Masukkan jumlah_dana">
                            </div>
    
                            <div class="form-group">
                                <label for="nama_peserta">nama_peserta</label>
                                <input type="text" name="nama_peserta" id="nama_peserta" class="form-control" required="required" placeholder="Masukkan nama_peserta">
                            </div>
    
                            <div class="form-group">
                                <label for="nama_panggilan">nama_panggilan</label>
                                <input type="text" name="nama_panggilan" id="nama_panggilan" class="form-control" required="required" placeholder="Masukkan nama_panggilan">
                            </div>
<<<<<<< HEAD
    
                            <div class="form-group">
                                <label for="jenis_kelamin">jenis_kelamin</label>
                                <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" required="required" placeholder="Masukkan jenis_kelamin">
=======
                            
                            <div class="form-group">
                                <label for="jenis_kelamin">jenis_kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
>>>>>>> 8a8b1e0d3fb23705eeedc5f741612dcae2a73a3c
                            </div>
    
                            <div class="form-group">
                                <label for="hubungan">hubungan</label>
                                <input type="text" name="hubungan" id="hubungan" class="form-control" required="required" placeholder="Masukkan hubungan">
                            </div>
    
                            <div class="text-right">
                                <a href="{{ route('daftarPeserta') }}" class="btn btn-outline-secondary mr-2"
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
