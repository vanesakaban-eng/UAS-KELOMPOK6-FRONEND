<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    @vite(['resources/css/app.css'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* ================= NAVBAR ================= */
        .navbar {
            width: 100%;
            height: 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px;
            box-sizing: border-box;
            position: relative;
            z-index: 999;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: white;
        }

        .menu {
            display: flex;
            gap: 40px;
            z-index: 999;
        }

        .menu a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            cursor: pointer;
        }

        .auth {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* ================= NOTIFIKASI ================= */
        .notif-wrapper {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .notif-wrapper i {
            font-size: 20px;
            color: white;
        }

        .notif-dropdown {
            display: none;
            position: absolute;
            top: 35px;
            right: 0;
            background: rgba(0, 0, 0, 0.75);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 15px;
            min-width: 220px;
            z-index: 9999;
        }

        .notif-wrapper:hover .notif-dropdown {
            display: block;
        }

        .notif-dropdown p {
            margin: 6px 0;
            border-bottom: 1px solid rgba(255,255,255,0.15);
            padding-bottom: 6px;
        }

        .notif-dropdown p:last-child {
            border-bottom: none;
        }

        /* ================= SIDEBAR ================= */
        .sidebar {
            position: fixed;
            top: 0;
            left: -300px;
            width: 260px;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
            padding: 20px;
            transition: 0.3s;
            z-index: 1000;
        }

        .sidebar.active {
            left: 0;
        }

        .sidebar .close {
            cursor: pointer;
            font-size: 20px;
            color: white;
        }

        .sidebar ul {
            list-style: none;
            margin-top: 40px;
            padding: 0;
        }

        .sidebar li {
            margin: 20px 0;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
        }

        /* ================= CONTENT ================= */
        .content {
            position: relative;
            z-index: 1;
            display: flex;
            gap: 30px;
            padding: 40px;
        }

        .hidden {
            display: none;
        }

        .card {
            flex: 1;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 20px;
        }

        .profile-card {
            width: 260px;
            background: rgba(255, 255, 255, 0.85);
            padding: 25px;
            border-radius: 20px;
            text-align: center;
        }

        .profile-card img {
            width: 90px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .logout-btn {
            display: inline-block;
            background: #6c8f2f;
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 15px;
            margin-top: 10px;
            transition: 0.3s;
        }

        .logout-btn:hover {
            opacity: 0.85;
        }

        /* ================= EDU SECTION ================= */
        .edu-item {
            background: #cfd3da;
            padding: 30px;
            border-radius: 15px;
            margin: 25px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .edu-title {
            font-size: 18px;
            font-weight: bold;
            color: #111;
        }

        /* ================= BUTTON ================= */
        button {
            background: #7b9637;
            color: white;
            border: none;
            padding: 14px 45px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: 0.3s;
        }

        button:hover {
            opacity: 0.85;
            transform: scale(1.03);
        }

        /* ================= MENU ICON ================= */
        .menu-icon {
            cursor: pointer;
            font-size: 25px;
            margin-right: 10px;
            color: white;
        }

        /* ================= INPUT ================= */
        input,
        select {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: none;
            margin-top: 10px;
        }

        #hasil {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: #6c8f2f;
        }
    </style>
</head>

<body class="bg">

    <!-- ================= NAVBAR ================= -->
    <div class="navbar">

        <div style="display:flex; align-items:center;">
            <span class="menu-icon" onclick="toggleSidebar()">☰</span>
            <div class="logo">Edu-Wallet</div>
        </div>

        <div class="menu">
            <a href="{{ url('/dashboard') }}">HOME</a>
            <a href="{{ url('/about') }}">ABOUT</a>
            <a href="{{ url('/more') }}">MORE</a>
        </div>

        @php
            $notifications = \App\Models\Notification::where('user_id', auth()->id())
                ->latest()
                ->take(5)
                ->get();
        @endphp

        <div class="auth">

            <!-- ================= NOTIFIKASI DROPDOWN ================= -->
            <div class="notif-wrapper">
                <i class="fas fa-bell"></i>
                <div class="notif-dropdown">
                    @if($notifications->isEmpty())
                        <p style="color:white; font-size:12px;">Tidak ada notifikasi.</p>
                    @else
                        @foreach($notifications as $notif)
                            <p style="color:white; font-size:12px;">
                                {{ $notif->message }}
                            </p>
                        @endforeach
                    @endif
                </div>
            </div>

            <span style="color:white;">
                {{ auth()->user()->name }}
            </span>

            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="35">
        </div>

    </div>

    <!-- ================= SIDEBAR ================= -->
    <div id="sidebar" class="sidebar">

        <span class="close" onclick="toggleSidebar()">✖</span>

        <ul>
            <li onclick="showPage('profil')">Profil</li>
            <li onclick="showPage('edu')">Edu-Section</li>
            <li onclick="showPage('simulasi')">Simulasi Tabungan</li>
            <li><a href="/assistant">Digital Assistance</a></li>
            <li><a href="/assistant">Learning Center</a></li>
        </ul>

    </div>

    <!-- ================= CONTENT ================= -->
    <div class="content">

        <!-- PROFILE -->
        <div id="profil" class="profile-card">

            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png">

            <h3>{{ auth()->user()->name }}</h3>

            <p style="font-size:14px; font-weight:bold;">
                Reward Point: {{ auth()->user()->reward_point }}
            </p>

            <hr style="margin:15px 0;">

            <a href="/logout" class="logout-btn">Logout</a>

        </div>

        <!-- EDU SECTION -->
        <div id="edu" class="card hidden">

            <h2 style="font-size:40px;">Edu-Section</h2>

            <div class="edu-item">
                <div class="edu-title">Perencanaan Keuangan</div>
                <a href="/quiz/perencanaan"><button>MULAI</button></a>
            </div>

            <div class="edu-item">
                <div class="edu-title">Analisis Keuangan</div>
                <a href="/quiz/analisis"><button>MULAI</button></a>
            </div>

            <div class="edu-item">
                <div class="edu-title">Penerapan Teknologi Keuangan</div>
                <a href="/quiz/teknologi"><button>MULAI</button></a>
            </div>

        </div>

        <!-- SIMULASI -->
        <div id="simulasi" class="card hidden">

            <h2>Simulasi Tabungan</h2>

            <p>Target Tabungan:</p>
            <input id="target" type="number">

            <p style="margin-top:20px;">Periode Tabungan:</p>
            <select id="periode">
                <option value="">Pilih</option>
                <option value="1">1 Bulan</option>
                <option value="2">2 Bulan</option>
                <option value="3">3 Bulan</option>
                <option value="4">4 Bulan</option>
                <option value="5">5 Bulan</option>
                <option value="6">6 Bulan</option>
                <option value="12">1 Tahun</option>
            </select>

            <div style="text-align:center; margin-top:30px;">
                <button onclick="hitungTabungan()">Hitung Target</button>
            </div>

            <p id="hasil"></p>

        </div>

    </div>

    <!-- ================= JS ================= -->
    <script>

        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("active");
        }

        function showPage(page) {

            document.getElementById("profil").classList.add("hidden");
            document.getElementById("edu").classList.add("hidden");
            document.getElementById("simulasi").classList.add("hidden");

            document.getElementById(page).classList.remove("hidden");

            toggleSidebar();
        }

        function hitungTabungan() {

            let target = document.getElementById("target").value;
            let periode = document.getElementById("periode").value;

            if (target === "" || periode === "") {
                alert("Isi semua dulu!");
                return;
            }

            let totalHari = periode * 30;
            let perHari = target / totalHari;

            let rupiah = new Intl.NumberFormat('id-ID')
                .format(Math.ceil(perHari));

            document.getElementById("hasil").innerText =
                "Kamu harus menabung Rp " + rupiah + " per hari";
        }

    </script>

</body>

</html>