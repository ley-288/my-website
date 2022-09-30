@extends('layout')
    @section('content')
        <div id="carouselExampleControls" class="carousel slide" data-interval="false">
            <div class="carousel-inner" style="width: 100vw!important;">
                <div class="carousel-item active">
                    <div class="stretch-card">
                        <div class="card" id="login-form">
                            <h3 class="card-header text-center">Login</h3>
                            <div class="card-body">
                                {{--<form method="POST" action="{{ route('login.custom') }}">
                                    @csrf--}}
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                        autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger-custom">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="password" placeholder="Password" id="pword" class="form-control" name="pword" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger-custom">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-dark btn-block" id="sign-in-btn">Signin</button>
                                    </div>
                                {{--</form>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="stretch-card">
                        <div class="card blur" id="register-form">
                            <h3 class="card-header text-center">Register</h3>
                            <div class="card-body">
                                {{--<form action="{{ route('register.custom') }}" method="POST">
                                    @csrf--}}
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                        required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="text-danger-custom">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Email" id="email_address" class="form-control"
                                        name="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger-custom">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="password" placeholder="Password" id="password" class="form-control"
                                        name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger-custom">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="remember"> Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-dark btn-block" id="sign-up-btn">Sign up</button>
                                    </div>
                                {{--</form>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-ctrl-block" style="margin-bottom:125px;">
            <a href="#carouselExampleControls" role="button" data-slide="prev" id="login-prev-btn" class="hide">
                <h6>Login</h6>
            </a>
            <a href="#carouselExampleControls" role="button" data-slide="next" id="register-next-btn" >
                <h6>Register</h6>
            </a>
        </div>

        <div class="language-block">
            <div>
                <a href="{{url('/')}}/language/it" @if(Lang::locale() == 'it') class="text-muted" style="pointer-events:none;" @endif><h6> IT </h6></a>
            </div>
            <div style="margin-left:20px;">
                <a href="{{url('/')}}/language/en" @if(Lang::locale() == 'en') class="text-muted" style="pointer-events:none;" @endif><h6> EN </h6></a>
            </div>
        </div>
    @endsection
