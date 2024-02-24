<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Geo-Mart</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link rel="icon" href="<?=base_url()?>assets/logoweb.png">

    <!-- Favicon -->
    <link href="<?=base_url()?>assets/web/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url()?>assets/web/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url()?>assets/web/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid" style="box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);">
        <div class="row border-top px-xl-5">
            <div class="col-lg-2 d-none d-lg-block">
                <a class="d-flex align-items-center justify-content-between text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 100px; padding: 0 100px;">
                    <img src="<?=base_url()?>assets/logoweb.png" style="height: 100px;">
                </a>
                
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light mt-2">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                    <img src="<?=base_url()?>assets/logoweb.png" style="height: 100px;">
                    </a>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="<?=base_url()?>" class="nav-item nav-link active">Home</a>
                            <a href="<?=base_url('web/map')?>" class="nav-item nav-link">Map</a>
                            <a href="<?=base_url('web/gallery')?>" class="nav-item nav-link">Gallery</a>
                            <a href="<?=base_url('web/about')?>" class="nav-item nav-link">About</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="<?=base_url()?>assets/images/bg1.jpg" style="min-height: 300px; object-fit: cover; max-height: 600px">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Eksplorasi Indomaret</h5>
                            <h1 class="display-3 text-white mb-md-4">Informasi Lokasi dan Deskripsi Terbaik</h1>
                            <a href="<?=base_url('web/gallery')?>" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="<?=base_url()?>assets/images/bg2.jpg" style="min-height: 300px; object-fit: cover; max-height: 600px">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Eksplorasi Indomaret</h5>
                            <h1 class="display-3 text-white mb-md-4">Info Terlengkap Indomaret di Geo-Mart</h1>
                            <a href="<?=base_url('web/gallery')?>" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="<?=base_url()?>assets/images/bg4.jpg" style="min-height: 300px; object-fit: cover; max-height: 600px">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Eksplorasi Indomaret</h5>
                            <h1 class="display-3 text-white mb-md-4">A New Way To Find Information</h1>
                            <a href="<?=base_url('web/gallery')?>" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="<?=base_url()?>assets/web/img/about.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About This Website</h5>
                        <h1>Sistem Informasi Geografis (SIG) Toko Indomaret</h1>
                    </div>
                    <p style="text-align: justify;">Sistem Informasi Geografis (SIG) untuk toko Indomaret menyajikan informasi yang terfokus pada pemetaan, deskripsi, alamat, dan lokasi fisik setiap toko. Dengan menggunakan teknologi geospasial, SIG ini memberikan kemampuan untuk dengan cepat menentukan posisi geografis toko-toko Indomaret di sekitar wilayah kecamatan Mampang Prapatan, menyediakan informasi alamat yang akurat, dan memberikan gambaran visual terkait distribusi spasial toko-toko tersebut. Dengan demikian, platform ini memberikan manfaat dalam manajemen dasar terkait dengan lokasi dan navigasi, memudahkan pemantauan dan penataan data geografis yang bersifat lebih sederhana dan terkonsentrasi pada aspek dasar dari informasi geografis toko Indomaret.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-fluid py-5">
        <div class="container py-5" style="box-shadow: 3px 3px 5px 5px rgba(128, 128, 128, 0.3);">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Sejarah</h5>
                <h1>Indomaret</h1>
            </div>
            <div class="row">
                <div class="col-lg">
                    <p style="text-align: justify;">Indomaret, didirikan pada tahun 1967 dengan nama PT Indomarco Prismatama oleh Jojon Darmono, awalnya berfokus pada perdagangan grosir. Pada tahun 1988, perusahaan ini mengubah arah bisnisnya dengan membuka minimarket pertamanya di Ancol, Jakarta Utara. Sejak saat itu, Indomaret mengalami pertumbuhan pesat dan telah menjadi jaringan minimarket terkemuka di Indonesia. Dengan membuka gerai-gerai baru secara terus-menerus, Indomaret berhasil meraih pencapaian membuka gerai ke-1000 pada tahun 2003. Selama tahun 2000-an, perusahaan terus melakukan inovasi, diversifikasi produk, dan memperkenalkan program loyalitas pelanggan. Meskipun dihadapkan pada tantangan pandemi COVID-19 pada tahun 2020, Indomaret terus berupaya menjaga keberlanjutan bisnisnya sambil tetap menyediakan barang kebutuhan sehari-hari dengan mematuhi protokol kesehatan.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Category Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Content</h5>
                <h1>Our Features</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?=base_url()?>assets/images/feat3.jpg" alt="" style="max-height: 600px; ">
                        <a class="cat-overlay text-white text-decoration-none" href="<?=base_url()?>">
                            <h4 class="text-white font-weight-medium">Home</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?=base_url()?>assets/images/feat1.jpg" alt="" style="max-height: 304px; min-width: 550px;">
                        <a class="cat-overlay text-white text-decoration-none" href="<?=base_url('web/map')?>">
                            <h4 class="text-white font-weight-medium">Map</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?=base_url()?>assets/images/feat2.jpg" alt="" style="max-height: 304px; min-width: 550px;">
                        <a class="cat-overlay text-white text-decoration-none" href="<?=base_url('web/gallery')?>">
                            <h4 class="text-white font-weight-medium">Gallery</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?=base_url()?>assets/images/feat5.jpg" alt="" style="max-height: 304px; min-width: 550px;">
                        <a class="cat-overlay text-white text-decoration-none" href="<?=base_url('web/about')?>">
                            <h4 class="text-white font-weight-medium">About Us</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category Start -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Our Blog</h5>
                <h1>News</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?=base_url()?>assets/images/br.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="https://www.jawapos.com/nasional/013441185/indomaret-point-di-kintamani-bali-viralusai-tunjukkan-miliki-pemandangan-indah-gunung-batur">
                            <h5 class="text-white mb-3">Indomaret Point di Kintamani Bali Viral Usai Tunjukkan Miliki Pemandangan Indah Gunung Batur</h5>
                            <p class="text-primary m-0">Dec 05, 2023</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?=base_url()?>assets/images/br2.jpeg" alt="">
                        <a class="blog-overlay text-decoration-none" href="https://www.cnbcindonesia.com/lifestyle/20230919085146-33-473586/alasan-banyak-indomaret-dan-alfamart-berdekatan-meski-saingan">
                            <h5 class="text-white mb-3">Alasan Banyak Indomaret dan Alfamart Berdekatan Meski Saingan</h5>
                            <p class="text-primary m-0">Sep 19, 2023</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?=base_url()?>assets/images/br3.jpeg" alt="">
                        <a class="blog-overlay text-decoration-none" href="https://money.kompas.com/read/2023/11/18/233609326/cara-bayar-belanja-di-indomaret-pakai-gopay-dengan-mudah">
                            <h5 class="text-white mb-3">Cara Bayar Belanja di Indomaret Pakai GoPay dengan Mudah</h5>
                            <p class="text-primary m-0">Nov 18, 2023</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; 2024 All Rights Reserved. Made With <i class="fa fa-heart"></i> By Dziko & Mario
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/easing/easing.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?=base_url()?>assets/web/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?=base_url()?>assets/web/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url()?>assets/web/js/main.js"></script>
</body>

</html>