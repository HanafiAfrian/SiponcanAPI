<?php


include('koneksi.php');

	if(isset($_POST['save']))
	echo "
";
	{

	    
	    $nikuser=$_POST['nikuser'];
		
		$nikpmhon=$_POST['nikpmhon'];
		$namapmhon=addslashes($_POST['namapmhon']);
		$nokkpmhon=$_POST['nokkpmhon'];
		$umurpmhon=$_POST['umurpmhon'];
		$kwnpmhon=$_POST['kwnpmhon'];
		
$niksuami= $_POST['niksuami'];
$namasuami= $_POST['namasuami'];
$selectedcat= $_POST['selectedcat'];
$kawin_kesuami= $_POST['kawin_kesuami'];


$nikistri= $_POST['nikistri'];
$namaistri= $_POST['namaistri'];
$selectedcat1= $_POST['selectedcat1'];
$kawin_keistri= $_POST['kawin_keistri'];

$nik_ayah_s= $_POST['nik_ayah_s'];
$nama_ayah_s= $_POST['nama_ayah_s'];
$nik_ibu_s= $_POST['nik_ibu_s'];
$nama_ibu_s= $_POST['nama_ibu_s'];

$nik_ayah_is= $_POST['nik_ayah_is'];
$nama_ayah_is= $_POST['nama_ayah_is'];
$nik_ibu_is= $_POST['nik_ibu_is'];
$nama_ibu_is= $_POST['nama_ibu_is'];

$pilih_tanggal_pesan= $_POST['pilih_tanggal_pesan'];
$tempatpemberkatan= $_POST['tempatpemberkatan'];
$nm_organisasi= $_POST['nm_organisasi'];
$ket_organisasi= $_POST['ket_organisasi'];

$niksaksi1= $_POST['niksaksi1'];
$namasaksi1= $_POST['namasaksi1'];
		
		
		
		
		
		
	
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
        $vimage7=$_FILES["img7"]["name"];
        $vimage8=$_FILES["img8"]["name"];
        $vimage9=$_FILES["img9"]["name"];

		move_uploaded_file($_FILES["img1"]["tmp_name"],"files/aktekawin/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"files/aktekawin/".$_FILES["img2"]["name"]);
		move_uploaded_file($_FILES["img3"]["tmp_name"],"files/aktekawin/".$_FILES["img3"]["name"]);
		move_uploaded_file($_FILES["img4"]["tmp_name"],"files/aktekawin/".$_FILES["img4"]["name"]);
		move_uploaded_file($_FILES["img5"]["tmp_name"],"files/aktekawin/".$_FILES["img5"]["name"]);
		move_uploaded_file($_FILES["img6"]["tmp_name"],"files/aktekawin/".$_FILES["img6"]["name"]);
		move_uploaded_file($_FILES["img7"]["tmp_name"],"files/aktekawin/".$_FILES["img7"]["name"]);
		move_uploaded_file($_FILES["img8"]["tmp_name"],"files/aktekawin/".$_FILES["img8"]["name"]);
		move_uploaded_file($_FILES["img9"]["tmp_name"],"files/aktekawin/".$_FILES["img9"]["name"]);		
		
		
		

 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 12);

$uuidhtl = "pmkaktkwn-$time1$uuidhtl0";

		

$sql="INSERT INTO `tb_aktekawin` (`uuid`, `uuid_reg`, `nik_pm`, `nama_pm`, `nokk_pm`, `umur_pm`, `kwn`, `niksuami`, `namasuami`, `stssbelummenikahsuami`, `perkawinankesuami`, `nikistri`, `namaistri`, `stssbelummenikahistri`, `perkawinankeistri`, `nik_ayah_s`, `nama_ayah_s`, `nik_ibu_s`, `nama_ibu_s`, `nik_ayah_is`, `nama_ayah_is`, `nik_ibu_is`, `nama_ibu_is`, `tannggal_kawin`, `tempatkawin`, `nama_organisasi_kep`, `nama_pemuka_kep`, `niksaksi`, `namasaksi`, `f_suratkawin`, `f_foto`, `f_kk`, `f_kkIstri`, `f_ktpuami`, `f_ktpistri`, `f_aktekutipan`, `f_ktppemohon`, `f_akte`,`create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'$kwnpmhon',


'$niksuami',
'$namasuami',
'$selectedcat',
'$kawin_kesuami',

'$nikistri',
'$namaistri',
'$selectedcat1',
'$kawin_keistri',

'$nik_ayah_s',
'$nama_ayah_s',
'$nik_ibu_s',
'$nama_ibu_s',

'$nik_ayah_is',
'$nama_ayah_is',
'$nik_ibu_is',
'$nama_ibu_is',


'$pilih_tanggal_pesan',
'$tempatpemberkatan',
'$nm_organisasi',
'$ket_organisasi',

'$niksaksi1',

'$namasaksi1',





'$vimage1',
'$vimage2',
'$vimage3',
'$vimage4',
'$vimage5',
'$vimage6',
'$vimage7',
'$vimage8',

'$vimage9',


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



$sql41="INSERT INTO `tb_pengaduan` (`uuid`, `uuid_pengaduan`, `uuid_reg`, `nama`, `no_hp`,  `kd_jenis`, `jenis`, `pengaduan`, `create-at`, `status`)
VALUES('$uuidhtlg',
'$uuidhtl',
'$nikuser',
'$namauser',
'$no_telpuser',
'AKWIN',
'Akta Perkawinan',
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
values ('$uuidhtlgch','Admin','$nikuser','Admin','$nikuser','Berkas Akta Perkawinan Behasil di Upload','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Akta Perkawinan Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);
            
			echo "<script>alert('Upload Berkas Berjasil');</script>";
			
			
			
			
			
			
exit;
		
		
	}
	

	?>