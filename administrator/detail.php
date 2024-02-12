<?php
error_reporting(0);
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>
<html>

<head>
    <title>:: Administrator ::</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="../js/bootstrap.min.css"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/e1c52708df.js"></script>


    <style>
     
    </style>


</head>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main" style="background-color:white !important;
  box-shadow: 5px 5px 10px #eaeaea;">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" " target="_blank">
            <!-- <img src="" class="navbar-brand-img h-100" alt="main_logo"> -->
            <span class="ms-1 font-weight-bold">Administrator Page</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">HALAMAN PENGAJUAN</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pengaduan.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">


                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                            <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                        </svg>
                    </div>

                    <span class="nav-link-text ms-1">All Data</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="uploadberkas.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                            <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Baru Upload</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="verifikasi.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentcolor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                            <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Sedang di Verifikasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="ditolak.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill" viewBox="0 0 16 16">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z" />
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Ditolak</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="selesai.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check-fill" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z" />
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708Z" />
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Selesai</span>
                </a>
            </li>


            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Daftar Pengguna</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">



                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg>
                    </div>

                    <span class="nav-link-text ms-1">All User</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>customer-support</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(1.000000, 0.000000)">
                                            <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                                            <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                                            <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link  " href="">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>spaceship</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(4.000000, 301.000000)">
                                            <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                                            <path class="color-background opacity-6" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                                            <path class="color-background opacity-6" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"></path>
                                            <path class="color-background opacity-6" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
            <div class="full-background" style="background-image: url('assets/img/curved-images/white-curved.jpg')"></div>

        </div>
        <a class="btn bg-gradient-primary mt-3 w-100 text-white" href="">Logout</a>
    </div>
</aside>
<main class="main-content ">
    <!-- Navbar -->
    <nav class="navbar navbar-main px-0 mx-4 shadow border-radius-xl bg-white mb-4 mt-3" id="" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail</li>
                </ol>
                <h6 class="font-weight-bolder mb-0 text-dark">Detail</h6>
            </nav>

        </div>
    </nav>
    <!-- End Navbar -->
    <section id="main" style="padding: 20px; background-color:white;box-shadow: 5px 5px 18px #888888;border-radius:10px">
        <?php




        // ktp hilang      

        if (isset($_POST['submitktphilang'])) {

            include "koneksi.php";



            $uuid_pengaduan = $_GET['uuid_pengaduan'];
            $kd_jenis = $_GET['kd_jenis'];
            $uuid_reg = $_GET['uuid_reg'];
            $status = $_POST['status'];

            $tanggal = date('y-m-d H:i:s');
            $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

            $sql1 = "UPDATE  ktphilang SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
            $sql2 = mysqli_query($koneksi, $sql1);

            $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
            $sql2 = mysqli_query($koneksi, $sql1);

 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";


            $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','Kartu Tanda Penduduk Hilang','KTP Hilang','$status','$tanggal')";
            $q152 = mysqli_query($koneksi, $sql45);





            $time = date('H:i');
            date_default_timezone_set("Asia/Jakarta");
            $time = date('H:i', strtotime($time . '-1 hour'));

            $tanggal = date('y-m-d H:i:s');
            $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));
            
            
 $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

            $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda  Kartu Tanda Penduduk Hilang  pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi, $sql452);

            $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Kartu Tanda Penduduk Hilang pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
            $sq52 = mysqli_query($koneksi, $sq512);





            $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
            $q1332 = mysqli_query($koneksi, $sql332);
            $row = mysqli_fetch_array($q1332);
            $token = $row['token'];

            include("fungsisiponcan.php");
            $nama = "hanafi";
            $id_client = "$token";
            $pesan = "Status Pengajuan Online Anda Kartu Tanda Penduduk Hilang pada Aplikasi Siponcan $status, Silahkan buka Aplikasi Siponcan untuk detailnya";

            $title = "Siponcan Info";
            $body = $pesan;
            $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


            header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
        }

        // end ktp hilang


        // ktp rusak



        if (isset($_POST['submitktprusak'])) {

            include "koneksi.php";



            $uuid_pengaduan = $_GET['uuid_pengaduan'];
            $kd_jenis = $_GET['kd_jenis'];
            $uuid_reg = $_GET['uuid_reg'];
            $status = $_POST['status'];

            $tanggal = date('y-m-d H:i:s');
            $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

            $sql1 = "UPDATE  ktprusak SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
            $sql2 = mysqli_query($koneksi, $sql1);

            $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
            $sql2 = mysqli_query($koneksi, $sql1);


 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";


            $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','Kartu Tanda Penduduk Rusak','KTP Rusak','$status','$tanggal')";
            $q152 = mysqli_query($koneksi, $sql45);





            $time = date('H:i');
            date_default_timezone_set("Asia/Jakarta");
            $time = date('H:i', strtotime($time . '-1 hour'));

            $tanggal = date('y-m-d H:i:s');
            $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));
            
             $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

            $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Kartu Tanda Penduduk Rusak pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi, $sql452);

            $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Kartu Tanda Penduduk Rusak pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
            $sq52 = mysqli_query($koneksi, $sq512);





            $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
            $q1332 = mysqli_query($koneksi, $sql332);
            $row = mysqli_fetch_array($q1332);
            $token = $row['token'];

            include("fungsisiponcan.php");
            $nama = "hanafi";
            $id_client = "$token";
            $pesan = "Status Pengajuan Online Anda Kartu Tanda Penduduk Rusak pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

            $title = "Siponcan Info";
            $body = $pesan;
            $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


            header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
        }
        ?>

        <!--end ktp rusak-->


        <!--ktp perubahan-->
        <?php
            

        if (isset($_POST['submitktpperubahan'])) {

            include "koneksi.php";



            $uuid_pengaduan = $_GET['uuid_pengaduan'];
            $kd_jenis = $_GET['kd_jenis'];
            $uuid_reg = $_GET['uuid_reg'];
            $status = $_POST['status'];

            $tanggal = date('y-m-d H:i:s');
            $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

            $sql1 = "UPDATE  ktpperubahan SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
            $sql2 = mysqli_query($koneksi, $sql1);

            $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
            $sql2 = mysqli_query($koneksi, $sql1);

 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";

            $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','Kartu Tanda Penduduk Perubahan','KTP Perubahan','$status','$tanggal')";
            $q152 = mysqli_query($koneksi, $sql45);





            $time = date('H:i');
            date_default_timezone_set("Asia/Jakarta");
            $time = date('H:i', strtotime($time . '-1 hour'));

            $tanggal = date('y-m-d H:i:s');
            $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

 $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

            $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Kartu Tanda Penduduk Perubahan pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
            $q152 = mysqli_query($koneksi, $sql452);

            $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Kartu Tanda Penduduk Perubahan pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
            $sq52 = mysqli_query($koneksi, $sq512);





            $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
            $q1332 = mysqli_query($koneksi, $sql332);
            $row = mysqli_fetch_array($q1332);
            $token = $row['token'];

            include("fungsisiponcan.php");
            $nama = "hanafi";
            $id_client = "$token";
            $pesan = "Status Pengajuan Online Anda Kartu Tanda Penduduk Perubahan pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

            $title = "Siponcan Info";
            $body = $pesan;
            $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


            header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
        }



        ?>
        <!--end ktp perubahan-->
        
        
        <!--akte kematian-->
        <?php


    if (isset($_POST['submitaktakematian'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  tb_aktekematian SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";


        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','Akte Kematian','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));
        
         $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Akta Kematian pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Akta Kematian pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Akta Kematian pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }



    ?>
        <!--end akte kematian-->


        <!--akte kelahiran-->
        
        
        
        <?php

    if (isset($_POST['submitaktakelahiran'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  tb_aktelahir SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);
 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','Akte Kelahiran','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));
        
        
 $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Akta Kelahiran pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Akta Kelahiran pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Akta Kelahiran pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }



    ?>
        <!--end akte kelahiran-->
        
        
        <!--akte kawin-->
        <?php
    // PROSES UPDATE AKTA KEMATIAN        

    if (isset($_POST['submitaktakawin'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  tb_aktekawin SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";



        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','Akte Perkawinan','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));
        
         $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Akta Perkawinan pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Akta Perkawinan pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Akta Perkawinan pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>
        <!--akte kawin-->
   
   
   
   <?php
    // PROSES UPDATE AKTA KEMATIAN        

    if (isset($_POST['submitaktacerai'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  tb_aktecerai SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','Akte Perceraian','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));
        
         $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Akta Cerai pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Akta Cerai pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Akta Cerai pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>



<!--kia-->
<?php
    // PROSES UPDATE AKTA KEMATIAN        

    if (isset($_POST['submitkia'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  kia SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";



        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','Kartu Identitas Anak','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

 $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Kartu Identitas Anak pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Kartu Identitas Anak pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>
<!--end kia-->


<!--surat pindah-->
<?php
    // PROSES UPDATE AKTA KEMATIAN        

    if (isset($_POST['submitsp'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  surat_pindah SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);



 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','Surat Pindah','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

 $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Surat Pindah pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Surat Pindah pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Surat Pindah pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>

<!--end surat pindah-->

<!--kejadian penting pindah-->
<?php
    // PROSES UPDATE AKTA KEMATIAN  KKPPPINDAH      

    if (isset($_POST['submitkkpppindah'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  kkpp_suratpindah SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";


        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','Peristiwa Penting Kepindahan','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));
        
         $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Peristiwa Penting Kepindahan pada Aplikasi Siponcan  $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Peristiwa Penting Kepindahan pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Peristiwa Penting Kepindahan pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>
<!--kejadian penting pindah-->


<!--kejadian penting kelahiran anak-->
<?php
    // PROSES UPDATE AKTA KEMATIAN  PDAPKK      

    if (isset($_POST['submitpdapkk'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  kk_penambahan_anak SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','Peristiwa Penting Penambahan Anak','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

 $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Penambahan Anak pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Peristiwa Penting Penambahan Anak pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Peristiwa Penting Penambahan Anak pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>





<?php
    // PROSES UPDATE AKTA KEMATIAN  PDAPKK      

    if (isset($_POST['submitkkppkematian'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  kkpp_kematian SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','Peristiwa Penting Pengurangan Karena Kematian','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

 $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Peristiwa Penting Pengurangan Karena Kematian Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Peristiwa Penting Pengurangan Karena Kematian pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Peristiwa Penting Pengurangan Karena Kematian pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>
<!--end kejadian penting kelahiran anak-->


<!--pengangkatan anak-->

<?php
    // PROSES UPDATE AKTA KEMATIAN  AKPENGANAK      

    if (isset($_POST['submitakpenganak'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  pengangkatanank SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','Akta Pengangkatan Anak','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

 $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Pengangkatan Anak pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Pengangkatan Anak pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Pengangkatan Anak pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>
<!--end pengangkatan anak-->


<!--akta pengakuan anak-->
<?php
    // PROSES UPDATE AKTA KEMATIAN  AKPENGANAK      

    if (isset($_POST['submitakpengakuananak'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  pengakuananak SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


 $time11223 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time11223 = date('YmdHis');

$permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
$uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','AKTA PENGAKUAN ANAK','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

 $time1122 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1122 = date('YmdHis');

$permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
$uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
$uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Pengakuan Anak pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Pengakuan Anak pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Pengakuan Anak pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>
<!--akta pengakuan anak-->


<!--akta pengesahan anak-->
<?php
    // PROSES UPDATE AKTA KEMATIAN  AKPENGESAHANANAK      

    if (isset($_POST['submitakpengesahanank'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  pengesahanananak SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


        $time11223 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time11223 = date('YmdHis');

        $permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
        $uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','AKTA PENGESAHAN ANAK','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $time1122 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time1122 = date('YmdHis');

        $permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
        $uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Pengesahan Anak pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Pengesahan Anak pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Pengesahan Anak pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>
<!--detail akta pengesahan anak-->


<!--kkbaru-->
<?php


    if (isset($_POST['submitbkkb'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  kk_baru SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


        $time11223 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time11223 = date('YmdHis');

        $permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
        $uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','KK-KELUARGA BARU','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $time1122 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time1122 = date('YmdHis');

        $permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
        $uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Membentuk Kartu Keluarga Baru pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Membentuk Kartu Keluarga Baru pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Membentuk Kartu Keluarga Baru pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>
<!--kkbaru-->


<!--KK GANTI KK-->
<?php
 

    if (isset($_POST['submitgantikk'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  kkgantikk SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


        $time11223 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time11223 = date('YmdHis');

        $permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
        $uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','KK-PENGGANTIAN KEPALA KELUARGA','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $time1122 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time1122 = date('YmdHis');

        $permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
        $uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Penggantian Kepala Keluarga pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Penggantian Kepala Keluarga pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Penggantian Kepala Keluarga pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>
<!--END KK GANTI KK-->

<!--PISAH KK-->

<?php
//  

    if (isset($_POST['submitkkpisah'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  kk_pisah SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


        $time11223 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time11223 = date('YmdHis');

        $permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
        $uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','KK-PISAH KK','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $time1122 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time1122 = date('YmdHis');

        $permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
        $uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Pisah Kartu Keluarga pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Pisah Kartu Keluarga pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Pisah Kartu Keluarga pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>
<!--END PISAH KK-->


<!--NUMPANG KK-->

<?php
//  KKPSH

    if (isset($_POST['submitkknumpang'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  kk_numpangdalamkk SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


        $time11223 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time11223 = date('YmdHis');

        $permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
        $uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','KK-NUMPANG KK','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $time1122 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time1122 = date('YmdHis');

        $permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
        $uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Menumpang Dalam Kartu Keluarga pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Menumpang Dalam Kartu Keluarga pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Menumpang Dalam Kartu Keluarga pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>
<!--END NUMPANG KK-->

<!--KK RUSAK-->

<?php
//  KKRSK

    if (isset($_POST['submitkkrusak'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  kk_rusak SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


        $time11223 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time11223 = date('YmdHis');

        $permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
        $uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','KK-RUSAK','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $time1122 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time1122 = date('YmdHis');

        $permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
        $uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Kartu Keluarga Rusak pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Kartu Keluarga Rusak pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Kartu Keluarga Rusak pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>






<?php
//  KKRSK

    if (isset($_POST['submitkkhilang'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  kk_hilang SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


        $time11223 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time11223 = date('YmdHis');

        $permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
        $uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','KK-Hilang','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $time1122 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time1122 = date('YmdHis');

        $permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
        $uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Kartu Keluarga Hilang pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Kartu Keluarga Hilang pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Kartu Keluarga Hilang pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>
<!--END KK RUSAK-->



<?php
//  KKRSK

    if (isset($_POST['submitkkperubahan'])) {

        include "koneksi.php";



        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];
        $status = $_POST['status'];

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $sql1 = "UPDATE  kk_perubahan_data SET 	status ='" . $status . "'
	    WHERE uuid='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);

        $sql1 = "UPDATE tb_pengaduan SET 	status ='" . $status . "'
	    WHERE uuid_pengaduan='" . $uuid_pengaduan . "'";
        $sql2 = mysqli_query($koneksi, $sql1);


        $time11223 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time11223 = date('YmdHis');

        $permitted_chars1223 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl01223 = substr(str_shuffle($permitted_chars1223), 0, 13);
        $uuidhtlgcg = "rw-$time11223$uuidhtl01223";

        $sql45 = "insert into riwayat (id,uuid_reg,id_pengaduan,jenis,pengajuan,status,creat_at) 
        values ('$uuidhtlgcg','$uuid_reg','$uuid_pengaduan','KK-Perubahan ','','$status','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql45);





        $time = date('H:i');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('H:i', strtotime($time . '-1 hour'));

        $tanggal = date('y-m-d H:i:s');
        $tanggal = date('y-m-d H:i:s', strtotime($tanggal . '-1 hour'));

        $time1122 = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Jakarta");
        $time1122 = date('YmdHis');

        $permitted_chars122 = '0123456789abcdefghijklmnopqrstuvwxyz';
        $uuidhtl0122 = substr(str_shuffle($permitted_chars122), 0, 13);
        $uuidhtlgch = "ch-$time1122$uuidhtl0122";

        $sql452 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
        values ('$uuidhtlgch','Admin','$uuid_reg','Admin','$uuid_reg','Status Pengajuan Online Anda Kartu Keluarga Perubahan Elemen Data pada Aplikasi Siponcan $status','wr','0','$time','$tanggal')";
        $q152 = mysqli_query($koneksi, $sql452);

        $sq512 = " update chatgroup set pesan= 'Status Pengajuan Online Anda Kartu Keluarga Perubahan Elemen Data pada Aplikasi Siponcan $status',
                                tanggal = '$tanggal'
        where  nm_grp = '$uuid_reg'  ";
        $sq52 = mysqli_query($koneksi, $sq512);





        $sql332 = "SELECT * FROM register  where  nik = '$uuid_reg'";
        $q1332 = mysqli_query($koneksi, $sql332);
        $row = mysqli_fetch_array($q1332);
        $token = $row['token'];

        include("fungsisiponcan.php");
        $nama = "hanafi";
        $id_client = "$token";
        $pesan = "Status Pengajuan Online Anda Kartu Keluarga  Perubahan Elemen Data pada Aplikasi Siponcan $status, Silahkan buka Aplikasi siponcan untuk detailnya";

        $title = "Siponcan Info";
        $body = $pesan;
        $hasil = kirimPesan($id_client, $title, $body, $icon, $url);


        header("location: detail.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg");
    }
?>
<!--here-->



        <!--detail ktp hilang-->
        <?php
        include "koneksi.php";
  

        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];

        // DETAIL KTP 

        if ($kd_jenis == 'KTPHILANG') {
            $result = mysqli_query($koneksi, "SELECT * FROM `ktphilang` WHERE uuid='$uuid_pengaduan'");
            while ($row = mysqli_fetch_array($result)) {
                $nik_pm = $row['nik_pm'];
                $nama_pm = $row['nama_pm'];
                $nokk_pm = $row['nokk_pm'];
                $umur_pm = $row['umur_pm'];
                $f_ktp = $row['f_ktp'];
                $f_kk = $row['f_kk'];



                $status = $row['status'];
                $kwn = $row['kwn'];

                $tanggal = $row['create-at'];
                $data = $tanggal;
                $data = date('Y-m-d', strtotime($data));
                $tanggal2 = tgl_indo($data);
                $data1 = $row['tggllahir'];
                $tanggallahir = tgl_indo($data1);


                $data2 = $row['tgghilang'];
                $tanggalhilang = tgl_indo($data2);


                echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>KARTU TANDA PENDUDUK HILANG </font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn_pm] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PADA KTP</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nikpr] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namapr] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tempat Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[temptlahir] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:
                
                
                
                            $tanggallahir </font>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>Jenis Kelamin</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[jk] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Agama</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[agama] </font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Surat Hilang Dari Kepolisian</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[noketpolisi] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Hilang</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggalhilang </font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Likasi Hilang</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[lokasihilang] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>File KK Asli</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/ktphilang/$row[f_kk]' target='blank'> $row[f_kk]</a></font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> File Surat Keterangan Kepolisian</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/ktphilang/$row[f_ketpolisi]' target='blank'>$row[f_ketpolisi]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitktphilang' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/ktphilang/$row[f_kk]' width='70%' height='400' /> <br><br>
                
                            File KK Asli
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/ktphilang/$row[f_ketpolisi]' width='70%' height='400' /><br><br>
                
                            File Surat Keterangan Kepolisian
                
                        </div>
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
             <!--end detail ktp hilang-->
     


      <!--detail ktp rusak-->

        <?php
        include "koneksi.php";
     


        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];


        if ($kd_jenis == 'KTPRUSAK') {
            $result = mysqli_query($koneksi, "SELECT * FROM `ktprusak` WHERE uuid='$uuid_pengaduan'");
            while ($row = mysqli_fetch_array($result)) {
                $nik_pm = $row['nik_pm'];
                $nama_pm = $row['nama_pm'];
                $nokk_pm = $row['nokk_pm'];
                $umur_pm = $row['umur_pm'];
                $f_ktp = $row['f_ktp'];
                $f_kk = $row['f_kk'];



                $status = $row['status'];
                $kwn = $row['kwn'];

                $tanggal = $row['create-at'];
                $data = $tanggal;
                $data = date('Y-m-d', strtotime($data));
                $tanggal2 = tgl_indo($data);
                $data1 = $row['tggllahir'];
                $tanggallahir = tgl_indo($data1);


                $data2 = $row['tgghilang'];
                $tanggalhilang = tgl_indo($data2);


                echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>KARTU TANDA PENDUDUK RUSAK </font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                 
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn_pm] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PADA KTP</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pr] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pr] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tempat Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[temptlahir] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:
                
                
                
                            $tanggallahir </font>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>Jenis Kelamin</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[jk] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Agama</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[agama] </font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Alasan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[alasan] </font>
                    </div>
                
                   
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>File KK Asli</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//ktprusak/$row[f_kkasli]' target='blank'> $row[f_kkasli]</a></font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> File KTP</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//ktprusak/$row[f_ktp]' target='blank'>$row[f_ktp]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                
                
                
                
                
                
                
                
                
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitktprusak' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//ktprusak/$row[f_kkasli]' width='70%' height='400' /> <br><br>
                
                            File KK Asli
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//ktprusak/$row[f_ktp]' width='70%' height='400' /><br><br>
                
                            File KTP
                
                        </div>
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

        ?>
            <!--end detail ktp rusak-->
        
        
        <!-- Detail ktp perubahan -->


        <?php
            include "koneksi.php";
       


            $uuid_pengaduan = $_GET['uuid_pengaduan'];
            $kd_jenis = $_GET['kd_jenis'];
            $uuid_reg = $_GET['uuid_reg'];


            if ($kd_jenis == 'KTPPERUBAHAN') {
                $result = mysqli_query($koneksi, "SELECT * FROM `ktpperubahan` WHERE uuid='$uuid_pengaduan'");
                while ($row = mysqli_fetch_array($result)) {
                    $nik_pm = $row['nik_pm'];
                    $nama_pm = $row['nama_pm'];
                    $nokk_pm = $row['nokk_pm'];
                    $umur_pm = $row['umur_pm'];
                    $f_ktp = $row['f_ktp'];
                    $f_kk = $row['f_kk'];



                    $status = $row['status'];
                    $kwn = $row['kwn_pm'];

                    $tanggal = $row['create-at'];
                    $data = $tanggal;
                    $data = date('Y-m-d', strtotime($data));
                    
                    
                    $tanggal2 = tgl_indo($data);
                    $data1 = $row['tggllahir'];
                    $tanggallahir = tgl_indo($data1);


                    $data2 = $row['tgghilang'];
                    $tanggalhilang = tgl_indo($data2);


                    echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>KARTU TANDA PENDUDUK PERUBAHAN </font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn_pm] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PADA KTP</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pr] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pr] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tempat Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[temptlahir] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggallahir </font>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>Jenis Kelamin</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[jk] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Agama</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[agama] </font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Alasan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[alasan] </font>
                    </div>
                
                   
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>File KK Baru Setelah Berubah</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//ktpperubahan/$row[f_kkperubahan]' target='blank'> $row[f_kkperubahan]</a></font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> File KTP Lama Asli Yang Belum Berubah</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//ktpperubahan/$row[f_kkasli]' target='blank'>$row[f_kkasli]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                
                
                
                
                
                
                
                
                
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitktpperubahan' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//ktpperubahan/$row[f_kkperubahan]' width='70%' height='400' /> <br><br>
                
                            File KK Asli
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//ktpperubahan/$row[f_kkasli]' width='70%' height='400' /><br><br>
                
                            File Surat Keterangan Kepolisian
                
                        </div>
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>




        <!-- end detail ktp perubahan -->
        
        
        <!--detail akte kematian-->
        

             <?php
            include "koneksi.php";
        


            $uuid_pengaduan = $_GET['uuid_pengaduan'];
            $kd_jenis = $_GET['kd_jenis'];
            $uuid_reg = $_GET['uuid_reg'];


            if ($kd_jenis == 'AKDEAD') {
                $result = mysqli_query($koneksi, "SELECT * FROM `tb_aktekematian` WHERE uuid='$uuid_pengaduan'");
                while ($row = mysqli_fetch_array($result)) {
               



                    $tanggal = $row['create-at'];
                    $data = $tanggal;
                    $data = date('Y-m-d', strtotime($data));
                    $tanggal2 = tgl_indo($data);
                    $data1 = $row['tggllahir'];
                    $tanggallahir = tgl_indo($data1);
    $status = $row['status'];

                    $data2 = $row['tggl_mnggl'];
                    $tanggalmeninggal = tgl_indo($data2);


                    echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>AKTE KEMATIAN</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nikpmhon]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namapmhon]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokkpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umurpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn] </font>
                    </div>
                  <div class='col-sm-4'>
                        <font size='4'>Klasifikasi</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[klarifikasi] </font>
                    </div>
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>SAKSI 1</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[niksaksi1]  </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namasaksi1] </font>
                    </div>
                
                  
                   
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwnsaksi1] </font>
                    </div>
                
                  
                
              
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>SAKSI 2</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    
                     <div class='col-sm-4'>
                        <font size='4'>NIK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[niksaksi2]  </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namasaksi2] </font>
                    </div>
                
                 
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwnsaksi2] </font>
                    </div>
                
                    <br><br>
                <div class='col-sm-4'>
                    <b>
                        <font size='4'>DATA JENAZAH</font>
                    </b>
                </div>
            
                <div class='col-sm-8'>
                </div>


                <div class='col-sm-4'>
                <font size='4'>Tanggal Menningggal</font>
               </div>
           
               <div class='col-sm-8'>
                   <font size='4'>: $tanggalmeninggal </font>
               </div>


               <div class='col-sm-4'>
               <font size='4'>Jam Menningggal</font>
              </div>
          
              <div class='col-sm-8'>
                  <font size='4'>: $row[jam_mnggl]</font>
              </div>

              <div class='col-sm-4'>
              <font size='4'>Nama Jenazah</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[namajns] </font>
          </div>

                    <div class='col-sm-4'>
                    <font size='4'>Nama Ibu Jenazah</font>
                </div>
                <div class='col-sm-8'>
                    <font size='4'>: $row[namaibujns] </font>
                </div>

                <div class='col-sm-4'>
                <font size='4'>Penyebab Kematian</font>
            </div>
            <div class='col-sm-8'>
                <font size='4'>: $row[sebab_mngl] </font>
            </div>


            <div class='col-sm-4'>
            <font size='4'>Yang Menerangkan</font>
        </div>
        <div class='col-sm-8'>
            <font size='4'>: $row[tngg_mnggl] </font>
        </div>


        <div class='col-sm-4'>
        <font size='4'>Tempat Meninggal</font>
    </div>
    <div class='col-sm-8'>
        <font size='4'>: $row[tpmeninggal] </font>
    </div>

                
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                      <div class='col-sm-4'>
                        <font size='4'>File KTP Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktekematian/$row[f_ktp]' target='blank'> $row[f_ktp]</a></font>
                    </div>
                
                  <div class='col-sm-4'>
                        <font size='4'>File KK</font>
                    </div>
                    
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktekematian/$row[f_kk]' target='blank'>$row[f_kk]</a> </font>
                    </div>




                    <div class='col-sm-4'>
                        <font size='4'>File KTP-el Jenazah</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktekematian/$row[f_ktpjnazah]' target='blank'>$row[f_ktpjnazah]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Surat Akta Kematian dari Capil</font>
                    </div>
                
                    <div class='col-sm-8'>
                    <font size='4'>: <a href='../siponcan/files//aktekematian/$row[f_ktppemohon]' target='blank'>$row[f_ktppemohon]</a> </font>
                    </div>
                   
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitaktakematian' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[namapmhon] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//aktekematian/$row[f_ktp]' width='70%' height='400' /> <br><br>
                
                      File KTP Pemohon
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//aktekematian/$row[f_kk]' width='70%' height='400' /><br><br>
                
                       File KK
                
                        </div>
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//aktekematian/$row[f_ktpjnazah]' width='70%' height='400' /><br><br>
                File KTP-el Jenazah
                
                        </div>
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//aktekematian/$row[f_ktppemohon]' width='70%' height='400' /><br><br>
                
                Surat Akta Kematian dari Capil
                
                        </div>
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>




        <!--end detail akte kematian-->
        
        
        <!--detail akte kelahiran-->
        <?php
            include "koneksi.php";
         


            $uuid_pengaduan = $_GET['uuid_pengaduan'];
            $kd_jenis = $_GET['kd_jenis'];
            $uuid_reg = $_GET['uuid_reg'];


            if ($kd_jenis == 'AKKEL') {
                $result = mysqli_query($koneksi, "SELECT * FROM `tb_aktelahir` WHERE uuid='$uuid_pengaduan'");
                while ($row = mysqli_fetch_array($result)) {
               



                    $tanggal = $row['create-at'];
                    $data = $tanggal;
                    $data = date('Y-m-d', strtotime($data));
                    $tanggal2 = tgl_indo($data);
                    $data1 = $row['tggllahir'];
                    $tanggallahir = tgl_indo($data1);
                    $status = $row['status'];

                    $data2 = $row['tggl_mnggl'];
                    $tanggalmeninggal = tgl_indo($data2);
                    
                    $data1 = $row['tgl_lahiranak'];
                    $tanggallahiranak = tgl_indo($data1);
                    $status = $row['status'];
                    
                    
                     $data3 = $row['lhr_ayah'];
                    $tanggallahirayah = tgl_indo($data1);
                    $status = $row['status'];
                    
                    
                     $data4 = $row['lhribu'];
                    $tanggallahiribu = tgl_indo($data1);
                    $status = $row['status'];

                    echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>AKTE KELAHIRAN</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nikpmhon]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namapmhon]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokkpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umurpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwnpmhon] </font>
                    </div>
                  <div class='col-sm-4'>
                        <font size='4'>Klasifikasi</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[klarifikasi] </font>
                    </div>
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>SAKSI 1</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[niksaksi1]  </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namasaksi1] </font>
                    </div>
                
                  
                   
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwnsaksi1] </font>
                    </div>
                
                  
                
              
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>SAKSI 2</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    
                     <div class='col-sm-4'>
                        <font size='4'>NIK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[niksaksi2]  </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namasaksi2] </font>
                    </div>
                
                 
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwnsaksi2] </font>
                    </div>
                
                    <br><br>
                <div class='col-sm-4'>
                    <b>
                        <font size='4'>DATA AYAH</font>
                    </b>
                </div>
            
                <div class='col-sm-8'>
                </div>


                <div class='col-sm-4'>
                <font size='4'>Nik Ayah</font>
               </div>
           
               <div class='col-sm-8'>
                   <font size='4'>: $row[nikayah]</font>
               </div>


               <div class='col-sm-4'>
               <font size='4'>Nama Ayah</font>
              </div>
          
              <div class='col-sm-8'>
                  <font size='4'>: $row[namaayah]</font>
              </div>

              <div class='col-sm-4'>
              <font size='4'>Tempat Lahir</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[tmptayah] </font>
          </div>
          
               <div class='col-sm-4'>
              <font size='4'>Tanggal Lahir</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $tanggallahirayah </font>
          </div>
             <div class='col-sm-4'>
              <font size='4'>Kewarganegaraan</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[kwnayah] </font>
          </div>
            

                <br><br>
                <div class='col-sm-4'>
                    <b>
                        <font size='4'>DATA IBU</font>
                    </b>
                </div>
            
                <div class='col-sm-8'>
                </div>


                <div class='col-sm-4'>
                <font size='4'>Nik Ibu</font>
               </div>
           
               <div class='col-sm-8'>
                   <font size='4'>: $row[nikibu]</font>
               </div>


               <div class='col-sm-4'>
               <font size='4'>Nama Ibu</font>
              </div>
          
              <div class='col-sm-8'>
                  <font size='4'>: $row[namaibu]</font>
              </div>

              <div class='col-sm-4'>
              <font size='4'>Tempat Lahir</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[tmptibu] </font>
          </div>
             <div class='col-sm-4'>
              <font size='4'>Tanggal Lahir</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $tanggallahiribu </font>
          </div>
             <div class='col-sm-4'>
              <font size='4'>Kewarganegaraan</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[kwnibu] </font>
          </div>
            
            
            
             <br><br>
                <div class='col-sm-4'>
                    <b>
                        <font size='4'>DATA ANAK</font>
                    </b>
                </div>
            
                <div class='col-sm-8'>
                </div>


                <div class='col-sm-4'>
                <font size='4'>Nik Anak</font>
               </div>
           
               <div class='col-sm-8'>
                   <font size='4'>: $row[nikanak]</font>
               </div>


               <div class='col-sm-4'>
               <font size='4'>Nama Anak</font>
              </div>
          
              <div class='col-sm-8'>
                  <font size='4'>: $row[namaanak]</font>
              </div>

              <div class='col-sm-4'>
              <font size='4'>Jenis Kelamin</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[jk] </font>
          </div>
             <div class='col-sm-4'>
              <font size='4'>Tempat Lahir</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[tptjnis_lahir] </font>
          </div>
             <div class='col-sm-4'>
              <font size='4'>Tempat</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[tmtpanak] </font>
          </div>
             <div class='col-sm-4'>
              <font size='4'>Tanggal Lahir</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $tanggallahiranak</font>
          </div>
               <div class='col-sm-4'>
              <font size='4'>Jam Lahir</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[jam_lahiranak] </font>
          </div>
               <div class='col-sm-4'>
              <font size='4'>Anak Ke-</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[anakke] </font>
          </div>
                 <div class='col-sm-4'>
              <font size='4'>Penolong Kelahiran</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[pnlong_lhr] </font>
          </div>
              <div class='col-sm-4'>
              <font size='4'>Berat Anak</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[beratanak] </font>
          </div>
             <div class='col-sm-4'>
              <font size='4'>Panjang Anak</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[pjganak] </font>
          </div>
            <div class='col-sm-4'>
              <font size='4'>Kondisi Lahir</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[kondisi_lahir] </font>
          </div>
            

                
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                      <div class='col-sm-4'>
                        <font size='4'>File Buku Nikah</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktelahir/$row[f_bukunikah]' target='blank'> $row[f_bukunikah]</a></font>
                    </div>
                
                  <div class='col-sm-4'>
                        <font size='4'>File KK</font>
                    </div>
                    
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktelahir/$row[f_kk]' target='blank'>$row[f_kk]</a> </font>
                    </div>




                    <div class='col-sm-4'>
                        <font size='4'>File KTP-el</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktelahir/$row[f_ktp]' target='blank'>$row[f_ktp]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>File Keterangan Lahir Dari Capil</font>
                    </div>
                
                    <div class='col-sm-8'>
                    <font size='4'>: <a href='../siponcan/files//aktelahir/$row[f_ketlahir]' target='blank'>$row[f_ketlahir]</a> </font>
                    </div>
                   
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitaktakelahiran' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[namapmhon] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//aktelahir/$row[f_bukunikah]' width='70%' height='400' /> <br><br>
                
                      File KTP Pemohon
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//aktelahir/$row[f_kk]' width='70%' height='400' /><br><br>
                
                       File KK
                
                        </div>
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//aktelahir/$row[f_ktp]' width='70%' height='400' /><br><br>
                File KTP-el Jenazah
                
                        </div>
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//aktelahir/$row[f_ketlahir]' width='70%' height='400' /><br><br>
                
                Surat Akta Kematian dari Capil
                
                        </div>
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>
        
        <!--end detail akte kelahiran-->
        
        
        <!--detail akte perkawinan-->
        <?php
            include "koneksi.php";
          


            $uuid_pengaduan = $_GET['uuid_pengaduan'];
            $kd_jenis = $_GET['kd_jenis'];
            $uuid_reg = $_GET['uuid_reg'];


            if ($kd_jenis == 'AKWIN') {
                $result = mysqli_query($koneksi, "SELECT * FROM `tb_aktekawin` WHERE uuid='$uuid_pengaduan'");
                while ($row = mysqli_fetch_array($result)) {
               



                    $tanggal = $row['create-at'];
                    $data = $tanggal;
                    $data = date('Y-m-d', strtotime($data));
                    $tanggal2 = tgl_indo($data);
                    $data1 = $row['tggllahir'];
                    $tanggallahir = tgl_indo($data1);
    $status = $row['status'];

                    $data2 = $row['tggl_mnggl'];
                    $tanggalmeninggal = tgl_indo($data2);


                    echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>AKTE PERKAWINAN</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-3'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-9'>
                    </div>
                
                
                    <div class='col-sm-3'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-9'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-3'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-9'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-3'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-9'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-3'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-9'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-3'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-9'>
                        <font size='4'>: $row[kwn] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-6'>
                        <b>
                            <font size='4'>SAKSI 1</font>
                        </b>
                    </div>
                
                    <div class='col-sm-6'>
                      <b>
                            <font size='4'>SAKSI 2</font>
                        </b>
                    </div>
                
                
                    <div class='col-sm-3'>
                        <font size='4'>NIK Saksi1</font>
                    </div>
                
                    <div class='col-sm-3'>
                        <font size='4'>: $row[nik_saksi1]  </font>
                    </div>
                
                    <div class='col-sm-3'>
                        <font size='4'>NIK Saksi2</font>
                    </div>
                
                    <div class='col-sm-3'>
                        <font size='4'>: $row[nik_saksi2] </font>
                    </div>
                
                  
                   
                    <div class='col-sm-3'>
                        <font size='4'>Nama Saksi1</font>
                    </div>
              
                    <div class='col-sm-3'>
                        <font size='4'>: $row[nama_saksi1] </font>
                    </div>
                    
                    <div class='col-sm-3'>
                        <font size='4'>Nama Saksi2</font>
                    </div>
              
                    <div class='col-sm-3'>
                        <font size='4'>: $row[nama_saksi2] </font>
                    </div>
                
                
                   <div class='col-sm-3'>
                        <font size='4'>Kewarganegaraan Saksi1</font>
                    </div>
              
                    <div class='col-sm-3'>
                        <font size='4'>: $row[kwn_saksi1] </font>
                    </div>
                    
                    <div class='col-sm-3'>
                        <font size='4'>Kewarganegaraan Saksi2</font>
                    </div>
              
                    <div class='col-sm-3'>
                        <font size='4'>: $row[kwn_saksi2] </font>
                    </div>
                
                  
                
              
                
                   
                    <br><br><br>
                <div class='col-sm-3'>
                    <b>
                        <font size='4'>DATA PERKAWINAN</font>
                    </b>
                </div>
            
                <div class='col-sm-9'>
                </div>


                <div class='col-sm-3'>
                <font size='4'>NIK Ayah dari Suami</font>
               </div>
           
               <div class='col-sm-3'>
                   <font size='4'>: $row[nik_ayah_s] </font>
               </div>
               
                  <div class='col-sm-3'>
                <font size='4'>NIK Ayah dari Istri</font>
               </div>
           
               <div class='col-sm-3'>
                   <font size='4'>: $row[nik_ayah_is] </font>
               </div>



               <div class='col-sm-3'>
               <font size='4'>Nama Ayah Dari Suami</font>
              </div>
          
              <div class='col-sm-3'>
                  <font size='4'>: $row[nama_ayah_s]</font>
              </div>
              
               <div class='col-sm-3'>
               <font size='4'>Nama Ayah Dari Istri</font>
              </div>
          
              <div class='col-sm-3'>
                  <font size='4'>: $row[nama_ayah_is]</font>
              </div>
              
              

              <div class='col-sm-3'>
              <font size='4'>NIK Ibu Dari Suami</font>
          </div>
          <div class='col-sm-3'>
              <font size='4'>: $row[nik_ibu_s] </font>
          </div>
           <div class='col-sm-3'>
              <font size='4'>NIK Ibu Dari Istri</font>
          </div>
          <div class='col-sm-3'>
              <font size='4'>: $row[nik_ibu_is] </font>
          </div>
          
          

                    <div class='col-sm-3'>
                    <font size='4'>Nama Ibu Dari Suami</font>
                </div>
                <div class='col-sm-3'>
                    <font size='4'>: $row[nama_ibu_s] </font>
                </div>
             
            
                    <div class='col-sm-3'>
                    <font size='4'>Nama Ibu Dari Istri</font>
                </div>
                <div class='col-sm-3'>
                    <font size='4'>: $row[nama_ibu_is] </font>
                </div>
                
                <br>
                <br>


                    <div class='col-sm-3'>
                    <font size='4'>Status Kawin</font>
                </div>
                <div class='col-sm-9'>
                    <font size='4'>: $row[status__kawin] </font>
                </div>


                <div class='col-sm-3'>
                    <font size='4'>Kawin Ke-</font>
                </div>
                <div class='col-sm-9'>
                    <font size='4'>: $row[kawin_ke] </font>
                </div>
                
                
                <div class='col-sm-3'>
                    <font size='4'>Istri Ke-</font>
                </div>
                <div class='col-sm-9'>
                    <font size='4'>: $row[kawin_ke] </font>
                </div>
                
                                
                <div class='col-sm-3'>
                    <font size='4'>Tanggal Kawin</font>
                </div>
                <div class='col-sm-9'>
                    <font size='4'>: $row[tannggal_kawin] </font>
                </div>
                
                    <div class='col-sm-3'>
                    <font size='4'>Tanggal Lapor</font>
                </div>
                <div class='col-sm-9'>
                    <font size='4'>: $row[tanggal_lapor] </font>
                </div>
                
                  <div class='col-sm-3'>
                    <font size='4'>Jam Lapor</font>
                </div>
                <div class='col-sm-9'>
                    <font size='4'>: $row[jam_pelapor] </font>
                </div>
                
                  <div class='col-sm-3'>
                    <font size='4'>Agama</font>
                </div>
                <div class='col-sm-9'>
                    <font size='4'>: $row[agama] </font>
                </div>
                
                   <div class='col-sm-3'>
                    <font size='4'>Nama Organisasi</font>
                </div>
                <div class='col-sm-9'>
                    <font size='4'>: $row[nama_organisasi_kep] </font>
                </div>
                
                 <div class='col-sm-3'>
                    <font size='4'>Nama Pemuka</font>
                </div>
                <div class='col-sm-9'>
                    <font size='4'>: $row[nama_pemuka_kep] </font>
                </div>
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                      <div class='col-sm-4'>
                        <font size='4'>Surat Kawin dari Pemuka Agama</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktekawin/$row[f_suratkawin]' target='blank'> $row[f_suratkawin]</a></font>
                    </div>
                
                  <div class='col-sm-4'>
                        <font size='4'>Pas Foto Gandeng Warna Uk.4x6</font>
                    </div>
                    
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktekawin/$row[f_foto]' target='blank'>$row[f_foto]</a> </font>
                    </div>


  <div class='col-sm-4'>
                        <font size='4'>KK <small>(Gunakan KK Suami Jika Belum 1 KK Dengan Istri)</small></font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktekawin/$row[f_kk]' target='blank'>$row[f_kk]</a> </font>
                    </div>
                

                    <div class='col-sm-4'>
                        <font size='4'>KK Istri<small>(Jika Istri Belum 1 KK dengan Suami)</small></font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktekawin/$row[f_kkIstri]' target='blank'>$row[f_kkIstri]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>KTP-el Suami</font>
                    </div>
                
                    <div class='col-sm-8'>
                    <font size='4'>: <a href='../siponcan/files//aktekawin/$row[f_ktpuami]' target='blank'>$row[f_ktpuami]</a> </font>
                    </div>
                    
                     <div class='col-sm-4'>
                        <font size='4'>KTP-el Istri</font>
                    </div>
                
                    <div class='col-sm-8'>
                    <font size='4'>: <a href='../siponcan/files//aktekawin/$row[f_ktpistri]' target='blank'>$row[f_ktpistri]</a> </font>
                    </div>
                        <div class='col-sm-4'>
                        <font size='4'>Akte Kutipan</font>
                    </div>
                
                    <div class='col-sm-8'>
                    <font size='4'>: <a href='../siponcan/files//aktekawin/$row[f_aktekutipan]' target='blank'>$row[f_aktekutipan]</a> </font>
                    </div>
                   
                    <div class='col-sm-4'>
                        <font size='4'>KTP-el Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                    <font size='4'>: <a href='../siponcan/files//aktekawin/$row[f_ktppemohon]' target='blank'>$row[f_ktppemohon]</a> </font>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitaktakawin' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//aktekawin/$row[f_suratkawin]' width='70%' height='400' /> <br><br>
                
                Surat Kawin dari Pemuka Agama
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//aktekawin/$row[f_foto]' width='70%' height='400' /><br><br>
                
              Pas Foto Gandeng Warna Uk.4x6
                
                        </div>
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//aktekawin/$row[f_kk]' width='70%' height='400' /><br><br>
              KK <small>(Gunakan KK Suami Jika Belum 1 KK Dengan Istri)</small>
                
                        </div>
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//aktekawin/$row[f_kkIstri]' width='70%' height='400' /><br><br>
                
            KK Istri<small>(Jika Istri Belum 1 KK dengan Suami)</small>
                
                        </div>
                        
                        
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//aktekawin/$row[f_ktpuami]' width='70%' height='400' /><br><br>
                
                            KTP-el Suami
                
                        </div>
                        
                        
                      
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//aktekawin/$row[f_ktpistri]' width='70%' height='400' /><br><br>
                
                                 KTP-el Istri
                
                        </div>
                
           
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//aktekawin/$row[f_aktekutipan]' width='70%' height='400' /><br><br>
                
                                Akte Kutipan
                
                        </div>
                            <div class='col-sm-6'>
                            <img src='../siponcan/files//aktekawin/$row[f_ktppemohon]' width='70%' height='400' /><br><br>
                
                               KTP-el Pemohon
                
                        </div>
                
                    </div>
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>
          <!--end detail akte perkawinan-->
          
          
          <!--detail akte cerai-->
          <?php
            include "koneksi.php";
          


            $uuid_pengaduan = $_GET['uuid_pengaduan'];
            $kd_jenis = $_GET['kd_jenis'];
            $uuid_reg = $_GET['uuid_reg'];


            if ($kd_jenis == 'AKCER') {
                $result = mysqli_query($koneksi, "SELECT * FROM `tb_aktecerai` WHERE uuid='$uuid_pengaduan'");
                while ($row = mysqli_fetch_array($result)) {
               



                    $tanggal = $row['create-at'];
                    $data = $tanggal;
                    $data = date('Y-m-d', strtotime($data));
                    $tanggal2 = tgl_indo($data);
                    $data1 = $row['tggl_putusan'];
                    $tanggalputusan = tgl_indo($data1);
                    
                    
                    
                    
                       $data2 = $row['tggl_surat'];
                    $tanggalsurat = tgl_indo($data2);
                    
                    
                              
                       $data3 = $row['tggl_lapor'];
                    $tanggallapor = tgl_indo($data3);
                    
                    
                       $data4 = $row['tgglakte'];
                    $tanggalakte = tgl_indo($data4);   
                    
    $status = $row['status'];

                    $data2 = $row['tggl_mnggl'];
                    $tanggalmeninggal = tgl_indo($data2);


                    echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>AKTE PERCERAIAN</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nikpmhon]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namapmhon]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokkpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umurpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwnpmhon] </font>
                    </div>
               
                    
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>Data Perceraian</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Akta Perkawinan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[noakta]  </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Akta Perkawinan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggalakte</font>
                    </div>
                
                  
                   
                    <div class='col-sm-4'>
                        <font size='4'>Tempat Pencatatan Perkawinan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[tmptcttpperkawinan] </font>
                    </div>
                    
                      <div class='col-sm-4'>
                        <font size='4'>Nama Pengadilan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pengadilan] </font>
                    </div>
                    
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Putusan Pengadilan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggalputusan </font>
                    </div>
                   
                   
                     <div class='col-sm-4'>
                        <font size='4'>No. Surat Ket. Panitera Pengadilan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nosuratpenitera] </font>
                    </div>
                    
                    
                     <div class='col-sm-4'>
                        <font size='4'>No. Putusan Pengadilan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[no_putusan] </font>
                    </div>
                    
                     <div class='col-sm-4'>
                        <font size='4'>Tanggal Surat</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggalsurat</font>
                    </div>
                    
                     <div class='col-sm-4'>
                        <font size='4'>Tanggal Melapor</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggallapor</font>
                    </div>
                
                  
                
              
                
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                      <div class='col-sm-4'>
                        <font size='4'>Salinan Putusan Pengadilan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktecerai/$row[f_sputusan]' target='blank'> $row[f_sputusan]</a></font>
                    </div>
                
                  <div class='col-sm-4'>
                        <font size='4'>Kutipan Akta Kawin Pemohon</font>
                    </div>
                    
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktecerai/$row[f_aktekawin]' target='blank'>$row[f_aktekawin]</a> </font>
                    </div>


                    <div class='col-sm-4'>
                        <font size='4'>Surat Pengantar Panitera</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktecerai/$row[f_pengatar]' target='blank'>$row[f_pengatar]</a> </font>
                    </div>
                
                
                  <div class='col-sm-4'>
                        <font size='4'>Kartu Keluarga</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktecerai/$row[f_kk]' target='blank'>$row[f_kk]</a> </font>
                    </div>
                    
                    
                      <div class='col-sm-4'>
                        <font size='4'>KTP-el Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//aktecerai/$row[f_ktp]' target='blank'>$row[f_ktp]</a> </font>
                    </div>
                   
                   
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitaktacerai' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[namapmhon] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//aktecerai/$row[f_aktekawin]' width='70%' height='400' /><br><br>
                            Kutipan Akta Kawin
                        </div>
                
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//aktecerai/$row[f_pengatar]' width='70%' height='400' /><br><br>
                            Surat Pengantar Panitera
                        </div>
                
                        
                        
                        
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//aktecerai/$row[f_kk]' width='70%' height='400' /><br><br>
                             Kartu Keluarga
                        </div>
                        
                        
                        
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//aktecerai/$row[f_ktp]' width='70%' height='400' /><br><br>
                            KTP-el  Pemohon
                        </div>
                        
                      
                
                    </div>
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>
          
          <!--end detail akte cerai-->
          
          
          <!--detail kia-->
          <?php
            include "koneksi.php";
          


            $uuid_pengaduan = $_GET['uuid_pengaduan'];
            $kd_jenis = $_GET['kd_jenis'];
            $uuid_reg = $_GET['uuid_reg'];


            if ($kd_jenis == 'KIA') {
                $result = mysqli_query($koneksi, "SELECT * FROM `kia` WHERE uuid='$uuid_pengaduan'");
                while ($row = mysqli_fetch_array($result)) {
               



                    $tanggal = $row['create-at'];
                    $data = $tanggal;
                    $data = date('Y-m-d', strtotime($data));
                    $tanggal2 = tgl_indo($data);
                    $data1 = $row['tggllahir'];
                    $tanggallahir = tgl_indo($data1);
    $status = $row['status'];

                    $data2 = $row['tggl_mnggl'];
                    $tanggalmeninggal = tgl_indo($data2);


                    echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>KARTU IDENTITAS ANAK</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn_pm] </font>
                    </div>
         
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>Data Anak</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pr]  </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Anak</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pr] </font>
                    </div>
                    
                         <div class='col-sm-4'>
                        <font size='4'>Tempat Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[temptlahir] </font>
                    </div>
                       <div class='col-sm-4'>
                        <font size='4'>Tanggal Terbit Akta Kelahiran</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[tggllahir] </font>
                    </div>
                   
                    <div class='col-sm-4'>
                        <font size='4'>Jenis Kelamin</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[jk] </font>
                    </div>
                    
                        <div class='col-sm-4'>
                        <font size='4'>Agama</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[agama] </font>
                    </div>
                
                
                
                        <div class='col-sm-4'>
                        <font size='4'>No Akta Kelahiran</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[noaktakel] </font>
                    </div>
                
                      <div class='col-sm-4'>
                        <font size='4'>Nama Ayah</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namaayah] </font>
                    </div>
                    
                        <div class='col-sm-4'>
                        <font size='4'>Nama Ibu</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namaibu] </font>
                    </div>
                  
                
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    
                     <div class='col-sm-4'>
                        <font size='4'>KTP Ayah</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//kia/$row[f_ktpayah]' target='blank'> $row[f_aktakel]</a></font>
                    </div>
                
                
                 <div class='col-sm-4'>
                        <font size='4'>KTP Ibu</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//kia/$row[f_ktpibu]' target='blank'> $row[f_aktakel]</a></font>
                    </div>
                
                
                
                      <div class='col-sm-4'>
                        <font size='4'>Akta Kelahiran</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//kia/$row[f_aktakel]' target='blank'> $row[f_aktakel]</a></font>
                    </div>
                
                  <div class='col-sm-4'>
                        <font size='4'>File KK</font>
                    </div>
                    
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//kia/$row[f_kkasli]' target='blank'>$row[f_kkasli]</a> </font>
                    </div>




                    <div class='col-sm-4'>
                        <font size='4'>Pas Foto Anak</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//kia/$row[f_fotoanak]' target='blank'>$row[f_fotoanak]</a> </font>
                    </div>
                
                 
                    
                     <div class='col-sm-4'>
                        <font size='4'>Perpanjang KIA(KIA yg sudah habis masa berlaku)</font>
                    </div>
                
                    <div class='col-sm-8'>
                    <font size='4'>: <a href='../siponcan/files//kia/$row[f_pjkia]' target='blank'>$row[f_pjkia]</a> </font>
                    </div>
                   
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitkia' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//kia/$row[f_ktpayah]' width='70%' height='400' /> <br><br>
                
                   KTP Ayah
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//kia/$row[f_ktpibu]' width='70%' height='400' /><br><br>
                
                            KTP Ibu
                
                        </div>
                   
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//kia/$row[f_kkasli]' width='70%' height='400' /><br><br>
                
              Foto KK Asli
                
                        </div>
                        
                    
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//kia/$row[f_fotoanak]' width='70%' height='400' /><br><br>
                
                   Pas Foto Anak
                
                        </div>
                        
                        
                            <div class='col-sm-6'>
                            <img src='../siponcan/files//kia/$row[f_aktakel]' width='70%' height='400' /><br><br>
              Akta Kelahiran
                
                        </div>
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//kia/$row[f_pjkia]' width='70%' height='400' /><br><br>
                
            Perpanjangan KIA
                
                        </div>
                
          
                    </div>
                
        
                </div>
                </div>
                </div>";
                }
            }
            ?>
          <!--end detail kia-->
          
          <?php
            include "koneksi.php";
          


            $uuid_pengaduan = $_GET['uuid_pengaduan'];
            $kd_jenis = $_GET['kd_jenis'];
            $uuid_reg = $_GET['uuid_reg'];


            if ($kd_jenis == 'SP') {
                $result = mysqli_query($koneksi, "SELECT * FROM `surat_pindah` WHERE uuid='$uuid_pengaduan'");
                while ($row = mysqli_fetch_array($result)) {
               



                    $tanggal = $row['create-at'];
                    $data = $tanggal;
                    $data = date('Y-m-d', strtotime($data));
                    $tanggal2 = tgl_indo($data);
                    $data1 = $row['tggllahir'];
                    $tanggallahir = tgl_indo($data1);
    $status = $row['status'];

                    $data2 = $row['tggl_mnggl'];
                    $tanggalmeninggal = tgl_indo($data2);


                    echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>SURAT PINDAH</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nikpmhon]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namapmhon]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokkpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umurpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn] </font>
                    </div>
                  
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>Alamat Asal</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Klasifikasi Pindah</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[klarifikasi_pindah]  </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Provinsi Asal</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[provinsiasl] </font>
                    </div>
                    
                    <div class='col-sm-4'>
                        <font size='4'>Kabupaten Asal</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kabupatenasl] </font>
                    </div>
                
                  <div class='col-sm-4'>
                        <font size='4'>Kecamatan Asal</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kecamatanasl] </font>
                    </div>
                    
                    <div class='col-sm-4'>
                        <font size='4'>Alamat Asal</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[alamatasl] </font>
                    </div>
                    
                      <div class='col-sm-4'>
                        <font size='4'>Kode POS Asal</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kdposasl] </font>
                    </div>
                    
                     
                    
                    
                   
                
                  
                
              
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>Alamat Tujuan</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    
                    <div class='col-sm-4'>
                        <font size='4'>Provinsi Tujuan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[provinsitj] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kabupaten Tujuan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kabupatentj] </font>
                    </div>
                
                 
                    <div class='col-sm-4'>
                        <font size='4'>Kecamatan Tujuan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kectj] </font>
                    </div>
                    
                    
                    <div class='col-sm-4'>
                        <font size='4'>Kelurahan Tujuan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kltj] </font>
                    </div>
                    
                    
                    
                    <div class='col-sm-4'>
                        <font size='4'>Alamat Tujuan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[alamattj] </font>
                    </div>
                    
                    
                      <div class='col-sm-4'>
                        <font size='4'>Kode POS Tujuan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kdpostj] </font>
                    </div>
                    
                    
                
                    <br><br>
                <div class='col-sm-4'>
                    <b>
                        <font size='4'>Kepindahan</font>
                    </b>
                </div>
            
                <div class='col-sm-8'>
                </div>


                <div class='col-sm-4'>
                <font size='4'>Alasan Pindah</font>
               </div>
           
               <div class='col-sm-8'>
                   <font size='4'>: $row[alasanpindah] </font>
               </div>


               <div class='col-sm-4'>
               <font size='4'>Jenis Pindah</font>
              </div>
          
              <div class='col-sm-8'>
                  <font size='4'>: $row[jenispindah]</font>
              </div>
              
              

              <div class='col-sm-4'>
              <font size='4'>Data Keluarga di KK yg Tidak Pindah</font>
          </div>
          <div class='col-sm-8'>
              <font size='4'>: $row[datakeluarga] </font>
          </div>

                    <div class='col-sm-4'>
                    <font size='4'>Data Keluarga di KK yg Pindah</font>
                </div>
                <div class='col-sm-8'>
                    <font size='4'>: $row[datapindah] </font>
                </div>

               
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                      <div class='col-sm-4'>
                        <font size='4'>File KTP Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//suratpindah/$row[f_ktp]' target='blank'> $row[f_ktp]</a></font>
                    </div>
                
                  <div class='col-sm-4'>
                        <font size='4'>File KK</font>
                    </div>
                    
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//suratpindah/$row[f_kk]' target='blank'>$row[f_kk]</a> </font>
                    </div>




                   
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitsp' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[namapmhon] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//suratpindah/$row[f_ktp]' width='70%' height='400' /> <br><br>
                
                      File KTP Pemohon
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//suratpindah/$row[f_kk]' width='70%' height='400' /><br><br>
                
                       File KK
                
                        
                
                    </div>
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>
            
            
            <!--kejadian penting surat pindah-->
            <?php
            include "koneksi.php";
    


            $uuid_pengaduan = $_GET['uuid_pengaduan'];
            $kd_jenis = $_GET['kd_jenis'];
            $uuid_reg = $_GET['uuid_reg'];


            if ($kd_jenis == 'KKPPPINDAH') {
                $result = mysqli_query($koneksi, "SELECT * FROM `kkpp_suratpindah` WHERE uuid='$uuid_pengaduan'");
                while ($row = mysqli_fetch_array($result)) {
               



                    $tanggal = $row['create-at'];
                    $data = $tanggal;
                    $data = date('Y-m-d', strtotime($data));
                    $tanggal2 = tgl_indo($data);
                    $data1 = $row['tggllahir'];
                    $tanggallahir = tgl_indo($data1);
    $status = $row['status'];

                    $data2 = $row['tggl_mnggl'];
                    $tanggalmeninggal = tgl_indo($data2);


                    echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>PEERISTIWA PENTING KARENA PINDAH</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nikpmhon]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namapmhon]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokkpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umurpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn] </font>
                    </div>
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA KEPINDAHAN</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Provinsi Tujuan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[provinsitj]  </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kabupaten Tujuan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kabupatentj] </font>
                    </div>
                    
                     <div class='col-sm-4'>
                        <font size='4'>Kecamatan Tujuan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kectj] </font>
                    </div>
                    
                      <div class='col-sm-4'>
                        <font size='4'>Kelurahan Tujuan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kltj] </font>
                    </div>
                
                
                     <div class='col-sm-4'>
                        <font size='4'>Alamat Tujuan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[alamattj] </font>
                    </div>
                    
                     <div class='col-sm-4'>
                        <font size='4'>Kode POS Tujuan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kdpostj] </font>
                    </div>
                    
                    
                     <div class='col-sm-4'>
                        <font size='4'>Alasan Pindah</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[alasanpindah] </font>
                    </div>
                
                  
                   
                    <div class='col-sm-4'>
                        <font size='4'>Jenis Pindah</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[jenispindah] </font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Data Keluarga</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[jenispindah] </font>
                    </div>
                  
                  
                  
                  
                    <div class='col-sm-4'>
                        <font size='4'>Data Pindah</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[datapindah] </font>
                    </div>
                
              
                
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                      <div class='col-sm-4'>
                        <font size='4'>File KTP Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//kkpppindah/$row[f_ktp]' target='blank'> $row[f_ktp]</a></font>
                    </div>
                
                  <div class='col-sm-4'>
                        <font size='4'>File KK</font>
                    </div>
                    
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//kkpppindah/$row[f_kk]' target='blank'>$row[f_kk]</a> </font>
                    </div>

                  
                    
                    
                     <div class='col-sm-4'>
                        <font size='4'>Buku/Nikah</font>
                    </div>
                
                    <div class='col-sm-8'>
                    <font size='4'>: <a href='../siponcan/files//kkpppindah/$row[f_bukunikah]' target='blank'>$row[f_bukunikah]</a> </font>
                    </div>
                   
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitkkpppindah' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[namapmhon] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//kkpppindah/$row[f_ktp]' width='70%' height='400' /> <br><br>
                
                      File KTP Pemohon
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//kkpppindah/$row[f_kk]' width='70%' height='400' /><br><br>
                
                       File KK
                
                        </div>
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//kkpppindah/$row[f_bukunikah]' width='70%' height='400' /><br><br>
                File KTP-el Jenazah
                
                        </div>
                       
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>
            <!--end detail kejadian penting surat pindah-->
            
            
            <!--detail kejadian penting kelahiran anak-->
            <?php
            include "koneksi.php";
        


            $uuid_pengaduan = $_GET['uuid_pengaduan'];
            $kd_jenis = $_GET['kd_jenis'];
            $uuid_reg = $_GET['uuid_reg'];


            if ($kd_jenis == 'PDAPKK') {
                $result = mysqli_query($koneksi, "SELECT * FROM `kk_penambahan_anak` WHERE uuid='$uuid_pengaduan'");
                while ($row = mysqli_fetch_array($result)) {
               



                    $tanggal = $row['create-at'];
                    $data = $tanggal;
                    $data = date('Y-m-d', strtotime($data));
                    $tanggal2 = tgl_indo($data);
                    $data1 = $row['tggllahir'];
                    $tanggallahir = tgl_indo($data1);
    $status = $row['status'];

                    $data2 = $row['tggl_mnggl'];
                    $tanggalmeninggal = tgl_indo($data2);


                    echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>PERISTIWA PENTING PENAMBAHAN KK KELAHIRAN</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn_pm] </font>
                    </div>
                
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>Data Anak</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama]  </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Jenis Kelamin</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[jk] </font>
                    </div>
                
                  
                   
                    <div class='col-sm-4'>
                        <font size='4'>Tempat Lahir</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[tmp_lhr] </font>
                    </div>
                    
                    
                     <div class='col-sm-4'>
                        <font size='4'>Tanggal Lahir</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[thl_lhr] </font>
                    </div>
                
                 <div class='col-sm-4'>
                        <font size='4'>Jam Lahir</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[jam_lhr] </font>
                    </div>
                    
                    
                     <div class='col-sm-4'>
                        <font size='4'>Gol Darah</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[gol_darah] </font>
                    </div>
                  
                  
                  <div class='col-sm-4'>
                        <font size='4'>Agama</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[agama] </font>
                    </div>
                
                <div class='col-sm-4'>
                        <font size='4'>SHDK</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[shdk] </font>
                    </div>
                    
                    
                       <div class='col-sm-4'>
                        <font size='4'>Kelainan Fisik</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[cacat] </font>
                    </div>
                    
                        <div class='col-sm-4'>
                        <font size='4'>Nama Ayah</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nm_ayah] </font>
                    </div>
                    
                    
                        <div class='col-sm-4'>
                        <font size='4'>Nama Ibu</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nm_ibu] </font>
                    </div>
                
                    
                
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                      <div class='col-sm-4'>
                        <font size='4'>Surat Ket. Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//kkpenambahananak/$row[f_ket_lahir]' target='blank'> $row[f_ket_lahir]</a></font>
                    </div>
                
                  <div class='col-sm-4'>
                        <font size='4'>Surat Nikah/Akta Kawin</font>
                    </div>
                    
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//kkpenambahananak/$row[f_surat_nikah]' target='blank'>$row[f_surat_nikah]</a> </font>
                    </div>




                    <div class='col-sm-4'>
                        <font size='4'>Kartu Keluarga</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//kkpenambahananak/$row[f_kk]' target='blank'>$row[f_kk]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>KTP-el Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                    <font size='4'>: <a href='../siponcan/files//kkpenambahananak/$row[f_ktp]' target='blank'>$row[f_ktp]</a> </font>
                    </div>
                   
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitpdapkk' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//kkpenambahananak/$row[f_ket_lahir]' width='70%' height='400' /> <br><br>
                
                      Surat Ket. Lahir
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files//kkpenambahananak/$row[f_surat_nikah]' width='70%' height='400' /><br><br>
                
              Surat Nikah /Akta Kawin
                
                        </div>
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//kkpenambahananak/$row[f_kk]' width='70%' height='400' /><br><br>
                
                Karu Keluarga
                
                        </div>
                         <div class='col-sm-6'>
                            <img src='../siponcan/files//kkpenambahananak/$row[f_ktp]' width='70%' height='400' /><br><br>
                
         File KTP-el
                
                        </div>
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>
            
            
            
            
            
            
               
            <!--detail kejadian penting Kematian-->
            <?php
            include "koneksi.php";
        


            $uuid_pengaduan = $_GET['uuid_pengaduan'];
            $kd_jenis = $_GET['kd_jenis'];
            $uuid_reg = $_GET['uuid_reg'];


            if ($kd_jenis == 'KKPPKEMATIAN') {
                $result = mysqli_query($koneksi, "SELECT * FROM `kkpp_kematian` WHERE uuid='$uuid_pengaduan'");
                while ($row = mysqli_fetch_array($result)) {
               



                    $tanggal = $row['create-at'];
                    $data = $tanggal;
                    $data = date('Y-m-d', strtotime($data));
                    $tanggal2 = tgl_indo($data);
                    $data1 = $row['tggllahir'];
                    $tanggallahir = tgl_indo($data1);
    $status = $row['status'];

                    $data2 = $row['tggl_mnggl'];
                    $tanggalmeninggal = tgl_indo($data2);


                    echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>PERISTIWA PENTING PENGURANGAN KK KERENA KEMATIAN</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nikpmhon]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namapmhon]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokkpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umurpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn] </font>
                    </div>
                
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>Data Jenazah</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Meninggal</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggalmeninggal  </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Jam Meninggal</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[jam_mnggl] </font>
                    </div>
                
                  
                   
                    <div class='col-sm-4'>
                        <font size='4'>NIK Jenazah</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nikjns] </font>
                    </div>
                    
                    
                         
                    <div class='col-sm-4'>
                        <font size='4'>Nama Jenazah</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namajns] </font>
                    </div>
                    
                     <div class='col-sm-4'>
                        <font size='4'>Nama Ibu Jenazah</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namaibujns] </font>
                    </div>
                
                 <div class='col-sm-4'>
                        <font size='4'>Penyebab Kematian</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[sebab_mngl] </font>
                    </div>
                    
                    
                    
                        <div class='col-sm-4'>
                        <font size='4'>Yang Menerangkan</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[tngg_mnggl] </font>
                    </div>
                    
                     <div class='col-sm-4'>
                        <font size='4'>Tempat Meninggal</font>
                    </div>
              
                    <div class='col-sm-8'>
                        <font size='4'>: $row[tpmeninggal] </font>
                    </div>
                  
                 
                    
                
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                      <div class='col-sm-4'>
                        <font size='4'>KTP-el Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//kkppkematian/$row[f_ktp]' target='blank'> $row[f_ktp]</a></font>
                    </div>
                
                  <div class='col-sm-4'>
                        <font size='4'>Kartu Keluarga</font>
                    </div>
                    
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//kkppkematian/$row[f_kk]' target='blank'>$row[f_kk]</a> </font>
                    </div>




                    <div class='col-sm-4'>
                        <font size='4'>KTP-el Jenazah</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files//kkppkematian/$row[f_ktpjnazah]' target='blank'>$row[f_ktpjnazah]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Surat Keterangan Kematian dari Kelurahan</font>
                    </div>
                
                    <div class='col-sm-8'>
                    <font size='4'>: <a href='../siponcan/files//kkppkematian/$row[f_ktppemohon]' target='blank'>$row[f_ktppemohon]</a> </font>
                    </div>
                   
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitkkppkematian' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[namapmhon] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/kkppkematian/$row[f_ktp]' width='70%' height='400' /> <br><br>
                
                     KTP-el Pemohon
                     <br>  <br>
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/kkppkematian/$row[f_kk]' width='70%' height='400' /><br><br>
                
            Kartu Keluarga
                  <br>  <br>
                        </div>
                         <div class='col-sm-6'>
                            <img src='../siponcan/files/kkppkematian/$row[f_ktpjnazah]' width='70%' height='400' /><br><br>
                
               KTP-el Jenazah
                
                        </div>
                         <div class='col-sm-6'>
                            <img src='../siponcan/files/kkppkematian/$row[f_ktppemohon]' width='70%' height='400' /><br><br>
                
       Surat Keterangan Kematian dari Kelurahan
                
                        </div>
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>
            
            <!--detail kejadian penting kelahiran anak-->
            
            
          <!--detail akta pengangkatan anak-->
            <?php
        include "koneksi.php";
  

        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];

       

        if ($kd_jenis == 'AKPENGANAK') {
            $result = mysqli_query($koneksi, "SELECT * FROM `pengangkatanank` WHERE uuid='$uuid_pengaduan'");
            while ($row = mysqli_fetch_array($result)) {
                $nik_pm = $row['nik_pm'];
                $nama_pm = $row['nama_pm'];
                $nokk_pm = $row['nokk_pm'];
                $umur_pm = $row['umur_pm'];
                $f_ktp = $row['f_ktp'];
                $f_kk = $row['f_kk'];



                $status = $row['status'];
                $kwn = $row['kwn'];

                $tanggal = $row['create-at'];
                $data = $tanggal;
                $data = date('Y-m-d', strtotime($data));
                $tanggal2 = tgl_indo($data);
                $data1 = $row['tggllahir'];
                $tanggallahir = tgl_indo($data1);


                $data2 = $row['tgghilang'];
                $tanggalhilang = tgl_indo($data2);


                echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>AKTA PENGANGKATAN ANAK</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn_pm] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA ANAK</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pr] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pr] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tempat Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[temptlahir] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:
                
                
                
                            $tanggallahir </font>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>Jenis Kelamin</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[jk] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Agama</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[agama] </font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Anak Ke-</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[anakke] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No Akta Kelahiran</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:  $row[noaktakel] </font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Terbit Akta Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[tggl_terbit] </font>
                    </div>
                    
                       <div class='col-sm-4'>
                        <font size='4'>Dinas Kab/Kota Penerbit Akta Kelahiran</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[penerbit] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>KTP Ayah</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/pengangkatanank/$row[f_ktpayah]' target='blank'> $row[f_ktpayah]</a></font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>KTP Ibu</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/pengangkatanank/$row[f_ktpibu]' target='blank'>$row[f_ktpibu]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitakpenganak' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/pengangkatanank/$row[f_ktpayah]' width='70%' height='400' /> <br><br>
                
                          KTP Ayah
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/pengangkatanank/$row[f_ktpibu]' width='70%' height='400' /><br><br>
                
                    KTP Ibu
                
                        </div>
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
          <!--end detail akta pengangkatan anak-->
          
          
          <!--detail akta pengakuan anak-->
            <?php
        include "koneksi.php";
  

        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];

        // DETAIL KTP 

        if ($kd_jenis == 'AKPENGAKUANANAK') {
            $result = mysqli_query($koneksi, "SELECT * FROM `pengakuananak` WHERE uuid='$uuid_pengaduan'");
            while ($row = mysqli_fetch_array($result)) {
                $nik_pm = $row['nik_pm'];
                $nama_pm = $row['nama_pm'];
                $nokk_pm = $row['nokk_pm'];
                $umur_pm = $row['umur_pm'];
                $f_ktp = $row['f_ktp'];
                $f_kk = $row['f_kk'];



                $status = $row['status'];
                $kwn = $row['kwn'];

                $tanggal = $row['create-at'];
                $data = $tanggal;
                $data = date('Y-m-d', strtotime($data));
                $tanggal2 = tgl_indo($data);
                $data1 = $row['tggllahir'];
                $tanggallahir = tgl_indo($data1);


                $data2 = $row['tgghilang'];
                $tanggalhilang = tgl_indo($data2);


                echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>AKTA PENGAKUAN ANAK </font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn_pm] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA ANAK</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pr] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pr] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tempat Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[temptlahir] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:
                
                
                
                            $tanggallahir </font>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>Jenis Kelamin</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[jk] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Anak Ke-</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[anakke] </font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Akta Kelahiran</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[noaktakel] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Terbit Akta Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[tggl_terbit]  </font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Dinas Kab/Kota Penerbit Akta Kelahiran</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[penerbit] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>File KK Asli</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/pengakuananak/$row[f_ktpayah]' target='blank'> $row[f_ktpayah]</a></font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> File Surat Keterangan Kepolisian</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/pengakuananak/$row[f_ktpibu]' target='blank'>$row[f_ktpibu]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitakpengakuananak' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/pengakuananak/$row[f_ktpayah]' width='70%' height='400' /> <br><br>
                
                            File KK Asli
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/pengakuananak/$row[f_ktpibu]' width='70%' height='400' /><br><br>
                
                            File Surat Keterangan Kepolisian
                
                        </div>
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
          <!--end detail akta pengakuan anak-->
          
          
          <!--detail pengesahan anak-->
          <?php
        include "koneksi.php";
  

        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];

       

        if ($kd_jenis == 'AKPENGESAHANANAK') {
            $result = mysqli_query($koneksi, "SELECT * FROM `pengesahanananak` WHERE uuid='$uuid_pengaduan'");
            while ($row = mysqli_fetch_array($result)) {
                $nik_pm = $row['nik_pm'];
                $nama_pm = $row['nama_pm'];
                $nokk_pm = $row['nokk_pm'];
                $umur_pm = $row['umur_pm'];
                $f_ktp = $row['f_ktp'];
                $f_kk = $row['f_kk'];



                $status = $row['status'];
                $kwn = $row['kwn'];

                $tanggal = $row['create-at'];
                $data = $tanggal;
                $data = date('Y-m-d', strtotime($data));
                $tanggal2 = tgl_indo($data);
                $data1 = $row['tggllahir'];
                $tanggallahir = tgl_indo($data1);


                $data2 = $row['tgghilang'];
                $tanggalhilang = tgl_indo($data2);


                echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>AKTA PENGESAHAN ANAK</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn_pm] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA ANAK</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pr] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pr] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tempat Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[temptlahir] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:
                
                
                
                            $tanggallahir </font>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>Jenis Kelamin</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[jk] </font>
                    </div>
                
                 
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Anak Ke-</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[anakke] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No Akta Kelahiran</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:  $row[noaktakel] </font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Terbit Akta Lahir</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[tggl_terbit] </font>
                    </div>
                    
                       <div class='col-sm-4'>
                        <font size='4'>Dinas Kab/Kota Penerbit Akta Kelahiran</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[penerbit] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>KTP Ayah</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/pengesahananak/$row[f_ktpayah]' target='blank'> $row[f_ktpayah]</a></font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>KTP Ibu</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/pengesahananak/$row[f_ktpibu]' target='blank'>$row[f_ktpibu]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitakpengesahanank' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/pengesahananak/$row[f_ktpayah]' width='70%' height='400' /> <br><br>
                
                            File KK Asli
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/pengesahananak/$row[f_ktpibu]' width='70%' height='400' /><br><br>
                
                            File Surat Keterangan Kepolisian
                
                        </div>
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
          <!--end detail pengesahan anak-->
          
          
          <!--detail kk baru-->
          <?php
        include "koneksi.php";
  

        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];

       

        if ($kd_jenis == 'BKKB') {
            $result = mysqli_query($koneksi, "SELECT * FROM `kk_baru` WHERE uuid='$uuid_pengaduan'");
            while ($row = mysqli_fetch_array($result)) {
                $nik_pm = $row['nik_pm'];
                $nama_pm = $row['nama_pm'];
                $nokk_pm = $row['nokk_pm'];
                $umur_pm = $row['umur_pm'];
                $f_ktp = $row['f_ktp'];
                $f_kk = $row['f_kk'];



                $status = $row['status'];
                $kwn = $row['kwn'];

                $tanggal = $row['create-at'];
                $data = $tanggal;
                $data = date('Y-m-d', strtotime($data));
                $tanggal2 = tgl_indo($data);
                $data1 = $row['tggllahir'];
                $tanggallahir = tgl_indo($data1);


                $data2 = $row['tgghilang'];
                $tanggalhilang = tgl_indo($data2);


                echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>MEMBENTUK KARTU KELUARGA BARU</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                        <div class='col-sm-4'>
                        <font size='4'>Jenis Kepengurusan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kkbarupmhon]</font>
                    </div>
                
                
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nikpmhon]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namapmhon]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokkpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umurpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwnpmhon] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>ALAMAT BARU</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Kecamatan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kecpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Desa/Kelurahan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kelpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Alamat</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[alamatpmhon] </font>
                    </div>
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>Buku Nikah/Akta Kawin</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkbaru/$row[f_bukunikah]' target='blank'> $row[f_bukunikah]</a></font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>KK Suami</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkbaru/$row[f_kksuami]' target='blank'>$row[f_kksuami]</a> </font>
                    </div>
                    
                    
                    <div class='col-sm-4'>
                        <font size='4'>Buku Nikah/Akta Kawin Orang Tua</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkbaru/$row[f_bukunikahsm]' target='blank'>$row[f_bukunikahsm]</a> </font>
                    </div>
                    
                    
                       <div class='col-sm-4'>
                        <font size='4'>KK Istri</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkbaru/$row[f_kkistri]' target='blank'>$row[f_kkistri]</a> </font>
                    </div>
                    
                       <div class='col-sm-4'>
                        <font size='4'>Buku Nikah Istri</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkbaru/$row[f_bukunikahis]' target='blank'>$row[f_bukunikahis]</a> </font>
                    </div>
                
                
                
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitbkkb' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[namapmhon] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/kkbaru/$row[f_bukunikah]' width='70%' height='400' /> <br><br>
                
                            File Buku Nikah / Akta Kawin
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/kkbaru/$row[f_kksuami]' width='70%' height='400' /><br><br>
                
                            KK Suami
                
                        </div>
           
                        
                           <div class='col-sm-6'>
                            <img src='../siponcan/files/kkbaru/$row[f_bukunikahsm]' width='70%' height='400' /><br><br>
                
                       Buku Nikah / Akte Kawin Orang Tua
                
                        </div>
                        
                               
                           <div class='col-sm-6'>
                            <img src='../siponcan/files/kkbaru/$row[f_kkistri]' width='70%' height='400' /><br><br>
                
                          KK Istri
                
                        </div>
                        
                        
                          <div class='col-sm-6'>
                            <img src='../siponcan/files/kkbaru/$row[f_bukunikahis]' width='70%' height='400' /><br><br>
                
                           Buku Nikah / Akte Kawin Orang Tua
                
                        </div>
                        
                        
                          <div class='col-sm-6'>
                            <img src='../siponcan/files/kkbaru/$row[f_ktp]' width='70%' height='400' /><br><br>
                
                        KTP-el pemohon
                        </div>
                        
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
          <!--end detail kk baru-->
          
          
          <!--detail kk ganti kk-->
          <?php
        include "koneksi.php";
  

        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];

       

        if ($kd_jenis == 'KKPKK') {
            $result = mysqli_query($koneksi, "SELECT * FROM `kkgantikk` WHERE uuid='$uuid_pengaduan'");
            while ($row = mysqli_fetch_array($result)) {
                $nik_pm = $row['nik_pm'];
                $nama_pm = $row['nama_pm'];
                $nokk_pm = $row['nokk_pm'];
                $umur_pm = $row['umur_pm'];
                $f_ktp = $row['f_ktp'];
                $f_kk = $row['f_kk'];



                $status = $row['status'];
                $kwn = $row['kwn'];

                $tanggal = $row['create-at'];
                $data = $tanggal;
                $data = date('Y-m-d', strtotime($data));
                $tanggal2 = tgl_indo($data);
                $data1 = $row['tggllahir'];
                $tanggallahir = tgl_indo($data1);


                $data2 = $row['tgghilang'];
                $tanggalhilang = tgl_indo($data2);


                 echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>KK-PENGGANTIAN KEPALA KELUARGA</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                        <div class='col-sm-4'>
                        <font size='4'>Jenis Kepengurusan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kkbarupmhon]</font>
                    </div>
                
                
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nikpmhon]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namapmhon]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokkpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umurpmhon] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwnpmhon] </font>
                    </div>
                
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Kepala Keluarga Baru</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namalengkap] </font>
                    </div>
                
                
                
                 
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>Kutipan Akta Kematian</font><small>(Jika Kepala Keluarga Meninggal Dunia)</small>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/gantikk/$row[f_aktakematian]' target='blank'> $row[f_aktakematian]</a></font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kutipan Akta Perceraian</font><small>(Jika Bercerai)</small>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/gantikk/$row[f_aktaperceraian]' target='blank'>$row[f_aktaperceraian]</a> </font>
                    </div>
                    
                    
                    <div class='col-sm-4'>
                        <font size='4'>Kartu Keluarga</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/gantikk/$row[f_kk]' target='blank'>$row[f_kk]</a> </font>
                    </div>
                    
                    
                        
                    
                    <div class='col-sm-4'>
                        <font size='4'>KTP-el Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/gantikk/$row[f_ktp]' target='blank'>$row[f_ktp]</a> </font>
                    </div>
                
                
                
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitbkkb' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[namapmhon] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/gantikk/$row[f_aktakematian]' width='70%' height='400' /> <br><br>
                
                     Kutipan Akta Kematian(Jika Kepala Keluarga Meninggal Dunia)
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/gantikk/$row[f_aktaperceraian]' width='70%' height='400' /><br><br>
                
                           Kutipan Akta Perceraian(Jika Bercerai)
                
                        </div>
           
                        
                           <div class='col-sm-6'>
                            <img src='../siponcan/files/gantikk/$row[f_kk]' width='70%' height='400' /><br><br>
                
                     Kartu Keluarga
                        </div>
                        
           
                        
                          <div class='col-sm-6'>
                            <img src='../siponcan/files/gantikk/$row[f_ktp]' width='70%' height='400' /><br><br>
                KTP-el Pemohon
                
                        </div>
                        
                        
                  
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
          <!--end detail kk ganti kk-->
          
          
          <!--detail pisah kk-->
            <?php
        include "koneksi.php";
  

        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];

       

        if ($kd_jenis == 'KKPSH') {
            $result = mysqli_query($koneksi, "SELECT * FROM `kk_pisah` WHERE uuid='$uuid_pengaduan'");
            while ($row = mysqli_fetch_array($result)) {
                $nik_pm = $row['nik_pm'];
                $nama_pm = $row['nama_pm'];
                $nokk_pm = $row['nokk_pm'];
                $umur_pm = $row['umur_pm'];
                $f_ktp = $row['f_ktp'];
                $f_kk = $row['f_kk'];



                $status = $row['status'];
                $kwn = $row['kwn'];

                $tanggal = $row['create-at'];
                $data = $tanggal;
                $data = date('Y-m-d', strtotime($data));
                $tanggal2 = tgl_indo($data);
                $data1 = $row['tggllahir'];
                $tanggallahir = tgl_indo($data1);


                $data2 = $row['tgghilang'];
                $tanggalhilang = tgl_indo($data2);


                 echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>KK-PISAH KK</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn_pm] </font>
                    </div>
                
                
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>KTP-el Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkpisah/$row[f_ktp]' target='blank'> $row[f_ktp]</a></font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>KK Lama</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkpisah/$row[f_kklama]' target='blank'>$row[f_kklama]</a> </font>
                    </div>
                    
                    
                    <div class='col-sm-4'>
                        <font size='4'>Surat Keterangan Cerai(Jika Pisah KK Karena Perceraian)</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkpisah/$row[f_ket_cerai]' target='blank'>$row[f_ket_cerai]</a> </font>
                    </div>
                    
                    
                        
                    
                    <div class='col-sm-4'>
                        <font size='4'>Surat Keterangan Pindah(Jika Pisah KK Karena Perpindahan)</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkpisah/$row[f_ket_pindah]' target='blank'>$row[f_ket_pindah]</a> </font>
                    </div>
                
                
                
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitbkkb' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/kkpisah/$row[f_ktp]' width='70%' height='400' /> <br><br>
                
                   KTP-el Pemohon
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/kkpisah/$row[f_kklama]' width='70%' height='400' /><br><br>
                
                          KK Lama
                
                        </div>
           
                        
                           <div class='col-sm-6'>
                            <img src='../siponcan/files/kkpisah/$row[f_ket_cerai]' width='70%' height='400' /><br><br>
                
                    Surat Ket. Cerai (Jika Pisah Karena Cerai)
                        </div>
                        
           
                        
                          <div class='col-sm-6'>
                            <img src='../siponcan/files/kkpisah/$row[f_ket_pindah]' width='70%' height='400' /><br><br>
             Surat Ket. Domisili (Jika Pisah Karena Perpindahan)
                
                        </div>
                        
                        
                  
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
        
          <!--end detail pisah kk-->
        
        
        
          <!--detail numpang kk  -->
          
              <?php
        include "koneksi.php";
  

        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];

       

        if ($kd_jenis == 'KKNPGKK') {
            $result = mysqli_query($koneksi, "SELECT * FROM `kk_numpangdalamkk` WHERE uuid='$uuid_pengaduan'");
            while ($row = mysqli_fetch_array($result)) {
                $nik_pm = $row['nik_pm'];
                $nama_pm = $row['nama_pm'];
                $nokk_pm = $row['nokk_pm'];
                $umur_pm = $row['umur_pm'];
                $f_ktp = $row['f_ktp'];
                $f_kk = $row['f_kk'];



                $status = $row['status'];
                $kwn = $row['kwn'];

                $tanggal = $row['create-at'];
                $data = $tanggal;
                $data = date('Y-m-d', strtotime($data));
                $tanggal2 = tgl_indo($data);
                $data1 = $row['tggllahir'];
                $tanggallahir = tgl_indo($data1);


                $data2 = $row['tgghilang'];
                $tanggalhilang = tgl_indo($data2);


                 echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>
                
                        <b>
                            <font size='4'>KK-NUMPANG DALAM KK</font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn_pm] </font>
                    </div>
                
                
                
                 
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    
                    
                    <div class='col-sm-4'>
                        <font size='4'>KTP-el Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/numpangdalamkk/$row[f_ktp]' target='blank'> $row[f_ktp]</a></font>
                    </div>
                
               
                      <div class='col-sm-4'>
                        <font size='4'>KK Lama</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/numpangdalamkk/$row[f_kkrusak]' target='blank'> $row[f_kkrusak]</a></font>
                    </div>
                    
                    
                    
                    <div class='col-sm-4'>
                        <font size='4'>Surat Keterangan Pindah Datang Untuk Numpang KK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/numpangdalamkk/$row[f_surat_ket]' target='blank'>$row[f_surat_ket]</a> </font>
                    </div>
                    
                    
                
                
                
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitbkkb' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/numpangdalamkk/$row[f_ktp]' width='70%' height='400' /> <br><br>
                
                     KTP-el Pemohon
                    </div>
                    
                    
                    <div class='col-sm-6'>
                           <img src='../siponcan/files/numpangdalamkk/$row[f_kkrusak]' width='70%' height='400' /><br><br>
                         KK Lama
                
                    </div>
           
                        
                           <div class='col-sm-6'>
                            <img src='../siponcan/files/numpangdalamkk/$row[f_surat_ket]' width='70%' height='400' /><br><br>
                
                    Surat Ket. Pindah Datang Untuk Numpang KK
                        </div>
                        
           
                        
                  
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
          <!--end detail numpang kk-->
          
          
          <!--detail kk rusak-->
           <?php
        include "koneksi.php";
  

        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];

        // DETAIL KTP 

        if ($kd_jenis == 'KKRSK') {
            $result = mysqli_query($koneksi, "SELECT * FROM `kk_rusak` WHERE uuid='$uuid_pengaduan'");
            while ($row = mysqli_fetch_array($result)) {
                $nik_pm = $row['nik_pm'];
                $nama_pm = $row['nama_pm'];
                $nokk_pm = $row['nokk_pm'];
                $umur_pm = $row['umur_pm'];
                $f_ktp = $row['f_ktp'];
                $f_kk = $row['f_kk'];



                $status = $row['status'];
                $kwn = $row['kwn'];

                $tanggal = $row['create-at'];
                $data = $tanggal;
                $data = date('Y-m-d', strtotime($data));
                $tanggal2 = tgl_indo($data);
                $data1 = $row['tggllahir'];
                $tanggallahir = tgl_indo($data1);


                $data2 = $row['tgghilang'];
                $tanggalhilang = tgl_indo($data2);


                echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>                
                        <b>
                            <font size='4'>KARTU KELUARGA RUSAK </font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn_pm] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PADA KK</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>No KK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk2] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Kepala Keluarga</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namakepkel] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Alamat</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[alamat] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Rusak Karena</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[rusakkarena]</font>
                    </div>
                  
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>KTP-el Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkrusak/$row[f_ktp]' target='blank'> $row[f_ktp]</a></font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>KK Yang Rusak</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkrusak/$row[f_kkrusak]' target='blank'>$row[f_kkrusak]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitkkrusak' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/kkrusak/$row[f_ktp]' width='70%' height='400' /> <br><br>
                
                            KTP-el Pemohon
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/kkrusak/$row[f_kkrusak]' width='70%' height='400' /><br><br>
                
                            KK Lama
                
                        </div>
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
          <!--detail kk rusak-->
          
          
          
          
          
          
          
          
                    <!--detail kk rusak-->
           <?php
        include "koneksi.php";
  

        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];

        // DETAIL KTP 

        if ($kd_jenis == 'KKHR') {
            $result = mysqli_query($koneksi, "SELECT * FROM `kk_hilang` WHERE uuid='$uuid_pengaduan'");
            while ($row = mysqli_fetch_array($result)) {
                $nik_pm = $row['nik_pm'];
                $nama_pm = $row['nama_pm'];
                $nokk_pm = $row['nokk_pm'];
                $umur_pm = $row['umur_pm'];
                $f_ktp = $row['f_ktp'];
                $f_kk = $row['f_kk'];



                $status = $row['status'];
                $kwn = $row['kwn'];

                $tanggal = $row['create-at'];
                $data = $tanggal;
                $data = date('Y-m-d', strtotime($data));
                $tanggal2 = tgl_indo($data);
                $data1 = $row['tggllahir'];
                $tanggallahir = tgl_indo($data1);


                $data2 = $row['tgghilang'];
                $tanggalhilang = tgl_indo($data2);


                echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>                
                        <b>
                            <font size='4'>KARTU KELUARGA HILANG </font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn_pm] </font>
                    </div>
                
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PADA KK</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>No KK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk2] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Kepala Keluarga</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[namakepkel] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>NO. Surat Hilang</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[noketpolisi] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Tanggal Hilang</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[tggl_hilang]</font>
                    </div>
                    
                    
                        <div class='col-sm-4'>
                        <font size='4'>Lokasi Hilang</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[lokasihilang]</font>
                    </div>
                  
                    <br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>KTP-el Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkhilang/$row[f_ktp]' target='blank'> $row[f_ktp]</a></font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Surat Ket Hilang Dari Polisi</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkhilang/$row[f_surat_ket]' target='blank'>$row[f_surat_ket]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$status</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitkkhilang' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
                
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/kkhilang/$row[f_ktp]' width='70%' height='400' /> <br><br>
                
                            KTP-el Pemohon
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/kkhilang/$row[f_surat_ket]' width='70%' height='400' /><br><br>
                
                            KK Lama
                
                        </div>
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
        
        
        
        
        
        
                     <!--detail kk rusak-->
           <?php
        include "koneksi.php";
  

        $uuid_pengaduan = $_GET['uuid_pengaduan'];
        $kd_jenis = $_GET['kd_jenis'];
        $uuid_reg = $_GET['uuid_reg'];

        // DETAIL KTP 

        if ($kd_jenis == 'PDPDKK') {
            $result = mysqli_query($koneksi, "SELECT * FROM `kk_perubahan_data` WHERE uuid='$uuid_pengaduan'");
            while ($row = mysqli_fetch_array($result)) {
                $nik_pm = $row['nik_pm'];
                $nama_pm = $row['nama_pm'];
                $nokk_pm = $row['nokk_pm'];
                $umur_pm = $row['umur_pm'];
                $f_ktp = $row['f_ktp'];
                $f_kk = $row['f_kk'];



                $status = $row['status'];
                $kwn = $row['kwn'];

                $tanggal = $row['create-at'];
                $data = $tanggal;
                $data = date('Y-m-d', strtotime($data));
                $tanggal2 = tgl_indo($data);
                $data1 = $row['tggllahir'];
                $tanggallahir = tgl_indo($data1);


                $data2 = $row['tgghilang'];
                $tanggalhilang = tgl_indo($data2);


    




                echo " 
                    <div class='row'>
                    <br><br>
                    <div class='col-sm-3'>
                        <a href='pengaduan.php'><img src='back.png' width='35' /></a>
                    </div>
                    <div class='col-sm-7'>                
                        <b>
                            <font size='4'>PERUBAHAN ELEMEN DATA PADA KARTU KELUARGA </font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                            <font size='4' font color='red'><a class='btn btn-primary' href='cetak.php?uuid_pengaduan=$uuid_pengaduan&kd_jenis=$kd_jenis&uuid_reg=$uuid_reg' target='blank'><i class='fa fa-print'></i> Cetak</a> </font>
                        </b><br></b><br>
                    </div>
                
                </div>
                
                
                <div class='row'>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>DATA PEMOHON</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nik_pm]</font>
                    </div>
                
                
                    <div class='col-sm-4'>
                        <font size='4'>Nama Lengkap Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nama_pm]</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> E-mail Pemohon</font>
                    </div>
                    <div class='col-sm-8'>
                        <font size='4'>: $row[nokk_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>No. Telepon Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[umur_pm] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Kewarganegaraan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row[kwn_pm] </font>
                    </div>"
                    

                  
                    ;
            }
          echo "
                 <br><br><br>
               <div class='row'>
                    <div class='col-sm-12'>
                        <b>
                           <center> <font size='3'>RINCIAN PADA KARTU KELUARGA</font></center>
                        </b>
                    </div>
                
                  ";
         $result2 = mysqli_query($koneksi, "SELECT * FROM `kk_perubahan_rincian` WHERE uuid_reg='$uuid_reg' ORDER BY 	uuid  asc");
            while ($row2 = mysqli_fetch_array($result2)) {
                
                
                    
                    echo "
           
                
                
                    <div class='col-sm-4'>
                        <font size='4'><b>$row2[data]</b> </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'></font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>NIK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row2[nik] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>NAMA</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row2[nama] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>SHDK</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row2[shdk]</font>
                    </div>
                    
                    
                        <div class='col-sm-4'>
                        <font size='4'>KETERANGAN</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row2[ket]</font>
                    </div><br><br>";
        }


 echo" 
               <div class='row'>
                    <div class='col-sm-12'>
                        <b>
                            <center><font size='3'>DATA PERUBAHAN PADA KARTU KELUARGA</font>    </center>
                        </b>
                    </div>
                
                ";
                




$result3 = mysqli_query($koneksi, "SELECT * FROM `kk_perubahan_perubahan` WHERE uuid_reg='$uuid_reg' ORDER BY 	uuid  asc");
            while ($row3 = mysqli_fetch_array($result3)) {
                
                
                    
                    echo "
              
                    <div class='col-sm-4'>
                        <font size='4'><b>$row3[data] </b></font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'></font>
                    </div>
                     
                  <div class='col-sm-4'>
                        <font size='4'></font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'><b>Pendidikan</b></font>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>Pendidikan Semula</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[pendsemula] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Pendidikan Menjadi</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[pendmenjadi] </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Dasar Perubahan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[pendperubahan]</font>
                    </div>
                    
                    
                        <div class='col-sm-4'>
                        <font size='4'>Keterangan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[pendket]</font>
                    </div>
                    
                    <br>          <br>
                          <div class='col-sm-4'>
                        <font size='4'></font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'><b>Pekerjaan</b></font>
                    </div>
                     <div class='col-sm-4'>
                        <font size='4'>Pekerjaan Semula</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[peksemula]</font>
                    </div>   
                    
                    
                        <div class='col-sm-4'>
                        <font size='4'>Pekerjaan Menjadi</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[pekmenjadi]</font>
                    </div>      
                    
                         <div class='col-sm-4'>
                        <font size='4'>Dasar Perubahan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[pekperubahan]</font>
                    </div>  
                    
                      
                         <div class='col-sm-4'>
                        <font size='4'>Keterangan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[pekket]</font>
                    </div>  <br><br>
                    
                          <div class='col-sm-4'>
                        <font size='4'></font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'><b>Agama</b></font>
                    </div>
                    
                    
                        <div class='col-sm-4'>
                        <font size='4'>Agama Semula</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[agamasemula]</font>
                    </div>  
                    
                       <div class='col-sm-4'>
                        <font size='4'>Agama Menjadi</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[agamamenjadi]</font>
                    </div>  
                    
                        <div class='col-sm-4'>
                        <font size='4'>Dasar Perubahan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[agamaperubahan]</font>
                    </div>  
                    
                       <div class='col-sm-4'>
                        <font size='4'>Keterangan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[agamket]</font>
                    </div>  
                    
                    <br><br>
                    
                          <div class='col-sm-4'>
                        <font size='4'></font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'><b>Lainnya</b></font>
                    </div>
                    
                    
                       <div class='col-sm-4'>
                        <font size='4'>Semula</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[lsemula]</font>
                    </div>  
                    
                    
                       <div class='col-sm-4'>
                        <font size='4'>Menjadi</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[lmenjadi]</font>
                    </div>  
                    
                     
                       <div class='col-sm-4'>
                        <font size='4'>Dasar Perubahan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[lperubahan]</font>
                    </div>  
                    
                        
                       <div class='col-sm-4'>
                        <font size='4'>Keterangan</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $row3[lket]</font>
                    </div>  
                    <br><br>
                    
                    ";
        }

  $result4 = mysqli_query($koneksi, "SELECT * FROM `kk_perubahan_data` WHERE uuid='$uuid_pengaduan'");
            while ($row4 = mysqli_fetch_array($result4)) {
                $nik_pm = $row['nik_pm'];
                $nama_pm = $row['nama_pm'];
                $nokk_pm = $row['nokk_pm'];
                $umur_pm = $row['umur_pm'];
                $f_ktp = $row['f_ktp'];
                $f_kk = $row['f_kk'];



                $status = $row['status'];
                $kwn = $row['kwn'];

                $tanggal = $row4['create-at'];
                $data = $tanggal;
                $data = date('Y-m-d', strtotime($data));
                $tanggal2 = tgl_indo($data);
                $data1 = $row['tggllahir'];
                $tanggallahir = tgl_indo($data1);


                $data2 = $row['tgghilang'];
                $tanggalhilang = tgl_indo($data2);


echo "

<br><br>
                    <div class='col-sm-4'>
                        <b>
                            <font size='4'>BERKAS UPLOAD</font>
                        </b>
                    </div>
                
                    <div class='col-sm-8'>
                    </div>
                    <div class='col-sm-4'>
                        <font size='4'>Kartu Keluarga</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkperubahandata/$row4[f_kk]' target='blank'> $row4[f_kk]</a></font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Bukti Perubahan Data</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkperubahandata/$row4[f_buktidata]' target='blank'>$row4[f_buktidata]</a> </font>
                    </div>
                
                
                     <div class='col-sm-4'>
                        <font size='4'>Surat Pernyataan F-1.06</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkperubahandata/$row4[f_f16]' target='blank'>$row4[f_f16]</a> </font>
                    </div>
                    
                    
                    
                          <div class='col-sm-4'>
                        <font size='4'>KTP - el Pemohon</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkperubahandata/$row4[f_ktp]' target='blank'>$row4[f_ktp]</a> </font>
                    </div>
                    
                    
                    
                             <div class='col-sm-4'>
                        <font size='4'>Buku Nikah</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: <a href='../siponcan/files/kkperubahandata/$row4[f_bukunikah]' target='blank'>$row4[f_bukunikah]</a> </font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'> Tanggal Upload </font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>: $tanggal</font>
                    </div>
                
                    <div class='col-sm-4'>
                        <font size='4'>Status</font>
                    </div>
                
                    <div class='col-sm-8'>
                        <font size='4'>:</font>
                        <font color='red' font size='5'><b>$row4[status]</b>
                        </font>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
                        <body class='mx-4 my-4'>
                            <i class=' btn btn-success fa fa-pencil rounded-circle text-white' style='width:50px; height:50px; padding-top:13px' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdlhotel'></i>
                
                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Update Status </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action=''>
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                                                            Status
                                                        </div>
                                                        <div class='col-lg-8'>
                                                            <select name='status' style='background: #FFF; border: 1px solid #fff; border-radius: 2px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 30px; width: 266px; margin-right: 10px; padding: 5px;'>
                                                                <option name='status' value='Upload Berkas'>Upload Berkas</option>
                                                                <option name='status' value='Verifikasi'>Verifikasi</option>
                
                                                                <option name='status' value='Selesai'>Selesai</option>
                                                                <option name='status' value='Ditolak'>Tolak</option>
                                                            </select>
                
                                                        </div>
                                                    </div>
                
                                                    <br>
                                                    <div class='row'>
                                                        <div class='col-lg-4'>
                
                                                        </div>
                                                        <div class='col-lg-8'>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                        </div>
                                        <div class='modal-footer'>
                                            <button data-v-08ceb4c3='' type='reset' class='btn btn-pill btn-danger btn-md'><i data-v-08ceb4c3='' class='fa fa-ban'></i> Reset
                                            </button> <button data-v-08ceb4c3='' name='submitkkperubahan' type='submit' class='btn btn-pill btn-primary btn-md'><i data-v-08ceb4c3='' class='fa fa-dot-circle-o'></i> Submit
                                            </button>
                                        </div>
                                        </form>
                
                
                
                                    </div>
                                </div>
                            </div>
                    </div>
                
                
                
                    <div class='col-sm-12'>
                
                        <font size='4'>
                            <p style='text-align: justify;'>
                                <br><br>
                                Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                                Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan
                                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.
                            </p>
                        </font>
                        <div class='form-group' align='left'>
                            <font size='3'>
                                &nbsp;&nbsp; </font></b>
                
                
                
                        </div>
                
                
                    </div>
                
                    <div class='col-sm-8'>
                
                
                    </div>
                
                    <div class='col-sm-4'>
                
                
                        <div class='form-group' align='left'>
                            <font size='4'>
                                &nbsp;&nbsp; <p style='text-align: justify;'>
                
                                    <input type='checkbox' name='centang' checked> Centang ini sebagai pengganti tanda tangan
                                    pemohon/pelapor
                                </p>
                            </font></b>
                            <b>
                                <font size='4'> Sibolga , $tanggal2
                            </b>
                            <br><br><br>
                            <b>( $row4[nama_pm] )</b></font>
                
                            <br><br><br><br>
                        </div>
             
                
                    </div>
                    <br><br><br><br>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/kkperubahandata/$row4[f_kk]' width='70%' height='400' /> <br><br>
                
                            Kartu Keluarga
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/kkperubahandata/$row4[f_buktidata]' width='70%' height='400' /> <br><br>
                
                        Bukti Perubahan Data
                
                        </div>
                
                     <div class='col-sm-6'>
                            <img src='../siponcan/files/kkperubahandata/$row4[f_f16]' width='70%' height='400' /> <br><br>
                
                         Surat Pernyataan F-1.06
                        </div>
                        <div class='col-sm-6'>
                            <img src='../siponcan/files/kkperubahandata/$row4[f_ktp]' width='70%' height='400' /> <br><br>
                
                    KTP-eL Pemohon
                
                        </div>
                        
                            <div class='col-sm-6'>
                            <img src='../siponcan/files/kkperubahandata/$row4[f_bukunikah]' width='70%' height='400' /> <br><br>
         Buku Nikah
                
                        </div>
                    </div>
                
                
                </div>
                </div>
                </div>";
        }
}
        ?>
          <!--detail kk rusak-->
          
          <!--here2-->
    </section>





    <link rel="stylesheet" href="../js/bootstrap.min.css">


    <center>

        </div>
        </body>

</html>