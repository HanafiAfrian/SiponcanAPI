<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <section>
        <br>
        <br><br>
        <div class="container">
            <h3 class="text-center mb-4">Pelayanan Pembuatan Perubahan Kartu Tanda Penduduk</h3>
    
            <form>
              <section>
                  <div class="container">
           
             
                          <h6 class="mb-4 mt-4"><span style="background-color: #64b5f6 ;border-radius:50px;padding: 5px; width: 30px;text-align: center;">2.</span> Upload Berkas</h6>
                          <small><span class="text-danger">*Maks.Size Upload 5MB</span></small>
                          <div class="row">

                            <div class="col-lg-6 mt-4">
                                <div class="form-group">
                                <label for="">Foto KK terbaru</label>
                                    <input type="file" class="form-control-file btn btn-outline-secondary"
                                    id="exampleFormControlFile1" required>
                                    <small>(*.jpg *.png *.pdf)</small>
                                </div>
                            </div>
                              <div class="col-lg-6 mt-4">
                                <div class="form-group">
                                <label for="">Foto KTP Asli yang Rusak</label>
                                    <input type="file" class="form-control-file btn btn-outline-secondary"
                                    id="exampleFormControlFile1" required>
                                    <small>KTP yg belum berubah(*.jpg *.png *.pdf)</small>
                                </div>
                            
                            </div>
                          <!-- data ibu -->
              
                          <!-- tes -->
              
              
                          <!-- tes -->
              
                          <div class="row">
              
              
                              <div class="col-lg-12 mt-4">
                                  <span>Pernyataan: Demikian formulir serta dokumen persyaratn ini saya/kami buat dengan sesungguhnya. Apabila keterangan tersebut tidak sesuaidengan keadaan sebenarnya, saya/kami bersedia dikenakan sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.</span>
                              </div>
              
                              <div class="col-lg-12 mt-4">
                                  <div class="custom-control custom-checkbox mb-3">
                                      <input type="checkbox"  class="custom-control-input" id="chkbx" required>
                                      <label class="custom-control-label" for="chkbx"><span>Centang ini sebagai pengganti tanda tangan pemohon/pelapor</span></label>
              
                                  </div>
                              </div>
              
                          </div>
                          <!-- data ibu -->
   
              
                          <button id="save" class="btn btn-primary">Submit</button>
                  </div>
              </section>
                   
            </form>
              <script>
                      
              $(document).ready(function(){
                  $('#save').prop('disabled', true);
              
                  $('#chkbx').click(function(){
                      if($(this).is(':checked'))
                      {
                          $('#save').prop('disabled', false);
                      }
                      else
                      {
                          $('#save').prop('disabled', true);
                      }
                  });
              });
              </script>
     
          
            <form action="">
              <a class="mt-4 text-dark" href="ktp-perubahan"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
              <div class="dropdown-divider mt-4"></div>
          </form>
        </div>
    </section>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

   
  </body>
</html>