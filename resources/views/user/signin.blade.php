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
        <h1>Sign In</h1>
        <div class="bag">
            <h3>Username</h3>
            <input type="text" name="username" value="{{Session::get('username')}}" id="nameTxt">
            @error('username')
                <p class="error" style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="bag">
            <h3>Password</h3>
            <input type="password" name="password" id="passTxt">
            @error('password')
                <p class="error" style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <input type="submit" value="Sign In" id="submitBtn">
        <div>
            <a href="{{route('user.register')}}" style="text-decoration: none; color:white">Buat akun</a>
        </div>
    </form>
</body>
</html>
