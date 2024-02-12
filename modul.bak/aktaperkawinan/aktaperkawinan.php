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
            right: -13rem;
            height: 3px;
            width: 10rem;
            background: #262626;
        }
    </style>

<body style="min-height:0px">
    <div class="container">

        <h3 class="text-center mb-4">Pelayanan Pembuatan Akta Kematian</h3>
        <div class="progress-bar-cst">
            <div class="step">
                <p>Pemohon</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Perkawinan</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Saksi</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Berkas</p>
                <div class="bullet">
                    <span>4</span>
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
                                <label for="nokkpmhon" class="field">Email Aktif</label>
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




                    </div>
                    <div class="field" style="
                    margin-top: 50px; height: 45px; width: 72%;
    ">
                        <button class="firstNext next">Selanjutnya</button>
                    </div>
                </div>


                <div class="page">
                    <div class="title mb-4">Perkawinan :</div>
                    <div class="row">

                          <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nik_ayah_s" class="field">NIK Ayah dari Suami</label>
                                <input type="number" name="nik_ayah_s" data-maxlength="16" data-minlength="16" class="form-control" id="nik_ayah_s" aria-describedby="emailHelp" required>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nama_ayah_s" class="field">Nama Ayah dari Suami</label>
                                <input type="text" class="form-control" name="nama_ayah_s" id="nama_ayah_s" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nik_ibu_s" class="field">NIK Ibu dari Suami</label>
                                <input type="number" class="form-control" id="nik_ibu_s" name="nik_ibu_s" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                     
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nama_ibu_s" class="field">Nama Ibu dari Suami</label>
                                <input type="text" class="form-control" id="nama_ibu_s" name="nama_ibu_s" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nik_ayah_is" class="field">NIK Ayah dari Istri</label>
                                <input type="number" class="form-control" id="nik_ayah_is" name="nik_ayah_is" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nama_ayah_is" class="field">Nama Ayah dari Istri</label>
                                <input type="text" class="form-control" id="nama_ayah_is" name="nama_ayah_is" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nik_ibu_is" class="field">NIK Ibu dari Istri</label>
                                <input type="number" class="form-control" name="nik_ibu_is" name="nik_ibu_is" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nama_ibu_is" class="field">Nama Ibu dari Istri</label>
                                <input type="text" class="form-control" id="nama_ibu_is" name="nama_ibu_is" aria-describedby="emailHelp" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="selectedcat" class="field">Status Perkawinan Sebelum Kawin</label>
                                <select class="custom-select" name="selectedcat" id="selectedcat" required>
                                    <option hidden>Pilih</option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                    <option value="Cerai Mati">Cerai Mati</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="kawin_ke" class="field">Perkawinan Yang Ke-</label>
                                <input type="number" name="kawin_ke" class="form-control" id="kawin_ke" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="istri_ke" class="field">Istri yang ke- (Jika Poligami)</label>
                                <input type="number" name="istri_ke" class="form-control" id="istri_ke" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="pilih_tanggal_pesan" class="field">Tanggal Akad/Pemberkatan Perkawinan</label>
                                <input type="date" name="pilih_tanggal_pesan" class="form-control" id="pilih_tanggal_pesan" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="pilih_tanggal_selesai" class="field">Tanggal Melapor</label>
                                <input type="date" name="pilih_tanggal_selesai" class="form-control" id="pilih_tanggal_selesai" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="pilih_tanggal_selesai" class="field">Jam Pelaporan</label>
                                <input type="time" name="pilih_jam_pesan" class="form-control" id="pilih_tanggal_selesai" aria-describedby="emailHelp" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="selectedcat1" class="field">Agama</label>
                                <select class="custom-select" name="selectedcat1" required>
                                <option hidden>Pilih</option>
                   
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                              <option value="Kepercayaan Lainnya">Kepercayaan Lainnya</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nm_organisasi" class="field">Nama Organisasi Kepercayaan</label>
                                <input type="text" class="form-control" name="nm_organisasi" id="nm_organisasi" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="ket_organisasi" class="field">Nama Pemuka Agama/Kepercayaan</label>
                                <input type="text" class="form-control" name="ket_organisasi" id="ket_organisasi" aria-describedby="emailHelp" required>
                            </div>
                        </div>

                        <!-- end saksi2 -->



                    </div>
                    <div class=" field btns  mr-3" style="
                      margin-top: 50px;height: 45px; width: 100%;">
                        <button class="prev-1 prev btn-cst">Sebelumnya</button>
                        <button class="next-1 next btn-cst">Selanjutnya</button>
                    </div>
                </div>

                <!-- end halaman saksi -->





                <!-- halaman data jenaazah -->
                <div class="page">
                    <div class="title mb-4">Saksi :</div>
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
                        <!-- end saksi2 -->

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
                                <label for="" class="field">Surat Kawin</label>
                                <input type="file" name="img1" class="form-control-file btn btn-outline-secondary" id="uploadakm" required>
                                <small class="field text-left" style="font-size: 12px;">Ket: Surat Kawin dari Pemuka Agama (*.jpg *.png *.pdf)</small>
                            </div>

                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">Pas Foto Gandeng berwarna Ukuran 4 X 6</label>
                                <input type="file" name="img2" class="form-control-file btn btn-outline-secondary" id="uploadakm2" required>
                                <small class="field text-left" style="font-size: 12px;">Ket: Pas Foto Gandeng berwarna ukuran 4x6 (*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">Kartu Keluarga</label>
                                <input type="file" name="img3" class="form-control-file btn btn-outline-secondary" id="uploadakm3" required>
                                <small class="field text-left" style="font-size: 12px;">Gunakan KK Suami Jika Belum Satu KK dengan Istri(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">Kartu Keluarga Istri</label>
                                <input type="file" name="img4" class="form-control-file btn btn-outline-secondary" id="uploadakm4" required>
                                <small class="field text-left" style="font-size: 12px;">Jika Istri Belum Satu KK dengan Suami(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">KTP-el Suami</label>
                                <input type="file" name="img5" class="form-control-file btn btn-outline-secondary" id="uploadakm5" required>
                                <small class="field text-left" style="font-size: 12px;">(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">KTP-el Istri</label>
                                <input type="file" name="img6" class="form-control-file btn btn-outline-secondary" id="uploadakm6" required>
                                <small class="field text-left" style="font-size: 12px;">(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">Akte Kutipan</label>
                                <input type="file" name="img7" class="form-control-file btn btn-outline-secondary" id="uploadakm7" required>
                                <small class="field text-left" style="font-size: 12px;">Ket: Kutipan Akte Perceraian atau Kutipan Akte Kematian Bagi Pernikahan Ke-2 atau Lebih(*.jpg *.png *.pdf)</small>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="form-group">
                                <label for="" class="field">KTP-el Pemohon</label>
                                <input type="file" name="img8" class="form-control-file btn btn-outline-secondary" id="uploadakm8" required>
                                <small class="field text-left" style="font-size: 12px;">(*.jpg *.png *.pdf)</small>
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
                        <button name="SUBMIT1" class="submit">Kirim</button>
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
<script>
    var file5 = document.getElementById('uploadakm5');

    file5.onchange = function(e) {
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
    var file6 = document.getElementById('uploadakm6');

    file6.onchange = function(e) {
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
    var file7 = document.getElementById('uploadakm7');

    file7.onchange = function(e) {
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
    var file8 = document.getElementById('uploadakm8');

    file8.onchange = function(e) {
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
include 'config/koneksi.php';

	if(isset($_POST['SUBMIT1']))

	{

	    
	    $nikuser=$_POST['nikuser'];
		
		$nikpmhon=$_POST['nikpmhon'];
		$namapmhon=$_POST['namapmhon'];
		$nokkpmhon=$_POST['nokkpmhon'];
		$umurpmhon=$_POST['umurpmhon'];
		$kwnpmhon=$_POST['kwnpmhon'];
		
	$niksaksi1=$_POST['niksaksi1'];
	$namasaksi1=$_POST['namasaksi1'];
	$nokksaksi1=$_POST['nokksaksi1'];
	$umursaksi1=$_POST['umursaksi1'];
	$kwnsaksi1=$_POST['kwnsaksi1'];
	$niksaksi2=$_POST['niksaksi2'];
	$namasaksi2=$_POST['namasaksi2'];
	$nokksaksi2=$_POST['nokksaksi2'];
	$umurksaksi2=$_POST['umurksaksi2'];
	$kwnsaksi2=$_POST['kwnsaksi2'];
	$nik_ayah_s=$_POST['nik_ayah_s'];
	$nama_ayah_s=$_POST['nama_ayah_s'];
	$nik_ibu_s=$_POST['nik_ibu_s'];
	$nama_ibu_s=$_POST['nama_ibu_s'];
	$nik_ayah_is=$_POST['nik_ayah_is'];
	$nama_ayah_is=$_POST['nama_ayah_is'];
	$nik_ibu_is=$_POST['nik_ibu_is'];
	$nama_ibu_is=$_POST['nama_ibu_is'];
	$selectedcat=$_POST['selectedcat'];
	$kawin_ke=$_POST['kawin_ke'];
	$istri_ke=$_POST['istri_ke'];
	$pilih_tanggal_pesan=$_POST['pilih_tanggal_pesan'];
	$pilih_tanggal_selesai=$_POST['pilih_tanggal_selesai'];
	$pilih_jam_pesan=$_POST['pilih_jam_pesan'];
	
	$selectedcat1=$_POST['selectedcat1'];
	$nm_organisasi=$_POST['nm_organisasi'];
	$ket_organisasi=$_POST['ket_organisasi'];
				
		
		
		
		
		
		
	
		$status="Upload Berkas";
		$konvirm="1";	
   $tanggal = date('y-m-d H:i:s');
$tanggal = date('y-m-d H:i:s', strtotime($tanggal.'+7 hour'));

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
    	   $allowed_image_extension5 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
    	   $allowed_image_extension6 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
    	   $allowed_image_extension7 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
    	   $allowed_image_extension8 = array(
        "png",
        "jpg",
        "jpeg",
        "pdf"
    );
// Get image file extension
    $file_extension = pathinfo($_FILES["img1"]["name"], PATHINFO_EXTENSION);
    $file_extension2 = pathinfo($_FILES["img2"]["name"], PATHINFO_EXTENSION);
    $file_extension3 = pathinfo($_FILES["img3"]["name"], PATHINFO_EXTENSION);
    $file_extension4 = pathinfo($_FILES["img4"]["name"], PATHINFO_EXTENSION);
    $file_extension5 = pathinfo($_FILES["img5"]["name"], PATHINFO_EXTENSION);
    $file_extension6 = pathinfo($_FILES["img6"]["name"], PATHINFO_EXTENSION);
    $file_extension7 = pathinfo($_FILES["img7"]["name"], PATHINFO_EXTENSION);
    $file_extension8 = pathinfo($_FILES["img8"]["name"], PATHINFO_EXTENSION);
                            
    
    
       if (! file_exists($_FILES["img1"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    
    else if (! in_array($file_extension, $allowed_image_extension)) {
        
       
        	echo "<script>alert('File Surat Kawin Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    } 
    
    
        else if (! in_array($file_extension2, $allowed_image_extension2)) {
        
       
        	echo "<script>alert('File Pas Foto Gandeng berwarna Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    } 
    
    
        else if (! in_array($file_extension3, $allowed_image_extension3)) {
        
       
        	echo "<script>alert('File Kartu Keluarga Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    } 
    
           else if (! in_array($file_extension4, $allowed_image_extension4)) {
        
       
        	echo "<script>alert('File Kartu Keluarga Istri Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    } 
    
            else if (! in_array($file_extension5, $allowed_image_extension5)) {
        
       
        	echo "<script>alert('File KTP-el Suami Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }
    
                else if (! in_array($file_extension6, $allowed_image_extension6)) {
        
       
        	echo "<script>alert('File KTP-el Istri Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }
    
                 else if (! in_array($file_extension7, $allowed_image_extension7)) {
        
       
        	echo "<script>alert('File Akte Kutipan Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }
    
                else if (! in_array($file_extension8, $allowed_image_extension8)) {
        
       
        	echo "<script>alert('File KTP-el Pemohon Harus .jpg .png .jpeg .pdf');</script>";
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }
    
	       else if (($_FILES["img1"]["size"] > 5000000 )) {
	echo "<script>alert('File Surat Kawin Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    }
    
    
    
    	       else if (($_FILES["img2"]["size"] > 5000000 )) {
	echo "<script>alert('File Pas Foto Gandeng berwarna Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    }
    
    
    	       else if (($_FILES["img3"]["size"] > 5000000 )) {
	echo "<script>alert('File Kartu Keluarga Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    }
    
       	       else if (($_FILES["img4"]["size"] > 5000000 )) {
	echo "<script>alert('File Kartu Keluarga Istri Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    } 
    
           	       else if (($_FILES["img5"]["size"] > 5000000 )) {
	echo "<script>alert('File KTP-el Suami Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    } 
    
    
               	       else if (($_FILES["img6"]["size"] > 5000000 )) {
	echo "<script>alert('File KTP-el Istri Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    } 
    
    
                  	       else if (($_FILES["img7"]["size"] > 5000000 )) {
	echo "<script>alert('File Akte Kutipan Maksimal 5 Mb');</script>";
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds MMB"
        );
    }  
                     	       else if (($_FILES["img8"]["size"] > 5000000 )) {
	echo "<script>alert('File KTP-el Pemohon Maksimal 5 Mb');</script>";
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
          $vimage5=$_FILES["img5"]["name"];
           $vimage6=$_FILES["img6"]["name"];
            $vimage7=$_FILES["img7"]["name"];
            $vimage8=$_FILES["img8"]["name"];

		move_uploaded_file($_FILES["img1"]["tmp_name"],"siponcan/files/aktekawin/".$_FILES["img1"]["name"]);
		move_uploaded_file($_FILES["img2"]["tmp_name"],"siponcan/files/aktekawin/".$_FILES["img2"]["name"]);
		move_uploaded_file($_FILES["img3"]["tmp_name"],"siponcan/files/aktekawin/".$_FILES["img3"]["name"]);
		move_uploaded_file($_FILES["img4"]["tmp_name"],"siponcan/files/aktekawin/".$_FILES["img4"]["name"]);
		move_uploaded_file($_FILES["img5"]["tmp_name"],"siponcan/files/aktekawin/".$_FILES["img5"]["name"]);
		move_uploaded_file($_FILES["img6"]["tmp_name"],"siponcan/files/aktekawin/".$_FILES["img6"]["name"]);		
		move_uploaded_file($_FILES["img7"]["tmp_name"],"siponcan/files/aktekawin/".$_FILES["img7"]["name"]);
		move_uploaded_file($_FILES["img8"]["tmp_name"],"siponcan/files/aktekawin/".$_FILES["img8"]["name"]);
	
		
 $time1 = date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Jakarta");
$time1 = date('YmdHis');


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 12);

$uuidhtl = "pmkaktkwn-$time1$uuidhtl0";

		

$sql="INSERT INTO `tb_aktekawin` (`uuid`, `uuid_reg`, `nik_pm`, `nama_pm`, `nokk_pm`, `umur_pm`, `kwn`, 
`nik_saksi1`, `nama_saksi1`, `nokk_saksi1`, `umur_saksi1`, `kwn_saksi1`, `nik_saksi2`, `nama_saksi2`, 
`nokk_saksi2`, `umur_saksi2`, `kwn_saksi2`, `nik_ayah_s`, `nama_ayah_s`, `nik_ibu_s`, `nama_ibu_s`,
`nik_ayah_is`, `nama_ayah_is`, `nik_ibu_is`, `nama_ibu_is`, `status__kawin`, `kawin_ke`, `istri_ke`,
`tannggal_kawin`, `tanggal_lapor`, `jam_pelapor`, `agama`, `nama_organisasi_kep`, `nama_pemuka_kep`,
`f_suratkawin`, `f_foto`, `f_kk`, `f_kkIstri`, `f_ktpuami`, `f_ktpistri`, `f_aktekutipan`, 
`f_ktppemohon`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'Indonesia',


'$niksaksi1',
'$namasaksi1',
'$nokksaksi1',
'$umursaksi1',
'Indonesia',
'$niksaksi2',
'$namasaksi2',
'$nokksaksi2',
'$umurksaksi2',
'Indonesia',
'$nik_ayah_s',
'$nama_ayah_s',
'$nik_ibu_s',
'$nama_ibu_s',
'$nik_ayah_is',
'$nama_ayah_is',
'$nik_ibu_is',

'$nama_ibu_is',
'$selectedcat',
'$kawin_ke',
'$istri_ke',
'$pilih_tanggal_pesan',
'$pilih_tanggal_selesai',
'$pilih_jam_pesan',
'$selectedcat1',
'$nm_organisasi',
'$ket_organisasi',
'$vimage1',
'$vimage2',
'$vimage3',
'$vimage4',
'$vimage5',
'$vimage6',
'$vimage7',
'$vimage8',
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

$sql41="INSERT INTO `tb_pengaduan` (`uuid`, `uuid_pengaduan`, `uuid_reg`, `nama`, `no_hp`,  `kd_jenis`, `jenis`, `pengaduan`, `create-at`, `status`)
VALUES('',
'$uuidhtl',
'$nikuser',
'$namauser',
'$no_telpuser',
'AKWIN',
'Akta Perkawinan',
'',
'$tanggal',
'$status'
)";
  $sql242 = mysqli_query($koneksi, $sql41); 

$sql45 ="insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$nikuser','Admin','$nikuser','Berkas Akta Perkawinan Behasil di Upload','wr','1','$time','$tanggal')";
            $q152 = mysqli_query($koneksi,$sql45); 

$sq51 = " update chatgroup set pesan= 'Berkas Akta Perkawinan Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
		 $sq52 = mysqli_query($koneksi,$sq51);
    echo "<script>alert('Upload Berkas Berhasil');window.location='home';</script>";
			
			
			
			
			
			
exit;
		
		
	}
	
}
	?>