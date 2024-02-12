<?php
error_reporting(0);
include 'koneksi.php';

$op =$_GET['op'];
switch ($op){
    case '' :ambildata();break;
    default :ambildata();break;
    case 'ambildata' :ambildata();break;
      case 'pesan' :pesan();break;
 case 'hitungpesan' :hitungpesan();break;
case 'ambildatamitra' :ambildatamitra();break;
	

    }

      function pesan (){
  global $koneksi;
 $nama = $_POST['nama'];
$username = $_POST['username'];
		  $pesan= $_POST['pesan'];

			$time=date('H:i');
		 date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));	 	 
		 	 
$sql11 ="insert into  chat (dari,kepada,pesan,jam) 
values ('$username','$nama','$pesan','$time')"; 
$q11 = mysqli_query($koneksi,$sql11);
                $hasil ="true";
            
      
	           $data['data']['result'] = $hasil;
        echo json_encode($data);
		
 }
    

 function ambildata(){
       global $koneksi;
       
       	   $nama= $_GET['nama'];
       	     $username= $_GET['username'];
      
           $sql11 ="select * from  chatgroup WHERE  kepada='$nama' OR dari='$nama' ORDER BY tanggal DESC "; 
           $q11= mysqli_query($koneksi, $sql11);
           
  $count = mysqli_num_rows($q11);
           
             while ($r1 = mysqli_fetch_array($q11)) {
                 
                 
                 
                 
            $hasil[] =array(
                'pesan' =>$r1['pesan'],
                'tanggal' =>$r1['tanggal'],
                'dari' =>$r1['dari'],
                 'jam' =>$r1['jam'],
                'kepada' =>$r1['kepada'],
                 'nm_grp' =>$r1['nm_grp'],
                  'nm_grp1' =>$r1['nm_grp1'],
                'jumlah' => $count/$count,
            );
 $sql1 ="select * from   chat WHERE status='wr'  AND nm_grp = '$r1[nm_grp1]' AND nm_grp1 ='$r1[nm_grp]'

 
 ";
        $q1= mysqli_query($koneksi, $sql1);
         $count = mysqli_num_rows($q1);
   
            $hasil[] =array(
                 'jumlahpesan' => $count,
              
      );
      
      
      $sql1 ="select * from   chat WHERE status='wr' OR status='rd' AND nm_grp1 = '$r1[nm_grp]' AND nm_grp ='$r1[nm_grp1]' 

 
 ";
        $q1= mysqli_query($koneksi, $sql1);
         $count = mysqli_num_rows($q1);
   
            $hasil[] =array(
                 'jumlahpesan1' => $count,
              
      );
          
      
         
        }
       

     
   
        
        
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }






 function ambildatamitra(){
       global $koneksi;
       
       	   $nama= $_GET['nama'];
       	     $username= $_GET['username'];
      
           $sql11 ="select * from  chatgroup WHERE  kepada='$nama' OR dari='$nama' ORDER BY tanggal DESC "; 
           $q11= mysqli_query($koneksi, $sql11);
           
  $count = mysqli_num_rows($q11);
           
             while ($r1 = mysqli_fetch_array($q11)) {
                 
                 
                 
                 
            $hasil[] =array(
                'pesan' =>$r1['pesan'],
                'tanggal' =>$r1['tanggal'],
                'dari' =>$r1['dari'],
                 'jam' =>$r1['jam'],
                'kepada' =>$r1['kepada'],
                 'nm_grp' =>$r1['nm_grp'],
                  'nm_grp1' =>$r1['nm_grp1'],

            );
 $sql1 ="select * from   chat WHERE status='wr'  AND dari = '$r1[dari]' AND kepada ='$r1[kepada]'

 
 ";
        $q1= mysqli_query($koneksi, $sql1);
         $count = mysqli_num_rows($q1);
   
            $hasil[] =array(
                 'jumlahpesan' => $count,
              
      );
      
      
      $sql1 ="select * from   chat WHERE status='wr' OR status='rd' AND dari = '$r1[kepada]' AND kepada ='$r1[dari]' 

 
 ";
        $q1= mysqli_query($koneksi, $sql1);
         $count = mysqli_num_rows($q1);
   
            $hasil[] =array(
                 'jumlahpesan1' => $count,
              
      );
          
      
         
        }
       

     
   
        
        
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }








 function hitungpesan(){
       global $koneksi;
       
       	   $nama= $_GET['nama'];
       	     $username= $_GET['username'];
      
           $sql11 ="select * from  chat WHERE dari = '$username' AND kepada ='$nama' OR dari='$nama' AND kepada='$username' ORDER BY tanggal ASC"; 
           $q11= mysqli_query($koneksi, $sql11);
           
  $count = mysqli_num_rows($q11);
           
             while ($r1 = mysqli_fetch_array($q11)) {
                 
                 
                 
                 
            $hasil[] =array(
                'pesan' =>$r1['pesan'],
                'tanggal' =>$r1['tanggal'],
                'dari' =>$r1['dari'],
                 'jam' =>$r1['jam'],
                'kepada' =>$r1['kepada'],
                 'nm_grp' =>$r1['nm_grp'],
                  'nm_grp1' =>$r1['nm_grp1'],
                'jumlah' => $count,
            );

            
        }
       

     
   
        
        
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }

 ?>