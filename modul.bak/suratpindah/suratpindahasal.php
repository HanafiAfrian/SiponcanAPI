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
    <br><br><br>
    <div class="container">
        <h3 class="text-center mb-4">Pelayanan Pembuatan Surat Pindah</h3>

        <form action="suratpindah-tujuan" method="POST">
        <h6 class="mb-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">2.</span> Asal</h6>
            <div class="row">
                
                                       <div class="col-lg-6">
                      <div class="form-group">
                         
<input type="Text" class="form-control" name="nikuser" value ="<?php echo $nikuser ?>">
<input type="Text" class="form-control" name="nikpmhon" value ="<?php echo $nikpmhon ?>">
<input type="Text" class="form-control" name="namapmhon" value ="<?php echo  $namapmhon ?>">
<input type="Text" class="form-control" name="nokkpmhon" value ="<?php echo  $nokkpmhon ?>">
<input type="Text" class="form-control" name="umurpmhon" value ="<?php echo  $umurpmhon ?>">
<input type="Text" class="form-control" name="kwnpmhon" value ="<?php echo $kwnpmhon ?>">


                      </div>
                  </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Klasifikasi Kepindahan</label>
                        <select class="form-control" name="selectedcat" id="exampleFormControlSelect1">
                        <option hidden>Pilih</option>
                            <option value="Antar Kabupaten/Kota dalam Satu Propinsi">Antar Kabupaten/Kota dalam Satu Propinsi</option>
                            <option value="Antar Propinsi">Antar Propinsi</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Propinsi</label>
                        <input type="text" name="provinsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Sumatra Utara" disabled>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kota</label>
                        <input type="text" name="kabupaten" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Sibolga" disabled>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kelurahan / Desa</label>
                        <input type="text" name="kelurahan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
        
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode POS</label>
                        <input type="number" name="kdpos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
            </div>



            <button type="submit" id="save" class="btn btn-primary" >Next</button>
        </form>
        <form action="">
            <a class="mt-4 text-dark" href="suratpindah" type=""> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <div class="dropdown-divider mt-4"></div>
        </form>

    </div>
