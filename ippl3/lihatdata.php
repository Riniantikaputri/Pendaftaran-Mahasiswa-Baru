<?php 
    session_start();
    if($_SESSION['status_login'] != true) {
        echo '<script>window.location="loginuser.php"</script>';
    }
 ?>
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
            <a class="nav-link" href="?page=lihatdatamhs">Cek Data PMB</a>
            </li>
            <li class="nav-item">

			<?php
			include 'koneksi.php';
			$cek = mysqli_query($kon, "SELECT * FROM pendaftaran WHERE status='Diterima' AND id_pendaftaran = '".$_SESSION['idu']."' ");
        	if(mysqli_num_rows($cek) > 0){
        	$p = mysqli_fetch_object($cek);
        	echo'<a class="nav-link" href="?page=prodi">Daftar Ulang</a>';
        	}else{
        		echo'<a class="nav-link" href="?page=ditolak">Daftar Ulang</a>';
			}

			?> 
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php">Keluar</a>
            </li>
			
			
        </ul>
        </nav>
	<!-- akhir navbar -->
	<!-- awal container -->
    <div class="container" style="margin-top: 20px">
	<?php
		
		$page = isset($_GET['page']) ? $_GET['page'] : "";
		$action = isset($_GET['action']) ? $_GET['action'] : "";

		if ($page==""){
			include "lihatdatamhs.php";
		}elseif($page=="lihatdatamhs"){
            if($action==""){
                include"lihatdatamhs.php";
            }
		}elseif($page=="ditolak"){
            if($action==""){
                include"ditolak.php";
            }
		}elseif($page=="prodi"){
            if($action==""){
                include"prodi.php";
            }elseif($action=="kelas_si"){
				include "kelas.php";
			}elseif($action=="kelas_ti"){
				include "kelasti.php";
			}
        }else{
			exit();
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