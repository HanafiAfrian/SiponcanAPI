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
?>
<section>
<br>
    <br>
    <div class="container">
      
        <h3 class="text-center mb-4">Pelayanan Pembuatan Akta Kelahiran</h3>
         <!-- data ibu -->

            <h6 class="mb-4 mt-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">5.</span> Ibu</h6>
              <form action="aktalahir-anak" Method="POST">
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
                                                 
                           
                      
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK Ibu</label>
                        <input type="number" name="nikibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Ibu (Sesuai KTP)</label>
                        <input type="text" name="namaibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir Ibu</label>
                        <input type="text" name="tmptibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir Ibu</label>
                        <input type="date" name="pilih_tanggal_pesan1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kewarganegaraan</label>
                        <input type="text" name="kwnibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Indonesia" disabled>
                    </div>
                </div>
            </div>
            <a href="aktalahir-anak"><button id="save" class="btn btn-primary">Next</button></a>
           </form>
           <form action="">
            <a class="mt-4 text-dark" href="aktalahir-ayah"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <div class="dropdown-divider mt-4"></div>
        </form>
    </div>
</section>