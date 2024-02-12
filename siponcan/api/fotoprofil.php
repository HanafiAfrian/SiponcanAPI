<?php
error_reporting(0);
include 'koneksi.php';
date_default_timezone_set("Asia/Jakarta"); // atur sendiri
$op =$_GET['op'];
switch ($op){
    case '' :ambildata();break;
    default :ambildata();break;
    case 'ambildata' :ambildata();break;

    case 'ambilgambar' :ambilgambar();break;
      case 'ambilsplash' :ambilsplash();break;
	

    }

  
    

 function ambildata(){
       global $koneksi;
          
       $sql1 ="select * from  berita  ";
        $q1= mysqli_query($koneksi, $sql1);
       while ($r1 = mysqli_fetch_array($q1)) {
            $hasil[] =array(
                 'id' =>$r1['id'],
                'judul' =>$r1['judul'],
                'judul2' =>$r1['judul2'],
                  'judul3' =>$r1['judul3'],
                 'tubnail' =>$r1['tubnail']
            );
        }
         	   
       
        
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }

 

 function ambilgambar(){
       global $koneksi;
           $id= $_GET['id'];
       $sql1 ="select * from  berita WHERE id = '$id' ";
        $q1= mysqli_query($koneksi, $sql1);
       while ($r1 = mysqli_fetch_array($q1)) {
            $hasil[] =array(
              'id' =>$r1['id'],
                 'gambar1' =>$r1['gambar1'],

            );
        }
         	   
       
        
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }
    
    
    
     function ambilsplash(){
       global $koneksi;
           $id= $_GET['id'];
       $sql1 ="select * from  berita WHERE id = '$id' ";
        $q1= mysqli_query($koneksi, $sql1);
       while ($r1 = mysqli_fetch_array($q1)) {
            $hasil[] =array(
              'id' =>$r1['id'],
                 'gambar1' =>$r1['gambar1'],

            );
        }
         	   
       
        
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }
    
    
 ?>