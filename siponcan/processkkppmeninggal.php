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
$namakepkel= addslashes($_POST['namakepkel']);

$niksaksi1= addslashes($_POST['niksaksi1']);
$namasaksi1= addslashes($_POST['namasaksi1']);
$nokksaksi1= addslashes($_POST['nokksaksi1']);
$umursaksi1= addslashes($_POST['umursaksi1']);
$kwnsaksi1= addslashes($_POST['kwnsaksi1']);
$niksaksi2= addslashes($_POST['niksaksi2']);
$namasaksi2= addslashes($_POST['namasaksi2']);
$nokksaksi2= addslashes($_POST['nokksaksi2']);
$umursaksi2= addslashes($_POST['umursaksi2']);
$kwnsaksi2= addslashes($_POST['kwnsaksi2']);

$pilih_tanggal_pesan= $_POST['pilih_tanggal_pesan'];


$pilih_jam_pesan = $_POST['pilih_jam_pesan'];

$nikjns = addslashes($_POST['nikjns']);
$namajns = addslashes($_POST['namajns']);
$namaibujns = addslashes($_POST['namaibujns']);
$selectedcat= $_POST['selectedcat'];
$selectedcat1 = $_POST['selectedcat1'];
$tpmeninggal= addslashes($_POST['tpmeninggal']);

	
		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'-1 hour'));
	
		
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];
		$vimage3=$_FILES["img3"]["name"];
		$vimage4=$_FILES["img4"]["name"];



		move_uploaded_file($_FILES["img1"]["tmp_name"],"files/kkppkematian/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"files/kkppkematian/".$_FILES["img2"]["name"]);
    	move_uploaded_file($_FILES["img3"]["tmp_name"],"files/kkppkematian/".$_FILES["img3"]["name"]);
		move_uploaded_file($_FILES["img4"]["tmp_name"],"files/kkppkematian/".$_FILES["img4"]["name"]);

 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 12);

$uuidhtl = "pmakkppmt-$time1$uuidhtl0";

		

$sql="INSERT INTO `kkpp_kematian` (`uuid`, `uuid_reg`, `nikpmhon`, `namapmhon`, `nokkpmhon`, `umurpmhon`,  `kwn`, `namakepkel`,`tggl_mnggl`, `jam_mnggl`,`nikjns`, `namajns`, `namaibujns`, `sebab_mngl`, `tngg_mnggl`, `tpmeninggal`, `f_ktp`,
`f_kk`,  `f_ktpjnazah`, `f_ktppemohon`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'$kwnpmhon',
'$namakepkel',

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

$sql41="INSERT INTO `tb_pengaduan` (`uuid`, `uuid_pengaduan`, `uuid_reg`, `nama`, `no_hp`,  `kd_jenis`, `jenis`, `pengaduan`, `create-at`, `status`)
VALUES('$uuidhtlg',
'$uuidhtl',
'$nikuser',
'$namauser',
'$no_telpuser',
'KKPPKEMATIAN',
'Kartu Keluarga',
'PERISTIWA PENTING KEMATIAN',
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
values ('$uuidhtlgch','Admin','$nikuser','Admin','$nikuser','Berkas Akta Kematian Behasil di Upload','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Akta Kematian Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);
            

			echo "<script>alert('Upload Berkas Berjasil');</script>";
			
			
			
			
			
			
exit;
		
		
	}
	

	?>