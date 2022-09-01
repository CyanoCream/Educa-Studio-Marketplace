@extends('admin.layout')

@section('style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('content')

    <!-- Main content -->
    <div class="content-wrapper min-100-vh">
        <div class="content text-dark">
            <div class="container-fluid">
                <div class="card text-left justify-content-center pl-5"
                    style="border-radius: 20px;height: 460px;background: rgb(0,0,36);
            background: linear-gradient(180deg, rgba(0,0,36,1) 0%, rgba(162,169,213,1) 0%, rgba(41,134,153,1) 100%);">
                    <h3 id="lblGreetings2"></h3>
                    {{-- <h1>Hallo.. {{Auth::user()->name}}, Apa Kabar?</h1> --}}
                    <p>Kamu bisa saja mengalami pahit getirnya perjalanan hidup,tetapi kamu <br>
                        tidak boleh berhenti dan tidak boleh kehilangan impianmu.</p>
                    <br>
                    <p>Sedikit kemajuan setiap hari menambah hasil yang besar!</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
@endpush
