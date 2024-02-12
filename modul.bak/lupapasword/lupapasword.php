
<?php
include 'config/koneksi.php';



	if(isset($_POST['submitlupapasword']))

	{
        $nik = $_POST['nik'];
          $id = $_POST['nik'];
        $no_telp = $_POST['no_telp'];

 
 
	$sql1 = "SELECT * FROM register WHERE nik = '$nik' AND no_telp = '$no_telp'";
	$q1 = mysqli_query($koneksi, $sql1);
 
$row=mysqli_fetch_array($q1);

if ($row['nik'] == $nik  AND $row['no_telp'] == $no_telp )
{
 
    	
	echo "<script>alert('Nik dan Nomor Telepon Sesuai, Silakan Reset Pasawrod anda');window.location='konformasipasword$id';</script>";
			
  
   
  
        
		
	

    
    
}
    
	else {
  	echo "<script>alert('Nik dan Nomor TeleponTidak Sesuai, Silakan Masukkan NIK dan Pasawrod dengan Benar');window.location='lupapasword';</script>";     
    }
			

}
 
 ?>
<br>
<br>

  <div >
   
                    <div>
<center>
                        <h4>Reset Pasword</h4></center>
                  
                    </div>
                    <center>
                       <div class="col-sm-3">
                            </div>
                            
                            <div class="col-sm-6">
                    <div>
                        
                        <form method="post" action="">
                            
                       
                            
                            
                            
                            
                           
                         
                            <div class="form-group" align="left">
                                <label for="password"><span class="glyphicon glyphicon-cog"></span>NIK:</label>
                                <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik" required>
                            </div>
                            
                               <div class="form-group" align="left">
                                <label for="password"><span class="glyphicon glyphicon-cog"></span>No Telepon:</label>
                                <input type="text" class="form-control" id="no_telp" placeholder="No Telepon" name="no_telp" required>
                            </div>
                  
                        <center>
                        <button type="submit" name="submitlupapasword" class="btn btn-default btn-primary">Konfirmasi</button>
                        </center>
                    </div>
                    </form>
                </div>
