<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Paud Al Hikmah</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar Start -->
      <nav
        class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
      >
        <a href="index.html" class="navbar-brand">
          <h1 class="m-0 text-primary">
            <i class="fa fa-book-reader me-3"></i>Paud Al-Hikmah
          </h1>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav mx-auto">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="gallery.html" class="nav-item nav-link">Gallery</a>
            <a href="ppdb.html" class="nav-item nav-link">PPDB</a>
            <a href="contact.html" class="nav-item nav-link">Contact Us</a>
          </div>
          <a
            href="login.php"
            class="btn btn-primary rounded-pill px-3 d-none d-lg-block"
            >Login<i class="fa fa-arrow-right ms-3"></i
          ></a>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Carousel Start -->
      <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
          <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-1.jpg" alt="" />
            <div
              class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
              style="background: rgba(0, 0, 0, 0.2)"
            >
              <div class="container">
                <div class="row justify-content-start">
                  <div class="col-10 col-lg-8">
                    <h1 class="display-2 text-white animated slideInDown mb-4">
                      Tempat Untuk Tumbuh Bahagia, Belajar Ceria, dan Berakhlak
                      Mulia!
                    </h1>
                    <p class="fs-5 fw-medium text-white mb-4 pb-2">
                      Di sinilah perjalanan awal buah hati Anda dimulai—dengan
                      cinta, nilai-nilai Islami, dan pembelajaran yang
                      menyenangkan. Kami hadir untuk menumbuhkan karakter,
                      kecerdasan, dan kemandirian anak sejak usia dini dalam
                      lingkungan yang hangat, aman, dan penuh kasih.
                    </p>
                    <a
                      href="ppdb.html"
                      class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft"
                      >Daftar Sekarang</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-2.jpg" alt="" />
            <div
              class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
              style="background: rgba(0, 0, 0, 0.2)"
            >
              <div class="container">
                <div class="row justify-content-start">
                  <div class="col-10 col-lg-8">
                    <h1 class="display-2 text-white animated slideInDown mb-4">
                      Mendidik dengan Cinta, Menanamkan Akhlak Mulia Sejak Dini
                    </h1>
                    <p class="fs-5 fw-medium text-white mb-4 pb-2">
                      "Bismillah, mari awali langkah kecil dengan nilai-nilai
                      besar. Di PAUD Al Hikmah, kami mendampingi buah hati Anda
                      tumbuh dalam iman, ilmu, dan amal shaleh."
                    </p>
                    <a
                      href="ppdb.html"
                      class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft"
                      >Daftar Sekarang</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel End -->

      <!-- Facilities Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div
            class="text-center mx-auto mb-5 wow fadeInUp"
            data-wow-delay="0.1s"
            style="max-width: 600px"
          >
            <h4 class="mb-3">Yayasan Al-Khoir Qolbi</h4>
            <h1 class="mb-3">Pendidikan Anak Usia Dini Al Hikmah</h1>
            <p>NOMOR IZIN : 421.1/1095/PLS-DISSIK/2008 || NPSN : 69825797</p>
          </div>
          <div class="row row-cols-auto" style="justify-content: center">
            <div class="col-lg-3 col-sm-8 wow fadeInUp" data-wow-delay="0.1s">
              <div class="facility-item">
                <div class="facility-icon fa-3x bg-primary">
                  <span class="bg-primary"></span>
                  <i class="bi bi-binoculars text-primary"></i>
                  <span class="bg-primary"></span>
                </div>
                <div class="facility-text bg-primary">
                  <h3 class="text-primary mb-3">Visi</h3>
                  <p class="mb-0">
                    Terwujudnya Anak - Anak Yang Cerdas, Sehat, Ceria, Dan
                    Berakhlak Mulia Serta Bertakwa
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-10 wow fadeInUp" data-wow-delay="0.3s">
              <div class="facility-item">
                <div class="facility-icon bg-success">
                  <span class="bg-success"></span>
                  <i class="bi bi-bullseye fa-3x text-success"></i>
                  <span class="bg-success"></span>
                </div>
                <div class="facility-text bg-success">
                  <h3 class="text-success mb-3">Misi</h3>
                  <p class="mb-0">
                    <b>1).</b> Memberikan Pengasuhan Layanan Pendidikan Yang
                    Sehat, Cerdas, Berakhlak Bagi Anak Usia Dini
                  </p>
                  <p class="mb-0">
                    <b>2).</b> Membentuk Karakter Dan Berkepribadian Serta
                    Kemandiri
                  </p>
                  <p class="mb-0">
                    <b>3).</b> Meningkatkan Kesadaran Dan Partisipasi Masyarakat
                    Terhadap Pelayanan Paud
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-8 wow fadeInUp" data-wow-delay="0.5s">
              <div class="facility-item">
                <div class="facility-icon bg-warning">
                  <span class="bg-warning"></span>
                  <i class="bi bi-lightbulb-fill fa-3x text-warning"></i>
                  <span class="bg-warning"></span>
                </div>
                <div class="facility-text bg-warning">
                  <h3 class="text-warning mb-3">Tujuan</h3>
                  <p class="mb-0">
                    Membentuk Anak Anak Yang Cerdas, Berkualitas, Berakhlak
                    Mulia Dan Berkembang Seusai Dengan Usianya
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Facilities End -->

      <!-- Kata Sambutan Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
              <h1 class="mb-4">Kata sambutan</h1>
              <p id="kataSambutan" class="short-text">
                Assalamu’alaikum Warahmatullahi Wabarakatuh, Selamat datang di
                website resmi PAUD Al Hikmah! Kami dengan senang hati
                mempersembahkan wadah ini sebagai sarana untuk berbagi informasi
                tentang pendidikan anak usia dini yang kami kelola. PAUD Al
                Hikmah selalu berkomitmen untuk menciptakan lingkungan yang
                penuh kasih sayang, aman, dan mendukung tumbuh kembang anak-anak
                dalam berbagai aspek.
                <span id="dots">...</span>
                <span id="more" style="display: none">
                  Assalamu’alaikum Warahmatullahi Wabarakatuh, Selamat datang di
                  website resmi PAUD Al Hikmah! Kami dengan senang hati
                  mempersembahkan wadah ini sebagai sarana untuk berbagi
                  informasi tentang pendidikan anak usia dini yang kami kelola.
                  PAUD Al Hikmah selalu berkomitmen untuk menciptakan lingkungan
                  yang penuh kasih sayang, aman, dan mendukung tumbuh kembang
                  anak-anak dalam berbagai aspek. Sebagai pendidik di PAUD Al
                  Hikmah, kami berusaha memberikan pembelajaran yang
                  menyenangkan, kreatif, dan interaktif, dengan pendekatan yang
                  berbasis pada nilai-nilai agama dan karakter. Kami percaya
                  bahwa setiap anak adalah anugerah yang memiliki potensi luar
                  biasa. Oleh karena itu, kami berupaya untuk mengoptimalkan
                  potensi tersebut melalui metode yang sesuai dengan tahap
                  perkembangan anak usia dini. Di PAUD Al Hikmah, kami tidak
                  hanya fokus pada aspek kognitif anak, tetapi juga pada
                  perkembangan emosional, sosial, dan spiritual mereka. Kami
                  berupaya menjadi mitra terbaik bagi orang tua dalam membentuk
                  generasi yang tidak hanya cerdas, tetapi juga berakhlak mulia,
                  mandiri, dan siap menghadapi tantangan masa depan. Kami
                  mengundang orang tua dan masyarakat untuk terus mendukung kami
                  dalam mewujudkan visi dan misi pendidikan ini. Melalui
                  kerjasama yang erat antara guru, orang tua, dan masyarakat,
                  kami yakin kita bisa menciptakan anak-anak yang cerdas,
                  kreatif, dan berbudi pekerti luhur. Terima kasih atas
                  kepercayaan yang diberikan kepada kami. Semoga Allah SWT
                  selalu memberikan kemudahan dan berkah bagi kita semua dalam
                  menjalankan amanah ini. Wassalamu’alaikum Warahmatullahi
                  Wabarakatuh.
                  <br /><br />
                  <strong>Guru-Guru PAUD Al Hikmah</strong>
                </span>
              </p>
              <button
                onclick="toggleText()"
                id="readMoreBtn"
                class="btn btn-link text-primary"
              >
                Read more
              </button>
            </div>
            <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
              <div class="row">
                <div class="col-12 text-center">
                  <img
                    class="img-fluid w-75 rounded-circle bg-light p-3"
                    src="img/teachers3.jpeg"
                    alt=""
                  />
                </div>
                <div class="col-6 text-start" style="margin-top: -150px">
                  <img
                    class="img-fluid w-100 rounded-circle bg-light p-3"
                    src="img/teachers2.jpeg"
                    alt=""
                  />
                </div>
                <div class="col-6 text-end" style="margin-top: -150px">
                  <img
                    class="img-fluid w-100 rounded-circle bg-light p-3"
                    src="img/teachers1.jpeg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="js/popUp.js"></script>
      <!-- Kata Sambutan End -->

      <!-- Call To Action Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="bg-light rounded">
            <div class="row g-0">
              <div
                class="col-lg-6 wow fadeIn"
                data-wow-delay="0.1s"
                style="min-height: 400px"
              >
                <div class="position-relative h-100">
                  <img
                    class="position-absolute w-100 h-100 rounded"
                    src="img/gallery.jpeg"
                    style="object-fit: cover"
                  />
                </div>
              </div>
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div
                  class="h-100 d-flex flex-column justify-content-center p-5"
                >
                  <h1 class="mb-4">Gallery</h1>
                  <p class="mb-4">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                    Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                    sit, sed stet lorem sit clita duo justo magna dolore erat
                    amet
                  </p>
                  <a class="btn btn-primary py-3 px-5" href="gallery.html"
                    >see more<i class="fa fa-arrow-right ms-2"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Call To Action End -->
      <!-- Classes Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div
            class="text-center mx-auto mb-5 wow fadeInUp"
            data-wow-delay="0.1s"
            style="max-width: 600px"
          >
            <h1 class="mb-3">School Classes</h1>
            <p>
              Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
              dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
              rebum vero dolor duo.
            </p>
          </div>
          <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="classes-item">
                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                  <img
                    class="img-fluid rounded-circle"
                    src="img/classes-1.jpg"
                    alt=""
                  />
                </div>
                <div class="bg-light rounded p-4 pt-5 mt-n5">
                  <a class="d-block text-center h3 mt-3 mb-4" href=""
                    >Class A (PG)</a
                  >
                  <div
                    class="d-flex align-items-center justify-content-between mb-4"
                  >
                    <div class="d-flex align-items-center">
                      <img
                        class="rounded-circle flex-shrink-0"
                        src="img/user.jpg"
                        alt=""
                        style="width: 45px; height: 45px"
                      />
                      <div class="ms-3">
                        <h6 class="text-primary mb-1">Riska Diana</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                  </div>
                  <div class="row g-1">
                    <div class="col-4">
                      <div class="border-top border-3 border-primary pt-2">
                        <h6 class="text-primary mb-1">Age:</h6>
                        <small>3-4 Years</small>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="border-top border-3 border-success pt-2">
                        <h6 class="text-success mb-1">Time:</h6>
                        <small>9-10 AM</small>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="border-top border-3 border-warning pt-2">
                        <h6 class="text-warning mb-1">Days:</h6>
                        <small>mon/wed/fri</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="classes-item">
                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                  <img
                    class="img-fluid rounded-circle"
                    src="img/classes-2.jpg"
                    alt=""
                  />
                </div>
                <div class="bg-light rounded p-4 pt-5 mt-n5">
                  <a class="d-block text-center h3 mt-3 mb-4" href=""
                    >Clas B (TK A)</a
                  >
                  <div
                    class="d-flex align-items-center justify-content-between mb-4"
                  >
                    <div class="d-flex align-items-center">
                      <img
                        class="rounded-circle flex-shrink-0"
                        src="img/user.jpg"
                        alt=""
                        style="width: 45px; height: 45px"
                      />
                      <div class="ms-3">
                        <h6 class="text-primary mb-1">
                          Nandika Lessa Salsa Bilah
                        </h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                  </div>
                  <div class="row g-1">
                    <div class="col-4">
                      <div class="border-top border-3 border-primary pt-2">
                        <h6 class="text-primary mb-1">Age:</h6>
                        <small>4-5 Years</small>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="border-top border-3 border-success pt-2">
                        <h6 class="text-success mb-1">Time:</h6>
                        <small>9-10 AM</small>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="border-top border-3 border-warning pt-2">
                        <h6 class="text-warning mb-1">Days:</h6>
                        <small>mon - fri</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="classes-item">
                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                  <img
                    class="img-fluid rounded-circle"
                    src="img/classes-3.jpg"
                    alt=""
                  />
                </div>
                <div class="bg-light rounded p-4 pt-5 mt-n5">
                  <a class="d-block text-center h3 mt-3 mb-4" href=""
                    >Class C (TK B)</a
                  >
                  <div
                    class="d-flex align-items-center justify-content-between mb-4"
                  >
                    <div class="d-flex align-items-center">
                      <img
                        class="rounded-circle flex-shrink-0"
                        src="img/user.jpg"
                        alt=""
                        style="width: 45px; height: 45px"
                      />
                      <div class="ms-3">
                        <h6 class="text-primary mb-1">Dwi Agusta</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                  </div>
                  <div class="row g-1">
                    <div class="col-4">
                      <div class="border-top border-3 border-primary pt-2">
                        <h6 class="text-primary mb-1">Age:</h6>
                        <small>5-6 Years</small>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="border-top border-3 border-success pt-2">
                        <h6 class="text-success mb-1">Time:</h6>
                        <small>9-10 AM</small>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="border-top border-3 border-warning pt-2">
                        <h6 class="text-warning mb-1">Days:</h6>
                        <small>mon - fri</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Classes End -->

      <!-- Footer Start -->
      <div
        class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h3 class="text-white mb-4">Get In Touch</h3>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York,
                USA
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>+012 345 67890
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>info@example.com
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h3 class="text-white mb-4">Quick Links</h3>
              <a class="btn btn-link text-white-50" href="">About Us</a>
              <a class="btn btn-link text-white-50" href="">Contact Us</a>
              <a class="btn btn-link text-white-50" href="">Our Services</a>
              <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
              <a class="btn btn-link text-white-50" href=""
                >Terms & Condition</a
              >
            </div>
            <div class="col-lg-3 col-md-6">
              <h3 class="text-white mb-4">Photo Gallery</h3>
              <div class="row g-2 pt-2">
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/classes-1.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/classes-2.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/classes-3.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/classes-4.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/classes-5.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/classes-6.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h3 class="text-white mb-4">Newsletter</h3>
              <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
              <div class="position-relative mx-auto" style="max-width: 400px">
                <input
                  class="form-control bg-transparent w-100 py-3 ps-4 pe-5"
                  type="text"
                  placeholder="Your email"
                />
                <button
                  type="button"
                  class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                >
                  SignUp
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Your Site Name</a>, All
                Right Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By
                <a class="border-bottom" href="https://htmlcodex.com"
                  >HTML Codex</a
                >
                <br />Distributed By:
                <a
                  class="border-bottom"
                  href="https://themewagon.com"
                  target="_blank"
                  >ThemeWagon</a
                >
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                  <a href="">Home</a>
                  <a href="">Cookies</a>
                  <a href="">Help</a>
                  <a href="">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
