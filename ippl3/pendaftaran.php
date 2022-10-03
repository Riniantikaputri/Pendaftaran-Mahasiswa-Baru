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
    <h1 class="text-center">Form Pendaftaran Mahasiswa Baru</h1>
	<?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if (isset($_POST['submit'])) {

        $nama=$_POST["nama"];
        $cek = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM pendaftaran WHERE email='$_POST[email]'"));
            if ($cek > 0) {
                echo "<script>
                        alert(\"Email sudah terdaftar silahkan login\");
                        window.location = 'loginuser.php';
                    </script>";
                    exit();
            }else{
                 $email=$_POST["email"];
            }
       
        $tempat_lahir=$_POST["tempat_lahir"];
        $tanggal_lahir=$_POST["tanggal_lahir"];
        $jk=$_POST["jk"];
        $kewarganegaraan=$_POST["kewarganegaraan"];
        $agama=$_POST["agama"];
        $no_telp=$_POST["no_telp"];
        $alamat=$_POST["alamat"];
        $kode_pos=$_POST["kode_pos"];
        $provinsi=$_POST["provinsi"];
        $kabupaten=$_POST["kabupaten"];
        $kecamatan=$_POST["kecamatan"];
        $pendidikan=$_POST["pendidikan"];
        $sekolah=$_POST["sekolah"];
        $nilai_raport=$_POST["nilai_raport"];
        $prog1=$_POST["prog1"];
        if ($nilai_raport >= 75){
                $status="Diterima";
            }else{
                $status="Ditolak";
            } 
        $paket="Belum Melakukan Daftar Ulang";
        $dosen="Tidak Diketahui";
        
        //Query input menginput data kedalam tabel pendaftaraan
        $sql="insert into pendaftaran (nama,email,tempat_lahir,tanggal_lahir,jk,kewarganegaraan,agama,no_telp,alamat,kode_pos,provinsi,kabupaten,kecamatan,pendidikan,sekolah,nilai_raport,prog1,status,paket,dosen) values
		('$nama','$email','$tempat_lahir','$tanggal_lahir','$jk','$kewarganegaraan','$agama','$no_telp','$alamat','$kode_pos','$provinsi','$kabupaten','$kecamatan','$pendidikan','$sekolah',$nilai_raport,'$prog1','$status','$paket','$dosen')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) { 
            echo "<div class='alert alert-success'> Selamat $nama anda telah berhasil mendaftar.</div>"; 
        }
        else {
            echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
        }
    }
    ?>
        <form id="form" method="post">
		<!-- Data Diri -->
            <div class="alert alert-primary">
                <strong>Data Diri</strong>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Lengkap"
						maxlength="30" required oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                </div>
                
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email"
						maxlength="30" required oninvalid="this.setCustomValidity('Email Tidak Boleh Kosong')" oninput="setCustomValidity('')">                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir"
						maxlength="20" required oninvalid="this.setCustomValidity('Tempat Lahir Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="YYYY/MM/DD"
						maxlength="10" required oninvalid="this.setCustomValidity('Tanggal Lahir Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select class="form-control" name="jk" id="jk" required>
                            <option value="">Pilih</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kewarganegaraan:</label>
                        <select class="form-control" name="kewarganegaraan" id="kewarganegaraan" required>
                            <option value="">Pilih</option>
                            <option value="WNI">Warga Negara Indonesia</option>
                            <option value="WNA">Warga Negara Asing</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama" id="agama" required>
                            <option value="">Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
               <div class="col-sm-5">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Masukan No Telp"
                        maxlength="12" required oninvalid="this.setCustomValidity('No Telp Tidak Boleh Kosong')" oninput="setCustomValidity('')" minlength="11" >                        
                    </div>
                </div> 
            </div>
			<!-- Data Alamat Asal -->
            <div class="alert alert-primary">
                <strong>Data Alamat Asal</strong>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea class="form-control" name="alamat" rows="2" id="alamat" placeholder="Masukan Alamat"
						maxlength="30" required oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Kode Pos:</label>
                        <input type="text" name="kode_pos" id="kode_pos" class="form-control" placeholder="Kode Pos"
						maxlength="5" required oninvalid="this.setCustomValidity('Kode Pos Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Masukan Provinsi"
						maxlength="20" required oninvalid="this.setCustomValidity('Provinsi Tidak Boleh Kosong')" oninput="setCustomValidity('')">                           
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kabupaten:</label>
                        <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Masukan Kabupaten"
						maxlength="20" required oninvalid="this.setCustomValidity('Kabupaten Tidak Boleh Kosong')" oninput="setCustomValidity('')">
					</div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kecamatan:</label>
                        <input  type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Masukan Kecamatan"
						maxlength="30" required oninvalid="this.setCustomValidity('Kecamatan Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                </div>

            </div>
			
			<!-- Data Pendidikan -->			
            <div class="alert alert-primary">
                <strong>Data Pendidikan</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pendidikan Terakhir:</label>
                        <select class="form-control" name="pendidikan" id="pendidikan" required>
							<option value="">Pilih</option>
                            <option value="SMA-IPA">SMA - IPA</option>
                            <option value="SMA-IPS">SMA - IPS</option>
                            <option value="SMK-IPA">SMK - IPA</option>
                            <option value="SMK-IPS">SMK - IPS</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Sekolah:</label>
                        <input type="text" name="sekolah" id="sekolah" class="form-control" placeholder="Masukan Nama Sekolah"
						maxlength="30" required oninvalid="this.setCustomValidity('Sekolah Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Rata-rata Nilai Rapor Kelas 12:</label>
                        <input type="text" name="nilai_raport" class="form-control" id="nilai_raport"
                            placeholder="Masukan Rata-rata nilai raport"
							maxlength="5" required oninvalid="this.setCustomValidity('Nilai Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                </div>
            </div>
            <div class="alert alert-primary">
                <strong>Pilihan Program Studi</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pilih Program Studi :</label>
                        <select class="form-control" name="prog1" id="prog1" required>
							<option value=""> Pilih Jurusan </option>
                            <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
                            <option value="S1 - Teknik Informatika">S1 - Teknik Informatika</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
    </div>
	<script src="script.js"></script>

     <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - PMB-Online.</small>
        </div>
    </footer>
    
</body>
</html>