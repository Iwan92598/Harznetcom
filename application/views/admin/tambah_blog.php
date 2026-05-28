<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Blog</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- CKEditor 5 -->
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
</head>
<body class="bg-light py-4">

<div class="container">
  <div class="card">
    <div class="card-header"><h4>Tambah Artikel Blog</h4></div>
    <div class="card-body">
      <?php if ($this->input->get('success')): ?>
        <div class="alert alert-success">Berhasil menambahkan blog!</div>
      <?php endif; ?>
      <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <form method="post">
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="isi">Isi</label>
          <textarea name="isi" id="editor" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- CKEditor Init -->
<script>
  ClassicEditor
    .create(document.querySelector('#editor'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'underline', 'strikethrough', '|',
          'fontSize', 'fontColor', 'fontBackgroundColor', '|',
          'bulletedList', 'numberedList', 'blockQuote', '|',
          'alignment', 'outdent', 'indent', '|',
          'link', 'insertImage', 'insertTable', '|',
          'undo', 'redo'
        ]
      },
      language: 'id',
      image: {
        toolbar: ['imageTextAlternative', 'imageStyle:full', 'imageStyle:side']
      },
      table: {
        contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
      }
    })
    .catch(error => {
      console.error(error);
    });
</script>

</body>
</html>
