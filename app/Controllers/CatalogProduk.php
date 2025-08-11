<?php

namespace App\Controllers;

use App\Models\ModelCatalogProduk;

class CatalogProduk extends BaseController
{
  protected $catalog;

  public function __construct()
  {
    $this->catalog = new ModelCatalogProduk();
  }

  public function index()
  {
    $data['catalog'] = $this->catalog->findAll();
    return view('catalog/index', $data);
  }
}
