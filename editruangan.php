<?php

$nama = $_GET['nama'];
include "koneksi.php";
$qry = "SELECT * FROM formruangan WHERE nama = '$nama'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ruangan</title>
</head>
<body>
<form action="prosesruangan.php" method="POST">
        <fieldset>
            <legend>Form Edit data mahasiswa</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>Nama Ruangan</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $data['nama'] ?>"></td>
                </tr>
                <tr>
                    <td>Kode Ruangan</td>
                    <td>:</td>
                    <td><input type="text" name="kode" value="<?= $data['kode'] ?>"></td>
                </tr>
                <tr>
                    <td>Lantai Ruangan</td>
                    <td>:</td>
                    <td><input type="text" name="lantai" value="<?= $data['lantai'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>