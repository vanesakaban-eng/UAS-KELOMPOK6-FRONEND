<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu Wallet</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background:#eef3fb;
        }

        /* NAVBAR */

        .navbar{
            width:100%;
            height:80px;
            background:white;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 40px;
        }

        .nav-left{
            display:flex;
            align-items:center;
        }

        .menu-icon{
            font-size:30px;
            cursor:pointer;
            margin-right:15px;
        }

        .logo{
            font-size:30px;
            font-weight:bold;
        }

        .menu{
            display:flex;
            gap:40px;
        }

        .menu a{
            text-decoration:none;
            color:black;
            font-weight:500;
        }

        /* SIDEBAR */

        .sidebar{
            position:fixed;
            top:0;
            left:-260px;
            width:250px;
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

        .close{
            color:white;
            font-size:24px;
            cursor:pointer;
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

        /* CONTENT */

        .container{
            display:flex;
            flex-direction:column;
            align-items:center;
            margin-top:50px;
        }

        .title{
            font-size:60px;
            font-weight:bold;
            margin-bottom:30px;
        }

        .chat-card{
            width:800px;
            background:#f5f5f5;
            padding:25px;
            border-radius:20px;
        }

        .chat-box{
            height:400px;
            background:#ebebeb;
            border-radius:15px;
            padding:20px;
            overflow-y:auto;
            display:flex;
            flex-direction:column;
        }

        .message{
            max-width:320px;
            padding:15px;
            border-radius:15px;
            margin-bottom:15px;
            line-height:1.5;
        }

        .bot{
            background:white;
            align-self:flex-start;
        }

        .user{
            background:#7ad97a;
            color:white;
            align-self:flex-end;
        }

        .input-area{
            display:flex;
            margin-top:20px;
            gap:15px;
        }

        .input-area input{
            flex:1;
            padding:15px;
            border:none;
            border-radius:15px;
            font-size:16px;
        }

        .input-area button{
            width:120px;
            border:none;
            border-radius:15px;
            background:#6fd16f;
            color:white;
            font-size:16px;
            cursor:pointer;
        }

    </style>
</head>

<body>

<!-- NAVBAR -->

<div class="navbar">

    <div class="nav-left">

        <span class="menu-icon"
        onclick="toggleSidebar()">
            ☰
        </span>

        <div class="logo">
            Edu-Wallet
        </div>

    </div>

    <div class="menu">

        <a href="/dashboard">
            HOME
        </a>

        <a href="/about">
            ABOUT
        </a>

        <a href="/more">
            MORE
        </a>

    </div>

</div>

<!-- SIDEBAR -->

<div id="sidebar" class="sidebar">

    <span class="close"
    onclick="toggleSidebar()">
        ✖
    </span>

    <ul>

        <li>
            <a href="/dashboard">
                Dashboard
            </a>
        </li>

        <li>
            <a href="/assistant">
                Digital Assistance
            </a>
        </li>

        <li>
            <a href="/logout">
                Logout
            </a>
        </li>

    </ul>

</div>

<!-- CONTENT -->

<div class="container">

    <div class="title">
        Digital Assistance
    </div>

    <div class="chat-card">

        <div class="chat-box" id="chatBox">

            <div class="message bot">
                Halo 👋 Ada yang bisa saya bantu tentang keuangan?
            </div>

        </div>

        <div class="input-area">

            <input
            type="text"
            id="messageInput"
            placeholder="Ketik pesan..."
            onkeypress="handleEnter(event)"
            >

            <button onclick="sendMessage()">
                Send
            </button>

        </div>

    </div>

</div>

<script>

function toggleSidebar(){

    document
    .getElementById("sidebar")
    .classList
    .toggle("active");
}

function handleEnter(event){

    if(event.key === "Enter"){
        sendMessage();
    }
}

function sendMessage(){

    let input =
    document.getElementById("messageInput");

    let chatBox =
    document.getElementById("chatBox");

    let pesan = input.value.trim();

    if(pesan === ""){
        return;
    }

    /* PESAN USER */

    let userMessage =
    document.createElement("div");

    userMessage.classList.add(
    "message",
    "user"
    );

    userMessage.innerText = pesan;

    chatBox.appendChild(userMessage);

    /* BALASAN BOT */

    let botReply =
    document.createElement("div");

    botReply.classList.add(
    "message",
    "bot"
    );

    let jawaban = "";

    let text = pesan.toLowerCase();

    if(text.includes("tabung")){

        jawaban =
        "Menabung membantu mempersiapkan kebutuhan masa depan 💰";

    }else if(text.includes("investasi")){

        jawaban =
        "Investasi adalah cara mengembangkan uang untuk masa depan 📈";

    }else if(text.includes("utang")){

        jawaban =
        "Gunakan utang dengan bijak dan sesuai kemampuan membayar.";

    }else if(text.includes("halo")){

        jawaban =
        "Halo juga 👋 Semoga harimu menyenangkan!";

    }else if(text.includes("keuangan")){

        jawaban =
        "Keuangan yang sehat terjadi jika pemasukan lebih besar dari pengeluaran.";

    }else{

        jawaban =
        "Maaf, saya belum memahami pertanyaan itu 😅";
    }

    setTimeout(() => {

        botReply.innerText = jawaban;

        chatBox.appendChild(botReply);

        chatBox.scrollTop =
        chatBox.scrollHeight;

    }, 500);

    input.value = "";

    chatBox.scrollTop =
    chatBox.scrollHeight;
}

</script>

</body>
</html>