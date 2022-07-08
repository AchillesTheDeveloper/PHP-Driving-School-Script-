<?php
if(isset($_POST['degistir_uye'])){
    $id=$_POST['id'];
    $tc=$_POST['tc'];
    $ad=$_POST['ad'];
    $soyad=$_POST['soyad'];
    $telefon=$_POST['telefon'];
    $ehliyet=$_POST['ehliyet'];
    $email=$_POST['email'];
    $baglanti = mysqli_connect("localhost", "root", "", "sk");
    if ($baglanti->connect_error) {
        die("Bağlantı Kurulamadı! " .$baglanti->connect_error);
    }
    $sql = "UPDATE `uyeler` SET `tc_kimlik`='$tc',`ad`='$ad',`soyad`='$soyad',`telefon`='$telefon',`ehliyet_tipi`='$ehliyet',`email`='$email' WHERE `id`='$id'";
    $result = $baglanti->query($sql);
}
else
{

}

?>

<?php

if(isset($_POST['degistir_ehliyet'])){
$ehliyetid=$_POST['ehliyetid'];
$ehliyettip=$_POST['ehliyettip'];
$kursücret=$_POST['kursücret'];
$sinavharc=$_POST['sinavharc'];
$digerharc=$_POST['digerharc'];
$toplam=$kursücret+$sinavharc+$digerharc;
$baglanti = mysqli_connect("localhost", "root", "", "sk");
if ($baglanti->connect_error) {
die("Bağlantı Kurulamadı! " .$baglanti->connect_error);
}
$sql = "UPDATE `ehliyet` SET `ehliyet_tip`='$ehliyettip',`kurs_ücret`='$kursücret',`sinav_harci`='$sinavharc',`diger_harc`='$digerharc',`toplam`='$toplam' WHERE `ehliyet_id`='$ehliyetid'";
$result = $baglanti->query($sql);
}
else
{

}

?>

<?php

if(isset($_POST['degistir_iletisim'])){
$iletisimid=$_POST['iletisimid'];
$adresno=$_POST['adresno'];
$telno=$_POST['telno'];
$email=$_POST['email'];
$baglanti = mysqli_connect("localhost", "root", "", "sk");
if ($baglanti->connect_error) {
die("Bağlantı Kurulamadı! " .$baglanti->connect_error);
}
$sql = "UPDATE `iletisim` SET `adres_no`='$adresno',`tel_no`='$telno',`email`='$email' WHERE `id`='$iletisimid'";
$result = $baglanti->query($sql);
}
else
{

}

?>

<?php

if(isset($_POST['degistir_personel'])){
    $personelid=$_POST['personelid'];
    $personeltc=$_POST['personeltc'];
    $personelad=$_POST['personelad'];
    $personelsoyad=$_POST['personelsoyad'];
    $personeltel=$_POST['telefon'];
    $personelis=$_POST['personelis'];
    $personelücret=$_POST['personelmaas'];
    $baglanti = mysqli_connect("localhost", "root", "", "sk");
    if ($baglanti->connect_error) {
        die("Bağlantı Kurulamadı! " .$baglanti->connect_error);
    }
    $sql = "UPDATE `personel` SET `personel_tc`='$personeltc', `personel_ad`='$personelad',`personel_soyad`='$personelsoyad',`personel_telefon`='$personeltel',`personel_is`='$personelis',`personel_ücret`='$personelücret' WHERE `personel_id`='$personelid'";
    $result = $baglanti->query($sql);
}
else
{

}
?>

<html>
<head>
    <style>

        h2
        {
        margin: 20px 0px;
            font-family: YU GOTHIC;
            font-size:20px;
            text-align:center;
        }
       #text{
           font-family: YU GOTHIC;
           border: 1px solid#2b1055;
           width:200px;
           padding: 12px 20px;
           margin: 10px 10px;
           display: inline-block;
           border: 1px solid #ccc;
           box-sizing: border-box;
       }
       #buton {
           font-family: YU GOTHIC;
           font-size:20px;
           width:300px;
           background-color: rosybrown;
           color: white;
           padding: 14px 20px;
           border: none;
           cursor: pointer;
       }
body {
    background: linear-gradient(violet, skyblue);
}
        #dön {
            font-family: YU GOTHIC;
            font-size:20px;
            width:300px;
            background-color: rosybrown;
            color: white;
            padding: 14px 20px;
            margin:auto;
            border: none;
            cursor: pointer;
    </style>
<Title>Hesap Ayarları</Title>
</head>
<body>
<button onclick="window.location.href = 'admingiris.php';" type="submit" id="dön">Geri Dön!</button>
<h2>Üye Ayarları</h2>
<form align="center" action="" method="POST" >
    <input type="text" id="text" name="id" placeholder="Üye ID"><br>
    <input type="text" id="text" name="tc" placeholder="TC Kimlik"><br>
    <input type="text" id="text" name="ad" placeholder="Ad"><br>
    <input type="text" id="text" name="soyad" placeholder="Soyad"><br>
    <input type="text" id="text" name="telefon" placeholder="Telefon"><br>
    <input type="text" id="text" name="ehliyet" placeholder="Ehliyet Tipi"><br>
    <input type="text" id="text" name="email" placeholder="Email"><br>
    <button type="submit" id="buton" name="degistir_uye">Bilgileri Değiştir!</button><br>
</form>
<h2>Ehliyet Ayarları</h2>
<form align="center" action="" method="POST" >
    <input type="text" id="text" name="ehliyetid" placeholder="Ehliyet ID"><br>
    <input type="text" id="text" name="ehliyettip" placeholder="Ehliyet Tip"><br>
    <input type="text" id="text" name="kursücret" placeholder="Kurs Ücret"><br>
    <input type="text" id="text" name="sinavharc" placeholder="Sınav Harcı"><br>
    <input type="text" id="text" name="digerharc" placeholder="Diğer Harçlar"><br>
    <button type="submit" id="buton" name="degistir_ehliyet">Bilgileri Değiştir!</button><br>
</form>
<h2>İletişim Ayarları</h2>
<form align="center" action="" method="POST" >
    <input type="text" id="text" name="iletisimid" placeholder="İletişim ID"><br>
    <input type="text" id="text" name="adresno" placeholder="Adres"><br>
    <input type="text" id="text" name="telno" placeholder="Telefon No"><br>
    <input type="text" id="text" name="email" placeholder="E-Mail"><br>
    <button type="submit" id="buton" name="degistir_iletisim">Bilgileri Değiştir!</button><br><br>
</form>

<h2>Personel Ayarları</h2>
<form align="center" action="" method="POST" >
    <input type="text" id="text" name="personelid" placeholder="Personel ID"><br>
    <input type="text" id="text" name="personeltc" placeholder="TC Kimlik"><br>
    <input type="text" id="text" name="personelad" placeholder="Ad"><br>
    <input type="text" id="text" name="personelsoyad" placeholder="Soyad"><br>
    <input type="text" id="text" name="telefon" placeholder="E-Mail"><br>
    <input type="text" id="text" name="personelis" placeholder="Personel İş"><br>
    <input type="text" id="text" name="personelmaas" placeholder="Personel Maaş"><br>
    <button type="submit" id="buton" name="degistir_personel">Bilgileri Değiştir!</button><br><br>
</form>
</body>
</html>

