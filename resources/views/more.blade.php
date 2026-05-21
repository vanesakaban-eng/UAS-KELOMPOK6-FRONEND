<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More - Edu-Wallet</title>

    @vite(['resources/css/app.css'])

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background:
                linear-gradient(rgba(240,245,255,0.85), rgba(240,245,255,0.85)),
                url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=1200&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            min-height:100vh;
        }

        /* NAVBAR */
        .navbar{
            width:100%;
            height:70px;
            background:white;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 80px;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .logo{
            font-size:24px;
            font-weight:bold;
            color:#111827;
        }

        .menu{
            display:flex;
            gap:35px;
        }

        .menu a{
            text-decoration:none;
            color:#374151;
            font-size:14px;
            font-weight:600;
            transition:0.3s;
        }

        .menu a:hover{
            color:#6bd46b;
        }

        .menu .active{
            color:#6bd46b;
        }

        .auth{
            display:flex;
            align-items:center;
            gap:20px;
        }

        .login{
            text-decoration:none;
            color:#111827;
            font-weight:600;
        }

        .signup{
            text-decoration:none;
            background:#6bd46b;
            color:white;
            padding:10px 20px;
            border-radius:10px;
            font-weight:600;
        }

        /* CONTENT */
        .container{
            width:100%;
            display:flex;
            justify-content:center;
            padding-top:70px;
        }

        .faq-box{
            width:700px;
        }

        .faq-title{
            text-align:center;
            font-size:50px;
            font-weight:bold;
            margin-bottom:40px;
            color:#111827;
        }

        details{
            background:white;
            margin-bottom:18px;
            border-radius:15px;
            padding:20px;
            box-shadow:0 5px 15px rgba(0,0,0,0.08);
            cursor:pointer;
        }

        summary{
            list-style:none;
            font-size:20px;
            font-weight:600;
            color:#111827;
        }

        summary::-webkit-details-marker{
            display:none;
        }

        details p{
            margin-top:15px;
            color:#4b5563;
            line-height:1.6;
        }

        @media(max-width:768px){

            .navbar{
                padding:0 20px;
            }

            .faq-box{
                width:90%;
            }

            .faq-title{
                font-size:35px;
            }

            .menu{
                gap:15px;
            }
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <div class="navbar">

        <div class="logo">Edu-Wallet</div>

        <div class="menu">
            <a href="/">HOME</a>
            <a href="/about">ABOUT</a>
            <a href="/more" class="active">MORE</a>
            <a href="/dashboard">DASHBOARD</a>
        </div>

        <div class="auth">
            <a href="/login" class="login">Login</a>
            <a href="/register" class="signup">Sign Up</a>
        </div>

    </div>

    <!-- FAQ -->
    <div class="container">

        <div class="faq-box">

            <h1 class="faq-title">
                Frequently Asked Questions
            </h1>

            <details>
                <summary>1. Apa itu Edu-Wallet?</summary>
                <p>
                    Edu-Wallet adalah platform digital untuk membantu
                    pengguna belajar mengatur keuangan dan menabung.
                </p>
            </details>

            <details>
                <summary>2. Apa itu Edu Section?</summary>
                <p>
                    Edu Section berisi materi edukasi tentang pengelolaan
                    uang, investasi, dan literasi keuangan.
                </p>
            </details>

            <details>
                <summary>3. Bagaimana cara menggunakan simulasi tabungan?</summary>
                <p>
                    Pengguna cukup memasukkan target tabungan dan waktu,
                    lalu sistem akan menghitung estimasi tabungan.
                </p>
            </details>

            <details>
                <summary>4. Apakah hasil simulasi bisa disimpan?</summary>
                <p>
                    Ya, hasil simulasi dapat disimpan pada akun pengguna.
                </p>
            </details>

            <details>
                <summary>5. Kapan poin bisa ditarik?</summary>
                <p>
                    Poin dapat digunakan atau ditarik sesuai ketentuan
                    yang tersedia di aplikasi Edu-Wallet.
                </p>
            </details>

            <details>
                <summary>6. Apakah harus login?</summary>
                <p>
                    Ya, pengguna perlu login agar dapat mengakses semua
                    fitur Edu-Wallet secara lengkap.
                </p>
            </details>

        </div>

    </div>

</body>
</html>