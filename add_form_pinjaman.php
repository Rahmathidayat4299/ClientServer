<?php
include 'koneksi.php';


$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];

$pinjaman = $_POST['pinjaman'];

mysqli_query($db,"insert into pinjaman values('$id','$nik','$nama','$pinjaman') ");

header("location:index.php");
?>