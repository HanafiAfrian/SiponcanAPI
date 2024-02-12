

<?php
session_start();
$nikuser = $_SESSION['nik'];
$sql1 = "SELECT * FROM  register WHERE nik = '$nikuser'";
$sql2 = mysqli_query($koneksi, $sql1);
$row = mysqli_fetch_array($sql2);
$nama = $row['nama'];
if(empty($_SESSION['nik'])){
	 header('location:home');	
}
?>
<?php
include 'config/aktivity.php';
?>

<?php
	    
	    $nikuser=$_POST['nikuser'];
		
		$nikpmhon=$_POST['nikpmhon'];
		$namapmhon=$_POST['namapmhon'];
		$nokkpmhon=$_POST['nokkpmhon'];
		$umurpmhon=$_POST['umurpmhon'];

        $kwnpmhon= 'Indonesia';


		$niksaksi1=$_POST['niksaksi1'];
		$namasaksi1=$_POST['namasaksi1'];
		$nokksaksi1=$_POST['nokksaksi1'];
		$umursaksi1=$_POST['umursaksi1'];
		$kwnsaksi1='Indonesia';
		$niksaksi2=$_POST['niksaksi2'];
		$namasaksi2=$_POST['namasaksi2'];
		$nokksaksi2=$_POST['nokksaksi2'];
		$umurksaksi2=$_POST['umurksaksi2'];
		$kwnsaksi2= 'Indonesia';

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
	
?><section>
    <br>
    <br>
    <div class="container">
        <h3 class="text-center mb-4">Pelayanan Pembuatan Akta Perkawinan</h3>

        <form action="" Method="post" enctype="multipart/form-data">
            <section>
             
                         
<input type="hidden" class="form-control" name="nikuser"  value ="<?php echo $nikuser ?>">

<input type="hidden" class="form-control" name="nikpmhon"  value ="<?php echo $nikpmhon ?>">
<input type="hidden" class="form-control" name="namapmhon"  value ="<?php echo $namapmhon ?>">
<input type="hidden" class="form-control" name="nokkpmhon"  value ="<?php echo $nokkpmhon ?>">
<input type="hidden" class="form-control" name="umurpmhon"  value ="<?php echo $umurpmhon ?>">
<input type="hidden" class="form-control" name="kwnpmhon"  value ="<?php echo $kwnpmhon ?>">

<input type="hidden" class="form-control" name="niksaksi1"  value ="<?php echo $niksaksi1 ?>">
<input type="hidden" class="form-control" name="namasaksi1"  value ="<?php echo $namasaksi1 ?>">
<input type="hidden" class="form-control" name="nokksaksi1"  value ="<?php echo $nokksaksi1 ?>">
<input type="hidden" class="form-control" name="umursaksi1"  value ="<?php echo $umursaksi1 ?>">
<input type="hidden" class="form-control" name="kwnsaksi1"  value ="<?php echo $kwnsaksi1 ?>">
<input type="hidden" class="form-control" name="niksaksi2"  value ="<?php echo $niksaksi2 ?>">
<input type="hidden" class="form-control" name="namasaksi2"  value ="<?php echo $namasaksi2 ?>">
<input type="hidden" class="form-control" name="nokksaksi2"  value ="<?php echo $nokksaksi2 ?>">
<input type="hidden" class="form-control" name="umurksaksi2"  value ="<?php echo $umurksaksi2 ?>">
<input type="hidden" class="form-control" name="kwnsaksi2"  value ="<?php echo $kwnsaksi2 ?>">

<input type="hidden" class="form-control" name="nik_ayah_s"  value ="<?php echo $nik_ayah_s ?>">
<input type="hidden" class="form-control" name="nama_ayah_s"  value ="<?php echo $nama_ayah_s ?>">
<input type="hidden" class="form-control" name="nik_ibu_s"  value ="<?php echo $nik_ibu_s ?>">
<input type="hidden" class="form-control" name="nama_ibu_s"  value ="<?php echo $nama_ibu_s ?>">
<input type="hidden" class="form-control" name="nik_ayah_is"  value ="<?php echo $nik_ayah_is ?>">
<input type="hidden" class="form-control" name="nama_ayah_is"  value ="<?php echo $nama_ayah_is ?>">
<input type="hidden" class="form-control" name="nik_ibu_is"  value ="<?php echo $nik_ibu_is ?>">
<input type="hidden" class="form-control" name="nama_ibu_is"  value ="<?php echo $nama_ibu_is ?>">
<input type="hidden" class="form-control" name="selectedcat"  value ="<?php echo $selectedcat ?>">
<input type="hidden" class="form-control" name="kawin_ke"  value ="<?php echo $kawin_ke ?>">
<input type="hidden" class="form-control" name="istri_ke"  value ="<?php echo $istri_ke ?>">
<input type="hidden" class="form-control" name="pilih_tanggal_pesan"  value ="<?php echo $pilih_tanggal_pesan ?>">
<input type="hidden" class="form-control" name="pilih_tanggal_selesai"  value ="<?php echo $pilih_tanggal_selesai ?>">
<input type="hidden" class="form-control" name="pilih_jam_pesan"  value ="<?php echo $pilih_jam_pesan ?>">
<input type="hidden" class="form-control" name="selectedcat1"  value ="<?php echo $selectedcat1 ?>">
<input type="hidden" class="form-control" name="nm_organisasi"  value ="<?php echo $nm_organisasi ?>">
<input type="hidden" class="form-control" name="ket_organisasi"  value ="<?php echo $ket_organisasi ?>">


                   
                    <div class="dropdown-divider"></div>
                    <h6 class="mb-4 mt-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">4.</span> Berkas</h6>
                    <small><span class="text-danger">*Maks.Size Upload 5MB</span></small>
                    <div class="row">
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">Surat Kawin</label>
                                <input type="file" name="img1" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                                <small>Ket: Surat Kawin dari Pemuka Agama (*.jpg *.png *.pdf)</small>
                            </div>

                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">Pas Foto Gandeng berwarna</label>
                                <input type="file" name="img2" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                                <small>Ket: Pas Foto Gandeng berwarna ukuran 4x6 (*.jpg *.png *.pdf)</small>
                            </div>

                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">Kartu Keluarga</label>
                                <input type="file" name="img3" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                                <small>Gunakan KK Suami Jika Belum Satu KK dengan Istri(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
       <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">Kartu Keluarga Istri</label>
                                <input type="file" name="img4" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                                <small>Jika Istri Belum Satu KK dengan Suami(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">KTP-el Suami</label>
                                <input type="file" name="img5" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                                <small>(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">KTP-el Istri</label>
                                <input type="file" name="img6" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                                <small>(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">Akte Kutipan</label>
                                <input type="file" name="img7" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                                <small> Ket: Kutipan Akte Perceraian atau Kutipan Akte Kematian Bagi Pernikahan Ke-2 atau Lebih(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">KTP-el Pemohon</label>
                                <input type="file" name="img8" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                                <small>(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>

                    </div>
                    <!-- data ibu -->

                    <!-- tes -->


                    <!-- tes -->

                    <div class="row">


                        <div class="col-lg-12 mt-4">
                            <span>Pernyataan: Demikian formulir serta dokumen persyaratn ini saya/kami buat dengan sesungguhnya. Apabila keterangan tersebut tidak sesuaidengan keadaan sebenarnya, saya/kami bersedia dikenakan sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.</span>
                        </div>

                        <div class="col-lg-12 mt-4">
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="chkbx" required>
                                <label class="custom-control-label" for="chkbx"><span>Centang ini sebagai pengganti tanda tangan pemohon/pelapor</span></label>

                            </div>
                        </div>

                    </div>
                    <!-- data ibu -->


                    <button id="save" name="SUBMIT1" class="btn btn-primary" type="submit">Submit</button>
              
            </section>

        </form>

        <form action="">
            <a class="mt-4 text-dark" href="aktaperkawinan-perkawinan"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <div class="dropdown-divider mt-4"></div>
        </form>
        <script>
            $(document).ready(function() {
                $('#save').prop('disabled', true);

                $('#chkbx').click(function() {
                    if ($(this).is(':checked')) {
                        $('#save').prop('disabled', false);
                    } else {
                        $('#save').prop('disabled', true);
                    }
                });
            });
        </script>


  
    </div>
</section>


<?php
include 'config/koneksi.php';

	if(isset($_POST['SUBMIT1']))

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

 $fileinfo = @getimagesize($_FILES["img1"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );	
	
	
	   $allowed_image_extension2 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
    	   $allowed_image_extension3 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
    	   $allowed_image_extension4 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
    	   $allowed_image_extension5 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
    	   $allowed_image_extension6 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
    	   $allowed_image_extension7 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
    	   $allowed_image_extension8 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
// Get image file extension
    $file_extension = pathinfo($_FILES["img1"]["name"], PATHINFO_EXTENSION);
    $file_extension2 = pathinfo($_FILES["img2"]["name"], PATHINFO_EXTENSION);
    $file_extension3 = pathinfo($_FILES["img3"]["name"], PATHINFO_EXTENSION);
    $file_extension4 = pathinfo($_FILES["img4"]["name"], PATHINFO_EXTENSION);
    $file_extension5 = pathinfo($_FILES["img5"]["name"], PATHINFO_EXTENSION);
    $file_extension6 = pathinfo($_FILES["img6"]["name"], PATHINFO_EXTENSION);
    $file_extension7 = pathinfo($_FILES["img7"]["name"], PATHINFO_EXTENSION);
    $file_extension8 = pathinfo($_FILES["img8"]["name"], PATHINFO_EXTENSION);
                            
    
    
       if (! file_exists($_FILES["img1"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    
    else if (! in_array($file_extension, $allowed_image_extension)) {
        
       
        	echo "<script>alert('File Surat Kawin Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    } 
    
    
        else if (! in_array($file_extension2, $allowed_image_extension2)) {
        
       
        	echo "<script>alert('File Pas Foto Gandeng berwarna Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    } 
    
    
        else if (! in_array($file_extension3, $allowed_image_extension3)) {
        
       
        	echo "<script>alert('File Kartu Keluarga Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    } 
    
           else if (! in_array($file_extension4, $allowed_image_extension4)) {
        
       
        	echo "<script>alert('File Kartu Keluarga Istri Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    } 
    
            else if (! in_array($file_extension5, $allowed_image_extension5)) {
        
       
        	echo "<script>alert('File KTP-el Suami Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }
    
                else if (! in_array($file_extension6, $allowed_image_extension6)) {
        
       
        	echo "<script>alert('File KTP-el Istri Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }
    
                 else if (! in_array($file_extension7, $allowed_image_extension7)) {
        
       
        	echo "<script>alert('File Akte Kutipan Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }
    
                else if (! in_array($file_extension8, $allowed_image_extension8)) {
        
       
        	echo "<script>alert('File KTP-el Pemohon Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }
    
	       else if (($_FILES["img1"]["size"] > 5000000 )) {
	echo "<script>alert('File Surat Kawin Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    }
    
    
    
    	       else if (($_FILES["img2"]["size"] > 5000000 )) {
	echo "<script>alert('File Pas Foto Gandeng berwarna Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    }
    
    
    	       else if (($_FILES["img3"]["size"] > 5000000 )) {
	echo "<script>alert('File Kartu Keluarga Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    }
    
       	       else if (($_FILES["img4"]["size"] > 5000000 )) {
	echo "<script>alert('File Kartu Keluarga Istri Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    } 
    
           	       else if (($_FILES["img5"]["size"] > 5000000 )) {
	echo "<script>alert('File KTP-el Suami Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    } 
    
    
               	       else if (($_FILES["img6"]["size"] > 5000000 )) {
	echo "<script>alert('File KTP-el Istri Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    } 
    
    
                  	       else if (($_FILES["img7"]["size"] > 5000000 )) {
	echo "<script>alert('File Akte Kutipan Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    }  
                     	       else if (($_FILES["img8"]["size"] > 5000000 )) {
	echo "<script>alert('File KTP-el Pemohon Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    } 
    
	    else{	
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];
        $vimage3=$_FILES["img3"]["name"];
         $vimage4=$_FILES["img4"]["name"];
          $vimage5=$_FILES["img5"]["name"];
           $vimage6=$_FILES["img6"]["name"];
            $vimage7=$_FILES["img7"]["name"];
            $vimage8=$_FILES["img8"]["name"];

		move_uploaded_file($_FILES["img1"]["tmp_name"],"../files/aktekawin/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"../files/aktekawin/".$_FILES["img2"]["name"]);
		move_uploaded_file($_FILES["img3"]["tmp_name"],"../files/aktekawin/".$_FILES["img3"]["name"]);
		move_uploaded_file($_FILES["img4"]["tmp_name"],"../files/aktekawin/".$_FILES["img4"]["name"]);
		move_uploaded_file($_FILES["img5"]["tmp_name"],"../files/aktekawin/".$_FILES["img5"]["name"]);
		move_uploaded_file($_FILES["img6"]["tmp_name"],"../files/aktekawin/".$_FILES["img6"]["name"]);		
		move_uploaded_file($_FILES["img7"]["tmp_name"],"../files/aktekawin/".$_FILES["img7"]["name"]);
		move_uploaded_file($_FILES["img8"]["tmp_name"],"../files/aktekawin/".$_FILES["img8"]["name"]);
	
		
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
    echo "<script>alert('Upload Berkas Berhasil');window.location='home';</script>";
			
			
			
			
			
			
exit;
		
		
	}
	
}
	?>