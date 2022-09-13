@extends('admin.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Create</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right ml-0">
                            <li class="breadcrumb-item"><a href="{{ route('daftarUlasan') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambah Ulasan</li>
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
                                <label for="nama">nama</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    required="required" placeholder="Masukkan nama">
                            </div>

                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    required="required" placeholder="Masukkan email">
                            </div>

                            <div class="form-group">
                                <label for="penilaian">penilaian</label>
                                <textarea name="penilaian" id="penilaian" rows="3" class="form-control" required="required" placeholder="Masukkan penilaian"></textarea>
                            </div>

                            <div class="text-right">
                                <a href="{{ route('daftarUlasan') }}" class="btn btn-outline-secondary mr-2"
                                    role="button">Batal</a>
                                <button type="submit" onclick="alert('Anda Berhasil Simpan')" class="btn btn-primary">Simpan</button>
                                {{-- <a onclick="save(this)" data-url="{{route('storeUlasan', ['id' => $ulasan->id])}}"
                                    class="btn btn-primary btn-sm" role="button">Simpan</a> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection