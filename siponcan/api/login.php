<?php
error_reporting(0);
include 'koneksi.php';

$op =$_GET['op'];
switch ($op){
    case '' :login ();break;
    default :login ();break;
   	case 'login' : login();break;
  
	

    }

  
 

    
   
	


  function login(){
   include 'koneksi.php';
	
        $nik = $_POST['nik'];
        $password = $_POST['password'];
     $token= $_POST['token'];
 
 
	$sql1 = "SELECT * FROM register WHERE nik = '$nik' AND pasword = '$password'";
	$q1 = mysqli_query($koneksi, $sql1);
 
$row=mysqli_fetch_array($q1);

if ($row['nik'] == $nik  AND $row['pasword'] == $password )
{
		$sql2 = "update  register set token= '$token'
    where  nik = '$nik'";
 $q2 = mysqli_query($koneksi,$sql2); 
    	
  
  
   
  
        echo json_encode ('ok');
		
	

    
    
}
    
	else {
        echo json_encode ('salah');
    }
			

 }
 

  
 

 


 ?>