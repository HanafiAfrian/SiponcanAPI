<?php

function compressImage($source, $destination, $quality) { 
    // mendapatkan info gambar 
    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime']; 
     
    // membuat gambar baru dari file sumber
    switch($mime){ 
        case 'image/jpeg': 
            $image = imagecreatefromjpeg($source); 
            break; 
        case 'image/png': 
            $image = imagecreatefrompng($source); 
            break; 
        case 'image/gif': 
            $image = imagecreatefromgif($source); 
            break; 
        default: 
            $image = imagecreatefromjpeg($source); 
    } 
     
    // menyimpan gambar 
    imagejpeg($image, $destination, $quality); 
     
    // mengembalikan gambar yang dikompres 
    return $destination; 
} 

include('koneksi.php');

	if(isset($_POST['save']))
	echo "
";
	{

	    
	    $nikuser=$_POST['nikuser'];
		
	$nikpmhon = $_POST['nikpmhon'];
$namapmhon = addslashes($_POST['namapmhon']);
$nokkpmhon = $_POST['nokkpmhon'];
$umurpmhon= $_POST['umurpmhon'];
$kwnpmhon= $_POST['kwnpmhon'];
$selectedcat12= $_POST['selectedcat12'];


$niksaksi1= $_POST['niksaksi1'];
$namasaksi1= addslashes($_POST['namasaksi1']);
$nokksaksi1= $_POST['nokksaksi1'];
$umursaksi1= $_POST['umursaksi1'];
$kwnsaksi1= $_POST['kwnsaksi1'];

$niksaksi2= $_POST['niksaksi2'];
$namasaksi2= addslashes($_POST['namasaksi2']);
$nokksaksi2= $_POST['nokksaksi2'];
$umursaksi2= $_POST['umursaksi2'];
$umursaksi2= $_POST['umursaksi2'];
$kwnsaksi2= $_POST['kwnsaksi2'];

$nikayah= $_POST['nikayah'];
$namaayah= addslashes($_POST['namaayah']);
$tmptayah= $_POST['tmptayah'];
$pilih_tanggal_pesan= $_POST['pilih_tanggal_pesan'];
$kwnayah= $_POST['kwnayah'];

$nikibu= $_POST['nikibu'];
$namaibu= addslashes($_POST['namaibu']);
$tmptibu= $_POST['tmptibu'];
$pilih_tanggal_pesan1= $_POST['pilih_tanggal_pesan1'];
$kwnibu= $_POST['kwnibu'];

$nikanak= $_POST['nikanak'];
$namaanak= addslashes($_POST['namaanak']);
$selectedcat= $_POST['selectedcat'];
$selectedcat1= $_POST['selectedcat1'];
$tmtpanak= $_POST['tmtpanak'];
$harilahir= $_POST['harilahir'];
$pilih_tanggal_pesan2= $_POST['pilih_tanggal_pesan2'];
$pilih_jam_pesan= $_POST['pilih_jam_pesan'];
$anakke= $_POST['anakke'];
$selectedcat2= $_POST['selectedcat2'];
$beratanak= $_POST['beratanak'];
$pjganak= $_POST['pjganak'];
$selectedcat3= $_POST['selectedcat3'];


	
		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'-1 hour'));
	
		
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];
		$vimage3=$_FILES["img3"]["name"];
		$vimage4=$_FILES["img4"]["name"];



		
		
		
	$compressedImage = 	compressImage($_FILES["img1"]["tmp_name"],"files/aktelahir/".$_FILES["img1"]["name"], 15);
	
		$compressedImage2 = 	compressImage($_FILES["img2"]["tmp_name"],"files/aktelahir/".$_FILES["img2"]["name"], 15);
		$compressedImage3 = 	compressImage($_FILES["img3"]["tmp_name"],"files/aktelahir/".$_FILES["img3"]["name"], 15);	 
		$compressedImage4 = 	compressImage($_FILES["img4"]["tmp_name"],"files/aktelahir/".$_FILES["img4"]["name"], 15);

 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 10);

$uuidhtl = "pmaklhr-$time1$uuidhtl0";

		

$sql="INSERT INTO `tb_aktelahir` (`uuid`, `uuid_reg`, `nikpmhon`, `namapmhon`, `nokkpmhon`, `umurpmhon`,
`kwnpmhon`, `klarifikasi`, `niksaksi1`, `namasaksi1`, `nokksaksi1`, `umursaksi1`, `kwnsaksi1`, `niksaksi2`, `namasaksi2`,
`nokksaksi2`, `umursaksi2`, `kwnsaksi2`, `nikayah`, `namaayah`, `tmptayah`, `lhr_ayah`, `kwnayah`, `nikibu`, 
`namaibu`, `tmptibu`, `lhr_ibu`, `kwnibu`, `nikanak`, `namaanak`, `jk`, `tptjnis_lahir`, `tmtpanak`, `harilahir`, 
`tgl_lahiranak`, `jam_lahiranak`, `anakke`, `pnlong_lhr`, `beratanak`, `pjganak`, `kondisi_lahir`, `f_bukunikah`, 

`f_kk`, `f_ktp`, `f_ketlahir`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'$kwnpmhon',
'$selectedcat12',



'$niksaksi1',
'$namasaksi1',
'$nokksaksi1',
'$umursaksi1',
'$kwnsaksi1',
'$niksaksi2',
'$namasaksi2',
'$nokksaksi2',
'$umursaksi2',
'$kwnsaksi2',
'$nikayah',
'$namaayah',
'$tmptayah',
'$pilih_tanggal_pesan',
'$kwnayah',
'$nikibu',
'$namaibu',
'$tmptibu',
'$pilih_tanggal_pesan1',
'$kwnibu',
'$nikanak',
'$namaanak',
'$selectedcat',
'$selectedcat1',
'$tmtpanak',
'$harilahir',
'$pilih_tanggal_pesan2',
'$pilih_jam_pesan',
'$anakke',
'$selectedcat2',
'$beratanak',
'$pjganak',
'$selectedcat3',






'$vimage1',
'$vimage2',
'$vimage3',
'$vimage4',
'$tanggal',
'$status',
'1'
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

$time11 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11 = date('YmdHis');
$permitted_chars1 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01 = substr(str_shuffle($permitted_chars1), 0, 13);
$uuidhtlg = "pg-$time11$uuidhtl01";


$sql41="INSERT INTO `tb_pengaduan` (`uuid`, `uuid_pengaduan`, `uuid_reg`, `nama`, `no_hp`,`kd_jenis`, `jenis`,  `pengaduan`, `create-at`, `status`)
VALUES('$uuidhtlg',
'$uuidhtl',
'$nikuser',
'$namauser',
'$no_telpuser',
'AKKEL',
'Akta Kelahiran',

'',
'$tanggal',
'$status'
)";
  $sql242 = mysqli_query($koneksi, $sql41); 

 $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');
$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('$uuidhtlgch','Admin','$nikuser','Admin','$nikuser','Berkas Akta Kelahiran  Behasil di Upload','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Akta Kelahiran Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);
            
			echo "<script>alert('Upload Berkas Berjasil');</script>";
			
			
			
			
			
			
exit;
		
		
	}
	

	?>