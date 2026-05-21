<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Quiz Penerapan Teknologi Keuangan</title>

<style>

body{
    margin:0;
    font-family:Arial, sans-serif;
    background:
    linear-gradient(rgba(240,245,255,0.85),
    rgba(240,245,255,0.85)),
    url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=1200&auto=format&fit=crop');

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
    box-sizing:border-box;
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
    font-weight:600;
}

.profile{
    display:flex;
    align-items:center;
    gap:15px;
}

/* QUIZ */

.container{
    max-width:900px;
    margin:50px auto;
    background:rgba(255,255,255,0.95);
    padding:40px;
    border-radius:25px;
}

.title{
    text-align:center;
    font-size:45px;
    margin-bottom:40px;
    color:#111827;
}

.question{
    background:#f3f4f6;
    padding:25px;
    border-radius:15px;
    margin-bottom:25px;
}

.question h3{
    margin-bottom:20px;
}

label{
    display:block;
    background:white;
    margin:12px 0;
    padding:12px;
    border-radius:10px;
    cursor:pointer;
    transition:0.3s;
}

label:hover{
    background:#dbe7c3;
}

input{
    margin-right:10px;
}

.submit-area{
    text-align:center;
    margin-top:40px;
}

button{
    background:#7a963b;
    color:white;
    border:none;
    padding:15px 40px;
    border-radius:30px;
    font-size:18px;
    cursor:pointer;
}

button:hover{
    opacity:0.9;
}

/* POPUP */

.popup{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.4);
    display:none;
    justify-content:center;
    align-items:center;
}

.popup-content{
    background:white;
    width:450px;
    padding:50px;
    border-radius:25px;
    text-align:center;
}

.popup-content h1{
    font-size:50px;
    margin-bottom:20px;
}

.popup-content h2{
    font-size:40px;
    margin:15px 0;
}

.reward{
    color:#7ad67a;
    font-size:35px;
    font-weight:bold;
}

.popup-btn{
    margin-top:30px;
    display:flex;
    justify-content:center;
    gap:20px;
}

.cancel{
    background:white;
    border:2px solid #ccc;
    color:#111827;
}

</style>
</head>

<body>

@php
    $user = auth()->user();
@endphp

<!-- NAVBAR -->

<div class="navbar">

    <div class="logo">
        Edu-Wallet
    </div>

    <div class="menu">
        <a href="/dashboard">HOME</a>
        <a href="/about">ABOUT</a>
        <a href="/more">MORE</a>
    </div>

    <div class="profile">

        🔔

        <span>
            {{ auth()->user()->name }}
        </span>

        <img
        src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
        width="40">

    </div>

</div>

<!-- QUIZ -->

<div class="container">

<h1 class="title">
    Quiz Penerapan Teknologi Keuangan
</h1>

<!-- SOAL 1 -->

<div class="question">

<h3>
1. Contoh teknologi keuangan adalah...
</h3>

<label>
<input type="radio" name="q1" value="10">
A. E-Wallet
</label>

<label>
<input type="radio" name="q1" value="0">
B. Buku tulis
</label>

<label>
<input type="radio" name="q1" value="0">
C. Kalkulator biasa
</label>

</div>

<!-- SOAL 2 -->

<div class="question">

<h3>
2. E-wallet digunakan untuk...
</h3>

<label>
<input type="radio" name="q2" value="0">
A. Bermain game
</label>

<label>
<input type="radio" name="q2" value="10">
B. Pembayaran digital
</label>

<label>
<input type="radio" name="q2" value="0">
C. Menulis surat
</label>

</div>

<!-- SOAL 3 -->

<div class="question">

<h3>
3. Mobile banking memudahkan pengguna untuk...
</h3>

<label>
<input type="radio" name="q3" value="10">
A. Transfer uang
</label>

<label>
<input type="radio" name="q3" value="0">
B. Bermain musik
</label>

<label>
<input type="radio" name="q3" value="0">
C. Menonton film
</label>

</div>

<!-- SOAL 4 -->

<div class="question">

<h3>
4. Pembayaran menggunakan QR Code termasuk...
</h3>

<label>
<input type="radio" name="q4" value="10">
A. Teknologi keuangan
</label>

<label>
<input type="radio" name="q4" value="0">
B. Permainan
</label>

<label>
<input type="radio" name="q4" value="0">
C. Hiburan
</label>

</div>

<!-- SOAL 5 -->

<div class="question">

<h3>
5. Fintech adalah singkatan dari...
</h3>

<label>
<input type="radio" name="q5" value="10">
A. Financial Technology
</label>

<label>
<input type="radio" name="q5" value="0">
B. Final Technique
</label>

<label>
<input type="radio" name="q5" value="0">
C. Finance Ticket
</label>

</div>

<!-- SOAL 6 -->

<div class="question">

<h3>
6. Keuntungan teknologi keuangan adalah...
</h3>

<label>
<input type="radio" name="q6" value="10">
A. Transaksi lebih cepat
</label>

<label>
<input type="radio" name="q6" value="0">
B. Menambah antrean
</label>

<label>
<input type="radio" name="q6" value="0">
C. Sulit digunakan
</label>

</div>

<!-- SOAL 7 -->

<div class="question">

<h3>
7. Salah satu contoh pembayaran digital adalah...
</h3>

<label>
<input type="radio" name="q7" value="0">
A. Uang monopoli
</label>

<label>
<input type="radio" name="q7" value="10">
B. QRIS
</label>

<label>
<input type="radio" name="q7" value="0">
C. Kertas kosong
</label>

</div>

<!-- SOAL 8 -->

<div class="question">

<h3>
8. Teknologi keuangan membantu masyarakat menjadi...
</h3>

<label>
<input type="radio" name="q8" value="10">
A. Lebih praktis
</label>

<label>
<input type="radio" name="q8" value="0">
B. Lebih lambat
</label>

<label>
<input type="radio" name="q8" value="0">
C. Bingung
</label>

</div>

<!-- SOAL 9 -->

<div class="question">

<h3>
9. Aplikasi dompet digital dapat digunakan untuk...
</h3>

<label>
<input type="radio" name="q9" value="10">
A. Membayar belanja
</label>

<label>
<input type="radio" name="q9" value="0">
B. Memasak
</label>

<label>
<input type="radio" name="q9" value="0">
C. Bermain bola
</label>

</div>

<!-- SOAL 10 -->

<div class="question">

<h3>
10. Teknologi keuangan dapat diakses melalui...
</h3>

<label>
<input type="radio" name="q10" value="10">
A. Smartphone
</label>

<label>
<input type="radio" name="q10" value="0">
B. Buku gambar
</label>

<label>
<input type="radio" name="q10" value="0">
C. Papan tulis
</label>

</div>

<!-- SOAL 11 -->

<div class="question">

<h3>
11. PIN pada e-wallet berfungsi untuk...
</h3>

<label>
<input type="radio" name="q11" value="10">
A. Keamanan akun
</label>

<label>
<input type="radio" name="q11" value="0">
B. Bermain game
</label>

<label>
<input type="radio" name="q11" value="0">
C. Menambah iklan
</label>

</div>

<!-- SOAL 12 -->

<div class="question">

<h3>
12. Internet dibutuhkan dalam penggunaan...
</h3>

<label>
<input type="radio" name="q12" value="10">
A. Mobile banking
</label>

<label>
<input type="radio" name="q12" value="0">
B. Pensil
</label>

<label>
<input type="radio" name="q12" value="0">
C. Buku
</label>

</div>

<!-- SOAL 13 -->

<div class="question">

<h3>
13. Teknologi keuangan membuat transaksi menjadi...
</h3>

<label>
<input type="radio" name="q13" value="10">
A. Mudah
</label>

<label>
<input type="radio" name="q13" value="0">
B. Sulit
</label>

<label>
<input type="radio" name="q13" value="0">
C. Lama
</label>

</div>

<!-- SOAL 14 -->

<div class="question">

<h3>
14. Salah satu risiko teknologi keuangan adalah...
</h3>

<label>
<input type="radio" name="q14" value="10">
A. Penipuan online
</label>

<label>
<input type="radio" name="q14" value="0">
B. Menambah teman
</label>

<label>
<input type="radio" name="q14" value="0">
C. Membantu belajar
</label>

</div>

<!-- SOAL 15 -->

<div class="question">

<h3>
15. Teknologi keuangan membantu pembayaran menjadi...
</h3>

<label>
<input type="radio" name="q15" value="10">
A. Cepat dan praktis
</label>

<label>
<input type="radio" name="q15" value="0">
B. Sulit
</label>

<label>
<input type="radio" name="q15" value="0">
C. Lama
</label>

</div>

<div class="submit-area">

<button type="button" onclick="cekQuiz()">
    NEXT
</button>

</div>

</div>

<!-- POPUP -->

<div id="popup" class="popup">

<div class="popup-content">

<h1>🎉</h1>

<h2>SELAMAT!</h2>

<p id="scoreText"></p>

<div id="rewardText" class="reward"></div>

<div class="popup-btn">

<button
class="cancel"
onclick="closePopup()">
Cancel
</button>

<a href="/dashboard">
<button type="submit">
    Lihat Reward
</button>
</a>

</div>

</div>

</div>

<script>

function cekQuiz(){

let total = 0;

let jawaban =
document.querySelectorAll(
'input[type="radio"]:checked'
);

jawaban.forEach((item)=>{
total += parseInt(item.value);
});

/* KIRIM REWARD */

fetch('/reward', {

method: 'POST',

headers: {
'Content-Type': 'application/json',
'X-CSRF-TOKEN': '{{ csrf_token() }}',
'Accept': 'application/json'
},

body: JSON.stringify({
point: total
})

})

.then(response => response.json())

.then(data => {

/* KIRIM NOTIFIKASI */

fetch('/add-notification', {

method:'POST',

headers:{
'Content-Type':'application/json',
'X-CSRF-TOKEN':'{{ csrf_token() }}'
},

body: JSON.stringify({

message:
'Kamu mendapatkan ' +
total +
' reward point dari quiz 🎉'

})

});

/* TAMPILKAN POPUP */

document.getElementById("popup")
.style.display = "flex";

document.getElementById("scoreText")
.innerHTML =
"SKOR : " + total;

document.getElementById("rewardText")
.innerHTML =
"+" + total + " POIN REWARD";

})

.catch(error => {

console.log(error);

alert("Reward gagal disimpan!");

});

}

function closePopup(){

document.getElementById("popup")
.style.display = "none";

}

</script>

</body>
</html>