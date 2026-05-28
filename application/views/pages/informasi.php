<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Brosur Harznet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }
    .page_brosur_wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
      background-color: #f8f9fa;
      flex-direction: column;
    }
    .brosur_box {
      width: 100%;
      max-width: 900px;
      text-align: center;
      background-color: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      opacity: 0;
      transform: translateY(30px);
      animation: fadeSlideUp 0.8s ease forwards;
      animation-delay: 0.3s;
    }
    @keyframes fadeSlideUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .brosur_image {
      width: 100%;
      max-height: 90vh;
      object-fit: contain;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      margin-bottom: 20px;
    }
    .back_home {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 25px;
      background-color: #003366;
      color: #ffffff;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s ease;
      border: 2px solid transparent;
    }
    .back_home:hover {
      background-color: #ffffff;
      color: #003366;
      border: 2px solid #003366;
    }
    .blog_section {
      text-align: left;
      margin-top: 50px;
    }
    .blog_section h3 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #003366;
    }
    .blog_section .btn {
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="container py-5">
  <div class="row">
    
    <!-- KOLOM KIRI: Brosur -->
    <div class="col-md-8 mb-4">
      <div class="p-3 bg-white shadow rounded">
        <img src="<?= base_url('assets/images/infomasi/brosurnew.png'); ?>" alt="Brosur Harznet 1" class="img-fluid mb-3 rounded">
        <img src="<?= base_url('assets/images/brosur2.png'); ?>" alt="Brosur Harznet 2" class="img-fluid mb-3 rounded">
        <a href="<?= base_url(); ?>" class="btn btn-primary">← Kembali ke Beranda</a>
      </div>
    </div>

    <!-- KOLOM KANAN: Blog / Informasi Terbaru -->
    <div class="col-md-4">
      <div class="p-3 bg-light border rounded shadow-sm">
        <h5 class="mb-3">Informasi Terbaru</h5>
        <?php if (!empty($blog_posts)): ?>
          <?php foreach ($blog_posts as $post): ?>
            <div class="mb-3">
              <h6 class="mb-1">
                <a href="<?= base_url('blog/baca/' . $post->slug); ?>"><?= $post->judul; ?></a>
              </h6>
              <small class="text-muted"><?= date('d M Y', strtotime($post->created_at)); ?></small>
              <p class="mb-1"><?= word_limiter(strip_tags($post->isi), 15); ?>...</p>
              <a href="<?= base_url('blog/baca/' . $post->slug); ?>" class="btn btn-sm btn-outline-primary">Baca</a>
            </div>
            <hr>
          <?php endforeach; ?>
        <?php else: ?>
          <p>Belum ada informasi tersedia.</p>
        <?php endif; ?>
      </div>
    </div>

  </div>
</div>

</body>
</html>
