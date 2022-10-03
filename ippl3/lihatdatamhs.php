 <?php	
    include 'koneksi.php';
    if($_SESSION['status_login'] != true) {
        echo '<script>window.location="loginuser.php"</script>';
    }

    $query = mysqli_query($kon, "SELECT * FROM pendaftaran WHERE id_pendaftaran = '".$_SESSION['idu']."' ");
    $p = mysqli_fetch_object($query);
		
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahasiswa Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

    <!-- content -->
    <div class="container p-3 my-3 border">
        <h1 class="text-center">Profil Calon Mahasiswa</h1>

        <div class="alert alert-primary"><strong>Status Penerimaan</strong></div>
        <div class='alert alert-success'><?php echo $p->status ?></div>
        <hr>

        <div class="alert alert-primary"><strong>Program Studi</strong></div>
        <label class="input-control"><?php echo $p->prog1 ?></label>
        <hr>

        <div class="alert alert-primary"><strong>Data Diri Anda</strong></div>
          <table border="0">
              <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?php echo $p->nama ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><?php echo $p->tempat_lahir ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $p->tanggal_lahir ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $p->email ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $p->jk ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $p->agama ?></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><?php echo $p->no_telp ?></td>
            </tr>
          </table>
          <hr>

        <div class="alert alert-primary"><strong>Alamat</strong></div>
            <table border="0">
              <tr>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td><?php echo $p->kewarganegaraan ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $p->alamat ?></td>
            </tr>
            <tr>
                <td>Kabubaten</td>
                <td>:</td>
                <td><?php echo $p->kabupaten ?></td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td><?php echo $p->kecamatan ?></td>
            </tr>
            <tr>
                <td>Kode Pos</td>
                <td>:</td>
                <td><?php echo $p->kode_pos ?></td>
            </tr>
            <tr>
                <td>Propinsi</td>
                <td>:</td>
                <td><?php echo $p->provinsi ?></td>
            </tr>
            </table>
            <hr>

         <div class="alert alert-primary"><strong>Pendidikan</strong></div>
            <table border="0">
              <tr>
                <td>Sekolah</td>
                <td>:</td>
                <td><?php echo $p->sekolah ?></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td><?php echo $p->pendidikan ?></td>
            </tr>
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