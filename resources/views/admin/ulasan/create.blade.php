@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Create</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right ml-0 d-flex">
                            <li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{ route('daftarUlasan') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" style="align-items: center; display: flex;">Tambah Ulasan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('storeUlasan') }}" method="post" id="tambahUlasan">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="penilaian">penilaian</label>
                                <input type="text" name="penilaian" id="penilaian" class="form-control"
                                    required="required" placeholder="Masukkan penilaian">
                            </div>

                            <div class="text-right">
                                <a href="{{ route('daftarUlasan') }}" class="btn btn-outline-secondary mr-2"
                                    role="button">Batal</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @push('script')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        var app = new Vue({
            el: '#app',
            data: {
                kategoris: []
            },
            mounted() {

            },
        })

        $('#tambahProduk').on('submit', function(e) {
			e.preventDefault();
            var data = $(this).serialize;
            $.ajax(
                url: 'api/insert-produk',
                dataType: 'json',
				method: 'post',
                data: data,
                success: function(response){
					alert(response.message)
				}
            )
        })
    </script>
@endpush --}}