<?php
class Siswa extends Database
{
    // Menampilkan Semua Data
    public function index()
    {
        $datamahasiswa = mysqli_query($this->koneksi, "SELECT siswa.*, barang.nama_barang as nama_barang
                                    FROM siswa JOIN barang
                                    ON siswa.kode_barang = barang.kode_barang ORDER BY siswa.id_siswa DESC"
        );
        return $datamahasiswa;
    }

    // Menambah Data
    public function create($nama, $kelas, $alamat, $kode_barang)
    {
        mysqli_query(
            $this->koneksi,
            "insert into siswa values(null,'$nama','$kelas','$alamat', '$kode_barang')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id_siswa)
    {
        $datamahasiswa = mysqli_query(
            $this->koneksi,
            "SELECT siswa.*, barang.nama_barang as nama_barang
            FROM siswa JOIN barang
            ON siswa.kode_barang = barang.kode_barang where siswa.id_siswa='$id_siswa'"
        );
        return $datamahasiswa;
    }

    // Menampilkan data berdasarkan id
    public function edit($id_siswa)
    {
        $datamahasiswa = mysqli_query(
            $this->koneksi,
            "select * from siswa where id_siswa='$id_siswa'"
        );
        return $datamahasiswa;
    }
    // mengupdate data berdasarkan id
    public function update($id_siswa, $nama, $kelas, $alamat, $kode_barang)
    {
        mysqli_query(
            $this->koneksi,
            "update siswa set nama='$nama', alamat='$alamat', kelas='$kelas', 'kode_barang=$kode_barang' where id_siswa='$id_siswa'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id_siswa)
    {
        mysqli_query($this->koneksi, "delete from siswa where id_siswa='$id_siswa'");
    }
}
