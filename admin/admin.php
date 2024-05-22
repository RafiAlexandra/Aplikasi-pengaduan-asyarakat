<?php
session_start();
if(empty($_SESSION['id_petugas'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index2.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin/Petugas aplikasi pengaduan Masyrakat</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
       <h4>Aplikasi Pengaduan Masyarakat</h4>
       <div class="alert alert-info">
        Anda login sebagai <b>Administrator</b> Aplikasi pengaduan masyarakat
       </div>
       <a href="admin.php" class="btn btn-primary">Administrator</a>
       <a href="admin.php?url=aduan" class="btn btn-primary">Aduan</a>
       <a href="logout.php?url=logout" class="btn btn-primary">Logout</a>
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