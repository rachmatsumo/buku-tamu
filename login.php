<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Buku Tamu</title>
    <link rel="icon" type="image/png" href="assets/img/icon.ico">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- CSS -->
</head>
<body>

    <form action="functions/actions.php?aksi=login" method="POST" id="form_login">
        <div class="container-fluid bgr-gainsboro">
            <div class="row row-100">
                <div class="col-12 col-md-4 login-div order-2 order-md-1">
                    <h4 class="mb-4 t-white-uppercase">Login Admin</h4>
                    <input type="text" name="username" placeholder="Username" class="form-control mb-4 rounded-pill form-control-lg">
                    <input type="password" name="password" placeholder="Password" class="form-control mb-4 rounded-pill form-control-lg">
                    <button class="btn btn-primary w-100 rounded-pill btn-lg" type="submit">Login</button>
                </div>
                <div class="col-12 col-md-4 login-img order-1 order-md-2">
                    <img src="assets/img/bgr.png" alt="Bgr" class="img">
                </div>
            </div>
        </div>
    </form>

    <?php 
        include('pages/footer.php');
    ?> 

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.1.0.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/script.js"></script>
    <!-- Script -->
    
</body>
</html>