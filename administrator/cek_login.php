<?php
include "koneksi.php";



$username = $_POST['username'];
$pass     = $_POST['password'];
$pass     = $_POST['password'];

$sql1 = "SELECT * FROM login WHERE username = '$username' AND password='$pass'";
$sql2 = mysqli_query($koneksi, $sql1);
$row = mysqli_fetch_array($sql2);

session_start();
if ($_SESSION["code"] != $_POST["kode"]) {
  //jika code captcha salah mmaka akan kembali ke halaman sebelumnya
  echo "<script>alert('captcha yang anda masukkan salah');window.location='index.php';</script>";
} else if ($row['username'] == $username and $row['password'] == $pass) {
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  header('location:pengaduan.php');
} else {
  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>";
  echo "<br>";
  echo "<input class='btn btn-blue' type=button value='ULANGI LAGI'
  onclick=location.href='index.php'></a></center>";
}
