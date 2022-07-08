<!DOCTYPE html>
<head>
    <meta charset="utf-k">
    <title>Sürücü Kursu</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            font-size: 20px;
            text-align: left;
            border-collapse: collapse;
            width: 100%;
            color: black;
            font-family: YU GOTHIC;

        }
        th {
            background-color: mediumslateblue;
            color: white;
        }
        tr:nth-child(even) {background-color: #fff}
        body {
            background: linear-gradient(skyblue,violet);
        }
        table,td{
            text-align:center;
            border:1px solid #282830;
        }
        .gezinticbk {

            border-radius: 20px 20px 20px 20px;
            background-color: mediumslateblue;
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

    </style>
</head>
<body>
<header>

    <div class="gezinticbk">

        <a href="giris.php" style="float:right;">Admin Giriş</a>
        <a href="index.php">Anasayfa</a>
        <a href="detay.php">Detaylı Bilgi</a>
    </div>
    <div align="center">


<br>
        <h1 style="text-align:center;font-family:YU GOTHIC;font-size:30px;">Kurs Bilgi:</h1>
        <table>
            <tr>

                <th>Ehliyet Tipi</th>
                <th>Kurs Ücreti</th>
                <th>Sınav Harcı</th>
                <th>Diğer Harçlar</th>
                <th>Toplam</th>
            </tr>
            <?php
            $baglanti = mysqli_connect("localhost","root","","sk");
            $sql="SELECT * FROM ehliyet";
            $sonuc = $baglanti->query($sql);
            while ($row = $sonuc->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['ehliyet_tip']?></td>
                    <td><?php echo $row['kurs_ücret'] ?> ₺</td>
                    <td><?php echo $row['sinav_harci'] ?> ₺</td>
                    <td><?php echo $row['diger_harc'] ?> ₺</td>
                    <td><?php echo $row['toplam'] ?> ₺</td>
                </tr>
                <?php
            }
            ?>
        </table>
        <h1 style="text-align:center;font-family:YU GOTHIC;font-size:30px;">İletişim Bilgi:</h1>

        <?php
        $baglanti = mysqli_connect("localhost","root","","sk");
        $sql="SELECT * FROM iletisim";
        $sonuc = $baglanti->query($sql);
        while ($row = $sonuc->fetch_assoc()) {
        ?>
        <table>
            <th>Konum</th>
            <th>Telefon No</th>
            <th>E-Mail</th>
        <tr>
            <td><?php echo $row['adres_no']?></td>
            <td><?php echo $row['tel_no'] ?></td>
            <td><?php echo $row['email'] ?></td>

        </tr>
        </table>


        <div>
    <img class="arkaplan" src="kaynaklar/yildizlar.png" alt="arkaplan">

</header>

</body>
</html>

<?php
}
?>