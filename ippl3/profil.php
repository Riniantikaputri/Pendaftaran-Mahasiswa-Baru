 <?php 
    session_start();
    include 'koneksi.php';
    if($_SESSION['status_login'] != true) {
        echo '<script>window.location="login.php"</script>';
    }

    $query = mysqli_query($kon, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."' ");
    $d = mysqli_fetch_object($query);

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMB | Profil Admin</title>
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
            <h3><b>Profil</b></h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name ?>" required>
                    <input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>"  required>
                    <input type="text" name="hp" placeholder="No hp" class="input-control" value="<?php echo $d->admin_tlp ?>"  required>
                    <input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->admin_email ?>"  required>
                    <input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->admin_addres ?>"  required>
                    <input type="submit" name="submit" value="Ubah Profil" class="btn btn-primary">
                </form>
                <?php 
                    if(isset($_POST['submit'])){

                        $nama   = ucwords($_POST['nama']);
                        $user   = $_POST['user'];
                        $hp     = $_POST['hp'];
                        $email  = $_POST['email'];
                        $alamat = ucwords($_POST['alamat']);
 
                        $update = mysqli_query($kon, "UPDATE tb_admin SET
                                        admin_name = '".$nama."',
                                        username = '".$user."',
                                        admin_tlp = '".$hp."',
                                        admin_email = '".$email."',
                                        admin_addres = '".$alamat."'
                                        WHERE admin_id = '".$d->admin_id."' ");
                        if($update) {
                            echo '<script>alert("Ubah data berhasil")</script>';
                            echo '<script>window.location="profil.php"</script>';
                        }else{
                            echo 'gagal'.mysqli_error($kon);
                        }
                    }

                 ?>

            </div>
            <h3><b>Ubah Password</b></h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
                    <input type="password" name="pass2" placeholder="Konfirmasi Password Baru" class="input-control" required>
                    <input type="submit" name="ubah_password" value="Ubah Password" class="btn btn-primary">
                </form>
                <?php 
                    if(isset($_POST['ubah_password'])){

                        $pass1  = $_POST['pass1'];
                        $pass2  = $_POST['pass2'];

                        if($pass2 != $pass1){
                            echo '<script>alert("Konfirmasi Password Baru tidak Sesuai")</script>';
                        }else{
                            $u_pass = mysqli_query($kon, "UPDATE tb_admin SET
                                        password = '".MD5($pass1)."'
                                        WHERE admin_id = '".$d->admin_id."' ");
                            if($u_pass){
                                echo '<script>alert("Ubah data berhasil")</script>';
                                echo '<script>window.location="profil.php"</script>';
                            }else{
                                echo 'gagal'.mysqli_error($kon);  
                            }
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