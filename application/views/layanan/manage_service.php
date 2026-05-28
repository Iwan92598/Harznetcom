<!-- Load AOS & Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    once: true // Animasi hanya sekali saat scroll pertama
  });
</script>

<style>
  .text-justify-custom {
    text-align: justify;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.8;
  }
  /* Styling tombol WhatsApp */
  .btn-whatsapp {
    background-color: #25D366;
    color: white;
    font-weight: 600;
    padding: 12px 30px;
    font-size: 1.2rem;
    border-radius: 50px;
    box-shadow: 0 4px 10px rgba(37, 211, 102, 0.4);
    transition: background-color 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
  }
  .btn-whatsapp:hover {
    background-color: #1ebe57;
    color: #fff;
    text-decoration: none;
  }
</style>

<section class="py-5 bg-light" id="service">
  <div class="container">
    <div class="text-center mb-4" data-aos="fade-up">
      <h2 class="font-weight-bold" style="color: #003366">HARZNET MANAGE SERVICE</h2>
    </div>
    <p class="mb-5 text-justify-custom" data-aos="fade-up" data-aos-delay="100">
      Harznet Managed Service adalah layanan unggulan yang dirancang untuk memberikan dukungan penuh kepada pelanggan setelah proses penjualan (after-sales). Layanan ini mencakup pemantauan, pemeliharaan, dan pengelolaan infrastruktur jaringan secara proaktif untuk memastikan performa yang optimal dan mengurangi potensi gangguan. Dengan Harznet Managed Service, pelanggan tidak hanya mendapatkan solusi teknologi berkualitas, tetapi juga layanan purna jual yang andal, termasuk bantuan teknis, perbaikan, pembaruan sistem, serta konsultasi untuk pengembangan lebih lanjut. Kami juga berkomitmen untuk menjaga Service Level Agreement (SLA), sehingga waktu respons, waktu perbaikan, dan uptime layanan pelanggan tetap terjamin sesuai standar tertinggi. Komitmen kami adalah memastikan pelanggan merasa tenang dan fokus pada produktivitas, sementara kebutuhan jaringan mereka dikelola oleh tim profesional kami.
    </p>

    <h4 class="font-weight-bold mb-4 text-primary" data-aos="fade-up" data-aos-delay="150">
      <i class="bi bi-diagram-3"></i> BERIKUT RINCIAN PENERAPAN MANAGED SERVICE OLEH HARZNET:
    </h4>

    <div class="row">
      <!-- PEMANTAUAN DAN PENGELOLAAN PROAKTIF -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <h5 class="font-weight-bold"><i class="bi bi-bar-chart-line"></i> PEMANTAUAN DAN PENGELOLAAN PROAKTIF</h5>
        <ul>
          <li><strong>Network Monitoring Real-Time:</strong> Harznet menggunakan sistem pemantauan real-time untuk mendeteksi masalah seperti gangguan jaringan, penurunan performa, atau potensi downtime sebelum berdampak pada pelanggan.</li>
          <li><strong>Traffic Management:</strong> Lalu lintas data dikelola dengan cermat untuk memastikan distribusi bandwidth optimal tanpa bottleneck.</li>
          <li><strong>Alarm System:</strong> Sistem notifikasi otomatis memberi tahu tim teknis saat terjadi anomali jaringan.</li>
        </ul>
      </div>

      <!-- PEMELIHARAAN PREVENTIF DAN KOREKTIF -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="250">
        <h5 class="font-weight-bold"><i class="bi bi-tools"></i> PEMELIHARAAN PREVENTIF DAN KOREKTIF</h5>
        <ul>
          <li><strong>Pemeriksaan Rutin:</strong> Tim Harznet secara berkala memeriksa infrastruktur jaringan seperti kabel fiber optic, OLT, dan perangkat pendukung lainnya.</li>
          <li><strong>Perawatan Preventif:</strong> Membersihkan konektor optik dan melakukan pengujian performa menggunakan OTDR untuk menjaga kualitas sinyal.</li>
          <li><strong>Perbaikan Cepat:</strong> Harznet memiliki tim respons cepat untuk menangani masalah seperti kerusakan kabel atau perangkat dengan segera.</li>
        </ul>
      </div>

      <!-- PENGELOLAAN INFRASTRUKTUR -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
        <h5 class="font-weight-bold"><i class="bi bi-hdd-network"></i> PENGELOLAAN INFRASTRUKTUR</h5>
        <ul>
          <li><strong>Manajemen Aset:</strong> Semua perangkat keras seperti OLT, ONT, dan splitter dikelola dengan baik untuk memastikan keberlanjutan operasional.</li>
          <li><strong>Dokumentasi Topologi:</strong> Harznet menyimpan dokumentasi lengkap topologi jaringan untuk mempermudah troubleshooting dan pengembangan jaringan.</li>
          <li><strong>Perencanaan Kapasitas:</strong> Tim Harznet merancang kapasitas jaringan untuk mendukung pertumbuhan pelanggan dan permintaan bandwidth.</li>
        </ul>
      </div>

      <!-- KEAMANAN JARINGAN -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="350">
        <h5 class="font-weight-bold"><i class="bi bi-shield-lock"></i> KEAMANAN JARINGAN</h5>
        <ul>
          <li><strong>Firewall Protection:</strong> Jaringan dilindungi dengan firewall canggih untuk mencegah akses tidak sah.</li>
          <li><strong>Threat Detection:</strong> Harznet menerapkan sistem IDS/IPS untuk mendeteksi dan menghentikan serangan siber sebelum berdampak.</li>
          <li><strong>Data Encryption:</strong> Semua data pelanggan dienkripsi untuk menjaga kerahasiaan dan keamanan.</li>
        </ul>
      </div>

      <!-- KOMITMEN SLA -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
        <h5 class="font-weight-bold"><i class="bi bi-check2-circle"></i> KOMITMEN PADA SLA (SERVICE LEVEL AGREEMENT)</h5>
        <ul>
          <li><strong>Jaminan SLA:</strong> Harznet memastikan uptime jaringan tinggi, waktu respons cepat, dan perbaikan tepat waktu sesuai SLA.</li>
          <li><strong>Pelaporan Transparan:</strong> Pelanggan menerima laporan berkala tentang performa jaringan dan langkah-langkah pemeliharaan yang telah dilakukan.</li>
          <li><strong>Bantuan Teknis 24/7:</strong> Tim customer support Harznet siap membantu pelanggan kapan saja melalui hotline atau live chat.</li>
        </ul>
      </div>

      <!-- PENGELOLAAN PELANGGAN -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="450">
        <h5 class="font-weight-bold"><i class="bi bi-people"></i> PENGELOLAAN PELANGGAN</h5>
        <ul>
          <li><strong>Helpdesk System:</strong> Harznet menggunakan sistem tiket untuk memastikan setiap keluhan pelanggan ditangani dengan cepat dan efisien.</li>
          <li><strong>Pelatihan Pelanggan:</strong> Memberikan edukasi kepada pelanggan tentang penggunaan perangkat dan layanan internet secara optimal.</li>
          <li><strong>Solusi Kustom:</strong> Harznet menawarkan konfigurasi jaringan yang dapat disesuaikan dengan kebutuhan pelanggan, baik individu maupun bisnis.</li>
        </ul>
      </div>

      <!-- TEKNOLOGI PENDUKUNG -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
        <h5 class="font-weight-bold"><i class="bi bi-cpu"></i> TEKNOLOGI PENDUKUNG</h5>
        <ul>
          <li><strong>Automasi Jaringan:</strong> Harznet menerapkan perangkat lunak otomatisasi untuk pemantauan dan pengelolaan jaringan yang lebih efisien.</li>
          <li><strong>Analitik Berbasis AI:</strong> Sistem analitik AI membantu memprediksi masalah potensial dan merekomendasikan tindakan preventif.</li>
          <li><strong>Integrasi Cloud:</strong> Infrastruktur berbasis cloud memungkinkan tim teknis Harznet untuk mengelola jaringan secara fleksibel dari mana saja.</li>
        </ul>
      </div>

      <!-- PENGEMBANGAN DAN PENINGKATAN -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="550">
        <h5 class="font-weight-bold"><i class="bi bi-graph-up-arrow"></i> PENGEMBANGAN DAN PENINGKATAN</h5>
        <ul>
          <li><strong>Pembaruan Berkala:</strong> Harznet secara rutin meningkatkan perangkat keras dan lunak untuk mendukung teknologi terbaru.</li>
          <li><strong>Riset dan Inovasi:</strong> Harznet terus melakukan riset untuk meningkatkan kecepatan, efisiensi, dan keandalan layanan.</li>
          <li><strong>Feedback Pelanggan:</strong> Harznet secara aktif mendengarkan masukan pelanggan untuk terus meningkatkan kualitas layanan.</li>
        </ul>
      </div>
    </div>

    <!-- Tombol WhatsApp paling bawah dengan animasi fade-up -->
    <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="600">
      <a href="https://wa.me/6281378888410?text=Halo%2C%20saya%20tertarik%20dengan%20layanan%20Harznet%20Managed%20Service.%20Mohon%20info%20lebih%20lanjut." 
       target="_blank" 
       rel="noopener" 
       class="btn-whatsapp" 
       data-aos="fade-up" 
       data-aos-delay="200">
      <i class="bi bi-whatsapp" style="font-size: 1.5rem;"></i> Tertarik Hubungi Kami
    </a>
  </div>
</section>

  </div>
</section>
