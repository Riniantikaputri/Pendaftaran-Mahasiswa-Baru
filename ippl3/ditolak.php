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
		<div class='alert alert-danger'>
			<?php echo $_SESSION['b_global']->nama ?> Anda Tidak Bisa Mengakses Daftar Ulang.
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