<html>
    <head>
        <title>Penerimaan Beasiswa</title>
    </head>
    <body>
        <h2> Penerimaan Beasiswa</h2>
        <form method="post" action="output.php">
            <table>
                <tr><td>NIM</td><td><input type="text" name="nim"></td></tr>
                <tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
                <tr><td>Kelas</td><td><input type="text" name="kelas"></td></tr>
                <tr><td>Jurusan </td><td>
                    <select name="jurusan" id="Jurusan">
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Informatika">Informatika</option>
                    </select>
                </td></tr>

                <tr><td>Jenis Kelamin</td><td>
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki" checked>Laki-Laki 
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                </td></tr>

                <tr><td>IPK</td><td><input type="text" name="ipk"></td></tr>

                <tr><td colspan="2"><button type="Proses" value="Proses">Proses</button></td></tr>
                <tr><td colspan="2"><input type="Reset" value="Batal"></td></tr>
            </table>
        </form>
    </body>
</html>