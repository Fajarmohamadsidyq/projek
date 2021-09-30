<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Projek Fajar XII RPL 1</title>
</head>

<body>
    <?php
include '../database.php';
$barang = new Barang();
foreach ($barang->edit($_GET['kode_barang']) as $data) {
    $kode_barang = $data['kode_barang'];
    $harga = $data['harga'];
    $nama = $data['nama'];
}
?>
    <fieldset>
        <legend>Edit Data Barang</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="kode_barang" value="<?php echo $kode_barang; ?>">
            <table>
                <tr>
                    <th>Harga Barang</th>
                    <td><input type="number" name="harga" value="<?php echo $harga; ?>" required></td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>