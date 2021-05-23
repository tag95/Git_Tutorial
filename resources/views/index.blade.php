<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>My Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i"
          rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="/" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link  scrollto" href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link  scrollto" href="#journal">Skills</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>

<!-- ======= Hero Section ======= -->
<div id="hero" class="home">
    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <h4> {{ session()->get('success') }}</h4>
            </div>
        @endif
        <div class="hero-content">
            <h1>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer"></span></h1>
            <p>Full Stack Developer (Laravel PHP)</p>
            <ul class="list-unstyled list-social">
                <li><a href="https://www.facebook.com/MuhamMmedElshahat/" target="_blank"><i class="bi bi-facebook"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com/MohamedTag95?fbclid=IwAR11fiLqupjzhOW3jBQaAPhsmIxAu_ck4qY8hmkGvLA28pTrL7StPtv_twc"
                       target="_blank"><i class="bi bi-twitter"></i></a></li>
                <li>
                    <a href="https://www.instagram.com/muhamed_tageldin/?fbclid=IwAR0dgEkXajer5fZ1ivQCz0Hm3tMu11rm3XYTFanmwPOyB0vMwDIRqTSmgDk"
                       target="_blank"><i class="bi bi-instagram"></i></a></li>
                <li>
                    <a href="https://www.linkedin.com/in/mohamed-elshahat-0a7747190/?fbclid=IwAR11fiLqupjzhOW3jBQaAPhsmIxAu_ck4qY8hmkGvLA28pTrL7StPtv_twc"
                       target="_blank"><i class="bi bi-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<main id="main">
    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 ">
                    <div class="div-img-bg">
                        <div class="about-img">
                            <img src="assets/img/me.jpg" class="img-responsive" alt="me">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-descr">
                        <p class="p-heading">I'M A Full Stack Developer Using Laravel PHP Programming Language. </p>
                        <ul style="line-height: 2;">
                            <li>Worked As A Junior Laravel PHP Developer In Log Apps Company For (6 Month).</li>
                            <li>Worked As A Senior Laravel PHP Developer In Grand Solutions Company For (2 Years and 6
                                months).
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ======= Services Section ======= -->
    <div id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="services-block">
                        <i class="bi bi-bar-chart"></i>
                        <span>WEB DESIGN</span>
                        <p class="separator">Design your site professionally, conveniently and suitable for
                            all screens, with the latest programming techniques.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="services-block">
                        <i class="bi bi-bar-chart"></i>
                        <span>WEB DEVELOPMENT</span>
                        <p class="separator">
                            Professionally develop your desired site, useful and suitable for your needs, with
                            the latest programming techniques, Custom Functions for all required purpose.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="paddsection">
        <div class="container">
            <div class="section-title text-center">
                <h2>Previous projects</h2>
            </div>
        </div>
        <div class="container">
            <div class="row portfolio-container">
                <div class="col-md-12 portfolio-item filter-web">
                    <img src="assets/img/portfolio/GS.PNG" class="img-fluid" alt="Grand Solutions" style="width: 100%">
                    <div class="portfolio-info">
                        <h4>Grand Solutions</h4>
                        <p style="width: 90%">Your One-Stop E-Commerce Procurement solution for all your Electronic, Electrical,
                            Test/Measurement, Tools, Workshop/Site Safety Equipment, Cables and Connectors.. etc.</p>
                        <div>
                            <a href="assets/img/portfolio/GS.PNG" data-gallery="portfolioGallery"
                               class="portfolio-lightbox preview-link" title="Grand Solutions"><i
                                        class="bx bx-plus"></i></a>
                            <a target="_blank" href="{{url('portfolio-details')}}" class="details-link"
                               title="More Details"><i class="bx bx-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Journal Section ======= -->
    <div id="journal" class="text-left paddsection">
        <div class="container">
            <div class="section-title text-center">
                <h2>My Skills</h2>
            </div>
        </div>
        <div class="container">
            <div class="journal-block">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Design & Development</h2>
                        <hr class="m-b-50">

                        <div class="progress-item">
                            <div class="progress-title">Laravel 7, <span class="p-coutn">100</span>%</div>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="100" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="progress-item">
                            <div class="progress-title">PHP 7 (Object-oriented programming), <span class="p-coutn">100</span>%</div>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="100" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="progress-item">
                            <div class="progress-title">MySQL, <span class="p-coutn">100</span>%</div>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="100" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="progress-item">
                            <div class="progress-title">(Restful APIS) – (JSON), <span class="p-coutn">90</span>%</div>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="90" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 90%;"></div>
                            </div>
                        </div>

                        <div class="progress-item">
                            <div class="progress-title">Ajax, <span class="p-coutn">100</span>%</div>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="100" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="progress-item">
                            <div class="progress-title">Html, Html5, <span class="p-coutn">100</span>%</div>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="100" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="progress-item">
                            <div class="progress-title">CSS, CSS3, <span class="p-coutn">100</span>%</div>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="100" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="progress-item">
                            <div class="progress-title">Java Script, <span class="p-coutn">100</span>%</div>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="100" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="progress-item">
                            <div class="progress-title">jQuery, <span class="p-coutn">100</span>%</div>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="100" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="progress-item">
                            <div class="progress-title">Bootstrap framework, <span class="p-coutn">100</span>%</div>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="100" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="progress-item">
                            <div class="progress-title">Data Structure, <span class="p-coutn">100</span>%</div>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="100" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="progress-item">
                            <div class="progress-title">Problem Solving, <span class="p-coutn">100</span>%</div>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="100" role="progressbar" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
        <div class="container">
            <div class="contact-block1">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-contact">
                            <h2 class="mb-30">GET IN TOUCH</h2>
                            <ul class="contact-details">
                                <li><span>Cairo, Nasr City</span></li>
                                <li><span>Egypt</span></li>
                                <li><span>01065338241</span></li>
                                <li><span>01027717161</span></li>
                                <li><span>mohamed.tag1995@gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="{{url('contact')}}" method="post">
                            @csrf
                            <div class="row gy-3">
                                <div class="col-lg-6">
                                    <div class="form-group contact-block1">
                                        <input type="text" name="name" class="form-control" id="name"
                                               placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                               placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Message"
                                                  required></textarea>
                                    </div>
                                </div>
                                <div class="mt-0">
                                    <input type="submit" class="btn btn-default" value="Send message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- ======= Footer ======= -->
<div id="footer" class="text-center">
    <div class="container">
        <div class="socials-media text-center">
            <ul class="list-unstyled">
                <li><a href="https://www.facebook.com/MuhamMmedElshahat/" target="_blank"><i class="bi bi-facebook"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com/MohamedTag95?fbclid=IwAR11fiLqupjzhOW3jBQaAPhsmIxAu_ck4qY8hmkGvLA28pTrL7StPtv_twc"
                       target="_blank"><i class="bi bi-twitter"></i></a></li>
                <li>
                    <a href="https://www.instagram.com/muhamed_tageldin/?fbclid=IwAR0dgEkXajer5fZ1ivQCz0Hm3tMu11rm3XYTFanmwPOyB0vMwDIRqTSmgDk"
                       target="_blank"><i class="bi bi-instagram"></i></a></li>
                <li>
                    <a href="https://www.linkedin.com/in/mohamed-elshahat-0a7747190/?fbclid=IwAR11fiLqupjzhOW3jBQaAPhsmIxAu_ck4qY8hmkGvLA28pTrL7StPtv_twc"
                       target="_blank"><i class="bi bi-linkedin"></i></a></li>
            </ul>
        </div>
        <p>&copy; Copyrights. All rights reserved.</p>
        <div class="credits">
            Designed by <a
                    href="https://www.linkedin.com/in/mohamed-elshahat-0a7747190/?fbclid=IwAR11fiLqupjzhOW3jBQaAPhsmIxAu_ck4qY8hmkGvLA28pTrL7StPtv_twc"
                    target="_blank">Mohamed Elshahat</a>
        </div>
    </div>
</div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/typed.js/typed.min.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>