<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
        <?php header('Access-Control-Allow-Origin: *'); ?>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>JIANT</title>
            <meta name="description" content="JIANT">
            <meta name="author" content="JIANT">
            @include('bits.favicon')
            @yield('meta')
            @stack('before-styles')
            <link href="{{ asset('css/jiant-app.css?v=12.5') }}" rel="stylesheet">
            <link href="{{ asset('css/keypad.css?v=12.5') }}" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-233207933-1">
            </script>
            <script>
               window.dataLayer = window.dataLayer || [];
               function gtag(){dataLayer.push(arguments);}
               gtag('js', new Date());
               gtag('config', 'UA-233207933-1');
            </script>
            <style>
                @font-face {
                    font-family: 'phosphaterrsoliduploaded_file';
                    src:

                    url("{{ asset('fonts/phosphaterr_solid-webfont.woff2') }}")
                    format('woff2'),
                    url("{{ asset('fonts/phosphaterr_solid-webfont.woff') }}")
                    format('woff'),
                    url("{{ asset('fonts/PhosphateSolid.ttf') }}")
                    format('truetype');
                    font-weight: normal;
                    font-style: normal;

                }
                .jiant{
                    font-family: phosphaterrsoliduploaded_file !important;
                }
            </style>
        </head>
        <body>
            @include('bits.modals')
            @include('bits.keypads')
            <div>
                @include('bits.nav')
            </div>
            <div>
       		    @yield('content')
    	    </div>
            <div>
                @include('bits.footer')
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"><script>
            <script src="{{ asset('js/parallax.js?v=1.4') }}"></script>
            <script src="{{ asset('js/login.js?v=1.4') }}"></script>
            <script src="{{ asset('js/keypad.js?v=1.4') }}"></script>
        </body>
    </html>
