<!--====== PRELOADER PART START ======-->
<?php
session_start();
include 'config/koneksi.php';
 $nikuser = $_SESSION['nik'];
 

$sql1 = "SELECT * FROM  register WHERE nik = '$nikuser'";
$sql2 = mysqli_query($koneksi, $sql1);
$row = mysqli_fetch_array($sql2);


$nama = $row['nama'];
$no_telp	 = $row['no_telp'];
$email	 = $row['email'];

if(empty($_SESSION['nik'])){
	

}




?>
<?php


include('config/koneksi.php');

	if(isset($_POST['editprofil']))

	{

	    
	    $nama = $_POST['nama'];
		
		$no_telp =  $_POST['no_telp'];
			$email = $_POST['email'];

	 

	    
	    
$sq51 = "update register set nama= '$nama',
 no_telp= '$no_telp',
  email= '$email'

    where  nik = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);




	echo "<script>alert('Data Profil Berhasil di Update');window.location='home';</script>";
	    
	
	}	
		?>
<div class="canvas"  style="background-color: #052553; height: 1000px;">
    <br>
    <br>
    <div class="container">
        <div class="row">
    <div class="col-lg-4 col-md-5 mb-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                    <a href="home-user" class="text-dark">   Dashboard</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="infopenting" class="text-dark">Info Penting</a>
                        </li>
                      <li class="list-group-item bg-info">
                          <a href="profil" class="text-white">Profil</a>
                        </li>
                        <li class="list-group-item">
                          <a href="gantipasword" class="text-dark">Ganti Password</a>
                        </li>
                          </li>
                         <li class="list-group-item">
                          <a href="sptjmdowlonad" class="text-dark">SPTJM</a>
                        </li>
                      
                    </ul>
                </div>
            </div>
             <div class="col-lg-8 col-md-7">
                <div>
                    <div class="card Recent-Users">
                       <div class="card-header bg-info text-white">
                           Profil Akun
                        </div>
                        <div class="card-block px-0">
                <form method="post" action="" class="mx-4 my-4">    
    
    <div class="form-group ">
      <label for="exampleInputEmail1">NIK</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name='nik' aria-describedby="emailHelp" value="<?php echo  $nikuser?>" disabled>
  
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Nama</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name='nama' value="<?php echo  $nama?>" >
    </div>
     <div class="form-group">
      <label for="exampleInputPassword1">No. Handphone</label>
      <input type="number" class="form-control" id="exampleInputPassword1" name='no_telp' value="<?php echo  $no_telp?>" >
    </div>
     <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="email" class="form-control" id="exampleInputPassword1" name='email' value="<?php echo  $email?>" >
    </div>
    <center>
                        <button type="submit" name="editprofil" class="btn btn-default btn-primary">Edit Profil</button>
                        </center>
  </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>