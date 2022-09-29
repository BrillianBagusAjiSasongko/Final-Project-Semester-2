<?php
require_once __DIR__.'/vendor/autoload.php';
session_start();
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
   $profile = $_SESSION['access_profile'];
   echo "<img src='".$profile['image']."' width='200px'/><br>";
   echo "Selamat datang <b>".$profile['displayName']."(".$profile['emails'].")</b>, Anda telah berhasil login hotspot menggunakan akun google anda, ";
 } 
 else 
 {
 echo "<center>
 <h1>Selamat datang di login page with google auth</h1>
 <a href='auth.php'>Login Website</a>
 ";
 }
?>