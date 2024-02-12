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
$kwnpmhon = 'Indonesia'

?>

<section>
        <br>
        <br><br><br>
        <div class="container">
            <h3 class="text-center mb-4">Pelayanan Pembuatan KK Hilang / Rusak</h3>
    
  <form action="modul/kkhilang/processkkhilang.php" Method="post" enctype="multipart/form-data">
            
                          <h6 class="mb-4 mt-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">2.</span> Upload Berkas</h6>
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
 
                      </div>
                  </div>     
                            <div class="col-lg-6 mt-4">
                                <div class="form-group">
                                <label for="">KTP-el Pemohon </label>
                                    <input type="file" name="img1" class="form-control-file btn btn-outline-secondary"
                                    id="exampleFormControlFile1" required>
                                    <small>(*.jpg *.png *.pdf)</small>
                                </div>
                        
            
                            </div>

              
                              <div class="col-lg-6 mt-4">
                                  <div class="form-group">
                                  <label for="">Kartu Keluarga yang Rusak</label>
                                      <input type="file"  name="img2" class="form-control-file btn btn-outline-secondary"
                                      id="exampleFormControlFile1" required>
                                      <small>jika rusak upload / photo kondisi KK yang rusak (*.jpg *.png *.pdf)</small>
                                  </div>
                                
                              </div>
              

              
              
                              <div class="col-lg-6 mt-4">
                                <div class="form-group">
                                <label for="">Surat Ket. Hilang dari Polisi</label>
                                    <input type="file"   name="img3" class="form-control-file btn btn-outline-secondary"
                                    id="exampleFormControlFile1" required>
                                    <small>jika hilang maka wajib upload / photo surat keet. hilang dari kepolisian (*.jpg *.png *.pdf)</small>
                                </div>
                            
                            </div>
                          <!-- data ibu -->
              
                          <!-- tes -->
              
              
                          <!-- tes -->
              
                          <div class="row mx-1">
              
              
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
                          </div>
                          <!-- data ibu -->
   
              
                          <button id="save" class="btn btn-primary">Submit</button>
                  
        
                   
            </form>
            <form action="">
              <a class="mt-4 text-dark" href="aktalahir-ibu"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
              <div class="dropdown-divider mt-4"></div>
          </form>
          </div>
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
     
          
     
 
    </section>
  