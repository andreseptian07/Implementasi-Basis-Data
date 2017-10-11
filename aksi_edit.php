<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'koneksi.php';


$no_induk = $_POST['no_induk'];

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nilai_uh = $_POST['nilai_uh'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];



$update = "UPDATE SISWA SET nama='$nama',kelas='$kelas',nilai_uh='$nilai_uh',nilai_uts='$nilai_uts',nilai_uas='$nilai_uas' where no_induk = '$no_induk'";
$hasil = mysql_query($update);




if ($hasil){
//header ('location:view.php');
echo " <center> Data Berhasil diupdate <br/>
<br> Untuk melihat daftar peserta klik <a href = 'index.php'> Disini </a></center>";
} else { echo "Data gagal diupdate";
}

?>  
