<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-1n8g5c5z5c5z5c5z5c5z5c5z5c5z5c5z5c5z5c5z5c5z5c5z5c5z5c5z5c5z5" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3>Data Catalog Produk</h3>
      </div>
      <div class="card-body">
        <?php if (!empty(session()->getFlashdata('message'))) : ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('message') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>
        <a href="<?= base_url('catalog/create') ?>" class="btn btn-primary">Tambah Produk</a>
        <hr />
        <table class="table table-bordered">
          <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Brand</th>
            <th>Action</th>
          </tr>
          <?php
          $no = 1;
          foreach ($catalog as $row) {
          ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row->nama ?></td>
              <td><?= $row->brand ?></td>
              <td>
                <a title="Edit" href="<?= base_url('catalog/edit/' . $row->id_produk) ?>" class="btn btn-warning">Edit</a>
                <a title="Delete" href="<?= base_url('catalog/delete/' . $row->id_produk) ?>" class="btn btn-danger"
                  onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </table>
      </div>
    </div>
  </div>

</body>

</html>