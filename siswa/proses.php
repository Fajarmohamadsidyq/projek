<?php
include '../database.php';
$mahasiswa = new Siswa();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id_siswa'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $kode_barang = $_POST['kode_barang'];

    if ($aksi == "create") {
        $mahasiswa->create($id, $nama, $kelas, $alamat, $kode_barang);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $mahasiswa->update($id, $nama, $kelas, $alamat, $kode_barang);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $mahasiswa->delete($id);
        header("location:index.php");
    }

}
