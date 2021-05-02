<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Tambah Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <style>
        h1{
            padding-top: 3rem;
        }
        .submitButton{
        margin-top: 1rem;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Database</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link btn btn-success" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link"><?php echo $_SESSION["email"] ?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link btn btn-danger" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center">Tambah Data</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="row-g-3" action="prosestambah.php" method="post">
                    <div class="col-12">
                        <label for="npm">NPM</label>
                        <input type="number" class="form-control" name="npm">
                    </div>
                    <div class="col-12">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="col-12">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="submitButton col-12 text-center">
                        <button class="btn btn-primary" type="submit" name="button">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>