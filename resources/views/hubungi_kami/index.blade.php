<div>
    <a href="#" data-toggle="modal" data-target="#hubungiKami">
        <h5 class="d-flex justify-content-between">
            <i class="fa fa-phone-square" aria-hidden="true"></i>
            Hubungi Kami
            <a href="" data-toggle="modal" data-target="#hubungiKami"><i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </h5>
    </a>
    <hr>
</div>

<div class="modal fade" id="hubungiKami" tabindex="-1" aria-labelledby="hubungiKamiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 20px">
            <div class="modal-header">
                <h4 class="modal-title m-3" id="hubungiKamiLabel"> Hubungi Kami</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="css-6c9knn">
                    <form action="{{ route('storeHubungi_Kami_akun') }}" method="post">
						{{csrf_field()}}

						<div class="form-group">
							<label for="nama">nama</label>
							<input type="text" name="nama" id="nama" class="form-control" required="required" placeholder="Masukkan nama">
						</div>

						<div class="form-group">
							<label for="email">email</label>
							<input type="email" name="email" id="email" class="form-control" required="required" placeholder="Masukkan email">
						</div>

						<div class="form-group">
							<label for="nomorponsel">nomor ponsel</label>
							<input type="text" name="nomorponsel" id="nomorponsel" class="form-control" required="required" placeholder="Masukkan nomor ponsel">
						</div>

						<div class="form-group">
							<label for="topik">topik</label>
							<input type="text" name="topik" id="topik" class="form-control" required="required" placeholder="Masukkan topik">
						</div>

						<div class="form-group">
							<label for="pesan">pesan</label>
							<textarea type="text" name="pesan" id="pesan" rows="3" class="form-control" required="required"></textarea>
						</div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit"  class="btn btn-primary">Submit</button>
                        </div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>