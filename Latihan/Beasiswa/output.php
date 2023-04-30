<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$ipk = $_POST['ipk'];

$nilai_ipk = $ipk;
if($nilai_ipk >= 3.0)
{
    $grade = " Mendapatkan Beasiswa sebesar Rp 1.000.000,00";
}
else if ($nilai_ipk < 3.0)
{
    $grade = " Tidak Mendapatkan Beasiswa ";
}

echo 
"
<h1>Data Penerima Beasiswa</h1>

Nama            : $nama<br>
NIM             : $nim<br>
kelas           : $kelas<br>
Jurusan         : $jurusan<br>
jenis kelamin   : $jenis_kelamin<br>
IPK             : $ipk<br>

Menyatakan bahwa $nama $grade
";
?>
<br>
<a href="beasiswa.php"> Kembali </a>