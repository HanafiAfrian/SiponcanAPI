<?php
error_reporting(0);
include 'koneksi.php';

$op =$_GET['op'];
switch ($op){
    case '' :pilihprofil();break;
    default :pilihprofil();break;
    case 'ambildata' :ambildata();break;
    case 'create' :create();break;
    case 'pilihprofil' :pilihprofil();break;
    case 'daftar' :daftar();break;	   
    case 'gantipassword' :gantipassword();break;	   


    }
    
  
         	   
       
    

 function ambildata(){
       global $koneksi;
       
       	        $telepon= $_GET['telepon'];
       $sql1 ="select * from register WHERE  nik = '$telepon'  ";
        $q1= mysqli_query($koneksi, $sql1);
       while ($r1 = mysqli_fetch_array($q1)) {
            $hasil[] =array(
                'nama' =>$r1['nama'],
                 'no_telp' =>$r1['no_telp'],
              'nik' =>$r1['nik'],
                 'email' =>$r1['email']
               
               
            );
        }
         	   
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }
    

 function pilihprofil(){
       global $koneksi;
       
       	        $nik = $_GET['nik'];
       $sql1 ="select * from register WHERE  nik = '$nik'  ";
        $q1= mysqli_query($koneksi, $sql1);
       while ($r1 = mysqli_fetch_array($q1)) {
            $hasil[] =array(
                'nama' =>$r1['nama'],
                 'no_telp' =>$r1['no_telp'],
              'nik' =>$r1['nik'],
                'email' =>$r1['email'],
                
                'foto' =>$r1['foto'],	
               
            );
        }
         	   
        $data['data']['result'] = $hasil;
        echo json_encode($data);
    }
 



  function daftar (){
  global $koneksi;
$nik = $_POST['nik'];
$nama = addslashes($_POST['nama']);
$no_telp= $_POST['no_telp'];
$email= addslashes($_POST['email']);

            
  
      		$sql2 = " update  register set nama = '$nama',
      		
      		no_telp = '$no_telp',
      			email = '$email'
    where  nik = '$nik' ";
 $q2 = mysqli_query($koneksi,$sql2);
  
  
  
  
  
  
      
	           $data['data']['result'] = $hasil;
        echo json_encode($data);
		
 }



  function gantipassword (){
  global $koneksi;
$nik = $_POST['nik'];
$password = addslashes($_POST['password']);


            
  
      		$sql2 = " update  register set pasword = '$password'
    where  nik = '$nik' ";
 $q2 = mysqli_query($koneksi,$sql2);
  
  
  
  
  
  
      
	           $data['data']['result'] = $hasil;
        echo json_encode($data);
		
 }
 ?>