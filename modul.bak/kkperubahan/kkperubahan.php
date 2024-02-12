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
            right: -12rem;
            height: 3px;
            width: 10rem;
            background: #262626;
        }
    </style>

<body style="min-height:0px">
    <div class="container">

        <h3 class="text-center mb-4">Pelayanan Perubahan Data Kartu Keluarga</h3>
        <div class="progress-bar-cst">
            <div class="step">
                <p>Pemohon</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>


 <div class="step">
                <p>Rincian</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            
             <div class="step">
                <p>Perubahan</p>
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
                                <label for="nokkpmhon" class="field">No. KK</label>
                                <input type="number" class="form-control" name="nokkpmhon" id="nokkpmhon" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="umurpmhon" class="field">Umur</label>
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
                  margin-top: 50px; height: 45px; width: 69%; ">
                        <button class="firstNext next">Selanjutnya</button>
                    </div>
                </div>


<div class="page">
        <div class="title">Rincian KK:</div>
  <label for="niksaksi1" class="field text-primary" style="font-weight:bold;">Data 1</label>

        <div class="row">


   <div class="col-lg-6">
        
            <div class="form-group">
                <label for="niksaksi1" class="field">NIK</label>
                <input type="number" name="" data-maxlength="16" data-minlength="16" class="form-control" id="niksaksi1"
                    aria-describedby="emailHelp" required>
            </div>
        </div>

 <div class="col-lg-6">
            <div class="form-group">
                <label for="nokkpmhon" class="field">Nama Lengkap (Sesuai KTP)</label>
                <input type="text" class="form-control" name="" id="nokkpmhon" aria-describedby="emailHelp" required>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="form-group">
                <label for="jk" class="field">SHDK</label>
                <select class="custom-select" name="selectedcat" required>
                    <option hidden>Pilih</option>
                    <option value="Suami">Suami</option>
                    <option value="Istri">Istri</option>
                    <option value="Anak">Anak</option>
                    <option value="Menantu">Menantu</option>
                    <option value="Cucu">Cucu</option>
                    <option value="Orang Tua">Orang Tua</option>
                    <option value="Mertua">Mertua</option>
                    <option value="Famili Lain">Famili Lain</option>
                    <option value="Pembantu">Pembantu</option>
                    <option value="Lainnya">Lainnya</option>

                </select>
            </div>
        </div>
            
            
            
            
            <div class="col-lg-6">

            <div class="form-group">
                <label for="umursaksi1" class="field">Keterangan</label>
                <input type="text" class="form-control" id="umursaksi1" name="umursaksi1" aria-describedby="emailHelp"
                    required>
            </div>
        </div>
        <hr>
<div class="col-lg-12">
      <label for="niksaksi1" class="field text-primary" style="font-weight:bold;">Data 2</label>
</div>
        <div class="col-lg-6">
        
            <div class="form-group">
                <label for="niksaksi1" class="field">NIK</label>
                <input type="number" name="" data-maxlength="16" data-minlength="16" class="form-control" id="niksaksi1"
                    aria-describedby="emailHelp" required>
            </div>
        </div>

 <div class="col-lg-6">
            <div class="form-group">
                <label for="nokkpmhon" class="field">Nama Lengkap (Sesuai KTP)</label>
                <input type="text" class="form-control" name="" id="nokkpmhon" aria-describedby="emailHelp" required>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="form-group">
                <label for="jk" class="field">SHDK</label>
                <select class="custom-select" name="selectedcat" required>
                    <option hidden>Pilih</option>
                    <option value="Suami">Suami</option>
                    <option value="Istri">Istri</option>
                    <option value="Anak">Anak</option>
                    <option value="Menantu">Menantu</option>
                    <option value="Cucu">Cucu</option>
                    <option value="Orang Tua">Orang Tua</option>
                    <option value="Mertua">Mertua</option>
                    <option value="Famili Lain">Famili Lain</option>
                    <option value="Pembantu">Pembantu</option>
                    <option value="Lainnya">Lainnya</option>

                </select>
            </div>
        </div>
            
            
            
            
            <div class="col-lg-6">

            <div class="form-group">
                <label for="umursaksi1" class="field">Keterangan</label>
                <input type="text" class="form-control" id="umursaksi1" name="umursaksi1" aria-describedby="emailHelp"
                    required>
            </div>
        </div>
        <hr>






         


        </div>
        <div class=" field btns  mr-3" style="
                      margin-top: 50px;height: 45px; width: 100%;">
            <button class="prev-1 prev btn-cst">Sebelumnya</button>
            <button class="next-1 next btn-cst" >Selanjutnya</button>
        </div>
    </div>



<!--PERUBAHAN-->


<div class="page">
        <div class="title">Perubahan KK:</div>
  <label class="field text-primary" style="font-weight:bold;">Data 1</label>
  <label class="field" style="font-weight:bold; font-style: italic;">Pendidikan Terakhir</label>

        <div class="row">


    <div class="col-lg-6">
        
            <div class="form-group">
                <label for="niksaksi1" class="field">Semula</label>
                <input type="text" name="" class="form-control" id="niksaksi1"
                    aria-describedby="emailHelp" required>
            </div>
        </div>


 <div class="col-lg-6">
            <div class="form-group">
                <label for="menjadi1" class="field">Menjadi</label>
                <input type="text" class="form-control" name="" id="menjadi1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="dasarperubahan1" class="field">Dasar Perubahan</label>
                <input type="text" class="form-control" name="" id="dasarperubahan1" aria-describedby="emailHelp" required>
            </div>
        </div>
        
         <div class="col-lg-6">
            <div class="form-group">
                <label for="keterangan1" class="field">Keterangan</label>
                <input type="text" class="form-control" name="" id="keterangan1" aria-describedby="emailHelp" required>
            </div>
        </div>
        
             <hr>
<div class="col-lg-12">
      <label  class="field" style="font-weight:bold;">Pekerjaan</label>
</div>

 <div class="col-lg-6">
<div class="form-group">
                <label for="niksaksi1" class="field">Semula</label>
                <input type="text" name="" class="form-control" id="niksaksi1"
                    aria-describedby="emailHelp" required>
            </div>
        </div>
        
         <div class="col-lg-6">
            <div class="form-group">
                <label for="menjadi1" class="field">Menjadi</label>
                <input type="text" class="form-control" name="" id="menjadi1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="dasarperubahan1" class="field">Dasar Perubahan</label>
                <input type="text" class="form-control" name="" id="dasarperubahan1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="keterangan1" class="field">Keterangan</label>
                <input type="text" class="form-control" name="" id="keterangan1" aria-describedby="emailHelp" required>
            </div>
        </div>
        
        
              <hr>
<div class="col-lg-12">
      <label  class="field" style="font-weight:bold;">Agama:</label>
</div>

 <div class="col-lg-6">
<div class="form-group">
                <label for="niksaksi1" class="field">Semula</label>
                <input type="text" name="" class="form-control" id="niksaksi1"
                    aria-describedby="emailHelp" required>
            </div>
        </div>
        
         <div class="col-lg-6">
            <div class="form-group">
                <label for="menjadi1" class="field">Menjadi</label>
                <input type="text" class="form-control" name="" id="menjadi1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="dasarperubahan1" class="field">Dasar Perubahan</label>
                <input type="text" class="form-control" name="" id="dasarperubahan1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="keterangan1" class="field">Keterangan</label>
                <input type="text" class="form-control" name="" id="keterangan1" aria-describedby="emailHelp" required>
            </div>
        </div>
        
        
              <hr>
<div class="col-lg-12">
      <label  class="field" style="font-weight:bold;">Lainnya</label>
</div>

 <div class="col-lg-6">
<div class="form-group">
                <label for="niksaksi1" class="field">Semula</label>
                <input type="text" name="" class="form-control" id="niksaksi1"
                    aria-describedby="emailHelp" required>
            </div>
        </div>
        
         <div class="col-lg-6">
            <div class="form-group">
                <label for="menjadi1" class="field">Menjadi</label>
                <input type="text" class="form-control" name="" id="menjadi1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="dasarperubahan1" class="field">Dasar Perubahan</label>
                <input type="text" class="form-control" name="" id="dasarperubahan1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="keterangan1" class="field">Keterangan</label>
                <input type="text" class="form-control" name="" id="keterangan1" aria-describedby="emailHelp" required>
            </div>
        </div>
            
           
         
        </div>
        
        
        
        <!--data2-->
   <div class="row">

  <div class="col-lg-12">
      <label class="field text-primary" style="font-weight:bold;">Data 2</label>
      <label class="field" style="font-weight:bold; font-style: italic;">Pendidikan Terakhir</label>
  </div>
    <div class="col-lg-6">
        
            <div class="form-group">
                <label for="niksaksi1" class="field">Semula</label>
                <input type="text" name="" class="form-control" id="niksaksi1"
                    aria-describedby="emailHelp" required>
            </div>
        </div>


 <div class="col-lg-6">
            <div class="form-group">
                <label for="menjadi1" class="field">Menjadi</label>
                <input type="text" class="form-control" name="" id="menjadi1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="dasarperubahan1" class="field">Dasar Perubahan</label>
                <input type="text" class="form-control" name="" id="dasarperubahan1" aria-describedby="emailHelp" required>
            </div>
        </div>
        
         <div class="col-lg-6">
            <div class="form-group">
                <label for="keterangan1" class="field">Keterangan</label>
                <input type="text" class="form-control" name="" id="keterangan1" aria-describedby="emailHelp" required>
            </div>
        </div>
        
             <hr>
<div class="col-lg-12">
      <label  class="field" style="font-weight:bold;">Pekerjaan</label>
</div>

 <div class="col-lg-6">
<div class="form-group">
                <label for="niksaksi1" class="field">Semula</label>
                <input type="text" name="" class="form-control" id="niksaksi1"
                    aria-describedby="emailHelp" required>
            </div>
        </div>
        
         <div class="col-lg-6">
            <div class="form-group">
                <label for="menjadi1" class="field">Menjadi</label>
                <input type="text" class="form-control" name="" id="menjadi1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="dasarperubahan1" class="field">Dasar Perubahan</label>
                <input type="text" class="form-control" name="" id="dasarperubahan1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="keterangan1" class="field">Keterangan</label>
                <input type="text" class="form-control" name="" id="keterangan1" aria-describedby="emailHelp" required>
            </div>
        </div>
        
        
              <hr>
<div class="col-lg-12">
      <label  class="field" style="font-weight:bold;">Agama:</label>
</div>

 <div class="col-lg-6">
<div class="form-group">
                <label for="niksaksi1" class="field">Semula</label>
                <input type="text" name="" class="form-control" id="niksaksi1"
                    aria-describedby="emailHelp" required>
            </div>
        </div>
        
         <div class="col-lg-6">
            <div class="form-group">
                <label for="menjadi1" class="field">Menjadi</label>
                <input type="text" class="form-control" name="" id="menjadi1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="dasarperubahan1" class="field">Dasar Perubahan</label>
                <input type="text" class="form-control" name="" id="dasarperubahan1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="keterangan1" class="field">Keterangan</label>
                <input type="text" class="form-control" name="" id="keterangan1" aria-describedby="emailHelp" required>
            </div>
        </div>
        
        
              <hr>
<div class="col-lg-12">
      <label  class="field" style="font-weight:bold;">Lainnya</label>
</div>

 <div class="col-lg-6">
<div class="form-group">
                <label for="niksaksi1" class="field">Semula</label>
                <input type="text" name="" class="form-control" id="niksaksi1"
                    aria-describedby="emailHelp" required>
            </div>
        </div>
        
         <div class="col-lg-6">
            <div class="form-group">
                <label for="menjadi1" class="field">Menjadi</label>
                <input type="text" class="form-control" name="" id="menjadi1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="dasarperubahan1" class="field">Dasar Perubahan</label>
                <input type="text" class="form-control" name="" id="dasarperubahan1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="keterangan1" class="field">Keterangan</label>
                <input type="text" class="form-control" name="" id="keterangan1" aria-describedby="emailHelp" required>
            </div>
        </div>
            
           
         
        </div>

<!--endata2-->




        
        <div class=" field btns  mr-3" style="
                      margin-top: 50px;height: 45px; width: 100%;">
            <button class="prev-1 prev btn-cst">Sebelumnya</button>
            <button class="next-1 next btn-cst" >Selanjutnya</button>
        </div>
    </div>



<!--PERUABAHN-->




    <div class="page">
        <div class="title">Berkas:</div>
        <div class="info text-danger mb-4">*Maks.Size Upload 5MB</div>

        <div class="row">




            <div class="col-lg-6 mt-4">
                <div class="form-group">
                    <label for="" class="field">Kartu Keluarga</label>
                    <input type="file" name="img1" class="form-control-file btn btn-outline-secondary" id="uploadakm" required>
                    <small class="field text-left" style="font-size: 12px;">(*.jpg *.png *.pdf)</small>
                </div>

            </div>
            <div class="col-lg-6 mt-4">
                <div class="form-group">
                    <label for="" class="field">Bukti Perubahan Data</label>
                    <input type="file" name="img2" class="form-control-file btn btn-outline-secondary" id="uploadakm2" required>
                    <small class="field text-left" style="font-size: 12px;">Akte Kelahiran / Ijazah (*.jpg *.png *.pdf)</small>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="form-group">
                    <label for="" class="field">KTP-el Pemohon </label>
                    <input type="file" name="img3" class="form-control-file btn btn-outline-secondary" id="uploadakm3" required>
                    <small class="field text-left" style="font-size: 12px;">(*.jpg *.png *.pdf)</small>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="form-group">
                    <label for="" class="field">Buku Nikah / Akta Kawin</label>
                    <input type="file" name="img4" class="form-control-file btn btn-outline-secondary" id="uploadakm4" required>
                    <small class="field text-left" style="font-size: 12px;">(*.jpg *.png *.pdf)</small>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="form-group">
                    <label for="" class="field">Surat Pernyataan F-1.06</label>
                 
                    <div class="info text-danger mb-2">   <a href="sptjm/F-1.06-FORM-SURAT-PERNYATAAN-PERUBAHAN-DATA.pdf" download="F-1.06-FORM-SURAT-PERNYATAAN-PERUBAHAN-DATA.pdf">[Download Surat Pernyataaan]</a></div>
                    <input type="file" name="img5" class="form-control-file btn btn-outline-secondary" id="uploadakm5" required>
                    <small class="field text-left" style="font-size: 12px;">cetak surat pernyataan dengan huruf kapital/besar, kemudian di isi dan ditandatangani dengan materai, lalu diupload pada kolom surat pernyataan (*.jpg *.png *.pdf)</small>
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
            <button name="SUBMITPPDK" class="submit">Kirim</button>
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
    
   $(".prev-1").click(function() {
  $("html, body").animate({ scrollTop: 20 }, "slow");
  return false;
});

    
   $(".next-1").click(function() {
  $("html, body").animate({ scrollTop: 20 }, "slow");
  return false;
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



</html>


<?php


include('config/koneksi.php');

if (isset($_POST['SUBMITPPDK']))
  {


    $nikuser = $_POST['nikuser'];

    $nikpmhon = $_POST['nikpmhon'];
    $namapmhon = $_POST['namapmhon'];
    $nokkpmhon = $_POST['nokkpmhon'];
    $umurpmhon = $_POST['umurpmhon'];
    $kwnpmhon = $_POST['kwnpmhon'];








    $status = "Upload Berkas";
    $konvirm = "1";
    $tanggal = date('y-m-d H:i:s');
    $tanggal = date('y-m-d H:i:s');


    $vimage1 = $_FILES["img1"]["name"];
    $vimage2 = $_FILES["img2"]["name"];
    $vimage3 = $_FILES["img3"]["name"];
    $vimage4 = $_FILES["img4"]["name"];
    $vimage5 = $_FILES["img5"]["name"];

    move_uploaded_file($_FILES["img1"]["tmp_name"], "../files/kkperubahandata/" . $_FILES["img1"]["name"]);
    move_uploaded_file($_FILES["img2"]["tmp_name"], "../files/kkperubahandata/" . $_FILES["img2"]["name"]);
    move_uploaded_file($_FILES["img3"]["tmp_name"], "../files/kkperubahandata/" . $_FILES["img3"]["name"]);
    move_uploaded_file($_FILES["img4"]["tmp_name"], "../files/kkperubahandata/" . $_FILES["img4"]["name"]);
    move_uploaded_file($_FILES["img5"]["tmp_name"], "../files/kkperubahandata/" . $_FILES["img5"]["name"]);

    $time1 = date('Y-m-d H:i:s');
    date_default_timezone_set("Asia/Jakarta");
    $time1 = date('YmdHis');


    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
    // Output: 54esmdr0qf
    $uuidhtl0 = substr(str_shuffle($permitted_chars), 0, 12);

    $uuidhtl = "pmkkpd-$time1$uuidhtl0";



    $sql = "INSERT INTO `kk_perubahan_data` (`uuid`, `uuid_reg`, `nik_pm`, `nama_pm`, `nokk_pm`,
`umur_pm`, `kwn_pm`, `f_kk`, `f_buktidata`, `f_f16`, `f_ktp`, `f_bukunikah`, `create-at`, `status`, `konvirm`)

VALUES('$uuidhtl',
'$nikuser',
'$nikpmhon',
'$namapmhon',
'$nokkpmhon',
'$umurpmhon',
'Indonesia',


'$vimage1',
'$vimage2',
'$vimage3',
'$vimage4',
'$vimage5',
'$tanggal',
'$status',
'0'
)";
    $sql2 = mysqli_query($koneksi, $sql);




    $time = date('H:i');
    date_default_timezone_set("Asia/Jakarta");
    $time = date('H:i', strtotime($time));

    $sql334 = "SELECT * FROM register  where nik= '$nikuser'";
    $q1334 = mysqli_query($koneksi, $sql334);
    $row4 = mysqli_fetch_array($q1334);
    $no_telpuser = $row4['no_telp'];
    $namauser = $row4['nama'];

    $sql41 = "INSERT INTO `tb_pengaduan` (`uuid`, `uuid_pengaduan`, `uuid_reg`, `nama`, `no_hp`,  `kd_jenis`, `jenis`, `pengaduan`, `create-at`, `status`)
VALUES('',
'$uuidhtl',
'$nikuser',
'$namauser',
'$no_telpuser',
'PDPDKK',
'Kartu Keluarga',
'Perubahan Data atau Perbaikan Data di Kartu Keluarga',
'$tanggal',
'$status'
)";
    $sql242 = mysqli_query($koneksi, $sql41);

    $sql45 = "insert into chat (id,nm_grp,nm_grp1,dari,kepada,pesan,status,bunyi,jam,tanggal) 
values ('','Admin','$nikuser','Admin','$nikuser','Berkas Kartu Keluarga Perubahan Data Behasil di Upload','wr','0','$time','$tanggal')";
    $q152 = mysqli_query($koneksi, $sql45);

    $sq51 = " update chatgroup set pesan= 'Berkas Kartu Keluarga Perubahan Data Behasil di Upload',
                                tanggal = '$tanggal'
    where  nm_grp = '$nikuser'  ";
    $sq52 = mysqli_query($koneksi, $sq51);


    echo "<script>alert('Upload Berkas Berhasil');window.location='home';</script>";






    exit;
}


?>