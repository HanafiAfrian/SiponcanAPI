<?php


include('../../config/koneksi.php');

	if(isset($_POST['save']))
	echo "
";
	{

	    
	    $nikuser=$_POST['nikuser'];
		
		$nikpmhon=$_POST['nikpmhon'];
		$namapmhon=$_POST['namapmhon'];
		$nokkpmhon=$_POST['nokkpmhon'];
		$umurpmhon=$_POST['umurpmhon'];
		$kwnpmhon=$_POST['kwnpmhon'];
		
	$nm_anak=$_POST['nm_anak'];
	$selectedcat=$_POST['selectedcat'];
	$temp_lahir=$_POST['temp_lahir'];
	$pilih_tanggal_pesan=$_POST['pilih_tanggal_pesan'];
	$pilih_jam_pesan=$_POST['pilih_jam_pesan'];
	$selectedcat1=$_POST['selectedcat1'];
	$selectedcat2=$_POST['selectedcat2'];
	$shdk=$_POST['shdk'];
	$selectedcat3=$_POST['selectedcat3'];
	$nm_ayah=$_POST['nm_ayah'];
	$nm_ibu=$_POST['nm_ibu'];
	
		
		
		
	
		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));
	
		
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];
        $vimage3=$_FILES["img3"]["name"];
         $vimage4=$_FILES["img4"]["name"];

		move_uploaded_file($_FILES["img1"]["tmp_name"],"../../../files/kkpenambahananak/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"../../../files/kkpenambahananak/".$_FILES["img2"]["name"]);
		move_uploaded_file($_FILES["img3"]["tmp_name"],"../../../files/kkpenambahananak/".$_FILES["img3"]["name"]);
		move_uploaded_file($_FILES["img4"]["tmp_name"],"../../../files/kkpenambahananak/".$_FILES["img4"]["name"]);

 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 14);

$uuidhtl = "pmkkta-$time1$uuidhtl0";

		

$sql="INSERT INTO `kk_penambahan_anak` (`uuid`, `uuid_reg`, `nik_pm`, `nama_pm`, `nokk_pm`, `umur_pm`, `kwn_pm`, 
`nama`, `jk`, `tmp_lhr`, `thl_lhr`, `jam_lhr`, `gol_darah`, `agama`, `shdk`, `cacat`, `nm_ayah`, `nm_ibu`, 
`f_ket_lahir`, `f_surat_nikah`, `f_kk`, `f_ktp`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'$kwnpmhon',


'$nm_anak',
'$selectedcat',
'$temp_lahir',
'$pilih_tanggal_pesan',
'$pilih_jam_pesan',
'$selectedcat1',
'$selectedcat2',
'$shdk',
'$selectedcat3',
'$nm_ayah',
'$nm_ibu',





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

$sql41="INSERT INTO `tb_pengaduan` (`uuid`, `uuid_pengaduan`, `uuid_reg`, `nama`, `no_hp`, `kd_jenis`, `jenis`,  `pengaduan`, `create-at`, `status`)
VALUES('',
'$uuidhtl',
'$nikuser',
'$namauser',
'$no_telpuser',
'PDAPKK',
'Kartu Keluarga ',
'Penambahan Data Anak Pada Kartu Keluarga',
'$tanggal',
'$status'
)";
  $sql242 = mysqli_query($koneksi, $sql41); 

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$nikuser','Admin','$nikuser','Berkas Kartu Keluarga Penambahan data Anak Behasil di Upload','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Kartu Keluarga Penambahan data Anak Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);
            

			echo "<script>alert('Upload Berkas Berhasil');window.location='../../home';</script>";
			
			
			
			
			
exit;
		
		
	}
	

	?>