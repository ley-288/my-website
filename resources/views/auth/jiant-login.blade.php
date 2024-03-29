@extends('layouts.layout')
@section('content')
    @guest
        <div id="included-form">
            @include('auth.login-form')
        </div>
        <div id="hello" class="hello" style="display:none;">
            <h1 id="welcome_message" class="jiant">@lang('applicazione.hello')</h1>
        </div>
    @else
        <div id="hello" class="hello fade-in">
            <h1 class="jiant">@lang('applicazione.hello')</h1>
        </div>
    @endguest
@endsection
