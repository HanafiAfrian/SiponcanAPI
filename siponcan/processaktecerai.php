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


$niksuami= $_POST['niksuami'];
$namasuami= $_POST['namasuami'];
$nikistri= $_POST['nikistri'];
$namaistri= $_POST['namaistri'];

$yangmengajukan= $_POST['yangmengajukan'];
$noaktapmhon= $_POST['noaktapmhon'];
$pilih_tanggal_pesan= $_POST['pilih_tanggal_pesan'];
$nama_pengadilan= addslashes($_POST['nama_pengadilan']);
$pilih_tanggal_selesai= $_POST['pilih_tanggal_selesai'];
$no_pengadilan= $_POST['no_pengadilan'];
$pilih_tanggal_pesan1= $_POST['pilih_tanggal_pesan1'];
$pilih_tanggal_selesai1= $_POST['pilih_tanggal_selesai1'];

$tmptcttpperkawinan = addslashes($_POST['tmptcttpperkawinan']);		
$nosuratpenitera = $_POST['nosuratpenitera'];				
		
		
		
		
	
		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'-1 hour'));
	
		
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];
        $vimage3=$_FILES["img3"]["name"];
        $vimage4=$_FILES["img4"]["name"];
        $vimage5=$_FILES["img5"]["name"];
        
		move_uploaded_file($_FILES["img1"]["tmp_name"],"files/aktecerai/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"files/aktecerai/".$_FILES["img2"]["name"]);
		move_uploaded_file($_FILES["img3"]["tmp_name"],"files/aktecerai/".$_FILES["img3"]["name"]);
		move_uploaded_file($_FILES["img4"]["tmp_name"],"files/aktecerai/".$_FILES["img4"]["name"]);
		move_uploaded_file($_FILES["img5"]["tmp_name"],"files/aktecerai/".$_FILES["img5"]["name"]);

 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 12);

$uuidhtl = "pmacr-$time1$uuidhtl0";

		

$sql="INSERT INTO `tb_aktecerai` (`uuid`, `uuid_reg`, `nikpmhon`, `namapmhon`, `nokkpmhon`, `umurpmhon`, `kwnpmhon`, `niksuami`, `namasuami`, `nikistri`, `namaistri`, `yangmengajukan`, `noakta`, `tgglakte`, `nama_pengadilan`, `tggl_putusan`, `no_putusan`, `tggl_surat`, `tggl_lapor`, `tmptcttpperkawinan`, `nosuratpenitera`, `f_sputusan`, `f_aktekawin`, `f_pengatar`, `f_kk`, `f_ktp`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'$kwnpmhon',

'$niksuami',
'$namasuami',
'$nikistri',
'$namaistri',

'$yangmengajukan',
'$noaktapmhon',
'$pilih_tanggal_pesan',
'$nama_pengadilan',
'$pilih_tanggal_selesai',
'$no_pengadilan',
'$pilih_tanggal_pesan1',
'$pilih_tanggal_selesai1',


'$tmptcttpperkawinan',
'$nosuratpenitera',

'$vimage1',
'$vimage2',
'$vimage3',
'$vimage4',
'$vimage5',
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
'AKCER',
'Akta Perceraian',
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
values ('$uuidhtlgch','Admin','$nikuser','Admin','$nikuser','Berkas Akta Perceraian Behasil di Upload','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Akta Perceraian Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);
            

			echo "<script>alert('Upload Berkas Berjasil');</script>";
			
			
			
			
			
			
exit;
		
		
	}
	

	?>