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
                            <li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{ route('daftarUser') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" style="align-items: center; display: flex;">Tambah User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('storeUser') }}" method="post" id="tambahUlasan">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    required="required" placeholder="Masukkan name">
                            </div>

                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    required="required" placeholder="Masukkan email">
                            </div>
                            
                            <div class="form-group">
                                <label for="role">role</label>
                                <input type="text" name="role" id="role" class="form-control"
                                    required="required" placeholder="Masukkan role">
                            </div>

                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    required="required" placeholder="Masukkan password">
                            </div>

                            <div class="text-right">
                                <a href="{{ route('daftarUser') }}" class="btn btn-outline-secondary mr-2"
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