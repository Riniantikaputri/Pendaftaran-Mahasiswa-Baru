<?php 
    session_start();
    if($_SESSION['status_login'] != true) {
        echo '<script>window.location="login.php"</script>';
    }
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

  <?php
  include 'koneksi.php';
  ?>

  <div class="container p-3 my-3 border" >
    <h3>Pembagian Dosen Wali</h3>
    <hr>
      <table class="table table-stripped table-hover datatab">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Status</th>
          <th>Prodi</th>
          <th>Dosen</th>
          <th>Action</th>     
        </tr> 
      <tbody>
      <?php 
        $no = 1;
        $p = mysqli_query($kon, "SELECT * FROM pendaftaran WHERE status='Diterima' ");
        if(mysqli_num_rows($p) > 0){
        while ($row = mysqli_fetch_array($p)) {
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $row['nama'] ?></td>
          <td><?php echo $row['status'] ?></td>
          <td><?php echo $row['prog1'] ?></td>
          <td><?php echo $row['dosen'] ?></td>
          <td>
            <a href="updatedosen.php?id=<?php echo $row['id_pendaftaran'] ?>" type="button" class="btn btn-success btn-md">Edit</a>

          </td>
        </tr>
        <?php } }else{ ?>
          <tr>
            <td colspan="3">Tidak ada Data</td>
          </tr>
        <?php } ?>
        </tbody>
      </table>          
  </div>

   <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - PMB-Online.</small>
        </div>
    </footer>

</body>
  
</html>