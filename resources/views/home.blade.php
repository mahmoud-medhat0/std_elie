<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>الصفحة الرئيسية</title>
</head>
<body>
    <!-- start background -->
    <div class="bg">
        <img src="{{ asset('images/logo.png') }}" alt="logo">
        <div class="overlay"></div>
    </div>
    <!-- end background -->

    <img class="side-img-menu female" src="{{ asset('images/female-stand.png') }}">
    <img class="side-img-menu male" src="{{ asset('images/male-set.png') }}">

    <!-- start nav bar  -->
    <div class="nav">
        <div class="div-1">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                {{ "تسجيل الخروج" }}
            </a>
        </div>
        <div class="div-2">
            <span>
                <a href="{{ route('pdf') }}">باركود</a>
            </span>
        </div>
        <div class="logo-profile div-3">
            <a href="{{ asset('profile') }}">
                <h1>{{ Auth::user()->name }}</h1>
                @if(Auth::user()->gender=='m')
                <img src="{{ asset('images/male-face.png') }}">
                @else
                <img src="{{ asset('images/female-face.png') }}">
                @endif
            </a>
        </div>
    </div>
    <!-- end nav bar  -->


    <!-- start menu content  -->
    <div class="menu-container">
        <a href="{{ route('attend') }}"><img src="{{ asset('images/attendance.png') }}"><h1>الحضور</h1></a>
        <a href="{{ route('exc') }}"><img src="{{ asset('images/exam.png') }}"><h1>الإختبارات</h1></a>
        <a href="{{ route('exm') }}"><img src="{{ asset('images/exam.png') }}"><h1>الإمتحانات</h1></a>
    </div>
    <!-- end menu content  -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</body>
</html>
