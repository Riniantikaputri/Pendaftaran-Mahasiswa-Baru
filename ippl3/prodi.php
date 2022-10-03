<?php   
    include 'koneksi.php';
    if($_SESSION['status_login'] != true) {
        echo '<script>window.location="loginuser.php"</script>';
    }

    $query = mysqli_query($kon, "SELECT * FROM pendaftaran WHERE id_pendaftaran = '".$_SESSION['idu']."' ");
    $p = mysqli_fetch_object($query);
        
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Mahasiswa Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container p-3 my-3 border">
    <h1 class="text-center">Daftar Ulang</h1>
    <div class='alert alert-success'>Selmat Datang <?php echo $_SESSION['b_global']->nama ?> di Halaman Daftar Ulang</div>
    <div class="alert alert-primary">
            <strong>Status Daftar Ulang Anda : <?php echo $p->paket ?></strong>
    </div>
    
    <form id="form" method="post">
		<!-- pilih prodi -->
            <div class="alert alert-primary">
                <strong>Silahkan Pilih Prodi Sesuai dengan Prodi yang Sudah di Pilih di Pendaftaran Awal !</strong>
            </div>
			
		<!-- button -->		
			<div class="row">
                <div class="col-sm-4">
                    <a class="btn btn-primary" href="?page=prodi&action=kelas_si" style="margin-bottom: 10px">Sistem Informasi</a>
					<a class="btn btn-primary" href="?page=prodi&action=kelas_ti" style="margin-bottom: 10px">Teknik Informatika</a>
                </div>
            </div>
			<br><br>
		
	</form>
	
	</div>

    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - PMB-Online.</small>
        </div>
    </footer>

</body>
</html>