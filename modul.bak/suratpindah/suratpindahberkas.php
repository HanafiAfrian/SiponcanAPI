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



$nikuser = $_POST['nikuser'];
$nikpmhon = $_POST['nikpmhon'];
$namapmhon = $_POST['namapmhon'];
$nokkpmhon = $_POST['nokkpmhon'];
$umurpmhon = $_POST['umurpmhon'];
$kwnpmhon = 'Indonesia';




$selectedcat = $_POST['selectedcat'];
$provinsi = 'Sumatra Utara';
$kabupaten = 'Sibolga';
$kecamatan = $_POST['kecamatan'];
$kelurahan = $_POST['kelurahan'];
$alamat = $_POST['alamat'];
$kdpos = $_POST['kdpos'];


$provinsitj = $_POST['provinsitj'];
$kabupatentj = $_POST['kabupatentj'];
$kectj = $_POST['kectj'];
$kltj = $_POST['kltj'];
$alamattj = $_POST['alamattj'];
$kdpostj = $_POST['kdpostj'];
$selectedcat1 = $_POST['selectedcat1'];
$selectedcat2 = $_POST['selectedcat2'];
$selectedcat3 = $_POST['selectedcat3'];
$selectedcat4 = $_POST['selectedcat4'];




?>


<section>
    <br>
    <br><br><br>
    <div class="container">
        <h3 class="text-center mb-4">Pelayanan Pembuatan Surat Pindah</h3>

   <form action="modul/suratpindah/processsuratpindah.php" Method="post" enctype="multipart/form-data">

        
            <h6 class="mb-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">4.</span> Upload Berkas</h6>
            <small><span class="text-danger">*Maks.Size Upload 5MB</span></small>
           
           
            <div class="row">
 <div class="col-lg-6">
                      <div class="form-group">
                         
<input type="Text" class="form-control" name="nikuser" value ="<?php echo $nikuser ?>">
<input type="Text" class="form-control" name="nikpmhon" value ="<?php echo $nikpmhon ?>">
<input type="Text" class="form-control" name="namapmhon" value ="<?php echo  $namapmhon ?>">
<input type="Text" class="form-control" name="nokkpmhon" value ="<?php echo  $nokkpmhon ?>">
<input type="Text" class="form-control" name="umurpmhon" value ="<?php echo  $umurpmhon ?>">
<input type="Text" class="form-control" name="kwnpmhon" value ="<?php echo $kwnpmhon ?>">

<input type="Text" class="form-control" name="selectedcat" value ="<?php echo $selectedcat ?>">
<input type="Text" class="form-control" name="provinsi" value ="<?php echo $provinsi ?>">
<input type="Text" class="form-control" name="kabupaten" value ="<?php echo $kabupaten ?>">
<input type="Text" class="form-control" name="kecamatan" value ="<?php echo $kecamatan ?>">
<input type="Text" class="form-control" name="kelurahan" value ="<?php echo $kelurahan ?>">
<input type="Text" class="form-control" name="alamat" value ="<?php echo $alamat ?>">
<input type="Text" class="form-control" name="kdpos" value ="<?php echo $kdpos ?>">


<input type="Text" class="form-control" name="provinsitj" value ="<?php echo $provinsitj ?>">
<input type="Text" class="form-control" name="kabupatentj" value ="<?php echo $kabupatentj ?>">
<input type="Text" class="form-control" name="kectj" value ="<?php echo $kectj ?>">
<input type="Text" class="form-control" name="kltj" value ="<?php echo $kltj ?>">
<input type="Text" class="form-control" name="alamattj" value ="<?php echo $alamattj ?>">
<input type="Text" class="form-control" name="kdpostj" value ="<?php echo $kdpostj ?>">
<input type="Text" class="form-control" name="selectedcat1" value ="<?php echo $selectedcat1 ?>">
<input type="Text" class="form-control" name="selectedcat2" value ="<?php echo $selectedcat2 ?>">
<input type="Text" class="form-control" name="selectedcat3" value ="<?php echo $selectedcat3 ?>">
<input type="Text" class="form-control" name="selectedcat4" value ="<?php echo $selectedcat4 ?>">



                      </div>
                  </div>
                <div class="col-lg-6 mt-4">
                    <div class="form-group">
                        <label for="">KTP-el Pemohon </label>
                        <input type="file" name="img1" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                        <small>(*.jpg *.png *.pdf)</small>
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="form-group">
                        <label for="">Kartu Keluarga</label>
                        <input type="file"  name="img2" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                        <small>(*.jpg *.png *.pdf)</small>
                    </div>
                </div>


                <div class="col-lg-6 mt-4">
                    <div class="form-group">
                        <label for="">Buku Nikah / Akta Kawin</label>
                        <input type="file" name="img3" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                        <small>Jika buku nikah (halaman 2&3) (*.jpg *.png *.pdf)</small>
                    </div>
                </div> 

              
                <!-- data ibu -->

                </div>
           
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

                <button id="save" class="btn btn-primary">Submit</button>

              
                
        </form>
        
        <form action="">
            <a class="mt-4 text-dark" href="aktalahir-ibu"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <div class="dropdown-divider mt-4"></div>
        </form>
    </div>
 
</section>

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