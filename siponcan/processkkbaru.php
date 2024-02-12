<?php


include('koneksi.php');

	if(isset($_POST['save']))
	echo "
";
	{

	    
	    $nikuser=$_POST['nikuser'];
    	$kkbarupmhon=$_POST['kkbarupmhon'];		
		$nikpmhon=$_POST['nikpmhon'];
		$namapmhon= addslashes($_POST['namapmhon']);
		$nokkpmhon=$_POST['nokkpmhon'];
		$umurpmhon=$_POST['umurpmhon'];
		$kwnpmhon=$_POST['kwnpmhon'];
		$selectedcat12=$_POST['selectedcat12'];
	
		$nikkepalakk=$_POST['nikkepalakk'];
		$namakepalakk=$_POST['namakepalakk'];
	
		$kecpmhon=$_POST['kecpmhon'];
		$kelpmhon=$_POST['kelpmhon'];
		$alamatpmhon=$_POST['alamatpmhon'];		
	
		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'-1 hour'));
	
		
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];
    	$vimage3=$_FILES["img3"]["name"];
    	$vimage4=$_FILES["img4"]["name"];
    	$vimage5=$_FILES["img5"]["name"];
    	$vimage6=$_FILES["img6"]["name"];

		move_uploaded_file($_FILES["img1"]["tmp_name"],"files/kkbaru/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"files/kkbaru/".$_FILES["img2"]["name"]);
    	move_uploaded_file($_FILES["img3"]["tmp_name"],"files/kkbaru/".$_FILES["img3"]["name"]);
    	move_uploaded_file($_FILES["img4"]["tmp_name"],"files/kkbaru/".$_FILES["img4"]["name"]);
        move_uploaded_file($_FILES["img5"]["tmp_name"],"files/kkbaru/".$_FILES["img5"]["name"]);
        move_uploaded_file($_FILES["img6"]["tmp_name"],"files/kkbaru/".$_FILES["img6"]["name"]);
 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 12);

$uuidhtl = "pmkkbr-$time1$uuidhtl0";

		

$sql="INSERT INTO `kk_baru` (`uuid`, `uuid_reg`, `kkbarupmhon`, `nikpmhon`, `namapmhon`, `nokkpmhon`, `umurpmhon`, `kwnpmhon`, `klasifikasi`, `nikkepalakk`, `namakepalakk`, `kecpmhon`, `kelpmhon`, `alamatpmhon`, `f_bukunikah`, `f_kksuami`, `f_bukunikahsm`, `f_kkistri`, `f_bukunikahis`, `f_ktp`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$kkbarupmhon',

'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'$kwnpmhon',
'$selectedcat12',

'$nikkepalakk',
'$namakepalakk',

'$kecpmhon',
'$kelpmhon',
'$alamatpmhon',

'$vimage1',
'$vimage2',
'$vimage3',
'$vimage4',
'$vimage5',
'$vimage6',
'$tanggal',
'$status',
'1'
)";
  $sql2 = mysqli_query($koneksi, $sql); 
  
  
  
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time));

$time11 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11 = date('YmdHis');
$permitted_chars1 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01 = substr(str_shuffle($permitted_chars1), 0, 13);
$uuidhtlg = "pg-$time11$uuidhtl01";

$sql334 = "SELECT * FROM register  where nik= '$nikuser'";
$q1334 = mysqli_query($koneksi, $sql334);
$row4=mysqli_fetch_array($q1334);
$no_telpuser = $row4['no_telp'];
$namauser = $row4['nama'];

$sql41="INSERT INTO `tb_pengaduan` (`uuid`, `uuid_pengaduan`, `uuid_reg`, `nama`, `no_hp`,  `kd_jenis`, `jenis`,  `pengaduan`, `create-at`, `status`)
VALUES('$uuidhtlg',
'$uuidhtl',
'$nikuser',
'$namauser',
'$no_telpuser',
'BKKB',
'Kartu Keluarga ',

'Bentuk Keluarga Baru',
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
values ('$uuidhtlgch','Admin','$nikuser','Admin','$nikuser','Berkas  Kartu Keluarga Baru Behasil di Upload','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Kartu Keluarga Baru Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);
            

			echo "<script>alert('Upload Berkas Berjasil');</script>";
			
			
			
			
			
			
exit;
		
		
	}
	

	?>