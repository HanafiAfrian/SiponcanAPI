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


$noaktapmhon = $_POST['noaktapmhon'];
$pilih_tanggal_pesan = $_POST['pilih_tanggal_pesan'];
$tmptcttpperkawinan = $_POST['tmptcttpperkawinan'];


$nama_pengadilan = $_POST['nama_pengadilan'];
$pilih_tanggal_selesai = $_POST['pilih_tanggal_selesai'];
$no_pengadilan = $_POST['no_pengadilan'];
$nosuratpenitera = $_POST['nosuratpenitera'];


$pilih_tanggal_pesan1 = $_POST['pilih_tanggal_pesan1'];
$pilih_tanggal_selesai1 = $_POST['pilih_tanggal_selesai1'];

?>
<section>
      <br>
      <br>
      <div class="container">
          <h3 class="text-center mb-4">Pelayanan Pembuatan Akta Perceraian</h3>
  
  <form action="modul/aktacerai/processaktecerai.php" Method="post" enctype="multipart/form-data">
            <section>
     
                    
                <div class="dropdown-divider"></div>
                        <h6 class="mb-4 mt-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">3.</span> Berkas</h6>
                        <small><span class="text-danger">*Maks.Size Upload 5MB</span></small>
                        <div class="row">
                            
                                <div class="col-lg-6">
                      <div class="form-group">
                         
<input type="Text" class="form-control" name="nikuser" value ="<?php echo $nikuser ?>">
<input type="Text" class="form-control" name="nikpmhon" value ="<?php echo $nikpmhon ?>">
<input type="Text" class="form-control" name="namapmhon" value ="<?php echo $namapmhon ?>">
<input type="Text" class="form-control" name="nokkpmhon" value ="<?php echo $nokkpmhon ?>">
<input type="Text" class="form-control" name="umurpmhon" value ="<?php echo $umurpmhon ?>">
<input type="Text" class="form-control" name="kwnpmhon" value ="<?php echo $kwnpmhon ?>">

<input type="Text" class="form-control" name="noaktapmhon" value ="<?php echo $noaktapmhon ?>">
<input type="Text" class="form-control" name="pilih_tanggal_pesan" value ="<?php echo $pilih_tanggal_pesan ?>">
<input type="Text" class="form-control" name="tmptcttpperkawinan" value ="<?php echo $tmptcttpperkawinan ?>">
<input type="Text" class="form-control" name="nama_pengadilan" value ="<?php echo $nama_pengadilan ?>">
<input type="Text" class="form-control" name="pilih_tanggal_selesai" value ="<?php echo $pilih_tanggal_selesai ?>">
<input type="Text" class="form-control" name="no_pengadilan" value ="<?php echo $no_pengadilan ?>">
<input type="Text" class="form-control" name="nosuratpenitera" value ="<?php echo $nosuratpenitera ?>">
<input type="Text" class="form-control" name="pilih_tanggal_pesan1" value ="<?php echo $pilih_tanggal_pesan1 ?>">
<input type="Text" class="form-control" name="pilih_tanggal_selesai1" value ="<?php echo $pilih_tanggal_selesai1 ?>">
                      </div>
                  </div>
                            <div class="col-lg-6 mt-4">
                                <div class="form-group">
                                    <label for="">Salinan Putusan Pengadilan</label>
                                    <input type="file" name="img1" class="form-control-file btn btn-outline-secondary"
                                    id="exampleFormControlFile1" required>
                                    <small>Keseluruhan salinan putusan pengadilan (*.pdf)
                                    </small>
                                </div>                          
                            </div>
            
                            <div class="col-lg-6 mt-4">
                                <div class="form-group">
                                <label for="">Kutipan akta kawin pemohon</label>
                                    <input type="file" name="img2" class="form-control-file btn btn-outline-secondary"
                                    id="exampleFormControlFile1" required>
                                    <small>Kutipan akta kawin pemohon yang asli (*.jpg *.png *.pdf)</small>
                                </div>                             
                            </div>
            
                            <div class="col-lg-6 mt-4">
                                <div class="form-group">
                                <label for="">Surat Pengantar Panitera</label>
                                    <input type="file" name="img3" class="form-control-file btn btn-outline-secondary"
                                    id="exampleFormControlFile1" required>
                                    <small>(*.jpg *.png *.pdf)</small>
                                </div>                       
                            </div>
            
                            <div class="col-lg-6 mt-4">                       
                                <div class="form-group">
                                <label for="">Kartu Keluarga</label>
                                    <input type="file" name="img4" class="form-control-file btn btn-outline-secondary"
                                    id="exampleFormControlFile1">
                                    <small for="exampleFormControlFile1" required>(*.jpg *.png *.pdf)</small>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">                       
                                <div class="form-group">
                                <label for="">KTP-el Pemohon</label>
                                    <input type="file" name="img5" class="form-control-file btn btn-outline-secondary"
                                    id="exampleFormControlFile1">
                                    <small for="exampleFormControlFile1" required>(*.jpg *.png *.pdf)</small>
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
                                    <input type="checkbox"  class="custom-control-input" id="chkbx" required>
                                    <label class="custom-control-label" for="chkbx"><span>Centang ini sebagai pengganti tanda tangan pemohon/pelapor</span></label>
            
                                </div>
                            </div>
            
                        </div>
                        <!-- data ibu -->
 
            
                        <button id="save" class="btn btn-primary">Submit</button>
        
            </section>
                 
          </form>

           
          <form action="">
            <a class="mt-4 text-dark" href="aktacerai-perceraian"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <div class="dropdown-divider mt-4"></div>
        </form>
            <script>
                    
            $(document).ready(function(){
                $('#save').prop('disabled', true);
            
                $('#chkbx').click(function(){
                    if($(this).is(':checked'))
                    {
                        $('#save').prop('disabled', false);
                    }
                    else
                    {
                        $('#save').prop('disabled', true);
                    }
                });
            });
            </script>
   
       
      </div>
  </section>