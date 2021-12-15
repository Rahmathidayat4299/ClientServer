<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form tambah anggota</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
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
    <!-- <div class="container">
    <form action="aksi_tambah.php" method="post">
            <div>
                <table >

                    <div>
                        <tr>
                            <td>ID</td>
                            <td>:</td>
                            <td><input type="number" name="id" id="id"></td>
                        </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" id="nama"><br></td>
                    </tr>
                    </div>   
                    <div>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" id="alamat"></td>
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="radio" name="jenis_kelamin" id="radio1" value="L">
                            <label for="radio1">
                                    Laki-Laki
                            </label>
                            <input type="radio" name="jenis_kelamin" id="radio2" value="P">
                            <label for="radio2">
                                    Perempuan
                            </label></td>
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td><label for="agama">Agama</label></td>
                        <td>:</td>
                        <td><select name="agama" id="agama"><option value="" disabled selected>Pilih Salah Satu</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddha">Buddha</option>
                            <option value="konghucu">Konghucu</option>
                            </select></td>
                            
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td>jumlah simpanan</td>
                        <td>:</td>
                        <td><input type="text" name="simpanan" id="simpanan"></td>
                    </tr>   
                    </div>
                </table>
                <input type="submit" value="Simpan" id="simpan">
                            <input type="reset" value="Reset" id="reset">
                            <input type="button" value="kembali" id="kembali">
                
        </form> -->

        
    <!-- </div> -->

        <div class="form">
        <form  action="aksi_tambah.php" method="post" >
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" aria-describedby="emailHelp" name = "id" placeholder="masukkan id">
        
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">nama</label>
        <input type="text" class="form-control" id="nama" name ="nama" aria-describedby="emailHelp" placeholder="masukkan nama">
        
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control" id="alamat" name ="alamat" aria-describedby="emailHelp" placeholder="masukkan alamat">
        
    </div>
    <div class="form-check">
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
  </div>
  <select name = "agama" id = "agama" class="form-control form-control-sm">
    <option value="" disabled selected>Agama</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="buddha">Buddha</option>
                                <option value="konghucu">Konghucu</option>
    </select>

    <div class="form-group">
        <label for="exampleInputEmail1">Simpanan</label>
        <input type="text" class="form-control" id="simpanan" name ="simpanan" aria-describedby="emailHelp" placeholder="masukkan jumlah simpanan">
        
    </div>

    <button type="submit" value="Simpan" id="simpan" class="btn btn-primary">Submit</button>
    </form>
        </div>

        <footer>
        <h4>&copy;KSP UNILAK</h4>
       

        
    </footer> 
</body>
</html>