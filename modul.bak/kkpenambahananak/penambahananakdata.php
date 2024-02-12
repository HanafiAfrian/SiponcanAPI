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
echo $nikuser;
?>
    <section>
    <br>
    <br><br><br>
        <div class="container">
            <h3 class="text-center mb-4">Pelayanan Pembuatan Penambahan Anak di KK</h3>
            <h4 class="blockquote text-center">(Khusus Anak Baru Lahir)</h4>

              <form action="penambahananak-berkas" method="POST">
                <h6 class="mb-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 8px; width: 30px; text-align: center;">2.</span> Data Anak</h6>
                <div class="row">
             <div class="col-lg-6">
                        <div class="form-group">
                        
<input type="text" name="nikuser" value="<?php echo $nikuser ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
<input type="text" name="nikpmhon" value="<?php echo  $nikpmhon ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
 
 <input type="text" name="namapmhon" value="<?php echo  $namapmhon ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
 
 <input type="text" name="nokkpmhon" value="<?php echo  $nokkpmhon ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
 
 <input type="text" name="umurpmhon" value="<?php echo  $umurpmhon ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
 
 <input type="text" name="kwnpmhon" value="<?php echo $kwnpmhon ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
 
                    
                        </div>
                    </div>
                    
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="text" name="nm_anak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin Anak</label>
                            <select class="form-control"  name="selectedcat" id="exampleFormControlSelect1">
                                <option hidden>Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir</label>
                            <input type="text"  name="temp_lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input type="date"  name="pilih_tanggal_pesan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Waktu Lahir</label>
                            <input type="time"name="pilih_jam_pesan"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Golongan Darah</label>
                            <select class="form-control" name="selectedcat1" id="exampleFormControlSelect1">
                                <option hidden>Pilih</option>
                                <option value="O"> O</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="Tidak Tahu">Tidak Tahu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <select class="form-control" name="selectedcat2" id="exampleFormControlSelect1">
                                <option hidden>Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Kepercayaan Lainnya">Kepercayaan Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-danger">SHDK</label>
                            <fieldset disabled>
                                <input type="text" name="shdk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Anak">
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kelainan Fisik dan Mental</label>
                            <select class="form-control" name="selectedcat3" id="exampleFormControlSelect1">
                                <option hidden>Pilih</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ayah</label>
                            <input type="text" name="nm_ayah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ibu</label>
                            <input type="text" name="nm_ibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                    </div>

                </div>


               <button id="save" class="btn btn-primary">Next</button>
        </form>

        <form action="aktaperkawinan">
            <a class="mt-4 text-dark" href="penambahananakdata" type="submit"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <div class="dropdown-divider mt-4"></div>
        </form>
        </div>
    </section>

