<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .password {
            position: relative;
        }

        .password input {
            width: 100%;
            padding-right: 45px;
            box-sizing: border-box;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #888;
            font-size: 16px;
        }

        .toggle-password:hover {
            color: #6c8f2f;
        }
    </style>
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
            <input type="password" name="password" id="passwordInput" placeholder="Password" required>
            <span class="toggle-password" onclick="togglePassword()">
                <i class="fas fa-eye" id="eyeIcon"></i>
            </span>
        </div>

        <button type="submit">Login</button>

        @if(session('error'))
            <p style="color:red; margin-top:10px;">
                {{ session('error') }}
            </p>
        @endif
    </form>
</div>

<script>
    function togglePassword() {
        const input = document.getElementById('passwordInput');
        const icon = document.getElementById('eyeIcon');

        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>

</body>
</html>