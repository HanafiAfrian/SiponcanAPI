<?php


include('../../config/koneksi.php');

	if(isset($_POST['save']))
	echo "
";
	{

	    
	    $nikuser=$_POST['nikuser'];
		
$nikpmhon = $_POST['nikpmhon'];
$namapmhon = $_POST['namapmhon'];
$nokkpmhon = $_POST['nokkpmhon'];
$umurpmhon= $_POST['umurpmhon'];

$niksaksi1= $_POST['niksaksi1'];
$namasaksi1= $_POST['namasaksi1'];
$nokksaksi1= $_POST['nokksaksi1'];
$umursaksi1= $_POST['umursaksi1'];
$kwnsaksi1= $_POST['kwnsaksi1'];
$niksaksi2= $_POST['niksaksi2'];
$namasaksi2= $_POST['namasaksi2'];
$nokksaksi2= $_POST['nokksaksi2'];
$umursaksi2= $_POST['umursaksi2'];
$kwnsaksi2= $_POST['kwnsaksi2'];
$pilih_tanggal_pesan= $_POST['pilih_tanggal_pesan'];


$pilih_jam_pesan = $_POST['pilih_jam_pesan'];
$nikjns = $_POST['nikjns'];
$namajns = $_POST['namajns'];
$namaibujns = $_POST['namaibujns'];
$selectedcat= $_POST['selectedcat'];
$selectedcat1 = $_POST['selectedcat1'];
$tpmeninggal= $_POST['tpmeninggal'];

	
		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));
	
		
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];
    	$vimage3=$_FILES["img3"]["name"];
		$vimage4=$_FILES["img4"]["name"];

		move_uploaded_file($_FILES["img1"]["tmp_name"],"../../../files/aktekematian/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"../../../files/aktekematian/".$_FILES["img2"]["name"]);
		move_uploaded_file($_FILES["img3"]["tmp_name"],"../../../files/aktekematian/".$_FILES["img3"]["name"]);
		move_uploaded_file($_FILES["img4"]["tmp_name"],"../../../files/aktekematian/".$_FILES["img4"]["name"]);

 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 14);

$uuidhtl = "pmakmt-$time1$uuidhtl0";

		

$sql="INSERT INTO `tb_aktekematian` (`uuid`, `uuid_reg`, `nikpmhon`, `namapmhon`, `nokkpmhon`, `umurpmhon`,  `kwn`, `niksaksi1`, 
`namasaksi1`, `nokksaksi1`, `umursaksi1`, `kwnsaksi1`, `niksaksi2`, `namasaksi2`, `nokksaksi2`, `umursaksi2`, `kwnsaksi2`, 
`tggl_mnggl`, `jam_mnggl`,`nikjns`, `namajns`, `namaibujns`, `sebab_mngl`, `tngg_mnggl`, `tpmeninggal`, `f_ktp`,
`f_kk`, `f_ktpjnazah`, `f_ktppemohon`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'Indonesia',

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
'$pilih_tanggal_pesan',
'$pilih_jam_pesan',
'$nikjns',
'$namajns',
'$namaibujns',
'$selectedcat',
'$selectedcat1',
'$tpmeninggal',

'$vimage1',
'$vimage2',
'$vimage3',
'$vimage4',
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

$sql41="INSERT INTO `tb_pengaduan` (`uuid`, `uuid_pengaduan`, `uuid_reg`, `nama`, `no_hp`,  `kd_jenis`, `jenis`, `pengaduan`, `create-at`, `status`)
VALUES('',
'$uuidhtl',
'$nikuser',
'$namauser',
'$no_telpuser',
'AKDEAD',
'Akta Kematian',
'',
'$tanggal',
'$status'
)";
  $sql242 = mysqli_query($koneksi, $sql41); 

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$nikuser','Admin','$nikuser','Berkas Akta Kematian Behasil di Upload','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Akta Kematian Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);
            

	echo "<script>alert('Upload Berkas Berhasil');window.location='../../home';</script>";
			
			
			
			
			
			
exit;
		
		
	}
	

	?>