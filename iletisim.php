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
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.6947107773613!2d29.32563685060434!3d40.658659579236314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cae360558857f1%3A0x459c1ea8172017f4!2zw4dpZnRsaWssIMOHYW1sxLFjYSBTay4sIDc3NjAwIMOHaWZ0bGlra8O2eS9ZYWxvdmE!5e0!3m2!1str!2str!4v1628877127121!5m2!1str!2str"
                    width="732" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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