<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/chosen.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/pe-icon-7-stroke.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.scrollbar.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/lightbox.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/flaticon.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/megamenu.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/dreaming-attribute.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <title>Child</title>
</head>
<body>
@include('layouts.navbar')
@yield('content')
@include('layouts.footer')

<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/chosen.min.js')}}"></script>
<script src="{{asset('js/countdown.min.js')}}"></script>
<script src="{{asset('js/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('js/lightbox.min.js')}}"></script>
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('js/threesixty.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/mobilemenu.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js2/sweetalert.min.js') }}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@yield('script')
</body>
</html>


<script>

    var appComponent = new Vue({
        el: "#app",
        data: {
            gambars: [],
            produks: [],
            kategoris: [],
            pesertas: [],
            
        },
        mounted(){
            $(document).ready(function () {
                $.ajax({
                url: "/api/get-produk",
                success: function(rsp){
                    appComponent.produks = rsp;
                    // console.log(this.products);
                }
                });
                $.ajax({
                    url: "/api/get-kategori",
                    success: function(rsp){
                        appComponent.kategoris = rsp;
                        // console.log(this.products);
                }});
                // $.ajax({
                // url: "/api/get-gambar",
                // success: function(rsp){
                //     appComponent.gambars = rsp;
                //     console.log(rsp);
                // }
                // });
            });
        },
        computed: {
            
        },
        methods: {
            deleteData(p){
                if (confirm('yakin?????')) {
                    $.get("/api/delete-produk",{data:p},
                        function (data) {
                            location.reload();
                        },
                    );
                }
            },
            getData(p){
                window.location.href = 'produk-detail/' + p ;
                // alert(p);
            },
            getDataProduk(p){
                window.location.href = 'api/get-pesanan//' + p ;
                // alert(p);
            },
            // kategoriFilter(id) {
            //     return this.produk.filter((produk)=> produk.id_kategori = id)
            // }
        }
    });

    $("#form-insert").submit(function(e) {
        //prevent Default functionality
        e.preventDefault();

        var data = $(this).serialize();
        //do your own request an handle the results
        $.ajax({
            url: '/api/insert-produk',
            type: 'post',
            dataType: 'application/json',
            data: data,
            success: function(rsp) {
                console.log(data);
                console.log(rsp);
                if(rsp.status == 200){
                    console.log("im here?");
                    appComponent.produks.push(rsp.data);
                    location.reload();
                }
                console.log(rsp);
            }
        });

    });

    $("#insert-peserta").submit(function(event) {
        //prevent Default functionality
        event.preventDefault();

        var data = $(this).serialize();
        //do your own request an handle the results
        $.ajax({
            url: '/api/insert-peserta',
            type: 'post',
            dataType: 'application/json',
            data: data,
            success: function(rsp) {
                console.log(data);
                console.log(rsp);
                if(rsp.status == 200){
                    console.log("im here?");
                    appComponent.produks.push(rsp.data);
                    location.reload();
                }
                console.log(rsp);
            }
        });

    });

    function PesanSekarang1()
    {   
        let timerInterval
        Swal.fire({
        position: 'top-center',
        title: 'Brang berhasil Memasukan ke Keranjang!',
        html: 'I will close in  milliseconds.',
        timer: 2000,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
            b.textContent = Swal.getTimerLeft()
            }, 100)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
        }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
        }
        })
    }

    $(function() {
        $("#data-table").DataTable();
    })

    confirmDelete = function(button) {
        var url = $(button).data('url');
        swal({
            'title': 'Konfirmasi Hapus',
            'text': 'Apakah kamu yakin ingin menghapus data ini?',
            'dangerMode': true,
            'buttons': true
        }).then(function(value) {
            if (value) {
                window.location = url;
            }
        })
    }

    $(document).ready(function(){
    readData()
    $("#input").keyup(function(){
        var strcari = $("#input").val();
        if (strcari != ""){
            $("#read").html('<center><p class="text-muted">Waiting for Search Product</p></center>');
            $.get("{{ url('ajax')}}", "name=" + strcari,
                function (data) {

                    $("#read").html(data);
                },
                
            );
        }else{
            readData()
        }
    });
});
    function readData(){
        $.get("{{ url('read')}}",{},
        function(data){
            // alert(data);
            $("#read").html(data);
        })
    }
  
</script>