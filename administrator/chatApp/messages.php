<?php
 include "koneksi.php";
 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    	<meta http-equiv="refresh" content="360" />
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
  $result = mysqli_query($koneksi,"SELECT * FROM `register` WHERE nik='$username'");
    while($row44 = mysqli_fetch_array($result))
        $nama= $row44['nama'];

     
     
     ?>

    <div id="container">
        <!-- header -->  <h3>
            
            <font color='white'>Admin -  <?php echo $username ?> (<?php echo $nama ?>)</h3></font>
        <div id="header">
       

   
     
     
     
     
     
     
     <?php
if(isset($_POST['submit']))
{

 include "koneksi.php";

// Ambil Data yang Dikirim dari Form

$pesan = addslashes( $_POST['pesan']);
$time=date('H:i');

$time = date('H:i', strtotime($time.'+1 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'-1 hour'));


			$time=date('H:i');

$time = date('H:i', strtotime($time.'-1 hour'));
	    $username = $_GET['username'];
	     $query = "SELECT * FROM users WHERE 	nama_lengkap='$username'";
  $sql = mysqli_query($koneksi, $query);  
  $data = mysqli_fetch_array($sql);
  $token = $data['token'];
  

  
   $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');
$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

$sql11 ="insert into  chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('$uuidhtlgch','Admin','$username','Admin','$username','$pesan','wr','0','$time', '$tanggal')"; 
$q11 = mysqli_query($koneksi,$sql11);

$sq51 = " update chatgroup set pesan= '$pesan',
                                tanggal = '$tanggal'
    where  nm_grp = '$username'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);


   $sql332 = "SELECT * FROM register  where  nik = '$username'";
            $q1332 = mysqli_query($koneksi, $sql332);
            $row = mysqli_fetch_array($q1332);
            $token = $row['token'];

            include("../fungsisiponcan.php");
            $nama = "hanafi";
            $id_client = "$token";
            $pesan = "$pesan";

            $title = "Siponcan Info";
            $body = $pesan;
            $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


            header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");






    header("location: messages.php?username=$username"); 










}
?>
     
     
     
     
     
     
     
     
     
       <div id="mainSection">
     
    
     
        <?php
          $sql2 = " update chat set status= 'rd', 	bunyi ='1' 
    where  dari = '$username' AND kepada='Admin'";
		 $q2 = mysqli_query($koneksi,$sql2);
        
        
 $sql11 ="select * from  chat WHERE dari = 'Admin' AND kepada ='$username' OR dari='$username' AND kepada='Admin' ORDER BY tanggal DESC "; 
           $q11= mysqli_query($koneksi, $sql11);
             while($row = mysqli_fetch_array($q11)){
                  if ($row['dari'] == 'Admin'   AND $row['kepada'] == $username  )
                  {
                   $pesan =  $row['pesan'];
                      $jam =  $row['jam'];
                         $tanggal =  $row['tanggal'];
                 
                 echo "<div class=responseCard outgoing>" ;
             echo "<div class=response>" ;
             
                echo "<h3 class=name>Admin</h3> " ;
           
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