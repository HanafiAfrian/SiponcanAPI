<?php
error_reporting(0);
include 'koneksi.php';

$op =$_GET['op'];
switch ($op){
    case '' :login ();break;
    default :login ();break;
   	case 'login' : login();break;
     	case 'konfirm' : konfirm();break;
	

    }

  
 

    
   
	


  function login(){
   include 'koneksi.php';
	
        $nik = $_POST['nik'];
        $no_telp = $_POST['no_telp'];

 
 
	$sql1 = "SELECT * FROM register WHERE nik = '$nik' AND no_telp = '$no_telp'";
	$q1 = mysqli_query($koneksi, $sql1);
 
$row=mysqli_fetch_array($q1);

if ($row['nik'] == $nik  AND $row['no_telp'] == $no_telp )
{
 
    	
  
  
   
  
        echo json_encode ('ok');
		
	

    
    
}
    
	else {
        echo json_encode ('salah');
    }
			

 }
 

   function konfirm(){
   include 'koneksi.php';
	
        $nik = $_POST['nik'];
        $password = $_POST['password'];

 
 
$sql2 = " update register set pasword= '$password'
    where  nik = '$nik'  ";
		 $q2 = mysqli_query($koneksi,$sql2);
            

if ($q2)
{
 
    	
  
  
   
  
        echo json_encode ('ok');
		
	

    
    
}
    
	else {
        echo json_encode ('salah');
    }
			

 }
 

 

 


 ?>