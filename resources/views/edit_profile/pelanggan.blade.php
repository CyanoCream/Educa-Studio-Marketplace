<div>
    <a href="#" data-toggle="modal" data-target="#pelanggan">
        <h5 class="d-flex justify-content-between">
            <i class="fa fa-user" aria-hidden="true"></i>
            Edit Profile
            <a href="" data-toggle="modal" data-target="#pelanggan"><i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </h5>
    </a>
    <hr>
</div>

<div class="modal fade" id="pelanggan" tabindex="-1" aria-labelledby="pelangganLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 20px">
            <div class="modal-header">
                <h3 class="modal-title m-3" id="pelangganLabel">Edit Profil</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('storePelanggan') }}" method="post" class="form">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="foto">foto</label>
                        <input type="file" name="foto" id="foto" class="form-control" required="required"
                            placeholder="Masukkan foto">
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">Nama</label>
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control"
                            required="required" placeholder="Masukkan nama_pelanggan">
                    </div>

                    <div class="form-group">
                        <label for="no_telp">No Telp</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control" required="required"
                            placeholder="Masukkan no_telp">
                    </div>

                    <div class="form-group">
                        <label for="alamat_pel">Alamat</label>
                        <input type="text" name="alamat_pel" id="alamat_pel" class="form-control" required="required"
                            placeholder="Masukkan alamat_pel">
                    </div>

                    <div class="form-group">
                        <label for="provinsi_pel">Provinsi</label>
                        <input type="text" name="provinsi_pel" id="provinsi_pel" class="form-control"
                            required="required" placeholder="Masukkan provinsi_pel">
                    </div>

                    <div class="form-group">
                        <label for="kota_pel">Kota</label>
                        <input type="text" name="kota_pel" id="kota_pel" class="form-control" required="required"
                            placeholder="Masukkan kota_pel">
                    </div>

                    <div class="form-group">
                        <label for="kecamatan_pel">Kecamatan</label>
                        <input type="text" name="kecamatan_pel" id="kecamatan_pel" class="form-control"
                            required="required" placeholder="Masukkan kecamatan_pel">
                    </div>

                    <div class="text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>