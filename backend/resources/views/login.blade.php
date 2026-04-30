<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg">

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">Edu-Wallet</div>

    <div class="menu">
        <a href="/">HOME</a>
        <a>ABOUT</a>
        <a>MORE</a>
    </div>

    <div class="auth">
        <a href="/login" class="active">Login</a>
        <a href="/signup" class="signup">Sign Up</a>
    </div>
</div>

<!-- FORM -->
<div class="form-container">
    <h2>Login</h2>

    <form method="POST" action="/login">
        @csrf

        <input type="email" name="email" placeholder="Email Address" required>

        <div class="password">
            <input type="password" name="password" placeholder="Password" required>
            <span>👁️</span>
        </div>

        <button type="submit">Login</button>

        @if(session('error'))
            <p style="color:red; margin-top:10px;">
                {{ session('error') }}
            </p>
        @endif
    </form>
</div>

</body>
</html>