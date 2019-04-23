@extends('layouts/app')

@section('content')
    <h1>MESSAGES</h1>

    @if(count($messages)>0)
    @foreach($messages as $message)
        <ul>
            <li>Name: {{$message->name}}</li>
            <li>Email: {{$message->email}}</li>
            <li>Message: {{$message->message}}</li>
        </ul>
        @endforeach
    @endif

@endsection
