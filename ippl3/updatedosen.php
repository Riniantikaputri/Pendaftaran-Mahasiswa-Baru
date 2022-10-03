<?php 
  session_start();
  include 'koneksi.php';
  if($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
  }

  $query = mysqli_query($kon, "SELECT * FROM pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
  if(mysqli_num_rows($query) == 0){
    echo '<script>window.location="pembagiandosen.php"</script>';
  }
  $p = mysqli_fetch_object($query)
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMB | Pembagian Dosen</title>
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
            <h3><b>Update Dosen Wali</b></h3>
            <div class="box">
              <form action="" method="POST">
                <input type="text" name="dosen" placeholder="Nama Dosen Wali" class="input-control" value="<?php echo $p->dosen ?>" required>
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
              </form>
              <?php 
              if(isset($_POST['submit'])) {

                $dosen = ucwords($_POST['dosen']);

                $update = mysqli_query($kon, "UPDATE pendaftaran SET 
                            dosen = '".$dosen."'
                            WHERE id_pendaftaran = '".$p->id_pendaftaran."' ");

                if($update){
                  echo '<script>alert("Update Dosen Berhasil")</script>';
                  echo '<script>window.location="pembagiandosen.php"</script>';
                }else{
                  echo 'gagal'.mysqli_error($kon);
                }
              }
              

              ?>
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