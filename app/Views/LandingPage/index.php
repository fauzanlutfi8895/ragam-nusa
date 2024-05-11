<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ragam Nusa</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/css/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/css/widget/carousel/carousel.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        #myCarousel .carousel-inner .carousel-item img {
            width: 100%;
            height: auto;
        }

        #myCarousel .carousel-inner .carousel-item {
            width: 100%;
        }

        body {
            padding-top: 0%;
            padding-bottom: 0%;
        }
    </style>

</head>

<body>

    <header style="color:white">
        <nav class="navbar p-2" , style="display: block; background-color: #FFBB5C">
            <div class="row align-items-end">
                <div class="col-sm">
                    <div class="row align-items-end">
                        <div class="col d-flex justify-content-end">Bantuan :</div>
                        <div class="col"><img src="<?= base_url('assets'); ?>/images/icon/icn-phone.png" alt="">555-0118</div>
                        <div class="col">ragam.nusa@help.com</div>
                    </div>
                </div>
                <div class="col-sm d-flex justify-content-end">Mari lestarikan kesenian daerah Nusantara</div>
                <div class="col d-flex justify-content-end">Follow Us : <img src="<?= base_url('assets'); ?>/images/icon/social-media.png" alt=""></div>
            </div>
        </nav>
        <nav class="navbar p-3" , style="display: block; background-color: #FF9017">
            <div class="row">
                <div class="col-sm">
                    <div class="row align-items-end">
                        <div class="col"><img src="<?= base_url('assets'); ?>/images/logo-navbar.png" style="width: 160px;"></div>
                        <div class="col d-flex justify-content-end">Home</div>
                        <div class="col d-flex justify-content-center">Artikel</div>
                        <div class="col d-flex justify-content-start">About</div>
                    </div>
                </div>
                <div class="col-sm">
                    <form class="form-inline" style="display:flex">
                        <input class="form-control xs-1 w-75" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" style="background-color:white">Search</button>
                    </form>
                </div>
                <div class="col-sm">
                    <div class="row align-items-end">
                        <div class="col justify-content-end"><img src="<?= base_url('assets'); ?>/images/icon/icn-user.png" alt="">Login/Register</div>
                        <div class="col justify-content-center"><img src="<?= base_url('assets'); ?>/images/icon/icn-cart.png" alt="">Shop Cart</div>
                        <div class="col justify-content-start"><img src="<?= base_url('assets'); ?>/images/icon/icn-love.png" alt="">1</div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets'); ?>/images/coming-soon-3.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Ragam Nusa</h1>
                            <p>Selamat datang di Ragam Nusa, platform digital yang menghadirkan kekayaan seni dan budaya dari berbagai penjuru nusantara!</p>
                            <p><a class="btn btn-lg btn-outline-warning" href="#">Lihat Lebih Banyak</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets'); ?>/images/coming-soon-1.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Melihat dan Melestarikan Kebudayaan</h1>
                            <p>Melihat lebih jauh kebudayaan dan ikut melestarikan kebudayaan bersama ragam nusa!</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets'); ?>/images/coming-soon-2.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Budaya Indonesia Budaya Kita.</h1>
                            <p>Ikut melestarikan kebudayaan kita kebudayaan Indonesia !</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container marketing">

            <h1 class="h1 text-center mb-4">Tim Ragam Nusa</h1>
            <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle" src="<?= base_url('assets'); ?>/images/coming-soon-1.jpg" alt="" width="160" height="160" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h3 class="mt-2 h3">Friska Abadi S.Kom M.Kom</h3>
                    <p>Dosen Pembimbing</p>
                </div>

                <div class="col-lg-4">
                    <img class="rounded-circle" src="<?= base_url('assets'); ?>/images/coming-soon-1.jpg" alt="" width="160" height="160" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h3 class="mt-2 h3">Muhamad Michael Febrian</h3>
                    <p>Ketua</p>
                </div>

                <div class="col-lg-4">
                    <img class="rounded-circle" src="<?= base_url('assets'); ?>/images/coming-soon-1.jpg" alt="" width="160" height="160" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h3 class="mt-2 h3">Achmad Fauzan Lutfi</h3>
                    <p>Data Analyst</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle" src="<?= base_url('assets'); ?>/images/coming-soon-1.jpg" alt="" width="160" height="160" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h3 class="mt-2 h3">Muhammad Abdhi Priyatama</h3>
                    <p>UI/UX</p>
                </div>
                <div class="col-lg-4">
                    <img class="rounded-circle" src="<?= base_url('assets'); ?>/images/coming-soon-1.jpg" alt="" width="160" height="160" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h3 class="mt-2 h3">Annisa Salsabila Ahdiyani</h3>
                    <p>Sosmed Manager</p>
                </div>
                <div class="col-lg-4">
                    <img class="rounded-circle" src="<?= base_url('assets'); ?>/images/coming-soon-1.jpg" alt="" width="160" height="160" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h3 class="mt-2 h3">Aziza Humaira Ramhmah</h3>
                    <p>Manajement Control</p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Apa Itu Ragam Nusa ?</h2>
                    <p class="lead">Aplikasi media digital berbasis website dengan artificial intelligence sebagai solusi untuk mempromosikan produk dan jasa kesenian daerah. Aplikasi ini didesain untuk mengatasi penurunan minat generasi muda terhadap kesenian tradisional dengan memanfaatkan teknologi.</p>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="<?= base_url('assets'); ?>/images/what-is-ragam-nusa.jpg" alt="" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Fitur <span class="text-muted">NusaConnect</span></h2>
                    <p class="lead">NussaConnect adalah fitur inovatif yang dirancang untuk memberikan rekomendasi seni yang relevan kepada pengguna, dengan tujuan meningkatkan pengalaman mereka dalam mengeksplorasi dunia seni.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="<?= base_url('assets'); ?>/images/nusa-connect.jpg" alt="" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">NusaPress</h2>
                    <p class="lead">NusaPress adalah fitur yang menyediakan konten informatif untuk memperluas wawasan yang memperkaya tentang kekayaan budaya Indonesia yang tak ternilai harganya.</p>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="<?= base_url('assets'); ?>/images/nusapres.jpg" alt="" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>

            <!-- /END THE FEATURETTES -->
        </div><!-- /.container -->

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="fw-normal">Coming soon Ragam Nusa</h1>
                <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
                <a class="btn btn-outline-secondary" href="#">Coming soon</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>


        <!-- FOOTER -->
        <footer class="container mt-4">
            <p>&copy; 2024 Ragam Nusa Team </p>
        </footer>
    </main>


    <script src="<?= base_url('assets'); ?>/js/vendors/bootstrap/bootstrap.bundle.min.js"></script>


</body>

</html>