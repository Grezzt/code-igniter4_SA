<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCatalogProduk extends Model
{
  protected $table = "catalog_produk";
  protected $primaryKey = "id_produk";
  protected $returnType = "object";
  protected $useTimestamps = true;
  protected $allowedFields = ['id_produk', 'nama', 'brand'];
}
