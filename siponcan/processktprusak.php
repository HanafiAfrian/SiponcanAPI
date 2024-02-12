<?php


include('koneksi.php');

	if(isset($_POST['save']))
	echo "
";
	{

	    
	    $nikuser= addslashes($_POST['nikuser']);
		
$nikpmhon = addslashes($_POST['nikpmhon']);
$namapmhon = addslashes($_POST['namapmhon']);
$nokkpmhon = addslashes($_POST['nokkpmhon']);
$umurpmhon= addslashes($_POST['umurpmhon']);
$kwnpmhon= addslashes($_POST['kwnpmhon']);

$nikpr= addslashes($_POST['nikpr']);
$namapr= addslashes($_POST['namapr']);
$temptlahir= addslashes($_POST['temptlahir']);

$pilih_tanggal_pesan= $_POST['pilih_tanggal_pesan'];
$selectedcat= $_POST['selectedcat'];
$selectedcat1= $_POST['selectedcat1'];

$rusakkarena= addslashes($_POST['rusakkarena']);


						
	
		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'-1 hour'));
	
		
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];


		move_uploaded_file($_FILES["img1"]["tmp_name"],"files/ktprusak/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"files/ktprusak/".$_FILES["img2"]["name"]);


 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 13);

$uuidhtl = "pmktpr-$time1$uuidhtl0";

		

$sql="INSERT INTO `ktprusak` (`uuid`, `uuid_reg`, `nik_pm`, `nama_pm`, `nokk_pm`, `umur_pm`, `kwn_pm`, `nik_pr`, `nama_pr`, `temptlahir`, `tggllahir`, `jk`, `agama`, `alasan`, `f_kkasli`, `f_ktp`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'$kwnpmhon',

'$nikpr',
'$namapr',


'$temptlahir',
'$pilih_tanggal_pesan',
'$selectedcat',
'$selectedcat1',
'$rusakkarena',
'$vimage1',
'$vimage2',
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
$namauser = addslashes($row4['nama']);

$sql41="INSERT INTO `tb_pengaduan` (`uuid`, `uuid_pengaduan`, `uuid_reg`, `nama`, `no_hp`, `kd_jenis`, `jenis`, `pengaduan`, `create-at`, `status`)
VALUES('$uuidhtlg',
'$uuidhtl',
'$nikuser',
'$namauser',
'$no_telpuser',
'KTPRUSAK',
'Kartu Tanda Penduduk',
'KTP RUSAK',
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
values ('$uuidhtlgch','Admin','$nikuser','Admin','$nikuser','Berkas Kartu Tanda Penduduk Behasil di Upload','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Kartu Tanda Penduduk Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);
            



			echo "<script>alert('Upload Berkas Berjasil');</script>";
			
			
			
			
			
			
exit;
		
		
	}
	

	?>