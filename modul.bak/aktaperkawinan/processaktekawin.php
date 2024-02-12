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
		
	$niksaksi1=$_POST['niksaksi1'];
	$namasaksi1=$_POST['namasaksi1'];
	$nokksaksi1=$_POST['nokksaksi1'];
	$umursaksi1=$_POST['umursaksi1'];
	$kwnsaksi1=$_POST['kwnsaksi1'];
	$niksaksi2=$_POST['niksaksi2'];
	$namasaksi2=$_POST['namasaksi2'];
	$nokksaksi2=$_POST['nokksaksi2'];
	$umurksaksi2=$_POST['umurksaksi2'];
	$kwnsaksi2=$_POST['kwnsaksi2'];
	$nik_ayah_s=$_POST['nik_ayah_s'];
	$nama_ayah_s=$_POST['nama_ayah_s'];
	$nik_ibu_s=$_POST['nik_ibu_s'];
	$nama_ibu_s=$_POST['nama_ibu_s'];
	$nik_ayah_is=$_POST['nik_ayah_is'];
	$nama_ayah_is=$_POST['nama_ayah_is'];
	$nik_ibu_is=$_POST['nik_ibu_is'];
	$nama_ibu_is=$_POST['nama_ibu_is'];
	$selectedcat=$_POST['selectedcat'];
	$kawin_ke=$_POST['kawin_ke'];
	$istri_ke=$_POST['istri_ke'];
	$pilih_tanggal_pesan=$_POST['pilih_tanggal_pesan'];
	$pilih_tanggal_selesai=$_POST['pilih_tanggal_selesai'];
	$pilih_jam_pesan=$_POST['pilih_jam_pesan'];
	
	$selectedcat1=$_POST['selectedcat1'];
	$nm_organisasi=$_POST['nm_organisasi'];
	$ket_organisasi=$_POST['ket_organisasi'];
				
		
		
		
		
		
		
	
		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));
	
		
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];
        $vimage3=$_FILES["img3"]["name"];
         $vimage4=$_FILES["img4"]["name"];
          $vimage5=$_FILES["img5"]["name"];
           $vimage6=$_FILES["img6"]["name"];
            $vimage7=$_FILES["img7"]["name"];
            $vimage8=$_FILES["img8"]["name"];

		move_uploaded_file($_FILES["img1"]["tmp_name"],"../../../files/aktekawin/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"../../../files/aktekawin/".$_FILES["img2"]["name"]);
		move_uploaded_file($_FILES["img3"]["tmp_name"],"../../../files/aktekawin/".$_FILES["img3"]["name"]);
		move_uploaded_file($_FILES["img4"]["tmp_name"],"../../../files/aktekawin/".$_FILES["img4"]["name"]);
		move_uploaded_file($_FILES["img5"]["tmp_name"],"../../../files/aktekawin/".$_FILES["img5"]["name"]);
		move_uploaded_file($_FILES["img6"]["tmp_name"],"../../../files/aktekawin/".$_FILES["img6"]["name"]);		
		move_uploaded_file($_FILES["img7"]["tmp_name"],"../../../files/aktekawin/".$_FILES["img7"]["name"]);
		move_uploaded_file($_FILES["img8"]["tmp_name"],"../../../files/aktekawin/".$_FILES["img8"]["name"]);
	
		
 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 12);

$uuidhtl = "pmkaktkwn-$time1$uuidhtl0";

		

$sql="INSERT INTO `tb_aktekawin` (`uuid`, `uuid_reg`, `nik_pm`, `nama_pm`, `nokk_pm`, `umur_pm`, `kwn`, 
`nik_saksi1`, `nama_saksi1`, `nokk_saksi1`, `umur_saksi1`, `kwn_saksi1`, `nik_saksi2`, `nama_saksi2`, 
`nokk_saksi2`, `umur_saksi2`, `kwn_saksi2`, `nik_ayah_s`, `nama_ayah_s`, `nik_ibu_s`, `nama_ibu_s`,
`nik_ayah_is`, `nama_ayah_is`, `nik_ibu_is`, `nama_ibu_is`, `status__kawin`, `kawin_ke`, `istri_ke`,
`tannggal_kawin`, `tanggal_lapor`, `jam_pelapor`, `agama`, `nama_organisasi_kep`, `nama_pemuka_kep`,
`f_suratkawin`, `f_foto`, `f_kk`, `f_kkIstri`, `f_ktpuami`, `f_ktpistri`, `f_aktekutipan`, 
`f_ktppemohon`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'$kwnpmhon',


'$niksaksi1',
'$namasaksi1',
'$nokksaksi1',
'$umursaksi1',
'$kwnsaksi1',
'$niksaksi2',
'$namasaksi2',
'$nokksaksi2',
'$umurksaksi2',
'$kwnsaksi2',
'$nik_ayah_s',
'$nama_ayah_s',
'$nik_ibu_s',
'$nama_ibu_s',
'$nik_ayah_is',
'$nama_ayah_is',
'$nik_ibu_is',

'$nama_ibu_is',
'$selectedcat',
'$kawin_ke',
'$istri_ke',
'$pilih_tanggal_pesan',
'$pilih_tanggal_selesai',
'$pilih_jam_pesan',
'$selectedcat1',
'$nm_organisasi',
'$ket_organisasi',





'$vimage1',
'$vimage2',
'$vimage3',
'$vimage4',
'$vimage5',
'$vimage6',
'$vimage7',
'$vimage8',





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
'AKWIN',
'Akta Perkawinan',
'',
'$tanggal',
'$status'
)";
  $sql242 = mysqli_query($koneksi, $sql41); 

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$nikuser','Admin','$nikuser','Berkas Akta Perkawinan Behasil di Upload','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Akta Perkawinan Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);
    echo "<script>alert('Upload Berkas Berhasil');window.location='../../home';</script>";
			
			
			
			
			
			
exit;
		
		
	}
	

	?>