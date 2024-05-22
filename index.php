<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Masyrakat aplikasi pengaduan Masyrakat</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <h5 class="text-center">Login masyarakat</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="proses-login-masyarakat.php" method="post">
                            <div class="form-group mb-2">
                            <label for="">Nomor KTP</label>
                            <input type="number" name="nomor_ktp" class="form-control" placeholder="Masukkan Nomor KTP anda.." required>
                            </div>
                            <div class="form-group mb-2">
                             <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <a href="index2.php" class="btn btn-link">Login Sebagai Administrator/Petugas</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>