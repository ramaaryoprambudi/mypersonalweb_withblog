<?php
require_once './function/functions.php';
require_once './function/constant.php';
require_once './assets/lib/Parsedown.php';

securityHeaders();


$conn = koneksi();
$data = mysqli_query($conn, "SELECT * FROM post");
$parsedown = new Parsedown();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rama Aryo Portfolio - Backend Web Developer & Pentester Web</title>
    <meta name="description"
        content="Rama Aryo Portfolio adalah sebuah website yang berisi hasil kerjaan di bidang Backend Web Development dan Pentesting.">
    <meta name="keywords" content="Rama Aryo, Portfolio, Backend Web Developer, Pentester Web, Web Security">
    <meta name="author" content="Rama Aryo Prambudi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/animate.css" />
    <link rel="stylesheet" href="./css/magnific-popup.css" />
    <link rel="stylesheet" href="./css/logo-slider.css" />

    <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/fontawesome/all.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Google Web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Font icons -->
    <link rel="stylesheet" href="./icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./icon-fonts/essential-regular-fonts/essential-icons.css" />

  <link rel="icon" type="image/svg" href="./<?= getFavIcon(); ?>">


<style>
    .gray-bg {
        background-color: #f8f9fa;
        /* Light gray background for contrast */
        padding: 50px 0;
        /* Vertical padding */
    }

    .feature {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 30px;
        /* Space below each feature */
    }

    .feature img {
        max-width: 95%;
        /* Ensure the image is responsive */
        height: auto;
        /* Maintain aspect ratio */
    }
</style>

</head>

<body>

    <!-- Preloading -->
    <div id="preloader">
        <div class="spinner">
            <div class="uil-ripple-css" style="transform:scale(0.29);">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <nav>
        <div class="row">
            <div class="container ">
                <div class="responsive"><i data-icon="m" class="icon"></i></div>
                <ul class="nav-menu">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">About</a></li>
                    <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
                    <li><a href="#blog" class="smoothScroll">Blog</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    <?php if (!isset($_SESSION['login'])) : ?>
                    <li><a href="auth/login.php" class="smoothScroll">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!--HOME-->
    <section class="home" id="home">
        <div class="home-content">
            <h1>I'm <span class="element">Rama Aryo</span></h1>
            <div class="social">
                <a href="https://www.linkedin.com/in/rama-aryo-prambudi/" target="_blank"><i class="fa fa-linkedin"
                        aria-hidden="true"></i></a>
                <a href="https://github.com/ramaaryoprambudi" target="_blank"><i class="fa fa-github"
                        aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/ramaprambudii/" target="_blank"><i class="fa fa-instagram"
                        aria-hidden="true"></i></a>
            </div>
            <a class="home-down bounce" href="#about"><i class="fa fa-angle-down"></i></a>
        </div>
    </section>
    <!--ABOUT-->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-3 about-image wow fadeInUp" data-wow-delay="0.4s">
                    <img src="./images/me.jpg" alt="" class="img-fluid" style="max-width: 250px;">
                </div>
                <div class="col-md-6 about-text wow fadeInUp" data-wow-delay="0.8s">
                    <div class="out">
                        <h2>Hello, I am Rama Aryo</h2>
                        <br />
                        <p>
                            Undergraduate student at Universitas Serang Raya specializing in Web Pentester with 1 year of experience. I am very
                            interested in web backend, web penetration tester, and bug bounty. I have also hacked companies such as Deezer,
                            Niagahoster, Hostinger, Sari Roti, Ministry of Health, Vidio, Pertamina International Shipping, and many more!.

                            <br /><br />
                            I am looking for an opportunity to contribute to a team that is
                            dynamic and innovative team where I can apply my skills and knowledge.
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- Container end -->
        
    
      

<h1 class="text-center h3 " style="margin-bottom: 25px;"><b>Webs I've hacked</b></h1>
<div class="slider">
    <div class="slide-track-1">
        <div class="slide">
            <img src="./images/client-logo/deezer.png" alt="Deezer Logo">
        </div>
        <div class="slide">
            <img src="./images/client-logo/vidio.png" alt="Vidio Logo">
        </div>
        <div class="slide">
            <img class="img-fluid" src="./images/client-logo/Niagahoster.png" alt="Niagahoster Logo">
        </div>
        <div class="slide">
            <img class="img-fluid" src="./images/client-logo/karyakarsa.png" alt="KaryaKarsa Logo">
        </div>
        <div class="slide">
            <img class="img-fluid" src="./images/client-logo/hostinger.png" alt="Hostinger Logo">
        </div>
        <div class="slide">
            <img class="img-fluid" src="./images/client-logo/transtv.png" alt="Transtv Logo">
        </div>
        <div class="slide">
            <img class="img-fluid" style="width: 500px;" src="./images/client-logo/pertamina-shipping.png"
                alt="Pertamina Shipping Logo">
        </div>
        <div class="slide">
            <img class="img-fluid" src="./images/client-logo/sari-roti.png" alt="Sari Roti Logo">
        </div>
        <!-- Duplicate slides to create continuous effect -->
        <div class="slide">
            <img src="./images/client-logo/deezer.png" alt="Deezer Logo">
        </div>
        <div class="slide">
            <img src="./images/client-logo/vidio.png" alt="Vidio Logo">
        </div>
        <div class="slide">
            <img class="img-fluid" src="./images/client-logo/Niagahoster.png" alt="Niagahoster Logo">
        </div>
        <div class="slide">
            <img class="img-fluid" src="./images/client-logo/karyakarsa.png" alt="KaryaKarsa Logo">
        </div>
        <div class="slide">
            <img class="img-fluid" src="./images/client-logo/hostinger.png" alt="Hostinger Logo">
        </div>
        <div class="slide">
            <img class="img-fluid" src="./images/client-logo/transtv.png" alt="Transtv Logo">
        </div>
        <div class="slide">
            <img class="img-fluid" style="width: 500px;" src="./images/client-logo/pertamina-shipping.png"
                alt="Pertamina Shipping Logo">
        </div>
        <div class="slide">
            <img class="img-fluid" src="./images/client-logo/sari-roti.png" alt="Sari Roti Logo">
        </div>
    </div>
</div>
    </section>

    <!--PORTFOLIO-->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>PORTFOLIO</h2>
                <div class="portfolio_filter">
                    <ul>
                        <li class="select-cat" data-filter="*">All</li>
                        <li data-filter=".hall-of-frame">Hall Of Frame</li>
                        <li data-filter=".competition">Competitions</li>
                        <li data-filter=".certificate">Certificate</li>
                    </ul>
                </div>
            </div>
            <!--Portfolio Items-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="isotope_items row">
                        <!-- Item -->
                        <a href="/images/Vidio-hall-of-frame.jpg"
                            class="single_item link hall-of-frame col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <img src="/images/Vidio-hall-of-frame.jpg" alt="Hall Of Frame Vidio.com">
                        </a>
                        <!-- Item -->
                        <a href="/images/nasa-hof.jpg"
                            class="single_item link hall-of-frame col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <img src="/images/nasa-hof.jpg" alt="Hall Of Frame Nasa">
                        </a>
                        <!-- Item -->
                        <a href="/images/Dezer-Hof.png"
                            class="single_item link hall-of-frame col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <img src="/images/Dezer-Hof.png" alt="Hall Of Frame Deezer">
                        </a>
                        <!-- Item -->
                        <a href="/images/Karyakarsa-cert.png"
                            class="single_item link certificate col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <img src="/images/Karyakarsa-cert.png" alt="Certificate Karya Karsa">
                        </a>
                        <!-- Item -->
                        <a href="/images/BSSN-Cert.png"
                            class="single_item link certificate col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <img src="/images/BSSN-Cert.png" alt="Certificate BSSN">
                        </a>
                        <!-- Item -->
                        <a href="/images/Kemenkes-Cert.png"
                            class="single_item link certificate col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <img src="/images/Kemenkes-Cert.png" alt="Certificate Kemenkes">
                        </a>
                        <!-- Item -->
                        <a href="/images/BSSN-compt-Cert (3).png"
                            class="single_item link certificate competition col-md-4 col-sm-6 wow fadeInUp"
                            data-wow-delay="0.6s">
                            <img src="/images/BSSN-compt-Cert (3).png" alt="Certificate Competitions BSSN">
                        </a>
                        <!-- Item -->
                        <a href="/images/BSSN-compt-Cert (1).png"
                            class="single_item link certificate competition col-md-4 col-sm-6 wow fadeInUp"
                            data-wow-delay="0.6s">
                            <img src="/images/BSSN-compt-Cert (1).png" alt="Certificate Competitions BSSN">
                        </a>
                        <!-- Item -->
                        <a href="/images/BSSN-compt-Cert (2).png"
                            class="single_item link certificate competition col-md-4 col-sm-6 wow fadeInUp"
                            data-wow-delay="0.6s">
                            <img src="/images/BSSN-compt-Cert (2).png" alt="Certificate Competitions BSSN">
                        </a>
                        <!-- Item -->
                        <a href="/images/D30561205403-C.jpg"
                            class="single_item link certificate competition col-md-4 col-sm-6 wow fadeInUp"
                            data-wow-delay="0.6s">
                            <img src="/images/D30561205403-C.jpg" alt="Certificate Competitions Tangerang Selatan">
                        </a>
                        <!-- Item -->
                        <a href="/images/Bali-Cert.png"
                            class="single_item link certificate competition col-md-4 col-sm-6 wow fadeInUp"
                            data-wow-delay="0.6s">
                            <img src="/images/Bali-Cert.png" alt="Certificate Competitions Bali">
                        </a>
                        <!-- Item -->
                        <a href="/images/CyberArmy-Cert.png"
                            class="single_item link certificate col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <img src="/images/CyberArmy-Cert.png" alt="Certificate Complete Cyber Army">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="isotope_items row">
                        <!-- Item -->
                        <a href="./images/Hall OF Frame - Pilot VVIP 3.png"
                            class="single_item link hall-of-frame competition col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <img src="./images/Hall OF Frame - Pilot VVIP 3.png" alt="Hall Of Frame Pilot VVIP">
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG -->
    <section class="blog" id="blog">
   <div class="container-fluid gray-bg">
      <div class="container">
         <div class="section-title">
             <h2>LATEST BLOGS</h2>
         </div>
      </div>
   </div>
   <div class="row row-cols-1 row-cols-md-4 g-4 ms-4 me-4 mb-5 container-post">
   <?php foreach ($data as $d) : ?>
      <div class="col-md-3 p-2 mb-3">
         <div class="card p-3 mb-2" style="border: 1px solid #a4a6a8; cursor: pointer;" data-id="<?= $d["id"]; ?>">
            <!-- Gambar -->
            <div class="d-flex justify-content-between mb-3">
               <div class="ratio ratio-16x9">
            <a href="./post/post.php?id=<?= $d["id"] ?>" style="text-decoration: none; color: inherit;">
                  <img src="./assets/img/post/<?= $d['thumbnail']; ?>" alt="<?= $d['thumbnail']; ?>" class="card-img-top img-fluid" style="border-radius: 10px 10px 0 0; object-fit: cover; width: 100%; height: 200px;" />
               </div>
            </div>
            <!-- Konten Teks -->
            <div class="ms-3 me-3">
                  <h5 class="heading mt-2"><?= htmlspecialchars($d['judul']); ?></h5>
               </a>
               <!-- Menampilkan tag -->
               <div class="tags">
                  <?php
              $tags = $d["tag"];
              $tag = explode(" ", $tags);
              foreach ($tag as $t) :
                ?>
              <span class="card-text tag mt-2"><i class="fa-solid fa-tag me-1"></i><?= htmlspecialchars($t); ?></span>
            <?php endforeach; ?>
               </div>
               <br>
               <!-- Tanggal -->
               <small class="text-muted" style="font-size: 0.8rem;"><?= timeAgo($d["tanggal_dibuat"]); ?></small><br>
            </div>
         </div>
      </div>
   <?php endforeach; ?>
</div>

</section>



    <footer>
        <div class="container">
            <div class="social">
                <a href="https://www.linkedin.com/in/rama-aryo-prambudi/" target="_blank"><i class="fa fa-linkedin"
                        aria-hidden="true"></i></a>
                <a href="https://github.com/ramaaryoprambudi" target="_blank"><i class="fa fa-github"
                        aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/ramaprambudii/" target="_blank"><i class="fa fa-instagram"
                        aria-hidden="true"></i></a>
            </div>
            <p>Copyright © 2024 Rama Aryo, All rights Reserved. <br />
                Design by Tavillathemes</p>
        </div>
    </footer>

    <!-- Javascripts -->
    <script src="./js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="./js/typed.js"></script>
    <script src="./js/jquery.magnific-popup.min.js"></script>
    <script src="./js/main.js"></script>




</body>

</html>