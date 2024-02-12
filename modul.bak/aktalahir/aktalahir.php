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
include 'config/aktivity.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/cst-styles.css">
    <script src="https://use.fontawesome.com/e1c52708df.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .navbar {
            z-index: 2000;
            width: 100%;


        }

        .nbr {
            width: 100%;

            margin-top: -50px;

        }

        @media (max-width: 996px) {
            .navbar {
                z-index: 2000;
                width: 100%;

            }

            .nbr {
                width: 100%;

                margin-top: -50px;

            }
        }

        .progress-bar-cst .step .bullet:before,
        .progress-bar-cst .step .bullet:after {
            position: absolute;
            content: "";
            bottom: 11px;
            right: -9rem;
            height: 3px;
            width: 8rem;
            background: #262626;
        }
    </style>

<body style="min-height:0px">
    <div class="container">

        <h3 class="text-center mb-4">Pelayanan Pembuatan Akta Kelahiran</h3>
        <div class="progress-bar-cst">
            <div class="step">
                <p>Pemohon</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Anak</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Ayah</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Ibu</p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Saksi</p>
                <div class="bullet">
                    <span>5</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Berkas</p>
                <div class="bullet">
                    <span>6</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>


        </div>
        <div class="form-outer">
            <form action="" Method="post" enctype="multipart/form-data">
                <div class="page slide-page">
                    <div class="title mb-4">Pemohon:</div>
                    <div class="row">
                        <input type="hidden" class="form-control" name="nikuser" value="<?php echo $nikuser ?>">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nik" class="field">NIK</label>
                                <input type="number" name="nikpmhon" data-maxlength="16" data-minlength="16" class="form-control" id="nik" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="namapmhon" class="field">Nama Lengkap (Sesuai KTP)</label>
                                <input type="text" class="form-control" id="namapmhon" name="namapmhon" aria-describedby="emailHelp" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nokkpmhon" class="field">Email AKtif</label>
                                <input type="email" class="form-control" name="nokkpmhon" id="nokkpmhon" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="umurpmhon" class="field">No. Telepon</label>
                                <input type="number" class="form-control" id="umurpmhon" name="umurpmhon" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="kwnpmhon" class="field">Kewarganegaraan</label>
                                <input type="text" class="form-control" id="kwnpmhon" name="kwnpmhon" aria-describedby="emailHelp" value="Indonesia" disabled>
                            </div>
                        </div>


 
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jk" class="field">Klasifikasi</label>
                                <select class="custom-select" name="selectedcat12" required>
                                    <option hidden>Pilih</option>
                                    <option value="Umum">Umum</option>
                                    <option value="MOU">MOU</option></option>
                                 

                                </select>
                            </div>
                        </div>


                    </div>
                    <div class="field" style="
                    margin-top: 50px; height: 45px; width: 72%;
    ">
                        <button class="firstNext next">Selanjutnya</button>
                    </div>
                </div>


             





                <!-- halaman data AYAH -->
                <div class="page">
                    <div class="title mb-4">Anak:</div>
                    <div class="row">

                        
                           <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nikanak" class="field">NIK Anak <i>(lihat di KK)</i>
                                    </label>
                                        <input type="number" name="nikanak" data-maxlength="16" data-minlength="16" class="form-control" id="nikanak" aria-describedby="emailHelp" required>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="namaanak" class="field">Nama Lengkap Anak (Sesuai KTP)</label>
                                <input type="text" class="form-control" name="namaanak" id="namaanak" aria-describedby="emailHelp" required>
                            </div>
                        </div>

               

    <div class="col-lg-6">
                            <div class="form-group">
                    <label for="jk" class="field">Jenis Kelamin</label>
                                <select class="custom-select" name="selectedcat" required>
                                    <option hidden>Pilih</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Wanita">Wanita</option>
                               

                                </select>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jk" class="field">Tempat Dilahirkan Anak</label>
                                <select class="custom-select" name="selectedcat1" required>
                                    <option hidden>Pilih</option>
                                    <option value="Puskesmas">Puskesmas</option>
                                    <option value="Polindes">Polindes</option>
                                    <option value="Rumah">Rumah</option>
                                    <option value="Lainnya">Lainnya</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tmtpanak" class="field">Tempat Kelahiran</label>
                                <input type="text" class="form-control" id="tmtpanak" name="tmtpanak" aria-describedby="emailHelp" required>
                            </div>
                        </div>

                    
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="pilih_tanggal_pesan2" class="field">Tanggal Kelahiran Anak</label>
                                <input type="date" class="form-control" id="pilih_tanggal_pesan2" name="pilih_tanggal_pesan2" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="pilih_jam_pesan" class="field">Waktu Kelahiran</label>
                                <input type="time" class="form-control" id="pilih_jam_pesan" name="pilih_jam_pesan" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="anakke" class="field">Kelahiran ke-(Anak)</label>
                                <input type="number" class="form-control" id="anakke" name="anakke" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jk" class="field">Penolong Kelahiran</label>
                                <select class="custom-select" name="selectedcat2" required>
                                    <option hidden>Pilih</option>
                                    <option value="Dokter">Dokter</option>
                                    <option value="Bidan/Perawat">Bidan/Perawat</option>
                                    <option value="Dukun">Dukun</option>
                                    <option value="Lainnya">Lainnya</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="beratanak" class="field">Berat (Kg)</label>
                                <input type="number" class="form-control" id="beratanak" name="beratanak" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="pjganak" class="field">Panjang (Cm)</label>
                                <input type="number" class="form-control" id="pjganak" name="pjganak" aria-describedby="emailHelp" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jk" class="field">Jenis Kelahiran</label>
                                <select class="custom-select" name="selectedcat3" required>
                                    <option hidden>Pilih</option>
                                    <option value="Tunggal">Tunggal</option>
                                    <option value="Kembar1">Kembar 1</option>
                                    <option value="Kembar2">Kembar 2</option>
                                    <option value="Kembar3">Kembar 3</option>
                                    <option value="Kembar4">Kembar 4</option>
                                    <option value="Kembar5">Kembar 5</option>
                                    <option value="lainnya">Lainnya</option>

                                </select>
                            </div>
                        </div>

                    </div>
                        
                        
                        

                  

                    <div class=" field btns  mr-3" style="
                      margin-top: 50px;height: 45px; width: 100%;">
                        <button class="prev-1 prev btn-cst">Sebelumnya</button>
                        <button class="next-1 next btn-cst">Selanjutnya</button>
                    </div>
                </div>
                <!-- end halaman data Ibu -->


                <!-- halaman data anak -->
                <div class="page">
                    <div class="title mb-4">Ayah:</div>
                    <div class="row">

                       <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nikayah" class="field">NIK Ayah</label>
                                <input type="number" name="nikayah" data-maxlength="16" data-minlength="16" class="form-control" id="nikayah" aria-describedby="emailHelp" required>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="namaayah" class="field">Nama Lengkap Ayah (Sesuai KTP)</label>
                                <input type="text" class="form-control" name="namaayah" id="namaayah" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tmptayah" class="field">Tempat Lahir Ayah</label>
                                <input type="text" class="form-control" id="tmptayah" name="tmptayah" aria-describedby="emailHelp" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="pilih_tanggal_pesan" class="field">Tanggal Lahir Ayah</label>
                                <input type="date" class="form-control" id="pilih_tanggal_pesan" name="pilih_tanggal_pesan" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="kwnayah" class="field">Kewarganegaraan</label>
                                <input type="text" class="form-control" id="kwnayah" name="kwnayah" aria-describedby="emailHelp" value="Indonesia" disabled>
                            </div>
                        </div>

                    </div>


                    <div class=" field btns  mr-3" style="
                      margin-top: 50px;height: 45px; width: 100%;">
                        <button class="prev-1 prev btn-cst">Sebelumnya</button>
                        <button class="next-1 next btn-cst">Selanjutnya</button>
                    </div>
                </div>
                <!-- end halaman data anak -->
 <!-- halaman data IBU -->
                <div class="page">
                    <div class="title mb-4">Ibu:</div>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nikibu" class="field">NIK Ibu</label>
                                <input type="number" name="nikibu" data-maxlength="16" data-minlength="16" class="form-control" id="nikibu" aria-describedby="emailHelp" required>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="namaibu" class="field">Nama Lengkap Ibu (Sesuai KTP)</label>
                                <input type="text" class="form-control" name="namaibu" id="namaibu" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tmptibu" class="field">Tempat Lahir Ibu</label>
                                <input type="text" class="form-control" id="tmptibu" name="tmptibu" aria-describedby="emailHelp" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="pilih_tanggal_pesan1" class="field">Tanggal Lahir Ibu</label>
                                <input type="date" class="form-control" id="pilih_tanggal_pesan1" name="pilih_tanggal_pesan1" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="kwnibu" class="field">Kewarganegaraan</label>
                                <input type="text" class="form-control" id="kwnibu" name="kwnibu" aria-describedby="emailHelp" value="Indonesia" disabled>
                            </div>
                        </div>

                    </div>

                    <div class=" field btns  mr-3" style="
                      margin-top: 50px;height: 45px; width: 100%;">
                        <button class="prev-1 prev btn-cst">Sebelumnya</button>
                        <button class="next-1 next btn-cst">Selanjutnya</button>
                    </div>
                </div>
                <!-- end halaman data Ibu -->

  <!-- halaman data jenaazah -->
                <div class="page">
                    <div class="title mb-4">Saksi:</div>
                    <div class="row">

                     

     <div class="col-lg-6">
                            <div class="form-group">
                                <label for="niksaksi1" class="field">NIK (Saksi 1)</label>
                                <input type="number" name="niksaksi1" data-maxlength="16" data-minlength="16" class="form-control" id="niksaksi1" aria-describedby="emailHelp" required>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nokkpmhon" class="field">Nama Lengkap Saksi 1</label>
                                <input type="text" class="form-control" name="namasaksi1" id="nokkpmhon" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                       
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="kwnsaksi1" class="field">Kewarganegaraan Saksi 1</label>
                                <input type="text" class="form-control" id="kwnsaksi1" name="kwnsaksi1" aria-describedby="emailHelp" value="Indonesia" disabled>
                            </div>
                        </div>
                        
                        
                        
                        
                         <div class="col-lg-6">

                           
                        </div>
                        <!-- saksi2 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="niksaksi1" class="field">NIK (Saksi 2)</label>
                                <input type="number" name="niksaksi2" data-maxlength="16" data-minlength="16" class="form-control" id="niksaksi2" aria-describedby="emailHelp" required>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nokkpmhon" class="field">Nama Lengkap Saksi 2</label>
                                <input type="text" class="form-control" name="namasaksi2" id="nokkpmhon" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                     
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="kwnsaksi2" class="field">Kewarganegaraan Saksi 2</label>
                                <input type="text" class="form-control" id="kwnsaksi2" name="kwnsaksi2" aria-describedby="emailHelp" value="Indonesia" disabled>
                            </div>
                        </div>

                    </div>

                             <div class=" field btns  mr-3" style="
                      margin-top: 50px;height: 45px; width: 100%;">
                        <button class="prev-1 prev btn-cst">Sebelumnya</button>
                        <button class="next-1 next btn-cst">Selanjutnya</button>
                    </div>
                </div>
                <!-- end halaman data jenaazah -->

                <div class="page">
                    <div class="title">Berkas</div>
                    <div class="info text-danger mb-4">*Maks.Size Upload 5MB</div>

                    <div class="row">




                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">Buku Nikah/Akta Kawin</label>
                                <input type="file" name="img1" class="form-control-file btn btn-outline-secondary" id="uploadakm" required>
                                <small class="field text-left" style="font-size: 12px;">Jika buku nikah (halaman 2&3) (*.jpg *.png *.pdf)</small>
                            </div>

                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">Kartu Keluarga</label>
                                <input type="file" name="img2" class="form-control-file btn btn-outline-secondary" id="uploadakm2" required>
                                <small class="field text-left" style="font-size: 12px;">Ket: Pas Foto Gandeng berwarna ukuran 4x6 (*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">KTP-el Pemohon</label>
                                <input type="file" name="img3" class="form-control-file btn btn-outline-secondary" id="uploadakm3" required>
                                <small class="field text-left" style="font-size: 12px;">Gunakan KK Suami Jika Belum Satu KK dengan Istri(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">Surat Ket. Lahir </label>
                                <input type="file" name="img4" class="form-control-file btn btn-outline-secondary" id="uploadakm4" required>
                                <small class="field text-left" style="font-size: 12px;">Jika Istri Belum Satu KK dengan Suami(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
                      
                       
                        


                        <div class="row mx-2 mt-3">


                            <div class="col-lg-12 col-12 mb-2 text-left mt-4">
                                Pernyataan: Demikian formulir serta dokumen persyaratan ini
                                saya/kami
                                buat dengan
                                sesungguhnya. Apabila keterangan tersebut tidak sesuaidengan keadaan sebenarnya,
                                saya/kami bersedia dikenakan sanksi sesuai ketentuan peraturan perundang-undangan
                                yang berlaku.
                            </div>



                        </div>
                        <div class="row mx-2">
                            <div class="col-lg-12 col-12 mt-2">
                                <div class="custom-control custom-checkbox mb-4">
                                    <input type="checkbox" class="custom-control-input" id="chkbx" required>
                                    <br>
                                    <label class="custom-control-label mt-4" for="chkbx"><span>Centang ini sebagai
                                            pengganti
                                            tanda tangan pemohon/pelapor</span></label>

                                </div>
                            </div>
                        </div>
                        <!-- data ibu -->



                    </div>
                    <div class=" field btns  mr-3" style="
                      margin-top: 50px;height: 45px; width: 100%;">
                        <button class="prev-1 prev btn-cst">Sebelumnya</button>
                        <button class="next-1 next btn-cst" id="save">Selanjutnya</button>
                    </div>
                </div>


                <div class="page">
                    <div class="title">Kirim Berkas:</div>
                    <H4>Kirim Berkas Sekarang?</H4>
                    <img src="images/img-confirm.png" width="300px" alt="">
                    <h4>Pastikan Semua Data Telah Sesuai, Klik Submit Untuk Mengirim</h4>
                    <div class=" field btns  mr-3" style="
                    margin-top: 50px;height: 45px; width: 98%;">

                        <button class="prev-5 prev">Sebelumnya</button>
                        <button name="SUBMITLAHIR" class="submit">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
<script>
    $(document).ready(function() {
        $('#save').prop('disabled', true);

        $('#chkbx').click(function() {
            if ($(this).is(':checked')) {
                $('#save').prop('disabled', false);
            } else {
                $('#save').prop('disabled', true);

            }
        });
    });


    var file = document.getElementById('uploadakm');

    file.onchange = function(e) {
        var ext = this.value.match(/\.([^\.]+)$/)[1];
        switch (ext) {
            case 'jpg':
            case 'JPG':
            case 'PNG':
            case 'png':
            case 'jpeg':
            case 'JPEG':
            case 'pdf':
            case 'PDF':

                break;
            default:
                alert('File Tidak Diizinkan');
                this.value = null;
        }
    };
</script>

<script>
    var file2 = document.getElementById('uploadakm2');

    file2.onchange = function(e) {
        var ext = this.value.match(/\.([^\.]+)$/)[1];
        switch (ext) {
            case 'jpg':
            case 'JPG':
            case 'PNG':
            case 'png':
            case 'jpeg':
            case 'JPEG':
            case 'pdf':
            case 'PDF':

                break;
            default:
                alert('File Tidak Diizinkan');
                this.value = null;
        }
    };
</script>

<script>
    var file3 = document.getElementById('uploadakm3');

    file3.onchange = function(e) {
        var ext = this.value.match(/\.([^\.]+)$/)[1];
        switch (ext) {
            case 'jpg':
            case 'JPG':
            case 'PNG':
            case 'png':
            case 'jpeg':
            case 'JPEG':
            case 'pdf':
            case 'PDF':

                break;
            default:
                alert('File Tidak Diizinkan');
                this.value = null;
        }
    };
</script>

<script>
    var file4 = document.getElementById('uploadakm4');

    file4.onchange = function(e) {
        var ext = this.value.match(/\.([^\.]+)$/)[1];
        switch (ext) {
            case 'jpg':
            case 'JPG':
            case 'PNG':
            case 'png':
            case 'jpeg':
            case 'JPEG':
            case 'pdf':
            case 'PDF':

                break;
            default:
                alert('File Tidak Diizinkan');
                this.value = null;
        }
    };
</script>


</html>

<?php


include('config/koneksi.php');

	if(isset($_POST['SUBMITLAHIR']))

	{

	    
	    $nikuser=$_POST['nikuser'];
		
	$nikpmhon = $_POST['nikpmhon'];
$namapmhon = $_POST['namapmhon'];
$nokkpmhon = $_POST['nokkpmhon'];
$umurpmhon= $_POST['umurpmhon'];
$kwnpmhon= $_POST['kwnpmhon'];



$niksaksi1= $_POST['niksaksi1'];
$namasaksi1= $_POST['namasaksi1'];
$nokksaksi1= $_POST['nokksaksi1'];
$umursaksi1= $_POST['umursaksi1'];
$kwnsaksi1= $_POST['kwnsaksi1'];
$niksaksi2= $_POST['niksaksi2'];
$namasaksi2= $_POST['namasaksi2'];
$nokksaksi2= $_POST['nokksaksi2'];
$umursaksi2= $_POST['umursaksi2'];
$umursaksi2= $_POST['umursaksi2'];
$kwnsaksi2= $_POST['kwnsaksi2'];
$nikayah= $_POST['nikayah'];
$namaayah= $_POST['namaayah'];
$tmptayah= $_POST['tmptayah'];
$pilih_tanggal_pesan= $_POST['pilih_tanggal_pesan'];
$kwnayah= $_POST['kwnayah'];
$nikibu= $_POST['nikibu'];
$namaibu= $_POST['namaibu'];
$tmptibu= $_POST['tmptibu'];
$pilih_tanggal_pesan1= $_POST['pilih_tanggal_pesan1'];
$kwnibu= $_POST['kwnibu'];
$nikanak= $_POST['nikanak'];
$namaanak= $_POST['namaanak'];
$selectedcat= $_POST['selectedcat'];
$selectedcat1= $_POST['selectedcat1'];
$tmtpanak= $_POST['tmtpanak'];
$harilahir= $_POST['harilahir'];
$pilih_tanggal_pesan2= $_POST['pilih_tanggal_pesan2'];
$pilih_jam_pesan= $_POST['pilih_jam_pesan'];
$anakke= $_POST['anakke'];
$selectedcat2= $_POST['selectedcat2'];
$beratanak= $_POST['beratanak'];
$pjganak= $_POST['pjganak'];
$selectedcat3= $_POST['selectedcat3'];

$selectedcat12 = $_POST['selectedcat12'];

	
		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
    $tanggal = date('y-m-d H:i:s');
	
$fileinfo = @getimagesize($_FILES["img1"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );	
    
      $allowed_image_extension2 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );  
        $allowed_image_extension3 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
    
        $allowed_image_extension4 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
$file_extension = pathinfo($_FILES["img1"]["name"], PATHINFO_EXTENSION);
$file_extension2 = pathinfo($_FILES["img2"]["name"], PATHINFO_EXTENSION);
$file_extension3 = pathinfo($_FILES["img3"]["name"], PATHINFO_EXTENSION);
$file_extension4 = pathinfo($_FILES["img4"]["name"], PATHINFO_EXTENSION);



        if (! file_exists($_FILES["img1"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        
       
        	echo "<script>alert('File Buku Nikah/Akta Kawin Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }  
    
       else if (! in_array($file_extension2, $allowed_image_extension2)) {
        
       
        	echo "<script>alert('File Kartu Keluarga Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }  
    
       else if (! in_array($file_extension3, $allowed_image_extension3)) {
        
       
        	echo "<script>alert('File KTP-el Pemohon .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }
    
         else if (! in_array($file_extension4, $allowed_image_extension4)) {
        
       
        	echo "<script>alert('File Surat Ket. Lahir .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }
    
       else if (($_FILES["img1"]["size"] > 5000000 )) {
	echo "<script>alert('File Buku Nikah/Akta Kawin Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    } 




    else if (($_FILES["img2"]["size"] > 5000000 )) {
	echo "<script>alert('File Kartu Keluarga Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    }
    
       else if (($_FILES["img3"]["size"] > 5000000 )) {
	echo "<script>alert('File KTP-el Pemohon Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    }
         else if (($_FILES["img4"]["size"] > 5000000 )) {
	echo "<script>alert('File Surat Ket. Lahir Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    }
  else{			
		$vimage1=$_FILES["img1"]["name"];
		$vimage2=$_FILES["img2"]["name"];
		$vimage3=$_FILES["img3"]["name"];
		$vimage4=$_FILES["img4"]["name"];


		move_uploaded_file($_FILES["img1"]["tmp_name"],"siponcan/files/aktelahir/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"siponcan/files/aktelahir/".$_FILES["img2"]["name"]);
    	move_uploaded_file($_FILES["img3"]["tmp_name"],"siponcan/files/aktelahir/".$_FILES["img3"]["name"]);
		move_uploaded_file($_FILES["img4"]["tmp_name"],"siponcan/files/aktelahir/".$_FILES["img4"]["name"]);

 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 10);

$uuidhtl = "pmaklhr-$time1$uuidhtl0";

		

$sql="INSERT INTO `tb_aktelahir` (`uuid`, `uuid_reg`, `nikpmhon`, `namapmhon`, `nokkpmhon`, `umurpmhon`,
`kwnpmhon`, `klarifikasi`,`niksaksi1`, `namasaksi1`, `nokksaksi1`, `umursaksi1`, `kwnsaksi1`, `niksaksi2`, `namasaksi2`,
`nokksaksi2`, `umursaksi2`, `kwnsaksi2`, `nikayah`, `namaayah`, `tmptayah`, `lhr_ayah`, `kwnayah`, `nikibu`, 
`namaibu`, `tmptibu`, `lhr_ibu`, `kwnibu`, `nikanak`, `namaanak`, `jk`, `tptjnis_lahir`, `tmtpanak`, `harilahir`, 
`tgl_lahiranak`, `jam_lahiranak`, `anakke`, `pnlong_lhr`, `beratanak`, `pjganak`, `kondisi_lahir`, `f_bukunikah`, 

`f_kk`, `f_ktp`, `f_ketlahir`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'Indonesia',
'$selectedcat12',

'$niksaksi1',
'$namasaksi1',
'$nokksaksi1',
'$umursaksi1',
'Indonesia',

'$niksaksi2',
'$namasaksi2',
'$nokksaksi2',
'$umursaksi2',
'Indonesia',

'$nikayah',
'$namaayah',
'$tmptayah',
'$pilih_tanggal_pesan',
'Indonesia',

'$nikibu',
'$namaibu',
'$tmptibu',
'$pilih_tanggal_pesan1',
'Indonesia',

'$nikanak',
'$namaanak',
'$selectedcat',
'$selectedcat1',
'$tmtpanak',
'$harilahir',
'$pilih_tanggal_pesan2',
'$pilih_jam_pesan',
'$anakke',
'$selectedcat2',
'$beratanak',
'$pjganak',
'$selectedcat3',






'$vimage1',
'$vimage2',
'$vimage3',
'$vimage4',
'$tanggal',
'$status',
'0'
)";
  $sql2 = mysqli_query($koneksi, $sql); 
  

  
  
$time=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i', strtotime($time));

$sql334 = "SELECT * FROM register  where nik= '$nikuser'";
$q1334 = mysqli_query($koneksi, $sql334);
$row4=mysqli_fetch_array($q1334);
$no_telpuser = $row4['no_telp'];
$namauser = $row4['nama'];

$sql41="INSERT INTO `tb_pengaduan` (`uuid`, `uuid_pengaduan`, `uuid_reg`, `nama`, `no_hp`,`kd_jenis`, `jenis`,  `pengaduan`, `create-at`, `status`)
VALUES('',
'$uuidhtl',
'$nikuser',
'$namauser',
'$no_telpuser',
'AKKEL',
'Akta Kelahiran',

'',
'$tanggal',
'$status'
)";
  $sql242 = mysqli_query($koneksi, $sql41); 

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$nikuser','Admin','$nikuser','Berkas Akta Kelahiran  Behasil di Upload','wr','1','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Akta Kelahiran Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);
            
			echo "<script>alert('Upload Berkas Berhasil');window.location='home';</script>";
			
			
			
			
			
			
exit;
		
		
	}
	}

	?>
