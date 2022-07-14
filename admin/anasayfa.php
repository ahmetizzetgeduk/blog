<?php include("../ayar/ayar.php");?>
<?php
    // Kullanıcı adı oturumda mevcut değilse tekrardan giriş yapma sayfasına yönlendir
    if(empty($_SESSION['kullanici_adi'])){
        header('Location: /admin/index.php');
        exit;
    }
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yönetici Paneli</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/admin/assets/bootstrap.min.css"/>
    <link rel="stylesheet" href="/admin/assets/dashboard.css"/>

    <style type="text/css">/* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }</style>
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Blog</a>
    <!--<input class="form-control form-control-dark w-100" type="text" placeholder="Arama" aria-label="Arama">-->
    <ul class="navbar-nav px-3" style="flex-direction: row;gap: 1rem;">
        <li class="nav-item text-nowrap" style="background-color:#f7f7f7;">
            <a class="nav-link text-dark p-2" href="/" target="_blank">Siteyi Görüntüle</a>
        </li>
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="/admin/cikis.php">Merhaba <?php echo $_SESSION['isim'];?> , Çıkış Yap</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            Yönetici Paneli
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-file">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                            Satın Alımlar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-shopping-cart">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                            Ürünler
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <h1>ANASAYFA</h1>
            <div class="col-6">
                <form action="/admin/ayar_guncelle.php" method="post">
                    <div class="form-group">
                        <label for="site_basligi">Site Başlığı</label>
                        <input type="text" class="form-control" id="site_basligi" name="site_basligi" placeholder="Site Başlığını değiştir" value="<?php echo $ayarlar['site_basligi'];?>">
                    </div>
                    <div class="form-group">
                        <label for="harita">Harita</label>
                        <textarea class="form-control" id="harita" name="harita" placeholder="harita kodunu yazın" style="min-height: 200px"><?php echo $ayarlar['harita'];?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Kaydet</button>
                </form>
            </div>
        </main>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="/admin/assets/bootstrap.min.js"></script>
</body>
</html>