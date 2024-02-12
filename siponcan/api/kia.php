<?php
error_reporting(0);
include 'koneksi.php';

$op =$_GET['op'];
switch ($op){
    case '' :pilihprofil();break;
    default :ambildata();break;
    case 'ambildata' :ambildata();break;
    case 'create' :create();break;
    case 'pilihprofil' :pilihprofil();break;
 case 'hitungkonfirm' :hitungkonfirm();break;
   case 'updatekonfirm' :updatekonfirm();break;
    }
    
  
         	   
       
    

 function ambildata(){
       global $koneksi;
       
       	        $nikuser= $_GET['nikuser'];
       	      
       	        
       $sql1 ="select * from  kia WHERE uuid_reg='$nikuser' AND konvirm='1' ";
        $q1= mysqli_query($koneksi, $sql1);
           $count = mysqli_num_rows($q1);
       while ($r1 = mysqli_fetch_array($q1)) {
            $hasil[] =array(
                'uuid_reg' =>$r1['uuid_reg'],
               'create-at' =>$r1['create-at'] ,
            'jumlah' => $count,
               
            );
        }
         	   
        $data['data']['result'] = $hasil;
        echo json_encode($data);
        
     
    }

 function hitungkonfirm(){
        global $koneksi;
       
        $nikuser= $_GET['nama'];
 $sql1 ="select * from  kia WHERE uuid_reg = '$nikuser' AND	konvirm = '1'    ";
        $q1= mysqli_query($koneksi, $sql1);
        $count = mysqli_num_rows($q1);
       while ($r1 = mysqli_fetch_array($q1)) ;
            $hasil[] =array(
                
                'jumlah' => $count,
                          
            );
          

        $data['data']['result'] = $hasil;
        echo json_encode($data);
 }
 

     function updatekonfirm (){
  global $koneksi;

		       	   $nama= $_POST['nama'];

	 	 
   $sql2 = " update kia set konvirm= '0'
    where  	uuid_reg = '$nama' ";
		 $q2 = mysqli_query($koneksi,$sql2);
            
      
	           $data['data']['result'] = $hasil;
        echo json_encode($data);
		
 }
  






 function pilihprofil(){
       global $koneksi;
       
       	        $nik = $_GET['nik'];
       $sql1 ="select * from register WHERE  nik = '$nik'  ";
        $q1= mysqli_query($koneksi, $sql1);
       while ($r1 = mysqli_fetch_array($q1)) {
            $hasil[] =array(
                'nama' =>$r1['nama'],
                 'no_telp' =>$r1['no_telp'],
              'nik' =>$r1['nik']
               
               
            );
        }
         	   
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }
 


 ?>