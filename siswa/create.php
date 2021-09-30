<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>
<?php
include '../database.php';
$mahasiswa = new Siswa();
?>
<body>
    <fieldset>
        <legend>Input Data Siswa</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th>Id Siswa</th>
                    <td><input type="number" name="id_siswa" required></td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td><input type="text" name="kelas"></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <th>Kode Barang</th>
                    <td>
                        <select name="kode_barang">
                            <?php
foreach ($barang->index() as $data) {?>
                                <option value="<?php echo $data['kode_barang']; ?>"><?php echo $data['nama']; ?></option>
                            <?php }?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        <input type="submit" name="save" value="Input">
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>