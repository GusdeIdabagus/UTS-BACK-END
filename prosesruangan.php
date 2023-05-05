<?php

$nama = $_POST['nama'];
$kode = $_POST['kode'];
$lantai = $_POST['lantai'];


include "koneksi.php";

$qry = "INSERT INTO formruangan VALUES (
    '$nama', '$kode', '$lantai'
)";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil disimpan'); 
    window.location = 'formruangan.php';</script>";
}else{
    echo "<script>alert('Data gagal disimpan');</script>";
}
