<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css\signin.css">
</head>
<body>
    <form class="container" method="post" action="{{route('user.storeSignin')}}">
        @csrf
        @method('post')
        <img src="asset/Group 2.png" alt="company-logo"  class="logo">
        {{-- <h1>Sign In</h1> --}}
        <div class="bag">
            <h3>Username</h3>
            <input type="text" name="username" value="{{Session::get('username')}}" id="nameTxt">
        </div>
        <div class="bag">
            <h3>Password</h3>
            <input type="password" name="password" id="passTxt">
        </div>
        <input type="submit" value="Sign In" id="submitBtn">
        <div>
            <a href="{{route('user.register')}}" style="color:white; font-weight:light" >Buat akun</a>
        </div>
        <div style="color:red">
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="list-style-type: none">{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
    </form>
</body>
</html>
