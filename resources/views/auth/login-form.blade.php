{{--ALERTS--}}
<div class="alert-container">
    {{--INCORRECT LOGIN ALERT--}}
    <div id="no-login-message" class="hide alert-red">
        <h6>@lang('applicazione.oops')</br>@lang('applicazione.are_you_sure_your_pin')</h6>
        <i class="material-icons-round" id="alert-dismiss-login">error</i>
    </div>

    {{--NO NAME ALERT--}}
    <div id="no-name-message" class="hide alert-red">
        <h6>@lang('applicazione.please_name')</h6>
        <i class="material-icons-round">error</i>
    </div>

    {{--NO EMAIL ALERT--}}
    <div id="no-email-message" class="hide alert-red">
        <h6>@lang('applicazione.valid_email')</h6>
        <i class="material-icons-round">error</i>
    </div>

    {{--NO PIN ALERT--}}
    <div id="no-pin-message" class="hide alert-red">
        <h6>@lang('applicazione.please_pin')</h6>
        <i class="material-icons-round">error</i>
    </div>

    {{--EMAIL ALREADY USED--}}
    <div id="used-email-message" class="hide alert-red">
        <h6>@lang('applicazione.email_used')</h6>
        <i class="material-icons-round">error</i>
    </div>
</div>

{{--LOGIN AND REGISTER FORMS--}}
<div id="carouselExampleControls" class="carousel slide" data-interval="false">
    <div class="carousel-inner" style="width: 100vw!important;">
        <div class="carousel-item active">
            <div class="stretch-card">
                <div class="card" id="login-form">
                    <div class="card-body">
                        <a href="{{ url('auth/facebook') }}">
                            <div class="form-group mb-3">
                                <button class="btn btn-dark btn-block social-login-btn" style="background-color:#1778f2;">
                                    <div class="soc-btn">
                                        @lang('applicazione.reg_fb')
                                        <img class="social-btn-icon" src="{{ asset('images/social/facebook-white.png') }}">
                                    </div>
                                </button>
                            </div>
                        </a>
                        <a href="{{ route('google.login') }}">
                            <div class="form-group mb-3">
                                <button class="btn btn-light btn-block social-login-btn">
                                    <div class="soc-btn">
                                        @lang('applicazione.reg_google')
                                        <img class="social-btn-icon" src="{{ asset('images/social/google.png') }}">
                                    </div>
                                </button>
                            </div>
                        </a>
                        {{--
                        <a href="#">
                            <div class="form-group mb-3">
                                <button class="btn btn-dark btn-block social-login-btn">
                                    <div class="soc-btn">
                                        @lang('applicazione.continue_apple')
                                        <img class="social-btn-icon" src="{{ asset('images/social/apple.png') }}">
                                    </div>
                                </button>
                            </div>
                        </a>
                        --}}
                        <div>
                            <h6 class="or-select">- @lang('applicazione.or') -</h6>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="email" class="form-control focus-input" name="email" required inputmode='none' autoComplete="off"
                                         >
                            @if ($errors->has('email'))
                                <span class="text-danger-custom">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <button type="button" class="btn btn-dark btn-block pin-btn" data-toggle="modal" data-target="#registerPinModal" style="display: flex;justify-content: space-between;">
                            @lang('applicazione.enter_pin')
                            <i class="material-icons-round">dialpad</i>
                        </button>
                        <div class="form-group mb-3">
                            <input type="hidden" placeholder="Password" id="pword" class="form-control" name="pword" required>
                            @if ($errors->has('password'))
                                <span class="text-danger-custom">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block" id="sign-in-btn" >@lang('applicazione.signin')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="stretch-card">
                <div class="card blur" id="register-form">
                    <div class="card-body">
                        <a href="{{ url('auth/facebook') }}">
                            <div class="form-group mb-3">
                                <button class="btn btn-dark btn-block social-login-btn" style="background-color:#1778f2;">
                                    <div class="soc-btn">
                                        @lang('applicazione.reg_fb')
                                        <img class="social-btn-icon" src="{{ asset('images/social/facebook-white.png') }}">
                                    </div>
                                </button>
                            </div>
                        </a>
                        <a href="{{ route('google.login') }}">
                            <div class="form-group mb-3">
                                <button class="btn btn-light btn-block social-login-btn">
                                    <div class="soc-btn">
                                        @lang('applicazione.reg_google')
                                        <img class="social-btn-icon" src="{{ asset('images/social/google.png') }}">
                                    </div>
                                </button>
                            </div>
                        </a>
                        {{--
                        <a href="#">
                            <div class="form-group mb-3">
                                <button class="btn btn-dark btn-block social-login-btn">
                                    <div class="soc-btn">
                                        @lang('applicazione.continue_apple')
                                        <img class="social-btn-icon" src="{{ asset('images/social/apple.png') }}">
                                    </div>
                                </button>
                            </div>
                        </a>
                        --}}
                        <div>
                            <h6 class="or-select">- @lang('applicazione.or') -</h6>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="@lang('applicazione.name')" id="name" class="form-control focus-input" name="name"
                                        required inputmode='none' autoComplete="off">
                            @if ($errors->has('name'))
                                <span class="text-danger-custom">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="email_address" class="form-control focus-input"
                                        name="email" required inputmode='none' autoComplete="off">
                            @if ($errors->has('email'))
                                <span class="text-danger-custom">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <button type="button" class="btn btn-dark btn-block pin-btn" data-toggle="modal" data-target="#registerPinModal" style="display: flex;justify-content: space-between;">
                            @lang('applicazione.create_pin')
                            <i class="material-icons-round">dialpad</i>
                        </button>
                        <div class="form-group mb-3">
                            <input type="hidden" placeholder="Password" id="password" class="form-control"
                                        name="password" required maxlength="5">
                            @if ($errors->has('password'))
                                <span class="text-danger-custom">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block" id="sign-up-btn" >@lang('applicazione.signup')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--LOGIN / REGISTER SWITCH BUTTONS--}}
<div class="carousel-ctrl-block" style="margin-bottom:125px;">
    <a href="#carouselExampleControls" role="button" data-slide="prev" id="login-prev-btn" class="hide">
        <h6>@lang('applicazione.login_swap')</h6>
        <h6 class="link-blue">@lang('applicazione.signin')</h6>
    </a>
    <a href="#carouselExampleControls" role="button" data-slide="next" id="register-next-btn">
        <h6>@lang('applicazione.register_swap')<strong class="jiant"> JIANT</strong></h6>
        <h6 class="link-blue">@lang('applicazione.signup')</h6>
    </a>
</div>

{{--CHANGE LANGUAGE SELECT BUTTON--}}
<div class="language-block">
    <div class="lineup">
        {{--<img src="{{ asset('images/logos/jiant2.png') }}" class="micro-logo"/>--}}
        <div class="margin-right-space jiant">jiant</div>
        <div class="margin-right-space">2022</div>
        <div class="margin-right-space"><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></div>
        <div class="margin-right-space"><a href="{{url('/')}}/cookie-policy">Cookie Policy</a></div>
        <div><a href="#" data-toggle="modal" data-target="#langModal">@lang('language.language')</a></div>
    </div>
</div>
