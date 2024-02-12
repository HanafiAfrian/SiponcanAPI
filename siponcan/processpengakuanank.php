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




$nikpr = $_POST['nikpr'];
$namapr = addslashes($_POST['namapr']);
$temptlahir = $_POST['temptlahir'];
$pilih_tanggal_pesan= $_POST['pilih_tanggal_pesan'];
$selectedcat= $_POST['selectedcat'];
$selectedcat1= $_POST['selectedcat1'];
$anakke= $_POST['anakke'];
$noaktakel= addslashes($_POST['noaktakel']);
$pilih_tanggal_pesan1= $_POST['pilih_tanggal_pesan1'];
$penerbit= $_POST['penerbit'];


$nikibukandung= addslashes($_POST['nikibukandung']);
$namaibukandung= addslashes($_POST['namaibukandung']);
$nikayahkandung= addslashes($_POST['nikayahkandung']);
$namaayahkandung= addslashes($_POST['namaayahkandung']);
$nikibuangkat= addslashes($_POST['nikibuangkat']);
$namaibuangkat= addslashes($_POST['namaibuangkat']);

$noputusanpengadilan= addslashes($_POST['noputusanpengadilan']);
$pilih_tanggal_pesan2= addslashes($_POST['pilih_tanggal_pesan2']);
$nmputusanpengadilan= addslashes($_POST['nmputusanpengadilan']);
$temptputusanpengadilan= addslashes($_POST['temptputusanpengadilan']);


		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'-1 hour'));
	
		
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];
    	$vimage3=$_FILES["img3"]["name"];

		move_uploaded_file($_FILES["img1"]["tmp_name"],"files/pengakuananak/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"files/pengakuananak/".$_FILES["img2"]["name"]);
    	move_uploaded_file($_FILES["img3"]["tmp_name"],"files/pengakuananak/".$_FILES["img3"]["name"]);
	
	
	
 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 13);

$uuidhtl = "pmktpa-$time1$uuidhtl0";

		

$sql="INSERT INTO `pengakuananak` (`uuid`, `uuid_reg`, `nik_pm`, `nama_pm`, `nokk_pm`, `umur_pm`, `kwn_pm`, `nik_pr`, `nama_pr`, `temptlahir`, `tggllahir`, `jk`, `anakke`, `noaktakel`, `tggl_terbit`, `penerbit`, `nikibukandung`, `namaibukandung`, `nikayahkandung`, `namaayahkandung`, `nikibuangkat`, `namaibuangkat`, `noputusanpengadilan`, `tanggalputusan`, `nmputusanpengadilan`, `temptputusanpengadilan`, `f_ktpayah`, `f_ktpibu`, `f_kk`, `create-at`, `status`, `konvirm`)

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
'$anakke',
'$noaktakel',
'$pilih_tanggal_pesan1',
'$penerbit',


'$nikibukandung',
'$namaibukandung',
'$nikayahkandung',
'$namaayahkandung',
'$nikibuangkat',
'$namaibuangkat',

'$noputusanpengadilan',
'$pilih_tanggal_pesan2',
'$nmputusanpengadilan',
'$temptputusanpengadilan',





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

$sql41="INSERT INTO `tb_pengaduan` (`uuid`, `uuid_pengaduan`, `uuid_reg`, `nama`, `no_hp`, `kd_jenis`, `jenis`, `pengaduan`, `create-at`, `status`)
VALUES('$uuidhtlg',
'$uuidhtl',
'$nikuser',
'$namauser',
'$no_telpuser',
'AKPENGAKUANANAK',
'Akta Pengakuan Anak',
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