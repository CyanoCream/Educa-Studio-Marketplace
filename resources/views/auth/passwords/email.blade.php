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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary mt-3">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</head>
</html>
@endsection
