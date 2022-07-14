<!DOCTYPE html>
<?php include("../ayar/ayar.php"); ?>
<?php
// Kullanıcı adı oturumda mevcutsa yönetici paneline yönlendir
if(!empty($_SESSION['kullanici_adi'])){
    header('Location: /admin/anasayfa.php');
    exit;
}
?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/admin/assets/bootstrap.min.css"/>
</head>
<body>
<div class="row w-100 justify-content-center align-items-center mt-lg-5">
    <div class="col-8 col-md-6 col-lg-3 my-5">
        <h5>Yönetici Paneline Giriş Yap</h5>
        <form action="/admin/index.php" method="post">
            <div class="form-group mt-2">
                <label for="kullanici_adi">Kullanıcı Adı</label>
                <input type="text" class="form-control" id="kullanici_adi" name="kullanici_adi" aria-describedby="emailHelp" placeholder="Kullanıcı adınızı yazın...">
            </div>
            <div class="form-group mt-2">
                <label for="sifre">Şifreniz</label>
                <input type="password" class="form-control" id="sifre" name="sifre" placeholder="Şifrenizi yazın...">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Giriş Yap</button>
        </form>
        <?php
            if(!empty($_POST)){

                $giris = $db->prepare("SELECT * FROM kullanicilar WHERE kullanici_adi=? AND sifre=?");
                $giris->execute(array($_POST['kullanici_adi'], $_POST['sifre']));
                $sonuc = $giris->fetch(PDO::FETCH_ASSOC);
                // Eğer girilen şifre ve kullanıcı adı eşleşiyorsa aşağıdaki işlemleri yap
                if($sonuc){
                    $_SESSION['kullanici_adi'] = $_POST['kullanici_adi'];
                    $_SESSION['isim'] = $sonuc['isim'];
                    // Oturum verilerini tanımla ve admin anasayfasına yönlendir
                    header('Location: /admin/anasayfa.php');
                    exit;
                }
            }
        ?>
    </div>
</div>
<!--Javascript Tanımlamaları-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/admin/assets/bootstrap.min.js"></script>
</body>
</html>