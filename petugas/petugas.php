<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Petugas aplikasi pengaduan Masyrakat</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
       <h4>Aplikasi Pengaduan Masyarakat</h4>
       <div class="alert alert-info">
        Anda login sebagai <b>Petugas</b> Aplikasi pengaduan masyarakat
       </div>
       <a href="petugas.php" class="btn btn-primary">Petugas</a>
       <a href="petugas.php?url=histori" class="btn btn-primary">Histori</a>
       <a href="petugas.php?url=logout" class="btn btn-primary">Logout</a>
       <div class="card mt-2">
        <div class="card-body">
            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo"<h4>Selamat datang di halaman petugas aplikasi pengaduan masyarakat</h4>";
                echo"Aplikasi pengaduan masyarakat berguna untuk mempermudah masyarakat dalam mengadukan masalah yang terjadi";
            }else{
                include $file.'.php';
            }
            ?>
        </div>
       </div>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>