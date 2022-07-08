<?php
if(isset($_POST['kayit'])) {
    $tc = $_POST['tc'];
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $telefon = $_POST['telefon'];
    $is = $_POST['personelis'];
    $maas = $_POST['personelmaas'];
    $baglanti = mysqli_connect("localhost", "root", "", "sk");
    $sql = "INSERT INTO personel(personeltc,personelad,personelsoyad,personeltelefon,personelis,personelucret) VALUES ('" . $tc . "','" . $ad . "','" . $soyad . "','" . $telefon . "','" . $is . "','" . $maas . "')";
    if ($baglanti->query($sql) === TRUE) {

        header("Location: admingiris.php");
    } else {
        echo "Kayıt Başarısız,Tekrar Deneyin!";
    }
}

?>
