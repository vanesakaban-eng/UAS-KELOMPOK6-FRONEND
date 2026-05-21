<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Edu-Wallet</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background:
            linear-gradient(rgba(238,243,251,0.85), rgba(238,243,251,0.85)),
            url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=1200');
            background-size:cover;
            background-position:center;
            min-height:100vh;
        }

        /* NAVBAR */
        .navbar{
            width:100%;
            height:80px;
            background:white;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 50px;
        }

        .left-nav{
            display:flex;
            align-items:center;
            gap:15px;
        }

        .menu-icon{
            font-size:22px;
            cursor:pointer;
        }

        .logo{
            font-size:30px;
            font-weight:bold;
            color:#111827;
        }

        .menu{
            display:flex;
            gap:40px;
        }

        .menu a{
            text-decoration:none;
            color:#111827;
            font-weight:500;
        }

        .menu .active{
            color:#7ad97a;
        }

        .auth{
            display:flex;
            gap:20px;
            align-items:center;
        }

        .signup{
            background:#7ad97a;
            color:white;
            padding:10px 20px;
            border-radius:12px;
            text-decoration:none;
        }

        .auth a{
            text-decoration:none;
            color:#111827;
        }

        /* CONTENT */
        .container{
            display:flex;
            flex-direction:column;
            align-items:center;
            padding:50px 20px;
        }

        .title{
            font-size:60px;
            font-weight:bold;
            color:#111827;
            margin-bottom:40px;
        }

        .card{
            width:700px;
            background:white;
            padding:30px;
            border-radius:20px;
            margin-bottom:25px;
            box-shadow:0 5px 15px rgba(0,0,0,0.08);
        }

        .card h2{
            margin-bottom:20px;
            color:#111827;
        }

        .card p{
            line-height:1.8;
            color:#4b5563;
        }

        .feature{
            margin:15px 0;
            color:#4b5563;
        }

        .check{
            color:#7ad97a;
            margin-right:10px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">

    <div class="left-nav">
        <span class="menu-icon">☰</span>
        <div class="logo">Edu-Wallet</div>
    </div>

    <div class="menu">
        <a href="/">HOME</a>
        <a href="/about" class="active">ABOUT</a>
        <a href="/more">MORE</a>
    </div>

    <div class="auth">
        <a href="/login">Login</a>
        <a href="/signup" class="signup">Sign Up</a>
    </div>

</div>

<!-- CONTENT -->
<div class="container">

    <div class="title">
        About Edu-Wallet
    </div>

    <!-- MISSION -->
    <div class="card">

        <h2>Our Mission</h2>

        <p>
            Edu-Wallet adalah platform edukasi keuangan
            yang dirancang khusus untuk membantu siswa
            dan mahasiswa memahami dasar-dasar pengelolaan
            keuangan pribadi.

            Kami percaya bahwa literasi keuangan adalah
            keterampilan penting yang harus dimiliki sejak dini.
        </p>

    </div>

    <!-- FEATURES -->
    <div class="card">

        <h2>Features</h2>

        <div class="feature">
            <span class="check">✓</span>
            Edu-Section: Pembelajaran interaktif tentang cara menabung
        </div>

        <div class="feature">
            <span class="check">✓</span>
            Simulasi Tabungan: Hitung target tabungan Anda
        </div>

        <div class="feature">
            <span class="check">✓</span>
            Sistem Reward: Dapatkan poin dari setiap pembelajaran
        </div>

        <div class="feature">
            <span class="check">✓</span>
            Digital Assistance: Bantuan untuk pertanyaan keuangan
        </div>

    </div>

    <!-- TEAM -->
    <div class="card">

        <h2>Team</h2>

        <p>
            Kelompok 6 - Student Project
        </p>

    </div>

</div>

</body>
</html>