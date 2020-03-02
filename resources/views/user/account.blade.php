@extends('layout')
@section('content')
    <br>

    <h1>Hello, {{ Auth::user()->name }}</h1>
    <br>
    <h2>Email: {{ Auth::user()->email }} </h2>
    <br>
    <h2>Member since: {{Auth::user()->created_at}}</h2><br>
    <div style="display: inline">
        <h2 style="width: 25%; padding-right: 10px; margin-right: 0;">Verified:</h2>
        @if(Auth::user()->hasVerifiedEmail())
            <div class="circle_green"
                 style="padding: 10px 10px; background: green; height: 10px; border-radius: 50%; width: 10px">
            </div>
        @else
            <div class="circle_green"
                 style="padding: 10px 10px; background: red; height: 10px; border-radius: 50%; width: 10px">
            </div>
        @endif
    </div>
@endsection
