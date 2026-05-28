<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Halaman Tidak Ditemukan</title>
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    .page_404_wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 90vh; /* Dikurangi agar tidak terlalu jauh */
      padding: 10px;
      background-color: #f8f9fa;
    }

    .page_404 {
      width: 100%;
      max-width: 600px;
      text-align: center;
      background-color: #fff;
      padding: 30px 20px; /* Dikurangi jaraknya */
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);

      opacity: 0;
      transform: translateY(20px);
      animation: fadeSlideUp 0.7s ease forwards;
      animation-delay: 0.2s;
    }

    @keyframes fadeSlideUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .four_zero_four_bg {
      background-image: url('https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif');
      background-position: center;
      background-repeat: no-repeat;
      background-size: contain;
      height: 180px; /* Diperkecil */
      margin-bottom: 10px;
    }

    .four_zero_four_bg h1 {
      font-size: 32px;
      color: #003366;
      font-weight: bold;
      margin-top: -10px;
      margin-bottom: 10px;
    }

    .contant_box_404 h3 {
      font-size: 22px;
      margin-bottom: 8px;
      color: #333;
    }

    .contant_box_404 p {
      font-size: 15px;
      color: #6c757d;
    }

    .link_404 {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 24px;
      background-color: #003366;
      color: #fff;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 500;
      transition: background 0.3s ease;
    }

    .link_404:hover {
      background-color: #001d3d;
      text-decoration: none;
    }

    /* Responsive */
    @media (max-width: 576px) {
      .page_404 {
        padding: 24px 16px;
      }

      .four_zero_four_bg {
        height: 160px;
      }

      .four_zero_four_bg h1 {
        font-size: 26px;
      }

      .contant_box_404 h3 {
        font-size: 18px;
      }

      .link_404 {
        width: 100%;
        padding: 12px;
        font-size: 15px;
      }
    }
  </style>
</head>
<body>
  <div class="page_404_wrapper">
    <section class="page_404">
      <div class="four_zero_four_bg">
        <h1>404 NOT FOUND</h1>
      </div>

      <div class="contant_box_404">
        <h3>Oops! Halaman tidak ditemukan</h3>
        <p>Halaman yang Anda tuju tidak tersedia atau telah dipindahkan.</p>
        <a href="<?= base_url(''); ?>" class="link_404">Kembali ke Beranda</a>
      </div>
    </section>
  </div>
</body>
</html>
