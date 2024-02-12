<?php
error_reporting(0);
include 'koneksi.php';

$op =$_GET['op'];
switch ($op){
 
    default :ambildata();break;
    case 'daftar' :daftar();break;
    case 'ambildata' :ambildata();break;
	

    }

  
    
    function daftar (){
		global $koneksi;
        $nikuser = $_POST['nikuser'];
        $nikpmhon1 = $_POST['nikpmhon1'];
        $namapmhon1 = $_POST['namapmhon1'];
        $shdk1 = $_POST['shdk1'];
		 $data1 = $_POST['data1'];
		 $ket1 = $_POST['ket1'];
		 
$sql1 ="insert into  kk_perubahan_rincian (uuid,uuid_reg,data,nik,nama,shdk,ket) 
values ('','$nikuser','$data1','$nikpmhon1','$namapmhon1','$shdk1','$ket1')";
            $q1 = mysqli_query($koneksi,$sql1);
            
            
    						$time=date('H:i');
		 date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time));        
            
            
            if($q1){




      echo json_encode ('true');
}

    

}



 


 ?>