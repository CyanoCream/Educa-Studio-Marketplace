@extends('admin.master')


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
                <h1>Hallo.. {{Auth::user()->name}}, apa kabar?</h1>
                <p>Kamu bisa saja mengalami pahit getirnya perjalanan hidup,tetapi kamu <br>
                    tidak boleh berhenti dan tidak boleh kehilangan impianmu.</p>
                <br>
                <p>Sedikit kemajuan setiap hari menambah hasil yang besar!</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>@{{ pesanan.length }}</h3>
                            <p>Order</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{route('daftarOrder')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">

                            <h3>@{{ produks.length }}</h3>
                            <p>Produk</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('daftarProduk')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>@{{ users.length }}</h3>
                            <p>User</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('daftarUser')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>@{{ penyelenggara.length }}</h3>
                            <p>Penyelenggara</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-columns"></i>
                        </div>
                        <a href="{{route('daftarPenyelenggara')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="card m-4" style="border-radius: 20px; background: rgb(232,233,22);
    background: linear-gradient(180deg, rgba(232,233,22,1) 0%, rgba(9,121,23,1) 50%, rgba(0,255,221,1) 100%);">
        <h3 class="text-center pt-4"><strong>Tabel Order</strong></h3>
        <div class="row justify-content-center pb-4">
            <div class="col-6">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div> --}}
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
    const labels = [
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];

    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: [
                'white',
                'blue',
                'pink',
                'gray',
                'yellow',
                'orange',
                'purple',
                'red',
                'black',
                'navy',
                'violet',
                'brown'
            ],
        data: [3, 1, 3, 2, 1, 1, 1, 1, 3, 5, 2, 1],
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {}
    };

    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
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