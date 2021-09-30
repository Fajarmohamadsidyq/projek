<?php

include '../database.php';
$barang = new Barang();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $kode_barang = @$_POST['kode_barang'];
    $harga = $_POST['harga'];
    $nama = $_POST['nama'];

    if (aksi == "create") {
        $barang->create($kode_barang, $harga, $nama);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $barang->update($kode_barang, $harga, $nama);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $barang->delete($kode_barang);
        header("location:index.php");
    }

}
