<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Masyarakat aplikasi pengaduan Masyrakat</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
       <h4>Aplikasi Pengaduan Masyarakat</h4>
       <div class="alert alert-info">
        Anda login sebagai <b>Masyarakat</b> Aplikasi pengaduan masyarakat
       </div>
       <a href="masyarakat.php" class="btn btn-primary">Masyarakat</a>
       <a href="masyarakat.php?url=tambah-aduan" class="btn btn-primary">Tambah aduan</a>
       <a href="masyarakat.php?url=logout" class="btn btn-primary">Logout</a>
       <div class="card mt-2">
        <div class="card-body">
            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo"<h4>Selamat datang di halaman aplikasi pengaduan masyarakat</h4>";
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