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



$nm_anak = $_POST['nm_anak'];
$selectedcat = $_POST['selectedcat'];
$temp_lahir = $_POST['temp_lahir'];
$pilih_tanggal_pesan = $_POST['pilih_tanggal_pesan'];
$pilih_jam_pesan = $_POST['pilih_jam_pesan'];
$selectedcat1 = $_POST['selectedcat1'];
$selectedcat2 = $_POST['selectedcat2'];
$shdk = 'Anak';
$selectedcat3 = $_POST['selectedcat3'];
$nm_ayah = $_POST['nm_ayah'];
$nm_ibu = $_POST['nm_ibu'];

?>

<section>
    <br>
    <br><br><br>
    <div class="container">
        <h3 class="text-center mb-4">Pelayanan Pembuatan Penambahan Anak di KK</h3>
        <h4 class="blockquote text-center">(Khusus Anak Baru Lahir)</h4>


           <form action="modul/kkpenambahananak/processkkpenambahananak.php" Method="post" enctype="multipart/form-data">
            <section>

       <div class="col-lg-6">
                        <div class="form-group">
                        
<input type="text" name="nikuser" value="<?php echo $nikuser ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
<input type="text" name="nikpmhon" value="<?php echo  $nikpmhon ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
 
 <input type="text" name="namapmhon" value="<?php echo  $namapmhon ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
 
 <input type="text" name="nokkpmhon" value="<?php echo  $nokkpmhon ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
 
 <input type="text" name="umurpmhon" value="<?php echo  $umurpmhon ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
 
 <input type="text" name="kwnpmhon" value="<?php echo $kwnpmhon ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  
  <input type="text" name="nm_anak" value="<?php echo $nm_anak ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  <input type="text" name="selectedcat" value="<?php echo $selectedcat ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
   <input type="text" name="temp_lahir" value="<?php echo $temp_lahir ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
   <input type="text" name="pilih_tanggal_pesan" value="<?php echo $pilih_tanggal_pesan ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
   <input type="text" name="pilih_jam_pesan" value="<?php echo $pilih_jam_pesan ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
   <input type="text" name="selectedcat1" value="<?php echo $selectedcat1 ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
   <input type="text" name="selectedcat2" value="<?php echo $selectedcat2 ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
   <input type="text" name="shdk" value="<?php echo $shdk ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
   <input type="text" name="selectedcat3" value="<?php echo $selectedcat3 ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
   <input type="text" name="nm_ayah" value="<?php echo $nm_ayah ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
   <input type="text" name="nm_ibu" value="<?php echo $nm_ibu ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  
      
      
                    
                        </div>
                    </div>
                    

                <h6 class="mb-4 mt-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">4.</span> Upload Berkas</h6>
                <small><span class="text-danger">*Maks.Size Upload 5MB</span></small>

                <div class="row">

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
                            <input type="file" name="img2" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                            <small>(*.jpg *.png *.pdf)</small>
                        </div>

                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label for="">Surat ket. Lahir</label>
                            <input type="file" name="img3" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                            <small>dari RS/Puskesmas/Klinik/Bidan (*.jpg *.png *.pdf)</small>
                        </div>

                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label for="">Surat Nikah / Akta Kawin</label>
                            <input type="file" name="img4" class="form-control-file btn btn-outline-secondary" id="exampleFormControlFile1" required>
                            <small>jika buku nikah foto halaman 2&3 (*.jpg *.png *.pdf)</small>
                        </div>

                    </div>
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
                    <!-- data ibu -->


                    <button id="save" type="submit" class="btn btn-primary">Submit</button>

            </section>

        </form>

        <form action="aktaperkawinan">
            <a class="mt-4 text-dark" href="penambahananak-data" type="submit"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
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