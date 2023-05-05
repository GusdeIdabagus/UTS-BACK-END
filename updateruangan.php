<?php

$nama = $_POST['nama'];
$kode = $_POST['kode'];
$lantai = $_POST['lantai'];

include "koneksi.php";

$qry = "UPDATE ruangan SET 
        nama = '$nama',
        kode = '$kode',
        lantai = '$lantai',
        WHERE nama = '$nama'
        ";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil diupdate'); 
    window.location = 'formruangan.php';</script>";
}else{
    echo "<script>alert('Data gagal diupdate');</script>";
}