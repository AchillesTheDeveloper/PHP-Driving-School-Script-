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
    <title>S??r??c?? Kay??t</title>
</head>
<body>
<button onclick="window.location.href = 'admingiris.php';" type="submit" id="kayit" name="kayit">Geri D??n!</button>
<form action="kayit2.php" method="POST">
    <img src="kaynaklar/giris.png" class="girislogo">
    <h1>S??r??c?? Kay??t</h1>
    <br>
    <input type="text" id="ad" name="tc" placeholder="TC Kimlik" required/>
    <br>
    <input type="text" id="ad" name="ad" placeholder="Ad" required/>
    <br>
    <input type="text" id="soyad" name="soyad" placeholder="Soyad" required/>
    <br>
    <input type="text" id="ad" name="kadi" placeholder="Kullan??c?? Ad??" required/>
    <br>
    <input type="password" id="ad" name="sifre" placeholder="??ifre" required/>
    <br/>
    <input type="text" id="telefon" name="telefon" placeholder="Telefon Numaras??" required/>
    <br/>
    <input type="email" id="email" name="email" placeholder="E-Mail" required/>
    <br>
    <select name="ehliyettip" id="ehliyettip" required>
        <option value="A S??n??f??">A S??n??f??-3927???</option>
        <option value="B S??n??f??">B S??n??f??-4672???</option>
        <option value="A1 S??n??f??">A1 S??n??f??-3028???</option>
        <option value="A2 S??n??f??">A2 S??n??f??-3399???</option>
        <option value="B Otomatik">B Otomatik-3076???</option>
    </select>
    <input type="submit" id="kayit" name="kayit" value="Kaydet" required/>
    <br>  <br>
</form>


</body>
</html>