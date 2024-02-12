<?php
error_reporting(0);
include 'koneksi.php';

$op =$_GET['op'];
switch ($op){
    case '' :pilihprofil();break;
    default :pilihprofil();break;
    case 'ambildata' :ambildata();break;
    case 'create' :create();break;
    case 'pilihprofil' :pilihprofil();break;
    case 'daftar' :daftar();break;	   
    case 'gantipassword' :gantipassword();break;	   
      case 'konfirmemail' :konfirmemail();break;
     case 'konfirmpos' :konfirmpos();break;
  case 'ambilsendiri' :ambilsendiri();break;
    }
    
  
         	   
       
    

 function ambildata(){
       global $koneksi;
       
       	        $telepon= $_GET['telepon'];
       $sql1 ="select * from register WHERE  nik = '$telepon'  ";
        $q1= mysqli_query($koneksi, $sql1);
       while ($r1 = mysqli_fetch_array($q1)) {
            $hasil[] =array(
                'nama' =>$r1['nama'],
                 'no_telp' =>$r1['no_telp'],
              'nik' =>$r1['nik'],
                 'email' =>$r1['email']
               
               
            );
        }
         	   
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }
    

 function pilihprofil(){
       global $koneksi;
       
       	        $nik = $_GET['nik'];
       $sql1 ="select * from  riwayat WHERE  uuid_reg = '$nik'    ORDER BY creat_at  DESC";
        $q1= mysqli_query($koneksi, $sql1);
       while ($r1 = mysqli_fetch_array($q1)) {
            $hasil[] =array(
                'jenis' =>$r1['jenis'],
                 'pengajuan' =>$r1['pengajuan'],
              'status' =>$r1['status'],
                'creat_at' =>$r1['creat_at'],
                'id_pengaduan' =>$r1['id_pengaduan']
               
            );
        }
         	   
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }
 



  function daftar (){
  global $koneksi;
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$no_telp= $_POST['no_telp'];
$email= $_POST['email'];

            
  
      		$sql2 = " update  register set nama = '$nama',
      		
      		no_telp = '$no_telp',
      			email = '$email'
    where  nik = '$nik' ";
 $q2 = mysqli_query($koneksi,$sql2);
  
  
  
  
  
  
      
	           $data['data']['result'] = $hasil;
        echo json_encode($data);
		
 }



  function gantipassword (){
  global $koneksi;
$nik = $_POST['nik'];
$password = $_POST['password'];


            
  
      		$sql2 = " update  register set pasword = '$password'
    where  nik = '$nik' ";
 $q2 = mysqli_query($koneksi,$sql2);
  
  
  
  
  
  
      
	           $data['data']['result'] = $hasil;
        echo json_encode($data);
		
 }
 
 
 
 function konfirmemail (){
		global $koneksi;
      

        $id_pengaduan = $_POST['id_pengaduan'];
        $nik = $_POST['nik'];
        $email = addslashes($_POST['email']);
            $tanggal = date('y-m-d');

	 
			 
			 
    $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "krw-$time11223$uuidhtl01223"; 



 $sql55 ="INSERT INTO `konfirmasiriwayat` (`id`, `uuid_reg`, `id_pengaduan`, `email`, `telepon`, `alamat`, `ambilsendiri`,`creact-at`) 
values ('$uuidhtlgcg','$nik','$id_pengaduan','$email','','','','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql55); 



      echo json_encode ('true');
}





 function ambilsendiri (){
		global $koneksi;
      

        $id_pengaduan = $_POST['id_pengaduan'];
        $nik = $_POST['nik'];
        $email = $_POST['email'];
            $tanggal = date('y-m-d');

	 
			 
			 
    
			 
    $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "krw-$time11223$uuidhtl01223"; 


 $sql55 ="INSERT INTO `konfirmasiriwayat` (`id`, `uuid_reg`, `id_pengaduan`, `email`, `telepon`, `alamat`, `ambilsendiri`, `creact-at`) 
values ('$uuidhtlgcg','$nik','$id_pengaduan','','','','Ambil sendiri','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql55); 



      echo json_encode ('true');
}
 function konfirmpos (){
		global $koneksi;
      

        $id_pengaduan = $_POST['id_pengaduan'];
        $nik = $_POST['nik'];
        $alamat = addslashes($_POST['alamat']);
           $telp = addslashes($_POST['telp']);
            $tanggal = date('y-m-d');

	 
			 
			 
    
    $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "krw-$time11223$uuidhtl01223"; 



 $sql55 ="INSERT INTO `konfirmasiriwayat` (`id`, `uuid_reg`, `id_pengaduan`, `email`, `telepon`, `alamat`,`ambilsendiri`, `creact-at`) 
values ('$uuidhtlgcg','$nik','$id_pengaduan','','$telp','$alamat','','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql55); 



      echo json_encode ('true');
}

 ?>