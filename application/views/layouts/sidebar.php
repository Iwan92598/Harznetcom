<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sidebar Informasi Terbaru</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      min-height: 100vh;
    }

    /* Konten utama */
    .main-content {
      flex: 1;
      padding: 20px;
    }

    /* Sidebar kanan */
    .sidebar-kanan {
      width: 300px;
      padding: 20px;
      background-color: #f9f9f9;
      border-left: 2px solid #ddd;
      position: fixed;
      right: 0;
      top: 0;
      bottom: 0;
      overflow-y: auto;
      box-shadow: -2px 0 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      z-index: 1000;
    }

    .sidebar-kanan h3 {
      font-size: 20px;
      margin-bottom: 15px;
      color: #333;
    }

    .sidebar-kanan .info-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .sidebar-kanan .info-list li {
      margin-bottom: 12px;
      font-size: 14px;
      color: #555;
    }

    /* Tombol toggle */
    .toggle-btn {
      position: fixed;
      top: 20px;
      right: 320px;
      background-color: #007bff;
      color: white;
      border: none;
      padding: 8px 12px;
      cursor: pointer;
      border-radius: 5px;
      z-index: 1100;
    }

    /* Jika sidebar disembunyikan */
    .sidebar-kanan.hide {
      transform: translateX(100%);
    }

    .toggle-btn.hide {
      right: 20px;
    }

    /* Responsif */
    @media (max-width: 768px) {
      .sidebar-kanan {
        width: 100%;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        border-left: none;
        box-shadow: none;
      }

      .toggle-btn {
        right: 20px;
      }
    }
  </style>
</head>
<body>

  <!-- Konten Utama -->
  <div class="main-content">
    <h1>Selamat Datang di Harznet</h1>
    <p>Ini adalah contoh halaman dengan sidebar informasi terbaru di sebelah kanan.</p>
  </div>

  <!-- Tombol Toggle Sidebar -->
  <button class="toggle-btn" onclick="toggleSidebar()">Sembunyikan Info</button>

  <!-- Sidebar Informasi Terbaru -->
<div class="sidebar">
  <h3>Informasi Terbaru</h3>
  <ul class="info-list">
    <li><strong>Promo Juli:</strong> Pasang internet hanya Rp300.000!</li>
    <li><strong>Update:</strong> Jangkauan Harznet kini mencakup 5 desa baru!</li>
    <li><strong>Pengumuman:</strong> Maintenance server 25 Juli 02.00–04.00 WIB.</li>
    <li><strong>Layanan Baru:</strong> IPTV Harznet kini tersedia!</li>
  </ul>
</div>



  <!-- Script untuk Toggle Sidebar -->
  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const button = document.querySelector('.toggle-btn');

      sidebar.classList.toggle('hide');

      if (sidebar.classList.contains('hide')) {
        button.textContent = 'Tampilkan Info';
        button.classList.add('hide');
      } else {
        button.textContent = 'Sembunyikan Info';
        button.classList.remove('hide');
      }
    }
  </script>

</body>
</html>
