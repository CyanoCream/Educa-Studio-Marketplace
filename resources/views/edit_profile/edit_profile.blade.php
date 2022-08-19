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

                <form class="form">
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
                                        <input type="file" accept="image/png, image/jpeg, image/jpg" class="css-17jnaqn">
                                        {{-- <button color="white" type="button" class="css-1ynihft">Ubah Foto
                                            Profile</button> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="css-1y5cgar">
                            </div>
                        </div>
                        <div class="form-group css-4r2xna">
                            <div class="css-utaa48"><strong>Sapaan</strong></div>
                            <div class="css-1rxrky5">
                                <div class="form-group col-md-6 pl-0">
                                    <select id="" class="w-100">
                                        <option selected>Pilih Sapaan</option>
                                        <option>Papa</option>
                                        <option>Mama</option>
                                    </select>
                                </div>
                                {{-- <div class="container-input">
                             <button type="button" class="form-select-with-checked-box">
                                 <span class="placeholder">Pilih Sapaan</span>
                             </button>
                             <div class="icon-right">
                                 <svg class="" viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: inline-block; vertical-align: middle;">
                                     <path fill="#6c727c" d="M8.172 9.261L12 13.09l3.827-3.829c.509-.508 1.326-.521 1.815-.032.49.49.475 1.306-.033 1.814l-4.718 4.72c-.49.489-1.292.489-1.782 0l-4.719-4.72c-.508-.508-.521-1.324-.032-1.814.49-.49 1.306-.476 1.814.032z">
                                         </path>
                                     </svg>
                                 </div>
                             </div> --}}
                                <div class="css-giou2k">
                                </div>
                            </div>
                        </div>
                        <div class="css-4r2xna">
                            <div class="css-utaa48"><strong>Nama Lengkap</strong></div>
                            <input label="Nama Lengkap" placeholder="" name="name" type="text" rows="1" class="css-13f9adq w-100" value="">
                        </div>
                        <div class="css-1b8mmk5">
                            <div class="css-4r2xna">
                                <div class="css-utaa48">Nomor Ponsel</div>
                                <input placeholder="+62" label="Nomor Ponsel" name="phone" type="text" rows="1" class="css-1e8e7rv w-100" value="">
                            </div>
                        </div>
                        <div class="css-1b8mmk5">
                            <div class="css-4r2xna">
                                <div class="css-utaa48"><strong>Email</strong></div>
                                <div class="d-flex">
                                    <input label="Alamat Email" placeholder="" name="email" type="text"
                                    rows="1" class="css-12i3ll2 w-100" value="anindasulistya@gmail.com">
                                        <button color="secondary" type="button" class="css-2adxkt">Verifikasi</button>
                                </div>
                            </div>
                        </div>
                        <div class="css-16adxda">
                            <div class="css-4r2xna">
                                <div class="css-utaa48"><strong>Tanggal Lahir</strong></div>
                                <input type="date" class="form-control">
                                {{-- <div class="form-input">
                                    <p>Pilih tanggal</p>
                                    <svg class="" viewBox="0 0 24 24" width="24" height="24"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        style="display: inline-block; vertical-align: middle;">
                                        <path fill="#6c727c"
                                            d="M14.4,0.9 L14.4,1.8 C15.39,1.8 16.2,2.61 16.2,3.6 L16.2,14.4 C16.2,15.39 15.39,16.2 14.4,16.2 L1.8,16.2 C0.81,16.2 0,15.39 0,14.4 L0,3.6 C0,2.61 0.81,1.8 1.8,1.8 L1.8,0.9 C1.8,0.405 2.205,0 2.7,0 C3.195,0 3.6,0.405 3.6,0.9 L3.6,1.8 L12.6,1.8 L12.6,0.9 C12.6,0.405 13.005,0 13.5,0 C13.995,0 14.4,0.405 14.4,0.9 Z M13.5,14.4 C13.995,14.4 14.4,13.995 14.4,13.5 L14.4,8.1 C14.4,7.605 13.995,7.2 13.5,7.2 L2.7,7.2 C2.205,7.2 1.8,7.605 1.8,8.1 L1.8,13.5 C1.8,13.995 2.205,14.4 2.7,14.4 L13.5,14.4 Z">
                                        </path>
                                    </svg>
                                </div> --}}
                            </div>
                        </div>
                        <div class="separator-domicile"><strong>Tempat Tinggal</strong></div>
                        <div class="css-4r2xna">
                            <div class="css-utaa48">Provinsi</div>
                            <div style="display: flex;"><input label="Provinsi" placeholder="Masukkan Provinsi"
                                    name="province" type="text" rows="1" class="css-13f9adq w-100"
                                    value="">
                            </div>
                            <span class="css-i4layv">contoh: DKI Jakarta, Bandung, Tangerang</span>
                        </div>
                        <div class="css-4r2xna">
                            <div class="css-utaa48"><strong>Kota</strong></div>
                            <div style="display: flex;">
                                <input label="Kota" placeholder="Masukkan Kota" name="city" type="text"
                                    rows="1" class="css-13f9adq w-100" value="">
                            </div>
                            <span class="css-i4layv">contoh: Jakarta Selatan</span>
                        </div>
                        <div class="css-4r2xna">
                            <div class="css-utaa48"><strong>Kecamatan</strong></div>
                            <div style="display: flex;">
                                <input label="Kecamatan" placeholder="Masukkan Kecamatan" name="subdistrict"
                                    type="text" rows="1" class="css-13f9adq w-100" value="">
                            </div>
                            <span class="css-i4layv">contoh: Pasar Minggu</span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
