
	<html>
	<head>
	<title>:: Administrator ::</title>


<?php
// PROSES UPDATE KTP        
  
if(isset($_POST['submitktp']))
{

 include "koneksi.php";



$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];
$status = $_POST['status'];

$sql1 = "UPDATE tb_ktp SET 	status ='".$status."'
	WHERE uuid='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);
    
 $sql1 = "UPDATE tb_pengaduan SET 	status ='".$status."'
	WHERE uuid_pengaduan='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);  
    
    
    
    
    
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengaduan Online Anda $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Status Pengaduan Online Anda $status',
                                tanggal = '$tanggal'
    where  nm_grp = '$uuid_reg'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);



    header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg"); 

}
?>        
    

<?php
// PROSES UPDATE surat_pindah        
  
if(isset($_POST['submitSP']))
{

 include "koneksi.php";



$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];
$status = $_POST['status'];

$sql1 = "UPDATE surat_pindah SET 	status ='".$status."'
	WHERE uuid='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);
    
 $sql1 = "UPDATE tb_pengaduan SET 	status ='".$status."'
	WHERE uuid_pengaduan='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);  
    
    
    
    
    
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengaduan Online Anda $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Status Pengaduan Online Anda $status',
                                tanggal = '$tanggal'
    where  nm_grp = '$uuid_reg'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);



    header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg"); 

}
?>    


<?php
// PROSES UPDATE tb_aktecerai        
  
if(isset($_POST['submitAKCER']))
{

 include "koneksi.php";



$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];
$status = $_POST['status'];

$sql1 = "UPDATE tb_aktecerai SET 	status ='".$status."'
	WHERE uuid='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);
    
 $sql1 = "UPDATE tb_pengaduan SET 	status ='".$status."'
	WHERE uuid_pengaduan='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);  
    
    
    
    
    
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengaduan Online Anda $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Status Pengaduan Online Anda $status',
                                tanggal = '$tanggal'
    where  nm_grp = '$uuid_reg'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);



    header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg"); 

}
?>        
    
    

<?php
// PROSES UPDATE tb_aktelahir        
  
if(isset($_POST['submitAKKEL']))
{

 include "koneksi.php";



$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];
$status = $_POST['status'];

$sql1 = "UPDATE tb_aktelahir SET 	status ='".$status."'
	WHERE uuid='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);
    
 $sql1 = "UPDATE tb_pengaduan SET 	status ='".$status."'
	WHERE uuid_pengaduan='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);  
    
    
    
    
    
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengaduan Online Anda $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Status Pengaduan Online Anda $status',
                                tanggal = '$tanggal'
    where  nm_grp = '$uuid_reg'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);



    header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg"); 

}
?>   




<?php
// PROSES UPDATE tb_aktekematian        
  
if(isset($_POST['submitAKDEAD']))
{

 include "koneksi.php";



$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];
$status = $_POST['status'];

$sql1 = "UPDATE tb_aktekematian SET 	status ='".$status."'
	WHERE uuid='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);
    
 $sql1 = "UPDATE tb_pengaduan SET 	status ='".$status."'
	WHERE uuid_pengaduan='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);  
    
    
    
    
    
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengaduan Online Anda $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Status Pengaduan Online Anda $status',
                                tanggal = '$tanggal'
    where  nm_grp = '$uuid_reg'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);



    header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg"); 

}
?>   
    
    
<?php
// PROSES UPDATE tb_aktekawin        
  
if(isset($_POST['submitAKWIN']))
{

 include "koneksi.php";



$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];
$status = $_POST['status'];

$sql1 = "UPDATE tb_aktekawin SET 	status ='".$status."'
	WHERE uuid='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);
    
 $sql1 = "UPDATE tb_pengaduan SET 	status ='".$status."'
	WHERE uuid_pengaduan='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);  
    
    
    
    
    
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengaduan Online Anda $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Status Pengaduan Online Anda $status',
                                tanggal = '$tanggal'
    where  nm_grp = '$uuid_reg'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);



    header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg"); 

}
?>   
    
    
       
<?php
// PROSES UPDATE PENAMBHAN DATA AANK PADA KARTU KELUARGA        
  
if(isset($_POST['submitPDAPKK']))
{

 include "koneksi.php";



$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];
$status = $_POST['status'];

$sql1 = "UPDATE kk_penambahan_anak SET 	status ='".$status."'
	WHERE uuid='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);
    
 $sql1 = "UPDATE tb_pengaduan SET 	status ='".$status."'
	WHERE uuid_pengaduan='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);  
    
    
    
    
    
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengaduan Online Anda $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Status Pengaduan Online Anda $status',
                                tanggal = '$tanggal'
    where  nm_grp = '$uuid_reg'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);



    header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg"); 

}
?> 

       
<?php
// PROSES UPDATE KARTU KELUARGA HILANG ATARU RUSAK    
  
if(isset($_POST['submitKKHR']))
{

 include "koneksi.php";



$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];
$status = $_POST['status'];

$sql1 = "UPDATE kk_hilang SET 	status ='".$status."'
	WHERE uuid='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);
    
 $sql1 = "UPDATE tb_pengaduan SET 	status ='".$status."'
	WHERE uuid_pengaduan='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);  
    
    
    
    
    
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengaduan Online Anda $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Status Pengaduan Online Anda $status',
                                tanggal = '$tanggal'
    where  nm_grp = '$uuid_reg'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);



    header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg"); 

}
?> 


<?php
// PROSES UPDATE PERUBAHAN DATA ATAU PERBAIKAN DATA DI KARTU KELUARGA      
  
if(isset($_POST['submitPDPDKK']))
{

 include "koneksi.php";



$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];
$status = $_POST['status'];

$sql1 = "UPDATE kk_perubahan_data SET 	status ='".$status."'
	WHERE uuid='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);
    
 $sql1 = "UPDATE tb_pengaduan SET 	status ='".$status."'
	WHERE uuid_pengaduan='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);  
    
    
    
    
    
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengaduan Online Anda $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Status Pengaduan Online Anda $status',
                                tanggal = '$tanggal'
    where  nm_grp = '$uuid_reg'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);



    header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg"); 

}
?> 




<?php
// PROSES UPDATE BENTUK KELUARGA BARU 
  
if(isset($_POST['submitBKKB']))
{

 include "koneksi.php";



$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];
$status = $_POST['status'];

$sql1 = "UPDATE kk_baru SET 	status ='".$status."'
	WHERE uuid='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);
    
 $sql1 = "UPDATE tb_pengaduan SET 	status ='".$status."'
	WHERE uuid_pengaduan='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);  
    
    
    
    
    
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengaduan Online Anda $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Status Pengaduan Online Anda $status',
                                tanggal = '$tanggal'
    where  nm_grp = '$uuid_reg'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);



    header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg"); 

}
?> 

<?php
// PROSES UPDATE PINDAH DATANG
  
if(isset($_POST['submitKKPD']))
{

 include "koneksi.php";



$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];
$status = $_POST['status'];

$sql1 = "UPDATE kk_pindahdatang SET 	status ='".$status."'
	WHERE uuid='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);
    
 $sql1 = "UPDATE tb_pengaduan SET 	status ='".$status."'
	WHERE uuid_pengaduan='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);  
    
    
    
    
    
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengaduan Online Anda $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Status Pengaduan Online Anda $status',
                                tanggal = '$tanggal'
    where  nm_grp = '$uuid_reg'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);



    header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg"); 

}
?> 


<?php
// PROSES UPDATE PENGGANTIAN KEPALA KELUARGA
  
if(isset($_POST['submitKKPKK']))
{

 include "koneksi.php";



$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];
$status = $_POST['status'];

$sql1 = "UPDATE kkgantikk SET 	status ='".$status."'
	WHERE uuid='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);
    
 $sql1 = "UPDATE tb_pengaduan SET 	status ='".$status."'
	WHERE uuid_pengaduan='".$uuid_pengaduan."'";
    $sql2 = mysqli_query($koneksi, $sql1);  
    
    
    
    
    
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time.'+7 hour'));

   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengaduan Online Anda $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Status Pengaduan Online Anda $status',
                                tanggal = '$tanggal'
    where  nm_grp = '$uuid_reg'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);



    header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg"); 

}
?> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/e1c52708df.js"></script>

	</head>
	<body>
	
		<div class="container">


 <div class="table-responsive-md" style='font-family: 'Viga', sans-serif;'>
 
 <?php
   include "koneksi.php";
session_start();
if(empty($_SESSION['username'])){
	
	header('location: index.php');
}


$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];

// DETAIL KTP 

if ($kd_jenis == 'KTP')
{
    $result = mysqli_query($koneksi,"SELECT * FROM `tb_ktp` WHERE uuid='$uuid_pengaduan'");
    while($row = mysqli_fetch_array($result)){
        $nik_pm = $row['nik_pm'];
         $nama_pm = $row['nama_pm'];
          $nokk_pm = $row['nokk_pm'];
           	$umur_pm = $row['umur_pm'];
            $f_ktp = $row['f_ktp'];
              	$f_kk = $row['f_kk'];
	$tanggal = $row['create-at'];
		$status = $row['status'];
        	$kwn = $row['kwn'];
		 echo" 
		 <div class='row'>
		 <div class='col-sm-3'>	
  <a href='pengaduan.php'><img src='back.png' width='35'/></a>
  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA PEMOHON KARTU TANDA PENDUDUK </font> 	</b><br></b><br>
 </div>
  </div>
<div class='row'>
<div class='col-sm-3'>	
<b><font size='4'>NIK</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nik_pm </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>Nama Lengkap</font>  </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nama_pm</font> 
</div>

<div class='col-sm-3'>	
<b><font size='4'> NO. KK </b></font> 
</div>
<div class='col-sm-9'>
<font size='4'>:	 $nokk_pm </font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Umur</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $umur_pm  Tahun</font> 
</div> 

<div class='col-sm-3'>	
<b> <font size='4'>Kewarganegaraan</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $kwn  </font> 
</div> 

<br><br>
<div class='col-sm-3'>	
<b> <font size='4'>File KTP</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/ktp/$f_ktp' target='blank'> $f_ktp</a></font> 
</div>

<div class='col-sm-3'>	
<b><font size='4'> File KK</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/ktp/$f_kk' target='blank'>$f_kk</a> </font>
</div>

<div class='col-sm-3'>	
<b><font size='4'> Tanggal Upload </b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $tanggal</font>
</div> 

<div class='col-sm-3'>	
<b> <font size='4'>Status</b></font>
</div> 

<div class='col-sm-9'>
 <font size='4'>:</font>	 <font color='red' font size='5'><b>$status</b>
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<body class='mx-4 my-4'>
<i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>

<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form method='post' action=''>
          <div class='form-group'>
           <div class='row'>
            <div class='col-lg-4'>
               Status
             </div>
            <div class='col-lg-8'>
         <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
    										<option name='status' value='Upload Berkas'>Upload Berkas</option>
    										<option name='status'value='Verifikasi'>Verifikasi</option>
    										
    												<option name='status'value='Selesai'>Selesai</option>
    															<option name='status'value='Ditolak'>Tolak</option>
    									</select>
            </div>
           </div>
           <br>
               <div class='row'>
            <div class='col-lg-4'>
           
            </div>
            <div class='col-lg-8'>

            </div>
           </div>
          </div>
       
      </div>
      <div class='modal-footer'>
<button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                          </button> <button data-v-08ceb4c3='' name='submitktp' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                          </button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

</div>
<br><br>
<div class='row'>
<div class='col-sm-6'>
<img src='../files/ktp/$f_ktp' width='70%' height='400' /> <br><br>

File KTP
</div>
<div class='col-sm-6'>
<img src='../files/ktp/$f_kk' width='70%' height='400' /><br><br>
File Kartu Keluarga
</div>
</div>
</div>


";	
    }
}


// DETAIL SURAT PINDAH 

if ($kd_jenis == 'SP')
{
 $result = mysqli_query($koneksi,"SELECT * FROM `surat_pindah` WHERE uuid='$uuid_pengaduan'");
    while($row = mysqli_fetch_array($result)){
        $nik_pm = $row['nikpmhon'];
         $nama_pm = $row['namapmhon'];
          $nokk_pm = $row['nokkpmhon'];
           	$umur_pm = $row['umurpmhon'];
            $f_ktp = $row['f_ktp'];
              	$f_kk = $row['f_kk'];
              		$f_bukunikah = $row['f_bukunikah'];
	$tanggal = $row['create-at'];
		$status = $row['status'];
			$kwn= $row['kwn'];
			
			
			
			
        
		 echo" 
		 <div class='row'>
		 <div class='col-sm-3'>	
  <a href='pengaduan.php'><img src='back.png' width='35'/></a>
  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA PEMOHON SURAT PINDAH</font> 	</b><br></b><br>
 </div>
  </div>
<div class='row'>
<div class='col-sm-3'>	
<b><font size='4'>NIK</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nik_pm </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>Nama Lengkap</font>  </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nama_pm</font> 
</div>

<div class='col-sm-3'>	
<b><font size='4'> NO. KK </b></font> 
</div>
<div class='col-sm-9'>
<font size='4'>:	 $nokk_pm </font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Umur</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $umur_pm  Tahun</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Kewarganegaraann</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $kwn</font> 
</div> 



<br><br>


		 
		 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DAERAH ASAL</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'> Klarifikasi Pindah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[klarifikasi_pindah]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Povinsi</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[provinsiasl]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Kabupaten</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kabupatenasl]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Kecamatan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kecamatanasl]</font>
</div> 


<div class='col-sm-3'>	
<b><font size='4'>Kelurahan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kelurahanasl]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Alamat</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[alamatasl]</font>
</div> 


<div class='col-sm-3'>	
<b><font size='4'>Kode POS</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kdposasl]</font>
</div> 



<br><br>




		 
		 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DAERAH TUJUAN</font> 	</b><br></b><br>
 </div>



<div class='col-sm-3'>	
<b><font size='4'>Povinsi</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[provinsitj]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Kabupaten</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kabupatentj]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Kecamatan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kectj]</font>
</div> 


<div class='col-sm-3'>	
<b><font size='4'>Kelurahan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kltj]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Alamat</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[alamattj]</font>
</div> 


<div class='col-sm-3'>	
<b><font size='4'>Kode POS</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kdpostj]</font>
</div> 


<div class='col-sm-3'>	
<b><font size='4'>Alasan Pindah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[alasanpindah]</font>
</div>



<div class='col-sm-3'>	
<b><font size='4'>Jenis Kepindindah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[jenispindah]</font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>Data Keluarga di KK yang tidak Pindah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[datakeluarga]</font>
</div>

<div class='col-sm-3'>	
<b><font size='4'>Data Keluarga di KK yang  Pindah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[datapindah]</font>
</div>

<br><br><br><br>


<div class='col-sm-3'>	
<b> <font size='4'>File KTP</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/suratpindah/$f_ktp' target='blank'> $f_ktp</a></font> 
</div>





<div class='col-sm-3'>	
<b><font size='4'> File KK</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/suratpindah/$f_kk' target='blank'>$f_kk</a> </font>
</div>



<div class='col-sm-3'>	

<b><font size='4'> File Buku Nikah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/suratpindah/$f_bukunikah' target='blank'>$f_bukunikah</a> </font>
</div>

<div class='col-sm-3'>	
<b><font size='4'> Tanggal Upload </b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $tanggal</font>
</div> 



<div class='col-sm-3'>	
<b> <font size='4'>Status</b></font>
</div> 

<div class='col-sm-9'>
 <font size='4'>:</font>	 <font color='red' font size='5'><b>$status</b>
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<body class='mx-4 my-4'>
<i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>

<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Update Status Pemohon Surat Pindah</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form method='post' action=''>
          <div class='form-group'>
           <div class='row'>
            <div class='col-lg-4'>
               Status
             </div>
            <div class='col-lg-8'>
         <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
    										<option name='status' value='Upload Berkas'>Upload Berkas</option>
    										<option name='status'value='Verifikasi'>Verifikasi</option>
    										
    												<option name='status'value='Selesai'>Selesai</option>
    															<option name='status'value='Ditolak'>Tolak</option>
    									</select>
            </div>
           </div>
           <br>
               <div class='row'>
            <div class='col-lg-4'>
           
            </div>
            <div class='col-lg-8'>

            </div>
           </div>
          </div>
       
      </div>
      <div class='modal-footer'>
<button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                          </button> <button data-v-08ceb4c3='' name='submitSP' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                          </button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

</div>
<br><br>
<div class='row'>
<div class='col-sm-6'>
<img src='../files/suratpindah/$f_ktp' width='70%' height='400' /> <br><br>

File KTP <br>
</div>

<div class='col-sm-6'>
<img src='../files/suratpindah/$f_kk' width='70%' height='400' /><br><br>
File Kartu Keluarga<br> <br>
</div>



<div class='col-sm-6'>
<img src='../files/suratpindah/$f_bukunikah' width='70%' height='400' /><br><br>
File Buku Nikah
</div>

</div>
</div>


";	
    } 
    
}




// DETAIL AKTA PERCERAIAN

if ($kd_jenis == 'AKCER')
{
 $result = mysqli_query($koneksi,"SELECT * FROM `tb_aktecerai` WHERE uuid='$uuid_pengaduan'");
    while($row = mysqli_fetch_array($result)){
        $nik_pm = $row['nikpmhon'];
         $nama_pm = $row['namapmhon'];
          $nokk_pm = $row['nokkpmhon'];
           	$umur_pm = $row['umurpmhon'];
            $f_ktp = $row['f_ktp'];
              	$f_kk = $row['f_kk'];
              $f_sputusan = $row['f_sputusan'];
              $f_aktekawin = $row['f_aktekawin'];
            $f_pengatar = $row['f_pengatar'];
              
              
	$tanggal = $row['create-at'];
		$status = $row['status'];
			$kwn= $row['kwnpmhon'];
			
			
			
			
        
		 echo" 
		 <div class='row'>
		 <div class='col-sm-3'>	
  <a href='pengaduan.php'><img src='back.png' width='35'/></a>
  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA PEMOHON AKTA PERCERIAN</font> 	</b><br></b><br>
 </div>
  </div>
<div class='row'>
<div class='col-sm-3'>	
<b><font size='4'>NIK</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nik_pm </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>Nama Lengkap</font>  </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nama_pm</font> 
</div>

<div class='col-sm-3'>	
<b><font size='4'> NO. KK </b></font> 
</div>
<div class='col-sm-9'>
<font size='4'>:	 $nokk_pm </font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Umur</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $umur_pm  Tahun</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Kewarganegaraann</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $kwn</font> 
</div> 



<br><br>


		 
		 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>AKTA PERCERIAN</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'>NO. Akta Perkawinan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[noakta]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Tanggal Akta Perceraian</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tgglakte]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Pengadilan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nama_pengadilan]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Tanggal Putusan Pengadilan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tggl_putusan]</font>
</div> 


<div class='col-sm-3'>	
<b><font size='4'>NO. Putusan Pengadilan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[no_putusan]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Tanggal Surat</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tggl_surat]</font>
</div> 


<div class='col-sm-3'>	
<b><font size='4'>Tanggal Melapor</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tggl_lapor]</font>
</div> 






	
<br><br><br><br>


<div class='col-sm-3'>	
<b> <font size='4'>Salinan Surat Putusan Pengadilan</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/aktecerai/$f_sputusan' target='blank'> $f_sputusan</a></font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Kutipan Akta Perkawinan Pemohon</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/aktecerai/$f_aktekawin' target='blank'> $f_aktekawin</a></font> 
</div>



<div class='col-sm-3'>	
<b> <font size='4'>Surat Penghantar Panitera</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/aktecerai/$f_pengatar' target='blank'> $f_pengatar</a></font> 
</div>



<div class='col-sm-3'>	
<b> <font size='4'>File KTP</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/aktecerai/$f_ktp' target='blank'> $f_ktp</a></font> 
</div>





<div class='col-sm-3'>	
<b><font size='4'> File KK</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/aktecerai/$f_kk' target='blank'>$f_kk</a> </font>
</div>





<div class='col-sm-3'>	
<b><font size='4'> Tanggal Upload </b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $tanggal</font>
</div> 



<div class='col-sm-3'>	
<b> <font size='4'>Status</b></font>
</div> 

<div class='col-sm-9'>
 <font size='4'>:</font>	 <font color='red' font size='5'><b>$status</b>
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<body class='mx-4 my-4'>
<i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>

<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form method='post' action=''>
          <div class='form-group'>
           <div class='row'>
            <div class='col-lg-4'>
               Status
             </div>
            <div class='col-lg-8'>
         <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
    										<option name='status' value='Upload Berkas'>Upload Berkas</option>
    										<option name='status'value='Verifikasi'>Verifikasi</option>
    										
    												<option name='status'value='Selesai'>Selesai</option>
    															<option name='status'value='Ditolak'>Tolak</option>
    									</select>
            </div>
           </div>
           <br>
               <div class='row'>
            <div class='col-lg-4'>
           
            </div>
            <div class='col-lg-8'>

            </div>
           </div>
          </div>
       
      </div>
      <div class='modal-footer'>
<button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                          </button> <button data-v-08ceb4c3='' name='submitAKCER' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                          </button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

</div>
<br><br>


<div class='row'>
<div class='col-sm-6'>
<img src='../files/aktecerai/$f_sputusan' width='70%' height='400' /> <br><br>

Salinan Surat Putusan Pengadilan <br><br><br>
</div>


<div class='col-sm-6'>
<img src='../files/aktecerai/$f_aktekawin' width='70%' height='400' /> <br><br>

Kutipan Akta Perkawinan Pemohon <br><br><br>
</div>
<br>

<div class='col-sm-6'>
<img src='../files/aktecerai/$f_pengatar' width='70%' height='400' /> <br><br>

Surat Penghantar Panitera<br>
</div>

<div class='col-sm-6'>
<img src='../files/aktecerai/$f_ktp' width='70%' height='400' /><br><br>
File KTP<br> <br>
</div>



<div class='col-sm-6'>
<img src='../files/aktecerai/$f_kk' width='70%' height='400' /><br><br>
File Kartu Keluarga
</div>

</div>
</div>


";	
    } 
    
}





// DETAIL AKTA KEMATIAN

if ($kd_jenis == 'AKDEAD')
{
 $result = mysqli_query($koneksi,"SELECT * FROM `tb_aktekematian` WHERE uuid='$uuid_pengaduan'");
    while($row = mysqli_fetch_array($result)){
        $nik_pm = $row['nikpmhon'];
         $nama_pm = $row['namapmhon'];
          $nokk_pm = $row['nokkpmhon'];
           	$umur_pm = $row['umurpmhon'];
            $f_ktp = $row['f_ktp'];
              	$f_kk = $row['f_kk'];
              $f_sputusan = $row['f_sputusan'];
              $f_aktekawin = $row['f_aktekawin'];
            $f_pengatar = $row['f_pengatar'];
              
              
	$tanggal = $row['create-at'];
		$status = $row['status'];
			$kwn= $row['kwn'];
			
			
			
			
        
		 echo" 
		 <div class='row'>
		 <div class='col-sm-3'>	
  <a href='pengaduan.php'><img src='back.png' width='35'/></a>
  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA PEMOHON AKTA KEMATIAN</font> 	</b><br></b><br>
 </div>
  </div>
<div class='row'>
<div class='col-sm-3'>	
<b><font size='4'>NIK</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nik_pm </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>Nama Lengkap</font>  </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nama_pm</font> 
</div>

<div class='col-sm-3'>	
<b><font size='4'> NO. KK </b></font> 
</div>
<div class='col-sm-9'>
<font size='4'>:	 $nokk_pm </font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Umur</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $umur_pm  Tahun</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Kewarganegaraann</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $kwn</font> 
</div> 



<br><br>


		 
		 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA SAKSI 1</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'>NIK Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[niksaksi1]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[namasaksi1]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>NO KK. Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nokksaksi1]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Umur Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[umursaksi1] Tahun</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Kewarganegaraan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kwnsaksi1]</font>
</div> 





	
<br><br><br><br>

	 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA SAKSI 2</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'>NIK Saksi 2</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[niksaksi2]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Saksi 2</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[namasaksi2]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>NO KK. Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nokksaksi2]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Umur Saksi 2</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[umursaksi2] Tahun</font>
</div> 
	
<div class='col-sm-3'>	
<b><font size='4'>Kewarganegaraan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kwnsaksi2]</font>
</div> 
<br><br><br><br>
	


	 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA JENAZAH</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'>Tanggal Meninggal</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tggl_mnggl]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Jam Meninggal</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[jam_mnggl]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>NIK Jenazah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nikjns]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Jenazah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[namajns]</font>
</div> 
	
<div class='col-sm-3'>	
<b><font size='4'>Nama Ibu Jenazah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[namaibujns]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Sebab Meninggal</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[sebab_mngl]</font>
</div> 



<div class='col-sm-3'>	
<b><font size='4'>Yang Menerangkan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tngg_mnggl]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Tempat Meninggak</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tpmeninggal]</font>
</div> 
<br><br><br><br>



<div class='col-sm-3'>	
<b> <font size='4'>File KTP Pemohon</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/aktekematian/$f_ktp' target='blank'> $f_ktp</a></font> 
</div>





<div class='col-sm-3'>	
<b><font size='4'> File KK Pemohon</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/aktekematian/$f_kk' target='blank'>$f_kk</a> </font>
</div>





<div class='col-sm-3'>	
<b><font size='4'> Tanggal Upload </b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $tanggal</font>
</div> 



<div class='col-sm-3'>	
<b> <font size='4'>Status</b></font>
</div> 

<div class='col-sm-9'>
 <font size='4'>:</font>	 <font color='red' font size='5'><b>$status</b>
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<body class='mx-4 my-4'>
<i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>

<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form method='post' action=''>
          <div class='form-group'>
           <div class='row'>
            <div class='col-lg-4'>
               Status
             </div>
            <div class='col-lg-8'>
         <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
    										<option name='status' value='Upload Berkas'>Upload Berkas</option>
    										<option name='status'value='Verifikasi'>Verifikasi</option>
    										
    												<option name='status'value='Selesai'>Selesai</option>
    															<option name='status'value='Ditolak'>Tolak</option>
    									</select>
            </div>
           </div>
           <br>
               <div class='row'>
            <div class='col-lg-4'>
           
            </div>
            <div class='col-lg-8'>

            </div>
           </div>
          </div>
       
      </div>
      <div class='modal-footer'>
<button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                          </button> <button data-v-08ceb4c3='' name='submitAKDEAD' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                          </button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

</div>
<br><br>


<div class='row'>

<div class='col-sm-6'>
<img src='../files/aktekematian/$f_ktp' width='70%' height='400' /><br><br>
File KTP Pemohon<br> <br>
</div>



<div class='col-sm-6'>
<img src='../files/aktekematian/$f_kk' width='70%' height='400' /><br><br>
File Kartu Keluarga Pemohon
</div>

</div>
</div>


";	
    } 
    
}



// DETAIL AKTA KELAHIRAN

if ($kd_jenis == 'AKKEL')
{
 $result = mysqli_query($koneksi,"SELECT * FROM `tb_aktelahir` WHERE uuid='$uuid_pengaduan'");
    while($row = mysqli_fetch_array($result)){
        $nik_pm = $row['nikpmhon'];
         $nama_pm = $row['namapmhon'];
          $nokk_pm = $row['nokkpmhon'];
           	$umur_pm = $row['umurpmhon'];
            $f_ktp = $row['f_ktp'];
              	$f_kk = $row['f_kk'];
              	
              	
              	
              $f_bukunikah = $row['f_bukunikah'];
              $f_ketlahir = $row['f_ketlahir'];
            $f_pengatar = $row['f_pengatar'];
              
              
	$tanggal = $row['create-at'];
		$status = $row['status'];
			$kwn= $row['kwnpmhon'];
			
			
			
			
        
		 echo" 
		 <div class='row'>
		 <div class='col-sm-3'>	
  <a href='pengaduan.php'><img src='back.png' width='35'/></a>
  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA PEMOHON AKTA KELAHIRAN</font> 	</b><br></b><br>
 </div>
  </div>
<div class='row'>
<div class='col-sm-3'>	
<b><font size='4'>NIK</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nik_pm </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>Nama Lengkap</font>  </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nama_pm</font> 
</div>

<div class='col-sm-3'>	
<b><font size='4'> NO. KK </b></font> 
</div>
<div class='col-sm-9'>
<font size='4'>:	 $nokk_pm </font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Umur</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $umur_pm  Tahun</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Kewarganegaraann</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $kwn</font> 
</div> 



<br><br>


		 
		 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA SAKSI 1</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'>NIK Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[niksaksi1]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[namasaksi1]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>NO KK. Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nokksaksi1]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Umur Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[umursaksi1] Tahun</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Kewarganegaraan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kwnsaksi1]</font>
</div> 





	
<br><br><br><br>

	 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA SAKSI 2</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'>NIK Saksi 2</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[niksaksi2]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Saksi 2</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[namasaksi2]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>NO KK. Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nokksaksi2]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Umur Saksi 2</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[umursaksi2] Tahun</font>
</div> 
	
<div class='col-sm-3'>	
<b><font size='4'>Kewarganegaraan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kwnsaksi2]</font>
</div> 
<br><br><br><br>
	


	 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA AYAH</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'>NIK Ayah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nikayah]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Ayah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[namaayah]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Tempat Lahir Ayah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tmptayah]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Tanggal Lahir Ayah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[lhr_ayah]</font>
</div> 
	
<div class='col-sm-3'>	
<b><font size='4'>Kewarganegaraan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kwnayah]</font>
</div> 
<br><br><br><br>
	


	 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA IBU</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'>NIK Ibu</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nikibu]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Ibu</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[namaibu]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Tempat Lahir Ibu</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tmptibu]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Tanggal Lahir Ibu</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[lhr_ibu]</font>
</div> 
	
<div class='col-sm-3'>	
<b><font size='4'>Kewarganegaraan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kwnibu]</font>
</div> 

<br><br><br><br>
	


	 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA ANAK</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'>NIK ANAK</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nikanak]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Anak</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[namaanak]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Jenis Kelamin</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[jk]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Tempat di Lahirkan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tptjnis_lahir]</font>
</div> 
	
<div class='col-sm-3'>	
<b><font size='4'>Tempat Lahir</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tmtpanak]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Hari Lahir</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[harilahir]</font>
</div> 



<div class='col-sm-3'>	
<b><font size='4'>Tanggal Lahir</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tgl_lahiranak]</font>
</div> 
<div class='col-sm-3'>	
<b><font size='4'>Jam Lahir</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[jam_lahiranak]</font>
</div> 
<div class='col-sm-3'>	
<b><font size='4'>Anak Ke-</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[anakke]</font>
</div> 
<div class='col-sm-3'>	
<b><font size='4'>Penolong Kelahiran</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[pnlong_lhr]</font>
</div> 
<div class='col-sm-3'>	
<b><font size='4'>Berat Anak</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[beratanak]</font>
</div> 
<div class='col-sm-3'>	
<b><font size='4'>Panjang Anak</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[pjganak]</font>
</div> 
<div class='col-sm-3'>	
<b><font size='4'>Kondisi Lahir Anak</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kondisi_lahir]</font>
</div> 
<br><br><br><br>

<div class='col-sm-3'>	
<b> <font size='4'>Buku Nikah</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/aktelahir/$f_bukunikah' target='blank'> $f_bukunikah</a></font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>File KTP Pemohon</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/aktelahir/$f_ktp' target='blank'> $f_ktp</a></font> 
</div>





<div class='col-sm-3'>	
<b><font size='4'> File KK Pemohon</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/aktelahir/$f_kk' target='blank'>$f_kk</a> </font>
</div>

<div class='col-sm-3'>	
<b><font size='4'> Surat Keterangan Lahir</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/aktelahir/$f_ketlahir' target='blank'>$f_ketlahir</a> </font>
</div>



<div class='col-sm-3'>	
<b><font size='4'> Tanggal Upload </b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $tanggal</font>
</div> 



<div class='col-sm-3'>	
<b> <font size='4'>Status</b></font>
</div> 

<div class='col-sm-9'>
 <font size='4'>:</font>	 <font color='red' font size='5'><b>$status</b>
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<body class='mx-4 my-4'>
<i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>

<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form method='post' action=''>
          <div class='form-group'>
           <div class='row'>
            <div class='col-lg-4'>
               Status
             </div>
            <div class='col-lg-8'>
         <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
    										<option name='status' value='Upload Berkas'>Upload Berkas</option>
    										<option name='status'value='Verifikasi'>Verifikasi</option>
    										
    												<option name='status'value='Selesai'>Selesai</option>
    															<option name='status'value='Ditolak'>Tolak</option>
    									</select>
            </div>
           </div>
           <br>
               <div class='row'>
            <div class='col-lg-4'>
           
            </div>
            <div class='col-lg-8'>

            </div>
           </div>
          </div>
       
      </div>
      <div class='modal-footer'>
<button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                          </button> <button data-v-08ceb4c3='' name='submitAKKEL' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                          </button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

</div>
<br><br>


<div class='row'>


<div class='col-sm-6'>
<img src='../files/aktelahir/$f_bukunikah' width='70%' height='400' /><br><br>
File Buku Nikah<br> <br>
</div>


<div class='col-sm-6'>
<img src='../files/aktelahir/$f_ktp' width='70%' height='400' /><br><br>
File KTP Pemohon<br> <br>
</div>



<div class='col-sm-6'>
<img src='../files/aktelahir/$f_kk' width='70%' height='400' /><br><br>
File Kartu Keluarga Pemohon
</div>


<div class='col-sm-6'>
<img src='../files/aktelahir/$f_ketlahir' width='70%' height='400' /><br><br>
File Kerangan Lahir dari Rs /Bidan
</div>


</div>
</div>


";	
    } 
    
}





// DETAIL AKTA Perkawinan

if ($kd_jenis == 'AKWIN')
{
 $result = mysqli_query($koneksi,"SELECT * FROM `tb_aktekawin` WHERE uuid='$uuid_pengaduan'");
    while($row = mysqli_fetch_array($result)){
        $nik_pm = $row['nik_pm'];
         $nama_pm = $row['nama_pm'];
          $nokk_pm = $row['nokk_pm'];
           	$umur_pm = $row['umur_pm'];
            $f_suratkawin = $row['f_suratkawin'];
              	$f_kk = $row['f_kk'];
              	
              	
              	
              $f_foto = $row['f_foto'];
           
            $f_pengatar = $row['f_pengatar'];
              
              
	$tanggal = $row['create-at'];
		$status = $row['status'];
			$kwn= $row['kwn'];
			
			
			
			
        
		 echo" 
		 <div class='row'>
		 <div class='col-sm-3'>	
  <a href='pengaduan.php'><img src='back.png' width='35'/></a>
  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA PEMOHON AKTA PERKAWINAN</font> 	</b><br></b><br>
 </div>
  </div>
<div class='row'>
<div class='col-sm-3'>	
<b><font size='4'>NIK</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nik_pm </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>Nama Lengkap</font>  </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nama_pm</font> 
</div>

<div class='col-sm-3'>	
<b><font size='4'> NO. KK </b></font> 
</div>
<div class='col-sm-9'>
<font size='4'>:	 $nokk_pm </font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Umur</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $umur_pm  Tahun</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Kewarganegaraann</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $kwn</font> 
</div> 



<br><br>


		 
		 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA SAKSI 1</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'>NIK Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nik_saksi1]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nama_saksi1]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>NO KK. Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nokk_saksi1]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Umur Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[umur_saksi1] Tahun</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Kewarganegaraan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kwn_saksi1]</font>
</div> 





	
<br><br><br><br>

	 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA SAKSI 2</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'>NIK Saksi 2</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nik_saksi2]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Saksi 2</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nama_saksi2]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>NO KK. Saksi 1</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nokk_saksi2]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Umur Saksi 2</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[umur_saksi2] Tahun</font>
</div> 
	
<div class='col-sm-3'>	
<b><font size='4'>Kewarganegaraan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kwn_saksi2]</font>
</div> 


<br><br><br><br>
	


	 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA PERKAWINAN</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'>NIK Ayah Suami</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nik_ayah_s]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Ayah Suami</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nama_ayah_s]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Ibu Suami</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nama_ibu_s]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nik Ayah Istri</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nik_ayah_is]</font>
</div> 
	
<div class='col-sm-3'>	
<b><font size='4'>Nama Ayah Istri</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nama_ayah_is]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nik Ibuk Istri</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nik_ibu_is]</font>
</div> 


<div class='col-sm-3'>	
<b><font size='4'>Nama Ibuk Istri</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nama_ibu_is]</font>
</div> 


<div class='col-sm-3'>	
<b><font size='4'>Status Perkawinan Sebelum Menikah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[status__kawin]</font>
</div> 
<div class='col-sm-3'>	
<b><font size='4'>Perkawinan Ke -</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kawin_ke]</font>
</div> 
<div class='col-sm-3'>	
<b><font size='4'>Istri Ke-</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[istri_ke]</font>
</div> 
<div class='col-sm-3'>	
<b><font size='4'>Tanggal Akad / Pemberkatan Perkawinan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tannggal_kawin]</font>
</div> 
<div class='col-sm-3'>	
<b><font size='4'>Tanggal Melapor</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tanggal_lapor]</font>
</div> 
<div class='col-sm-3'>	
<b><font size='4'>Jam Melapor</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[jam_pelapor]</font>
</div> 
<div class='col-sm-3'>	
<b><font size='4'>Agama</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[agama]</font>
</div> 
<div class='col-sm-3'>	
<b><font size='4'>Nama Organisasi Kepercayaan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nama_organisasi_kep]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Pemuka Kepercayaan</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nama_pemuka_kep]</font>
</div> 


<br><br><br><br>

<div class='col-sm-3'>	
<b> <font size='4'>File Surat Perkawinan dari Pemuka Agama</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/aktekawin/$f_suratkawin' target='blank'> $f_suratkawin</a></font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>File Foto Gandeng Berwarna</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/aktekawin/$f_foto' target='blank'> $f_foto</a></font> 
</div>





<div class='col-sm-3'>	
<b><font size='4'> File KK Pemohon</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/aktekawin/$f_kk' target='blank'>$f_kk</a> </font>
</div>





<div class='col-sm-3'>	
<b><font size='4'> Tanggal Upload </b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $tanggal</font>
</div> 



<div class='col-sm-3'>	
<b> <font size='4'>Status</b></font>
</div> 

<div class='col-sm-9'>
 <font size='4'>:</font>	 <font color='red' font size='5'><b>$status</b>
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<body class='mx-4 my-4'>
<i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>

<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form method='post' action=''>
          <div class='form-group'>
           <div class='row'>
            <div class='col-lg-4'>
               Status
             </div>
            <div class='col-lg-8'>
         <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
    										<option name='status' value='Upload Berkas'>Upload Berkas</option>
    										<option name='status'value='Verifikasi'>Verifikasi</option>
    										
    												<option name='status'value='Selesai'>Selesai</option>
    															<option name='status'value='Ditolak'>Tolak</option>
    									</select>
            </div>
           </div>
           <br>
               <div class='row'>
            <div class='col-lg-4'>
           
            </div>
            <div class='col-lg-8'>

            </div>
           </div>
          </div>
       
      </div>
      <div class='modal-footer'>
<button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                          </button> <button data-v-08ceb4c3='' name='submitAKWIN' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                          </button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

</div>
<br><br>


<div class='row'>


<div class='col-sm-6'>
<img src='../files/aktekawin/$f_suratkawin' width='70%' height='400' /><br><br>
Surat Perkawinan Dari Pemuka Agama<br> <br>
</div>


<div class='col-sm-6'>
<img src='../files/aktekawin/$f_foto' width='70%' height='400' /><br><br>
Pas foto Gandeng Berwarna<br> <br>
</div>



<div class='col-sm-6'>
<img src='../files/aktekawin/$f_kk' width='70%' height='400' /><br><br>
File Kartu Keluarga 
</div>





</div>
</div>


";	
    } 
    
}




// DETAIL AKTA Penambahan Data Anak Pada Kartu Keluarga

if ($kd_jenis == 'PDAPKK')
{
 $result = mysqli_query($koneksi,"SELECT * FROM `kk_penambahan_anak` WHERE uuid='$uuid_pengaduan'");
    while($row = mysqli_fetch_array($result)){
        $nik_pm = $row['nik_pm'];
         $nama_pm = $row['nama_pm'];
          $nokk_pm = $row['nokk_pm'];
           	$umur_pm = $row['umur_pm'];
            $f_ket_lahir = $row['f_ket_lahir'];
              	$f_surat_nikah = $row['f_surat_nikah'];
              	
              	
              	
              $f_kk= $row['f_kk'];
           
            $f_ktp = $row['f_ktp'];
              
              
	$tanggal = $row['create-at'];
		$status = $row['status'];
			$kwn= $row['kwn_pm'];
			
			
			
			
        
		 echo" 
		 <div class='row'>
		 <div class='col-sm-3'>	
  <a href='pengaduan.php'><img src='back.png' width='35'/></a>
  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA PEMOHON AKTA PENAMBHAN DATA ANAK PADA KARTU KELUARGA</font> 	</b><br></b><br>
 </div>
  </div>
<div class='row'>
<div class='col-sm-3'>	
<b><font size='4'>NIK</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nik_pm </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>Nama Lengkap</font>  </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nama_pm</font> 
</div>

<div class='col-sm-3'>	
<b><font size='4'> NO. KK </b></font> 
</div>
<div class='col-sm-9'>
<font size='4'>:	 $nokk_pm </font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Umur</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $umur_pm  Tahun</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Kewarganegaraann</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $kwn</font> 
</div> 



<br><br>


		 
		 <div class='col-sm-3'>	

  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA ANAK</font> 	</b><br></b><br>
 </div>

<div class='col-sm-3'>	
<b><font size='4'>Nama Anak</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nama]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Jenis Kelamin</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[jk]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Tempat Lahir</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tmp_lhr]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Tanggal Lahir</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[thl_lhr] </font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Jam Lahir</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[jam_lhr]</font>
</div> 







<div class='col-sm-3'>	
<b><font size='4'>Golongan Darah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[gol_darah]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Agama</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[agama]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>SHDK</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[shdk]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Kelainan Fisik / Mental</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[cacat] Tahun</font>
</div> 
	
<div class='col-sm-3'>	
<b><font size='4'>Nama Ayah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nm_ayah]</font>
</div> 

<div class='col-sm-3'>	
<b><font size='4'>Nama Ibu</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[nm_ibu]</font>
</div> 
<br><br><br><br>
	


	




<div class='col-sm-3'>	
<b> <font size='4'>File Surat Keterangan Lahir</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/kkpenambahananak/$f_ket_lahir' target='blank'> $f_ket_lahir</a></font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>File Surat Nikah</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/kkpenambahananak/$f_surat_nikah' target='blank'> $f_surat_nikah</a></font> 
</div>





<div class='col-sm-3'>	
<b><font size='4'> File KTP Pemohon</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/kkpenambahananak/$f_ktp' target='blank'>$f_ktp</a> </font>
</div>



<div class='col-sm-3'>	
<b><font size='4'> File KK Pemohon</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/kkpenambahananak/$f_kk' target='blank'>$f_kk</a> </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'> Tanggal Upload </b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $tanggal</font>
</div> 



<div class='col-sm-3'>	
<b> <font size='4'>Status</b></font>
</div> 

<div class='col-sm-9'>
 <font size='4'>:</font>	 <font color='red' font size='5'><b>$status</b>
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<body class='mx-4 my-4'>
<i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>

<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form method='post' action=''>
          <div class='form-group'>
           <div class='row'>
            <div class='col-lg-4'>
               Status
             </div>
            <div class='col-lg-8'>
         <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
    										<option name='status' value='Upload Berkas'>Upload Berkas</option>
    										<option name='status'value='Verifikasi'>Verifikasi</option>
    										
    												<option name='status'value='Selesai'>Selesai</option>
    															<option name='status'value='Ditolak'>Tolak</option>
    									</select>
            </div>
           </div>
           <br>
               <div class='row'>
            <div class='col-lg-4'>
           
            </div>
            <div class='col-lg-8'>

            </div>
           </div>
          </div>
       
      </div>
      <div class='modal-footer'>
<button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                          </button> <button data-v-08ceb4c3='' name='submitPDAPKK' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                          </button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

</div>
<br><br>


<div class='row'>


<div class='col-sm-6'>
<img src='../files/kkpenambahananak/$f_ket_lahir' width='70%' height='400' /><br><br>
File Surat Keterangan Lahir<br> <br>
</div>


<div class='col-sm-6'>
<img src='../files/kkpenambahananak/$f_surat_nikah' width='70%' height='400' /><br><br>
File Surat Nikah<br> <br>
</div>



<div class='col-sm-6'>
<img src='../files/kkpenambahananak/$f_ktp' width='70%' height='400' /><br><br>
File KTP Pemohon
</div>


<div class='col-sm-6'>
<img src='../files/kkpenambahananak/$f_kk' width='70%' height='400' /><br><br>
File Kartu Keluarga 
</div>



</div>
</div>


";	
    } 
    
}





// DETAIL AKTA Perubahan Data atau Perbaikan Data di Kartu Keluarga

if ($kd_jenis == 'PDPDKK')
{
 $result = mysqli_query($koneksi,"SELECT * FROM `kk_perubahan_data` WHERE uuid='$uuid_pengaduan'");
    while($row = mysqli_fetch_array($result)){
        $nik_pm = $row['nik_pm'];
         $nama_pm = $row['nama_pm'];
          $nokk_pm = $row['nokk_pm'];
           	$umur_pm = $row['umur_pm'];
           	
            $f_buktidata= $row['f_buktidata'];
              	$f_f16 = $row['f_f16'];
              	
              		
              	
              $f_kk= $row['f_kk'];
           
            $f_ktp = $row['f_ktp'];
               $f_bukunikah = $row['f_bukunikah'];
              
	$tanggal = $row['create-at'];
		$status = $row['status'];
			$kwn= $row['kwn_pm'];
			
			
			
			
        
		 echo" 
		 <div class='row'>
		 <div class='col-sm-3'>	
  <a href='pengaduan.php'><img src='back.png' width='35'/></a>
  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA PEMOHON AKTA 	PERUBAHAN DATA ATAU PERBAIKAN DATA DI KARTU KELUARGA</font> 	</b><br></b><br>
 </div>
  </div>
<div class='row'>
<div class='col-sm-3'>	
<b><font size='4'>NIK</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nik_pm </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>Nama Lengkap</font>  </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nama_pm</font> 
</div>

<div class='col-sm-3'>	
<b><font size='4'> NO. KK </b></font> 
</div>
<div class='col-sm-9'>
<font size='4'>:	 $nokk_pm </font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Umur</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $umur_pm  Tahun</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Kewarganegaraann</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $kwn</font> 
</div> 





		 
		
<br><br><br><br>
	


	




<div class='col-sm-3'>	
<b> <font size='4'>File Kartu Keluarga</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/kkperubahandata/$f_kk' target='blank'> $f_kk</a></font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>File Bukti Perubahan Data</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/kkperubahandata/$f_buktidata	' target='blank'> $f_buktidata	</a></font> 
</div>





<div class='col-sm-3'>	
<b><font size='4'> File Surat Pernyataan F-1.06</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/kkperubahandata/$f_f16' target='blank'>$f_f16</a> </font>
</div>

<div class='col-sm-3'>	
<b><font size='4'> File KTP Pemohon</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/kkperubahandata/$f_ktp' target='blank'>$f_ktp</a> </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'> File Buku Nikah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/kkperubahandata/$f_bukunikah' target='blank'>$f_bukunikah</a> </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'> Tanggal Upload </b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $tanggal</font>
</div> 



<div class='col-sm-3'>	
<b> <font size='4'>Status</b></font>
</div> 

<div class='col-sm-9'>
 <font size='4'>:</font>	 <font color='red' font size='5'><b>$status</b>
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<body class='mx-4 my-4'>
<i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>

<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form method='post' action=''>
          <div class='form-group'>
           <div class='row'>
            <div class='col-lg-4'>
               Status
             </div>
            <div class='col-lg-8'>
         <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
    										<option name='status' value='Upload Berkas'>Upload Berkas</option>
    										<option name='status'value='Verifikasi'>Verifikasi</option>
    										
    												<option name='status'value='Selesai'>Selesai</option>
    															<option name='status'value='Ditolak'>Tolak</option>
    									</select>
            </div>
           </div>
           <br>
               <div class='row'>
            <div class='col-lg-4'>
           
            </div>
            <div class='col-lg-8'>

            </div>
           </div>
          </div>
       
      </div>
      <div class='modal-footer'>
<button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                          </button> <button data-v-08ceb4c3='' name='submitPDPDKK' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                          </button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

</div>
<br><br>


<div class='row'>


<div class='col-sm-6'>
<img src='../files/kkperubahandata/$f_kk' width='70%' height='400' /><br><br>
File Kartu Keluarga<br> <br>
</div>


<div class='col-sm-6'>
<img src='../files/kkperubahandata/$f_buktidata' width='70%' height='400' /><br><br>
Bukti Perubahan Data<br> <br>
</div>



<div class='col-sm-6'>
<img src='../files/kkperubahandata/$f_f16' width='70%' height='400' /><br><br>
Surat Pernyataan F-1.06
</div>


<div class='col-sm-6'>
<img src='../files/kkperubahandata/$f_ktp' width='70%' height='400' /><br><br>
File KTP Pemohon
</div>

<div class='col-sm-6'>
<img src='../files/kkperubahandata/$f_bukunikah' width='70%' height='400' /><br><br>
File Buku Nikah
</div>


</div>
</div>


";	
    } 
    
}


// DETAIL AKTA	Kartu Keluarga Hilang atau Rusak

if ($kd_jenis == 'KKHR')
{
 $result = mysqli_query($koneksi,"SELECT * FROM `kk_hilang` WHERE uuid='$uuid_pengaduan'");
    while($row = mysqli_fetch_array($result)){
        $nik_pm = $row['nik_pm'];
         $nama_pm = $row['nama_pm'];
          $nokk_pm = $row['nokk_pm'];
           	$umur_pm = $row['umur_pm'];
           	
          
              	
              		
              	
              $f_kkrusak= $row['f_kkrusak'];
           
            $f_ktp = $row['f_ktp'];
               $f_surat_ket = $row['f_surat_ket'];
              
	$tanggal = $row['create-at'];
		$status = $row['status'];
			$kwn= $row['kwn_pm'];
			
			
			
			
        
		 echo" 
		 <div class='row'>
		 <div class='col-sm-3'>	
  <a href='pengaduan.php'><img src='back.png' width='35'/></a>
  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA PEMOHON AKTA 	KARTU KELUARGA HILANG ATARU RUSAK</font> 	</b><br></b><br>
 </div>
  </div>
<div class='row'>
<div class='col-sm-3'>	
<b><font size='4'>NIK</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nik_pm </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>Nama Lengkap</font>  </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nama_pm</font> 
</div>

<div class='col-sm-3'>	
<b><font size='4'> NO. KK </b></font> 
</div>
<div class='col-sm-9'>
<font size='4'>:	 $nokk_pm </font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Umur</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $umur_pm  Tahun</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Kewarganegaraann</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $kwn</font> 
</div> 





		 
		
<br><br><br><br>
	


	




<div class='col-sm-3'>	
<b> <font size='4'>File KTP Pemohon</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/kkhilang/$f_ktp' target='blank'> $f_ktp</a></font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>File  KK Yang Rusak</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/kkhilang/$f_kkrusak	' target='blank'> $f_kkrusak	</a></font> 
</div>





<div class='col-sm-3'>	
<b><font size='4'> File  Surat Keterangan Hilang dari Polisi</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/kkhilang/$f_surat_ket' target='blank'>$f_surat_ket</a> </font>
</div>




<div class='col-sm-3'>	
<b><font size='4'> Tanggal Upload </b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $tanggal</font>
</div> 



<div class='col-sm-3'>	
<b> <font size='4'>Status</b></font>
</div> 

<div class='col-sm-9'>
 <font size='4'>:</font>	 <font color='red' font size='5'><b>$status</b>
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<body class='mx-4 my-4'>
<i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>

<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form method='post' action=''>
          <div class='form-group'>
           <div class='row'>
            <div class='col-lg-4'>
               Status
             </div>
            <div class='col-lg-8'>
         <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
    										<option name='status' value='Upload Berkas'>Upload Berkas</option>
    										<option name='status'value='Verifikasi'>Verifikasi</option>
    										
    												<option name='status'value='Selesai'>Selesai</option>
    															<option name='status'value='Ditolak'>Tolak</option>
    									</select>
            </div>
           </div>
           <br>
               <div class='row'>
            <div class='col-lg-4'>
           
            </div>
            <div class='col-lg-8'>

            </div>
           </div>
          </div>
       
      </div>
      <div class='modal-footer'>
<button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                          </button> <button data-v-08ceb4c3='' name='submitKKHR' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                          </button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

</div>
<br><br>


<div class='row'>


<div class='col-sm-6'>
<img src='../files/kkhilang/$f_ktp' width='70%' height='400' /><br><br>
File KTP Pemohon<br> <br>
</div>


<div class='col-sm-6'>
<img src='../files/kkhilang/$f_kkrusak' width='70%' height='400' /><br><br>
File KK Yang Rusak<br> <br>
</div>



<div class='col-sm-6'>
<img src='../files/kkhilang/$f_surat_ket' width='70%' height='400' /><br><br>
File Surat Keterangan Hilang dari Polisi
</div>




</div>
</div>


";	
    } 
    
}



// DETAIL AKTA	Bentuk Keluarga Baru

if ($kd_jenis == 'BKKB')
{
 $result = mysqli_query($koneksi,"SELECT * FROM `kk_baru` WHERE uuid='$uuid_pengaduan'");
    while($row = mysqli_fetch_array($result)){
        $nik_pm = $row['nikpmhon'];
         $nama_pm = $row['namapmhon'];
          $nokk_pm = $row['nokkpmhon'];
           	$umur_pm = $row['umurpmhon'];
           	
                	$alasan = $row['kkbarupmhon'];
              	
              		
              	
              $f_bukunikah= $row['f_bukunikah'];
           
            $f_kksuami= $row['f_kksuami'];
               $f_bukunikahsm = $row['f_bukunikahsm'];
                    $f_kkistri = $row['f_kkistri'];
           
             $f_bukunikahis= $row['f_bukunikahis'];
                $f_ktp= $row['f_ktp'];
              
	$tanggal = $row['create-at'];
		$status = $row['status'];
			$kwn= $row['kwnpmhon'];
			
			
			
			
        
		 echo" 
		 <div class='row'>
		 <div class='col-sm-3'>	
  <a href='pengaduan.php'><img src='back.png' width='35'/></a>
  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA PEMOHON AKTA BENTUK KELUARGA BARU</font> 	</b><br></b><br>
 </div>
  </div>
<div class='row'>
<div class='col-sm-3'>	
<b><font size='4'>Pemohon</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $alasan </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>NIK</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nik_pm </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>Nama Lengkap</font>  </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nama_pm</font> 
</div>

<div class='col-sm-3'>	
<b><font size='4'> NO. KK </b></font> 
</div>
<div class='col-sm-9'>
<font size='4'>:	 $nokk_pm </font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Umur</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $umur_pm  Tahun</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Kewarganegaraann</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $kwn</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Kecamatan</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kecpmhon]</font> 
</div> 

<div class='col-sm-3'>	
<b> <font size='4'>Desa / Kelurahan</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[kelpmhon]</font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Alamat</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[alamatpmhon]</font> 
</div>		 
		
<br><br><br><br>
	


	




<div class='col-sm-3'>	
<b> <font size='4'>File Buku Nikah /Akte Kawin</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/kkbaru/$f_bukunikah' target='blank'> $f_bukunikah</a></font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>File  KK Suami</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/kkbaru/$f_kksuami' target='blank'> $f_kksuami	</a></font> 
</div>





<div class='col-sm-3'>	
<b><font size='4'> File  Buku Nikah / Akte Kawin Orang Tua Suami</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/kkbaru/$f_bukunikahsm' target='blank'>$f_bukunikahsm</a> </font>
</div>

<div class='col-sm-3'>	
<b><font size='4'> File  KK Istri</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/kkbaru/$f_kkistri' target='blank'>$f_kkistri</a> </font>
</div>
<div class='col-sm-3'>	
<b><font size='4'> File  Buku Nikah / Akte Kawin Orang Tua stri</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/kkbaru/$f_bukunikahis' target='blank'>$f_bukunikahis	</a> </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>File KTP Pemohon</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/kkbaru/$f_ktp' target='blank'>$f_ktp	</a> </font>
</div>

<div class='col-sm-3'>	
<b><font size='4'> Tanggal Upload </b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $tanggal</font>
</div> 



<div class='col-sm-3'>	
<b> <font size='4'>Status</b></font>
</div> 

<div class='col-sm-9'>
 <font size='4'>:</font>	 <font color='red' font size='5'><b>$status</b>
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<body class='mx-4 my-4'>
<i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>

<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form method='post' action=''>
          <div class='form-group'>
           <div class='row'>
            <div class='col-lg-4'>
               Status
             </div>
            <div class='col-lg-8'>
         <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
    										<option name='status' value='Upload Berkas'>Upload Berkas</option>
    										<option name='status'value='Verifikasi'>Verifikasi</option>
    										
    												<option name='status'value='Selesai'>Selesai</option>
    															<option name='status'value='Ditolak'>Tolak</option>
    									</select>
            </div>
           </div>
           <br>
               <div class='row'>
            <div class='col-lg-4'>
           
            </div>
            <div class='col-lg-8'>

            </div>
           </div>
          </div>
       
      </div>
      <div class='modal-footer'>
<button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                          </button> <button data-v-08ceb4c3='' name='submitBKKB' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                          </button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

</div>
<br><br>


<div class='row'>


<div class='col-sm-6'>
<img src='../files/kkbaru/$f_bukunikah' width='70%' height='400' /><br><br>
File Buku Nikah /Akte Kawin<br> <br>
</div>


<div class='col-sm-6'>
<img src='../files/kkbaru/$f_kksuami' width='70%' height='400' /><br><br>
File KK Suami<br> <br>
</div>



<div class='col-sm-6'>
<img src='../files/kkbaru/$f_bukunikahsm' width='70%' height='400' /><br><br>
File Buku Nikah / Akte Kawin Orang Tua Suami
</div>


<div class='col-sm-6'>
<img src='../files/kkbaru/$f_kkistri' width='70%' height='400' /><br><br>
File KK Istri<br> <br>
</div>



<div class='col-sm-6'>
<img src='../files/kkbaru/$f_bukunikahis' width='70%' height='400' /><br><br>
File Buku Nikah / Akte Kawin Orang Tua stri
</div>
<div class='col-sm-6'>
<img src='../files/kkbaru/$f_ktp' width='70%' height='400' /><br><br>
File KTP Pemohon
</div>



</div>
</div>


";	
    } 
    
}



// DETAIL AKTA	Bentuk Keluarga Baru

if ($kd_jenis == 'KKPKK')
{
 $result = mysqli_query($koneksi,"SELECT * FROM `kkgantikk` WHERE uuid='$uuid_pengaduan'");
    while($row = mysqli_fetch_array($result)){
        $nik_pm = $row['nikpmhon'];
         $nama_pm = $row['namapmhon'];
          $nokk_pm = $row['nokkpmhon'];
           	$umur_pm = $row['umurpmhon'];
           	
                	$alasan = $row['kkbarupmhon'];
              	
              		
              	
              $f_aktakematian= $row['f_aktakematian'];
           
            $f_aktaperceraian= $row['f_aktaperceraian'];
               $f_kk = $row['f_kk'];
                    $f_ktp = $row['f_ktp'];
           
            
              
	$tanggal = $row['create-at'];
		$status = $row['status'];
			$kwn= $row['kwnpmhon'];
			
			
			
			
        
		 echo" 
		 <div class='row'>
		 <div class='col-sm-3'>	
  <a href='pengaduan.php'><img src='back.png' width='35'/></a>
  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA PEMOHON PENGGANTIAN KEPALA KELUARGA</font> 	</b><br></b><br>
 </div>
  </div>
<div class='row'>
<div class='col-sm-3'>	
<b><font size='4'>Pemohon</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $alasan </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>NIK</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nik_pm </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>Nama Lengkap</font>  </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nama_pm</font> 
</div>

<div class='col-sm-3'>	
<b><font size='4'> NO. KK </b></font> 
</div>
<div class='col-sm-9'>
<font size='4'>:	 $nokk_pm </font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Umur</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $umur_pm  Tahun</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Kewarganegaraann</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $kwn</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Nama lengkap Kepala Keluarga Baru</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[namalengkap]</font> 
</div> 
	 
		
<br><br><br><br>
	


	




<div class='col-sm-3'>	
<b> <font size='4'>File Kutipan Akta Kematian</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/gantikk/$f_aktakematian' target='blank'> $f_aktakematian</a></font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>File Kutipan Akta  Perceraian</b></font> 
</div>

<div class='col-sm-9'>
<font size='4'>:	 <a href='../files/gantikk/$f_aktaperceraian' target='blank'> $f_aktaperceraian</a></font> 
</div>


<div class='col-sm-3'>	
<b><font size='4'>File KK Pemohon</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/gantikk/$f_kk' target='blank'>$f_kk	</a> </font>
</div>



<div class='col-sm-3'>	
<b><font size='4'>File KTP Pemohon</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/gantikk/$f_ktp' target='blank'>$f_ktp	</a> </font>
</div>

<div class='col-sm-3'>	
<b><font size='4'> Tanggal Upload </b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $tanggal</font>
</div> 



<div class='col-sm-3'>	
<b> <font size='4'>Status</b></font>
</div> 

<div class='col-sm-9'>
 <font size='4'>:</font>	 <font color='red' font size='5'><b>$status</b>
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<body class='mx-4 my-4'>
<i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>

<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form method='post' action=''>
          <div class='form-group'>
           <div class='row'>
            <div class='col-lg-4'>
               Status
             </div>
            <div class='col-lg-8'>
         <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
    										<option name='status' value='Upload Berkas'>Upload Berkas</option>
    										<option name='status'value='Verifikasi'>Verifikasi</option>
    										
    												<option name='status'value='Selesai'>Selesai</option>
    															<option name='status'value='Ditolak'>Tolak</option>
    									</select>
            </div>
           </div>
           <br>
               <div class='row'>
            <div class='col-lg-4'>
           
            </div>
            <div class='col-lg-8'>

            </div>
           </div>
          </div>
       
      </div>
      <div class='modal-footer'>
<button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                          </button> <button data-v-08ceb4c3='' name='submitKKPKK' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                          </button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

</div>
<br><br>


<div class='row'>


<div class='col-sm-6'>
<img src='../files/gantikk/$f_aktakematian' width='70%' height='400' /><br><br>
File Kutipan Akta Kematian<br> <br>
</div>


<div class='col-sm-6'>
<img src='../files/gantikk/$f_aktaperceraian' width='70%' height='400' /><br><br>
File Kutipan Akta Perceraian<br> <br>
</div>



<div class='col-sm-6'>
<img src='../files/gantikk/$f_kk' width='70%' height='400' /><br><br>
File KK Pemohon
</div>


<div class='col-sm-6'>
<img src='../files/gantikk/$f_ktp' width='70%' height='400' /><br><br>
File KTP Pemohon<br> <br>
</div>





</div>
</div>


";	
    } 
    
}




// DETAIL AKTA	PINDAH DATANG

if ($kd_jenis == 'KKPD')
{
 $result = mysqli_query($koneksi,"SELECT * FROM `kk_pindahdatang` WHERE uuid='$uuid_pengaduan'");
    while($row = mysqli_fetch_array($result)){
        $nik_pm = $row['nikpmhon'];
         $nama_pm = $row['namapmhon'];
          $nokk_pm = $row['nokkpmhon'];
           	$umur_pm = $row['umurpmhon'];
           	
                	$alasan = $row['kkbarupmhon'];
              	
              		
              	
              $f_aktakematian= $row['f_aktakematian'];
           
            $fsuratpindah= $row['f_surat_-pindah'];
               $f_kk = $row['f_kk'];
                    $f_ktp = $row['f_ktp'];
           
            
              
	$tanggal = $row['create-at'];
		$status = $row['status'];
			$kwn= $row['kwnpmhon'];
			
			
			
			
        
		 echo" 
		 <div class='row'>
		 <div class='col-sm-3'>	
  <a href='pengaduan.php'><img src='back.png' width='35'/></a>
  </div>
  <div class='col-sm-9'>
		<b> <font size='6'>DATA PEMOHON KK PINDAH DATANG</font> 	</b><br></b><br>
 </div>
  </div>
<div class='row'>
<div class='col-sm-3'>	
<b><font size='4'>Pemohon</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $alasan </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>NIK</font> </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nik_pm </font>
</div>


<div class='col-sm-3'>	
<b><font size='4'>Nama Lengkap</font>  </b>
</div>

<div class='col-sm-9'>
<font size='4'>: $nama_pm</font> 
</div>

<div class='col-sm-3'>	
<b><font size='4'> NO. KK </b></font> 
</div>
<div class='col-sm-9'>
<font size='4'>:	 $nokk_pm </font> 
</div>

<div class='col-sm-3'>	
<b> <font size='4'>Umur</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $umur_pm  Tahun</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Kewarganegaraann</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $kwn</font> 
</div> 


<div class='col-sm-3'>	
<b> <font size='4'>Alamat Tujuan Ynag Benar</b></font> 
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $row[tujuanpmhon]</font> 
</div> 
	 
		
<br><br><br><br>
	


	





<div class='col-sm-3'>	
<b><font size='4'>File Keterangan Pindah</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/kkpindahdatang/$fsuratpindah' target='blank'>$fsuratpindah	</a> </font>
</div>



<div class='col-sm-3'>	
<b><font size='4'>File KTP Pemohon</b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>: <a href='../files/kkpindahdatang/$f_ktp' target='blank'>$f_ktp	</a> </font>
</div>

<div class='col-sm-3'>	
<b><font size='4'> Tanggal Upload </b></font>
</div> 

<div class='col-sm-9'>
<font size='4'>:	 $tanggal</font>
</div> 



<div class='col-sm-3'>	
<b> <font size='4'>Status</b></font>
</div> 

<div class='col-sm-9'>
 <font size='4'>:</font>	 <font color='red' font size='5'><b>$status</b>
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<body class='mx-4 my-4'>
<i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>

<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <form method='post' action=''>
          <div class='form-group'>
           <div class='row'>
            <div class='col-lg-4'>
               Status
             </div>
            <div class='col-lg-8'>
         <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
    										<option name='status' value='Upload Berkas'>Upload Berkas</option>
    										<option name='status'value='Verifikasi'>Verifikasi</option>
    										
    												<option name='status'value='Selesai'>Selesai</option>
    															<option name='status'value='Ditolak'>Tolak</option>
    									</select>
            </div>
           </div>
           <br>
               <div class='row'>
            <div class='col-lg-4'>
           
            </div>
            <div class='col-lg-8'>

            </div>
           </div>
          </div>
       
      </div>
      <div class='modal-footer'>
<button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                          </button> <button data-v-08ceb4c3='' name='submitKKPD' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                          </button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

</div>
<br><br>


<div class='row'>




<div class='col-sm-6'>
<img src='../files/kkpindahdatang/$fsuratpindah' width='70%' height='400' /><br><br>
File Keterangan Pindah
</div>


<div class='col-sm-6'>
<img src='../files/kkpindahdatang/$f_ktp' width='70%' height='400' /><br><br>
File KTP Pemohon<br> <br>
</div>





</div>
</div>


";	
    } 
    
}
?>
 
 
 
 
 
 
  <link rel="stylesheet" href="../js/bootstrap.min.css">

    
    
    
    
    
    <div class="table-responsive-md">

</div>
 <center>

</div>
</body>
</html>