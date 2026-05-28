<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel - Harznet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    .navbar-nav .nav-link {
      color: white !important;
      font-weight: 500;
      padding: 8px 14px;
    }

    .navbar-nav .nav-link:hover,
    .dropdown-menu .dropdown-item:hover {
      background-color: rgba(255, 255, 255, 0.15);
      border-radius: 4px;
    }

    .nav-item .logout {
      background-color: #dc3545;
      color: white !important;
      font-weight: bold;
      padding: 4px 7px;
      border-radius: 4px;
    }

    .nav-item .logout:hover {
      background-color: #c82333;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand font-weight-bold" href="<?= base_url('admin'); ?>">Admin Panel</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">Monitoring</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/tambah_blog'); ?>">Upload Blog</a>
      </li>
      <!-- Dropdown Report Progress -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarReport" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Report Progress
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarReport">
          <a class="dropdown-item" href="<?= base_url('admin/report/awal_pemasangan'); ?>">Awal Pemasangan</a>
          <a class="dropdown-item" href="<?= base_url('admin/report/akhir_pemasangan'); ?>">Akhir Pemasangan</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('admin/report/awal_perbaikan'); ?>">Awal Perbaikan</a>
          <a class="dropdown-item" href="<?= base_url('admin/report/akhir_perbaikan'); ?>">Akhir Perbaikan</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/profile'); ?>">Profil Akun</a>
      </li>
      <li class="nav-item">
        <a class="nav-link logout" href="<?= base_url('auth/logout'); ?>">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<!-- jQuery dan Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script agar menu tertutup setelah diklik (kecuali dropdown) -->
<script>
  $(document).ready(function () {
    // Tutup menu navbar setelah klik (kecuali dropdown-toggle)
    $('.navbar-nav .nav-link').not('.dropdown-toggle').on('click', function () {
      $('.navbar-collapse').collapse('hide');
    });
  });
</script>

</body>
</html>
