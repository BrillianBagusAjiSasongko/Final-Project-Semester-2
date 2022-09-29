<?php
    session_start();
    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $db         = "final_project";
    
    $koneksi    = mysqli_connect($host,$user,$pass,$db);

    $username               = "";
    $password               = "";
    $konfirmasi_password    = "";
    $err                    = "";
    $sukses                 = "";

    if(isset($_POST['login'])) {
        $username               = $_POST['username'];
        $password               = $_POST['password'];

        if($username == '' or $password == ''){
            $err    .= "<li>Masukkan Username atau Password yang sesuai</li>";
        }
        else{
            $sql1   = "select * from user where username = '$username'";
            $q1     = mysqli_query($koneksi, $sql1);
            $r1     = mysqli_fetch_array($q1);
            $n1     = mysqli_num_rows($q1);

            if ($n1 > 1 && $r1['password'] != md5($password)){
                $err    .= "<li>Password Tidak Sesuai</li>";
            }

            if ($n1 < 1){
                $err    .= "<li>Akun Tidak Ditemukan</li>";
            }
            
            if(empty($err)){
                $_SESSION['user_username'] = $username;
                header("location:home.php");
                exit;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="body-reg">
    <div class="login-box">
        <p class="kepala">Login</p>
        <?php if ($err) {echo "<div class='error'><ul>$err</ul></div>";} ?>
        <form action="" method="POST">
            <label class="label" for="username">Username</label>
                <input type="username" name="username" value="" />
            <label class="label" for="Password">Password</label>
                <input type="password" name="password" value="" />
                <input class="tbl-biru" type="submit" name="login" value="Login">
            <p class="label"><center>Tidak Punya Akun? <a href="register.php">Daftar</center></a></p>
        </form>
    </div>
</div>    
</body>
</html>