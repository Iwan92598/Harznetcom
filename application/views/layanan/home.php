<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>HARZNET HOME</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <style>
    .text-justify-custom {
      text-align: justify;
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
      line-height: 1.8;
    }

    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .btn-custom-whatsapp {
      background-color: #003366;
      color: #ffffff;
      font-weight: 600;
      border: 2px solid #003366;
      border-radius: 50px;
      padding: 12px 28px;
      font-size: 16px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 10px rgba(0, 51, 102, 0.3);
    }

    .btn-custom-whatsapp:hover {
      background-color: #ffffff;
      color: #003366;
      border-color: #003366;
      box-shadow: 0 6px 16px rgba(0, 51, 102, 0.5);
    }
  </style>
</head>
<body>

<!-- HARZNET HOME SECTION -->
<section class="py-5 bg-light" id="home">
  <div class="container text-center">
    <h2 class="mb-4 font-weight-bold fade-in" style="color: #003366" data-delay="0">HARZNET HOME</h2>
    <p class="text-justify-custom px-2 px-md-5 mb-4 fade-in" data-delay="200">
      <strong style="color: #003366;">Harznet Home</strong> adalah <strong style="color: #003366;">solusi internet keluarga modern</strong> yang menghadirkan koneksi cepat, stabil, dan tanpa gangguan langsung ke rumah Anda. Dengan dukungan teknologi <em>Fiber To The Home (FTTH)</em>, layanan ini dirancang untuk memenuhi kebutuhan digital seluruh anggota keluarga seperti streaming film, bermain game online, belajar daring, hingga bekerja dari rumah. Nikmati <strong style="color: #003366;">biaya bulanan flat yang terjangkau</strong> tanpa biaya tambahan, <strong style="color: #003366;">perangkat disewakan</strong>, dan jika terjadi kerusakan, Anda <strong style="color: #003366;">tidak perlu mengeluarkan biaya perbaikan</strong>. Harznet Home, internet pintar dan praktis untuk keluarga cerdas yang ingin tetap terhubung tanpa repot.
    </p>

    <!-- Banner Biaya Pemasangan -->
    <div class="alert alert-primary border-left border-4 shadow-sm fade-in mb-5" role="alert" style="max-width: 700px; margin: 0 auto;" data-delay="300">
      <i class="fas fa-tools mr-2"></i> 
      <strong>Biaya pemasangan hanya <span style="color: #031271;">Rp 300.000</span></strong> untuk semua paket Harznet Home. Harga terjangkau, koneksi luar biasa!
    </div>

    <div class="row">
      <?php
      $pakets = [
        [
          'title' => 'Harznet Home',
          'speed' => 'Up to 41 Mbps',
          'price' => 'Rp. 140.000 / bulan',
          'fitur' => [
            '2 - 4 Perangkat',
            'Browsing, Media Sosial, Streaming Video Standar',
            'Terbatas pada 1 Perangkat (HD Streaming, Gaming)'
          ]
        ],
        [
          'title' => 'Harznet Speed',
          'speed' => 'Up to 53 Mbps',
          'price' => 'Rp. 195.000 / bulan',
          'fitur' => [
            '4 - 6 Perangkat',
            'Streaming HD, Browsing, Video call',
            'Lindungi banyak perangkat untuk streaming 4K, gaming intensif'
          ]
        ],
        [
          'title' => 'Harznet Velocity',
          'speed' => 'Up to 63 Mbps',
          'price' => 'Rp. 225.000 / bulan',
          'fitur' => [
            '6 - 10 Perangkat',
            'Rumah tangga besar, Kantor kecil',
            'Streaming 4k, Video call, gaming online pada beberapa perangkat'
          ]
        ],
        [
          'title' => 'Harznet Hyper',
          'speed' => 'Up to 100 Mbps',
          'price' => 'Rp. 350.000 / bulan',
          'fitur' => [
            '10 - 15 Perangkat',
            'Keluarga besar, Kantor dengan banyak perangkat',
            'Streaming 4K, Bekerja dari rumah, Perangkat smart home'
          ]
        ],
      ];
      $delay = 400;
      foreach ($pakets as $index => $paket): 
        $delayNow = $delay + $index * 200;
        $pesan = urlencode("Halo, saya tertarik dengan paket {$paket['title']} dengan kecepatan {$paket['speed']}. Mohon informasi lebih lanjut.");
        $wa_link = "https://wa.me/6281378888410?text={$pesan}";
      ?>
        <div class="col-md-6 mb-4 fade-in" data-delay="<?= $delayNow ?>">
          <div class="card h-100 shadow border-0">
            <div class="card-body">
              <h5 class="card-title font-weight-bold" style="color: #003366"><?= $paket['title'] ?></h5>
              <div class="mb-3" style="display: flex; align-items: center; justify-content: center; gap: 6px; color: #031271; font-size: 16px;">
                  <i class="fas fa-tachometer-alt text-primary"></i>
                  <span style="font-weight: 500;">Speed Up to</span>
                  <span style="font-weight: bold; font-size: 18px;"><?= str_replace('Up to ', '', $paket['speed']) ?></span>
              </div>
              <ul class="list-unstyled mb-3">
                <?php foreach ($paket['fitur'] as $fitur): ?>
                  <li><i class="fas fa-check-circle text-success mr-2"></i><?= $fitur ?></li>
                <?php endforeach; ?>
              </ul>
              <h4 style="color: #003366;" ><?= $paket['price'] ?></h4>
              <a href="<?= $wa_link ?>" target="_blank" class="btn btn-custom-whatsapp mt-3 px-4">
                <i class="fab fa-whatsapp mr-2"></i>Daftar Sekarang
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
  function checkFadeIn() {
    const elements = document.querySelectorAll('.fade-in');
    const windowHeight = window.innerHeight;

    elements.forEach(el => {
      const rect = el.getBoundingClientRect();
      const delay = parseInt(el.getAttribute('data-delay')) || 0;

      if (rect.top < windowHeight - 100) {
        setTimeout(() => {
          el.classList.add('visible');
        }, delay);
      }
    });
  }

  window.addEventListener('scroll', checkFadeIn);
  window.addEventListener('load', checkFadeIn);
</script>

</body>
</html>
