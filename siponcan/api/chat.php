<?php
error_reporting(0);
include 'koneksi.php';

$op =$_GET['op'];
switch ($op){
    case '' :ambildata();break;
    default :ambildata();break;
    case 'ambildata' :ambildata();break;
      case 'pesan' :pesan();break;
     case 'pesanmitra' :pesanmitra();break;
     
        case 'ambildatamitra' :ambildatamitra();break;
 case 'hitungpesan' :hitungpesan();break;
  case 'hitungbunyi' :hitungbunyi();break;
  
    case 'hitungbunyimitra' :hitungbunyimitra();break;
   case 'updatebunyi' :updatebunyi();break;
    case 'updatebunyimitra' :updatebunyimitra();break;
 case 'hitungpesanmitra' :hitungpesanmitra();break;	

    }

      function pesan (){
  global $koneksi;
 $nama = $_POST['nama'];
$username = $_POST['username'];
		  $pesan= $_POST['pesan'];

			$time=date('H:i');
		 date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));	 	 
		 	 
$sql11 ="insert into  chat (dari,kepada,pesan,status,bunyi,jam) 
values ('$username','$nama','$pesan','wr','0','$time')"; 
$q11 = mysqli_query($koneksi,$sql11);
                $hasil ="true";
            
  
      		$sql2 = " update  chatgroup set pesan = '$pesan'
    where  nm_grp = '$username' AND nm_grp1 ='$nama'	";
 $q2 = mysqli_query($koneksi,$sql2);
  
  
  
  
  
  
    $sql332 = "SELECT * FROM tb_mitra  where  nama = '$nama'";
$q1332 = mysqli_query($koneksi, $sql332);
$row=mysqli_fetch_array($q1332);
$token = $row['token'];

include("fungsimumitra.php");
	$nama = $_POST['nama'];
$id_client = "$token";
$pesan = $_POST['pesan'];

$title ="MU-Mitra" ;
$body ="$username : $pesan";
$hasil = kirimPesan($id_client,$title,$body,$icon,$url);

      
	           $data['data']['result'] = $hasil;
        echo json_encode($data);
		
 }
    


      function pesanmitra (){
  global $koneksi;
 $nama = addslashes($_POST['nama']);
$username = addslashes($_POST['username']);
		  $pesan= addslashes($_POST['pesan']);

			$time=date('H:i');
		 date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'-1 hour'));



 $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');
$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";
		 	 
$sql11 ="insert into  chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam) 
values ('$uuidhtlgch','$username','$nama','$username','$nama','$pesan','wr','0','$time')"; 
$q11 = mysqli_query($koneksi,$sql11);
                $hasil ="true";
 
 
 	$sql2 = " update  chatgroup set pesan = '$pesan'
    where  nm_grp = '$username' AND nm_grp1 ='Admin'	";
 $q2 = mysqli_query($koneksi,$sql2);
  
 
 
                 $sql332 = "SELECT * FROM users  where  nama_lengkap = '$nama'";
$q1332 = mysqli_query($koneksi, $sql332);
$row=mysqli_fetch_array($q1332);
$token = $row['token'];

            
   include("fungsimutawif.php");

$nama ="$nama";
$id_client = "$token";
	  $pesan= $_POST['pesan'];

$title ="Mutawif ";
$body ="$username : $pesan";

$hasil = kirimPesan($id_client,$title,$body,$icon,$url);   
	           $data['data']['result'] = $hasil;
        echo json_encode($data);
		
 }


 function ambildata(){
       global $koneksi;
       
       	   $nama= $_GET['nama'];
       	     $username= $_GET['username'];
   $sql2 = " update chat set status= 'rd', 	bunyi ='1' 
    where  nm_grp1 = '$nama' AND nm_grp='$username' OR nm_grp = '$nama' AND nm_grp1='$username'";
		 $q2 = mysqli_query($koneksi,$sql2);
		 
		 
		 
		 
           $sql11 ="select * from  chat WHERE dari = '$username' AND kepada ='$nama' OR dari='$nama' AND kepada='$username' ORDER BY tanggal ASC "; 
           $q11= mysqli_query($koneksi, $sql11);
           

           
             while ($r1 = mysqli_fetch_array($q11)) {
                 
                 if ($r1['dari'] == $nama   AND $r1['kepada'] == $username  )
                 
              {   
            $hasil[] =array(
                'pesan' =>$r1['pesan'],
                'tanggal' =>$r1['tanggal'],
                'dari' =>$r1['dari'],
                 'jam' =>$r1['jam'],
                'kepada' =>$r1['kepada']
               
            );
}

 else
                 
              {   
            $hasil[] =array(
                'pesanbalas' =>$r1['pesan'],
                'tanggalbalas' =>$r1['tanggal'],
                'daribalas' =>$r1['dari'],
                 'jambalas' =>$r1['jam'],
                'kepadabalas' =>$r1['kepada']
               
            );
}


          



            
        }
        

     
   
        
        
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }

 
 
 
 
 
 
 function ambildatamitra(){
       global $koneksi;
       
       	   $nama= $_GET['nama'];
       	     $username= $_GET['username'];
  
		 
		    $sql2 = " update chat set status= 'rd', bunyi ='1' 
    where  dari = '$nama' AND Kepada ='$username' ";
		 $q2 = mysqli_query($koneksi,$sql2);
		 
		 
		 
           $sql11 ="select * from  chat WHERE dari = '$username' AND kepada ='$nama' OR dari='$nama' AND kepada='$username' ORDER BY tanggal ASC "; 
           $q11= mysqli_query($koneksi, $sql11);
           

           
             while ($r1 = mysqli_fetch_array($q11)) {
                 
                 if ($r1['dari'] == $nama   AND $r1['kepada'] == $username  )
                 
              {   
            $hasil[] =array(
                'pesan' =>$r1['pesan'],
                'tanggal' =>$r1['tanggal'],
                'dari' =>$r1['dari'],
                 'jam' =>$r1['jam'],
                'kepada' =>$r1['kepada']
               
            );
}

 else
                 
              {   
            $hasil[] =array(
                'pesanbalas' =>$r1['pesan'],
                'tanggalbalas' =>$r1['tanggal'],
                'daribalas' =>$r1['dari'],
                 'jambalas' =>$r1['jam'],
                'kepadabalas' =>$r1['kepada']
               
            );
}


          



            
        }
        

     
   
        
        
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }
 
 function hitungpesan(){
        global $koneksi;
       
        $nama= $_GET['nama'];
 $sql1 ="select * from  chat WHERE status = 'wr' AND	nm_grp1 = '$nama'    ";
        $q1= mysqli_query($koneksi, $sql1);
        $count = mysqli_num_rows($q1);
       while ($r1 = mysqli_fetch_array($q1)) ;
            $hasil[] =array(
                
                'jumlah' => $count,
                          
            );
          
        
         	  
            
            
            
            
            
        
        $data['data']['result'] = $hasil;
        echo json_encode($data);
 }
 
  
  
  
  function hitungbunyi(){
        global $koneksi;
       
       	    $nama= $_GET['nama'];
 $sql1 ="select * from  chat WHERE bunyi = '1' AND status = 'wr' AND	nm_grp1 = '$nama'    ";
        $q1= mysqli_query($koneksi, $sql1);
        $count = mysqli_num_rows($q1);
       while ($r1 = mysqli_fetch_array($q1)) ;
            $hasil[] =array(
                
                'jumlahbunyi' => $count,
                          
            );
          
        
         	  
            
            
            
            
            
        
        $data['data']['result'] = $hasil;
        echo json_encode($data);
 }
  
  
  
  
  function hitungbunyimitra(){
        global $koneksi;
       
       	   $nama= $_GET['nama'];
 $sql1 ="select * from  chat WHERE bunyi = '1' AND status = 'wr' AND	kepada = '$nama'    ";
        $q1= mysqli_query($koneksi, $sql1);
        $count = mysqli_num_rows($q1);
       while ($r1 = mysqli_fetch_array($q1)) ;
            $hasil[] =array(
                
                'jumlahbunyi' => $count,
                          
            );
          
        
         	  
            
            
            
            
            
        
        $data['data']['result'] = $hasil;
        echo json_encode($data);
 }
  
  
      function updatebunyi (){
  global $koneksi;

		       	   $nama= $_POST['nama'];

	 	 
   $sql2 = " update chat set bunyi= '1'
    where  status = 'wr' AND	nm_grp1 = '$nama' ";
		 $q2 = mysqli_query($koneksi,$sql2);
            
      
	           $data['data']['result'] = $hasil;
        echo json_encode($data);
		
 }
  
     function updatebunyimitra (){
  global $koneksi;

		       	   $nama= $_POST['nama'];

	 	 
   $sql2 = " update chat set bunyi= '1'
    where  status = 'wr' AND	kepada = '$nama' ";
		 $q2 = mysqli_query($koneksi,$sql2);
            
      
	           $data['data']['result'] = $hasil;
        echo json_encode($data);
		
 }
  
  
  
  
 function hitungpesanmitra(){
        global $koneksi;
       
       	    $nama= $_GET['nama'];
 $sql1 ="select * from  chat WHERE status = 'wr' AND	kepada = '$nama'    ";
        $q1= mysqli_query($koneksi, $sql1);
        $count = mysqli_num_rows($q1);
       while ($r1 = mysqli_fetch_array($q1)) ;
            $hasil[] =array(
                
                'jumlahchat' => $count,
                          
            );
          
        
         	  
            
            
            
            
            
        
        $data['data']['result'] = $hasil;
        echo json_encode($data);
 }
 
 
 ?>