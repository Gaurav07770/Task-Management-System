<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/comman.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ebff4e14ff.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="layout-div"></div>
    <div class="layout-div"></div>
    <div class="content login-form">
        <h3 class="login-h1">Log in to LakshyaLink</h3>
        <form method="POST" action="">
            @csrf
            <label for="email">Email :</label>
            <input type="text" class="input-field login-email" name="email" id="login-email" placeholder="Email" value="{{ old('email') }}" required>

            <label for="password">Password :</label>
            <input type="password" class="input-field login-password" name="password" id="login-password" placeholder="Password" required>

            <input type="submit" class="login-submit" name="submit" id="login-submit" value="Submit">
        </form>

        <!-- Social Media Logins -->
        <div class="social-login">

            <a href="#" class="twitter-login"><i class="fa-brands fa-x-twitter fa-lg" style="color: #000000;"></i></a>
            <a href="{{ route('google-auth') }}" class="google-login"><img src="{{ asset('google.png') }}" alt="Google" class="google-login-logo"></a>
            <a href="#" class="facebook-login"><i class="fab fa-facebook fa-lg" style="color: #005eff;"></i></a>

        </div>

        <!-- Signup and Forgot Password Links -->
        <div class="additional-links">
            <a href="" class="signup-link">Sign Up</a>
            <a href="" class="forgot-password-link">Forgot Password?</a>
        </div>
    </div>
    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
