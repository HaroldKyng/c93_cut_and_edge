@extends('layouts.email_bg')
@section('content')
    <div class="email-header">
        {{$title}}
    </div>
    <div class="email-body">
        <center><p>{{$body}}</p></center>
        <center><p>
            <h2> {{$link}}</h2></p></center>

    </div>

@endsection
