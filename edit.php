<?php
include "koneksi.php";

// membaca informasi yang dikirim dari file view.php pada address bar
$no_induk = $_GET['no_induk'];

// Perintah sql untuk menampilkan database
$queri = "select * from siswa where no_induk = '$no_induk'";

// perintah untuk menjalankan sql
$hasil = mysql_query($queri);

// menjadikan data dalam bentuk array
$data  = mysql_fetch_array($hasil);

$no_induk = $data['no_induk'];
$nama = $data['nama'];
$kelas = $data['kelas'];
$nilai_uh = $data['nilai_uh'];
$nilai_uts = $data['nilai_uts'];
$nilai_uas = $data['nilai_uas'];


?>


<html>
<head>
 <title> EDIT Data Siswa </title>
 
 
</head>
<body style = 'margin : 20px; font : 16px arial;'>

<?php 
echo "
 <center>
 <p> Edit Data Siswa </p>
 
 <form method ='POST' action = 'aksi_edit.php'>
 <table border = '1' cellspacing = '1' cellpadding = '10'
 style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
 <tr>
 
  <td> Nama Siswa </td>
  <td width = '5' align = 'center'> : </td>
  <td> <input type = 'text' name = 'nama' value= '".$nama."'/> </td>
  <input type = 'hidden' name = 'no_induk' value = '".$no_induk."' />
  </tr>
 <tr>
  <td> Kelas </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text'  name = 'kelas' value= '".$kelas."'/> </td>
  </tr>
 <tr>
  <td> Nilai UH </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text'  name = 'nilai_uh' value= '".$nilai_uh."'/> </td>
  </tr>
  <td> Nilai UTS </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text'  name = 'nilai_uts' value= '".$nilai_uts."'/> </td>
  </tr>
  <td> Nilai UAS </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text'  name = 'nilai_uas' value= '".$nilai_uas."'/> </td>
  </tr>
  
 
  

  
 <tr>
 <td colspan = '3' align = 'center'>
 <input type = 'submit' name = 'submit' value = 'Update'/>
 </td>
 </tr>
</table>
<a href = 'index.php'> Kembali </a>
</form>
</body>
</html>
";
?>  
