<html>
<head>
    <style>
        body {

            background: linear-gradient(violet,skyblue);
        }
        .girislogo{

            transform: translateY(44px);

        }

        form {
            padding:10px 10px;
            margin-left: 35%;
            margin-right:35%;
        }
        label{
            font-family: YU GOTHIC;
            font-weight:400;
            font-size:20px;
            text-align:center;
        }
        #kadi {
            font-family: YU GOTHIC;
            border: 1px solid#2b1055;
            width:200px;
            padding: 12px 20px;
            margin: 10px 10px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        #sifre {
            font-family: YU GOTHIC;
            border: 1px solid#2b1055;
            width:200px;
            margin: 10px 10px;
            padding: 12px 20px;

            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
    #giris {
        font-family: YU GOTHIC;
        font-size:20px;
         width:300px;
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        border: none;
        cursor: pointer;

    }
        #giris:hover {
            opacity: 0.8;
        }
        h1 {
            padding: 0px 10px;
            font-family: Bahnschrift;
            font-size:25px;
            transform: translateX(35px)
        }
    </style>
    <title>Üye Giriş</title>
</head>
<body>
<form action="giris2.php" method="POST">
    <img src="kaynaklar/giris.png" class="girislogo">
    <h1>Admin Giriş</h1>
    <br>
    <input type="text" id="kadi" name="kadi" placeholder="Kullanıcı Adı"/>
    <br/>
    <br>
        <input type="password" id="sifre" name="sifre" placeholder="Şifre"/>
        <br/>
        <br>
        <input type="submit" id="giris" value="Giriş"/>
        <br/>
</form>

</body>
</html>