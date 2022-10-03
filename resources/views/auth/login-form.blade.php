{{--ALERTS--}}
<div class="alert-container">
    {{--INCORRECT LOGIN ALERT--}}
    <div id="no-login-message" class="hide alert-red">
        <h6>Oops! We can't find your login information! </br> Are you sure your PIN and email are correct?</h6>
        <i class="material-icons-round" id="alert-dismiss-login">error</i>
    </div>

    {{--NO NAME ALERT--}}
    <div id="no-name-message" class="hide alert-red">
        <h6>Please add your name!</h6>
        <i class="material-icons-round">error</i>
    </div>

    {{--NO EMAIL ALERT--}}
    <div id="no-email-message" class="hide alert-red">
        <h6>You cant sign up without an email address!</h6>
        <i class="material-icons-round">error</i>
    </div>

    {{--NO VALID EMAIL ALERT--}}
    <div id="no-valid-message" class="hide alert-red">
        <h6>You must use a valid email address!</h6>
        <i class="material-icons-round">error</i>
    </div>

    {{--NO PIN ALERT--}}
    <div id="no-pin-message" class="hide alert-red">
        <h6>Please enter a 5 digit pin!</h6>
        <i class="material-icons-round">error</i>
    </div>
</div>

{{--LOGIN AND REGISTER FORMS--}}
<div id="carouselExampleControls" class="carousel slide" data-interval="false">
    <div class="carousel-inner" style="width: 100vw!important;">
        <div class="carousel-item active">
            <div class="stretch-card">
                <div class="card" id="login-form">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
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
                        <button type="button" class="btn btn-dark btn-block" data-toggle="modal" data-target="#registerPinModal" style="display: flex;justify-content: space-between;">
                            Enter pin
                            <i class="material-icons-round">dialpad</i>
                        </button>
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block" id="sign-in-btn">Signin</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="stretch-card">
                <div class="card blur" id="register-form">
                    <h3 class="card-header text-center">Register</h3>
                    <div class="card-body">
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

                        <button type="button" class="btn btn-dark btn-block" data-toggle="modal" data-target="#registerPinModal" style="display: flex;justify-content: space-between;">
                            Create a pin
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
                            <button type="submit" class="btn btn-dark btn-block" id="sign-up-btn">Sign up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--
    TO DO!
<div class="close-alerts">
    <i class="material-icons-round">close</i>
</div>
--}}

{{--LOGIN / REGISTER SWITCH BUTTONS--}}
<div class="carousel-ctrl-block" style="margin-bottom:125px;">
    <a href="#carouselExampleControls" role="button" data-slide="prev" id="login-prev-btn" class="hide">
        <h6>Already have an account? ..Login</h6>
    </a>
    <a href="#carouselExampleControls" role="button" data-slide="next" id="register-next-btn" >
        <h6>I'm new to JIANT.. Register</h6>
    </a>
</div>

{{--CHANGE LANGUAGE SELECT BUTTON--}}
<div class="language-block">
    <div>
        <a href="{{url('/')}}/language/it" @if(Lang::locale() == 'it') class="text-muted" style="pointer-events:none;" @endif><h6> IT </h6></a>
    </div>
    <div style="margin-left:20px;">
        <a href="{{url('/')}}/language/en" @if(Lang::locale() == 'en') class="text-muted" style="pointer-events:none;" @endif><h6> EN </h6></a>
    </div>
</div>


{{--PIN MODALS--}}

<!-- Modal -->
<div class="modal fade animate" id="registerPinModal" tabindex="-1" role="dialog" aria-labelledby="registerPinModal" aria-hidden="true" style="overflow-y: hidden;">
    <div class="modal-dialog" role="document">
        <div class="modal-content animate-bottom" style="background-color:transparent!important;">
            <div class="modal-body registerPinModal">
                <div class="pin-wrapper">
                    <input type="number" data-role="pin" maxlength="5" class="pin-input" placeholder="● ● ● ● ●">
                </div>
                </br>
                </br>
                <div class="keypad-num">
                    <div class="keypad-num-key num-put" data-val="1">1</div>
                    <div class="keypad-num-key num-put" data-val="2">2</div>
                    <div class="keypad-num-key num-put" data-val="3">3</div>
                    <div class="keypad-num-key num-put" data-val="4">4</div>
                    <div class="keypad-num-key num-put" data-val="5">5</div>
                    <div class="keypad-num-key num-put" data-val="6">6</div>
                    <div class="keypad-num-key num-put" data-val="7">7</div>
                    <div class="keypad-num-key num-put" data-val="8">8</div>
                    <div class="keypad-num-key num-put" data-val="9">9</div>
                    <div class="keypad-num-key cancel-all"><i class="material-icons-round">delete</i></div>
                    <div class="keypad-num-key num-put" data-val="0">0</div>
                    <div class="keypad-num-key cancel"><i class="material-icons-round">backspace</i></div>
                </div>
                </br>
                <div class="dismiss-modal">
                    <button class="dismiss-modal-btn" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
