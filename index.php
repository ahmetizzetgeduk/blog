<?php 
include 'sablonlar/head.php';
include 'sablonlar/navbar.php'?>

<body>


    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div style="border:2px solid #F00" class="card mb-4">
                            <iframe width="%100" height="250px" src="https://www.youtube.com/embed/wtrJGesX3vY"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <div style="background-color:rgb(214, 214, 214); border-top:1px solid #F00"
                                class="card-body">
                                <div class="small" style="color:#AE0004; font-family: 'Roboto', sans-serif;">Şubat 23,
                                    2021
                                </div>
                                <h2><a href="haberler/amd_nedir.php"
                                        style="color:#F00; font-family: 'Roboto', sans-serif; text-decoration:none;">AMD Nedir?</a></h2>
                                <p class="card-text" style="color:#000; font-family: 'Oswald', sans-serif;">
                                    Açılımı "Advanced Micro Devices" olan AMD, Amerika merkezli bir mikro çip
                                    üreticisidir.
                                    1969 yılında Kaliforniya'da kurulan
                                    şirket, bilgisayarlar üzerine geliştirdiği pek çok teknoloji ile bugün dünyanın en
                                    büyük
                                    donanım üreticileri arasına girmeyi
                                    başarmıştır...
                                </p>
                                <a style="background-color:#f00; border:#f00; font-family: 'Roboto', serif;"
                                    class="btn btn-primary-post" href="haberler/amd_nedir.php">Devamını oku </a>
                            </div>
                        </div>
                        <!-- Blog post-->
                        <div style="border:2px solid #F00" class="card mb-4">
                        <img src="images/amdcokuyor.jpg" style="width:auto; height: auto;"> 
                            <div style="background-color:rgb(214, 214, 214); border-top:1px solid #F00"
                                class="card-body">
                                
                                <div class="small" style="color:#AE0004; font-family: 'Roboto', sans-serif;">Şubat 23,
                                    2021
                                </div>
                                <h2><a href="#!"
                                        style="color:#F00; font-family: 'Roboto', sans-serif; text-decoration:none;">Lorem İpsum</a></h2>
                                <p class="card-text" style="color:#000; font-family: 'Oswald', sans-serif;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolorum, alias sapiente ex at sunt
                                     veritatis voluptatum assumenda dolores! Nisi eius iusto incidunt, officia earum dolor fugit,
                                      rerum velit at beatae illo, tenetur atque saepe eveniet eaque. Earum consectetur aperiam
                                       doloremque ducimus, magnam hic nulla. Iusto nobis, sit unde aperiam, asperiores voluptatibus
                                </p>
                                <a style="background-color:#f00; border:#f00; font-family: 'Roboto', serif;"
                                    class="btn btn-primary-post" href="#!">Devamını oku </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div style="border:2px solid #F00" class="card mb-4">
                        <img src="images/amdnedir.jpg" style="width:auto; height: auto;"> 
                            <div style="background-color:rgb(214, 214, 214); border-top:1px solid #F00"
                                class="card-body">
                                
                                <div class="small" style="color:#AE0004; font-family: 'Roboto', sans-serif;">Şubat 23,
                                    2021
                                </div>
                                <h2><a href="#!"
                                        style="color:#F00; font-family: 'Roboto', sans-serif; text-decoration:none;">Lorem İpsum</a></h2>
                                <p class="card-text" style="color:#000; font-family: 'Oswald', sans-serif;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolorum, alias sapiente ex at sunt
                                     veritatis voluptatum assumenda dolores! Nisi eius iusto incidunt, officia earum dolor fugit,
                                      rerum velit at beatae illo, tenetur atque saepe eveniet eaque. Earum consectetur aperiam
                                       doloremque ducimus, magnam hic nulla. Iusto nobis, sit unde aperiam, asperiores voluptatibus
                                </p>
                                <a style="background-color:#f00; border:#f00; font-family: 'Roboto', serif;"
                                    class="btn btn-primary-post" href="#!">Devamını oku </a>
                            </div>
                        </div>
                        <!-- Blog post-->
                        <div style="border:2px solid #F00" class="card mb-4">
                        <img src="images/a10cpu.jpg" style="width:auto; height: auto;"> 
                            <div style="background-color:rgb(214, 214, 214); border-top:1px solid #F00"
                                class="card-body">
                                
                                <div class="small" style="color:#AE0004; font-family: 'Roboto', sans-serif;">Şubat 23,
                                    2021
                                </div>
                                <h2><a href="#!"
                                        style="color:#F00; font-family: 'Roboto', sans-serif; text-decoration:none;">Lorem İpsum</a></h2>
                                <p class="card-text" style="color:#000; font-family: 'Oswald', sans-serif;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolorum, alias sapiente ex at sunt
                                     veritatis voluptatum assumenda dolores! Nisi eius iusto incidunt, officia earum dolor fugit,
                                      rerum velit at beatae illo, tenetur atque saepe eveniet eaque. Earum consectetur aperiam
                                       doloremque ducimus, magnam hic nulla. Iusto nobis, sit unde aperiam, asperiores voluptatibus
                                </p>
                                <a style="background-color:#f00; border:#f00; font-family: 'Roboto', serif;"
                                    class="btn btn-primary-post" href="#!">Devamını oku </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php   
        include  'sablonlar/side-widgets.php';
        include 'sablonlar/ads1.php';
        include 'sablonlar/footer.php';
      ?>
</body>

</html>