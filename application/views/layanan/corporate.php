<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
  #corporate {
    background-color: #f8f9fa;
    padding: 60px 15px;
  }

  #corporate .container {
    max-width: 960px;
  }

  #corporate h2,
  #corporate h4 {
    font-weight: 700;
    color: #222;
  }

  #corporate p {
    font-family: "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif;
    line-height: 1.8;
    color: #444;
    text-align: justify;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
  }

  @keyframes fadeSlideUp {
    0% {
      opacity: 0;
      transform: translateY(25px);
      filter: drop-shadow(0 0 0 transparent);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
      filter: drop-shadow(0 8px 15px rgba(0,0,0,0.1));
    }
  }

  #corporate > .container > * {
    opacity: 0;
    animation: fadeSlideUp 0.7s ease forwards;
  }

  #corporate > .container > h2 {
    animation-delay: 0.15s;
  }
  #corporate > .container > p {
    animation-delay: 0.35s;
  }
  #corporate > .container > .row:nth-child(3) {
    animation-delay: 0.55s;
  }
  #corporate > .container > .row:nth-child(4) {
    animation-delay: 0.75s;
  }

  #corporate table {
    width: 100%;
    opacity: 0;
    animation: fadeSlideUp 0.7s ease forwards;
    animation-delay: 1s;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    transition: box-shadow 0.3s ease;
  }

  #corporate table:hover {
    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
  }

  .table-bordered {
    border: 1px solid #ddd;
  }
  .table-striped tbody tr:nth-of-type(odd) {
    background-color: #f9f9f9;
  }
  .thead-dark th {
    background-color: #343a40;
    color: #fff;
    border-color: #454d55;
  }

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
  
  .table thead th {
  background-color: #003366; /* Ubah latar belakang */
  color: #ffffff; /* Ubah warna teks judul tabel */
  font-weight: bold;
  text-align: center;
}

</style>

<section class="py-5 bg-light" id="corporate">
  <div class="container text-center">
    <h2 class="mb-4 font-weight-bold" style="color: #003366">HARZNET CORPORATE BANDWIDTH</h2>
    <p>
      Harznet Corporate Bandwidth adalah layanan premium yang dirancang khusus untuk memenuhi kebutuhan koneksi internet berkecepatan tinggi dan berkinerja tinggi bagi perusahaan dan organisasi. Dengan teknologi canggih seperti Dense Wavelength Division Multiplexing (DWDM), layanan ini mampu menyediakan jalur data dengan kapasitas besar, latensi rendah, dan keandalan tinggi. Harznet Corporate Bandwidth mendukung berbagai kebutuhan bisnis, seperti konektivitas antar kantor, transfer data skala besar, aplikasi cloud, hingga layanan kritis yang membutuhkan koneksi yang stabil dan aman. Solusi ini memberikan fleksibilitas dan skalabilitas untuk pertumbuhan bisnis Anda.
    </p>

    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <h4 class="mb-3 text-left">Registration Cost (One Time Only)</h4>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Keterangan</th>
              <th>Qty</th>
              <th>Harga</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Registrasi, OTC (One Time Connection)</td>
              <td>1</td>
              <td>Rp 5.000.000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-md-6">
        <h4 class="mb-3 text-left">1. Paket Internet Innercity SOHO</h4>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Bandwidth</th>
              <th>Harga</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>1</td><td>25 Mbps</td><td>Rp 450.000</td></tr>
            <tr><td>2</td><td>50 Mbps</td><td>Rp 550.000</td></tr>
            <tr><td>3</td><td>100 Mbps</td><td>Rp 1.000.000</td></tr>
            <tr><td>4</td><td>150 Mbps</td><td>Rp 1.300.000</td></tr>
            <tr><td>5</td><td>200 Mbps</td><td>Rp 1.500.000</td></tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <h4 class="mb-3 text-left">2. Paket Internet Broadband + Metro</h4>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Bandwidth</th>
              <th>Harga</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>1</td><td>100 Mbps</td><td>Rp 2.000.000</td></tr>
            <tr><td>2</td><td>150 Mbps</td><td>Rp 3.000.000</td></tr>
            <tr><td>3</td><td>200 Mbps</td><td>Rp 4.000.000</td></tr>
            <tr><td>4</td><td>250 Mbps</td><td>Rp 4.375.000</td></tr>
            <tr><td>5</td><td>300 Mbps</td><td>Rp 5.250.000</td></tr>
            <tr><td>6</td><td>350 Mbps</td><td>Rp 6.125.000</td></tr>
            <tr><td>7</td><td>400 Mbps</td><td>Rp 7.000.000</td></tr>
            <tr><td>8</td><td>450 Mbps</td><td>Rp 7.200.000</td></tr>
            <tr><td>9</td><td>500 Mbps</td><td>Rp 8.000.000</td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="600">
      <a href="https://wa.me/6281378888410?text=Halo%2C%20saya%20tertarik%20dengan%20layanan%20Harznet%20Corporate%20Bandwidth.%20Mohon%20info%20lebih%20lanjut." 
         target="_blank" 
         rel="noopener" 
         class="btn-whatsapp" 
         data-aos="fade-up" 
         data-aos-delay="200">
        <i class="bi bi-whatsapp" style="font-size: 1.5rem;"></i> Tertarik Hubungi Kami
      </a>
    </div>
  </div>
</section>
