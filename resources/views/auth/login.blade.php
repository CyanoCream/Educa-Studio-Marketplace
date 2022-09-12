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
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content" style="border-radius: 20px; background-color:transparent;">
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row main-content bg-success w-100">
							<div class="col-md-4 company__info">
								<span class="company__logo">
									<h2>
										<img src="{{asset('images/priv.jpeg')}}" class="size-full" style="border-radius: 20px" alt="img">
									</h2>
								</span>
								{{-- <h4 class="company_title">Child</h4> --}}
							</div>
							<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
							<div class="container-fluid">
									<div class="row justify-content-center">
										<h2 class="text-center">LOGIN</h2>
									</div>
                            <form class="form-group" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Masukkan Email">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif

                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                        <input id="password" type="password" class="form-control" name="password" required placeholder="Masukkan Password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>   

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button onclick="alert('Berhasil Login')" type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        <div class="row">
                            <p>Don't have an account? <a href="#" id="tes" data-toggle="modal" data-target="#register">Register Here</a></p>
                        </div>
                </div>
            </div>
        </div>
</body>      
</html> 


