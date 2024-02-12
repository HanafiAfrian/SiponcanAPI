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
          <h3 class="text-center mb-4">Pelayanan Pembuatan NIK Online</h3>
  
          <form action="onlinenik-berkas" Method="POST">
            
          <h6 class="mb-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">1.</span> Pemohon</h6>
          <div class="row">
              
              
                  
                         
                          <input type="hidden" class="form-control" name="nikuser"
                         value ="<?php echo $nikuser ?>">
                   
                
              
              
                  <div class="col-lg-6">
                      <div class="form-group">
                          <label for="exampleInputEmail1">NIK</label>
                          <input type="number" class="form-control" name="nikpmhon" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Nama Lengkap (Sesuai KTP)</label>
                          <input type="text" name="namapmhon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <label for="exampleInputEmail1">No. KK</label>
                          <input type="number" name="nokkpmhon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                  </div>
                  <div class="col-lg-6">
  
                      <div class="form-group">
                          <label for="exampleInputEmail1">Umur</label>
                          <input type="number"name="umurpmhon"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                  </div>
                  <div class="col-lg-6">
  
                      <div class="form-group">
                          <label for="exampleInputEmail1">Kewarganegaraan</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Indonesia" disabled>
                      </div>
                  </div>
              </div>
  
  
   
              <a href="aktalahir-saksi"><button id="save" class="btn btn-primary" type="submit">Next</button></a>
            <div class="dropdown-divider mt-4"></div>
          </form>
      </div>
  </section>