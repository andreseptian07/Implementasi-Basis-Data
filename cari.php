<?php
error_reporting(0);
//membuat koneksi ke database
include "koneksi.php";
?>
 
 <html>
 <title> Data Siswa </title>
   <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/body.css" rel="stylesheet">
 
 
 <script language="javascript">
 function tanya() {
 if (confirm ("Apakah Anda yakin akan menghapus data ini ?")) {
 return true;
  } else {
   return false;
  }
  }
</script>


<body width='900px'>
<center> 
<h1>MENAMPILKAN DATA SISWA </h1> 

<hr>

  <div class="container">

        <!-- Page Heading -->
        <div class="row">
  <div class="col-md-8">






<!-- fungsi Pencarian -->
<form action='cari.php' method='POST'>
<table >
 <tr>
 <center>
  <td> <input type='text' name='input_cari' placeholder="Nama Siswa"> 
  <td> <input type='submit' name='cari' value='Cari'> </td>
 </tr>

</table>
</form>


<!-- /////////////////////////////tombol untuk menambah data//////////////////////////////////-->

<table >
 <tr>
 <center>
  
    <td> 
      <form action='tambah.php' method='POST'>
      <input type='submit' name='tambah' value='Tambah siswa'> 
      </form>
    </td>
  

  
   <td> 
      <form action='lulus.php' method='POST'> 
      <input type='submit' name='tambah' value='Tampil Siswa Lulus'> 
      </form>
   </td>

   <td> 
      <form action='tidak_lulus.php' method='POST'> 
      <input type='submit' name='tambah' value='Tampil Siswa Tidak Lulus'> 
      </form>
   </td>


 </tr>
</table>


<p>
</p>

<table>
  <tr>
    <td>
      <form action='index.php' method='POST'> 
      <input type='submit' name='kembali' value='Kembali'> 
      </form>
    </td>
  </tr>
</table>


<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='800' >  
<tr>
 <th> No Induk </th>
 <th> Nama </th>
 <th> Kelas </th>
 <th> Nilai UH </th>
 <th> Nilai UTS </th>
 <th> Nilai UAS </th>
 <th> Nilai Akhir </th>
 <th colspan='2'> Action </th>
 
</tr>

<?php  
$input_cari = @$_POST['input_cari']; 
$cari = @$_POST['cari'];

$query_cari = "SELECT *from siswa where nama like '%$input_cari%'; ";

if($input_cari != "") {
  $hasil = mysql_query($query_cari) or die (mysql_error());
} else {
  $hasil = mysql_query("select *from siswa") or die (mysql_error());
} 


// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$no_induk = $data['no_induk'];
echo "  
  <tr>
    <td align = 'center' >".$data['no_induk']."</td>
    <td>".$data['nama']."</td>
    <td align = 'center'>".$data['kelas']."</td>
    <td align = 'center'>".$data['nilai_uh']."</td>
    <td align = 'center'>".$data['nilai_uts']."</td>
    <td align = 'center'>".$data['nilai_uas']."</td>
    <td align = 'center'>".round($nilai_akhir,2)."</td>
  
    <td align = 'center'> 
      <form action = 'edit.php' method = 'GET'>
         <input type = 'submit' name = 'tombol' value = 'Edit' class = 'edit'>"; 
         echo " <input type = 'hidden' name = 'no_induk' value = '".$data['no_induk']."'>
      </form>
    </td>
  
  
    <td align = 'center'> 
      <form action = 'delete.php' method = 'GET'>
         <input type = 'hidden' name = 'nama' value = '".$data['nama']."'>
         <input type = 'hidden' name = 'no_induk' value = '".$data['no_induk']."'>
         <input type = 'submit' name = 'tombol2' value = 'Delete' class = 'delete'
           onclick='return tanya(". $data['no_induk'].")'>
      </form>
    </td>
  </tr> 
 ";
 
 $i++; 

}

?>

</table>
</div>
<div class="col-md-4">

</div>

</div>
<!-- row -->

<div class="row">
<div class="col-md-12">

</div>
</div>

</body>
</html>
