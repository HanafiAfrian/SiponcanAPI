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
?>
<section>
    <br>
    <br>
    <div class="container">
        <h3 class="text-center mb-4">Pelayanan Pembuatan Akta Perceraian</h3>

        <form action="aktacerai-berkas" Method="POST">
            <h6 class="mb-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">2.</span>Perceraian</h6>
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
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">No. Akta Perkawinan</label>
                        <input type="text" name="noaktapmhon" data-maxlength="16" data-minlength="16" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Akta Perkawinan</label>
                        <input type="date" name="pilih_tanggal_pesan"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
          
          
          
            <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Pencatatan Perkawinan</label>
                        <input type="text" name="tmptcttpperkawinan"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
          
          
          
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pengadilan</label>
                        <input type="text" name="nama_pengadilan"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Putusan Pengadilan</label>
                        <input type="date" name="pilih_tanggal_selesai"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                
                
                
                       
            <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">No. Surat  Ket. Panitera Pengadilan</label>
                        <input type="text" name="nosuratpenitera"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">No. Putusan Pengadilan</label>
                        <input type="text" name="no_pengadilan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
            
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Putusan Ket. Panitera Pengadilan</label>
                        <input type="date" name="pilih_tanggal_pesan1"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Melapor</label>
                        <input type="date" name="pilih_tanggal_selesai1"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
           
            </div>

            <input type="submit" value="Next" class="btn btn-primary">
            <div class="dropdown-divider mt-4"></div>

        </form>

        <form action="">
            <a class="mt-4 text-dark" href="aktacerai" type="submit"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <div class="dropdown-divider mt-4"></div>
        </form>

    </div>

</section>