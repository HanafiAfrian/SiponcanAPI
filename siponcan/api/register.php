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
      
        $nama=addslashes($_POST['nama']);
        $nohp = $_POST['nohp'];
        $nik = $_POST['nik'];
        $email=addslashes($_POST['email']);
	 $password=addslashes($_POST['password']);		 
			 
			 
 $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));
        


 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 16);

$uuidhtl = "reg-$time1$uuidhtl0";


		$sql2 = "SELECT * FROM register WHERE nik = '$nik'  OR no_telp ='$nohp' ";
	$q12 = mysqli_query($koneksi, $sql2);

$row=mysqli_fetch_array($q12);

if ($row['nik'] == $nik )

 {
       echo json_encode ('false');
    }
    
else if ($row['no_telp'] == $nohp )

 {
       echo json_encode ('salah');
    }
else{	
		

$sql1 ="insert into  register (uuid,nama,no_telp,nik,email,pasword,token,foto,creat_at,status,konvirm) 
values ('$uuidhtl','$nama','$nohp','$nik','$email','$password','','user.png','$tanggal','Aktif','')";
            $q1 = mysqli_query($koneksi,$sql1);
            
            
    						$time=date('H:i');
		 date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time));        
            
             $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));
            
            if($q1){
                
 $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');
$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

 $sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('$uuidhtlgch','Admin','$nik','Admin','$nik','Selamat $nama , Anda telah tedaftar di Aplikasi Siponcan','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 


 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "cg-$time11223$uuidhtl01223";

 $sql55 ="insert into  chatgroup (id,nm_grp,nm_grp1,dari,kepada,pesan,jam,tanggal) 
values ('$uuidhtlgcg','$nik','Admin','Admin','$nik','Selamat $nama, Anda telah tedaftar di Aplikasi Siponcan','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql55); 



      echo json_encode ('true');
}

    }

}



 


 ?>