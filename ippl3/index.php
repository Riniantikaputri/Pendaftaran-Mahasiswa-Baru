<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- dataTables CSS -->
	<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">

    <title>Penerimaan Mahasiswa Baru</title>
  </head>
    <body>

	<!-- awal navbar -->
	     <!-- navbar menu -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=pendaftaran">Pendaftaran</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="loginuser.php">Lihat Data</a>
            </li>
        </ul>
        </nav>
	<!-- akhir navbar -->
	<!-- awal container -->
    <div class="container" style="margin-top: 20px">
	<?php
		session_start();
		$page = isset($_GET['page']) ? $_GET['page'] : "";
		$action = isset($_GET['action']) ? $_GET['action'] : "";

		if ($page==""){
			include "home.php";
		}elseif ($page=="pendaftaran"){
			if ($action==""){
				include "pendaftaran.php";
			}
		}else{
			include "NAMA_HALAMAN";
		}
		?>
	</div>
	<!-- akhir container -->
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#myTable').DataTable();
		});
	</script>	
	</body>
</html>