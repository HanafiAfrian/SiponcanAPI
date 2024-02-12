<?php

function tgl_indo($tanggal){
	$bulan = array (
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
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
	<html>
	<head>
	<title>:: Administrator ::</title>



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/e1c52708df.js"></script>

	</head>
<body onload="window.print()">
	
		<div class="container">


 <div class="table-responsive-md" style='font-family: 'Viga', sans-serif;'>
 
 <?php
   include "koneksi.php";
session_start();
if(empty($_SESSION['username'])){
	
	header('location: index.php');
}


$uuid_pengaduan = $_GET['uuid_pengaduan'];
$kd_jenis = $_GET['kd_jenis'];
$uuid_reg = $_GET['uuid_reg'];

// DETAIL KTP 

if ($kd_jenis == 'KTPHILANG')
{
    $result = mysqli_query($koneksi,"SELECT * FROM `ktphilang` WHERE uuid='$uuid_pengaduan'");
    while($row = mysqli_fetch_array($result)){
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
        	
 
		 echo" 
		 <div class='row'>
	
  <div class='col-sm-12'><center>
  <br><br>
		<b> <font size='4'>KARTU TANDA PENDUDUK HILANG </center></font> 	</b><br></b><br>
 </div>
 
   <div class='col-sm-2'>
	
 </div>
 
  </div>
<div class='row'>


<div class='col-sm-4'>	
<b><font size='4'>DATA PEMOHON</font> </b>
</div>

<div class='col-sm-8'>
</div>


<div class='col-sm-4'>	
<font size='4'>NIK Pemohon</font> 
</div>

<div class='col-sm-8'>
<font size='4'>:  $row[nik_pm]</font>
</div>


<div class='col-sm-4'>	
<font size='4'>Nama Lengkap Pemohon</font>  
</div>

<div class='col-sm-8'>
<font size='4'>:  $row[nama_pm]</font> 
</div>

<div class='col-sm-4'>		
<font size='4'> E-mail Pemohon</font> 
</div>
<div class='col-sm-8'>
<font size='4'>:	   $row[nokk_pm] </font> 
</div>

<div class='col-sm-4'>	
<font size='4'>No. Telepon Pemohon</font> 
</div> 

<div class='col-sm-8'>
<font size='4'>:	  $row[umur_pm]  </font> 
</div> 

<div class='col-sm-4'>	
 <font size='4'>Kewarganegaraan</font> 
</div> 

<div class='col-sm-8'>
<font size='4'>:	 $row[kwn_pm]  </font> 
</div> 

<br><br>
<div class='col-sm-4'>	
<b><font size='4'>DATA PADA KTP</font> </b>
</div>

<div class='col-sm-8'>
</div>


<div class='col-sm-4'>		
 <font size='4'>NIK</font> 
</div> 

<div class='col-sm-8'>
<font size='4'>:	 $row[nikpr]  </font> 
</div> 

<div class='col-sm-4'>		
 <font size='4'>Nama Lengkap</font> 
</div> 

<div class='col-sm-8'>
<font size='4'>:	 $row[namapr]  </font> 
</div> 
<div class='col-sm-4'>		
 <font size='4'>Tempat Lahir</font> 
</div> 

<div class='col-sm-8'>
<font size='4'>:	 $row[temptlahir]  </font> 
</div> 

<div class='col-sm-4'>	
 <font size='4'>Tanggal Lahir</font> 
</div> 

<div class='col-sm-8'>
<font size='4'>:



$tanggallahir  </font> 
</div> 
<div class='col-sm-4'>	
 <font size='4'>Jenis Kelamin</font> 
</div> 
<div class='col-sm-8'>
<font size='4'>:	 $row[jk]  </font> 
</div> 

<div class='col-sm-4'>		
 <font size='4'>Agama</font> 
</div> 

<div class='col-sm-8'>
<font size='4'>:	 $row[agama]  </font> 
</div> 


<div class='col-sm-4'>	
 <font size='4'>No. Surat Hilang Dari Kepolisian</font> 
</div> 

<div class='col-sm-8'>
<font size='4'>:	 $row[noketpolisi]  </font> 
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
<font size='4'>:	 $row[lokasihilang]  </font> 
</div>

<br><br>










</div>


</div>
<div class='row'>

<div class='col-sm-12'>

<font size='4'> <p style='text-align: justify;'>
<br><br>
                  Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                  Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan 
                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.</p>
 </font> 
<div class='form-group' align='left'>
<font size='3'> 
&nbsp;&nbsp;	</font></b>



</div> 


</div>

<div class='col-sm-8'>	


</div> 

<div class='col-sm-4'>


<div class='form-group' align='left'>
<font size='4'> 
&nbsp;&nbsp;	<p style='text-align: justify;'>
    
    	<input type='checkbox' name='centang' checked > Centang ini sebagai pengganti tanda tangan 
pemohon/pelapor</p></font></b>
<b><font size='4'> Sibolga , $tanggal2</b>
<br><br><br>
<b>( $row[nama_pm] )</b></font>

</div>
</div>




</div></div></div>


";	
    }
}

?>
 
 
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
                    <div class='col-sm-12'><center>
                 <br><br>
                        <b>
                            <font size='4'>KARTU TANDA PENDUDUK PERUBAHAN </font>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                       <br></b><br>
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
                   
                
                
                
                
                
                
                
                
                <div class='row'>

<div class='col-sm-12'>

<font size='4'> <p style='text-align: justify;'>
<br><br>
                  Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                  Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan 
                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.</p>
 </font> 
<div class='form-group' align='left'>
<font size='3'> 
&nbsp;&nbsp;	</font></b>



</div> 


</div>

<div class='col-sm-8'>	


</div> 

<div class='col-sm-4'>


<div class='form-group' align='left'>
<font size='4'> 
&nbsp;&nbsp;	<p style='text-align: justify;'>
    
    	<input type='checkbox' name='centang' checked > Centang ini sebagai pengganti tanda tangan 
pemohon/pelapor</p></font></b>
<b><font size='4'> Sibolga , $tanggal2</b>
<br><br><br>
<b>( $row[nama_pm] )</b></font>

</div>
</div>




</div></div></div>";
                }
            }
            ?>

 
 
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
                  
                    <div class='col-sm-12'>
                <br><br>
                        <b>
                        <center>
                            <font size='4'>KARTU TANDA PENDUDUK RUSAK </font>    </center>
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
                   
                
                
                
                
                
                
                
                
                <div class='row'>

<div class='col-sm-12'>

<font size='4'> <p style='text-align: justify;'>
<br><br>
                  Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                  Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan 
                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.</p>
 </font> 
<div class='form-group' align='left'>
<font size='3'> 
&nbsp;&nbsp;	</font></b>



</div> 


</div>

<div class='col-sm-8'>	


</div> 

<div class='col-sm-4'>


<div class='form-group' align='left'>
<font size='4'> 
&nbsp;&nbsp;	<p style='text-align: justify;'>
    
    	<input type='checkbox' name='centang' checked > Centang ini sebagai pengganti tanda tangan 
pemohon/pelapor</p></font></b>
<b><font size='4'> Sibolga , $tanggal2</b>
<br><br><br>
<b>( $row[nama_pm] )</b></font>

</div>
</div>




</div></div></div>";
                }
            }
            ?>

 
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
                
                    <div class='col-sm-12'>
                
                        <b><center>
                            <font size='4'>AKTE KEMATIAN</font></center>
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
                   
                
                
                
                
                
                
                
                
                <div class='row'>

<div class='col-sm-12'>

<font size='4'> <p style='text-align: justify;'>
<br><br>
                  Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                  Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan 
                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.</p>
 </font> 
<div class='form-group' align='left'>
<font size='3'> 
&nbsp;&nbsp;	</font></b>



</div> 


</div>

<div class='col-sm-8'>	


</div> 

<div class='col-sm-4'>


<div class='form-group' align='left'>
<font size='4'> 
&nbsp;&nbsp;	<p style='text-align: justify;'>
    
    	<input type='checkbox' name='centang' checked > Centang ini sebagai pengganti tanda tangan 
pemohon/pelapor</p></font></b>
<b><font size='4'> Sibolga , $tanggal2</b>
<br><br><br>
<b>( $row[namapmhon] )</b></font>

</div>
</div>




</div></div></div>";
                }
            }
            ?>

 
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
                   
                    <div class='col-sm-12'>
                <br> <br>
                        <b><center>
                            <font size='4'>PERISTIWA PENTING PENGURANGAN KK KERENA KEMATIAN</font></center>
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
                   
                
                
                
                
                
                
                
                
                <div class='row'>

<div class='col-sm-12'>

<font size='4'> <p style='text-align: justify;'>
<br><br>
                  Demikian formulir serta dokumen persyaratan ini saya/kami buat dengan sesungguhnya.
                  Apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya, saya/kami bersedia dikenakan 
                sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.</p>
 </font> 
<div class='form-group' align='left'>
<font size='3'> 
&nbsp;&nbsp;	</font></b>



</div> 


</div>

<div class='col-sm-8'>	


</div> 

<div class='col-sm-4'>


<div class='form-group' align='left'>
<font size='4'> 
&nbsp;&nbsp;	<p style='text-align: justify;'>
    
    	<input type='checkbox' name='centang' checked > Centang ini sebagai pengganti tanda tangan 
pemohon/pelapor</p></font></b>
<b><font size='4'> Sibolga , $tanggal2</b>
<br><br><br>
<b>( $row[namapmhon] )</b></font>

</div>
</div>




</div></div></div>";
                }
            }
            ?>

 
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
                
                    <div class='col-sm-12'>
                </b><br><br>
                        <b><center>
                            <font size='4'>MEMBENTUK KARTU KELUARGA BARU</font><center>
                        </b><br></b><br>
                    </div>
                
                    <div class='col-sm-2'>
                        <b>
                           
                        </b>
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
                   
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
        
        
        
        
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
               
                    <div class='col-sm-12'>
                
                        <b>
                        <br><br>
                           <center> <font size='4'>AKTE KELAHIRAN</font></center>
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
                    
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>
        
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
                  
                    <div class='col-sm-12'>
                <br><br>
                        <b>
                        <center>
                            <font size='4'>AKTE PERKAWINAN</font> <center>
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
                   
                    </div>
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>
            
            
            
            
            
            
            
            
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
                
                    <div class='col-sm-12'>
                <br><br>
                        <b><center>
                            <font size='4'>AKTE PERCERAIAN</font><center>
                        </b><br></b>
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
                
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>
            
            
            
             
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
                  
                    <div class='col-sm-12'>
                <center>
                        <b>   <br><br>
                            <font size='4'>KARTU IDENTITAS ANAK</font> </center>
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
            
                    <div class='col-sm-12'>
                     <br><br>
                        <b><center>
                            <font size='4'>SURAT PINDAH</font></center>
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
                 
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>
            
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
                    <br>
                
                    <div class='col-sm-12'>
                   <br>
                
                        <b><center>
                            <font size='4'>AKTA PENGANGKATAN ANAK</font></center>
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
                  
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
        
        
        
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
                
                    <div class='col-sm-12'>
                   <br>
                        <b><center>
                            <font size='4'>AKTA PENGAKUAN ANAK </font></center>
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
              
                    <div class='col-sm-12'>
                <center>
                        <b><br>
                            <font size='4'>AKTA PENGESAHAN ANAK</font>             </center>
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
                 
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
          <!--end detail pengesahan anak-->
          
          
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
      
                    <div class='col-sm-12'>
                
                        <b><center><br>
                            <font size='4'>PENGGANTIAN KEPALA KELUARGA</font></center>
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
                
                        
                  
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
          
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
             
                    <div class='col-sm-12'>
                
                        <b>     <center><br>
                            <font size='4'>PISAH KARTU KELUARGA</font>     </center>
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
                
                        
                  
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
        
          <!--end detail pisah kk-->
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
                    
                    <div class='col-sm-12'>
                
                        <b><center><br>
                            <font size='4'>MENNUMPANG DALAM KK</font><center>
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
                   
           
                        
                  
                
                    </div>
                
                
                </div>
                </div>
                </div>";
            }
        }

   

        ?>
          <!--end detail numpang kk-->
          
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
                    
                    <div class='col-sm-12'>                
                        <b><center><br>
                            <font size='4'>KARTU KELUARGA HILANG </font><center>
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
              
                    <div class='col-sm-12'>                
                        <b><center><br>
                            <font size='4'>KARTU KELUARGA RUSAK </font></center>
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
            
                    <div class='col-sm-12'>                
                        <b>
                            <font size='4'>PERUBAHAN ELEMEN DATA PADA KARTU KELUARGA </font>
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
                   
                
                </div>
                </div>
                </div>";
        }
}
        ?>
          <!--detail kk rusak-->
          
          
          
          
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
                 
                    <div class='col-sm-12'>
                
                        <b><center><br>
                            <font size='4'>PERISTIWA PENTING PENAMBAHAN KK KELAHIRAN</font></center>
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
                 
                
                
                    </div>
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>
            
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
              
                    <div class='col-sm-12'>
                
                        <b><center><br>
                            <font size='4'>PEERISTIWA PENTING KARENA PINDAH</font></center>
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
                    
                
                    </div>
                
                
                </div>
                </div>
                </div>";
                }
            }
            ?>
            
            
  <link rel="stylesheet" href="../js/bootstrap.min.css">

    
    
    
    
    
    <div class="table-responsive-md">

</div>
 <center>

</div>
</body>
</html>