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
    	<div class="alert alert-primary">
        	<strong>Dosen Wali : <?php echo $p->dosen ?></strong>
    	</div>	
		<div class='alert alert-success'><?php echo $_SESSION['b_global']->nama ?> Prodi <?php echo $p->prog1 ?> Anda Masuk Pada</div>
    	<form id="form" method="post">
        	<div class="alert alert-primary">
            	<strong><?php echo $p->paket ?></strong>
        	</div>						
		</form>
	</div>

  
</body>
</html>