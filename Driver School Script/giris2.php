<?php
try {
    $baglanti = new PDO("mysql:host=localhost;dbname=sk", "root", "");
} catch (PDOException $e) {
    print $e->getMessage();
}
    $kullanici_ad = $_POST['kadi'];
    $sifre = $_POST['sifre'];
    $giris = $baglanti->prepare("SELECT * FROM admin WHERE kullaniciad=? AND sifre=?");

    $giris->execute(array($kullanici_ad, $sifre));
    if ($giris->rowCount())
    {
        header("Location: admingiris.php");


    } else { ?>
       <a style="font-family:YU GOTHIC;font-size:16px;"> <?php echo "Giriş başarısız.Kullanıcı adı veya parola hatalı!"; ?></a>
        <br><br>
        <button style="font-family:Bahnschrift;font-size:15px;"onclick="window.location.href = 'index.php';">Geri Dön!</button>
        <?php
    }



?>