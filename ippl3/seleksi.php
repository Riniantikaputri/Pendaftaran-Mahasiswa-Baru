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
    <title>PMB | Data PMB</title>
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
    <?php 
    include "koneksi.php";
    ?>

    <div class="section">
        <div class="container">
            <h2>Data Mahasiswa</h2>
                <div class="box">
                <table id="data" width="100%" cellpadding="5" class="table table-striped table-hover">
                <tr bgcolor="white" align="center">

                    <th height="51"><strong>No</strong></th>
                    <th><strong>Nama Siswa</strong></th>
                    <th><strong>Jenis Kelamin</strong></th>
                    <th><strong>Program Studi</strong></th>            
                    <th><strong>Nilai</strong></th>
                    <th><strong>Status Sekarang</strong></th>
                </tr>
                <?php 
                    $no = 1;
                    $p = mysqli_query($kon, "SELECT * FROM pendaftaran ORDER BY nilai_raport DESC");
                    if(mysqli_num_rows($p) > 0){
                    while ($row = mysqli_fetch_array($p)) {
                         ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['jk'] ?></td>
                            <td><?php echo $row['prog1'] ?></td>                            
                            <td><?php echo $row['nilai_raport'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                        </tr>
                        <?php } }else{ ?>
                            <tr>
                                <td colspan="3">Tidak ada Data</td>
                            </tr>
                        <?php } ?>
               
               
                </table>
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