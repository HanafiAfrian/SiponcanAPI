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
	    
	    $nikuser=$_POST['nikuser'];
		
		$nikpmhon=$_POST['nikpmhon'];
		$namapmhon=$_POST['namapmhon'];
		$nokkpmhon=$_POST['nokkpmhon'];
		$umurpmhon=$_POST['umurpmhon'];

        $kwnpmhon= 'Indonesia';


		$niksaksi1=$_POST['niksaksi1'];
		$namasaksi1=$_POST['namasaksi1'];
		$nokksaksi1=$_POST['nokksaksi1'];
		$umursaksi1=$_POST['umursaksi1'];
		$kwnsaksi1='Indonesia';
		$niksaksi2=$_POST['niksaksi2'];
		$namasaksi2=$_POST['namasaksi2'];
		$nokksaksi2=$_POST['nokksaksi2'];
		$umurksaksi2=$_POST['umurksaksi2'];
		$kwnsaksi2= 'Indonesia';



			
?>	
	
<section>
    <br>
    <br>
    <div class="container" style="padding: 10px; border-radius: 10px;">
        <h3 class="text-center mb-4">Pelayanan Pembuatan Akta Perkawinan</h3>
        <!-- saksi1 dan 2 -->
        <h6 class="mb-4 mt-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">3.</span> Perkawinan</h6>


        <form action="aktaperkawinan-berkas" method="post">
            <div class="row">
          
                         
<input type="hidden" class="form-control" name="nikuser"  value ="<?php echo $nikuser ?>">

<input type="hidden" class="form-control" name="nikpmhon"  value ="<?php echo $nikpmhon ?>">
<input type="hidden" class="form-control" name="namapmhon"  value ="<?php echo $namapmhon ?>">
<input type="hidden" class="form-control" name="nokkpmhon"  value ="<?php echo $nokkpmhon ?>">
<input type="hidden" class="form-control" name="umurpmhon"  value ="<?php echo $umurpmhon ?>">
<input type="hidden" class="form-control" name="kwnpmhon"  value ="<?php echo $kwnpmhon ?>">

<input type="hidden" class="form-control" name="niksaksi1"  value ="<?php echo $niksaksi1 ?>">
<input type="hidden" class="form-control" name="namasaksi1"  value ="<?php echo $namasaksi1 ?>">
<input type="hidden" class="form-control" name="nokksaksi1"  value ="<?php echo $nokksaksi1 ?>">
<input type="hidden" class="form-control" name="umursaksi1"  value ="<?php echo $umursaksi1 ?>">
<input type="hidden" class="form-control" name="kwnsaksi1"  value ="<?php echo $kwnsaksi1 ?>">
<input type="hidden" class="form-control" name="niksaksi2"  value ="<?php echo $niksaksi2 ?>">
<input type="hidden" class="form-control" name="namasaksi2"  value ="<?php echo $namasaksi2 ?>">
<input type="hidden" class="form-control" name="nokksaksi2"  value ="<?php echo $nokksaksi2 ?>">
<input type="hidden" class="form-control" name="umurksaksi2"  value ="<?php echo $umurksaksi2 ?>">
<input type="hidden" class="form-control" name="kwnsaksi2"  value ="<?php echo $kwnsaksi2 ?>">


                       
                
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK Ayah dari Suami</label>
                        <input type="number" name="nik_ayah_s" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ayah dari Suami</label>
                        <input type="text"  name="nama_ayah_s"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK Ibu dari Suami</label>
                        <input type="number"  name="nik_ibu_s"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ibu dari Suami</label>
                        <input type="text"  name="nama_ibu_s"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK Ayah dari Istri</label>
                        <input type="number"  name="nik_ayah_is"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ayah dari Istri</label>
                        <input type="text"  name="nama_ayah_is" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK Ibu dari Istri</label>
                        <input type="number"  name="nik_ibu_is" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ibu dari Istri</label>
                        <input type="text"  name="nama_ibu_is" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label for="exampleInputEmail1">Status Perkawinan Sebelum Kawin</label>
                    <select class="custom-select"  name="selectedcat" required >
                        <option hidden>Pilih</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                    </select>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Perkawinan yang ke-</label>
                        <input type="text"  name="kawin_ke" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Istri yang ke- (Jika Poligami)</label>
                        <input type="text"  name="istri_ke" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Akad/Pemberkatan Perkawinan</label>
                        <input type="date" name="pilih_tanggal_pesan"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Melapor</label>
                        <input type="date"  name="pilih_tanggal_selesai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jam Pelaporan</label>
                        <input type="time"  name="pilih_jam_pesan"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label for="exampleInputEmail1">Agama</label>
                    <select  name="selectedcat1" class="custom-select" required>
                        <option hidden>Pilih</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Organisasi Kepercayaan</label>
                        <input type="text"  name="nm_organisasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pemuka Agama/Kepercayaan</label>
                        <input type="text"  name="ket_organisasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>


            </div>



            <a href="aktaperkawinan-perkawinan" type="submit"><button id="save" class="btn btn-primary">Next</button></a>
        </form>

        <form action="aktaperkawinan-saksi">
            <a class="mt-4 text-dark" href="aktaperkawinan-saksi" type="submit"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <div class="dropdown-divider mt-4"></div>
        </form>
    </div>
</section>