<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>Admin</title>
	{{-- <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}"> --}}
	{{-- <link rel="stylesheet" href="{{asset('adminLTE/all.min.css')}}"> --}}
	<link rel="stylesheet" href="{{asset('adminLTE/adminlte.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	@yield('addCss')
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
	<div class="wrapper">

		@include('admin.navbar')
		@include('admin.sidebar')

		<div class="content-wrapper">
			@yield('content')
		</div>

		@include('admin.footer')
	</div>

	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('adminLTE/js/adminlte.min.js')}}"></script>
	<script src="{{asset('js/sweetalert.min.js')}}"></script>
	<script src="{{asset('adminLTE/js/bs-custom-file-input.min.js')}}"></script>
	@yield('addJavascript')
</body>

</html>
