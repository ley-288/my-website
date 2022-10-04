@extends('layout')
@section('content')
    @guest
        <div id="included-form">
            @include('auth.login-form')
        </div>
        <div id="hello" class="hello" style="display:none;">
            <h1>Hello</h1>
        </div>
    @else
        <div id="hello" class="hello fade-in">
            <h1>Hello</h1>
        </div>
    @endguest
@endsection
