<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="icon" href="{{ asset('images/logo1.png') }}">
    <title>تسجيل البيانات</title>
</head>

<body>
    <div class="bg">
        <img class="main-img" src="{{ asset('images/logo1.png') }}" width="35%">
        <img src="{{ asset('images/logo2.png') }}" width="50%">
    </div>

    <div class="flex">
        <form class="continer">
            <div>
                <label>الاسم</label>
                <input name="name" type="text">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label>اسم المستخدم</label>
                <input name="username" type="text">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label>المدرسة</label>
                <input name="school" type="text">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label>الصف الدراسى</label>
                <select name="sec" class="select">
                    <option selected disabled></option>
                    @foreach ($secs as $sec)
                    <option @selected(old('sec')==$sec->id) value="{{ $sec->id }}">{{ $sec->name }}</option>
                    @endforeach
                </select>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label>العنوان</label>
                <input name="address" type="text">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label>وظيفة الاب</label>
                <input name="parentjob" type="text">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label>رقم ولى الامر</label>
                <input name="pphone" type="number">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label>رقم الطالب</label>
                <input name="phone" type="number">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label>المجموع</label>
                <input name="sumprep" type="number">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="submit">تسجيل</button>
        </form>
    </div>
</body>

</html>
