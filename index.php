<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="icon" type="image/png" href="assets/img/icon.ico">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- CSS -->
</head>
<body>

<div class="container-fluid bgr-gainsboro">
    <div class="row row-100 d-flex justify-content-center align-items-center px-2">
        <!-- Konten awal -->
        <div class="col-12 col-md-6 konten">
            <h2><strong>Buku</strong> Tamu</h2>
            <p>Selamat datang, silahkan isi buku tamu di bawah!</p>
            <form action="functions/actions.php?aksi=tambah_tamu" method="POST"id="form_tambah_tamu">
                <div class="input-group mb-2">
                    <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                    <input type="text" name="nama" placeholder="Masukkan nama lengkap" class="form-control form-control-lg" required>
                </div>
                <div class="input-group mb-2">
                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                    <input type="text" name="handphone" placeholder="Masukkan nomor handphone" class="form-control form-control-lg" required>
                </div>
                <div class="input-group mb-2">
                    <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                    <textarea type="text" name="alamat" placeholder="Masukkan alamat" class="form-control form-control-lg" required></textarea>
                </div>
                <div class="input-group mt-3">
                    <button type="reset" class="btn btn-warning btn-lg w-50" tabindex="-1">Reset</button>
                    <button type="submit" class="btn btn-primary btn-lg w-50">Kirim <i class="bi bi-arrow-right-square"></i></button>
                </div>
            </form>
        </div>
        <!-- Konten akhir -->
    </div>
</div>

<?php
include('pages/footer.php');
?>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/script.js"></script>
    <!-- Script -->
 
</body>
</html>