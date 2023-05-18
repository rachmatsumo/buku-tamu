<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('location: login.php');
}else{
    include_once('functions/database.php');
    $mysqli = new Database();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Buku Tamu</title> 
    <link rel="icon" type="image/png" href="assets/img/icon.ico">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- CSS -->
</head>
<body>

    <!-- Navbar Awal -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin.php">
            <img src="assets/img/icon.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">    
            Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php"><i class="bi bi-house"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=daftar_tamu"><i class="bi bi-people"></i> Daftar Tamu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="bi bi-book"></i> Panel Tamu</a>
                    </li>
                    <!-- 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                         </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> 
                    -->
                </ul> 
                <ul class="navbar-nav me-end mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"  href="functions/logout.php"><i class="bi bi-door-open"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar Akhir -->
    <!-- Konten Awal -->
    <div class="container container-konten p-4">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            if($page=='daftar_tamu'){
                include ('pages/daftar_tamu.php');
            }
        }else{
            include ('pages/home.php');
        }
        ?>
    </div>
    <!-- Konten Akhir -->  
    
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