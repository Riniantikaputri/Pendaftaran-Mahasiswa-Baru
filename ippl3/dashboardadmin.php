<?php 
    session_start();
    if($_SESSION['status_login'] != true) {
        echo '<script>window.location="login.php"</script>';
    }
 ?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMB | Dashboard Admin</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href = "https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel = "stylesheet ">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 


</head>
<body>
     <!-- header -->
    <header>
        <div class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav"> 
                <li class="nav-item"><a class="nav-link" href="dashboardadmin.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="seleksi.php">Data PMB</a></li>
                <li class="nav-item"><a class="nav-link" href="pembagiandosen.php">Pembagian Dosen</a></li>
                <li class="nav-item"><a class="nav-link" href="keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>

    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di halaman Admin</h4>
            </div>
        </div>
    </div>

     <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - PMB-Online.</small>
        </div>
    </footer>
</body>
</html>   