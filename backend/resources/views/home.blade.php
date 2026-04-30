<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edu-Wallet</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg">

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">Edu-Wallet</div>

    <div class="menu">
        <a class="active">HOME</a>
        <a href="#about">ABOUT</a>
        <a href="#more">MORE</a>
    </div>

    <div class="auth">
        @auth
            <a href="/dashboard">Dashboard</a>
            <a href="/logout" style="color:red;">Logout</a>
        @else
            <a href="/login">Login</a>
            <a href="/signup" class="signup">Sign Up</a>
        @endauth

        <!-- ICON ☰ -->
        <span onclick="toggleSidebar()" class="menu-icon">☰</span>
    </div>
</div>

<!-- HERO -->
<div class="hero">

    <h1>Edu-Wallet</h1>
    <p class="subtitle">Website For Education</p>
    <p class="desc">Kelola keuangan pendidikan dengan mudah</p>

    @auth
        <a href="/dashboard" class="btn-login">DASHBOARD</a>
    @else
        <a href="/login" class="btn-login">LOGIN</a>
    @endauth
</div>

<!-- SECTION ABOUT -->
<div id="about" class="section">
    <h2>About Edu-Wallet</h2>
    <p>
        Edu-Wallet membantu kamu mengatur keuangan pendidikan,
        menabung dengan simulasi, dan mendapatkan reward menarik.
    </p>
</div>

<!-- SECTION MORE -->
<div id="more" class="section">
    <h2>Fitur Utama</h2>
    <ul>
        <li>✔ Edu-Selection</li>
        <li>✔ Simulasi Tabungan</li>
        <li>✔ Digital Assistance</li>
        <li>✔ Reward System</li>
    </ul>
</div>

<!-- SIDEBAR -->
<div id="sidebar" class="sidebar">
    <span class="close" onclick="toggleSidebar()">✖</span>

    <ul>
        @auth
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="#">Edu-Selection</a></li>
            <li><a href="#">Simulasi Tabungan</a></li>
            <li><a href="#">Digital Assistance</a></li>
            <li><a href="/logout">Logout</a></li>
        @else
            <li><a href="/login">Login</a></li>
            <li><a href="/signup">Sign Up</a></li>
        @endauth
    </ul>
</div>

<!-- SCRIPT -->
<script>
function toggleSidebar() {
    document.getElementById("sidebar").classList.toggle("active");
}
</script>

</body>
</html>