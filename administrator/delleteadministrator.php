<?php

  include "koneksi.php";

$id_login = $_GET['id_login'];




$sql = "DELETE FROM  login WHERE id_login='".$id_login."'";
$sql2 = mysqli_query($koneksi, $sql); 

 
  header("location: administrator.php"); 


?>