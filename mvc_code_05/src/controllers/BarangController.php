<?php

class BarangController extends BaseController {

  private $barangModel;
  public function __construct() {
    $this->barangModel = $this->model('BarangModel');
  }

  public function index() {
    $data = [
      'title' => 'Barang',
      'AllBarang' => $this->barangModel->getAll()
    ];
    $this->view('template/header', $data);
    $this->view('barang/index', $data);
    $this->view('template/footer');
  }
  
  public function insert() {
    $data = [
      'title' => 'Barang'
    ];
    $this->view('template/header', $data);
    $this->view('barang/insert');
    $this->view('template/footer');
  }

  public function insert_barang() {
    $fields = [
      'nama_barang' => 'string | required | alphanumeric', // | between:3, 25
      'jumlah' => 'int | required',
      'harga_satuan' => 'float | required',
      'kadaluarsa' => 'string'
    ];
    $message = [
      'nama_barang' => [
        'required' => 'Nama barang harus diisi',
        'alphanumeric' => 'Nama barang hanya boleh huruf dan angka',
        'between' => 'Nama barang harus diantara 3 - 25 karakter'
      ],
      'jumlah' => [
        'required' => 'Jumlah barang harus diisi'
      ],
      'harga_satuan' => [
        'required' => 'Harga satuan barang harus diisi',
      ]
    ];
    [$inputs, $errors] = $this->filter($_POST, $fields, $message);
    echo '<pre>';
    var_dump($errors);
    echo '</pre>';
  }
}