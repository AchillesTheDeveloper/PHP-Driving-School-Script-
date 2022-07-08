<?php
if(isset($_POST['kayit'])) {
    $tc = $_POST['tc'];
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $kullaniciad = $_POST['kadi'];
    $telefon = $_POST['telefon'];
    $sifre = $_POST['sifre'];
    $email = $_POST['email'];
    $ehliyettip = $_POST['ehliyettip'];
    $baglanti = mysqli_connect("localhost", "root", "", "sk");
    $sql = "INSERT INTO uyeler(uye_tc,uye_ad,uye_soyad,uye_kullaniciad,uye_sifre,uyetelno,email,ehliyet_tipi) VALUES ('" . $tc . "','" . $ad . "','" . $soyad . "','" . $kullaniciad . "','" . $sifre . "','" .$telefon . "','" .$email . "','" .$ehliyettip . "')";
    if ($baglanti->query($sql) === TRUE) {

        header("Location: admingiris.php");
    } else {
        echo "Kayıt Başarısız,Tekrar Deneyin!";
    }
}

?>
