<?php


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

$selectedcat= $_POST['selectedcat'];
$provinsi= $_POST['provinsi'];
$kabupaten= $_POST['kabupaten'];
$kecamatan= $_POST['kecamatan'];
$kelurahan= $_POST['kelurahan'];
$alamat= $_POST['alamat'];
$kdpos= $_POST['kdpos'];

$provinsitj= $_POST['provinsitj'];
$kabupatentj= $_POST['kabupatentj'];
$kectj= $_POST['kectj'];
$kltj= $_POST['kltj'];
$alamattj= addslashes($_POST['alamattj']);
$kdpostj= $_POST['kdpostj'];

$selectedcat1 = $_POST['selectedcat1'];
$selectedcat2 = $_POST['selectedcat2'];
$selectedcat3= $_POST['selectedcat3'];
$selectedcat4= $_POST['selectedcat4'];
		
		
		
		
	
		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'-1 hour'));
	
		
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];
	    $vimage3=$_FILES["img3"]["name"];

		move_uploaded_file($_FILES["img1"]["tmp_name"],"files/kkpppindah/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"files/kkpppindah/".$_FILES["img2"]["name"]);
		move_uploaded_file($_FILES["img3"]["tmp_name"],"files/kkpppindah/".$_FILES["img3"]["name"]);

 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 10);

$uuidhtl = "pmkkkppsp-$time1$uuidhtl0";

		

$sql="INSERT INTO `kkpp_suratpindah` (`uuid`, `uuid_reg`, `nikpmhon`, `namapmhon`, `nokkpmhon`, `umurpmhon`, `kwn`, `provinsitj`, `kabupatentj`, `kectj`, `kltj`, `alamattj`, `kdpostj`, `alasanpindah`, `jenispindah`, `datakeluarga`, `datapindah`, `f_ktp`, `f_kk`, `f_bukunikah`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',

'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'$kwnpmhon',



'$provinsitj',
'$kabupatentj',
'$kectj',
'$kltj',
'$alamattj',
'$kdpostj',
'$selectedcat1',
'$selectedcat2',
'$selectedcat3',
'$selectedcat4',


'$vimage1',
'$vimage2',
'$vimage3',
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

$sql41="INSERT INTO `tb_pengaduan` (`uuid`, `uuid_pengaduan`, `uuid_reg`, `nama`, `no_hp`, `kd_jenis`, `jenis`,  `pengaduan`, `create-at`, `status`)
VALUES('$uuidhtlg',
'$uuidhtl',
'$nikuser',
'$namauser',
'$no_telpuser',
'KKPPPINDAH',
'Kartu Keluarga',
'Peristiwa Penting Kepindahan',
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
values ('$uuidhtlgch','Admin','$nikuser','Admin','$nikuser','Berkas  Surat Pindah Behasil di Upload','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Surat Pindah Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);
            

			echo "<script>alert('Upload Berkas Berjasil');</script>";
			
			
			
			
			
			
exit;
		
		
	}
	

	?>