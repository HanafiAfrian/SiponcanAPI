<?php
include '../../config/koneksi.php';
?>


<?php
session_start();
$nikuser = $_SESSION['nik'];
$sql1 = "SELECT * FROM  register WHERE nik = '$nikuser'";
$sql2 = mysqli_query($koneksi, $sql1);
$row = mysqli_fetch_array($sql2);


$nama = $row['nama'];


if(empty($_SESSION['nik'])){
	
 header('location:home');	
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    	<meta http-equiv="refresh" content="60" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat With Admin</title>
    <!-- css linked -->
    <link rel="stylesheet" href="modul/chatApp/css/messages.css">
	<meta http-equiv="refresh" content="70" />
    <!-- f	<meta http-equiv="refresh" content="30" />ontawesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
      <?php $username = $nikuser; 

     
     
     ?>
    <div class="container"></div>
    <div class="container"></div>
    <div id="container">
        <!-- header -->  <h3>
            
            <font color='white'>  <?php echo $username ?> (<?php echo $nama ?>) - Admin </h3></font>
        <div id="header">
       

   
     
     
     
     
     
     
     <?php
if(isset($_POST['submit']))
{

include '../../config/koneksi.php';

// Ambil Data yang Dikirim dari Form

$pesan = $_POST['pesan'];
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));


			$time=date('H:i');
		 date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));
	  $username = $nikuser; 
	     $query = "SELECT * FROM users WHERE 	nama_lengkap='$username'";
  $sql = mysqli_query($koneksi, $query);  
  $data = mysqli_fetch_array($sql);
  $token = $data['token'];
  

  
  

$sql11 ="insert into  chat (nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam) 
values ('$username','Admin','$username','Admin','$pesan','wr','0','$time')"; 
$q11 = mysqli_query($koneksi,$sql11);

$sq51 = " update chatgroup set pesan= '$pesan',
                                tanggal = '$tanggal'
    where  nm_grp = '$username'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);




    header("location: notifikasi"); 










}
?>
     
     
     
     
     
     
     
     
     
       <div id="mainSection">
     
    
     
        <?php
          $sql2 = " update chat set status= 'rd', 	bunyi ='1' 
    where  dari = '$username' AND kepada='Admin'";
		 $q2 = mysqli_query($koneksi,$sql2);
        
                  $sql24 = " update chat set status= 'rd', 	bunyi ='1' 
    where  dari = 'Admin' AND kepada='$username'";
		 $q24 = mysqli_query($koneksi,$sql24);
		 
		 
 $sql11 ="select * from  chat WHERE dari = '$username' AND kepada ='Admin' OR dari='Admin' AND kepada='$username' ORDER BY tanggal DESC "; 
           $q11= mysqli_query($koneksi, $sql11);
             while($row = mysqli_fetch_array($q11)){
                  if ($row['dari'] == $username   AND $row['kepada'] == 'Admin'  )
                  {
                   $pesan =  $row['pesan'];
                      $jam =  $row['jam'];
                         $tanggal =  $row['tanggal'];
                 
                 echo "<div class=responseCard outgoing>" ;
             echo "<div class=response>" ;
             
                echo "<h3 class=name>$nama</h3> " ;
           
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
             
                echo "<h3 class=name>Admin</h3> " ;
           
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