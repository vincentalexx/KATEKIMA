<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css\register.css">
</head>
<body>
    <form class="container" method="post" action="{{route('user.store')}}">
        @csrf
        @method('post')
        <h1>Register</h1>
        <div class="bag">
            <h3>Name</h3>
            <input type="text" name="name" id="name">
            @error('name')
                <p class="error" style="color: red">{{ $message }}</p>
            @enderror   
        </div>
        <div class="bag">
            <h3>Username</h3>
            <input type="text" name="username" id="username">
            @error('username')
                <p class="error" style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="bag">
            <h3>Email</h3>
            <input type="email" name="email" id="email">
            @error('email')
                <p class="error" style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="bag">
            <h3>Password</h3>
            <input type="password" name="password" id="password">
            @error('password')
                <p class="error" style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="bag">
            <h3>Re-Enter Password</h3>
            <input type="password" name="confirm_password" id="confirm_password">
            @error('confirm_password')
                <p class="error" style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label name="errormsg"></label>
        </div>
        <div>
            <input type="submit" value="Sign Up" id="submitBtn">
        </div>
        <div>
            <a href="{{route('user.signin')}}" style="text-decoration: none; color:white">Sign In</a>
        </div>
    </form>
</body>
</html>
