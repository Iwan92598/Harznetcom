<?php
$siteKey   = "6LdxN7srAAAAAL_K_eQPGUa6UxlXhG93_zQ9J3ZK";
$secretKey = "6LdxN7srAAAAAEQXpVlricZIfCeq2MZkLAxUBagz";

$verified = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $responseKey = $_POST['g-recaptcha-response'] ?? '';
    $userIP      = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
    $response = file_get_contents($url);
    $response = json_decode($response);

    if ($response && $response->success) {
        $verified = true;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuesioner Pelanggan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
    iframe { width: 100%; min-height: 100vh; height: 2500px; border: none; }
    #successMsg { background: #d1e7dd; color: #0f5132; padding: 10px; border-radius: 6px; margin-bottom: 15px; }
  </style>
</head>
<body class="bg-light">
  <section class="container py-5">
    <div class="text-center mb-4">
      <h2 class="fw-bold text-primary">Kuesioner Kepuasan Pelanggan HARZNET</h2>
      <p class="text-muted">Silakan isi kuesioner berikut untuk membantu kami meningkatkan layanan.</p>
    </div>

    <div class="shadow-lg p-4 bg-white rounded text-center">
      <?php if (!$verified): ?>
        <p>Verifikasi terlebih dahulu sebelum mengakses form kuesioner:</p>
        <form id="captchaForm" method="POST">
          <div class="g-recaptcha d-inline-block"
               data-sitekey="<?= $siteKey ?>"
               data-callback="onSubmitCaptcha"></div>
        </form>
        <script>
          function onSubmitCaptcha() {
            document.getElementById("captchaForm").submit();
          }
        </script>
      <?php else: ?>
        <div id="successMsg">✅ Verifikasi berhasil! Silakan isi form berikut ini...</div>
        <iframe id="formFrame" style="display:none;"
          src="https://docs.google.com/forms/d/e/1FAIpQLSdx18YH3xQi-P9ZxUFTRaPzxlb083mMhZI27ODEnYqFVcHkEg/viewform?embedded=true">
        </iframe>
        <div class="mt-4" id="btnBeranda" style="display:none;">
          <a href="https://harznet.com" class="btn btn-primary">⬅️ Kembali ke Beranda</a>
        </div>
        <script>
          // Tampilkan form setelah 3 detik
          setTimeout(() => {
            document.getElementById("successMsg").style.display = "none";
            document.getElementById("formFrame").style.display = "block";
            document.getElementById("btnBeranda").style.display = "block";
          }, 3000);
        </script>
      <?php endif; ?>
    </div>
  </section>
</body>
</html>
