<?php
$baglanti = mysqli_connect("localhost","root","","sk");

?>

<html>
<head>
    <style>

        .gezinticbk {

            border-radius: 20px 20px 20px 20px;
            background-color: lightblue;
            overflow: hidden;
        }
        .gezinticbk a {
            font-family: YU GOTHIC;
            font-weight:400;
            float: left;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .gezinticbk a:hover {
            background-color: #ddd;
            color: black;
        }
        .gezinticbk a.active {
            background-color: #04AA6D;
            color: white;
        }


        body {
            background: linear-gradient(violet,skyblue);
        }
        .bilgitablo {
            border-collapse: collapse;
            font-size: 0.9em;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

        }
        .bilgitablo thead tr {
            background-color: salmon;
            color: #ffffff;
            font-weight: bold;
        }
        .bilgitablo th,
        .bilgitablo td {
            padding: 12px 15px;
        }
        .bilgitablo tbody tr {
            border-bottom: 1px solid #dddddd;
        }
        .bilgitablo tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
        .bilgitablo tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        h2{
            text-align:center;
            font-family: Bahnschrift;
            font-size:20px;
        }
        table,td{
            text-align:center;
            border:1px solid #282830;
    </style>
    <title>Admin Giriş</title>
</head>
<body>

<div class="gezinticbk">
    <a href="index.php" style="float:right;">Çıkış Yap</a>
    <a href="admingiris.php">Sürücü Bilgi</a>
    <a href="personel.php">Personel Bilgi</a>
    <a href = "iletisimbilgi.php">İletişim Bilgi</a>
    <a href="kayit.php">Sürücü Kayıt</a>
    <a href="personelkayit.php">Personel Kayıt</a>
    <a href = "iletisimkayit.php">İletişim Kayıt</a>
    <a href="ayarlar.php">Ayarlar</a>
</div>



<h2>Sürücü Bilgileri:</h2>
<table class="bilgitablo" border align="center" BGCOLOR="royalblue">
    <tr>
        <th>Id:</th>
        <th>TC Kimlik:</th>
        <th>Ad:</th>
        <th>Soyad:</th>
        <th>Kullanıcı Adı::</th>
        <th>Şifre:</th>
        <th>Telefon Numarası:</th>
        <th>Email:</th>
        <th>Ehliyet Tipi:</th>
    </tr>
    <?php
    $baglanti = mysqli_connect("localhost","root","","sk");
    $sql="SELECT * FROM uyeler";
    $sonuc = $baglanti->query($sql);
    while ($raw = $sonuc->fetch_assoc()) {
    ?>
    <tr>
        <td><?php echo $raw['uye_id'] ?></td>
        <td><?php echo $raw['uye_tc'] ?></td>
        <td><?php echo $raw['uye_ad'] ?></td>
        <td><?php echo $raw['uye_soyad'] ?></td>
        <td><?php echo $raw['uye_kullaniciad'] ?></td>
        <td><?php echo $raw['uye_sifre'] ?></td>
        <td><?php echo $raw['uyetelno'] ?></td>
        <td><?php echo $raw['email'] ?></td>
        <td><?php echo $raw['ehliyet_tipi'] ?></td>
    </tr>
    <?php
    }
        ?>




</body>
</html>
