<!DOCTYPE html>
<html>
<head>
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        .stat-card {
            border-radius: 1rem;
            box-shadow: 0 0.25rem 1rem rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<div class="container py-4">
    <h1 class="mb-4 text-center">Dashboard Admin</h1>

    <div class="row text-white">
        <div class="col-md-6 mb-4">
            <div class="card bg-primary stat-card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Total Pesan Masuk</h5>
                        <h2><?= $total_messages ?></h2>
                    </div>
                    <div><i class="bi bi-envelope" style="font-size:2rem;"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card bg-success stat-card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Jumlah Admin</h5>
                        <h2><?= $total_admin ?></h2>
                    </div>
                    <div><i class="bi bi-person" style="font-size:2rem;"></i></div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="mb-3">Pesan Terbaru</h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($messages)) : ?>
                <?php foreach (array_slice($messages, 0, 5) as $msg): ?>
                    <tr>
                        <td><?= $msg->name ?></td>
                        <td><?= $msg->email ?></td>
                        <td><?= $msg->message ?></td>
                        <td><?= $msg->created_at ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4" class="text-center">Belum ada pesan</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
