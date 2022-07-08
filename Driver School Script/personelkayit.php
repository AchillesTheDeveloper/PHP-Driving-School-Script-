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
        #kk,#cvv,#tarih {
            font-family: YU GOTHIC;
            border: 1px solid#2b1055;
            width:200px;
            padding: 12px 20px;
            margin:10px 10px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
    </style>
    <title>Personel Kayıt</title>
</head>
<body>
<button onclick="window.location.href = 'admingiris.php';" type="submit" id="kayit" name="kayit">Geri Dön!</button>
<form action="personelkayit2.php" method="POST">
    <img src="kaynaklar/giris.png" class="girislogo">
    <h1>Personel Kayıt</h1>
    <br>
    <input type="text" id="ad" name="tc" placeholder="TC Kimlik" required/>
    <br>
    <input type="text" id="ad" name="ad" placeholder="Ad" required/>
    <br/>
    <input type="text" id="soyad" name="soyad" placeholder="Soyad" required/>
    <br/>
    <input type="text" id="telefon" name="telefon" placeholder="Telefon Numarası" required/>
    <br/>
    <input type="text" id="telefon" name="personelis" placeholder="Personel İş" required/>
    <br>
    <input type="text" id="telefon" name="personelmaas" placeholder="Personel Maaş" required/>
    <br>
    <input type="submit" id="kayit" name="kayit" value="Kaydet" required/>
    <br>  <br>
</form>


</body>
</html>