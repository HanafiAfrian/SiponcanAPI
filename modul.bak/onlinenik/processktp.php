<?php
include('../../config/koneksi.php');
	if(isset($_POST['submitonlinenik']))
	{
	    $nikuser=$_POST['nikuser'];
		$nikpmhon=$_POST['nikpmhon'];
		$namapmhon=$_POST['namapmhon'];
		$nokkpmhon=$_POST['nokkpmhon'];
		$umurpmhon=$_POST['umurpmhon'];
	
		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));
	

 $fileinfo = @getimagesize($_FILES["img1"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );	
	
	   $allowed_image_extension2 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );	
// Get image file extension
    $file_extension = pathinfo($_FILES["img1"]["name"], PATHINFO_EXTENSION);
    $file_extension2 = pathinfo($_FILES["img2"]["name"], PATHINFO_EXTENSION);
    
    
    if (! file_exists($_FILES["img1"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        
       
        	echo "<script>alert('File KTP-el Pemohon Harus .jpg .png .jpeg .pdf');window.location='../../uploadonlinenik$nikuser-$nikpmhon-$namapmhon-$nokkpmhon-$umurpmhon';</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }  
    
       else if (($_FILES["img1"]["size"] > 5000000 )) {
	echo "<script>alert('File KTP-el Pemohon Maksimal 5 Mb');window.location='../../uploadonlinenik$nikuser-$nikpmhon-$namapmhon-$nokkpmhon-$umurpmhon';</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    } 
    
    
       else if (! in_array($file_extension2, $allowed_image_extension2)) {
        
       
        	echo "<script>alert('File Kartu Keluarga Pemohon Harus .jpg .png .jpeg .pdf');window.location='../../uploadonlinenik$nikuser-$nikpmhon-$namapmhon-$nokkpmhon-$umurpmhon';</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    } 
    
       else if (($_FILES["img2"]["size"] > 5000000 )) {
	echo "<script>alert('File Kartu Keluarga Pemohon Maksimal 5 Mb');window.location='../../uploadonlinenik$nikuser-$nikpmhon-$namapmhon-$nokkpmhon-$umurpmhon';</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 5 MMB"
        );
    } 
    
    
    
    
    else{
    
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];


		move_uploaded_file($_FILES["img1"]["tmp_name"],"../../../files/ktp/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"../../../files/ktp/".$_FILES["img2"]["name"]);


 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 14);

$uuidhtl = "pmktp-$time1$uuidhtl0";

		

$sql="INSERT INTO `tb_ktp` (`uuid`, `uuid_reg`, `nik_pm`, `nama_pm`, `nokk_pm`, `umur_pm`, `kwn`, `f_ktp`, `f_kk`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'Indonesia',
'$vimage1',
'$vimage2',
'$tanggal',
'$status',
'0'
)";
  $sql2 = mysqli_query($koneksi, $sql); 
  
  
  
  
  
  
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time));

$sql334 = "SELECT * FROM register  where nik= '$nikuser'";
$q1334 = mysqli_query($koneksi, $sql334);
$row4=mysqli_fetch_array($q1334);
$no_telpuser = $row4['no_telp'];
$namauser = $row4['nama'];

$sql41="INSERT INTO `tb_pengaduan` (`uuid`, `uuid_pengaduan`, `uuid_reg`, `nama`, `no_hp`, `kd_jenis`, `jenis`, `pengaduan`, `create-at`, `status`)
VALUES('',
'$uuidhtl',
'$nikuser',
'$namauser',
'$no_telpuser',
'KTP',
'Kartu Tanda Penduduk',
'',
'$tanggal',
'$status'
)";
  $sql242 = mysqli_query($koneksi, $sql41); 

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$nikuser','Admin','$nikuser','Berkas Kartu Tanda Penduduk Behasil di Upload','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Kartu Tanda Penduduk Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);
            



			echo "<script>alert('Upload Berkas Berhasil');window.location='../../home';</script>";
			
			
			
			
			
			
exit;
		
		
	}
	}

	?>