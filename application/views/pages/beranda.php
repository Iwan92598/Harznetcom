<!-- Flashdata -->
<?php if ($this->session->flashdata('success')): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert" data-aos="fade-down">
    <?= $this->session->flashdata('success'); ?>
  </div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert" id="error-alert" data-aos="fade-down">
    <?= $this->session->flashdata('error'); ?>
  </div>
<?php endif; ?>

<!-- Script untuk otomatis hilang -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
  setTimeout(function () {
    const alertSuccess = document.getElementById('success-alert');
    const alertError = document.getElementById('error-alert');

    if (alertSuccess) {
      alertSuccess.style.transition = 'opacity 0.5s ease';
      alertSuccess.style.opacity = '0';
      setTimeout(() => alertSuccess.remove(), 500);
    }

    if (alertError) {
      alertError.style.transition = 'opacity 0.5s ease';
      alertError.style.opacity = '0';
      setTimeout(() => alertError.remove(), 500);
    }
  }, 3000);

  document.addEventListener('DOMContentLoaded', function () {
    new Splide('#image-carousel', {
      type      : 'loop',
      perPage   : 1,
      autoplay  : true,
      interval  : 4000,
      speed     : 800,
      arrows    : true,
      pagination: true,
      pauseOnHover: false,
    }).mount();
  });
</script>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda - Harznet</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <!-- Poppins Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
  </style>
</head>
<body>
<!-- SPLIDE IMAGE SLIDER -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

<section id="image-carousel" class="splide" aria-label="Beautiful Images">
  <div class="splide__track">
    <ul class="splide__list">
      <li class="splide__slide">
        <img src="<?= base_url('assets/images/banner/banner_harznet_new.png'); ?>" alt="Slide 1">
      </li>
      <li class="splide__slide">
        <img src="<?= base_url('assets/images/banner_harznet_2.png'); ?>" alt="Slide 2">
      </li>
      <li class="splide__slide">
        <img src="<?= base_url('assets/images/banner_harznet_3.png'); ?>" alt="Slide 3">
      </li>
    </ul>
  </div>
</section>

<style>
/* Batasi ukuran slider */
#image-carousel {
  margin: 0 auto;
  max-width: 100%;
}

/* Buat rasio 16:9 */
.splide__slide {
  position: relative;
  width: 100%;
  padding-top: 56.25%; /* Rasio 16:9 */
  overflow: hidden;
}

/* Gambar isi penuh container */
.splide__slide img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Hapus tinggi tetap jika ada */
.splide__track,
.splide__list {
  height: auto !important;
}
</style>


<!-- HERO SECTION -->
<section class="hero-section position-relative text-white overflow-hidden d-flex justify-content-center align-items-center" style="height: 100vh;">
  <!-- Gambar sebagai latar belakang -->
  <img src="<?= base_url('assets/images/banner.png'); ?>" class="hero-bg" alt="Banner">

  <!-- Gradasi blur atas dan bawah -->
  <div class="gradient-top"></div>
  <div class="gradient-bottom"></div>

  <!-- Konten di tengah -->
  <div class="text-center position-relative z-2">
    <h1 class="display-4 fw-bold">KONEKTIVITAS TANPA BATAS BERSAMA HARZNET</h1>
    <p class="lead">Solusi Internet cepat melesat, aman untuk rumah dan bisnis Anda</p>
    <a href="#layanan" class="btn btn-primary rounded-pill px-4 mt-3">Lihat Layanan Kami</a>
  </div>
</section>


<!-- CSS -->
<style>
.hero-section {
  background-color: #ffffff;
  position: relative;
}

.hero-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
}

.gradient-top, .gradient-bottom {
  position: absolute;
  width: 100%;
  height: 100px;
  z-index: 1;
  pointer-events: none;
}

.gradient-top {
  top: 0;
  background: linear-gradient(to bottom, #fff 0%, transparent 100%);
}

.gradient-bottom {
  bottom: 0;
  background: linear-gradient(to top, #fff 0%, transparent 100%);
}

.container {
  z-index: 2;
  position: relative;
}
</style>

<div class="position-relative" style="margin-top: -200px; margin-bottom: -200px; margin-right: -270px; text-align: right; z-index: 3;">
  <img src="<?= base_url('assets/images/teknologi2.png'); ?>"
       alt="Ilustrasi Penghubung"
       style="width: 400px; height: auto;">
</div>

<!-- TENTANG HARZNET -->
<section class="py-5 bg-light" id="tentang" style="font-family: 'Poppins', sans-serif;">
  <!-- Logo Harznet -->
    <div class="text-center mb-4">
      <img src="<?= base_url('assets/images/harznet.png'); ?>" 
           alt="Logo Harznet" 
           class="img-fluid shadow-sm"
           style="max-width: 200px;" 
           loading="lazy">
    </div>
  
  <div class="container" data-aos="fade-up">
    <div class="text-center mb-4">
      <h2 class="fw-bold text-dark">Tentang <span class="text-primary">HARZNET</span></h2>
      <p class="text-muted fs-5">Solusi internet modern dari PT Cemerlang Internet Indonesia</p>
      <hr class="w-25 mx-auto border-primary">
    </div>

    <!-- Konten -->
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <p class="fs-5 text-justify text-dark fw-semibold">
          <strong>Harznet</strong> adalah layanan internet unggulan dari <strong>PT Cemerlang Internet Indonesia</strong> yang berfokus pada koneksi internet berbasis fiber optic berkecepatan tinggi. Kami hadir untuk memenuhi kebutuhan digital masa kini, dari rumah hingga perusahaan besar, dengan dukungan teknis yang profesional dan layanan yang responsif.
        </p>

        <div class="row mt-4">
          <div class="col-sm-6">
            <ul class="list-unstyled mb-3">
              <li class="mb-2 fs-6 fw-bold text-dark">• Jaringan fiber optic uptime tinggi</li>
              <li class="mb-2 fs-6 fw-bold text-dark">• Stabil untuk streaming dan gaming</li>
              <li class="mb-2 fs-6 fw-bold text-dark">• Paket fleksibel rumah & kantor</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <ul class="list-unstyled mb-3">
              <li class="mb-2 fs-6 fw-bold text-dark">• Dukungan teknis 24/7</li>
              <li class="mb-2 fs-6 fw-bold text-dark">• IP Publik, Static IP & software</li>
              <li class="mb-2 fs-6 fw-bold text-dark">• Integrasi: CCTV, VOIP, Manage Service</li>
            </ul>
          </div>
        </div>

        <p class="fs-6 mt-4 text-justify fw-semibold text-dark">
          Kami percaya internet bukan hanya soal kecepatan, namun juga keandalan dan kualitas layanan. 
          <span class="text-primary">Dengan Harznet</span>, Anda mendapatkan kombinasi optimal antara 
          <strong>performa</strong>, <strong>pelayanan</strong>, dan <strong>teknologi terkini</strong> 
          untuk menjawab semua kebutuhan digital Anda.
        </p>
      </div>
    </div>
  </div>
</section>



<!-- PROMO SECTION -->
<section class="py-5 text-white text-center"
  style="background-color: #011640;" id="promo" data-aos="fade-up">
  <div class="container">
    <h2 class="fw-bold mb-3">🚀 Upgrade Kecepatan Internet Anda!</h2>
    <p class="lead fs-5">
      Kini paket HARZNET meningkat dari <strong class="text-warning">13 Mbps</strong> menjadi 
      <strong class="text-warning">41 Mbps</strong> tanpa biaya tambahan!  
      Nikmati koneksi lebih cepat dan stabil untuk semua aktivitas online Anda.
    </p>
    <a href="https://wa.me/6281378888410" 
       class="btn btn-light btn-lg mt-3 rounded-pill shadow px-4">
       Hubungi Kami Sekarang
    </a>
  </div>
</section>

<!-- LAYANAN -->
<section class="py-5 bg-white" id="layanan">
  <div class="container text-center">
    <h2 class="fw-bold mb-5" data-aos="fade-up">Layanan Kami</h2>
    <div class="row">
      <!-- Harznet Home -->
      <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="100">
        <div class="card h-100 border-0 shadow-lg">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <div class="mb-3"><i class="bi bi-house-door-fill fs-1 text-primary"></i></div>
              <h5 class="fw-bold">Harznet Home</h5>
              <p>Layanan internet rumah tangga yang menawarkan koneksi stabil, kecepatan tinggi, dan paket terjangkau.</p>
            </div>
            <a href="<?= site_url('layanan/home'); ?>" class="btn btn-outline-primary mt-3">Cek Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Corporate -->
      <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="200">
        <div class="card h-100 border-0 shadow-lg">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <div class="mb-3"><i class="bi bi-building fs-1 text-primary"></i></div>
              <h5 class="fw-bold">Corporate Bandwidth</h5>
              <p>Solusi konektivitas untuk perusahaan dengan SLA tinggi dan dukungan prioritas.</p>
            </div>
            <a href="<?= site_url('layanan/corporate'); ?>" class="btn btn-outline-primary mt-3">Cek Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Partner -->
      <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="300">
        <div class="card h-100 border-0 shadow-lg">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <div class="mb-3"><i class="bi bi-people-fill fs-1 text-primary"></i></div>
              <h5 class="fw-bold">Partner</h5>
              <p>Program kemitraan Harznet dengan pelatihan, dukungan promosi, dan komisi menarik.</p>
            </div>
            <a href="<?= site_url('layanan/partner'); ?>" class="btn btn-outline-primary mt-3">Cek Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Manage Service -->
      <div class="col-md-6 mb-4" data-aos="flip-left" data-aos-delay="400">
        <div class="card h-100 border-0 shadow-lg">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <div class="mb-3"><i class="bi bi-gear-wide-connected fs-1 text-primary"></i></div>
              <h5 class="fw-bold">Manage Service</h5>
              <p>Layanan pengelolaan jaringan internal, server, firewall untuk efisiensi bisnis Anda.</p>
            </div>
            <a href="<?= site_url('layanan/manage_service'); ?>" class="btn btn-outline-primary mt-3">Cek Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Software -->
      <div class="col-md-6 mb-4" data-aos="flip-left" data-aos-delay="500">
        <div class="card h-100 border-0 shadow-lg">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <div class="mb-3"><i class="bi bi-code-slash fs-1 text-primary"></i></div>
              <h5 class="fw-bold">Software Corporation</h5>
              <p>Pengembangan sistem ERP, CRM, web & mobile app untuk kebutuhan digitalisasi bisnis.</p>
            </div>
            <a href="<?= site_url('layanan/software'); ?>" class="btn btn-outline-primary mt-3">Cek Selengkapnya</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- KEUNGGULAN -->
<section class="py-5 bg-light" id="keunggulan">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold">Mengapa Harznet?</h2>
      <p class="text-muted">Keunggulan kami dibandingkan kompetitor</p>
    </div>
    <div class="row text-center">
      <div class="col-md-4 mb-4" data-aos="fade-right">
        <i class="bi bi-speedometer2 fs-1 text-primary mb-3"></i>
        <h5 class="fw-bold">Kecepatan</h5>
        <p>Internet cepat hingga 1 Gbps</p>
      </div>
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <i class="bi bi-headset fs-1 text-primary mb-3"></i>
        <h5 class="fw-bold">Dukungan 24/7</h5>
        <p>Tim support siap kapan saja</p>
      </div>
      <div class="col-md-4 mb-4" data-aos="fade-left">
        <i class="bi bi-shield-lock fs-1 text-primary mb-3"></i>
        <h5 class="fw-bold">Keamanan</h5>
        <p>Sistem jaringan aman dan terenkripsi</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONI -->
<section class="py-5 bg-white" id="testimoni" data-aos="zoom-in">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Apa Kata Mereka?</h2>
    <div class="carousel slide" id="carouselTesti" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <blockquote class="blockquote">
            <p>"Mantaap pelayanan harznet lgsg cusss"</p>
            <footer class="blockquote-footer">Nurman</footer>
          </blockquote>
        </div>
        <div class="carousel-item">
          <blockquote class="blockquote">
            <p>"Sinyalnya cepat banget. Buat Game dan streaming lancar!"</p>
            <footer class="blockquote-footer">Andi</footer>
          </blockquote>
        </div>
        <div class="carousel-item">
          <blockquote class="blockquote">
            <p>"Kami puas dengan layanan dan dukungan teknis Harznet."</p>
            <footer class="blockquote-footer">Bu Rini</footer>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({ duration: 1000, once: true });</script>
</body>
</html>
