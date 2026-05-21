<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Quiz Perencanaan Keuangan</title>

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
        Quiz Perencanaan Keuangan
    </h1>

    <!-- SOAL 1 -->

    <div class="question">

        <h3>
            1. Tujuan utama perencanaan keuangan adalah...
        </h3>

        <label>
            <input type="radio" name="q1" value="10">
            A. Mengatur pemasukan dan pengeluaran
        </label>

        <label>
            <input type="radio" name="q1" value="0">
            B. Menghabiskan uang
        </label>

        <label>
            <input type="radio" name="q1" value="0">
            C. Menambah utang
        </label>

    </div>

    <!-- SOAL 2 -->

    <div class="question">

        <h3>
            2. Dana darurat digunakan untuk...
        </h3>

        <label>
            <input type="radio" name="q2" value="0">
            A. Liburan
        </label>

        <label>
            <input type="radio" name="q2" value="10">
            B. Keadaan mendesak
        </label>

        <label>
            <input type="radio" name="q2" value="0">
            C. Belanja online
        </label>

    </div>

    <!-- SOAL 3 -->

    <div class="question">

        <h3>
            3. Contoh kebutuhan primer adalah...
        </h3>

        <label>
            <input type="radio" name="q3" value="0">
            A. Tas branded
        </label>

        <label>
            <input type="radio" name="q3" value="0">
            B. Tiket konser
        </label>

        <label>
            <input type="radio" name="q3" value="10">
            C. Makanan
        </label>

    </div>

    <!-- SOAL 4 -->

    <div class="question">

        <h3>
            4. Menabung secara rutin termasuk...
        </h3>

        <label>
            <input type="radio" name="q4" value="0">
            A. Pemborosan
        </label>

        <label>
            <input type="radio" name="q4" value="10">
            B. Perencanaan keuangan
        </label>

        <label>
            <input type="radio" name="q4" value="0">
            C. Hutang
        </label>

    </div>

    <!-- SOAL 5 -->

    <div class="question">

        <h3>
            5. Catatan pemasukan dan pengeluaran disebut...
        </h3>

        <label>
            <input type="radio" name="q5" value="10">
            A. Anggaran keuangan
        </label>

        <label>
            <input type="radio" name="q5" value="0">
            B. Kredit
        </label>

        <label>
            <input type="radio" name="q5" value="0">
            C. Investasi
        </label>

    </div>

    <!-- SOAL 6 -->

    <div class="question">

        <h3>
            6. Pengeluaran harus disesuaikan dengan...
        </h3>

        <label>
            <input type="radio" name="q6" value="0">
            A. Keinginan
        </label>

        <label>
            <input type="radio" name="q6" value="10">
            B. Pemasukan
        </label>

        <label>
            <input type="radio" name="q6" value="0">
            C. Hobi
        </label>

    </div>

    <!-- SOAL 7 -->

    <div class="question">

        <h3>
            7. Menabung di bank lebih aman karena...
        </h3>

        <label>
            <input type="radio" name="q7" value="10">
            A. Dijaga sistem keamanan
        </label>

        <label>
            <input type="radio" name="q7" value="0">
            B. Bebas bunga
        </label>

        <label>
            <input type="radio" name="q7" value="0">
            C. Bisa diambil orang lain
        </label>

    </div>

    <!-- SOAL 8 -->

<div class="question">

    <h3>
        8. Uang saku sebaiknya digunakan untuk...
    </h3>

    <label>
        <input type="radio" name="q8" value="10">
        A. Kebutuhan penting
    </label>

    <label>
        <input type="radio" name="q8" value="0">
        B. Belanja berlebihan
    </label>

    <label>
        <input type="radio" name="q8" value="0">
        C. Bermain game
    </label>

</div>

<!-- SOAL 9 -->

<div class="question">

    <h3>
        9. Perencanaan keuangan membantu seseorang agar...
    </h3>

    <label>
        <input type="radio" name="q9" value="0">
        A. Boros
    </label>

    <label>
        <input type="radio" name="q9" value="10">
        B. Teratur
    </label>

    <label>
        <input type="radio" name="q9" value="0">
        C. Banyak utang
    </label>

</div>

<!-- SOAL 10 -->

<div class="question">

    <h3>
        10. Contoh kebutuhan sekunder adalah...
    </h3>

    <label>
        <input type="radio" name="q10" value="0">
        A. Makanan
    </label>

    <label>
        <input type="radio" name="q10" value="0">
        B. Rumah
    </label>

    <label>
        <input type="radio" name="q10" value="10">
        C. Smartphone
    </label>

</div>

<!-- SOAL 11 -->

<div class="question">

    <h3>
        11. Menyusun target tabungan termasuk...
    </h3>

    <label>
        <input type="radio" name="q11" value="10">
        A. Perencanaan keuangan
    </label>

    <label>
        <input type="radio" name="q11" value="0">
        B. Pemborosan
    </label>

    <label>
        <input type="radio" name="q11" value="0">
        C. Konsumtif
    </label>

</div>

<!-- SOAL 12 -->

<div class="question">

    <h3>
        12. Sifat hemat perlu diterapkan agar...
    </h3>

    <label>
        <input type="radio" name="q12" value="10">
        A. Keuangan lebih terkontrol
    </label>

    <label>
        <input type="radio" name="q12" value="0">
        B. Cepat habis uang
    </label>

    <label>
        <input type="radio" name="q12" value="0">
        C. Banyak utang
    </label>

</div>

<!-- SOAL 13 -->

<div class="question">

    <h3>
        13. Membeli barang sesuai kebutuhan disebut...
    </h3>

    <label>
        <input type="radio" name="q13" value="0">
        A. Konsumtif
    </label>

    <label>
        <input type="radio" name="q13" value="10">
        B. Bijak
    </label>

    <label>
        <input type="radio" name="q13" value="0">
        C. Boros
    </label>

</div>

<!-- SOAL 14 -->

<div class="question">

    <h3>
        14. Perencanaan keuangan penting dilakukan sejak...
    </h3>

    <label>
        <input type="radio" name="q14" value="0">
        A. Dewasa saja
    </label>

    <label>
        <input type="radio" name="q14" value="0">
        B. Tua
    </label>

    <label>
        <input type="radio" name="q14" value="10">
        C. Dini
    </label>

</div>

<!-- SOAL 15 -->

<div class="question">

    <h3>
        15. Salah satu manfaat menabung adalah...
    </h3>

    <label>
        <input type="radio" name="q15" value="0">
        A. Menambah pengeluaran
    </label>

    <label>
        <input type="radio" name="q15" value="10">
        B. Persiapan masa depan
    </label>

    <label>
        <input type="radio" name="q15" value="0">
        C. Membuat boros
    </label>

</div>

    <!-- BUTTON -->

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

            <a id="rewardLink" href="/dashboard">
                <button>
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