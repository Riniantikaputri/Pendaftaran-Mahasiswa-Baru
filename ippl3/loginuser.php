<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran Mahasiswa Baru </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href = "https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel = "stylesheet ">

</head>
<body id="bg-login">
	<div class="box-login">
		<h2>Cek Data PMB</h2>
		<form action="" method="POST"> 
			<input type="email" name="email" placeholder="Email" class="input-control" required oninvalid="this.setCustomValidity('Email Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			<input type="submit" name="submit" value="Cek" class="btn">
		</form>
		<?php

		if (isset($_POST['submit'])){
			session_start();
			include "koneksi.php";

			$email = mysqli_real_escape_string($kon, $_POST['email']);
			
			$cek = mysqli_query($kon,"SELECT * FROM pendaftaran WHERE email = '".$email."'");		
			if (mysqli_num_rows ($cek) > 0){
					$p = mysqli_fetch_object($cek);
					$_SESSION['status_login'] = true ;
					$_SESSION['b_global'] = $p;
					$_SESSION['idu'] = $p->id_pendaftaran;
					echo '<script>window.location="lihatdata.php"</script>';
			}else{
					echo '<script>alert("Mohon maaf Email belum terdftar ")</script>';
				}
		}
	?>

	</div>
</body>
</html>
