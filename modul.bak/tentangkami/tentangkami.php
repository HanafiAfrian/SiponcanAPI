

				<?php					  		  
					$sql= "SELECT * FROM  profil WHERE status = 'Y' ORDER BY id_profil DESC LIMIT 0,1";
					$sql2 = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_array($sql2)){ 
					$judul = $row['judul'];
					$ket =  $row['ket'];
					$gambar = $row['gambar'];
					

				?>
			
	
				<div class="container">
		          
		            
     <center> <h1 class="title"><font color="red" class="bernardmtcondensed">PROFIL GHINA HOLIDAY INDONESIA</font></h1>
		
			<h3 style='border-bottom: 3px solid #000; padding: 5px; width: 350px; '><h3>
		
		</center><br>
                      
                   
		             
					<div class="row">
					
				<div class="col-lg-6">
	
					
							
					
						
							<font size="4"><?php echo $ket ?></font>
							
							</div>
				
						
						
						<div class="col-lg-6">
						
							
						  <video loop muted controls="false" data-autoplay width="600" height="400">
            <source src="images/porif/vd1.mp4" type="video/mp4" width="600" height="400">
          
          </video> 
								
						
						</div>
						
					
					<?php
						}
						?>
						
					
				</div>	
				
				
				
				
				</div>	
				
				
<br><br>
	