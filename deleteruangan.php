<?php

$nama = $_GET['nama'];
include "koneksi.php";

$qry = "DELETE FROM formruangan WHERE nama = '$nama'";
$exec = mysqli_query($con, $qry);
if($exec){
    echo "<script>alert('Data berhasil dihapus'); 
    window.location = 'formruangan.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus');</script>";
}