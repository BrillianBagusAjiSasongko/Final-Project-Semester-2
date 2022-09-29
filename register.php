<?php
    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $db         = "final_project";
    
    $koneksi    = mysqli_connect($host,$user,$pass,$db);

    $nama_lengkap           = "";
    $email                  = "";
    $username               = "";
    $password               = "";
    $konfirmasi_password    = "";
    $err                    = "";
    $sukses                 = "";

    if(isset($_POST['simpan'])) {
        $nama_lengkap           = $_POST['nama_lengkap'];
        $email                  = $_POST['email'];
        $username               = $_POST['username'];
        $password               = $_POST['password'];
        $konfirmasi_password    = $_POST['konfirmasi_password'];
    }

    if ($nama_lengkap == '' or $email == '' or $username == '' or $password == '' or $konfirmasi_password == ''){
        $err    .= "<li>Silakan Masukkan Data Lebih Dahulu</li>";
    }

    //cek database email ganda
    if($email != '') {
        $sql1   = "select email from user where email = '$email'";
        $q1     = mysqli_query($koneksi, $sql1);
        $n1     = mysqli_num_rows($q1);
        if($n1 > 0) {
            $err    .= "<li>Email Yang Kamu Masukkan Sudah Terdaftar</li>";
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $err     .= "<li>Email Yang Kamu Masukkan Tidak Valid</li>";
        }
    }

    //Cek Password
    if($password != $konfirmasi_password) {
        $err    .= "<li>Passoword Dan Konfirmasi Password Tidak Sesuai</li>";
    }

    if(strlen($password)>1 && strlen($password)<6){
        $err    .= "<li>Password Kurang Panjang</li>";
    }

    if(empty($err)){ 
        $sql1    = "insert into user(nama_lengkap,username,email,password) values ('$nama_lengkap','$username','$email',md5($password))";
        $q1      = mysqli_query($koneksi,$sql1);
        if ($q1){
            $sukses .= "Pendaftaran Berhasil. silakan Kembali Ke Halaman Login.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<<body class="body-reg">
    <div class="login-box">
        <p class="kepala">Registrasi Akun</p>
        <?php if ($err) {echo "<div class='error'><ul>$err</ul></div>";} ?>
        <?php if ($sukses) {echo "<div class='sukses'><ul>$sukses</ul></div>";} ?>
        <form action="" method="POST">
            <label class="label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="" />
            <label class="label">Email</label>
                <input type="text" name="email" value="" />
            <label class="label">Username</label>
                <input type="text" name="username" value="" />
            <label class="label" for="password">Password</label>
                <input type="password" name="password" value="" />
            <label class="label" for="konfirmasi_password">Konfirmasi Password</label>
                <input type="password" name="konfirmasi_password" value="" />
                <input class="tbl-biru" type="submit" name="simpan" value="Daftar">
            <p><center>Sudah Punya Akun? <a href="login.php">Masuk</center></a></p>
        </form>
    </div>
</body>
</html>