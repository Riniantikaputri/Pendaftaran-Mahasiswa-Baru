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
    <form id="form" method="post">
		<!-- paket kelas -->
            <div class="alert alert-primary">
                <strong>Paket Kelas Sistem Informasi</strong>
            </div>
			<div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Silahkan Pilih Paket Kelas :</label>
                        <select class="form-control" name="paket" id="paket" required>
                            <option value="">Pilih</option>
                            <option value="S1-SI Paket Kelas A" <?php echo($p->paket == 1)? 'selected':''; ?>>Paket A</option>
                            <option value="S1-SI Paket Kelas B" <?php echo($p->paket == 2)? 'selected':''; ?>>Paket B</option>
                            <option value="S1-SI Paket Kelas C" <?php echo($p->paket == 3)? 'selected':''; ?>>Paket C</option>
                            <option value="S1-SI Paket Kelas D" <?php echo($p->paket == 4)? 'selected':''; ?>>Paket D</option>
                        </select>
                    </div>
                </div>
			</div>

			<!-- button -->		
			<div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Ok</button>
                </div>
            </div>
			<br><br>

			<?php 
				if(isset($_POST['submit'])) {
					// data dari inputan form

				$cek = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM pendaftaran WHERE paket='$_POST[paket]'"));
            	if ($cek >= 5) {
                echo "<script>
                        alert(\"Paket sudah penuh silahkan pilih paket yang lain\");
                        include = 'kelas.php';
                    </script>";
                    exit();
            	}else{
                 	$paket=$_POST["paket"];
            	}
					
					//query update data produk
					$update = mysqli_query($kon, "UPDATE pendaftaran SET
											paket = '".$paket."'
											WHERE id_pendaftaran = '".$p->id_pendaftaran."' ");
					if($update){
						echo '<script>alert("Pilih paket kelas berhasil")</script>';
						include "daftarulang.php";
					}else{
						echo 'gagal'.mysqli_error($koneksi);
					}

				}
				?>
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