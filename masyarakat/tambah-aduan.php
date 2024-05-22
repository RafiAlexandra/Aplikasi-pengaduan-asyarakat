<h4>Halaman Aduan Masyarakat</h4>
<hr>
<form action="?url=proses-tambah-aduan" method="post">
    <div class="form-group mb-2">
        <label>Tanggal aduan</label>
        <input value="<?  ?>"  type="date" class="form-control" name="tanggal_aduan"  required>
    </div>
    <div class="form-group mb-2">
        <label>Isi aduan</label>
        <input type="text" class="form-control" name="isi_aduan"  required>
    </div>
    <div class="form-group mb-2">
        <label>Lokasi kejadian</label>
        <input type="text" class="form-control" name="lokasi_kejadian"  required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>

</form>