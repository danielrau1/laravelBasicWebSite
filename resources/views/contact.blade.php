@extends('layouts/app')

@section('content')
    <h1>CONTACT</h1>

    <form method="post" action="contact/submit" >
        Name <input type="text" name="name"><br>
        Email <input type="text" name="email"><br>
        Message <textarea name="message"></textarea><br>
        {{ csrf_field() }}
        <input type="submit" >

    </form>

@endsection
