<style>
  .fullpage-container {
    height: 63vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .text-justify-custom {
    text-align: justify;
    max-width: 1000px;
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

<!-- Harznet Software Corporation Section -->
<section class="py-5 bg-light" id="software">
  <div class="container text-center fullpage-container" data-aos="fade-up" data-aos-delay="100">
    <h2 class="mb-4 font-weight-bold" style="color: #003366">
      HARZNET SOFTWARE CORPORATION
    </h2>
    <p class="text-justify-custom px-2 px-md-5 mb-4">
      Harznet Software Corporation adalah layanan software house
      yang berfokus pada pengembangan solusi perangkat lunak
      inovatif untuk kebutuhan bisnis dan individu. Dengan tim ahli
      yang berpengalaman, Harznet Software Corporation
      menyediakan layanan mulai dari pembuatan aplikasi web dan
      mobile, pengembangan sistem enterprise, hingga integrasi
      teknologi terkini seperti AI dan IoT. Komitmen kami adalah
      memberikan produk berkualitas tinggi yang dirancang khusus
      untuk meningkatkan efisiensi, produktivitas, dan nilai bisnis
      pelanggan.
    </p>

    <!-- Tombol WhatsApp -->
    <a href="https://wa.me/6285771675368?text=Halo%2C%20saya%20tertarik%20dengan%20layanan%20Harznet%20Software%20Corporation.%20Mohon%20info%20lebih%20lanjut." 
       target="_blank" 
       rel="noopener" 
       class="btn-whatsapp" 
       data-aos="fade-up" 
       data-aos-delay="200">
      <i class="bi bi-whatsapp" style="font-size: 1.5rem;"></i> Tertarik Hubungi Kami
    </a>
  </div>
</section>

<!-- Pastikan Bootstrap Icons dan AOS sudah ter-load di halaman -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ once: true });
</script>
