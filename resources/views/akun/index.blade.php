@extends('akun.master')

@section('content')
<div class="card" style="background-color: blue">
    <div class="card-body m-5" style="background-color: gray; border-radius: 20px;">
        <h1 class="text-center p-3" style="border-radius: 20px; background: rgb(50,59,144);                    
        background: linear-gradient(180deg, rgba(50,59,144,1) 0%, rgba(148,35,150,1) 53%, rgba(181,16,100,1) 100%);">
        Akun
        </h1>
        <div class="card p-3" style="border-radius: 20px">
            @include('edit_profile')
            @include('daftar_peserta')
            @include('daftar_alamat')
        </div>
        <div class="card p-3 mt-4" style="border-radius: 20px">
            @include('ubah_password')
        </div>
        <div class="card p-3 mt-4" style="border-radius: 20px">
            @include('kelas_online')
            @include('pengiriman')
            @include('merchant')
            @include('product_detail')
            @include('status_order')
        </div>
        <div class="card p-3 mt-4" style="border-radius: 20px">
            @include('komunitas')
        </div>
        <div class="card p-3 mt-4" style="border-radius: 20px">
            @include('ketentuan')
            @include('tentang_kami')
            @include('hubungi_kami')
            @include('kebijakan_privasi')
            @include('ulasan')
        </div>
        <div class="card p-3 mt-4" style="border-radius: 20px">
            <h1 class="text-center p-1 text-danger"><a href="#">logout</a></h1>
        </div>
    </div>
</div>
@endsection

