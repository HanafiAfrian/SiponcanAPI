<?php
session_start();


$nikuser = $_SESSION['nik'];


$sql1 = "SELECT * FROM  register WHERE nik = '$nikuser'";
$sql2 = mysqli_query($koneksi, $sql1);
$row = mysqli_fetch_array($sql2);


$nama = $row['nama'];
if (empty($_SESSION['nik'])) {
    header('location:home');
}

?>



<?php


include('config/koneksi.php');

if (isset($_POST['submitgantipasword'])) {


    $password = $_POST['password'];

    $password2 = $_POST['password2'];

    if ($password != $password2) {

        echo "<script>alert('Konfirmasi Password Tidak Sama');</script>";
    } else {


        $sq51 = " update register set pasword= '$password' 
    where  nik = '$nikuser'  ";
        $sq52 = mysqli_query($koneksi, $sq51);




        echo "<script>alert('Ganti Pasword Berhasil');window.location='home';</script>";
    }
}
?>

<div>



    <div class="canvas"  style="background-color: #052553; height: 1000px;">
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 mb-2">
                    <div class="card">
                        <div class="card-header">
                            <a href="home-user" class="text-dark"> Dashboard</a>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="infopenting" class="text-dark">Info Penting</a>
                            </li>
                            <li class="list-group-item">
                                <a href="profil" class="text-dark">Profil</a>
                            </li>
                            <li class="list-group-item bg-info">
                                <a href="gantipasword" class="text-white">Ganti Password</a>
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
                                <form method="post" action="" class="mx-3 my-3">








                                    <div class="form-group" align="left">
                                        <label for="password"><span class="glyphicon glyphicon-cog"></span>Password:</label>
                                        <input type="password" class="form-control" id="password"  name="password" required>
                                    </div>

                                    <div class="form-group" align="left">
                                        <label for="password"><span class="glyphicon glyphicon-cog"></span>Konfirmasi Paasword:</label>
                                        <input type="password" class="form-control" id="password2" name="password2" required>
                                    </div>

                                        <button type="submit" name="submitgantipasword" class="btn btn-info">Konfirmasi</button>
                                   
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>