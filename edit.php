<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_form.css">
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
        <form class = "form" action="aksi_edit.php" method="post">
            <div >
                <table >
                    
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" value="<?= $d['id'] ?>" aria-describedby="emailHelp" name = "id" placeholder="masukkan id">
        
                    </div>
                    <div class="form-group">
                        <label for="id">nama</label>
                        <input type="text" class="form-control" nama="nama" value="<?= $d['nama'] ?>" aria-describedby="emailHelp" name = "nama" placeholder="masukkan nama">
        
                    </div>
                    <div class="form-group">
                        <label for="id">alamat</label>
                        <input type="text" class="form-control" alamat="alamat" value="<?= $d['alamat'] ?>" aria-describedby="emailHelp" name = "alamat" placeholder="masukkan alamat">
        
                    </div>
                    

                    <div class="form-check">
                        <?php if($d['jenis_kelamin']=='L') { ?>
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="L" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        laki-laki
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="P">
                    <label class="form-check-label" for="exampleRadios2">
                        perempuan
                    </label>

                    <div class="form-check">
                    <?php } else { ?>
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="L" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="P">
                        <label class="form-check-label" for="exampleRadios2">
                            perempuan
                        </label>
                        <?php } ?>
                    </div>
        
                    </div>
     



                    <div>
                    <select name = "agama" id = "agama" class="form-control form-control-sm">
                                <option value="" disabled selected>Agama</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="buddha">Buddha</option>
                                <option value="konghucu">Konghucu</option>
                     </select>
                    </div>
                    <div class="form-group">
                        <label for="id">simpanan Asal</label>
                        <input type="text" class="form-control" simpanan="simpanan" value="<?= $d['simpanan'] ?>" aria-describedby="emailHelp" name = "simpanan" placeholder="masukkan simpanan">
        
                    </div>
                </table>
               
    <button type="submit" value="Simpan" id="simpan" class="btn btn-primary">Submit</button>
                
        </form>
        <?php
    }
    ?>
    </div>
</fieldset>

 <footer>
        <h4>&copy;KSP UNILAK</h4>
       

        
    </footer> 
</body>
</html>