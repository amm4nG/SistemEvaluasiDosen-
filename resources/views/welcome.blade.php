<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EDOM Fakultas Teknik | Unsulbar</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-vZv4+q4Wyz7DqBk8o5u+3y1DzR+A9tS5gaYB/QuEz6D8DauaZ7sYJO2k4t6w3D0s" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Caveat:wght@700&family=Josefin+Sans:wght@200&family=Montserrat:wght@300&family=Nanum+Myeongjo&family=Roboto+Mono:wght@100;300&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href=""><img src="{{ asset('storage/img/unsulbar.jpg') }}" style="width: 25%; height: 25%;" alt="Unsulbar"
                        class="rounded-circle"> EDOM</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Evaluasi Dosen</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('informatika') }}">INFORMATIKA</a></li>
                            <li><a href="{{ url('sipil') }}">SIPIL</a></li>
                            <li><a href="{{ url('pwk') }}">PWK</a></li>
                        </ul>
                    </li>
                    <li><a class="getstarted scrollto" href="#team">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Evaluasi Dosen Oleh Mahasiswa</h1>
                    <h2>Unsulbar | Fakultas Teknik</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#team" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('storage/img/sampul-image.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2><i class="bi bi-mortarboard-fill"></i> Program Studi</h2>
                </div>

                <div class="row justify-content-center">

                    <div class="col-md-5 mb-3" data-aos="zoom-in" data-aos-delay="200">
                        <a href="{{ url('informatika') }}">
                            <div class="card shadow text-center p-3" style="color: #37517e; height: 4cm;">
                                <div class="card-body">
                                    <h3>
                                        <i class="bi bi-mortarboard-fill"></i> Teknik Informatika
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-5 mb-3" data-aos="zoom-in" data-aos-delay="200">
                        <a href="{{ url('sipil') }}">
                            <div class="card shadow text-center p-3" style="color: #37517e; height: 4cm;">
                                <div class="card-body">
                                    <h3>
                                        <i class="bi bi-mortarboard-fill"></i> Teknik Sipil
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-5" data-aos="zoom-in" data-aos-delay="200">
                        <a href="{{ url('pwk') }}">
                            <div class="card shadow text-center p-3" style="color: #37517e; height: 4cm;">
                                <div class="card-body">
                                    <h3>
                                        <i class="bi bi-mortarboard-fill"></i> Perencanaan Wilayah dan Kota
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Arman Umar</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
