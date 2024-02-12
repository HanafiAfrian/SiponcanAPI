<?php

if ($_GET['module'] == 'home') {
	include "modul.bak/mod_home/home.php";
}

// form akta lahir
if ($_GET['module'] == 'aktalahir') {
	include "modul.bak/aktalahir/aktalahir.php";
}

if ($_GET['module'] == 'aktalahir-saksi') {
	include "modul.bak/aktalahir/aktalahirsaksi.php";
}


if ($_GET['module'] == 'aktalahir-ayah') {
	include "modul.bak/aktalahir/aktalahirayah.php";
}

if ($_GET['module'] == 'aktalahir-ibu') {
	include "modul.bak/aktalahir/aktalahiribu.php";
}

if ($_GET['module'] == 'aktalahir-anak') {
	include "modul.bak/aktalahir/aktalahiranak.php";
}

if ($_GET['module'] == 'aktalahir-berkas') {
	include "modul.bak/aktalahir/aktalahirberkas.php";
}


if ($_GET['module'] == 'pisahkk') {
	include "modul.bak/pisahkk/pisahkk.php";
}


// form akta kematian
if ($_GET['module'] == 'aktakematian') {
	include "modul.bak/aktakematian/aktakematian.php";
}
if ($_GET['module'] == 'aktakematian-saksi') {
	include "modul.bak/aktakematian/aktakematiansaksi.php";
}
if ($_GET['module'] == 'aktakematian-jenazah') {
	include "modul.bak/aktakematian/aktakematianjenazah.php";
}
if ($_GET['module'] == 'aktakematian-berkas') {
	include "modul.bak/aktakematian/aktakematianberkas.php";
}


// form akta perkawinan
if ($_GET['module'] == 'aktaperkawinan') {
	include "modul.bak/aktaperkawinan/aktaperkawinan.php";
}
if ($_GET['module'] == 'aktaperkawinan-saksi') {
	include "modul.bak/aktaperkawinan/aktaperkawinansaksi.php";
}
if ($_GET['module'] == 'aktaperkawinan-perkawinan') {
	include "modul.bak/aktaperkawinan/aktaperkawinanperkawinan.php";
}
if ($_GET['module'] == 'aktaperkawinan-berkas') {
	include "modul.bak/aktaperkawinan/aktaperkawinanberkas.php";
}


// form akta perceraian
if ($_GET['module'] == 'aktacerai') {
	include "modul.bak/aktacerai/aktacerai.php";
}
if ($_GET['module'] == 'aktacerai-perceraian') {
	include "modul.bak/aktacerai/aktaceraiperceraian.php";
}
if ($_GET['module'] == 'aktacerai-berkas') {
	include "modul.bak/aktacerai/aktaceraiberkas.php";
}


// form akta suratpindah
if ($_GET['module'] == 'suratpindah') {
	include "modul.bak/suratpindah/suratpindah.php";
}
if ($_GET['module'] == 'suratpindah-asal') {
	include "modul/suratpindah/suratpindahasal.php";
}
if ($_GET['module'] == 'suratpindah-tujuan') {
	include "modul.bak/suratpindah/suratpindahtujuan.php";
}

if ($_GET['module'] == 'suratpindah-berkas') {
	include "modul.bak/suratpindah/suratpindahberkas.php";
}


// form online nik
// if ($_GET['module'] == 'onlinenik') {
// 	include "modul/onlinenik/onlinenik.php";
// }
// if ($_GET['module'] == 'onlinenik-berkas') {
// 	include "modul/onlinenik/onlinenikberkas.php";
// }
// if ($_GET['module'] == 'uploadonlinenik') {
// 	include "modul/onlinenik/uploadonlinenik.php";
// }



// kk
if ($_GET['module'] == 'pilih-kategori') {
	include "modul.bak/kk/pilihkategori.php";
}

//penambahan anak kk
if ($_GET['module'] == 'penambahananak') {
	include "modul.bak/kkpenambahananak/penambahananak.php";
}
if ($_GET['module'] == 'penambahananak-data') {
	include "modul.bak/kkpenambahananak/penambahananakdata.php";
}
if ($_GET['module'] == 'penambahananak-berkas') {
	include "modul.bak/kkpenambahananak/penambahananakberkas.php";
}


//perubahan kk
if ($_GET['module'] == 'perubahankk') {
	include "modul.bak/kkperubahan/kkperubahan.php";
}
if ($_GET['module'] == 'perubahankk-berkas') {
	include "modul.bak/kkperubahan/kkperubahanberkas.php";
}

// kk pindah datang kecamatan
if ($_GET['module'] == 'kk-pindah') {
	include "modul.bak/kkpindah/kkpindah.php";
}
if ($_GET['module'] == 'kk-pindah-berkas') {
	include "modul.bak/kkpindah/berkas.php";
}



//ktp-hilang
if ($_GET['module'] == 'ktp-hilang') {
	include "modul.bak/ktphilang/ktphilang.php";
}
if ($_GET['module'] == 'ktp-hilang-berkas') {
	include "modul.bak/ktphilang/berkas.php";
}

//ktp-perubahan
if ($_GET['module'] == 'ktp-perubahan') {
	include "modul.bak/ktpperubahan/ktpperubahan.php";
}
if ($_GET['module'] == 'ktp-perubahan-berkas') {
	include "modul.bak/ktpperubahan/berkas.php";
}

//ktp-rusak
if ($_GET['module'] == 'ktp-rusak') {
	include "modul.bak/ktprusak/ktprusak.php";
}
if ($_GET['module'] == 'ktp-rusak-berkas') {
	include "modul.bak/ktprusak/berkas.php";
}

// KIA
if ($_GET['module'] == 'kia') {
	include "modul.bak/kia/kia.php";
}
if ($_GET['module'] == 'kia-berkas') {
	include "modul.bak/kia/berkas.php";
}

//akta-pengakuan
if ($_GET['module'] == 'menumpangdalamkk') {
	include "modul.bak/menumpangdalamkk/menumpangdalamkk.php";
}

if ($_GET['module'] == 'akta-pengakuan-anak') {
	include "modul.bak/aktapengakuananak/aktapengakuan.php";
}

if ($_GET['module'] == 'akta-pengakuan-anak-berkas') {
	include "modul.bak/aktapengakuananak/berkas.php";
}
//akta-pengakuan
if ($_GET['module'] == 'akta-pengesahan-anak') {
	include "modul.bak/aktapengesahananak/aktapengesahan.php";
}
if ($_GET['module'] == 'akta-pengesahan-anak-berkas') {
	include "modul.bak/aktapengesahananak/berkas.php";
}
//akta-pengakuan
if ($_GET['module'] == 'akta-pengangkatan-anak') {
	include "modul.bak/aktapengangkatananak/aktapengangkatan.php";
}
if ($_GET['module'] == 'akta-pengangkatan-anak-berkas') {
	include "modul.bak/aktapengangkatananak/berkas.php";
}

//kehilangan-rusak kk

if ($_GET['module'] == 'kkhilang') {
	include "modul.bak/kkhilang/kkhilang.php";
}
if ($_GET['module'] == 'kkppkematian') {
	include "modul.bak/kkppkematian/kkppkematian.php";
}
if ($_GET['module'] == 'kkpppindah') {
	include "modul.bak/kkpppindah/kkpppindah.php";
}




if ($_GET['module'] == 'kkrusak') {
	include "modul.bak/kkrusak/kkrusak.php";
}



if ($_GET['module'] == 'kkhilang-rusak-berkas') {
	include "modul.bak/kkhilang/kkhilangberkas.php";
}


//kk keluarga baru
if ($_GET['module'] == 'kkbaru') {
	include "modul.bak/kkkeluargabaru/kkkeluargabaru.php";
}
if ($_GET['module'] == 'kkbaru-alamat') {
	include "modul.bak/kkkeluargabaru/kkkeluargabarualamat.php";
}
if ($_GET['module'] == 'kkbaru-berkas') {
	include "modul.bak/kkkeluargabaru/kkkeluargabaruberkas.php";
}



//kk keluarga baru
if ($_GET['module'] == 'ganti-kepalakeluarga') {
	include "modul.bak/kkgantikepalaklg/kkgantikepalaklg.php";
}

if ($_GET['module'] == 'ganti-kepalakeluarga-berkas') {
	include "modul.bak/kkgantikepalaklg/kkgantikepalaklgberkas.php";
}



//kk keluarga baru
if ($_GET['module'] == 'kk-pindah-datang') {
	include "modul.bak/pindahdtg/pindahdatang.php";
}

if ($_GET['module'] == 'kk-pindah-datang-berkas') {
	include "modul.bak/pindahdtg/pindahdatangberkas.php";
}

if ($_GET['module'] == 'direct') {
	include "modul.bak/direct/direct.php";
}

if ($_GET['module'] == 'profil') {
	include "modul.bak/profil/profil.php";
}


if ($_GET['module'] == 'syarat-ketentuan') {
	include "modul.bak/syaratketentuan/syaratketentuan.php";
}




if ($_GET['module'] == 'kebijakan-privasi') {
	include "modul.bak/kebijakan/kebijakan.php";
}




if ($_GET['module'] == 'infopenting') {
	include "modul.bak/infopenting/infopenting.php";
}


if ($_GET['module'] == 'notifikasi') {
	include "modul.bak/chatApp/messages.php";
}



if ($_GET['module'] == 'gantipasword') {
	include "modul.bak/gantipasword/gantipasword.php";
}



if ($_GET['module'] == 'sptjmdowlonad') {
	include "modul.bak/newsptjm/newsptjm.php";
}




if ($_GET['module'] == 'lupapasword') {
	include "modul.bak/lupapasword/lupapasword.php";
}

if ($_GET['module'] == 'konformasipasword') {
	include "modul.bak/konformasipasword/konformasipasword.php";
}

if ($_GET['module'] == 'pemberitahuan') {
	include "modul.bak/pemberitahuan/pemberitahuan.php";
}

if ($_GET['module'] == 'notfound') {
	include "modul.bak/404/404.php";
}

if ($_GET['module'] == 'home-user') {
	include "modul.bak/adminuser/home.php";
}