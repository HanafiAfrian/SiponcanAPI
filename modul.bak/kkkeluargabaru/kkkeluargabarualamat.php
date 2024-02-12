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
?>


<section>
      <br>
      <br><br><br>
      <div class="container">
          <h3 class="text-center">Permohonan Pembuatan KK Baru </h3>
          <h6 class="text-center mb-4">(Membentuk Keluarga Baru, Khusus Pasangan Suami Istri yang Memilik KK Sibolga)</h6>
          <form action="kkbaru-berkas" method="POST">
              <h6 class="mb-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 8px; width: 30px; text-align: center;">2.</span> Alamat Baru</h6>
              <div class="row">
                  
                      
                 <div class="col-lg-6">
                      <div class="form-group">
                         
<input type="Text" class="form-control" name="nikuser" value ="<?php echo $nikuser ?>">
<input type="Text" class="form-control" name="kkbarupmhon" value ="<?php echo $kkbarupmhon ?>">
<input type="Text" class="form-control" name="nikpmhon" value ="<?php echo $nikpmhon ?>">
<input type="Text" class="form-control" name="namapmhon" value ="<?php echo $namapmhon ?>">
<input type="Text" class="form-control" name="nokkpmhon" value ="<?php echo $nokkpmhon ?>">
<input type="Text" class="form-control" name="umurpmhon" value ="<?php echo $umurpmhon ?>">
<input type="Text" class="form-control" name="kwnpmhon" value ="<?php echo $kwnpmhon ?>">
                      </div>
                  </div>             
                  
                  <div class="col-lg-12">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Kecamatan</label>
                          <input type="text" name="kecpmhon" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" required>
                      </div>
                  </div>
                
                  <div class="col-lg-12">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Desa / Kelurahan</label>
                          <input type="text" name="kelpmhon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Alamat</label>
                          <input type="text" name="alamatpmhon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                  </div>
                 
                  
              </div>
  
  
   
              <a href="kkbaru-berkas"><button  id="save" class="btn btn-primary" type="submit">Next</button></a>
          </form>
          <form action="">
              <a class="mt-4 text-dark" href="kkbaru"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
              <div class="dropdown-divider mt-4"></div>
          </form>
      </div>
  </section>
   