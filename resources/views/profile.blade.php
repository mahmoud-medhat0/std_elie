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

    <a href="{{ route('home') }}" class="back">
        <h1>رجوع</h1>
    </a>

    <a href="{{ route('pdf') }}" class="pdf">
        <h1>BarCode PDF</h1>
    </a>

    <div class="parent-number">
        <h1> <span>{{ Auth()->user()->p_phone }}</span> : رقم ولى الأمر</h1>
    </div>

    <div class="student-number">
        <h1> <span>{{ Auth()->user()->phone }}</span> : رقم الطالب</h1>
    </div>

    <div class="profile-container">
        <img src="{{ asset(session()->get('image')) }}" alt="Profile logo">
        <h1>{{ Auth::user()->name }}</h1>
        <div class="profile-info">
            <div>
                <h1>كود الطالب </h1>
                <h2>{{ auth()->user()->id }}</h2>
            </div>
            <div>
                <h1>عدد الحصص </h1>
                <h2>{{ $lectures }}</h2>
            </div>
            <div>
                <h1> عدد الإمتحانات</h1>
                <h2>{{ $exams }}</h2>
            </div>
            <div>
                <h1>نسبة الحضور</h1>
                <span>
                    <h2>{{ $lectures_attend }}</h2>
                    <h2>{{ $lectures }}</h2>
                </span>
            </div>
            <div>
                <h1>نسبة تسليمات الواجب</h1>
                <span>
                    <h2>10</h2>
                    <h2>20</h2>
                </span>
            </div>
        </div>
    </div>
</body>
</html>
