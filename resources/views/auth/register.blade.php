<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

<style>
			.main-content{
			width: 50%;
			border-radius: 20px;
			box-shadow: 0 5px 5px rgba(0,0,0,.4);
			margin: 5em auto;
			display: flex;
			}
			.company__info{
				background-color: #008080;
				border-top-left-radius: 20px;
				border-bottom-left-radius: 20px;
				display: flex;
				flex-direction: column;
				justify-content: center;
				color: #fff;
			}
			.fa-android{
				font-size:3em;
			}
			@media screen and (max-width: 640px) {
				.main-content{width: 90%;}
				.company__info{
					display: none;
				}
				.login_form{
					border-top-left-radius:20px;
					border-bottom-left-radius:20px;
				}
			}
			@media screen and (min-width: 642px) and (max-width:800px){
				.main-content{width: 70%;}
			}
			.row > h2{
				color:#008080;
			}
			.login_form{
				background-color: #fff;
				border-top-right-radius:20px;
				border-bottom-right-radius:20px;
				border-top:1px solid #ccc;
				border-right:1px solid #ccc;
			}
			form{
				padding: 0 2em;
			}
			.form__input{
				width: 100%;
				border:0px solid transparent;
				border-radius: 0;
				border-bottom: 1px solid #aaa;
				padding: 1em .5em .5em;
				padding-left: 2em;
				outline:none;
				margin:1.5em auto;
				transition: all .5s ease;
			}
			.form__input:focus{
				border-bottom-color: #008080;
				box-shadow: 0 0 5px rgba(0,80,80,.4); 
				border-radius: 4px;
			}
			.btn{
				transition: all .5s ease;
				width: 70%;
				border-radius: 30px;
				color:#008080;
				font-weight: 600;
				background-color: #fff;
				border: 1px solid #008080;
				margin-top: 1.5em;
				margin-bottom: 1em;
			}
			.btn:hover, .btn:focus{
				background-color: #008080;
				color:#fff;
			}
		</style>
	</head>
	<body>
		<div class="modal fade" id="register" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content" style="border-radius: 30px">
				<div class="card text-black" style="border-radius: 25px; background: url({{asset('images/b3.jpg')}}) no-repeat fixed center; background-size: cover;">
				  <div class="card-body p-md-5">
					<div class="row justify-content-center">
					  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
						<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
							<form class="form-horizontal" method="POST" action="{{ route('register') }}">
								{{ csrf_field() }}
		
								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
									<label for="name" class="col-md-6 control-label">Name</label>
		
									
										<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Masukkan Nama">
		
										@if ($errors->has('name'))
											<span class="help-block">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@endif
								</div>
		
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label for="email" class="col-md-6 control-label">E-Mail Address</label>
		
										<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Masukkan Email">
		
										@if ($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
		
								</div>
		
								<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
									<label for="role" class="col-md-6 control-label" style="max-width: 100%">Register Sebagai</label>
		
										{{-- <input id="role" type="role" class="form-control" name="role" value="{{ old('role') }}" required autofocus placeholder="Pilih Role User"> --}}
										
										<select id="role" name="role">
										  <option value="user">Pengguna</option>
										  <option value="penyelenggara">Penyelenggara</option>
										  <option value="admin">Admin</option>
										</select>
										@if ($errors->has('role'))
											<span class="help-block">
												<strong>{{ $errors->first('role') }}</strong>
											</span>
										@endif
		
								</div>
		
								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<label for="password" class="col-md-6 control-label">Password</label>
		
									
										<input id="password" type="password" class="form-control" name="password" required autofocus placeholder="Masukkan Password">
		
										@if ($errors->has('password'))
											<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
								</div>
		
								<div class="form-group">
									<label for="password-confirm" class="col-md-12 control-label">Confirm Password</label>
								   
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autofocus placeholder="Confirm Password">
									</div>
							
		
								<div class="form-group">
									<div class="col-md-8 col-md-offset-4">
										<button type="submit" class="btn btn-primary">
											Register
										</button> 
									</div>
								</div>
							</form>
						</div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
	</body>
</html> 


