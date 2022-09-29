

<div class="nav-custom">
    <div class="inner-nav"><a href="{{url('/')}}"><h1 style="color:white; font-size:6rem;">J I A N T</h1></a></div>

    <div class="nav--login">
        <ul class="nav--login">
            @guest
                <li class="nav-item">
                    <a class="nav-link text-muted disabled" id="login-btn" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item" style="margin-left: 20px;">
                    <a class="nav-link" id="register-btn" href="{{ route('register-user') }}">Register</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" id="logoutBtn" href="{{ route('signout') }}">Logout</a>
                </li>
            @endguest
        </ul>
    </div>
</div>
