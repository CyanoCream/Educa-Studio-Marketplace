<div>
    <a href="#" data-toggle="modal" data-target="#bpjsKesehatan">
        <h5 class="d-flex justify-content-between">
            <i class="fa fa-id-card-o" aria-hidden="true"></i>
            BPJS Kesehatan
            <a href="" data-toggle="modal" data-target="#bpjsKesehatan"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </h5>
    </a>
    <hr>
</div>

<div class="modal fade" id="bpjsKesehatan" tabindex="-1" aria-labelledby="bpjsKesehatanLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="border-radius: 20px">
        <div class="modal-header">
          <h4 class="modal-title m-3" id="bpjsKesehatanLabel">BPJS Kesehatan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="#" class="m-3">
                <div class="form">
                    <div></div>
                    <div class="css-4r2xna">
                        <div class="css-utaa48">Nomor BPJS</div>
                        <div style="display: flex;">
                            <input label="Nomor BPJS" placeholder="1234xxx" type="text" name="bpjs" rows="1" class="css-13f9adq" value="">
                        </div>
                    </div>
                    <div class="form-group css-4r2xna">
                        <div class="css-utaa48">Bayar Hingga</div>
                        <div class="css-1rxrky5">
                            <div class="form-group col-md-6 pl-0">
                                <select id="" class="form-control">
                                  <option selected>Pilih Pembayaran</option>
                                  <option>1 Bulan</option>
                                  <option>2 Bulan</option>
                                  <option>3 Bulan</option>
                                  <option>4 Bulan</option>
                                  <option>5 Bulan</option>
                                </select>
                            </div>
                            <div class="css-giou2k"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" onclick="save(this)" class="btn btn-primary" data-dismiss="modal">Submit</button>        
        </div>
      </div>
    </div>
  </div>  

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    save = function (button) {
        swal({
        title: "Sukses",
        text: "Pembayaran telah berhasil!",
        icon: "success",
        button: false,
        timer: 1500,
		});
    }
</script>