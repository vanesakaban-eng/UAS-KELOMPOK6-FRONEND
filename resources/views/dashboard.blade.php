<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    @vite(['resources/css/app.css'])

    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: -300px;
            width: 260px;
            height: 100%;
            background: rgba(0,0,0,0.4);
            backdrop-filter: blur(10px);
            padding: 20px;
            transition: 0.3s;
            z-index: 999;
        }

        .sidebar.active { left: 0; }

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

        .content {
            position: relative;
            z-index: 2;
            display: flex;
            gap: 30px;
            padding: 40px;
        }

        .hidden { display: none; }

        .card {
            flex: 1;
            background: rgba(255,255,255,0.9);
            padding: 40px;
            border-radius: 15px;
        }

        .profile-card {
            width: 260px;
            background: rgba(255,255,255,0.85);
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

        .edu-item {
            background: #cfd3da;
            padding: 15px;
            border-radius: 10px;
            margin: 20px 0;
            display: flex;
            justify-content: space-between;
        }

        button {
            background: #6c8f2f;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
        }

        .menu-icon {
            cursor: pointer;
            font-size: 25px;
            margin-right: 10px;
            color: white;
        }
    </style>
</head>

<body class="bg">

<!-- NAVBAR -->
<div class="navbar">
    <div style="display:flex; align-items:center;">
        <span class="menu-icon" onclick="toggleSidebar()">☰</span>
        <div class="logo">Edu-Wallet</div>
    </div>

    <div class="menu">
        <a href="#" onclick="goHome()">HOME</a>
        <a>ABOUT</a>
        <a>MORE</a>
    </div>

    <div class="auth">
        🔔
        <span style="color:white;">{{ auth()->user()->name }}</span>
        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="35">
    </div>
</div>

<!-- SIDEBAR -->
<div id="sidebar" class="sidebar">
    <span class="close" onclick="toggleSidebar()">✖</span>

    <ul>
        <li onclick="showPage('profil')">Profil</li>
        <li onclick="showPage('edu')">Edu-Section</li>
        <li onclick="showPage('simulasi')">Simulasi Tabungan</li>
    </ul>
</div>

<!-- CONTENT -->
<div class="content">

    <!-- PROFIL -->
    <div id="profil" class="profile-card">
        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png">

        <h3>{{ auth()->user()->name }}</h3>
        <p style="font-size:12px;">Reward Point</p>

        <hr style="margin:15px 0;">

        <!-- LOGOUT FIX KECIL -->
        <a href="/logout" class="logout-btn">Logout</a>
    </div>

    <!-- EDU -->
    <div id="edu" class="card hidden">
        <h2>Edu-Section</h2>

        <div class="edu-item">
            Cara Menabung
            <button>MULAI</button>
        </div>

        <div class="edu-item">
            Manajemen Keuangan
            <button>MULAI</button>
        </div>
    </div>

    <!-- SIMULASI -->
    <div id="simulasi" class="card hidden">
        <h2>Simulasi Tabungan</h2>

        <p>Target Tabungan:</p>
        <input id="target" type="number" style="width:100%; padding:10px; border-radius:8px;">

        <p style="margin-top:20px;">Periode Tabungan:</p>
        <select id="periode" style="width:100%; padding:10px; border-radius:8px;">
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

        <p id="hasil" style="margin-top:20px; font-weight:bold;"></p>
    </div>

</div>

<!-- JS -->
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

function goHome() {
    document.getElementById("profil").classList.remove("hidden");
    document.getElementById("edu").classList.add("hidden");
    document.getElementById("simulasi").classList.add("hidden");
    document.getElementById("sidebar").classList.remove("active");
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

    let rupiah = new Intl.NumberFormat('id-ID').format(Math.ceil(perHari));

    document.getElementById("hasil").innerText =
        "Kamu harus menabung Rp" + rupiah + " per hari";
}
</script>

</body>
</html>