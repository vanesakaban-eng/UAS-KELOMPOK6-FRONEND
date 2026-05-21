<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edu-Wallet</title>
    @vite(['resources/css/app.css'])

    <style>

        body{
            margin:0;
            font-family: Arial, sans-serif;
        }

        /* NAVBAR */
        .navbar{
            width:100%;
            height:80px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 40px;
            box-sizing:border-box;
        }

        .logo{
            font-size:30px;
            font-weight:bold;
            color:white;
        }

        .menu{
            display:flex;
            gap:40px;
        }

        .menu a{
            text-decoration:none;
            color:white;
            font-weight:500;
        }

        .menu .active{
            color:#7ad97a;
        }

        .auth{
            display:flex;
            align-items:center;
            gap:15px;
        }

        .auth a{
            text-decoration:none;
            color:white;
        }

        .signup{
            background:#7ad97a;
            padding:10px 20px;
            border-radius:20px;
            color:white;
        }

        .menu-icon{
            cursor:pointer;
            font-size:25px;
            color:white;
        }

        /* HERO */
        .hero{
            text-align:center;
            margin-top:120px;
            color:white;
        }

        .hero h1{
            font-size:70px;
            margin-bottom:10px;
        }

        .subtitle{
            font-size:25px;
        }

        .desc{
            margin-top:15px;
            font-size:18px;
        }

        .btn-login{
            display:inline-block;
            margin-top:30px;
            background:#7ad97a;
            color:white;
            padding:15px 35px;
            border-radius:25px;
            text-decoration:none;
            font-weight:bold;
        }

        /* SECTION */
        .section{
            width:80%;
            margin:100px auto;
            background:rgba(255,255,255,0.9);
            padding:40px;
            border-radius:20px;
        }

        .section h2{
            margin-bottom:20px;
        }

        .section ul{
            padding-left:20px;
        }

        .section li{
            margin:15px 0;
        }

        /* SIDEBAR */
        .sidebar{
            position:fixed;
            top:0;
            left:-300px;
            width:260px;
            height:100%;
            background:rgba(0,0,0,0.5);
            backdrop-filter:blur(10px);
            padding:20px;
            transition:0.3s;
            z-index:999;
        }

        .sidebar.active{
            left:0;
        }

        .sidebar .close{
            cursor:pointer;
            font-size:22px;
            color:white;
        }

        .sidebar ul{
            list-style:none;
            margin-top:40px;
            padding:0;
        }

        .sidebar li{
            margin:25px 0;
        }

        .sidebar a{
            color:white;
            text-decoration:none;
            font-size:20px;
        }

    </style>
</head>

<body class="bg">

<!-- NAVBAR -->
<div class="navbar">

    <div class="logo">
        Edu-Wallet
    </div>

    <div class="menu">

        <a class="active" href="/">
            HOME
        </a>

        <a href="/about">
            ABOUT
        </a>

        <a href="/more">
            MORE
        </a>

    </div>

    <div class="auth">

        @auth

            <a href="/dashboard">
                Dashboard
            </a>

            <a href="/logout" style="color:red;">
                Logout
            </a>

        @else

            <a href="/login">
                Login
            </a>

            <a href="/signup" class="signup">
                Sign Up
            </a>

        @endauth

        <!-- ICON ☰ -->
        <span onclick="toggleSidebar()" class="menu-icon">
            ☰
        </span>

    </div>

</div>

<!-- HERO -->
<div class="hero">

    <h1>Edu-Wallet</h1>

    <p class="subtitle">
        Website For Education
    </p>

    <p class="desc">
        Kelola keuangan pendidikan dengan mudah
    </p>

    @auth

        <a href="/dashboard" class="btn-login">
            DASHBOARD
        </a>

    @else

        <a href="/login" class="btn-login">
            LOGIN
        </a>

    @endauth

</div>

<!-- ABOUT -->
<div class="section">

    <h2>About Edu-Wallet</h2>

    <p>
        Edu-Wallet membantu kamu mengatur keuangan pendidikan,
        menabung dengan simulasi, dan mendapatkan reward menarik.
    </p>

</div>

<!-- MORE -->
<div class="section">

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

    <span class="close" onclick="toggleSidebar()">
        ✖
    </span>

    <ul>

        @auth

            <li>
                <a href="/dashboard">
                    Dashboard
                </a>
            </li>

            <li>
                <a href="#">
                    Edu-Selection
                </a>
            </li>

            <li>
                <a href="#">
                    Simulasi Tabungan
                </a>
            </li>

            <li>
                <a href="/assistant">
                    Digital Assistance
                </a>
            </li>

            <li>
                <a href="/assistant">
                    Penukaran Reward  
                </a>
            </li>

            <a href="/assistant">
                   Riwayat Reward 
                </a>
            </li>


            <li>
                <a href="/logout">
                    Logout
                </a>
            </li>

        @else

            <li>
                <a href="/login">
                    Login
                </a>
            </li>

            <li>
                <a href="/signup">
                    Sign Up
                </a>
            </li>

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