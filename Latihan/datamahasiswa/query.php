<?php
include "koneksi.php";
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Belajar PHP di ilmuweb.net</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
<h1>Belajar Menampilkan Database Mahasiswa</h1>
 
<p>Menampilkan isi database Mahasiswa </p>
 
<a href="forminput.php">Input Data Mahasiswa Baru</a><br>
 
 
<table class="table table-bordered table-striped table-hover">
 
<tr>
  <th>NIM</th>
  <th>Nama</th>
  <th>Tanggal Lahir</th>
  <th>Tempat Lahir</th>
  <th>Jurusan</th>
  <th>Tahun Masuk</th>
  <th>Jenis Kelamin</th>
</tr>
 
<?php
 
$query ="select * from data_mahasiswa";
$hasil = mysqli_query($koneksi, $query);
  
while($data = mysqli_fetch_array($hasil))
{
 
  echo "<tr>";
  echo "<td>$data[nim]</td>";
  echo "<td>$data[nama]</td>";
  echo "<td>$data[tgl_lhr]</td>";
  echo "<td>$data[tempat_lahir]</td>";
  echo "<td>$data[jurusan]</td>";
  echo "<td>$data[tahun_masuk]</td>";
  echo "<td>$data[jenis_kelamin]</td>";
  echo "</tr>";
}
?>
  </table>
  </body>
</html>