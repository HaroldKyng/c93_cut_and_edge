@extends('layouts.email_bg')
@section('content')
    <div class="email-header">
        {{$title}}
    </div>
    <div class="email-body">
        {{--        <h2>{{$title}}</h2>--}}
        <p>Dear {{$name}},</p>

        <p>{{$body}}</p>
        <p>To log in, please reset your password using your registered email: {{$email}}  by visiting the following link:</p>

        <p>{{$reset_link}}</p>
        <p>If you need any assistance, feel free to reach out.</p>
                <p>Thank you</p>

    </div>

@endsection
