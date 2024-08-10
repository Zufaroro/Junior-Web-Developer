<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CIATER</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <?php
    $currentPage = 'home';
    include("navbar.php");
    ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative ">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Pesanan</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="index.html">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Pesanan</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <!-- <div class="service container-fluid"> -->
    <div class="container">
        <!-- <div class="container"> -->
        <div class="service-item">
            <div class="row-service align-items-center justify-content-center">
                <div class="col">
                    <img class="bd-placeholder-img img-thumbnail" width="600" height="600"
                        xmlns="http://www.w3.org/2000/svg" role="img" src="img/service-1.jpg" alt="">
                </div>
                <div class="col">
                    <h4><i class="fa fa-award service-icon"></i>Paket Panas</h4>
                    <p class="m-0">- Kamar 1 Double Bed</p>
                    <p class="m-0">- Kolam Berendam public</p>
                </div>
                <div class="col text-center">
                    <h4 class="pb-sm-0">Rp770.000/malam</h4>
                    <a class="btn btn-primary font-weight-bold px-4" style="height: 40px;" type="submit"
                        href="pesanan.php">Pesan</a>
                </div>
            </div>
        </div>
        <div class="service-item">
            <div class="row-service align-items-center justify-content-center">
                <div class="col">
                    <img class="bd-placeholder-img img-thumbnail" width="600" height="600"
                        xmlns="http://www.w3.org/2000/svg" role="img" src="img/service-2.jpg" alt="">
                </div>
                <div class="col">
                    <h4><i class="fa fa-award service-icon"></i>Paket Kebakar</h4>
                    <p class="m-0">- Kamar 1 Double Bed</p>
                    <p class="m-0">- Kolam Berendam public</p>
                    <p class="m-0">- Wisata Arung Jeram (2 Orang)</p>
                </div>
                <div class="col text-center">
                    <h4 class="pb-sm-0">Rp980.000/malam</h4>
                    <a class="btn btn-primary font-weight-bold px-4" style="height: 40px;" type="submit"
                        href="pesanan.php">Pesan</a>
                </div>
            </div>
        </div>
        <div class="service-item">
            <div class="row-service align-items-center justify-content-center">
                <div class="col">
                    <img class="bd-placeholder-img img-thumbnail" width="600" height="600"
                        xmlns="http://www.w3.org/2000/svg" role="img" src="img/service-3.jpg" alt="">
                </div>
                <div class="col">
                    <h4><i class="fa fa-award service-icon"></i>Paket Gosong</h4>
                    <p class="m-0">- Kamar 1 Double Bed</p>
                    <p class="m-0">- Kolam Berendam public</p>
                    <p class="m-0">- Wisata Arung Jeram (2 Orang)</p>
                    <p class="m-0">- Wisata Paint Ball (2 orang)</p>
                </div>
                <div class="col text-center">
                    <h4 class="pb-sm-0">Rp1.100.000/malam</h4>
                    <a class="btn btn-primary font-weight-bold px-4" style="height: 40px;" type="submit"
                        href="pesanan.php">Pesan</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Service End -->


    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Jl. Terusan Jakarta Ruko
                    Puri Dago A6 No.352, Sukamiskin, Kec. Arcamanik, Kota Bandung, Jawa Barat 40291</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+628-231-9949-941</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i><a
                        href="mailto:ciater1023@gmail.com">ciater1023@gmail.com</a></p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
                <p>Ikuti Sosial Media kami untuk update PROMO dan Kejutan lainnya</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2"
                        href="https://twitter.com/ZeCoffee1950"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2"
                        href="https://www.facebook.com/profile.php?id=61552829985611"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://linktr.ee/dapurovaltin"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square"
                        href="https://www.instagram.com/zecoffee1950/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Rafting Open Hours</h4>
                <div>
                    <h6 class="text-white text-uppercase">Monday - Friday</h6>
                    <p>8.00 AM - 5.00 PM</p>
                    <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                    <p>9.00 PM - 8.00 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">PaintBall Open Hours</h4>
                <div>
                    <h6 class="text-white text-uppercase">Monday - Friday</h6>
                    <p>8.00 AM - 5.00 PM</p>
                    <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                    <p>9.00 PM - 8.00 PM</p>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5"
            style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">All Rights
                Reserved.</a></p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold"
                    href="https://www.instagram.com/thafah.kj">Ikhwan
                    Zufar</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

</body>

</html>