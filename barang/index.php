<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:aqua;">
    <center>
        <nav>
            <a href="/barang/index.php">Data Barang</a> |
            <a href="/siswa/index.php">Data Siswa</a>
        </nav>
    </center>
    <center>Data Barang</center>
    <center>
    <fieldset>
        <a href="create.php">Tambah barang</a>
        <table border="1">
            <tr>
                <th>Kode Barang</th>
                <th>Harga</th>
                <th>Nama Barang</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$barang = new Barang();
$no = 1;
// var_dump($dosen->index());
foreach ($barang->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                    <td><?php echo $data['nama_barang']; ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data['kode_barang']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['kode_barang']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="kode_barang" value="<?php echo $data['kode_barang']; ?>">
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
    </center>
</body>
</html>