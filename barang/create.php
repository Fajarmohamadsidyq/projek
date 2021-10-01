<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Projek Fajar XII RPL 1</title>
</head>
<body style="background-color:aqua;">
    <fieldset>
        <legend>Input Data Barang</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th>Kode Barang</th>
                    <td><input type="text" name="kode_barang" required></td>
                </tr>
                <tr>
                    <th>harga</th>
                    <td><input type="number" name="harga" required></td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
