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

                <form action="{{ route('updatePelanggan',['id'=>$pelanggan->id]) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="foto">foto</label>
                        <input type="file" name="foto" id="foto" class="form-control" required="required" value="{{ $pelanggan->foto }}" placeholder="Masukkan foto">
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">nama pelanggan</label>
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" required="required" value="{{ $pelanggan->nama_pelanggan }}" placeholder="Masukkan nama_pelanggan">
                    </div>

                    <div class="form-group">
                        <label for="no_telp">no.telp</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control" required="required" value="{{ $pelanggan->no_telp }}" placeholder="Masukkan no_telp">
                    </div>

                    <div class="form-group">
                        <label for="alamat_pel">alamat pelanggan</label>
                        <input type="text" name="alamat_pel" id="alamat_pel" class="form-control" required="required" value="{{ $pelanggan->alamat_pel }}" placeholder="Masukkan alamat_pel">
                    </div>

                    <div class="form-group">
                        <label for="provinsi_pel">provinsi pelanggan</label>
                        <input type="text" name="provinsi_pel" id="provinsi_pel" class="form-control" required="required" value="{{ $pelanggan->provinsi_pel }}" placeholder="Masukkan provinsi_pel">
                    </div>

                    <div class="form-group">
                        <label for="kota_pel">kota pelanggan</label>
                        <input type="text" name="kota_pel" id="kota_pel" class="form-control" required="required" value="{{ $pelanggan->kota_pel }}" placeholder="Masukkan kota_pel">
                    </div>

                    <div class="form-group">
                        <label for="kecamatan_pel">kecamatan pelanggan</label>
                        <input type="text" name="kecamatan_pel" id="kecamatan_pel" class="form-control" required="required" value="{{ $pelanggan->kecamatan_pel }}" placeholder="Masukkan kecamatan_pel">
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