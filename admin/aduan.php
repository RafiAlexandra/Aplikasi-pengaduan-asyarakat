<h4>halaman Data aduan masyarakat</h4>
<a href="?url=tambah-aduan" class="btn btn-primary">Tambah aduan</a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Tanggal aduan</td>
        <td>Isi aduan</td>
        <td>Lokasi kejadian</td>
        <td>Edit</td>
        <td>hapus</td>

        <?php

        include '../koneksi.php';
        $sql = "SELECT*FROM masyarakat ORDER BY nomor_ktp DESC";
        $query = mysqli_query($koneksi, $sql);
        $no = 1;
        foreach($query as $data){ ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['tanggal_aduan'] ?></td>
            <td><?= $data['isi_aduan'] ?></td>
            <td><?= $data['lokasi_kejadian'] ?></td>
            <td>
                <a href="?url=edit-aduan&nomor_ktp=<?= $data['nomor_ktp'] ?>" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <a onclick="return confirm('Apakah anda yakin ingin menghapus data');" href="?url=hapus-aduan&nomor_ktp=<?= $data['nomor_ktp'] ?>" class="btn btn-danger">Hapus</a>
            </td>

        </tr>

        <?php } ?>

        

    </tr>
</table>