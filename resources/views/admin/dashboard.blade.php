@extends('admin.master')

@section('addCss')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('addJavascript')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    var myDate = new Date();
    var hrs = myDate.getHours();

    var greet;

        if (hrs < 11)
        greet='Selamat Pagi!';
        else if(hrs >= 11 && hrs <= 15)
        greet='Selamat Siang!';
        else if(hrs >= 15 && hrs <= 18)
        greet='Selamat Sore!';
        else if(hrs >= 18 && hrs <= 24)
        greet='Selamat malam!'

    document.getElementById('lblGreetings2').innerHTML = '<br>' + greet;
</script>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Dashboard</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active"></li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
        <div class="card text-left justify-content-center pl-5"  style="border-radius: 20px;height: 460px;background: rgb(0,0,36);
        background: linear-gradient(180deg, rgba(0,0,36,1) 0%, rgba(162,169,213,1) 0%, rgba(41,134,153,1) 100%);">
                <h3 id="lblGreetings2"></h3>
                {{-- <h1>Hallo.. {{Auth::user()->name}}, Apa Kabar?</h1> --}}
                <p>Kamu bisa saja mengalami pahit getirnya perjalanan hidup,tetapi kamu <br>
                   tidak boleh berhenti dan tidak boleh kehilangan impianmu.</p>
                <br>
                <p>Sedikit kemajuan setiap hari menambah hasil yang besar!</p>
        </div>

            <div class="card pt-4" style="border-radius: 20px; background-color: gray;">
                <div class="content-header">
                    <h1 class="m-0 text-dark text-center">Data</h1>
                </div>
                <div class="row justify-content-center p-3">
                    <div class="col-4 justify-center-center mb-2">
                        <div class="card" style="border-radius: 20px;">
                            <img src="{{-- {{asset('img/gmbr1.jpg')}} --}}" class="card-img-top p-3" alt="gmbr1" style="border-radius: 30px">
                            <div class="card-body">
                                <h5 class="card-title text-center">Jurusan</h5>
                                <br>
                                <p class="card-text">Bagian dari suatu fakultas atau sekolah tinggi yang bertanggung jawab untuk mengelola dan mengembangkan suatu bidang studi.</p>
                                <a href="{{-- {{route('daftarJurusan')}} --}}" class="btn btn-primary float-right">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 justify-center-center mb-2">
                        <div class="card" style="border-radius: 20px;">
                            <img src="{{-- {{asset('img/gmbr2.jpg')}} --}}" class="card-img-top p-3" alt="gmbr2" style="border-radius: 30px">
                            <div class="card-body">
                                <h5 class="card-title text-center">Mata Pelajaran</h5>
                                <br>
                                <p class="card-text">Pelajaran yang harus diajarkan (dipelajari) untuk sekolah dasar atau sekolah lanjutan sehingga kita dapat mendapatkan ilmu.</p>
                                <a href="{{-- {{route('daftarMapel')}} --}}" class="btn btn-primary float-right">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

@endsection
