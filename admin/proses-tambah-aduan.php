<?php

$tanggal_aduan = $_POST['tanggal_aduan'];
$isi_aduan = $_POST['isi_aduan'];
$lokasi_kejadian = $_POST['lokasi_kejadian'];


include '../koneksi.php';
$sql = "INSERT INTO masyarakat(tanggal_aduan,isi_aduan,lokasi_kejadian) VALUES('$tanggal_aduan','$isi_aduan','$lokasi_kejadian')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=aduan");
}else{
    echo"<script>alert('maaf data tidak tersimpan');
    windwow.location.assigm('?url=aduan');</script>";
}

?>