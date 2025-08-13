<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3>Tambah data produk</h3>
      </div>
      <div class="card-body">
        <!-- error handling -->
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4>Periksa Entry Form</h4>
            </hr />
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>

        <!-- bagian form input -->
        <form action="<?= base_url('catalog/simpan') ?>" method="post">
          <?= csrf_field(); ?>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control"
              id="nama" placeholder="Masukkan nama produk" value="<?= old('nama') ?>">
          </div>
          <div class="form-group">
            <label for="brand">Brand</label>
            <select name="brand" class="form-control" id="brand">
              <option value="">Pilih Brand</option>
              <?php
              $brands = [
                'Apple',
                'Samsung',
                'Sony',
                'LG',
                'Xiaomi',
                'Huawei',
                'Oppo',
                'Vivo',
                'OnePlus',
                'Google',
                'Microsoft',
                'Dell',
                'HP',
                'Lenovo',
                'Asus',
                'Acer',
                'MSI',
                'Razer',
                'Alienware',
                'MacBook',
                'ThinkPad',
                'Surface',
                'Nintendo',
                'PlayStation',
                'Xbox',
                'Canon',
                'Nikon',
                'Fujifilm',
                'Bose',
                'JBL',
                'Sennheiser',
                'Audio-Technica',
                'Beats',
                'AirPods',
                'Logitech',
                'Corsair',
                'SteelSeries',
                'HyperX',
                'Cooler Master',
                'Intel',
                'AMD',
                'NVIDIA',
                'Western Digital',
                'Seagate',
                'Kingston',
                'Sandisk',
                'Crucial',
                'G.Skill',
                'Corsair Memory'
              ];

              foreach ($brands as $brand) : ?>
                <option value="<?= $brand ?>" <?= old('jenis_kelamin') == $brand ? 'selected' : '' ?>>
                  <?= $brand ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Simpan">
          </div>

        </form>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>