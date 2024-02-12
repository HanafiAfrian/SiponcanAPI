<?php
error_reporting(0);
include 'koneksi.php';
date_default_timezone_set("Asia/Jakarta"); // atur sendiri
$op =$_GET['op'];
switch ($op){
    case '' :ambildata();break;
    default :ambildata();break;
    case 'ambildata' :ambildata();break;


	

    }

  
    

 function ambildata(){
       global $koneksi;
           $tanggal = date('y-m-d');

       $sql1 ="select * from  actitvy WHERE tanggal ='$tanggal'";
        $q1= mysqli_query($koneksi, $sql1);
       while ($r1 = mysqli_fetch_array($q1)) {
            $hasil[] =array(
                'tanggal' =>$r1['tanggal'],
                   'hari' =>$r1['hari'],
                      'mulai' =>$r1['mulai'],
                         'selesai' =>$r1['selesai'],
                         'status' =>$r1['status'],
                   
               
            );
        }
         	   
       
        
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }

 


 ?>