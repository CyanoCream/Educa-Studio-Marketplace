<div>
    <a href="#" data-toggle="modal" data-target="#pulsa">
        <h5 class="d-flex justify-content-between">
            <i class="fa fa-credit-card" aria-hidden="true"></i>
            Pulsa
            <a href="#" data-toggle="modal" data-target="#pulsa"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </h5>
    </a>
    <hr>
</div>

  <div class="modal fade" id="pulsa" tabindex="-1" aria-labelledby="pulsaLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="border-radius: 20px">
        <div class="modal-header">
          <h3 class="modal-title m-3" id="pulsaLabel">Pulsa</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#"  class="m-3">
            <div class="form">
              <div class="css-4r2xna">
                <p class="css-utaa48 mb-2">Nomor Handphone</p>
                <div style="display: flex;">
                  <input label="Nomor Handphone" placeholder="08xxx" type="text" name="phone" class="css-13f9adq" value=""></div>
                </div>
              </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" onclick="submit(this)" class="btn btn-primary" data-dismiss="modal">Submit</button>        
        </div>
      </div>
    </div>
  </div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    submit = function (button) {
        swal({
        title: "Sukses",
        text: "Pembelian telah berhasil!",
        icon: "success",
        button: false,
        timer: 1500,
		});
    }
</script>