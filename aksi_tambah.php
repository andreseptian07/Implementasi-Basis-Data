<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST


$no_induk = $_POST['no_induk'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nilai_uh = $_POST['nilai_uh'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];

$jml_nilai = $nilai_uh + $nilai_uts + $nilai_uas;
$nilai_akhir = $jml_nilai/3; 
 


// perintah SQL
$query="INSERT INTO siswa VALUES ('$no_induk', '$nama', '$kelas', '$nilai_uh', '$nilai_uts', '$nilai_uas', '$nilai_akhir');";

$hasil=mysql_query($query);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= index.php'/>  ";
} else { echo "Data gagal disimpan
 <meta http-equiv='refresh' content='2; url= tambah.php'/> ";
}
?>
