<?php
error_reporting(0);
$tanggal = date('y-m-d');
$sql17 = "SELECT * FROM  actitvy WHERE tanggal = '$tanggal'";
$sql27 = mysqli_query($koneksi, $sql17);
$row17 = mysqli_fetch_array($sql27);
$hari = $row17['hari'];



$tanggal = $row17['tanggal'];
$mulai = $row17['mulai'];
$selesai = $row17['selesai'];
$status = $row17['status'];


$jamsekarang=date('H:i');
date_default_timezone_set("Asia/Jakarta");
$jamsekarang = date('H:i', strtotime($jamsekarang.'-1 hour'));




 //JIKA HARI SABTU
   if ($hari == 'Sabtu') {
 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;	
    }
     //JIKA HARI MINGGU
       else if ($hari == 'Minggu') {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
      //JIKA HARI SENIN KALENDER MERAH
       else if ($hari == 'Senin' && $status == 'T') {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
      // JAM KERJA SENIN MULAI JAM 8 :15
    else if ($hari == 'Senin' && $mulai > $jamsekarang) {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
       // JAM KERJA SENIN SELESAI JAM 16 :00
    else if ($hari == 'Senin' && $selesai < $jamsekarang) {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
     //JIKA HARI SELASA KALENDER MERAH
    else if ($hari == 'Selasa' && $status == 'T') {

    
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
     // JAM KERJA SELASA MULAI JAM 8 :15
    else if ($hari == 'Selasa' && $mulai > $jamsekarang) {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
     // JAM KERJA SELASA SELESAI JAM 16 :00
    else if ($hari== 'Selasa' && $selesai < $jamsekarang) {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
      //JIKA HARI Rabu KALENDER MERAH
    else if ($hari == 'Rabu' && $status == 'T') {
     header('location:pemberitahuan');	
    }
    // JAM KERJA Rabu MULAI JAM 8 :15
    else if ($hari == 'Rabu' && $mulai > $jamsekarang) {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;	
    }
    // JAM KERJA Rabu SELESAI JAM 16 :00
    else if ($hari == 'Rabu' && $selesai < $jamsekarang) {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
    //JIKA HARI Kamis KALENDER MERAH
    else if ($hari == 'Kamis' &&  $status == 'T') {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
    // JAM KERJA Kamis MULAI JAM 8 :15
    else if ($hari == 'Kamis' &&  $mulai > $jamsekarang) {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
    // JAM KERJA Kamis SELESAI JAM 16 :00
    else if ($hari == 'Kamis' && $selesai < $jamsekarang) {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
       //JIKA HARI Jumat KALENDER MERAH
    else if ($hari == 'Jumat' && $status == 'T') {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
           // JAM KERJA Jumat MULAI JAM 8 :15
    else if ($hari == 'Jumat' && $mulai> $jamsekarang) {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
          // JAM KERJA Jumat SELESAI JAM 16 :00
    else if ($hari== 'Jumat' && $selesai < $jamsekarang) {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pemberitahuan">';
exit;
    }
?>
