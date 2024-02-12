        <?php
                         $id = $_GET['id'];
                            
                   
                         ?>



<?php


include('config/koneksi.php');

	if(isset($_POST['submitgantipasword']))

	{

	    
	    $password=$_POST['password'];
		
		$password2=$_POST['password2'];
		
			if ($password != $password2) 
	{
	    
		echo "<script>alert('Konfirmasi Password Tidak Sama');</script>";    
	}
	
	else {
	    
	    
$sq51 = " update register set pasword= '$password' 
    where  nik = '$id'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);




	echo "<script>alert('Reset Pasword Berhasil');window.location='home';</script>";
	    
	}
	}	
		?>
  <div class="modal-content">
   
                    <div class="modal-header">

                        <h4 class="modal-title">Reset Pasword</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                       <div class="col-sm-3">
                            </div>
                            
                            <div class="col-sm-6">
                    <div class="modal-body">
                        
                        <form method="post" action="">
                            
                       
                            
                            
                            
                            
                           
                         
                            <div class="form-group" align="left">
                                <label for="password"><span class="glyphicon glyphicon-cog"></span>Paasword:</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                            </div>
                            
                               <div class="form-group" align="left">
                                <label for="password"><span class="glyphicon glyphicon-cog"></span>Konfirmasi Paasword:</label>
                                <input type="password" class="form-control" id="password2" placeholder="Konfirmasi Password" name="password2" required>
                            </div>
                  
                        <center>
                        <button type="submit" name="submitgantipasword" class="btn btn-default btn-primary">Konfirmasi</button>
                        </center>
                    </div>
                    </form>
                </div>
