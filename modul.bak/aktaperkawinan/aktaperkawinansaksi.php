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
			
?>	
	

<section>
    <br>
    <br>
    <div class="container" style="padding: 10px; border-radius: 10px;">
        <h3 class="text-center mb-4">Pelayanan Pembuatan Akta Perkawinan</h3>
        <!-- saksi1 dan 2 -->
        <h6 class="mb-4 mt-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">2.</span> Saksi</h6>


        <form action="aktaperkawinan-perkawinan" method="post">
            <div class="row">
                
                  
                         
<input type="hidden" class="form-control" name="nikuser"  value ="<?php echo $nikuser ?>">

<input type="hidden" class="form-control" name="nikpmhon"  value ="<?php echo $nikpmhon ?>">
<input type="hidden" class="form-control" name="namapmhon"  value ="<?php echo $namapmhon ?>">
<input type="hidden" class="form-control" name="nokkpmhon"  value ="<?php echo $nokkpmhon ?>">
<input type="hidden" class="form-control" name="umurpmhon"  value ="<?php echo $umurpmhon ?>">
<input type="hidden" class="form-control" name="kwnpmhon"  value ="<?php echo $kwnpmhon ?>">

                  
                
                
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK (Saksi 1)</label>
                        <input type="number" name="niksaksi1"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Saksi 1 (Sesuai KTP)</label>
                        <input type="text" name="namasaksi1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">No. KK Saksi 1</label>
                        <input type="number" name="nokksaksi1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Umur Saksi 1 (Tahun)</label>
                        <input type="number" name="umursaksi1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kewarganegaraan Saksi 1</label>
                        <input type="text" name="kwnsaksi1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Indonesia" disabled>
                    </div>
                </div>
            </div>

            <div class="dropdown-divider mt-4"></div>


            <!-- saksi2 -->
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK (Saksi 2)</label>
                        <input type="number" name="niksaksi2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Saksi 2 (Sesuai KTP)</label>
                        <input type="text" name="namasaksi2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">No. KK Saksi 2</label>
                        <input type="number" name="nokksaksi2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Umur Saksi 2 (Tahun)</label>
                        <input type="number" name="umurksaksi2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kewarganegaraan Saksi 2</label>
                        <input type="text" name="kwnsaksi2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Indonesia" disabled>
                    </div>
                </div>
            </div>

            
            <a href="aktaperkawinan-perkawinan"><button id="save" class="btn btn-primary">Next</button></a>
        </form>

        <form action="aktaperkawinan">
            <a class="mt-4 text-dark" href="aktaperkawinan" type="submit"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <div class="dropdown-divider mt-4"></div>
        </form>
    </div>
</section>