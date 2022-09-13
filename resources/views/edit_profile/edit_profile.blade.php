<div>
    <a href="#" data-toggle="modal" data-target="#editProfile">
        <h5 class="d-flex justify-content-between">
            <i class="fa fa-user" aria-hidden="true"></i>
            Edit Profil
            <a href="" data-toggle="modal" data-target="#editProfile"><i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </h5>
    </a>
    <hr>
</div>

<div class="modal fade" id="editProfile" tabindex="-1" aria-labelledby="editProfileLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 20px">
            <div class="modal-header">
                <h3 class="modal-title m-3" id="editProfileLabel">Edit Profil</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form" action="{{ route('userUpdate',['id'=>Auth::user()->id])}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-field">
                        <div class="css-1k4vibs text-center">
                            
                            <canvas style="width: 50px; height: 25px;"></canvas>
                            <div class="css-4r2xna">
                                <div class="container-body">
                                    <div class="body">
                                        <img src="https://kiddo.id/wp-content/uploads/2020/02/icon-kiddo.png"
                                            alt="" width="150px">
                                    </div>
                                    <div class="container-btn-ubah">
                                        <input type="file" name="foto" accept="image/png, image/jpeg, image/jpg" class="css-17jnaqn">
                                        {{-- <button color="white" type="button" class="css-1ynihft">Ubah Foto
                                            Profile</button> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="css-1y5cgar">
                            </div>
                        </div>
                        <div class="css-4r2xna">
                            <div class="css-utaa48"><strong>Nama </strong></div>
                            <input label="Nama Lengkap" placeholder="Nama Lengkap" name="name" type="text" rows="1" class="css-13f9adq w-100" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="css-4r2xna">
                            <div class="css-utaa48"><strong>Nama Panggilan </strong></div>
                            <input label="Nama Panggilan" placeholder="Nama Panggilan" name="panggilan" type="text" rows="1" class="css-13f9adq w-100" value="{{ Auth::user()->panggilan }}">
                        </div>
                        <div class="css-4r2xna">
                            <div class="css-utaa48"><strong>Email </strong></div>
                            <input label="Email" placeholder="Email" name="email" type="email" rows="1" class="css-13f9adq w-100" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="css-4r2xna">
                            <div class="css-utaa48"><strong>Password </strong></div>
                            <input label="Password" placeholder="**********" name="password" type="password" rows="1" class="css-13f9adq w-100" value="{{ Auth::user()->password }}">
                        </div>
                        <div class="css-4r2xna">
                            <div class="css-utaa48"><strong>Alamat </strong></div>
                            <input label="Alamat" placeholder="Alamat" name="alamat" type="text" rows="1" class="css-13f9adq w-100" value="{{ Auth::user()->alamat }}">
                        </div>
                        <div class="css-16adxda">
                            <div class="css-4r2xna">
                                <div class="css-utaa48"><strong>Tanggal Lahir</strong></div>
                                <input type="date" name="tgl_lahir" value="{{ Auth::user()->tgl_lahir }}" class="form-control">
                            </div>
                        </div>
                        <div class="css-4r2xna">
                            <div class="css-utaa48"><strong>Provinsi </strong></div>
                            <input label="provinsi" placeholder="Provinsi" name="provinsi" type="text" rows="1" class="css-13f9adq w-100" value="{{ Auth::user()->provinsi }}">
                        </div>
                        <div class="css-4r2xna">
                            <div class="css-utaa48"><strong>Kota </strong></div>
                            <input label="kota" placeholder="Kota" name="kota" type="text" rows="1" class="css-13f9adq w-100" value="{{ Auth::user()->kota }}">
                        </div>
                        <div class="css-4r2xna">
                            <div class="css-utaa48"><strong>Kecamatan </strong></div>
                            <input label="Kecamatan" placeholder="Kecamatan" name="kecamatan" type="text" rows="1" class="css-13f9adq w-100" value="{{ Auth::user()->kecamatan }}">
                        </div>
                        <div class="css-1b8mmk5">
                            <div class="css-4r2xna">
                                <div class="css-utaa48">Nomor Ponsel</div>
                                <input placeholder="+62" label="Nomor Ponsel" name="notelp" type="text" rows="1" class="css-1e8e7rv w-100" value="">
                            </div>
                        </div>


                        <input type="hidden" name="role" value="{{ Auth::user()->role }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
