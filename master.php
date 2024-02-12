<?php
include 'config/koneksi.php';
?>

<?php


	if(isset($_POST['submit']))

	{
       $nama = $_POST['nama'];
        $nohp = $_POST['nohp'];
        $nik = $_POST['nik'];
        $email = $_POST['email'];
		 $password = $_POST['password'];
		
		 $password2 = $_POST['password2'];	 
			 
			 
        $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s');
        


 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 16);

$uuidhtl = "reg-$time1$uuidhtl0";


		$sql2 = "SELECT * FROM register WHERE nik = '$nik'";
	$q12 = mysqli_query($koneksi, $sql2);

$row=mysqli_fetch_array($q12);

if ($row['nik'] == $nik )

 {
     	echo "<script>alert('Nik Telah Terdaftar');</script>";
    }	
	
	
	else if ($password != $password2) 
	{
	    
		echo "<script>alert('Konfirmasi Password Tidak Sama');</script>";    
	}
else{	
		

$sql1 ="insert into  register (uuid,nama,no_telp,nik,email,pasword,creat_at,status) 
values ('$uuidhtl','$nama','$nohp','$nik','$email','$password','$tanggal','Aktif')";
            $q1 = mysqli_query($koneksi,$sql1);
            
            
    						$time=date('H:i');
		 date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time));        
            
            
            if($q1){
 $sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$nik','Admin','$nik','Selamat Anda telah tedaftar di Aplikasi Siponcan','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 




 $sql55 ="insert into  chatgroup (id,nm_grp,nm_grp1,dari,kepada,pesan,jam,tanggal) 
values ('','$nik','Admin','Admin','$nik','Selamat Anda telah tedaftar di Aplikasi Siponcan','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql55); 



     		echo "<script>alert('Pendaftaran Berhasil, Silakan Login Menggunakan NIK dan Pasword Anda');</script>";
}

    }	    
	    
	}
	
	?>






<?php


	if(isset($_POST['submitlogin']))

	{


$nik = $_POST['nik'];
$password     = $_POST['password'];


$sql1 = "SELECT * FROM  register WHERE nik = '$nik' AND pasword='$password'";
$sql2 = mysqli_query($koneksi, $sql1);
$row = mysqli_fetch_array($sql2);

session_start();
if ($row['nik'] == $nik and $row['pasword'] == $password) {
  session_start();
  $_SESSION['nik'] = $row['nik'];
  $_SESSION['password'] = $row['pasword'];
  header('location:home');
} else {
	echo "<script>alert('Nik dan Pasword Tidak Cocok');</script>";
}
	    
	    
	    
	    
	}
	
	?>



<?php
session_start();
$nikuser = $_SESSION['nik'];
$sql1 = "SELECT * FROM  register WHERE nik = '$nikuser'";
$sql2 = mysqli_query($koneksi, $sql1);
$row = mysqli_fetch_array($sql2);


$nama = $row['nama'];
if(empty($_SESSION['nik'])){
	

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">


    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="assets/webfont/font-css/LineIcons.css">

    <script src="https://use.fontawesome.com/e1c52708df.js"></script>

    <!-- datatabel -->
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script>

    <!-- typedjs -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- CHARTJS -->
    <script type="text/javascript" src="assets/js/Chart.js"></script>

    <script src="https://use.fontawesome.com/e1c52708df.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <title>Siponcan</title>

    <style>
    
    *{
         font-family: "Poppins", sans-serif;
    }
    
  .navbar-nav .nav-item {
margin-left: 15px !important; 
position: relative;
}

    
    
     .navbar-nav .nav-item a {
            font-size:14px !important;
            font-weight: 400;
            color:black !important;
     
        }
        
        
        .float-area {
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        html{
     scroll-behavior: smooth;
    
   }
        
    
        .floating-img {
            transform: translateY(-5%);
            animation: floater 4.5s infinite;
            transition: ease 0.5s;

        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu a::after {
            transform: rotate(-90deg);
            position: absolute;
            right: 6px;
            top: .8em;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-left: .1rem;
            margin-right: .1rem;
        }

        @keyframes floater {
            0% {
                transform: translateY(-5%);
                transition: ease 0.5s;
            }

            50% {
                transform: translateY(5%);
                transition: ease 0.5s;
            }
        }
        


        /* animatenv */
        
           .daftar-layanan .card.tampil:hover{
       box-shadow: 2px 4px rgba(112, 206, 250, 0.27) !important;
            transform: translate(0 ,-10px);
        }
        
        .daftar-layanan .card{
            opacity: 0;
            transition: .5s;
            transform: translate(0 ,-40px);
        }
        
        .daftar-layanan .card.tampil{
            opacity: 1;
              transform: translate(0 ,0);
        }
        
        @media (max-width: 575.98px) { 
             .nbr {
    margin-right:10px;
    margin-left:10px;
  }
  
            
        }
        
          .nbr{
          max-width: 1280px !important;
      }
      
      @media (max-width: 992px) { 
          .nbr{
         margin-right:20px;
    margin-left:20px;

      } 
          
      }
     
        
 
    </style>
    
    
</head>

<body oncontextmenu="return false">

    <nav class="navbar navbar-fixed navbar-expand-lg navbar-light shadow" style="background-color: white;z-index: 2000;box-shadow:0 0.5rem 1rem rgba(0, 0, 0, 0.03) !important">
        <div class="container nbr">
        <a class="navbar-brand" href="home">
                                <img src="images/logosiponcan-1.png" height="50px" alt="Logo">
                            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        
                        <a class="" href="home" style="color: grey;">Home</a>
                 
                        <li class="nav-item">
                        <a class="" href="home#syarat" style="color: grey;">Persyaratan Layanan</a>
                    </li>
                      <!--<li class='nav-item' >-->
                      <!--                  <a href='syarat-ketentuan'  style='color: grey;'>Syarat & Ketentuan</a>-->
                      <!--              </li>-->
                                    
                                    <!--<li class='nav-item' >-->
                                    <!--    <a href='kebijakan-privasi-data' style='color: grey;'>Kebijakan Privasi Data</a>-->
                                    <!--</li>-->
                                    
                                    <!--about-->
                                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' 
                        aria-haspopup='true' aria-expanded='false'>
               Tentang Kami
                  
                        </a>
                        <ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                                       <a class='dropdown-item pl-2' href='syarat-ketentuan'  style='color: grey;'>Syarat dan Ketentuan</a>
                                        <a class='dropdown-item pl-2' href='kebijakan-privasi'  style='color: grey;'>Kebijakan Privasi Data</a>
                        
                   
                          
                        </ul>
                    </li>
                                    <!--end about-->
                                    
                                    <!--layanan before login-->
                                    
                                       </li>
                   
<?php if(empty($_SESSION['nik'])){
                echo " <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            Layanan
                        </a>
                        
                         <ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
              <li class='dropdown-submenu'>
                                <a class='dropdown-item dropdown-toggle pl-2' href='#'  style='color: grey;'> Kartu Tanda Penduduk</a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item px-2' href='direct'  style='color: grey;'>Kartu Tanda Penduduk-Hilang</a></li>
                                    <li><a class='dropdown-item px-2' href='direct'  style='color: grey;'>Kartu Tanda Penduduk-Perubahan Data</a></li>
                                    <li><a class='dropdown-item px-2' href='direct'  style='color: grey;'>Kartu Tanda Penduduk-Rusak</a></li>
                                
                                </ul>
                            </li>
                            
                            
                            
                            <li class='dropdown-submenu'>
                                <a class='dropdown-item dropdown-toggle pl-2' href='#'  style='color: grey;'> Kartu Keluarga</a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item px-2' href='direct'  style='color: grey;'>Membentuk Keluarga Baru</a></li>
  <li><a class='dropdown-item px-2' href='direct'  style='color: grey;'>Penggantian Kepala Keluarga</a></li>
  
   <li><a class='dropdown-item px-2' href='direct'  style='color: grey;'>Pisah KK</a></li> 
      <li><a class='dropdown-item px-2' href='direct'  style='color: grey;'>Menumpang Dalam KK</a></li> 
                                <li><a class='dropdown-item px-2' href='direct'  style='color: grey;'>Perubahan Elemen Data KK</a></li>
                     
      
      
   
          
         <li><a class='dropdown-item px-2' href='direct'  style='color: grey;'>KK Hilang</a></li>
  
                                    <li><a class='dropdown-item px-2' href='direct'  style='color: grey;'>KK Rusak</a></li>
                                    
                                    
                     
                                    <li><a class='dropdown-item px-2' href='direct'  style='color: grey;'>Peristiwa Penting</a></li>
                                </ul>
                            </li>
                        
                            <a class='dropdown-item pl-2' href='direct'  style='color: grey;'>Akta Kematian</a>
                                   <a class='dropdown-item pl-2' href='direct'  style='color: grey;'>Akta Kelahiran</a>
                            <a class='dropdown-item pl-2' href='direct'  style='color: grey;'>Akta Perkawinan</a>
                    
                            <a class='dropdown-item pl-2' href='direct'  style='color: grey;'>Akta Perceraian </a>
                            
                             <a class='dropdown-item pl-2' href='direct'  style='color: grey;'>Kartu Identitas Anak</a>
                                      <a class='dropdown-item pl-2' href='direct'  style='color: grey;'>Surat Pindah</a>
                                                    <a class='dropdown-item pl-2' href='direct'  style='color: grey;'>Akta Pengangkatan Anak</a>
                            <a class='dropdown-item pl-2' href='direct'  style='color: grey;'>Akta Pengakuan Anak</a>
                            <a class='dropdown-item pl-2' href='direct'  style='color: grey;'>Akta Pengesahan Anak</a>
              
                   
                      
                            
                              
                        </ul>
                    </li>";
}
                    ?>
                                    <!--end layanan befire login-->
   <?php if($_SESSION['nik']){
                echo " <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            Layanan
                        </a>
                        <ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
              <li class='dropdown-submenu'>
                                <a class='dropdown-item dropdown-toggle pl-2' href='#'  style='color: grey;'> Kartu Tanda Penduduk</a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item px-2' href='ktp-hilang'  style='color: grey;'>Kartu Tanda Penduduk-Hilang</a></li>
                                    <li><a class='dropdown-item px-2' href='ktp-perubahan'  style='color: grey;'>Kartu Tanda Penduduk-Perubahan Data</a></li>
                                    <li><a class='dropdown-item px-2' href='ktp-rusak'  style='color: grey;'>Kartu Tanda Penduduk-Rusak</a></li>
                                
                                </ul>
                            </li>
                            
                            
                            
                            <li class='dropdown-submenu'>
                                <a class='dropdown-item dropdown-toggle pl-2' href='#'  style='color: grey;'> Kartu Keluarga</a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item px-2' href='kkbaru'  style='color: grey;'>Membentuk Keluarga Baru</a></li>
  <li><a class='dropdown-item px-2' href='ganti-kepalakeluarga'  style='color: grey;'>Penggantian Kepala Keluarga</a></li>
  
   <li><a class='dropdown-item px-2' href='pisahkk'  style='color: grey;'>Pisah KK</a></li> 
      <li><a class='dropdown-item px-2' href='menumpangdalamkk'  style='color: grey;'>Menumpang Dalam KK</a></li> 
                                <li><a class='dropdown-item px-2' href='perubahankk'  style='color: grey;'>Perubahan Elemen Data KK</a></li><li><a class='dropdown-item px-2' href='kkhilang'  style='color: grey;'>KK Hilang</a></li>
  
                                    <li><a class='dropdown-item px-2' href='kkrusak'  style='color: grey;'>KK Rusak</a></li>
                                    
                                    
                     
                                    <li><a class='dropdown-item px-2' href='pilih-kategori'  style='color: grey;'>Peristiwa Penting</a></li>
                                </ul>
                            </li>
                        
                            <a class='dropdown-item pl-2' href='aktakematian'  style='color: grey;'>Akta Kematian</a>
                                   <a class='dropdown-item pl-2' href='aktalahir'  style='color: grey;'>Akta Kelahiran</a>
                            <a class='dropdown-item pl-2' href='aktaperkawinan'  style='color: grey;'>Akta Perkawinan</a>
                    
                            <a class='dropdown-item pl-2' href='aktacerai'  style='color: grey;'>Akta Perceraian </a>
                            
                             <a class='dropdown-item pl-2' href='kia'  style='color: grey;'>Kartu Identitas Anak</a>
                                      <a class='dropdown-item pl-2' href='suratpindah'  style='color: grey;'>Surat Pindah</a>
                                                    <a class='dropdown-item pl-2' href='akta-pengangkatan-anak'  style='color: grey;'>Akta Pengangkatan Anak</a>
                            <a class='dropdown-item pl-2' href='akta-pengakuan-anak'  style='color: grey;'>Akta Pengakuan Anak</a>
                            <a class='dropdown-item pl-2' href='akta-pengesahan-anak'  style='color: grey;'>Akta Pengesahan Anak</a>
              
                   
                      
                            
                             
                        </ul>
                    </li>";
}
                    ?>                 
                    
     <?php if(empty($_SESSION['nik'])){
                   echo "
                                      <li class='nav-item' >
                                        <a href='#' data-toggle='modal' data-target='#myModalReg'  style='color: grey;'>Daftar</a>
                                    </li>
                                    
                                    ";
     }
     ?>
     <li class="nav-item">
                        <a class="btn btn-outline-info px-2" href="https://play.google.com/store/apps/details?id=com.sibolgasiponcan&hl=id" style="color: black;">Download APP Siponcan</a>
                    </li>
   <?php
       if($_SESSION['nik']){
           echo"<li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' 
                        aria-haspopup='true' aria-expanded='false' style='color:white !important; background-color:#052553;border-radius:5px'>
                  $nama 
                  
                        </a>
                        <ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                                       <a class='dropdown-item pl-2' href='home-user'  style='color: grey;'>Riwayat</a>
                                        <a class='dropdown-item pl-2' href='infopenting'  style='color: grey;'>Info Penting</a>
                           <a class='dropdown-item pl-2' href='profil'  style='color: grey;'>Profil</a>
                          <a class='dropdown-item pl-2' href='gantipasword'  style='color: grey;'>Ganti Pasword</a>
                            <a class='dropdown-item pl-2' href='logout.php'  style='color: grey;'>Keluar</a>
                        
                   
                            
                            ";
                            
                            
                            
                  
                }
                ?>
                      
                          
                        </ul>
                    </li>
                          <?php
       if($_SESSION['nik']){
           
  $sql11 ="select * from  chat WHERE status='wr' AND dari='Admin' AND kepada='$nikuser'
  
  ORDER BY tanggal DESC "; 
 
           $q11= mysqli_query($koneksi, $sql11);
            $count = mysqli_num_rows($q11);
             while($row = mysqli_fetch_array($q11))
                  $pesan =  $row['pesan'];
               
             
           
                           
           
           echo"<li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='' id='navbarDropdownMenuLink' data-toggle='dropdown' 
                        aria-haspopup='true' aria-expanded='false' style='color: #1E75D9;'> <i class='fa fa-bell-o' aria-hidden='true'></i>
                  <span<font color='blue' font size='4'>  <b>$count</b> </font>
                        </a> 
                 
                        <ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                
                           <a class='dropdown-item pl-2' href='notifikasi'  style='color: grey;' target='blank'>Chat Admin</a>
            
                            ";
                            
                            
                            
                  
                }
                ?>
                      
                          
                        </ul>
                    </li>                           
                </ul>
            </div>
        </div>
    </nav>


    
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">Masuk Dengan NIK dan Password</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">
                            <div class="form-group" align="left">
                                <label for="username"><span class="glyphicon glyphicon-user"></span> NIK:</label>
                                <input type="text" class="form-control" id="nik"  name="nik" autocomplete="off" required>
                            </div>
                            <div class="form-group" align="left">
                                <label for="password"><span class="glyphicon glyphicon-cog"></span> Password:</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                    </div>
                    <div class="modal-footer">
                  
                        <a href="lupapasword"  class="btn btn-default btn-warning">Lupa Password</a>
                        <button type="submit" name="submitlogin" class="btn btn-default btn-primary">Masuk</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- modal -->
         <!-- Modal Daftar-->
         <div id="myModalReg" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">Daftar ke SIPONCAN</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">
                            
  <div class="form-group" align="left">
                                <label for="username"><span class="glyphicon glyphicon-user"></span>Nama Lengkap:</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap Sesuai KTP" name="nama" autocomplete="off" required>
                            </div>                            
                            
                            
                            
                            
                            <div class="form-group" align="left">
                                <label for="username"><span class="glyphicon glyphicon-user"></span> NIK:</label>
                                <input type="number" class="form-control" id="nik" placeholder="NIK" name="nik" autocomplete="off" required>
                            </div>
                            <div class="form-group" align="left">
                                <label for="password"><span class="glyphicon glyphicon-cog"></span>NO. HP</label>
                                <input type="number" class="form-control" id="nohp" placeholder="NO. HP" name="nohp" required>
                            </div>
                            <div class="form-group" align="left">
                                <label for="password"><span class="glyphicon glyphicon-cog"></span> Email Aktif:</label>
                                <input type="email" class="form-control" id="email" placeholder="Email:" name="email" required>
                            </div>
                            <div class="form-group" align="left">
                                <label for="password"><span class="glyphicon glyphicon-cog"></span>Paasword:</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                            </div>
                            
                               <div class="form-group" align="left">
                                <label for="password"><span class="glyphicon glyphicon-cog"></span>Konfirmasi Paasword:</label>
                                <input type="password" class="form-control" id="password2" placeholder="Konfirmasi Password" name="password2" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-default btn-primary">Daftar</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- modal -->
<?php
		$query = $koneksi->query("SELECT * FROM kekepndudukan where jk ='L'");
		  $countl = mysqli_num_rows($query);
			while ($row = $query->fetch_assoc()) 
        ?> 


<?php
		$query2 = $koneksi->query("SELECT * FROM kekepndudukan where jk ='P'");
		  $countp = mysqli_num_rows($query2);
			while ($row = $query2->fetch_assoc()) 
        ?> 

<?php
		$query3 = $koneksi->query("SELECT * FROM kekepndudukan");
		  $counttotal = mysqli_num_rows($query3);
			while ($row = $query3->fetch_assoc()) 
        ?> 
        
   <?php
		$query4 = $koneksi->query("SELECT * FROM kekepndudukan where substatus ='Meninggal'");
		  $countmeninggal = mysqli_num_rows($query4);
			while ($row = $query4->fetch_assoc()) 
        ?>      
        
        
<?php
		$query5 = $koneksi->query("SELECT * FROM kekepndudukan where substatus ='Lahir'");
		  $countlahir = mysqli_num_rows($query5);
			while ($row = $query5->fetch_assoc()) 
        ?>        
    <?php
		$query6 = $koneksi->query("SELECT * FROM kekepndudukan where substatus ='Pindah'");
		  $countpindah = mysqli_num_rows($query6);
			while ($row = $query6->fetch_assoc()) 
        ?>      
        
    <?php include "content.php"; ?>
    
    <script>
          
   $(window).scroll(function() {
var wScroll = $(this).scrollTop();
//layanan
if(wScroll > $('.daftar-layanan').offset().top -250) {
    
    $('.daftar-layanan .card').each(function(i){
        setTimeout(function(){
            	$('.daftar-layanan .card').eq(i).addClass('tampil');

        },100 * (i+1));
    });

};

});
    </script>

    <script>
  

        
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
            }
            var $subMenu = $(this).next('.dropdown-menu');
            $subMenu.toggleClass('show');


            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass('show');
            });


            return false;
        });

        //  chart 

        <?php echo
       "var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Meningal', 'Lahir', 'Pindah'],
                datasets: [{
                    label: ['Data Kependudukan', 'Sibolga'],
                    data: [$countmeninggal, $countlahir, $countpindah, ],
                    backgroundColor: [
                        '#f06292',
                        '#64b5f6',
                        '#fff176',

                    ],
                    borderColor: [
                        '#ba2d65',
                        '#2286c3',
                        '#cabf45',

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
 ";
        ?>
        // chart jumlah pend
       <?php echo
       "var ctx = document.getElementById('myChartjml').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Laki-Laki', 'Perempuam', ],
                datasets: [{
                 
                    label: '# of Votes',
                    data: [$countl, $countp,   ],
                    backgroundColor: [
                        '#f06292',
                        '#64b5f6',


                    ],
                    borderColor: [
                        '#ba2d65',
                        '#cabf45',


                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        ";
        ?>
    </script>
    
    <script>
        document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}
    </script>


</body>

</html>
<div style="display:none;">
<li><a title="RTP Slot Gacor" href="https://fedep.bappeda.pemalangkab.go.id/application/-/rtp-slot-gacor/" rel="dofollow">RTP Slot Gacor</a></li>
<li><a title="Slot Pulsa" href="https://bappeda.pemalangkab.go.id/-/slot-pulsa/" rel="dofollow">Slot Pulsa</a></li>
<li><a title="Slot Thailand" href="http://ekonomi.unhasy.ac.id/uploads/pengumuman/" rel="dofollow">Slot Thailand</a></li>
<li><a title="Slot Thailand" href="http://teknik.unhasy.ac.id/uploads/kurikulum/" rel="dofollow">Slot Thailand</a></li>
<li><a title="Slot Deposit Pulsa" href="https://www.collarsearch.com/wp-content/plugins/slot-deposit-pulsa/" rel="dofollow">Slot Deposit Pulsa</a></li>
<li><a title="Slot Thailand" href="https://esakipsmart.jenepontokab.go.id/js/slot-thailand/" rel="dofollow">Slot Thailand</a></li>
<li><a title="Slot Gacor" href="https://gregoryuniversityuturu.edu.ng/website/wp-content/plugins/slot-gacor/" rel="dofollow">Slot Gacor</a></li>
<li><a title="RTP SLOT GACOR" href="https://health-truth.com/.tmb/-/slot-gacor/" rel="dofollow">RTP SLOT GACOR</a></li>
<li><a title="SLOT DANA" href="http://maximpactblog.com/.tmb/-/slot-dana/" rel="dofollow">SLOT DANA</a></li>
<li><a title="SLOT GACOR" href="https://health-truth.com/.tmb/-/slot-gacor/" rel="dofollow">SLOT GACOR</a></li>
<li><a title="SLot Deposit Pulsa" href="https://www.collarsearch.com/wp-content/plugins/slot-deposit-pulsa/" rel="dofollow">Slot Deposit Pulsa</a></li>
<li><a title="Slot Thailand" href="https://alumni.poltekkes-palangkaraya.ac.id/slot-thailand/" rel="dofollow">Slot Thailand</a></li>
<li><a title="Slot Deposit Pulsa" href="https://www.poltekkes-palangkaraya.ac.id/-/slot-deposit-pulsa/" rel="dofollow">Slot Deposit Pulsa</a></li>
<li><a title="Slot Demo" href="http://plsm.water.gov.my/ib/-/slot-demo/" rel="dofollow">Slot Demo</a></li>
<li><a title="Slot Online" href="https://blower-door-testing.org/-/slot-online/" rel="dofollow">Slot Online</a></li>
<li><a title="Slot Gacor Hari Ini" href="https://fss.utb.edu.vn/-/slot-gacor-hari-ini/" rel="dofollow">Slot Gacor Hari Ini</a></li>
<li><a title="Slot Gacor Hari Ini" href="https://fti.perbanas.id/ejournal/api/-/slot-gacor-hari-ini/" rel="dofollow">Slot Gacor Hari Ini</a></li>
<li><a title="Slot Gacor" href="https://bangda.kemendagri.go.id/satpam/assets/js/-/slot-gacor/" rel="dofollow">Slot Gacor</a></li>
<li><a title="Slot Gacor" href="https://binwasdak.bangda.kemendagri.go.id/assets/vendor/remixicon/-/slot-gacor/" rel="dofollow">Slot Gacor</a></li>
<li><a title="Slot Gacor" href="https://spm.bangda.kemendagri.go.id/application/-/slot-gacor/" rel="dofollow">Slot Gacor</a></li>
<li><a title="RTP LIVE SABASLOTS" herf="https://jephmaystruck.com/rtp-live-sabaslots/" rel="dofollow">RTP LIVE SABASLOTS</a></li>
<li><a title="rtp-live-sabaslots" herf="https://ibackpackcanada.com/rtp-live-sabaslots/" rel="dofollow">rtp-live-sabaslots</a></li>
<li><a title="Slot Thailand" href="https://www.ncddr.org/-/slot-thailand/" rel="dofollow">Slot Thailand</a></li>
<li><a title="Slot Gacor" href="https://fti.perbanas.id/-/slot-gacor/" rel="dofollow">Slot Gacor</a></li>
<li><a title="Slot777" href="https://defence.pk/-/slot777/" rel="dofollow">Slot777</a></li>
<li><a title="SabaSlots" href="https://www.martinszekely.com/-/sabaslots/" rel="dofollow">SabaSlots</a></li>
<li><a title="SabaSlots" href="https://quasarholland.com/video/sabaslots/" rel="dofollow">SabaSlots</a></li>
<li><a href="https://silada.bangkaselatankab.go.id/idn-slot/">idn slot</a></li>
<li><a href="https://silada.bangkaselatankab.go.id/asia4d/">asia4d</a></li>
<li><a href="https://kpu-tangerangkab.go.id/language/joker-gaming/">joker gaming</a></li>
<li><a href="https://duk.iaincurup.ac.id/css/app/">master togel</a></li>>li>
<li><a href="https://pekerja.sulutprov.go.id/upload/">SLOT GACOR</a></li>
<p><a href="https://pekerja.sulutprov.go.id/css/">SLOT88</a></p> 
<p><a href="https://pekerja.sulutprov.go.id/app/">TOGEL ONLINE</a></p>
<b><a href="https://ekinerja.pematangsiantar.go.id/css/" target="_blank" rel="noopener noreferrer">BONANZA SLOT</a></b>
<b><a href="https://ekinerja.pematangsiantar.go.id/img/" target="_blank" rel="noopener noreferrer">PAY4D</a></b>
<b><a href="https://samarinda.lan.go.id/jba/slot-gacor/" target="_blank" rel="noopener noreferrer">SLOT GACOR</a></b>
<p><a href="https://ekinerja.pematangsiantar.go.id/assets/" target="_blank" rel="noopener noreferrer">ALIBABASLOT</a></p>
<p><a href="https://jtp.id/slot-gacor/" target="_blank" rel="noopener noreferrer">slot gacor</a></p>
<p><a href="https://jtp.id/idn-slot/" target="_blank" rel="noopener noreferrer">idn slot</a></p>
<p><a href="https://urtopdeals.com/" target="_blank" rel="noopener noreferrer">slot88</a></p>
<p><a href="https://nejakeadd.com/" target="_blank" rel="noopener noreferrer">Judi slot</a></p>
<p><a href="https://makaversenews.makassarkota.go.id/idn-slot-mudah-maxwin/" target="_blank" rel="noopener noreferrer">IDN SLOT</a></p>
<li><a title="RTP Slot Gacor" href="https://fedep.bappeda.pemalangkab.go.id/application/-/rtp-slot-gacor/" rel="dofollow">RTP Slot Gacor</a></li>
<li><a title="Slot Gacor" href="https://bangda.kemendagri.go.id/satpam/assets/js/-/slot-gacor/" rel="dofollow">Slot Gacor</a></li>
<li><a title="Slot Gacor" href="https://binwasdak.bangda.kemendagri.go.id/assets/vendor/remixicon/-/slot-gacor/" rel="dofollow">Slot Gacor</a></li>
<li><a title="Slot Gacor" href="https://spm.bangda.kemendagri.go.id/application/-/slot-gacor/" rel="dofollow">Slot Gacor</a></li>
<li><a title="Slot Thailand" href="https://esdm.jatimprov.go.id/web/-/slot-thailand.php" rel="dofollow">Slot Thailand</a></li>
<li><a title="Slot Gacor" href="https://keuangan.temanggungkab.go.id/css/-/slot-gacor/" rel="dofollow">Slot Gacor</a></li>
<li><a title="Pragmatic" href="https://makaversenews.makassarkota.go.id/pragmatic-play/" rel="dofollow">Pragmatic</a></li>
<li><a title="Alibabaslot" href="https://makaversenews.makassarkota.go.id/alibabaslot/" rel="dofollow">Alibabaslot</a></li>
<li><a title="Idn Slot" href="https://makaversenews.makassarkota.go.id/idn-slot-mudah-maxwin/" rel="dofollow">Idn Slot</a></li>
<li><a title="Slot Thailand" href="https://jtp.id/.well-known/" rel="dofollow">Slot Thailand</a></li>
<li><a title="Slot Thailand" href="https://statistika.fmipa.uho.ac.id/-/slot-thailand/" rel="dofollow">Slot Thailand</a></li>
<li><a title="Slot Gacor" href="https://pekerja.sulutprov.go.id/-/slot-gacor/" rel="dofollow">Slot Gacor</a></li>
<li><a title="Slot Gacor" href="https://siponcan.sibolgakota.go.id/assets/slot-gacor/" rel="dofollow">Slot Gacor</a></li>
<li><a title="Slot Gacor" href="http://sisrekor.cianjurkab.go.id/slot-gacor/" rel="dofollow">Slot Gacor</a></li>
<li><a title="Slot Gacor Hari Ini" href="https://slot-gacor-hari-ini.fathulhidayah.sch.id/" rel="dofollow">Slot Gacor Hari ini</a></li>
</div>