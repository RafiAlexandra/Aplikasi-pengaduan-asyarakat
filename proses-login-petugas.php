<?php

include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT*FROM petugas WHERE username='$username' AND password='$password';";
$query = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query) > 0){
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id_petugas'] = $data['id_petugas'];
    $_SESSION['level'] = $data['level'];
    if($data['level']=='admin'){
        header('Location:admin/admin.php');
    }elseif($data['level']=='petugas'){
        header('Location:petugas/petugas.php');
    }
} else{
    echo"<script>alert('maaf login anda gagal,silahkan ulangi lagi');
    windwow.location.assigm('index2.php');</script>";
}


?>