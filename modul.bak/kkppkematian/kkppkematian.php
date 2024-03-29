<?php
session_start();
$nikuser = $_SESSION['nik'];
$sql1 = "SELECT * FROM  register WHERE nik = '$nikuser'";
$sql2 = mysqli_query($koneksi, $sql1);
$row = mysqli_fetch_array($sql2);
$nama = $row['nama'];
if (empty($_SESSION['nik'])) {
    header('location:home');
}
?>
<?php
include 'config/aktivity.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/cst-styles.css">
    <script src="https://use.fontawesome.com/e1c52708df.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .navbar {
            z-index: 2000;
            width: 100%;


        }

        .nbr {
            width: 100%;

            margin-top: -50px;

        }

        @media (max-width: 996px) {
            .navbar {
                z-index: 2000;
                width: 100%;

            }

            .nbr {
                width: 100%;

                margin-top: -50px;

            }
        }

        .progress-bar-cst .step .bullet:before,
        .progress-bar-cst .step .bullet:after {
            position: absolute;
            content: "";
            bottom: 11px;
            right: -18rem;
            height: 3px;
            width: 15rem;
            background: #262626;
        }
    </style>

<body style="min-height:0px">
    <div class="container">

        <h3 class="text-center mb-4"> Peristiwa Penting Kematian</h3>
           
        <div class="progress-bar-cst">
            <div class="step">
                <p>Pemohon</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Data Jenazah</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>

           
            <div class="step">
                <p>Berkas</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>


        </div>
        <div class="form-outer">
            <form action="" Method="post" enctype="multipart/form-data">
                <div class="page slide-page">
                    <div class="title mb-4">Pemohon:</div>
                    <div class="row">
                        <input type="hidden" class="form-control" name="nikuser" value="<?php echo $nikuser ?>">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nik" class="field">NIK</label>
                                <input type="number" name="nikpmhon" data-maxlength="16" data-minlength="16" class="form-control" id="nik" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="namapmhon" class="field">Nama Lengkap (Sesuai KTP)</label>
                                <input type="text" class="form-control" id="namapmhon" name="namapmhon" aria-describedby="emailHelp" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nokkpmhon" class="field">Email Aktif</label>
                                <input type="email" class="form-control" name="nokkpmhon" id="nokkpmhon" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="umurpmhon" class="field">No.Telepon</label>
                                <input type="number" class="form-control" id="umurpmhon" name="umurpmhon" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="kwnpmhon" class="field">Kewarganegaraan</label>
                                <input type="text" class="form-control" id="kwnpmhon" name="kwnpmhon" aria-describedby="emailHelp" value="Indonesia" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="field" style="
                    margin-top: 50px; height: 45px; width: 72%;
    ">
                        <button class="firstNext next">Selanjutnya</button>
                    </div>
                </div>

                <!-- asal -->
                <div class="page">
                    <div class="title mb-4">Data Jenazah:</div>
                    <div class="row">

  <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jamkematian" class="field">Tanggal Kematian</label>
                                <input type="date" name="pilih_tanggal_pesan" data-maxlength="16" data-minlength="16" class="form-control" id="jamkematian" aria-describedby="emailHelp" required>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nokkpmhon" class="field">Waktu Kematian</label>
                                <input type="time" class="form-control" name="pilih_jam_pesan" id="nokkpmhon" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nikjns" class="field">NIK Jenazah</label>
                                <input type="number" class="form-control" id="nikjns" name="nikjns" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="namajns" class="field">Nama Lengkap Jenazah</label>
                                <input type="text" class="form-control" id="namajns" name="namajns" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="namaibujns" class="field">Nama Lengkap Ibu Jenazah</label>
                                <input type="text" class="form-control" id="namaibujns" name="namaibujns" aria-describedby="emailHelp" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jk" class="field">Penyebab Kematian</label>
                                <select class="custom-select" name="selectedcat" required>
                                    <option hidden>Pilih</option>
                                    <option value="Sakit Biasa/Tua">Sakit Biasa/Tua</option>
                                    <option value="Pandemi/Wabah Penyakit">Pandemi/Wabah Penyakit</option>
                                    <option value="Kecelakaan">Kecelakaan</option>
                                    <option value="Kriminalitas">Kriminalitas</option>
                                    <option value="Bunuh Dii">Bunuh Diri</option>
                                    <option value="Lainnya">Lainnya</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jk" class="field">Yang Menerangkan</label>
                                <select class="custom-select" name="selectedcat1" required>
                                    <option hidden>Pilih</option>
                                    <option value="Dokter">Dokter</option>
                                    <option value="Tenaga Kesehatan">Tenaga Kesehatan</option>
                                    <option value="polisi">polisi</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tpmeninggal" class="field">Tempat Kematian</label>
                                <input type="text" class="form-control" name="tpmeninggal" id="tpmeninggal" aria-describedby="emailHelp" required>
                            </div>
                        </div>



                    </div>
                    <div class=" field btns  mr-3" style="
                      margin-top: 50px;height: 45px; width: 100%;">
                        <button class="prev-1 prev btn-cst">Sebelumnya</button>
                        <button class="next-1 next btn-cst">Selanjutnya</button>
                    </div>
                </div>

                <!-- end halaman asal -->

               



                <div class="page">
                    <div class="title">Berkas:</div>
                    <div class="info text-danger mb-4">*Maks.Size Upload 5MB</div>

                    <div class="row">




                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">KTP-el Pemohon</label>
                                <input type="file" name="img1" class="form-control-file btn btn-outline-secondary" id="uploadakm" required>
                                <small class="field text-left" style="font-size: 12px;">(*.jpg *.png *.pdf)</small>
                            </div>

                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">Kartu Keluarga</label>
                                <input type="file" name="img2" class="form-control-file btn btn-outline-secondary" id="uploadakm2" required>
                                <small class="field text-left" style="font-size: 12px;">(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">KTP-el Jenazah</label>
                                <input type="file" name="img3" class="form-control-file btn btn-outline-secondary" id="uploadakm3" required>
                                <small class="field text-left" style="font-size: 12px;">(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">Surat Ket. Kematian dari Kelurahan</label>
                                <input type="file" name="img4" class="form-control-file btn btn-outline-secondary" id="uploadakm4" required>
                                <small class="field text-left" style="font-size: 12px;">Jika buku nikah foto halaman 2&3 (*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
                      

                        <div class="row mx-2 mt-3">


                            <div class="col-lg-12 col-12 mb-2 text-left mt-4">
                                Pernyataan: Demikian formulir serta dokumen persyaratan ini
                                saya/kami
                                buat dengan
                                sesungguhnya. Apabila keterangan tersebut tidak sesuaidengan keadaan sebenarnya,
                                saya/kami bersedia dikenakan sanksi sesuai ketentuan peraturan perundang-undangan
                                yang berlaku.
                            </div>



                        </div>
                        <div class="row mx-2">
                            <div class="col-lg-12 col-12 mt-2">
                                <div class="custom-control custom-checkbox mb-4">
                                    <input type="checkbox" class="custom-control-input" id="chkbx" required>
                                    <br>
                                    <label class="custom-control-label mt-4" for="chkbx"><span>Centang ini sebagai
                                            pengganti
                                            tanda tangan pemohon/pelapor</span></label>

                                </div>
                            </div>
                        </div>
                        <!-- data ibu -->



                    </div>
                    <div class=" field btns  mr-3" style="
                      margin-top: 50px;height: 45px; width: 100%;">
                        <button class="prev-1 prev btn-cst">Sebelumnya</button>
                        <button class="next-1 next btn-cst" id="save">Selanjutnya</button>
                    </div>
                </div>


                <div class="page">
                    <div class="title">Kirim Berkas:</div>
                    <H4>Kirim Berkas Sekarang?</H4>
                    <img src="images/img-confirm.png" width="300px" alt="">
                    <h4>Pastikan Semua Data Telah Sesuai, Klik Submit Untuk Mengirim</h4>
                    <div class=" field btns  mr-3" style="
                    margin-top: 50px;height: 45px; width: 98%;">

                        <button class="prev-5 prev">Sebelumnya</button>
                        <button name="SUBMITPA" class="submit">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
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


    var file = document.getElementById('uploadakm');

    file.onchange = function(e) {
        var ext = this.value.match(/\.([^\.]+)$/)[1];
        switch (ext) {
            case 'jpg':
            case 'JPG':
            case 'PNG':
            case 'png':
            case 'jpeg':
            case 'JPEG':
            case 'pdf':
            case 'PDF':

                break;
            default:
                alert('File Tidak Diizinkan');
                this.value = null;
        }
    };
</script>

<script>
    var file2 = document.getElementById('uploadakm2');

    file2.onchange = function(e) {
        var ext = this.value.match(/\.([^\.]+)$/)[1];
        switch (ext) {
            case 'jpg':
            case 'JPG':
            case 'PNG':
            case 'png':
            case 'jpeg':
            case 'JPEG':
            case 'pdf':
            case 'PDF':

                break;
            default:
                alert('File Tidak Diizinkan');
                this.value = null;
        }
    };
</script>

<script>
    var file3 = document.getElementById('uploadakm3');

    file3.onchange = function(e) {
        var ext = this.value.match(/\.([^\.]+)$/)[1];
        switch (ext) {
            case 'jpg':
            case 'JPG':
            case 'PNG':
            case 'png':
            case 'jpeg':
            case 'JPEG':
            case 'pdf':
            case 'PDF':

                break;
            default:
                alert('File Tidak Diizinkan');
                this.value = null;
        }
    };
</script>
<script>
    var file4 = document.getElementById('uploadakm4');

    file4.onchange = function(e) {
        var ext = this.value.match(/\.([^\.]+)$/)[1];
        switch (ext) {
            case 'jpg':
            case 'JPG':
            case 'PNG':
            case 'png':
            case 'jpeg':
            case 'JPEG':
            case 'pdf':
            case 'PDF':

                break;
            default:
                alert('File Tidak Diizinkan');
                this.value = null;
        }
    };
</script>



</html>


<?php


include('config/koneksi.php');

	if(isset($_POST['SUBMITPA']))

	{

	    
	   $nikuser= addslashes($_POST['nikuser']);
		
$nikpmhon = addslashes($_POST['nikpmhon']);
$namapmhon = addslashes($_POST['namapmhon']);
$nokkpmhon = addslashes($_POST['nokkpmhon']);
$umurpmhon= addslashes($_POST['umurpmhon']);

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
$tanggal = date('y-m-d H:i:s', strtotime($tanggal));
	
		
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];
		$vimage3=$_FILES["img3"]["name"];
		$vimage4=$_FILES["img4"]["name"];



		move_uploaded_file($_FILES["img1"]["tmp_name"],"siponcan/files/kkppkematian/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"siponcan/files/kkppkematian/".$_FILES["img2"]["name"]);
    	move_uploaded_file($_FILES["img3"]["tmp_name"],"siponcan/files/kkppkematian/".$_FILES["img3"]["name"]);
		move_uploaded_file($_FILES["img4"]["tmp_name"],"siponcan/files/kkppkematian/".$_FILES["img4"]["name"]);

 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 12);

$uuidhtl = "pmakkppmt-$time1$uuidhtl0";

		

$sql="INSERT INTO `kkpp_kematian` (`uuid`, `uuid_reg`, `nikpmhon`, `namapmhon`, `nokkpmhon`, `umurpmhon`,  `kwn`,`tggl_mnggl`, `jam_mnggl`,`nikjns`, `namajns`, `namaibujns`, `sebab_mngl`, `tngg_mnggl`, `tpmeninggal`, `f_ktp`,
`f_kk`,  `f_ktpjnazah`, `f_ktppemohon`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'Indonesia',

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
values ('$uuidhtlgch','Admin','$nikuser','Admin','$nikuser','Berkas Akta Kematian Behasil di Upload','wr','1','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Akta Kematian Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);

			echo "<script>alert('Upload Berkas Berhasil');window.location='home';</script>";
			
			
			
			
			
exit;
		
		
	}
	

	?>








