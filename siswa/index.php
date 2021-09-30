<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <nav>
            <a href="/dosen">Data barang</a> |
            <a href="/mahasiswa">Data Siswa</a>
        </nav>
    </center>
    <center>Data Siswa</center>
    <fieldset>
        <legend>Data Siswa</legend>
        <a href="create.php">Tambah Data Siswa</a>
        <table border="1">
            <tr>
                <th>ID Siswa</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Kode Barang</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$mahasiswa = new Siswa();
$no = 1;
// var_dump($mahasiswa->index());
foreach ($mahasiswa->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['id_siswa']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['kelas']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['kode_barang']; ?></td>

                    <td>
                        <a href="show.php?id=<?php echo $data['id_siswa']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id_siswa']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="/mahasiswa/proses.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id_siswa']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
    </fieldset>
</body>

</html>