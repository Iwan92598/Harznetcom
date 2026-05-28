<link rel="icon" type="image/png" href="/favicon_32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon_16x16.png" sizes="16x16">
<link rel="icon" type="image/x-icon" href="/favicon.ico">

<html>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mt-0 mb-0" style="border-bottom: 3px solid #004080;">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url(); ?>" style="padding: 0 !important;">
        <img src="<?= base_url('assets/images/harznet.png'); ?>" alt="Harznet Logo" style="height: 55px; display: block; padding-top: 5px; padding-bottom: 5px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHarznet">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarHarznet">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="<?= base_url(''); ?>">Beranda</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" data-toggle="dropdown">Layanan Kami</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?= base_url('layanan/home') ?>">Harznet Home</a>
              <a class="dropdown-item" href="<?= base_url('layanan/corporate'); ?>">Corporate Bandwidth</a>
              <a class="dropdown-item" href="<?= base_url('layanan/partner'); ?>">Partner</a>
              <a class="dropdown-item" href="<?= base_url('layanan/manage_service'); ?>">Manage Service</a>
              <a class="dropdown-item" href="<?= base_url('layanan/software'); ?>">Software Corporation</a>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('index/tentang'); ?>">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('index/informasi'); ?>">Informasi</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('index/Kuesioner'); ?>">Kuesioner</a></li>
          <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
          
          <!-- Tombol Login -->
          <li class="nav-item">
            <a 
              class="btn ml-lg-3 mt-2 mt-lg-0" 
              href="<?= base_url('auth/login'); ?>" 
              style="background-color: #007bff; color: white; border: 1px solid #007bff;" 
              onmouseover="this.style.backgroundColor='transparent'; this.style.color='#007bff';" 
              onmouseout="this.style.backgroundColor='#007bff'; this.style.color='white';"
            >
              Login
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</html>
