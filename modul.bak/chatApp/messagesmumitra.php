<?php
 include "koneksi.php";
 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    	<meta http-equiv="refresh" content="30" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <!-- css linked -->
    <link rel="stylesheet" href="css/messages.css">
	<meta http-equiv="refresh" content="70" />
    <!-- f	<meta http-equiv="refresh" content="30" />ontawesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
      <?php $username = $_GET['username']; 
 
     
     
     ?>
    <div class="circle"></div>
    <div class="circle circle2"></div>
    <div id="container">
        <!-- header -->  <h3>
            
            <font color='white'>Mutawif - <?php echo $username ?></h3></font>
        <div id="header">
       

   
     
     
     
     
     
     
     <?php
if(isset($_POST['submit']))
{

 include "koneksi.php";

// Ambil Data yang Dikirim dari Form

$pesan = $_POST['pesan'];



			$time=date('H:i');
		 date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));
	    $username = $_GET['username'];
	     $query = "SELECT * FROM tb_mitra WHERE 	nama='$username'";
  $sql = mysqli_query($koneksi, $query);  
  $data = mysqli_fetch_array($sql);
  $token = $data['token'];
  


  
  

$sql11 ="insert into  chat (nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam) 
values ('Mutawif','$username','Mutawif','$username','$pesan','wr','0','$time')"; 
$q11 = mysqli_query($koneksi,$sql11);

if ($q11){

include("fungsimumitra.php");
$nama ="$username";
$id_client = "$token";
	  $pesan= $pesan;

$title ="Mu-Mitra ";
$body ="Mu-Mitra Admin : $pesan";

$hasil = kirimPesan($id_client,$title,$body,$icon,$url);   
	           $data['data']['result'] = $hasil;
        echo json_encode($data) ; 


   




}

 header("location: messagesmumitra.php?username=$username"); 

}
?>
     
     
     
     
     
     
     
     
     
       <div id="mainSection">
     
    
     
        <?php
          $sql2 = " update chat set status= 'rd', 	bunyi ='1' 
    where  dari = '$username' AND kepada='Mutawif'";
		 $q2 = mysqli_query($koneksi,$sql2);
        
        
 $sql11 ="select * from  chat WHERE dari = 'Mutawif' AND kepada ='$username' OR dari='$username' AND kepada='Mutawif' ORDER BY tanggal DESC "; 
           $q11= mysqli_query($koneksi, $sql11);
             while($row = mysqli_fetch_array($q11)){
                  if ($row['dari'] == 'Mutawif'   AND $row['kepada'] == $username  )
                  {
                   $pesan =  $row['pesan'];
                      $jam =  $row['jam'];
                         $tanggal =  $row['tanggal'];
                 
                 echo "<div class=responseCard outgoing>" ;
             echo "<div class=response>" ;
             
                echo "<h3 class=name>Mutawif</h3> " ;
           
                echo " <p class=messages>  $pesan </p> <font size='2'>$tanggal</font>" ;
                echo " <br> <?php echo  ?>" ;
            echo " </div>" ;
        echo " </div> " ;
                 
                 
                 
                     
                 }
                 
                 else {
                     
                      $pesanbalas =  $row['pesan'];
                      $jambalas =  $row['jam'];
                         $tanggalbalas =  $row['tanggal'];
                            echo "<div class=request incoming>" ;
             echo "<div class=response>" ;
             
                echo "<h3 class=name>$username</h3> " ;
           
                echo " <p class=messages>  $pesanbalas</p> <font size='2'>$tanggalbalas</font>" ;
                echo " <br> <?php echo  ?></p>" ;
            echo " </div>" ;
        echo " </div> " ;
                     
                 }
             }
             
           
?>
    <!-- main section => messages section -->
  
        <!-- incoming -->
     

        <!-- outgoing -->
       
        
        
        
    </div>



    <!-- input messages -->
    <form method="post" action="" >
    <div id="messagingTypingSection">


      
        
        <input type="text" name="pesan" placeholder="Ketik Pesan ..." id="typingField" autocomplete="off">
        
        
        <input type="submit" value="Send" id="sendMessage" name="submit">
    </div>
        </form>
    </div>
   

</body>

</html>