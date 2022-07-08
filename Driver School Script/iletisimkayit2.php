<?php
if(isset($_POST['kayit'])) {
    $adres = $_POST['tc'];
    $tel = $_POST['ad'];
    $email = $_POST['soyad'];
    $baglanti = mysqli_connect("localhost", "root", "", "sk");
    $sql = "INSERT INTO iletisim(uye_tc,uye_ad,uye_soyad,uye_kullaniciad,uye_sifre,uyetelno,email,ehliyet_tipi) VALUES ('" . $adres . "','" . $tel . "','" . $email ."')";
    if ($baglanti->query($sql) === TRUE) {

        header("Location: admingiris.php");
    } else {
        echo "İletişim Bilgileri Kaydedilemedi ,Tekrar Deneyin!";
    }
}

?>
