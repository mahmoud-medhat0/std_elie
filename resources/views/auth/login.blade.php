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
    <title>تسجيل الدخول</title>
</head>
<body>
    <!-- start background -->
    <div class="bg">
        <img src="images/logo.png" alt="logo">
        <div class="overlay"></div>
    </div>
    <!-- end background -->
    <img class="side-img-login female" src="{{ asset('images/female-stand.png') }}">
    <img class="side-img-login male" src="{{ asset('images/male-set.png') }}">

    <div class="login-container">
        <h1>تسجيل الدخول</h1>
            <form class="inputs" method="POST" action="{{ route('login') }}">
                @csrf
                <input class="@error('username') is-invalid @enderror" name="username" placeholder="Enter Your Email">
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input type="password" name="password" placeholder="Enter Your Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <button type="submit" id="submit">{{ __('login') }}</button>
            </form>
        </div>
    </section>
</body>

</html>
