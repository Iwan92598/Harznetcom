<!DOCTYPE html>
<html>
<head>
    <title>Upload Konten</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Upload Gambar</h2>

    <?php if (!empty($error)) echo '<div class="alert alert-danger">'.$error.'</div>'; ?>
    <?php if (!empty($success)) echo '<div class="alert alert-success">'.$success.'</div>'; ?>

    <form method="post" action="<?= site_url('upload/do_upload') ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label>Judul Gambar</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group mt-2">
            <label>Pilih Gambar</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Unggah</button>
    </form>

    <hr>
    <h3>Daftar Gambar</h3>
    <div class="row">
        <?php foreach ($uploads as $item): ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="<?= base_url('assets/uploads/'.$item->filename) ?>" class="card-img-top" alt="<?= $item->title ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item->title ?></h5>
                        <p class="card-text"><small><?= $item->uploaded_at ?></small></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
