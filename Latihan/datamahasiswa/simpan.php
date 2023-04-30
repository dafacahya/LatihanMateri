<?php
include 'koneksi.php';
 
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$kelamin        = $_POST['jenis_kelamin'];
$tgllahir       = $_POST['thn'].'-'.$_POST['bln'].'-'.$_POST['tgl'];
$tmptlahir      = $_POST['tmptlahir'];
$jurusan        = $_POST['jurusan'];
$tahunmsk       = $_POST['thnmsk'];
 
if($nim=="")
{
  echo "<script>alert('NIM Belum diisi');history.go(-1);</script>";
}
 
if($nama=="")
{
  echo "<script>alert('Nama Belum diisi');history.go(-1);</script>";
}
 
if($tmptlahir=="")
{
  echo "<script>alert('Tempat Lahir Belum diisi');history.go(-1);</script>";
}
  else
{
 
   $pilih="select * from data_mahasiswa where nim='$nim'";
   $cek=mysqli_query($koneksi, $pilih);
 
   $jumlah_data = mysqli_num_rows($cek);
   if ($jumlah_data >= 1 ) 
   {
 
  echo "<script>alert('NIM yang sama sudah digunakan');history.go(-1);</script>";
    }
   else
{
 
   $query="INSERT INTO data_mahasiswa SET  nim='$nim',nama='$nama',tgl_lhr='$tgllahir',tempat_lahir='$tmptlahir',jurusan='$jurusan',tahun_masuk='$tahunmsk',jenis_kelamin='$kelamin'";
mysqli_query($koneksi, $query);
 
echo "<script>alert('Data yang anda Input sukses');window.location='query.php'</script>";
    }
 }
?>