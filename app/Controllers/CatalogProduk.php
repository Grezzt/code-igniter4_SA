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

  public function cari()
  {
    $cari = $this->request->getGet('keyword');
    $data['catalog'] = $this->catalog->like('nama', $cari)->findAll();
    return view('catalog/index', $data);
  }

  public function create()
  {
    return view('catalog/create');
  }

  public function simpan()
  {
    // fungsi untuk menyimpan data produk
  }

  public function edit($id)
  {
    // fungsi view edit page
  }

  public function update($id)
  {
    // fungsi untuk mengupdate data produk
  }

  // Method untuk delete
  public function delete($id)
  {
    // fungsi untuk menghapus data produk
  }
}
