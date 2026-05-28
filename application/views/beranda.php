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
</script>

<!-- Hero Section -->
<section class="pt-0 pb-0 bg-light position-relative" id="beranda">
  <div class="hero-section text-white d-flex align-items-center position-relative" 
    style="background: url('<?= base_url('assets/images/banner.png'); ?>') no-repeat center center; background-size: cover; height: 90vh;">
    <div class="overlay position-absolute w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>
    <div class="container text-center position-relative z-1" data-aos="zoom-in">
      <h1 class="display-4 fw-bold">Selamat Datang di HARZNET</h1>
      <p class="lead">Solusi Internet cepat melesat di Era Digitalisasi.</p>
      <a href="#layanan" class="btn btn-primary btn-lg mt-3">Lihat Layanan Kami</a>
    </div>
  </div>
</section>

<!-- Tentang Kami -->
<section class="py-5 bg-light" id="tentang">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="mb-3 fw-bold">Tentang <span class="text-primary">HARZNET</span></h2>
      <p class="lead text-muted">
        Penyedia layanan internet dan solusi digital yang siap mendukung kebutuhan personal, bisnis, dan enterprise Anda.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8" data-aos="fade-right" data-aos-delay="100">
        <p class="mb-4">
          <strong>Harznet</strong> adalah produk unggulan dari <strong>PT Cemerlang Internet Indonesia</strong> yang fokus menyediakan layanan internet berkualitas tinggi.
        </p>
        <p class="mb-4" data-aos="fade-up" data-aos-delay="200">
          Kami menawarkan layanan berikut:
        </p>
        <ul class="mb-4 ps-3">
          <li class="mb-2" data-aos="fade-left" data-aos-delay="100"><strong>Harznet Home</strong> – layanan internet broadband untuk rumah.</li>
          <li class="mb-2" data-aos="fade-left" data-aos-delay="200"><strong>Corporate Bandwidth</strong> – konektivitas stabil untuk bisnis.</li>
          <li class="mb-2" data-aos="fade-left" data-aos-delay="300"><strong>Partner</strong> – solusi kemitraan dan jaringan distribusi.</li>
          <li class="mb-2" data-aos="fade-left" data-aos-delay="400"><strong>Managed Service</strong> – pemantauan dan pengelolaan jaringan profesional.</li>
          <li data-aos="fade-left" data-aos-delay="500"><strong>Software Corporation</strong> – layanan pengembangan perangkat lunak sesuai kebutuhan.</li>
        </ul>
        <p data-aos="fade-up" data-aos-delay="600">
          Didukung jaringan <strong>fiber optic berkualitas tinggi</strong>, kami hadir untuk mendukung produktivitas Anda.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Layanan Kami -->
<section class="py-5 bg-white" id="layanan">
  <div class="container text-center">
    <h2 class="mb-5" data-aos="fade-up">Layanan Kami</h2>
    <div class="row">
      <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="100">
        <a href="<?= site_url('layanan/home'); ?>" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-lg border-0">
            <div class="card-body">
              <div class="mb-3"><i class="bi bi-house-door-fill fs-1 text-primary"></i></div>
              <h5 class="card-title fw-bold">Harznet Home</h5>
              <p class="card-text">Layanan internet cepat dan stabil untuk kebutuhan rumah tangga.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="200">
        <a href="<?= site_url('layanan/corporate'); ?>" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-lg border-0">
            <div class="card-body">
              <div class="mb-3"><i class="bi bi-building fs-1 text-primary"></i></div>
              <h5 class="card-title fw-bold">Corporate Bandwidth</h5>
              <p class="card-text">Solusi koneksi khusus perusahaan dengan kecepatan tinggi dan SLA.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="300">
        <a href="<?= site_url('layanan/partner'); ?>" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-lg border-0">
            <div class="card-body">
              <div class="mb-3"><i class="bi bi-people-fill fs-1 text-primary"></i></div>
              <h5 class="card-title fw-bold">Harznet Partner</h5>
              <p class="card-text">Kemitraan dan kolaborasi jaringan dengan mitra bisnis lokal.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 mb-4" data-aos="flip-up" data-aos-delay="400">
        <a href="<?= site_url('layanan/manage_service'); ?>" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-lg border-0">
            <div class="card-body">
              <div class="mb-3"><i class="bi bi-gear-wide-connected fs-1 text-primary"></i></div>
              <h5 class="card-title fw-bold">Manage Service</h5>
              <p class="card-text">Pengelolaan sistem jaringan, server, dan perangkat IT Anda.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 mb-4" data-aos="flip-up" data-aos-delay="500">
        <a href="<?= site_url('layanan/software'); ?>" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-lg border-0">
            <div class="card-body">
              <div class="mb-3"><i class="bi bi-code-slash fs-1 text-primary"></i></div>
              <h5 class="card-title fw-bold">Software Corporation</h5>
              <p class="card-text">Pengembangan software khusus sesuai kebutuhan bisnis.</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>