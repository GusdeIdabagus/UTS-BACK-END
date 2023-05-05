<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        .tabel table {
            margin-top : 20px;
            width : 100%;
            border : 1px solid black;
            border-collapse: collapse;
            padding : 5px;
        }

        .tabel th {
            background-color: grey;
        }

        .tabel th, .tabel td, .tabel tr  {
            border : 1px solid black;
            padding : 5px;
        }
     
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a  href="formmhs.php">Mahasiswa</a></li>
  <li><a href="formdosen.php">Dosen</a></li>
  <li><a class="active" href="formruangan.php">daftar Ruangan</a></li>
</ul> 
<br>
    <form action="prosesruangan.php" method="POST">
        <fieldset>
            <legend>Form input Ruangan</legend>
            <h2>Lengkapi biodata Ini dengan benar</h2>
            <table>
            <tr>
                    <td>Nama Ruangan</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Kode Ruangan</td>
                    <td>:</td>
                    <td><input type="text" name="kode"></td>
                </tr>
                <tr>
                    <td>Lantai Ruangan</td>
                    <td>:</td>
                    <td><input type="text" name="lantai"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>

    <div class="tabel">
        <table>
            <tr>
                <th>Nama Ruangan</th>
                <th>Kode Ruangan</th>
                <th>Lantai Ruangan</th>
                <th>Act</th>
            </tr>
            <?php
                include "koneksi.php";
                $qry = "SELECT * FROM ruangan";
                $exec = mysqli_query($con, $qry);
                while($data = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['kode'] ?></td>
                <td><?= $data['lantai'] ?></td>
                <td>
                    <a href="editmhs.php?nama=<?= $data['nama'] ?>">
                        <button>Edit</button>
                    </a>
                    <a href="deletemhs.php?nama=<?= $data['nama'] ?>">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>