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

$nikayah = $_POST['nikayah'];
$namaayah = $_POST['namaayah'];
$tmptayah = $_POST['tmptayah'];
$pilih_tanggal_pesan = $_POST['pilih_tanggal_pesan'];
$kwnayah = 'Indonesia';

$nikibu = $_POST['nikibu'];
$namaibu = $_POST['namaibu'];
$tmptibu = $_POST['tmptibu'];
$pilih_tanggal_pesan1 = $_POST['pilih_tanggal_pesan1'];
$kwnibu = 'Indonesia';
?>

<section>
<br>
    <br>
    <div class="container">
    <h3 class="text-center mb-4">Pelayanan Pembuatan Akta Kelahiran</h3>

            <!-- data ibu -->
     
            <h6 class="mb-4 mt-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">6.</span> Anak</h6>
       <form action="aktalahir-berkas" Method="POST">
          <div class="row">
              
        
                         
<input type="hidden" class="form-control" name="nikuser" value ="<?php echo $nikuser ?>">
 <input type="hidden" class="form-control" name="nikpmhon" value ="<?php echo $nikpmhon ?>">
<input type="hidden" class="form-control" name="namapmhon" value ="<?php echo $namapmhon ?>">
<input type="hidden" class="form-control" name="nokkpmhon" value ="<?php echo $nokkpmhon ?>">
<input type="hidden" class="form-control" name="umurpmhon" value ="<?php echo $umurpmhon ?>">
<input type="hidden" class="form-control" name="kwnpmhon" value ="<?php echo $kwnpmhon ?>">
                         

 <input type="hidden" class="form-control" name="niksaksi1" value ="<?php echo $niksaksi1 ?>">
<input type="hidden" class="form-control" name="namasaksi1" value ="<?php echo $namasaksi1 ?>">
<input type="hidden" class="form-control" name="nokksaksi1" value ="<?php echo $nokksaksi1 ?>">
<input type="hidden" class="form-control" name="umursaksi1" value ="<?php echo $umursaksi1 ?>">
<input type="hidden" class="form-control" name="kwnsaksi1" value ="<?php echo $kwnsaksi1 ?>">
                         

 <input type="hidden" class="form-control" name="niksaksi2" value ="<?php echo $niksaksi2 ?>">
<input type="hidden" class="form-control" name="namasaksi2" value ="<?php echo $namasaksi2 ?>">
<input type="hidden" class="form-control" name="nokksaksi2" value ="<?php echo $nokksaksi2 ?>">
<input type="hidden" class="form-control" name="umursaksi2" value ="<?php echo $umursaksi2 ?>">
<input type="hidden" class="form-control" name="kwnsaksi2" value ="<?php echo $kwnsaksi2 ?>">

  <input type="hidden" class="form-control" name="nikayah" value ="<?php echo $nikayah ?>">
<input type="hidden" class="form-control" name="namaayah" value ="<?php echo $namaayah ?>">
<input type="hidden" class="form-control" name="tmptayah" value ="<?php echo $tmptayah ?>">
<input type="hidden" class="form-control" name="pilih_tanggal_pesan" value ="<?php echo $pilih_tanggal_pesan ?>">
<input type="hidden" class="form-control" name="kwnayah" value ="<?php echo $kwnayah ?>">
                                                 
   <input type="hidden" class="form-control" name="nikibu" value ="<?php echo $nikibu ?>">
<input type="hidden" class="form-control" name="namaibu" value ="<?php echo $namaibu ?>">
<input type="hidden" class="form-control" name="tmptibu" value ="<?php echo $tmptibu ?>">
<input type="hidden" class="form-control" name="pilih_tanggal_pesan1" value ="<?php echo $pilih_tanggal_pesan1 ?>">
<input type="hidden" class="form-control" name="kwnibu" value ="<?php echo $kwnibu ?>">                                                
                           
                    
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK Anak <i>(lihat di KK)</i></label>
                        <input type="number" name="nikanak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Anak</label>
                        <input type="text" name="namaanak" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label><br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="selectedcat" value="Laki-Laki" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1" required>Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="selectedcat" value="Wanita"  class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2" required>Wanita</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Dilahirkan Anak</label>
                        <select class="custom-select" name="selectedcat1" required>
                        <option hidden>Pilih</option>
                            <option value="Puskesmas">Puskesmas</option>
                            <option value="Polindes">Polindes</option>
                            <option value="Rumah">Rumah</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Kelahiran</label>
                        <input type="text" name="tmtpanak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hari Kelahiran Anak</label>
                        <input type="text"  name="harilahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Kelahiran Anak</label>
                        <input type="date" name="pilih_tanggal_pesan2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu Kelahiran</label>
                        <input type="time" name="pilih_jam_pesan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kelahiran ke-(Anak)</label>
                        <input type="number" name="anakke" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label for="exampleInputEmail1">Penolong Kelahiran</label>
                    <select class="custom-select" name="selectedcat2" required>
                    <option hidden>Pilih</option>
                        <option  value="Dokter">Dokter</option>
                        <option  value="Bidan/Perawat">Bidan/Perawat</option>
                        <option value="Dukun">Dukun</option>
                        <option  value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Berat (Kg)</label>
                        <input type="number" name="beratanak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Panjang (Cm)</label>
                        <input type="number" name="pjganak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="form-group col-lg-6">
                    <label for="exampleInputEmail1">Jenis Kelahiran</label>
                    <select class="custom-select" name="selectedcat3" required>
                    <option hidden>Pilih</option>
                        <option value="Tunggal">Tunggal</option>
                        <option value="Kembar1">Kembar 1</option>
                        <option value="Kembar2">Kembar 2</option>
                        <option value="Kembar3">Kembar 3</option>
                        <option value="Kembar4">Kembar 4</option>
                        <option value="Kembar5">Kembar 5</option>
                        <option value="lainnya">Lainnya</option>

                    </select>
                </div>
            </div>
            <a href="aktalahir-berkas"><button id="save" class="btn btn-primary">Next</button></a>
       
        </form>

        
        <form action="">
            <a class="mt-4 text-dark" href="aktalahir-ibu"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <div class="dropdown-divider mt-4"></div>
        </form>
            <!-- data ibu -->
    </div>
</section>