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
    <title>الحضور</title>
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
            <a href="{{ url()->previous() }}">الرجوع</a>
        </div>
        <div class="div-2">
            <span class="title">
                الحضور
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
                    <td>رقم الحصة</td>
                    <td>الحضور</td>
                    <td>التاريخ</td>
                    <td>الدفع</td>
                </tr>
            </thead>
            <tbody>
                <!-- input examble  -->
                @foreach ($attends as $attend)
                <tr class="inputs">
                    {{-- <td>{{ $attend->attend_record }}</td> --}}
                    <td>{{ $attend->name }}</td>
                    <td>{{ $attend->date }}</td>
                    <td>
                        @switch($attend->attendence)
                        @case('0')
                        {{ "انتظار تعويض" }}
                        @break
                        @case('1')
                        {{ "تم الحضور" }}
                        @break
                        @case('2')
                        {{ "غياب" }}
                        @break
                        @endswitch
                    </td>
                    <td>
                        @switch($attend->payed)
                        @case('-')
                        {{ "مؤجلة" }}
                        @break
                        @default
                        {{ $attend->payed }}
                        @endswitch
                    </td>
                    <td>{{ $attend->reset }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- end attend content  -->
</body>
</html>
