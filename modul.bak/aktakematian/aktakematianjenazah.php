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

$niksaksi1 = $_POST['niksaksi1'];
$namasaksi1 = $_POST['namasaksi1'];
$nokksaksi1 = $_POST['nokksaksi1'];
$umursaksi1 = $_POST['umursaksi1'];
$kwnsaksi1 = 'Indonesia';
$niksaksi2 = $_POST['niksaksi2'];
$namasaksi2 = $_POST['namasaksi2'];
$nokksaksi2 = $_POST['nokksaksi2'];
$umursaksi2 = $_POST['umursaksi2'];
$kwnsaksi2 = 'Indonesia';

?>

<section>
    <br>
    <br>
    <div class="container" style="padding: 10px; border-radius: 10px;">
        <h3 class="text-center mb-4">Pelayanan Pembuatan Akta Kematian</h3>
        <!-- saksi1 dan 2 -->
        <h6 class="mb-4 mt-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">2.</span> Saksi</h6>


        <form action="aktakematian-berkas" Method="POST">
            <div class="row">
              
                         
<input type="hidden" class="form-control" name="nikuser"  value ="<?php echo $nikuser ?>">
<input type="hidden" class="form-control" name="nikpmhon"  value ="<?php echo $nikpmhon ?>">
<input type="hidden" class="form-control" name="namapmhon"  value ="<?php echo $namapmhon ?>">
<input type="hidden" class="form-control" name="nokkpmhon"  value ="<?php echo $nokkpmhon ?>">
<input type="hidden" class="form-control" name="umurpmhon"  value ="<?php echo $umurpmhon ?>">
<input type="hidden" class="form-control" name="kwnpmhon"  value ="<?php echo $kwnpmhon ?>">

<input type="hidden" class="form-control" name="niksaksi1"  value ="<?php echo $niksaksi1 ?>">
<input type="hidden" class="form-control" name="namasaksi1"  value ="<?php echo $namasaksi1 ?>">
<input type="hidden" class="form-control" name="umursaksi1"  value ="<?php echo $umursaksi1 ?>">
<input type="hidden" class="form-control" name="kwnsaksi1"  value ="<?php echo $kwnsaksi1 ?>">
<input type="hidden" class="form-control" name="niksaksi2"  value ="<?php echo $niksaksi2 ?>">
<input type="hidden" class="form-control" name="namasaksi2"  value ="<?php echo $namasaksi2 ?>">
<input type="hidden" class="form-control" name="nokksaksi2"  value ="<?php echo $nokksaksi2 ?>">
<input type="hidden" class="form-control" name="umursaksi2"  value ="<?php echo $umursaksi2 ?>">
<input type="hidden" class="form-control" name="kwnsaksi2"  value ="<?php echo $kwnsaksi2 ?>">


                    
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Kematian</label>
                        <input type="date" name="pilih_tanggal_pesan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu Kematian</label>
                        <input type="time" name="pilih_jam_pesan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK Jenazah</label>
                        <input type="number" name="nikjns" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Jenazah</label>
                        <input type="text" name="namajns" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Ibu Jenazah</label>
                        <input type="text" name="namaibujns" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>


                <div class="dropdown-divider mt-4"></div>


                <!-- saksi2 -->


                <div class="form-group col-lg-6">
                    <label for="exampleInputEmail1">Penyebab Kematian</label>
                    <select class="custom-select" name="selectedcat" required>
                        <option hidden>Pilih</option>
                        <option value="Sakit Biasa/Tua">Sakit Biasa/Tua</option>
                        <option value="Pandemi/Wabah Penyakit">Pandemi/Wabah Penyakit</option>
                        <option value="Kecelakaan">Kecelakaan</option>
                        <option value="Kriminalitas">Kriminalitas</option>
                        <option value="Bunuh Dir">Bunuh Diri</option>
                        <option value="Lainnya">Lainnya</option>

                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label for="exampleInputEmail1">Yang Menerangkan</label>
                    <select class="custom-select" name="selectedcat1" required>
                        <option hidden>Pilih</option>
                        <option value="Dokter">Dokter</option>
                        <option value="Tenaga Kesehatan">Tenaga Kesehatan</option>
                        <option value="polisi">polisi</option>
                        <option value="Lainnya">Lainnya</option>


                    </select>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Kematian</label>
                        <input type="text" name="tpmeninggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    </div>
                </div>
            </div>


            <input type="submit" value="Next" class="btn btn-primary">
        </form>

        <form action="">
            <a class="mt-4 text-dark" href="aktakematian-saksi" type="submit"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <div class="dropdown-divider mt-4"></div>
        </form>
    </div>
</section>

