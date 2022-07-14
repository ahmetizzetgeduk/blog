<?php
include("../ayar/ayar.php");
// formdan gelen site başlığını veritabanında güncelle
//UPDATE `ayarlar` SET `site_basligi`='blog',`harita`=[value-2] WHERE 1
$guncelle = $db->prepare("UPDATE ayarlar SET site_basligi=?,harita=? WHERE 1");
$guncelle->execute(array($_POST['site_basligi'], $_POST['harita']));
// işlemem tamamlanınca admin anasayfasına geri dön
header('Location: /admin/anasayfa.php');
exit;
?>