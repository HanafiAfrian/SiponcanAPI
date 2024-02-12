<!--====== PRELOADER PART START ======-->
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



<div id="home" class="header_hero d-lg-flex align-items-center" style="margin-top: -120px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="header_hero_content">
                    <h2 class="header_title">Selamat Datang di
                        <br>
                        <span id="typed" class="typed"></span>
                    </h2>
                    <h4> Sistem Pelayanan Administrasi Kependudukan Online Cepat dan Nyaman</h4>
                    <?php if (empty($_SESSION['nik'])) {
                        echo "<a href='' data-toggle='modal' data-target='#myModal'><span class='glyphicon glyphicon-log-in main-btn'>Masuk</a>
                   <br><br>
      
                   
                   ";
                    }
                    ?>
                </div> <!-- header hero content -->
            </div>
        </div> <!-- row -->
        <script>
            new Typed('#typed', {
                strings: ['SIPONCAN', ],
                typeSpeed: 100,
                delaySpeed: 100,
                loop: true
            });
        </script>
    </div> <!-- container -->
    <div class="header_shape bg_cover d-none d-lg-block" style="background-image: url(images/header_shape.png)"></div> <!-- header shape -->
    <div class="header_image d-flex align-items-center">
        <div class="image">
            <img src="images/iso.png" class="floating-img" alt="header image" style="margin-left: 40; width:600px">
            <img src="assets/images/dots.svg" alt="dots" class="dots" style="margin-left:-80px; opacity: 0.5;">
        </div> <!-- image -->
    </div> <!-- header image -->
</div> <!-- header hero -->
</section>

<!--====== HEADER PART ENDS ======-->



<div class="container" style="padding-bottom: 150px;">
    <!-- cari -->

    <div class="form-group mb-4" style="background-color: #42a5f5; padding:20px; border-radius: 10px; ">
        <h3 class="mb-3 text-white">Cari Data Anda </h3>
        <div class="row">
            <div class="col-lg-11 col-sm-10 col-9">
                <input type="text" class="form-control" id="inputAddress2" placeholder="Input NIK Untuk Melihat Progres Layanan">
            </div>
            <div class="col-lg-1  col-sm-2 col-3 mb-4">
                
                <button type="submit" class="btn btn-warning text-white"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>

    </div>
    <!-- cari -->
</div>



<!-- table -->
<section style="background-color: #f5f5f5; padding-top: 20px; padding-bottom: 40px;border-top-right-radius: 40px;border-top-left-radius: 40px; ">
    <div class="container">
        <h3 class="mb-4 mt-4 text-center">Informasi Layanan Yang Telah Selesai </h3>
        <div class="table-responsive-sm">
            <table id="tada" class="table table-striped  mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA LENGKAP</th>
                        <th scope="col">NO HANDPHONE</th>
                        <th scope="col">PELAYANAN</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
                        $page_no = $_GET['page_no'];
                    } else {
                        $page_no = 1;
                    }

                    $total_records_per_page = 10;
                    $offset = ($page_no - 1) * $total_records_per_page;
                    $previous_page = $page_no - 1;
                    $next_page = $page_no + 1;
                    $adjacents = "2";
                    $no = '0';
                    $result_count = mysqli_query($koneksi, "SELECT COUNT(*) As total_records FROM `tb_pengaduan`");
                    $total_records = mysqli_fetch_array($result_count);
                    $total_records = $total_records['total_records'];
                    $total_no_of_pages = ceil($total_records / $total_records_per_page);
                    $second_last = $total_no_of_pages - 1; // total page minus 1

                    $result = mysqli_query($koneksi, "SELECT * FROM `tb_pengaduan` WHERE status='Selesai' ORDER BY uuid DESC");
                    while ($row = mysqli_fetch_array($result)) {
                        $nohp = $row['no_hp'];
                        $nohp1 = $nohp;
                        $nohp2 = substr($nohp1, 0, 7);
                        echo $subvanobni;
                        $no = $no + 1;
                        $x ="XXXXX";
                        echo "<tr>
                    <th scope='row'>$no</th>
                  
                  
                    <td>" . $row['nama'] . "</td>
                    <td>$nohp2 $x </td>
                      <td>" . $row['jenis'] . "</td>
                    
                </tr>
               ";



                        echo "</tr>";
                    }
                    mysqli_close($koneksi);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- table -->



<script>
    $(document).ready(function() {
        $('#tada').DataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>

</div>



<!-- DAFTAR LAYANAN -->
<section style="margin-top: 100px;" class="daftar-layanan">
    <div class="container">
        <h3 class="text-center mb-3" id="syarat">Persyaratan Layanan</h3>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <!-- nik online -->
                <div class="card shadow bg-white" style="border-radius: 15px;">
                    <img class="ml-4 mt-2" src="icon/imgktp.png" alt="ktp" width="60px" style="background-color: #f5f5f5; padding: 5px;border-radius: 40px;">
                    <div class="card-body">
                        <h5 class="s">Kartu Tanda Penduduk</h5>
                        <p class="card-text">Pengurusan Kartu Tanda Penduduk</p>
                        <a class="btn btn-outline-primary mt-2" data-toggle="modal" data-target="#modalKtp">Detail</a>
                    </div>
                </div>
                <!-- nik online -->
                <!-- modal nik -->
                <!-- modal kk -->
                <div class="modal fade" id="modalKtp" tabindex="-1" role="dialog" aria-labelledby="modalKtpLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalNikLabel">Kartu Tanda Penduduk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Photo/Scan terlebih dahulu
                                Persyaratan dokumen dibawah ini
                                <br>

                                <br>

                                <!--start-->
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingPdktp">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left  text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Kartu Tanda Penduduk-Hilang
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingPdktp" data-parent="#accordionExample">
                                            <div class="card-body">
                                                1. Kartu Keluarga
                                                <br>
                                                2. KTP-el Pemohon
                                                <br>
                                                <!--<a href="ktp-hilang" class="btn btn-info">PILIH</a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingPdktp">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left  text-dark" type="button" data-toggle="collapse" data-target="#collapsePerub" aria-expanded="true" aria-controls="collapseOne">
                                                    Kartu Tanda Penduduk-Perubahan Data
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapsePerub" class="collapse" aria-labelledby="headingPdktp" data-parent="#accordionExample">
                                            <div class="card-body">
                                                1. Kartu Keluarga

                                                <br>
                                                2. KTP-el Pemohon
                                                <br>


                                                <!--<a href="ktp-perubahan" class="btn btn-info">PILIH</a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingKtprusak">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left  text-dark" type="button" data-toggle="collapse" data-target="#collapseKtprusak" aria-expanded="true" aria-controls="collapseOne">
                                                    Kartu Tanda Penduduk-Rusak
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseKtprusak" class="collapse" aria-labelledby="headingKtprusak" data-parent="#accordionExample">
                                            <div class="card-body">
                                                1. Kartu Keluarga

                                                <br>
                                                2. KTP-el Pemohon

                                                <br>

                                             <!--   <a href="ktp-rusak" class="btn btn-info">PILIH</a>-->
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <!--start-->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal kk -->
                <!-- modal nik -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <!-- kk-->
                <div class="card shadow bg-white" style="border-radius: 15px;">
                    <img class="ml-4 mt-2" src="icon/imgkk.png" alt="ktp" width="60px" style="background-color: #f5f5f5; padding: 5px;border-radius: 40px;">
                    <div class="card-body">
                        <h5 class="s">Kartu Keluarga</h5>
                        <p class="card-text">Pengurusan Kartu Keluarga Online</p>
                        <a class="btn btn-outline-primary mt-2" data-toggle="modal" data-target="#modalKk">Detail</a>
                    </div>
                </div>
                <!-- kk-->
                <!-- modal kk -->
                <div class="modal fade" id="modalKk" tabindex="-1" role="dialog" aria-labelledby="modalKkLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalNikLabel">Kartu Keluarga (KK)</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Photo/Scan terlebih dahulu
                                Persyaratan dokumen dibawah ini
                                <br>

                                <br>

                                <!--start-->
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingPdk">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left  text-dark" type="button" data-toggle="collapse" data-target="#padk" aria-expanded="true" aria-controls="collapseOne">
                                                    Penambahan Anak Pada KK
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="padk" class="collapse" aria-labelledby="headingPdk" data-parent="#accordionExample">
                                            <div class="card-body">
                                                1. Surat Ket. lahir dari RS / Puskesmas / Klinik
                                                <br>
                                                2. Buku nikah / Akta kawin
                                                <br>
                                                3. Kartu Keluarga
                                                <br>
                                                4. KTP-el Pemohon
                                                <br>

                                                <!--<a href="kkbaru" class="btn btn-info">PILIH</a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingPdk">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left  text-dark" type="button" data-toggle="collapse" data-target="#perubdkk" aria-expanded="true" aria-controls="collapsePerubdkk">
                                                    Perubahan / Perbaikan Data di KK
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="perubdkk" class="collapse" aria-labelledby="headingPdk" data-parent="#accordionExample">
                                            <div class="card-body">
                                                1. Kartu Keluarga
                                                <br>
                                                2. Surat Keterangan / bukti perubahan peristiwa kependudukan
                                                dan peristiwa penting
                                                <br>
                                                3. KTP-el Pemohon
                                                <br>
                                                4. Buku Nikah / Akta Kawin
                                                <br>

                                                <!--<a href="kkbaru" class="btn btn-info">PILIH</a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingKh">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left  text-dark" type="button" data-toggle="collapse" data-target="#collapseKh" aria-expanded="true" aria-controls="collapseOne">
                                                    KK Hilang / Rusak
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseKh" class="collapse" aria-labelledby="headingKh" data-parent="#accordionExample">
                                            <div class="card-body">
                                                1. KTP-el Pemohon
                                                <br>
                                                2. Kartu Keluarga (Jika Rusak)
                                                <br>
                                                3. Surat Keterangan dari Kepolisian (Jika Hilang)
                                                <br>

                                                <!--<a href="kkbaru" class="btn btn-info">PILIH</a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left  text-dark" type="button" data-toggle="collapse" data-target="#collapseKb" aria-expanded="true" aria-controls="collapseOne">
                                                    Membentuk Keluarga Baru
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseKb" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                1. Buku Nikah / Akta Kawin
                                                <br>
                                                2. Kartu Keluarga
                                                <br>
                                                3. KTP-el Pemohon
                                                <br>

                                                <!--<a href="kkbaru" class="btn btn-info">PILIH</a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Penggantian Kepala Keluarga
                                                    <br><small>Khusus KK Sibolga</small>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                1. Kutipan Akta Kematian
                                                <br>
                                                2. Kutipan Akta Perceraian (Jika Kepala Keluarga Cerai)
                                                <br>
                                                3. Kartu Keluarga
                                                <br>
                                                4. KTP-el Pemohon
                                                <br>

                                                <!--<a href="ganti-kepalakeluarga" class="btn btn-info">PILIH</a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Pindah Antar Kelurahan / Kecamatan
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                1. Surat Pernyataan Pindah Kelurahan/Kecamatan
                                                <br>
                                                2. Kartu Keluarga(1)atau masih sama mertua
                                                <br>
                                                3. Kartu Keluarga(1)atau masih sama orang tua
                                                <br>
                                                4. Kartu Keluarga(1)atau masih sama Keluarga lain
                                                <br>
                                                5. Buku Nikah/Muslim(halaman1)
                                                <br>
                                                6. Buk Nikah(halaman2)
                                                <br>
                                                7. Buk Nikah(halaman3)
                                                <br>
                                                8. Akta Kawin/Non muslim
                                                <br>
                                                9. Ijazah atau akta lahir(untuk perubahan)(1)
                                                <br>
                                                10. Ijazah atau Akta lahir(untuk perubahan)(2)
                                                <br>
                                                11. Foto KTP Asli kepala keluarga(jika hilang)
                                                <br>
                                                <!--<a href="kk-pindah-datang" class="btn btn-info">PILIH</a>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--start-->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal kk -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <!-- akta kawin -->
                <div class="card shadow bg-white" style="border-radius: 15px;">
                    <img class="ml-4 mt-2" src="icon/ring.png" alt="ktp" width="60px" style="background-color: #f5f5f5; padding: 5px;border-radius: 40px;">
                    <div class="card-body">
                        <h5 class="s">Akta Perkawinan</h5>
                        <p class="card-text">Pengurusan Akta Perkawinan Online</p>
                        <a class="btn btn-outline-primary mt-2" data-toggle="modal" data-target="#modalAktaKawin">Detail</a>
                    </div>
                </div>
                <!-- akta kawin -->
                <!-- modal kawin -->
                <div class="modal fade" id="modalAktaKawin" tabindex="-1" role="dialog" aria-labelledby="modalAktaKawin" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalNikLabel">Akta Perkawinan</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Photo/Scan terlebih dahulu
                                Persyaratan dokumen dibawah ini
                                <br><br>
                                1. Surat Kawin dari Pemuka Agama
                                <br>
                                2. Pas Foto Gandeng Berwarna Ukuran 4x6
                                <br>
                                3. Kartu Keluarga
                                <br>
                                4. KTP-el Suami Istri
                                <br>
                                5. Kutipan Akte Perceraian dan Kutipan Akte Kematian bagi mereka
                                yang telah cerai atau pasangan telah meninggal
                                <br>
                                6. KTP-el Pemohon
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal kawin -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <!-- akta lahir -->
                <div class="card shadow bg-white" style="border-radius: 15px;">
                    <img class="ml-4 mt-2" src="icon/troli.png" alt="ktp" width="60px" style="background-color: #f5f5f5; padding: 5px;border-radius: 40px;">
                    <div class="card-body">
                        <h5 class="s">Akta Kelahiran</h5>
                        <p class="card-text">Pengurusan Akta Kelahiran Online</p>
                        <a class="btn btn-outline-primary mt-2" data-toggle="modal" data-target="#modalAktaLahir">Detail</a>
                    </div>
                </div>
                <!-- akta lahir -->
                <!-- modal Kelahiran -->
                <div class="modal fade" id="modalAktaLahir" tabindex="-1" role="dialog" aria-labelledby="modalAktaLahir" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalNikLabel">Akta Kelahiran</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Photo/Scan terlebih dahulu
                                Persyaratan dokumen dibawah ini
                                <br><br>
                                1. Surat Ket.Lahir dari RS/Bidan/Klinik
                                <br>
                                2. Surat Nikah/Akta Perkawinan
                                <br>
                                3. Kartu Keluarga
                                <br>
                                4. KTP-el Orang Tua(Pemohon)

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal Kelahiran -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <!-- akta Kematian -->
                <div class="card shadow bg-white" style="border-radius: 15px;">
                    <img class="ml-4 mt-2" src="icon/rip.png" alt="ktp" width="60px" style="background-color: #f5f5f5; padding: 5px;border-radius: 40px;">
                    <div class="card-body">
                        <h5 class="s">Akta Kematian</h5>
                        <p class="card-text">Pengurusan Akta Kematian Online</p>
                        <a class="btn btn-outline-primary mt-2" data-toggle="modal" data-target="#modalAktaKematian">Detail</a>
                    </div>
                </div>
                <!-- akta Kematian -->
                <!-- modal Kematian -->
                <div class="modal fade" id="modalAktaKematian" tabindex="-1" role="dialog" aria-labelledby="modalAktaKematian" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalNikLabel">Akta Kematian</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Photo/Scan terlebih dahulu
                                Persyaratan dokumen dibawah ini
                                <br><br>
                                1. Surat Keterangan Kematian dari Dokter/Rumah Sakit atau Kepala
                                Desa/Lurah
                                <br>
                                2. Kartu Keluarga
                                <br>
                                3. Ktp-el Jenazah
                                <br>
                                4. KTP-el Pemohon

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal Kematian -->
            </div>



            <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <!-- akta Perceraian -->
                <div class="card shadow bg-white" style=" border-radius: 15px;">
                    <img class="ml-4 mt-2" src="icon/divorced.png" alt="ktp" width="60px" style="background-color: #f5f5f5; padding: 5px;border-radius: 40px;">
                    <div class="card-body">
                        <h5 class="s">Akta Perceraian</h5>
                        <p class="card-text">Pengurusan Akta Perceraian Online</p>
                        <a class="btn btn-outline-primary mt-2" data-toggle="modal" data-target="#modalAktaPerceraian">Detail</a>
                    </div>
                </div>
                <!-- akta Perceraian -->
                <!-- modal Perceraian -->
                <div class="modal fade" id="modalAktaPerceraian" tabindex="-1" role="dialog" aria-labelledby="modalAktaPerceraian" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalNikLabel">Akta Perceraian</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Photo/Scan terlebih dahulu
                                Persyaratan dokumen dibawah ini
                                <br><br>
                                1. Salinan putusan pengadilan yang telah memperoleh kekuatan
                                hukum tetap
                                <br>
                                2. Kutipan Akta Perkawinan suami istri
                                <br>
                                3. Kartu keluarga
                                <br>
                                4. Surat Pengantar Panitera
                                <br>
                                5. KTP-el Pemohon

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal Perceraian -->
            </div>
            
            
              <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <!-- KIA -->
                <div class="card shadow bg-white" style="border-radius: 15px;">
                    <img class="ml-4 mt-2" src="icon/child.png" alt="ktp" width="60px" style="background-color: #f5f5f5; padding: 5px;border-radius: 40px;">
                    <div class="card-body">
                        <h5 class="s">Kartu Identitas Anak</h5>
                        <p class="card-text">Pengurusan Kartu Identitas Anak</p>
                        <a class="btn btn-outline-primary mt-2" data-toggle="modal" data-target="#modalKia">Detail</a>
                    </div>
                </div>
                <!-- KIA -->
                <!-- modal KIA -->
                <div class="modal fade" id="modalKia" tabindex="-1" role="dialog" aria-labelledby="modalAktaKematian" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalNikLabel">Kartu Identitas Anak</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Photo/Scan terlebih dahulu
                                Persyaratan dokumen dibawah ini
                                <br><br>
                                1. KTP Ayah
                                <br>
                                2. KTP Ibu
                                <br>
                                3. Akta Kelahiran
                                <br>
                                4. Foto Kartu Keluarga Asli
                                <br>
                                5. Foto Anak (Bagi diatas 5 Tahun, latar biru untuk tahun lahir anak genap atau merah untuk tahun lahir anak ganjil)
                                       <br>
                                  6. Perpanjangan KIA/KIA Hilang/Keterangan Lainnya
                                <br>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal KIA -->
            </div>
            
            
            <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <!-- akta pengakuan anak -->
                <div class="card shadow bg-white" style="border-radius: 15px;">
                    <img class="ml-4 mt-2" src="icon/akui.png" alt="ktp" width="60px" style="background-color: #f5f5f5; padding: 5px;border-radius: 40px;">
                    <div class="card-body">
                        <h5 class="s">Akta Pengakuan Anak</h5>
                        <p class="card-text">Pengurusan Akta Pengakuan Anak</p>
                        <a class="btn btn-outline-primary mt-2" data-toggle="modal" data-target="#modalAktaPengakuananak">Detail</a>
                    </div>
                </div>
                <!-- akta pengakuan anak -->
                <!-- modal akta pengakuan anak -->
                <div class="modal fade" id="modalAktaPengakuananak" tabindex="-1" role="dialog" aria-labelledby="modalAktaPengakuananak" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalAktaPengakuananaklabel">Akta Pengakuan Anak</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Photo/Scan terlebih dahulu
                                Persyaratan dokumen dibawah ini
                                <br><br>
                                1. KTP Ayah
                                <br>
                                2. KTP Ibu
                                <br>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal akta pengakuan anak -->
            </div>
            
            
             <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <!-- akta pengesahan anak -->
                <div class="card shadow bg-white" style="border-radius: 15px;">
                    <img class="ml-4 mt-2" src="icon/sahanak.png" alt="ktp" width="60px" style="background-color: #f5f5f5; padding: 5px;border-radius: 40px;">
                    <div class="card-body">
                        <h5 class="s">Akta Pengesahan Anak</h5>
                        <p class="card-text">Pengurusan Akta Pengesahan Anak</p>
                        <a class="btn btn-outline-primary mt-2" data-toggle="modal" data-target="#modalAktaPengesahananak">Detail</a>
                    </div>
                </div>
                <!-- akta pengesahan anak -->
                <!-- modal akta pengesahan anak -->
                <div class="modal fade" id="modalAktaPengesahananak" tabindex="-1" role="dialog" aria-labelledby="modalAktaPengesahananak" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalAktaPengesahananak">Akta Pengesahan Anak</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Photo/Scan terlebih dahulu
                                Persyaratan dokumen dibawah ini
                                <br><br>
                                1. KTP Ayah
                                <br>
                                2. KTP Ibu
                                <br>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal akta pengesahan anak -->
            </div>
            
            
            
            
             <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <!-- akta pengangkatan anak -->
                <div class="card shadow bg-white" style="border-radius: 15px;">
                    <img class="ml-4 mt-2" src="icon/angkat.png" alt="ktp" width="60px" style="background-color: #f5f5f5; padding: 5px;border-radius: 40px;">
                    <div class="card-body">
                        <h5 class="s">Akta Pengangkatan Anak</h5>
                        <p class="card-text">Pengurusan Akta Pengangkatan Anak</p>
                        <a class="btn btn-outline-primary mt-2" data-toggle="modal" data-target="#modalAktaPengangkatananak">Detail</a>
                    </div>
                </div>
                <!-- akta pengangkatan anak -->
                <!-- modal akta pengangkatan anak -->
                <div class="modal fade" id="modalAktaPengangkatananak" tabindex="-1" role="dialog" aria-labelledby="modalAktaPengangkatananak" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalAktaPengangkatananak">Akta Pengangkatan Anak</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Photo/Scan terlebih dahulu
                                Persyaratan dokumen dibawah ini
                                <br><br>
                                1. KTP Ayah
                                <br>
                                2. KTP Ibu
                                <br>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal akta pengangkatan anak -->
            </div>
            
            
            
            <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                <!-- Surat Pindah -->
                <div class="card shadow bg-white" style="border-radius: 15px;">
                    <img class="ml-4 mt-2" src="icon/pindah.png" alt="ktp" width="60px" style="background-color: #f5f5f5; padding: 5px;border-radius: 40px;">
                    <div class="card-body">
                        <h5 class="s">Surat Pindah</h5>
                        <p class="card-text">Pengurusan Surat Pindah Online</p>
                        <a class="btn btn-outline-primary mt-2" data-toggle="modal" data-target="#modalSuratPindah">Detail</a>
                    </div>
                </div>
                <!-- Surat Pindah -->
                <!-- modal Surat Pindah  -->
                <div class="modal fade" id="modalSuratPindah" tabindex="-1" role="dialog" aria-labelledby="modalSuratPindah" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalNikLabel">Surat Pindah</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Photo/Scan terlebih dahulu
                                Persyaratan dokumen dibawah ini
                                <br><br>
                                1. Kartu Keluarga
                                <br>
                                2. KTP-el Pemohon


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>


                            </div>
                        </div>
                    </div>
                </div>
                <!--modal Surat Pindah  -->



            </div>

            <!--KIA-->

            <!--KIA-->
        </div>
    </div>
</section>
<!-- DAFTAR LAYANAN -->






<!-- chart -->
<div class="div" style="margin-top: 100px;padding-top: 100px; background-color: #f5f5f5;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  mb-4">
                <div>
                    <canvas id="myChart"></canvas>
                    <b>Meninggal : </b><?php echo $countmeninggal ?> Orang <br>
                    <b> Lahir : </b><?php echo $countlahir ?> Orang<br>
                    <b> Pindah Datang : </b><?php echo $countpindah ?> Orang<br>
                    <b>Total : </b><?php echo $counttotal ?> Orang
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div>
                    <canvas id="myChartjml"></canvas>
                    <b>L : </b><?php echo $countl ?> Orang<br>
                    <b> P : </b><?php echo $countp ?> Orang<br>
                    <b>Total : </b><?php echo $counttotal ?> Orang
                </div>
            </div>
        </div>
    </div>
</div>
<!-- chart -->

<!--====== CONTACT PART START ======-->

<section id="contact" class="contact_area pt-50 mt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact_info mt-45">
                    <div class="section_title pb-15">
                        <h4 class="title">Kontak</h4>
                      
                    </div>
               

                    <div class="single_info d-flex align-items-center mt-15">
                        <div class="info_icon">
                            <i class="lni lni-envelope"></i>
                        </div>
                        <div class="info_content media-body">
                            <p>disdukcapil@sibolgakota.go.id</p>
                        </div>
                    </div> <!-- single info -->

                    <div class="single_info d-flex align-items-center mt-15">
                        <div class="info_icon">
                            <i class="lni lni-map-marker"></i>
                        </div>
                        <div class="info_content media-body">
                            <p>Jl. Tongkol No.12, Pancuran Gerobak, Sibolga Kota, Kota Sibolga, Sumatera Utara 22511</p>
                        </div>
                    </div> <!-- single info -->
                </div> <!-- contact info -->
            </div>
            
            
            
             <div class="col-lg-4">
                <div class="contact_info mt-45">
                    <div class="section_title pb-15">
                        <h4 class="title">Link Terkait</h4><br>
           
                    </div>
               

                    <div class="single_info d-flex align-items-center mt-15">
                        
                        <div class="info_content media-body">
                            <p><a href='https://siponcan.sibolgakota.go.id/syarat-ketentuan'>Syarat & Ketentuan</a></p>
                        </div>
                    </div> <!-- single info -->

                    <div class="single_info d-flex align-items-center mt-15">
                        
                        <div class="info_content media-body">
                            <p><a href='https://siponcan.sibolgakota.go.id/kebijakan-privasi-data'>Kebijakan Privasi Data</a></p>
                        </div>
                    </div> <!-- single info -->
                    
                    
                    
                     <div class="single_info d-flex align-items-center mt-15">
                        
                        <div class="info_content media-body">
                            <p><a href='https://ukmgodigital2022.sibolgakota.go.id'>Lapo Sibolga</a></p>
                        </div>
                    </div> 
                </div> <!-- contact info -->
            </div>
            
       <div class="col-lg-4">
                <div class="contact_info mt-45">
                    <div class="section_title pb-15">
                        <h4 class="title">Kritik & Saran </h4><br>
                      
                    </div>
                    
                    <form id="contact-form" action="assets/contact.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single_form mt-30">
                                    <input type="text" name="name" placeholder="Name">
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-12">
                                <div class="single_form mt-30">
                                    <input type="email" name="email" placeholder="Email">
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-12">
                                <div class="single_form mt-30">
                                    <input type="text" name="number" placeholder="Phone Number">
                                </div> <!-- single form -->
                            </div>
               
                            <div class="col-md-12">
                                <div class="single_form mt-30">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div> <!-- single form -->
                            </div>
                            <p class="form-message"></p>
                            <div class="col-md-12">
                                <div class="single_form mt-30">
                                    <button class="main-btn">Submit</button>
                                </div> <!-- single form -->
                            </div>
                        </div> <!-- row -->
                    </form>
                </div> <!-- contact form -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->