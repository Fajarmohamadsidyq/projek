<?php
class Barang extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $databarang = mysqli_query($this->koneksi, "select * from barang");
        // var_dump($datadosen);
        return $databarang;
    }

    // Menambah Data
    public function create($harga, $nama_barang)
    {
        mysqli_query(
            $this->koneksi,
            "insert into barang values(null,'$harga','$nama_barang')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($kode_barang)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from barang where kode_barang='$kode_barang'"
        );
        return $databarang;
    }

    // Menampilkan data berdasarkan id
    public function edit($kode_barang)
    {
        $databarang = mysqli_query(
            $this->koneksi,
            "select * from barang where kode_barang='$kode_barang'"
        );
        return $databarang;
    }
    // mengupdate data berdasarkan id
    public function update($kode_barang, $harga, $nama_barang)
    {
        mysqli_query(
            $this->koneksi,
            "update barang set nama_barang='$nama_barang', harga='$harga' where kode_barang='$kode_barang'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($kode_barang)
    {
        mysqli_query($this->koneksi, "delete from barang where kode_barang='$kode_barang'");
    }
}
