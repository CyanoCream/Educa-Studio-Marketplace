<div class="modal fade" id="pulsa" tabindex="-1" aria-labelledby="pulsaLabel" aria-hidden="true">
    <div class="modal-dialog">
    <form action="{{route('pesanan.invoice')}}" method="get">
      <div class="modal-content" style="border-radius: 20px">
        <div class="modal-header">
          <h3 class="modal-title m-3" id="pulsaLabel">Checkout</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form">
                </div>
              <div class="css-4r2xna">
                <p class="css-utaa48 mb-2">Nama</p>
                <div style="display: flex;">
                  <input required placeholder="nama peserta" type="text" class="css-13f9adq">
                </div>
                </div>
                <div class="css-4r2xna">
                <p class="css-utaa48 mb-2">Nama Panggilan</p>
                <div style="display: flex;">
                  <input required placeholder="nama panggilan" type="text" class="css-13f9adq" >
                </div>
                </div>
                <div class="css-4r2xna">
                <p class="css-utaa48 mb-2">Pilih Metode Pembayaran</p>
                <div style="display: flex;">
                <select required id="cars">
                  <option value="BNI">BNI Virtual Account</option>
                  <option value="BRI">BRI Virtual Account</option>
                </select>
                </div>
                </div>
                <div class="css-4r2xna">
                  <p class="css-utaa48 mb-2">Pilih Jasa Pengiriman</p>
                  <div style="display: flex;">
                  <select Required id="cars">
                    <option value="JNE">JNE</option>
                    <option value="J&T">J&T</option>
                    <option value="Kantor pos">Kantor Pos</option>
                  </select>
                  </div>
                  </div>
              </div>
            <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
      </form>
      </div>
    </div>
  </div>