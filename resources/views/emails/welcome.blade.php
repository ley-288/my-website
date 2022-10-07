<DOCTYPE html>
    <html lang="en-US">
    <head>
        <meta charset="utf-8">
        @stack('before-styles')
        <link href="{{ asset('css/jiant-email.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="email-body">
            <img src="{{ asset('images/logos/jiant2.png') }}" height="80px" width="80px">
            <h2>Thank you for signing up!</h2>
            <h3>Feel free to login as much as you like, we are always happy to see you!</h3>
            </br>
            <h4 style="color:#12121263">This is just a message to welcome you to the platform, you don't need to do anything unless you recieved this message without registering your email or facebook account.</h4>
            </br>
            <h4 style="color:#12121263">If you wish to report a problem or contact us about any other problems you can click the button below or copy the link and paste it into your browser</h4>
            </br>
            <a href="https://jiant.io/i-wish-to-report-a-problem">
                <button style="color: #fff;background-color:#00f;border: none;filter: brightness(1.3);border-radius: 5px;font-size: 3rem;">
                   Problem!
            </button>
        </a>
            </br>
            <a href="https://jiant.io/i-wish-to-report-a-problem" style="font-size:3rem"><h6>https://jiant.io/i-wish-to-report-a-problem</h6></a>
            </br>

            </br>
            <h6>
                Jiant 2022
            </h6>
        </div>
    </body>
</html>
