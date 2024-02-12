<?php


include('koneksi.php');

	if(isset($_POST['save']))
	echo "
";
	{

	    
	    $nikuser=$_POST['nikuser'];
		

		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'-1 hour'));
	
		
		$vimage1=$_FILES["img1"]["name"];
	


move_uploaded_file($_FILES["img1"]["tmp_name"],"files/fotoprofil/".$_FILES["img1"]["name"]);



		

  
      		$sql2 = "update  register set 	foto = '$vimage1',
      		konvirm = '$konvirm'	
      		
      	
    where  nik = '$nikuser' ";
 $q2 = mysqli_query($koneksi,$sql2);
  
  
  
  
  
  



			echo "<script>alert('Upload Berkas Berjasil');</script>";
			
			
			
			
			
			
exit;
		
		
	}
	

	?>