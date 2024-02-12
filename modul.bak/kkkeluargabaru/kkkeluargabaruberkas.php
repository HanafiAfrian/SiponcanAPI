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
$kkbarupmhon = 'Keluarga Baru';
$nikpmhon = $_POST['nikpmhon'];
$namapmhon = $_POST['namapmhon'];
$nokkpmhon = $_POST['nokkpmhon'];
$umurpmhon = $_POST['umurpmhon'];
$kwnpmhon = 'Indonesia';


$kecpmhon = $_POST['kecpmhon'];
$kelpmhon = $_POST['kelpmhon'];
$alamatpmhon = $_POST['alamatpmhon'];
?>



<section>
    <br>
    <br><br><br>
    <div class="container">
    <h3 class="text-center">Permohonan Pembuatan KK Baru </h3>
          <h6 class="text-center mb-4">(Membentuk Keluarga Baru, Khusus Pasangan Suami Istri yang Memilik KK Sibolga)</h6>

           <form action="modul/kkkeluargabaru/processkkbaru.php" Method="post" enctype="multipart/form-data">
            <section>
                         <div class="col-lg-6">
                      <div class="form-group">
                         
<input type="Text" class="form-control" name="nikuser" value ="<?php echo $nikuser ?>">
<input type="Text" class="form-control" name="kkbarupmhon" value ="<?php echo $kkbarupmhon ?>">
<input type="Text" class="form-control" name="nikpmhon" value ="<?php echo $nikpmhon ?>">
<input type="Text" class="form-control" name="namapmhon" value ="<?php echo $namapmhon ?>">
<input type="Text" class="form-control" name="nokkpmhon" value ="<?php echo $nokkpmhon ?>">
<input type="Text" class="form-control" name="umurpmhon" value ="<?php echo $umurpmhon ?>">
<input type="Text" class="form-control" name="kwnpmhon" value ="<?php echo $kwnpmhon ?>">

<input type="Text" class="form-control" name="kecpmhon" value ="<?php echo $kecpmhon ?>">
<input type="Text" class="form-control" name="kelpmhon" value ="<?php echo $kelpmhon ?>">
<input type="Text" class="form-control" name="alamatpmhon" value ="<?php echo $alamatpmhon ?>">
                      </div>
                  </div>
                    <h6 class="mb-4 mt-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">3.</span> Berkas</h6>
                    <small><span class="text-danger">*Maks.Size Upload 5MB</span></small>
                    <div class="row">
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">Buku Nikah / Akta Kawin</label>
                                <input type="file" name="img1"  class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                                <small>Jika Buku Nikah, Foto halam 2&3 (*.jpg *.png *.pdf)</small>
                            </div>

                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">KK Suami</label>
                                <input type="file" name="img2"  class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                                <small>(*.jpg *.png *.pdf)</small>
                            </div>

                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">Buku Nikah / Akta Kawin Orang Tua</label>
                                <input type="file" name="img3"  class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                                <small>Jika Status Perkawinan Orang Tuanya Tertulis 'Kawin'(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>


                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">KK Istri</label>
                                <input type="file" name="img4"  class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                                <small>(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">Buku Nikah / Akta Kawin Orang Tua</label>
                                <input type="file"name="img5"   class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                                <small>Jika Status Perkawinan Orang Tuanya Tertulis 'Kawin' (*.jpg *.png *.pdf)</small>
                            </div>
                        </div>            
                        
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="">KTP-el Pemohon</label>
                                <input type="file" name="img6"  class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
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


                    <button id="save" class="btn btn-primary" type="submit">Submit</button>
              
            </section>

        </form>

        <form action="">
            <a class="mt-4 text-dark" href="kkbaru-alamat"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
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