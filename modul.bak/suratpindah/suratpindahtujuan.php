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


?>



      <br>
      <br><br><br>
      <div class="container">
          <h3 class="text-center mb-4">Pelayanan Pembuatan Surat Pindah</h3>
  
          <form action="suratpindah-berkas" method="post">
          <h6 class="mb-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">3.</span> Tujuan</h6>
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
                      </div>
                  </div>
                  
                  <div class="col-lg-6">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Propinsi</label>
                          <input type="text" name="provinsitj" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Kabupaten</label>
                          <input type="text" name="kabupatentj" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                  </div>
                  
                  
                  
                         <div class="col-lg-6">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Kecamatan</label>
                          <input type="text" name="kectj" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                  </div>
                  
                  
                  <div class="col-lg-6">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Kelurahan / Desa</label>
                          <input type="text" name="kltj" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                  </div>
                  <div class="col-lg-6">
  
                      <div class="form-group">
                          <label for="exampleInputEmail1">Alamat</label>
                          <input type="text" name="alamattj" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                  </div>
                  <div class="col-lg-6">
  
                      <div class="form-group">
                          <label for="exampleInputEmail1">Kode Pos</label>
                          <input type="number" name="kdpostj" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                  </div>
                  <div class="col-lg-6">
  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alasan Pindah</label>
                          <select class="form-control"  name="selectedcat1" id="exampleFormControlSelect1">
                            <option hidden>Pilih</option>
                            <option>Pekerjaan</option>
                            <option>Pendidikan</option>
                            <option>Keamanan</option>
                            <option>Kesehatan</option>
                            <option>Perumahan</option>
                            <option>Keluarga</option>
                            <option>Lainnya</option>
                          </select>
                    </div>
                </div>
                <div class="col-lg-6">
  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kepindahan</label>
                          <select class="form-control" name="selectedcat2" id="exampleFormControlSelect1">
                            <option Hidden>Pilih</option>
                            <option>Kepala Keluarga</option>
                            <option>Kepala Keluarga dan Seluruh Anggota Keluarga</option>
                            <option>Anggota Keluarga</option>
                          </select>
                    </div>
                </div>
                <div class="col-lg-6">
  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Data Keluarga di KK yang Tidak Pindah</label>
                          <select class="form-control" name="selectedcat3" id="exampleFormControlSelect1">
                            <option hidden>Pilih</option>
                            <option>Numpang KK</option>
                            <option>Membuat KK Baru</option>
                          </select>
                    </div>
                </div>
                <div class="col-lg-6">
  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Data Keluarga di KK yang Tidak Pindah</label>
                          <select class="form-control" name="selectedcat4" id="exampleFormControlSelect1">
                            <option hidden>Pilih</option>
                            <option>Numpang KK</option>
                            <option>Membuat KK Baru</option>
                          </select>
                    </div>
                </div>
              </div>
  
  
   
              <button type="submit" id="save" class="btn btn-primary">Next</button>
          </form>
          <form action="">
            <a class="mt-4 text-dark" href="suratpindah-asal" type=""> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <div class="dropdown-divider mt-4"></div>
        </form>
      </div>
  </section>