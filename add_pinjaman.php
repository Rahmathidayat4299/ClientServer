<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form tambah anggota</title>
    <link rel="stylesheet" href="style_form.css">
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

        <div class="form">
        <form  action="add_form_pinjaman.php" method="post" >
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" aria-describedby="emailHelp" name = "id" placeholder="masukkan id">
        
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">nik</label>
        <input type="text" class="form-control" id="nik" name ="nik" aria-describedby="emailHelp" placeholder="masukkan nik">
        
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">nama</label>
        <input type="text" class="form-control" id="nama" name ="nama" aria-describedby="emailHelp" placeholder="masukkan nama">
        
    </div>
    

    <div class="form-group">
        <label for="exampleInputEmail1">Simpanan</label>
        <input type="text" class="form-control" id="pinjaman" name ="pinjaman" aria-describedby="emailHelp" placeholder="masukkan jumlah pinjaman">
        
    </div>

    <button type="submit" value="Simpan" id="simpan" class="btn btn-primary">Submit</button>
    </form>
        </div>

        <footer>
        <h4>&copy;KSP UNILAK</h4>
       

        
    </footer> 
</body>
</html>