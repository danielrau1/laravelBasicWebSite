<!DOCTYPE html>
<html>
<head>
    <title>Acme</title>
</head>

<body>
@include('inc.navbar')

{{--to display the messages for the contact page--}}
@if(count($errors)>0)
    @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
    @endif


@if(Request::is('/'))
        This section will appear only for the home page as conditioned in this if, so
    can use logic inside the html!
    @endif

@yield('content')

@include('inc.sidebar')

</body>

</html>
