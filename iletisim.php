<?php 
include 'sablonlar/head.php';
include 'sablonlar/navbar.php'?>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- İlk içerim bölümü-->
            <div class="card mb-4" style="border:2px solid #F00; background-color: rgb(214, 214, 214)">
               <?php echo $ayarlar['harita']; ?>
            </div>
            <div class="card mb-4" style="border:2px solid #F00; background-color: rgb(214, 214, 214);">
                <!--iletişim-->

                <form action="" method="" style="margin-left: 10px; background-color: rgb(214, 214, 214)">
                    <div class="card mt-4" style="border: none">
                        <div class="card-body p-3" style="background-color:rgb (214, 214, 214)">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input type="text" class="form-control" name="" placeholder="Ad Soyad" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input type="email" class="form-control" name="" placeholder="E-Posta" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input type="text" class="form-control" name="" placeholder="Konu" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">

                                    </div>
                                    <textarea class="form-control" placeholder="Lütfen Mesajınızı Buraya Yazın.."
                                        rows="6" required></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="GÖNDER" class="btn btn-info btn-block">
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>

        <?php   
        include  'sablonlar/side-widgets.php';
        include 'sablonlar/ads1.php';
        include 'sablonlar/footer.php';
      ?>
        </body>

        </html>