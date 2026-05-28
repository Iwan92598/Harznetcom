<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Kontak | Harznet</title>

  <!-- Google reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Bootstrap & AOS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    html, body {
      overflow-x: hidden;
    }

    .logo-box {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 16px;
      background-color: #fff;
      margin: 10px 0;
      transition: all 0.3s ease;
    }

    .logo-box:hover {
      box-shadow: 0 0 10px rgba(0,0,0,0.15);
      transform: scale(1.02);
    }

    .logo-img {
      max-height: 40px;
      object-fit: contain;
      width: auto;
      display: block;
      margin: 0 auto;
    }

    @media (max-width: 576px) {
      .logo-img {
        max-width: 100%;
      }

      #backToTop, .whatsapp-float {
        width: 45px !important;
        height: 45px !important;
        font-size: 18px !important;
        padding: 10px !important;
      }
    }
  </style>
</head>

<body>
<!-- WhatsApp Floating -->
<a href="https://wa.me/6281378888410" target="_blank"
   style="position: fixed; bottom: 70px; left: 30px; z-index: 1000; background-color: #25D366; color: white; border-radius: 50px; padding: 10px 16px; display: flex; align-items: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2); text-decoration: none; font-weight: 600; font-family: Arial, sans-serif; transition: background-color 0.3s ease;"
   onmouseover="this.style.backgroundColor='#1ebe57'"
   onmouseout="this.style.backgroundColor='#25D366'"
   title="Chat via WhatsApp">
  <img src="<?= base_url('assets/images/whatsapp.png') ?>" alt="WhatsApp" style="width: 28px; height: 28px; object-fit: contain; margin-right: 10px;">
  Hubungi Kami
</a>

<!-- Hubungi Kami Section -->
<section class="py-5 text-white" style="background-color: #001f3f;">
  <div class="container">
    <div class="row text-center mb-5" data-aos="fade-up">
      <div class="col-12">
        <h3 class="text-white mb-4">Layanan Pendukung Kami</h3>
      </div>
      <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4 justify-content-center">
        <?php
        $logos = ['apjii', 'komdigi', 'cbn', 'fiberstar', 'iforte', 'linknet', 'DCI', 'satria', 'hsp', 'telkom', 'lintasarta', 'indosat', 'fauzannet'];
        $delay = 0;
        foreach ($logos as $logo): ?>
          <div class="col d-flex align-items-stretch" data-aos="slide-up" data-aos-delay="<?= $delay ?>">
            <div class="logo-box w-100">
              <img src="<?= base_url('assets/images/' . $logo . '.png') ?>" alt="<?= $logo ?>" class="logo-img img-fluid">
            </div>
          </div>
          <?php $delay += 100; ?>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="row mt-5">
      <!-- Formulir Kontak -->
      <div class="col-md-6 mt-4 mb-4" data-aos="fade-right">
        <h2 class="mb-4 text-center">Hubungi Kami</h2>
        <form action="<?= base_url('kontak/kirim') ?>" method="post">
          <div class="form-group mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
          </div>
          <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group mb-3">
            <label for="pesan">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" placeholder="Pesan" rows="4" required></textarea>
          </div>

          <!-- Google reCAPTCHA -->
          <div class="form-group mb-3">
            <div class="g-recaptcha" data-sitekey="6Ld-WJYrAAAAAHzfFeUspwtUXjUqvtxcpm1l4E3s"></div>
          </div>

          <button type="submit" class="btn btn-light btn-block mt-2">Kirim Pesan</button>
        </form>
      </div>

      <!-- Informasi Kontak -->
      <div class="col-md-6 mt-4" data-aos="fade-left" id="kontak">
        <h2 class="mb-4 text-center">Informasi Kontak</h2>
        <p><strong>Alamat:</strong><br>
          Perumahan Green Simangu 3, Jl. Simangu, Blok B No 19, Kasugengan Lor, Kec. Depok, Kabupaten Cirebon, Jawa Barat 45155</p>
        <p><strong>Email:</strong> <a href="mailto:customer_service@harznet.com" class="text-white">customer_service@harznet.com</a></p>
        <p><strong>Telepon:</strong> <a href="https://wa.me/6281378888410" class="text-white">0813-7888-8410</a></p>

        <div class="mt-4">
          <h5>Lokasi Kami</h5>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.4829942171136!2d108.4603595!3d-6.7107563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee100222078b9%3A0x5b0df6e3196d7ccc!2sHarznet%20(Penyedia%20Internet%20Service%20Provider%20Cepat%20dan%20Terjangkau)!5e0!3m2!1sid!2sid!4v1752636188585!5m2!1sid!2sid"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="text-white text-center pt-2" style="background-color: #001f3f;">
  <div class="container">

    <!-- Jam Operasional -->
    <div class="py-3 mb-3 rounded" style="background-color: #002b5c;">
      <p class="mb-1 font-weight-bold">Jam Operasional</p>
      <p class="mb-1">Kantor (Senin - Sabtu): 08.00 WIB - 17.00 WIB</p>
      <p class="mb-0">Layanan Pelanggan: 24 Jam</p>
    </div>

  </div>

  <!-- Exitel Full Width Hitam & Justify -->
  <footer class="footer-black text-white text-center py-4">
  <div class="container">
    <small>&copy; <?= date('Y'); ?> All rights reserved. HARZNET powered by PT Cemerlang Internet Indonesia.</small>
  </div>
</footer>

<!-- Tombol Kembali ke Atas -->
<button id="backToTop" class="btn btn-primary rounded-circle shadow"
  title="Kembali ke Atas"
  style="position: fixed; bottom: 70px; right: 30px; display: none; z-index: 1000;
         width: 45px; height: 45px; font-size: 18px; padding: 10px;">
  ↑
</button>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ once: true, duration: 1000 });

  document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById("backToTop");

    if (btn) {
      window.addEventListener("scroll", function () {
        btn.style.display = window.scrollY > 200 ? "block" : "none";
      });

      btn.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    }
  });
</script>
</body>
</html>
