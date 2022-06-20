<!DOCTYPE html>
    <html lang="en" dir="ltr">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>My Website</title>
            <meta name="description" content="LeytonNightingale">
            <meta name="author" content="LeytonNightingale">
            @yield('meta')
            @stack('before-styles')
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        </head>
        <body style="font-family: poppins;">
            <div>
                @include('bits.nav')
            </div>
            <div>
       		    @yield('content')
    	    </div>
            <div>
                @include('bits.footer')
            </div>
        </body>
    </html>
