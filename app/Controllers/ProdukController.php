<?php

namespace App\Controllers;

class ProdukController extends BaseController
{
  public function index(): string
  {
    return view('view_produk');
  }

  public function kategori(): string
  {
    return view('kategori/view_kategori');
  }

  public function get_kategori()
  {
    $data = [
      'title' => 'Daftar Barang',
      'kategori' => 'Kategori Barang Elektronik',
      'barang' => [
        'Samsung Galaxy S21',
        'Apple iPhone 13',
        'Google Pixel 6',
        'OnePlus 9',
        'Xiaomi Mi 11',
        'Samsung Galaxy Tab S7',
      ]
    ];
    return view('kategori/view_barang', $data);
  }
}
