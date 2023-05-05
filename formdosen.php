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
  <li><a href="formmhs.php">Mahasiswa</a></li>
  <li><a class="active" href="formdosen.php">Dosen</a></li>
  <li><a href="formruangan.php">daftar Ruangan</a></li>
</ul> 
<br>
    <form action="proses.php" method="POST">
        <fieldset>
            <legend>Form Input Mengajar Dosen</legend>
            <h2>Lengkapi Data Mengajar Hari Ini</h2>
            <table>
                <tr>
                    <td>ID Dosen</td>
                    <td>:</td>
                    <td><input type="number" name="iddosen"></td>
                </tr>
                <tr>
                    <td>Nama Dosen</td>
                    <td>:</td>
                    <td><input type="text" name="namadosen"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><select name="kelas">
                            <option value="001">BA214</option>
                            <option value="002">BB214</option>
                            <option value="003">BC214</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Matakuliah</td>
                    <td>:</td>
                    <td><select name="matakuliah">
                            <option value="001">Backend</option>
                            <option value="002">Frontend</option>
                            <option value="003">Basis Data</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ruang Kelas</td>
                    <td>:</td>
                    <td><select name="ruangkelas">
                            <option value="001">Lab Database</option>
                            <option value="002">Lab Web Technology</option>
                            <option value="003">Basis Data</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
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
                <th>ID Dosen</th>
                <th>Nama Dosen</th>
                <th>Kelas</th>
                <th>Matakuliah</th>
                <th>Ruang Kelas</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Act</th>
            </tr>
            <?php
                include "koneksi.php";
                $qry = "SELECT * FROM dosen";
                $exec = mysqli_query($con, $qry);
                while($data = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
                <td><?= $data['iddosen'] ?></td>
                <td><?= $data['namadosen'] ?></td>
                <td><?= $data['kelas'] ?></td>
                <td><?= $data['matakuliah'] ?></td>
                <td><?= $data['ruangkelas'] ?></td>
                <td><?= $data['nohp'] ?></td>
                <td><?= $data['email'] ?></td>
                <td>
                    <a href="edit.php?iddosen=<?= $data['iddosen'] ?>">
                        <button>Edit</button>
                    </a>
                    <a href="delete.php?iddosen=<?= $data['iddosen'] ?>">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>