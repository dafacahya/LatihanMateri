<html>
    <head>
        <title>Masukkan Data</title>
    </head>
    <body>
        <h1>Masukkan Identitas Anda</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <pre>
            Isikan Nama : <input type="text" name="nama">
            Isikan No Telp : <input type="text" name="notelp">
            Isikan Alamat : <textarea name="alamat" cols="40" rows="2"></textarea>
            <input type="submit" value="TAMPIL"><input type="reset"
            value="Batal">
        </pre>
    </form>

    <?php
    $nama = $_POST["nama"];
    $telp = $_POST["notelp"];
    $alamat = $_POST["alamat"];
    if(!empty($nama))
    {
        echo "Nama : $nama <br>";
    }
    if(!empty($telp))
    {
        echo "No Telp : $telp <br>";
    }
    if(!empty($alamat))
    {
        echo "Alamat : $alamat <br>";
    }
    ?>
    </body>
</html>