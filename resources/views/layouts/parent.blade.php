<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('/images/logo1.png') }}">
    @yield('css')
    <title>@yield('title')</title>
</head>

<body>
    <div class="bg">
        <img class="main-img" src="{{ asset('/images/logo1.png') }}" width="35%">
        <img src="{{ asset('/images/logo2.png')}}" width="50%">
    </div>

    <div class="nav">
        @if (session()->get('active')=='home')
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            {{ "تسجيل الخروج" }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @else
        <a href="{{ url()->previous() }}">الرجوع</a>
        @endif
        <h1>@yield('center')</h1>
        <a href="" class="logo">
            <h1>{{ Auth::user()->name }}</h1>
            <img src="">
        </a>
    </div>
    @yield('hidden-title')
    <div class="flex">
        @yield('content')
    </div>
    </div>
</body>
</html>
