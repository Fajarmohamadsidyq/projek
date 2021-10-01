<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Projek Fajar XII RPL 1</title>
</head>

<body>
    <center>
    <?php
include '../database.php';
$barang = new Barang();
foreach ($barang->show($_GET['kode_barang']) as $data) {
    $kode_barang = $data['kode_barang'];
    $harga = $data['harga'];
    $nama = $data['nama'];
}
?>
    <fieldset>
        <legend>Show Data Barang</legend>
        <table>
            <tr>
                <th>Kode Barang</th>
                <td><input type="number" name="kode_barang" value="<?php echo $kode_barang; ?>" readonly></td>
            </tr>
            <tr>
                <th>Harga Barang</th>
                <td><input type="number" name="harga" value="<?php echo $harga; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nama Barang</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
    </center>
</body>
</html>