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
  <td> <strong> Cari Siswa : </strong> <input type='text' name='input_cari' placeholder="Masukan Nama Siswa"> 
  <td> <input type='submit' name='cari' value='Cari'> </td>
 </tr>

</table>
</form>

<!-- fungsi tambah data -->
<table >
 <tr>
 <center>
  
    <td> 
      <form action='tambah.php' method='POST'>
      <input type='submit' name='tambah' value='Tambah siswa'> 
      </form>
    </td>

  <!-- fungsi tombol menampilkan data yang lulus -->
   <td> 
      <form action='lulus.php' method='POST'> 
      <input type='submit' name='tambah' value='Tampil Siswa Lulus'> 
      </form>
   </td>
  <!-- fungsi tombol menampilkan data yang tidak lulus -->
   <td> 
      <form action='tidak_lulus.php' method='POST'> 
      <input type='submit' name='tambah' value='Tampil Siswa Tidak Lulus'> 
      </form>
   </td>
</tr>
</table>
<p></p>

<table>
  <tr>
    <td></td>
  </tr>
</table>

  <!-- tampilan untuk filter kelas -->
<table>
  <tr>
    <td> 
       <form action="index.php" method="post" >
        <strong> Kelas : </strong> 
        <select name="pilih_kelas">
            <option value="">--Silahkan Pilih--</option>
            <option value="xii">Semua Kelas</option>
            <option value="xii_rpl" name="xii_rpl">XII RPL</option>
            <option value="xii_tkj" name="xii_tkj">XII TKJ</option>
            <option value="xii_ak" name=xii_ak>XII AK</option>
        </select>
        <input type="submit" name="filter" value="Filter">
       </form>
    </td>
  </tr>
</table>




<!-- Script untuk membuat tabel-->

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

// fungsi filter berdasarkan kelas 
$kelas= @$_POST['pilih_kelas']; 
$filter = @$_POST['filter'];

$queri = "SELECT *from siswa where kelas like '%$kelas%'; ";

//query sql
$hasil=MySQL_query ($queri);    

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
    <td align = 'center'>".$data['nilai_akhir']."</td>
  
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

