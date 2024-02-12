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
        $data1 = $_POST['data1'];
        
        $pendsemula1 = $_POST['pendsemula1'];
        $pendmenjadi1 = $_POST['pendmenjadi1'];
        $pendperubahan1 = $_POST['pendperubahan1'];
		$pendket1 = $_POST['pendket1'];
		 
	 $peksemula1 = $_POST['peksemula1'];
	 $pekmenjadi1 = $_POST['pekmenjadi1'];		 
	 $pekperubahan1 = $_POST['pekperubahan1'];		 
	 $pekket1 = $_POST['pekket1'];
	 
	 $agamasemula1 = $_POST['agamasemula1'];		 
	 $agamamenjadi1 = $_POST['agamamenjadi1'];
	 $agamaperubahan1 = $_POST['agamaperubahan1'];
	 $agamaket1 = $_POST['agamaket1'];

	$lsemula1 = $_POST['lsemula1'];
	$lmenjadi1 = $_POST['lmenjadi1'];
	$lperubahan1 = $_POST['lperubahan1'];
	$lket1 = $_POST['lket1'];
		 	 
$sql1 ="insert into  kk_perubahan_perubahan (
uuid,uuid_reg,data,pendsemula,pendmenjadi,pendperubahan,pendket,
peksemula,pekmenjadi,pekperubahan,pekket,agamasemula,agamamenjadi,agamaperubahan,agamket,lsemula,lmenjadi,lperubahan,lket) 

values ('','$nikuser','$data1','$pendsemula1','$pendmenjadi1','$pendperubahan1','$pendket1','$peksemula1','$pekmenjadi1','$pekperubahan1','$pekket1',
'$agamasemula1','$agamamenjadi1','$agamaperubahan1','$agamaket1',

'$lsemula1','$lmenjadi1','$lperubahan1','$lket1'

)";
            $q1 = mysqli_query($koneksi,$sql1);
            
            
    						$time=date('H:i');
		 date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time));        
            
            
            if($q1){




      echo json_encode ('true');
}

    

}



 


 ?>