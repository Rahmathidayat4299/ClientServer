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
    <title>Data pinjaman</title>

</head>

<body>
    <fieldset>
        <h1> Data pinjaman Ksp Unilak</h1>
  
    <div>
    <table class="table table-striped" id = "example">
    <thead>
    <tr>
      <th>ID</th>
      <th>Nik</th>
      <th>nama</th>
      <th>Pinjaman</th>
      </thead>
    </tr>
  <tbody>
  <?php

include 'koneksi.php';
$id=1;
$data = mysqli_query($db, "select * from pinjaman");
while ($d = mysqli_fetch_array($data)) {
?>
    <tr>
    <td><?php echo $id++; ?></td>
                <td><?php echo $d['nik']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['pinjaman']; ?></td>
                <td>
                    
                    <button type="button" class="btn btn-warning"><a href="edit_pinjaman.php?id=<?php echo $d['id']; ?>">EDIT</a></button>
                    <button type="button" class="btn btn-danger"><a href="hapus_pinjaman.php?id=<?php echo $d['id']; ?>">HAPUS</a></button>
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