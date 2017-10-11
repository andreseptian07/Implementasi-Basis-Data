<?php

include "koneksi.php";
?>
<html>
<head>
 <title> Input Nilai Baru </title>
 <link href ="css_submit.css" rel="stylesheet" type="text/css">
 
 
</head>
<body style = 'margin : 20px; font : 16px arial;'>
 <center>
 <p> Input Nilai Baru</p>
 
 <form method = 'POST' action = 'aksi_tambah.php'>
 <table border = '1' cellspacing = '1' cellpadding = '10'
 style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
 <tr>
  <td> No Induk </td>
  <td  align = 'center'> : </td>
  <td> <input type = 'text'  name = 'no_induk' /> </td>
  </tr>
 <tr>
  <td> Nama </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text'  name = 'nama' /> </td>
  </tr>
 <tr>
  <td> Kelas </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text' name = 'kelas' /> </td>
  </tr>
  <tr>
  <td> Nilai UH </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text'  name = 'nilai_uh' /> </td>
  </tr>
   <tr>
  <td> Nilai UTS </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text'  name = 'nilai_uts' /> </td>
  </tr>
   <tr>
  <td> Nilai UAS </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text'  name = 'nilai_uas' /> </td>
  </tr>

 <tr>
 <td colspan = '3' align = 'center'>
 <input type = 'submit' name = 'submit' value = 'Submit'/>
 <input type = 'reset' name = 'Reset' value = 'Reset' /> </td>
 </tr>
</table>


<a href = 'index.php'> Kembali </a>
</form>
</body>
</html>  
