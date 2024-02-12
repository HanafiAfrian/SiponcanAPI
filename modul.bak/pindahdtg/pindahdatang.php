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
<section>
    <br>
    <br><br><br>
    <div class="container">
        <h3 class="text-center">Permohonan Pembuatan KK Baru </h3>
        <h6 class="text-center mb-4">(Alasan Pindah Datang)</h6>
        <form action="kk-pindah-datang-berkas" method="POST">
            <h6 class="mb-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 8px; width: 30px; text-align: center;">1.</span> Pemohon</h6>
            <div class="row">
                
                  <div class="col-lg-6">
                      <div class="form-group">
                         
                          <input type="Text" class="form-control" name="nikuser"
                         value ="<?php echo $nikuser ?>">
                      </div>
                  </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alasan</label>
                        <input type="text" name="kkbarupmhon" class="form-control" id="exampleInputEmail1" value="Pindah Datang" aria-describedby="emailHelp" disabled>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="number" name="nikpmhon"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap (Sesuai KTP)</label>
                        <input type="text" name="namapmhon"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">No. KK</label>
                        <input type="number" name="nokkpmhon"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Umur</label>
                        <input type="number" name="umurpmhon"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kewarganegaraan</label>
                        <input type="text" name="kwnpmhon"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Indonesia" disabled>
                    </div>
                </div>
                <div class="col-lg-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Tujuan Yang Benar</label>
                            <input type="text" name="tujuanpmhon"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                    </div>
            </div>



            <a href="kk-pindah-datang-berkas"><button id="save" class="btn btn-primary" type="submit">Next</button></a>
        </form>
    </div>
</section>