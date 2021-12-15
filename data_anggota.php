<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <title>Data Anggota</title>

</head>

<body>
    <fieldset>
        <h1> Data anggota Ksp Unilak</h1>
  
    <div>
    <table class="table table-striped" id = "example">
    <thead>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Jenis kelamin</th>
      <th>Agama</th>
      <th>Simpanan</th>
      </thead>
    </tr>
  <tbody>
  <?php

include 'koneksi.php';
$id=1;
$data = mysqli_query($db, "select * from simpanan_anggota");
while ($d = mysqli_fetch_array($data)) {
?>
    <tr>
    <td><?php echo $id++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['agama']; ?></td>
                <td><?php echo $d['simpanan']; ?></td>
                <td>
                    
                    <button type="button" class="btn btn-warning"><a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a></button>
                    <button type="button" class="btn btn-danger"><a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a></button>
                </td>
    </tr>
    <?php
        }
        ?>
  </tbody>
</table>
</fieldshet>
<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
</body>


</html>