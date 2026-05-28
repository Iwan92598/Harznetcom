<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Monitoring</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f0f2f5;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      transition: transform 0.2s;
    }

    .card:hover {
      transform: translateY(-3px);
    }

    .card-header {
      font-weight: 600;
      font-size: 1rem;
      border-bottom: 1px solid rgba(255,255,255,0.15);
    }

    .card-title {
      font-size: 1.2rem;
      font-weight: 500;
    }

    h3 {
      font-weight: bold;
      color: #333;
      margin-bottom: 1.5rem;
    }

    .chat-box {
      background: #ffffff;
      border-radius: 10px;
      padding: 15px;
      height: 300px;
      overflow-y: auto;
      border: 1px solid #dee2e6;
    }

    .chat-box p {
      margin-bottom: 0.8rem;
    }

    .chat-input {
      margin-top: 10px;
    }
  </style>
</head>
<body>

<?php if ($this->session->flashdata('pesan')): ?>
    <?= $this->session->flashdata('pesan'); ?>
<?php endif; ?>

<div class="container py-4">
  <h3 class="text-center">Dashboard Monitoring Harznet</h3>

  <!-- Monitoring Jaringan -->
  <div class="row mb-4">
    <div class="col-md-4">
      <div class="card text-white bg-success mb-3">
        <div class="card-header">Perangkat Aktif</div>
        <div class="card-body">
          <h5 class="card-title">12 Perangkat Online</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-white bg-danger mb-3">
        <div class="card-header">Gangguan</div>
        <div class="card-body">
          <h5 class="card-title">2 Lokasi Gangguan</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-white bg-info mb-3">
        <div class="card-header">Bandwidth</div>
        <div class="card-body">
          <h5 class="card-title">65 Mbps digunakan</h5>
        </div>
      </div>
    </div>
  </div>

  <!-- Report Aktivitas & Live Chat -->
  <div class="row">
    <!-- Report -->
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-header bg-primary text-white">Report Aktivitas</div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">08:00 - Perangkat A aktif</li>
            <li class="list-group-item">08:45 - Gangguan di lokasi B</li>
            <li class="list-group-item">09:30 - Perangkat C disconnect</li>
            <li class="list-group-item">10:15 - Bandwidth naik 5%</li>
            <li class="list-group-item">11:00 - Lokasi A kembali normal</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Live Chat -->
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-header bg-warning text-dark">Live Chat (Simulasi)</div>
        <div class="card-body">
          <div class="chat-box">
            <p><strong>Admin:</strong> Selamat pagi! Ada yang bisa dibantu?</p>
            <p><strong>Teknisi:</strong> Lokasi C ada gangguan ringan, pak.</p>
            <p><strong>Admin:</strong> Baik, segera saya cek log-nya.</p>
          </div>
          <input type="text" class="form-control chat-input" placeholder="Ketik pesan... (simulasi)">
        </div>
      </div>
    </div>
  </div>
</div>

</body>

<script>
  // Hilangkan alert setelah 3 detik (3000 ms)
  $(document).ready(function () {
    setTimeout(function () {
      $(".alert").alert('close');
    }, 3000); // Ubah waktu sesuai kebutuhan
  });
</script>


</html>
