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
                        <li class="breadcrumb-item"><a href="{{ route('daftarUser') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('storeUser') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">nama</label>
                            <input type="text" name="name" id="name" class="form-control" required="required"
                                placeholder="Masukkan name">
                        </div>

                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" name="email" id="email" class="form-control" required="required"
                                placeholder="Masukkan email">
                        </div>

                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                required="required" placeholder="Masukkan password">
                        </div>

                        <div class="form-group">
                            <label for="role">role</label>
                                <select id="role" name="role" class="form-control">
                                <option selected>pilih role</option>
                                <option value="">Admin</option>
                                <option value="">Penyelenggara</option>
                                <option value="">User</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="foto">foto</label>
                            <input type="file" name="foto" id="foto" class="form-control" required="required"
                                placeholder="Masukkan foto">
                        </div>

                        <div class="form-group">
                            <label for="panggilan">panggilan</label>
                            <input type="text" name="panggilan" id="panggilan" class="form-control" required="required"
                                placeholder="Masukkan panggilan">
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir">tg.lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required="required"
                                placeholder="Masukkan tgl.lahir">
                        </div>

                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" required="required"
                                placeholder="Masukkan alamat">
                        </div>

                        <div class="form-group">
                            <label for="provinsi">provinsi</label>
                            <input type="text" name="provinsi" id="provinsi" class="form-control" required="required"
                                placeholder="Masukkan provinsi">
                        </div>

                        <div class="form-group">
                            <label for="kota">kota</label>
                            <input type="text" name="kota" id="kota" class="form-control" required="required"
                                placeholder="Masukkan kota">
                        </div>

                        <div class="form-group">
                            <label for="kecamatan">kecamatan</label>
                            <input type="text" name="kecamatan" id="kecamatan" class="form-control" required="required"
                                placeholder="Masukkan kecamatan">
                        </div>

                        <div class="form-group">
                            <label for="notelp">no.telp</label>
                            <input type="text" name="notelp" id="notelp" class="form-control" required="required"
                                placeholder="Masukkan notelp">
                        </div>

                        <div class="form-group">
                            <label for="icon_penyelenggara">icon penyelenggara</label>
                            <input type="file" name="icon_penyelenggara" id="icon_penyelenggara" class="form-control" required="required"
                                placeholder="Masukkan icon penyelenggara">
                        </div>

                        <div class="form-group">
                            <label for="nama_penyelenggara">nama penyelenggara</label>
                            <input type="text" name="nama_penyelenggara" id="nama_penyelenggara" class="form-control" required="required"
                                placeholder="Masukkan nama penyelenggara">
                        </div>

                        <div class="form-group">
                            <label for="kota_penyelenggara">kota penyelenggara</label>
                            <input type="text" name="kota_penyelenggara" id="kota_penyelenggara" class="form-control" required="required"
                                placeholder="Masukkan kota penyelenggara">
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" required="required"
                                placeholder="Masukkan deskripsi"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="jam_operasional">jam operasional</label>
                            <input type="text" name="jam_operasional" id="jam_operasional" class="form-control" required="required"
                                placeholder="Masukkan jam operasional">
                        </div>

                        <div class="text-right">
                            <a href="{{ route('daftarUser') }}" class="btn btn-outline-secondary mr-2"
                                role="button">Batal</a>
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