<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
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
        <a href="/login">Login</a>
        <a class="signup active">Sign Up</a>
    </div>
</div>

<!-- FORM -->
<div class="form-container">
    <h2>Sign Up</h2>

    <form method="POST" action="/signup">
        @csrf

        <div class="row">
            <input type="text" name="name" placeholder="First Name" required>
            <input type="text" name="lastname" placeholder="Last Name">
        </div>

        <input type="email" name="email" placeholder="Email Address" required>
        
        <div class="password">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit">Create Account</button>
    </form>

</div>

</body>
</html>