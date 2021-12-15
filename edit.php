<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>FORM EDIT</title>
</head>

<body>
    <fieldset>
    
    <section id="header">
        
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
            <a class="navbar-brand" href="index.php">KSP UNILAK</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item ">
                         <a class="nav-link" href="index.php">Home </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="form_simpan_anggota.php">REGISTRASI MEMBER</a> 
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" href="data_anggota.php">LIST MEMBER</a>
                                </li>
                            </ul>
                            </div>
                        </nav>
    
    
        </section>
    <div>
        <h2>EDIT DATA ANGGOTA</h2>
    </div>
    <div>
        <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($db,"SELECT * FROM simpanan_anggota WHERE id='$id'");

                while($d= mysqli_fetch_array($data)){
            ?>
    </div>

    <div>
        <form action="aksi_edit.php" method="post">
            <div >
                <input type="hidden" name="id" id="id" value="<?= $d['id'] ?>">
                <table >
                    
                    <div class="form-group">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" id="nama" value="<?= $d['nama'] ?>"><br></td>
                    </tr>
                    </div>
                    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" value="<?= $d['id'] ?>" aria-describedby="emailHelp" name = "id" placeholder="masukkan id">
        
        </div>
                    
                    <div>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" id="alamat" value="<?= $d['alamat'] ?>"></td>
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php if($d['jenis_kelamin']=='L') { ?>
                            <input type="radio" name="jenis_kelamin" id="radio1" value="L" checked/>
                            <label for="radio1">
                                    Laki-Laki
                            </label>
                            <input type="radio" name="jenis_kelamin" id="radio2" value="P">
                            <label for="radio2">
                                    Perempuan
                            </label>

                            <?php } else { ?>
                            <input type="radio" name="jenis_kelamin" id="radio1" value="L"/>
                            <label for="radio1">
                                    Laki-Laki
                            </label>
                            <input type="radio" name="jenis_kelamin" id="radio2" value="P" checked/>
                            <label for="radio2">
                                    Perempuan
                            </label>
                            <?php } ?>
                        </td>
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td><label for="agama">Agama</label></td>
                        <td>:</td>
                        <td><select name="agama" id="agama">
                                <option disabled selected>Pilih Salah Satu</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select></td>
                            
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td>simpanan Asal</td>
                        <td>:</td>
                        <td><input type="text" name="simpanan" id="simpanan" value="<?= $d['simpanan'] ?>"></td>
                    </tr>   
                    </div>
                </table>
                <input type="submit" value="Simpan" id="simpan">
                            <input type="reset" value="Reset" id="reset">
                            <input type="button" value="kembali" id="kembali">
                
        </form>
        <?php
    }
    ?>
    </div>
</fieldset>
</body>
</html>