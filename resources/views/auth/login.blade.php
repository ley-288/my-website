@extends('layout')
@section('content')

    <div id="included-form">
        @include('auth.login-form')
    </div>

    <div id="hello" class="hello" style="display:none;">
        <h1>Hello</h1>
    </div>

@endsection
