<<?php 
// koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form
$id=$_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$pinjaman = $_POST['pinjaman'];
//update data ke database
mysqli_query($db,"UPDATE pinjaman SET nik='$nik',nama='$nama', pinjaman='$pinjaman' where id='$id'");

header("location:data_pinjaman.php?daftar=sukses");
//mengalihkan halaman kembali ke data_anggota.php
 ?>