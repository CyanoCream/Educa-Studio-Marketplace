@extends('Penyelenggara.master')


@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div id="app" class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card text-left justify-content-center pl-5"
                style="border-radius: 20px;height: 300px;background: rgb(0,0,36);
                    background: linear-gradient(180deg, rgba(0,0,36,1) 0%, rgba(162,169,213,1) 0%, rgba(41,134,153,1) 100%);">
                <h3 id="lblGreetings2"></h3>
                {{-- <h1>Hallo.. {{Auth::user()->name}}, apa kabar?</h1> --}}
                <p>Kamu bisa saja mengalami pahit getirnya perjalanan hidup,tetapi kamu <br>
                    tidak boleh berhenti dan tidak boleh kehilangan impianmu.</p>
                <br>
                <p>Sedikit kemajuan setiap hari menambah hasil yang besar!</p>
            </div>
            <div class="row">
                <div class="col-lg-6">

                    <div class="small-box bg-success">
                        <div class="inner">

                            {{-- <h3>@{{ produks.length }}</h3> --}}
                            <p>Produk</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('daftarPenyelenggara_produk')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            {{-- <h3>@{{ gambars.length }}</h3> --}}
                            <p>Gambar</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('daftarPenyelenggara_gambar')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- @include('admin.calender') --}}
</div>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>

{{-- <link rel="stylesheet" href="{{ asset('calendar/app.css') }}">

<script src="{{ asset('calendar/app.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var myDate = new Date();
    var hrs = myDate.getHours();

    var greet;

    if (hrs < 11)
        greet = 'Selamat Pagi!';
    else if (hrs >= 11 && hrs <= 15)
        greet = 'Selamat Siang!';
    else if (hrs >= 15 && hrs <= 18)
        greet = 'Selamat Sore!';
    else if (hrs >= 18 && hrs <= 24)
        greet = 'Selamat malam!'

    document.getElementById('lblGreetings2').innerHTML = '<br>' + greet;
</script>
@endsection