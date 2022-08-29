<div>
    <a href="#" data-toggle="modal" data-target="#tokenListrik">
        <h5 class="d-flex justify-content-between">
            <i class="fa fa-tachometer" aria-hidden="true"></i>
            Token Listrik
            <a href="#" data-toggle="modal" data-target="#tokenListrik"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </h5>
    </a>
    <hr>
</div>



  <div class="modal fade" id="tokenListrik" tabindex="-1" aria-labelledby="tokenListrikLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="border-radius: 20px">
        <div class="modal-header">
          <h4 class="modal-title m-3" id="tokenListrikLabel">Token Listrik</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body m-3">
            <div class="form">
                <div></div>
                <div class="css-4r2xna">
                    <div class="css-utaa48">Nomor Meter PLN / ID Pelanggan</div>
                    <div style="display: flex;">
                        <input label="Nomor Meter PLN / ID Pelanggan" placeholder="1234xxx" type="text" name="token" rows="1" class="css-13f9adq" value="">
                    </div>
                    <span class="css-i4layv">Lihat nomor token di email atau riwayat transaksi</span>
                </div>
                <div class="css-4r2xna">
                    <div class="css-utaa48">Nomor Handphone</div>
                    <div style="display: flex;">
                        <input label="Nomor Handphone" placeholder="08xxx" type="text" name="phone" rows="1" class="css-13f9adq" value="">
                    </div>
                </div>
                {{-- <div class="form-group css-4r2xna">
                    <div class="css-utaa48">Nominal</div>
                    <div class="css-1rxrky5">
                        <div class="container-input">
                            <button type="button" class="form-select-with-checked-box">
                                <span class="placeholder">Pilih Nominal</span>
                            </button>
                            <div class="icon-right">
                                <svg class="" viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: inline-block; vertical-align: middle;">
                                    <path fill="#6c727c" d="M8.172 9.261L12 13.09l3.827-3.829c.509-.508 1.326-.521 1.815-.032.49.49.475 1.306-.033 1.814l-4.718 4.72c-.49.489-1.292.489-1.782 0l-4.719-4.72c-.508-.508-.521-1.324-.032-1.814.49-.49 1.306-.476 1.814.032z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="css-giou2k"></div>
                    </div>
                </div> --}}
                <div class="form-group col-md-6 pl-0">
                    <label for="">Nominal</label>
                    <select id="" class="form-control">
                      <option selected>Pilih...</option>
                      <option>Rp 10.000</option>
                      <option>Rp 20.000</option>
                      <option>Rp 30.000</option>
                      <option>Rp 40.000</option>
                      <option>Rp 50.000</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>