<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
</head>

<body>
  <h1><?= $kategori ?></h1>
  <hr />
  <ul>
    <?php foreach ($barang as $b): ?>
      <li><?= $b ?></li>
    <?php endforeach; ?>
  </ul>

</body>

</html>