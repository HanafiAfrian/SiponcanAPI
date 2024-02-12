

<?php
session_start();
include 'config/koneksi.php';
$nikuser = $_SESSION['nik'];
$sql1 = "SELECT * FROM  register WHERE nik = '$nikuser'";
$sql2 = mysqli_query($koneksi, $sql1);
$row = mysqli_fetch_array($sql2);


$nama = $row['nama'];
if (empty($_SESSION['nik'])) {
}

?>

<div class='canvas'  style='background-color: #052553; height: 1000px;'>
    <br>
    <br>
    <div class='container'>
        <div class='row'>
   <div class='col-lg-4 col-md-5 mb-2'>
                <div class='card' style='width: 18rem;'>
                    <div class='card-header bg-info'>
                    <a href='home-user' class='text-white'>   Dashboard</a>
                    </div>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>
                            <a href='infopenting' class='text-dark'>Info Penting</a>
                        </li>
                        <li class='list-group-item'>
                          <a href='profil' class='text-dark'>Profil</a>
                        </li>
                        <li class='list-group-item'>
                          <a href='gantipasword' class='text-dark'>Ganti Password</a>
                        </li>
                          <li class='list-group-item'>
                          <a href='sptjmdowlonad' class='text-dark'>SPTJM</a>
                        </li>
                      
                    </ul>
                </div>
            </div>
      <div class='col-lg-8 col-md-7'>
                <div>
                    <div class='card Recent-Users'>
                        <div class='card-header bg-info text-white text-center'>
                            RIWAYAT PENGAJUAN
                        </div>

                        <div class='card-block px-0'>
                            <div class='table-responsive'>
                                                         <?php
 include 'config/koneksi.php';
	$sql ="select * from  riwayat WHERE  uuid_reg = '$nikuser'    ORDER BY creat_at  DESC";
	$sql2 =mysqli_query($koneksi, $sql);
	while ($row=mysqli_fetch_array($sql2)){
		$jenis = $row['jenis'];
		$creat_at = $row['creat_at'];
			$status = $row['status'];
		
  
 echo "
                                <table class='table'>

    <th><img class='rounded-circle' style='width:40px;' src='icon/akui.png' alt='pengakuan'></th>
                                            <th>
                                                <h6 class='mb-1'>$nikuser</h6>
                                            </th>
                                            <th>
                                                <p class='m-0'>$jenis</p>
                                            </th>
                                            <th>
                                                <h6 class='text-muted'><i class='fa fa-calendar-o' aria-hidden='true'></i> $creat_at</h6>
                                            </th>
                                            <th> <span class='badge badge-pill badge-info'>$status</span></td>
                                            </th>
                                        </tr>
                                        
                                         ";
                                                                       
 }
 ?>
                                </table>
                                <!-- <tr>
                                            <td>
                                            <span class='badge badge-pill badge-info'>Alasan: </span>
                                            </td>
                                            <td colspan='3'>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda consequuntur harum aut provident magnam beatae accusamus iusto nostrum iste. Officia libero voluptas eos numquam, enim molestiae iusto dolorem odit.
                                            </td>
                                        </tr>
                                      
                                       


                                </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>