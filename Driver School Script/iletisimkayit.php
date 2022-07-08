<html>
<head>
    <style>
        #ad {
            font-family: YU GOTHIC;
            border: 1px solid#2b1055;
            width:200px;
            padding: 12px 20px;
            margin: 10px 10px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        #soyad {

            font-family: YU GOTHIC;
            border: 1px solid#2b1055;
            width:200px;
            padding: 12px 20px;
            margin: 10px 10px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
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
        #email {
            font-family: YU GOTHIC;
            border: 1px solid#2b1055;
            width:200px;
            padding: 12px 20px;
            margin: 10px 10px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;

        }

        #telefon {
            font-family: YU GOTHIC;
            border: 1px solid #2b1055;
            width: 200px;
            padding: 12px 20px;
            margin:10px 10px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        #ehliyettip {
            font-family: YU GOTHIC;
            font-size:20px;
            width:200px;
            background-color: skyblue;
            color: white;
            padding: 14px 20px;
            border: none;
            cursor: pointer;
            margin: 10px 10px;
        }
        #kayit {
            font-family: YU GOTHIC;
            font-size:20px;
            width:300px;
            background-color: rosybrown;
            color: white;
            padding: 14px 20px;
            border: none;
            cursor: pointer;
        }
        #kayit:hover {
            opacity: 0.8;
        }
        h1 {
            color: black;
            padding: 0px 10px;
            font-family: Bahnschrift;
            font-size:25px;
            transform: translateX(40px)

        }
    </style>
    <title>İletişim Kayıt</title>
</head>
<body>
<button onclick="window.location.href = 'admingiris.php';" type="submit" id="kayit" name="kayit">Geri Dön!</button>
<form action="iletisimkayit2.php" method="POST">
    <img src="kaynaklar/giris.png" class="girislogo">
    <h1>Sürücü Kayıt</h1>
    <br>
    <input type="text" id="ad" name="adresno" placeholder="Adres:" required/>
    <br>
    <input type="text" id="ad" name="telno" placeholder="Telefon Numarası:" required/>
    <br>
    <input type="text" id="ad" name="email" placeholder="E-Mail:" required/>
    <br>
    <input type="submit" id="kayit" name="kayit" value="Kaydet" required/>
    <br>  <br>
</form>


</body>
</html>