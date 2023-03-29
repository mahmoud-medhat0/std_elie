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
    <title>الإمتحانات</title>
</head>
<body>
    <!-- start background -->
    <div class="bg">
        <img src="{{ asset('images/logo.png') }}" alt="logo">
        <div class="overlay"></div>
    </div>
    <!-- end background -->


    <!-- start nav bar  -->
    <div class="nav">
        <div class="div-1">
            <a href="{{ route('home') }}">الرجوع</a>
        </div>
        <div class="div-2">
            <span class="title">
                الإمتحانات
            </span>
        </div>
        <div class="logo-profile div-3">
            <a href="{{ route('profile') }}">
                <h1>{{ Auth::user()->name }}</h1>
                <img src="{{ asset(session()->get('image')) }}">
            </a>
        </div>
    </div>
    <!-- end nav bar  -->

    <!-- start attend content  -->
    <div class="attend-container">
        <table>
            <thead>
                <tr class="titles">
                    <td>الامتحان</td>
                    <td>التاريخ</td>
                    <td>الدرجة</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($exams as $exam)
                <tr class="inputs" >
                    {{-- <td>{{ $attend->attend_record }}</td> --}}
                    <td>{{ $exam->name }}</td>
                    <td>{{ $exam->date }}</td>
                    <td>
                        <span class="percent">
                            <h2>{{ $exam->degree }}</h2>  <!-- الدرجة  -->
                            <h2>{{ $exam->maximum }}</h2> <!-- الدرجة العظمى -->
                        </span>
                        </td>
                    <td>{{ $exam->payed }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- end attend content  -->
</body>
</html>
