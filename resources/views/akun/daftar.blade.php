@extends('layouts.master2')

@section('content')
    
<div class="banner-wrapper has_background">
    <img  src="{{asset('images/home 1.jpg')}}"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner container">
        <h1 class="page-title">Register My Account</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="/"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Register</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="kodory">
                        <div class="kodory-notices-wrapper"></div>
                        <div class="u-columns col2-set" id="customer_login" >
                            <div class="u-column1 col-1">
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="{{asset('images/daftar.svg')}}"
                                       alt="Sample image" style="max-width:200%; height:380px; margin-right:200px;">
                    
                                  </div>
                            </div>
                            <div class="u-column2 col-2 " >
                                <h2>Register</h2>
                                <form class="kodory-form kodory-form-register register" method="POST" action="{{ route('register') }}" >
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
            
                                            {{-- <input id="role" type="role" class="form-control" name="role"  required autofocus placeholder="Pilih Role User"> --}}
                                            <select class="col-md-6 control-label " id="role" value="{{ old('role') }}" name="role">
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
                                
{{--             
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" onclick="alert('Anda Berhasil Register')" class="btn btn-primary">
                                                Register
                                            </button> 
                                        </div>
                                    </div>                 --}}
                                
                                   <p class="kodory-FormRow form-row">
                                        <button type="submit" class="kodory-Button button"  onclick="alert('Anda Berhasil Register')"
                                                value="Register">Register
                                        </button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection