<?php

//koneksi ke database
include 'koneksi.php';

//menangkap  data idd yang di kirim dari url
$id = $_GET['id'];


//menghapus data dari database
mysqli_query($db,"delete from pinjaman where id='$id'");

//mengalihkan halaman kembali ke data_anggota.php
header("location:data_pinjaman.php");

?>