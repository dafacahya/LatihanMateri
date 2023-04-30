<html>
    <head>
        <title>Contoh If Majemuk</title>
    </head>
    <body>
        <?php
        $nilai=90;
        if(($nilai>=0)&&($nilai<50))
        {
            $grade="E";
        }
        else if(($nilai>=50)&&($nilai<60))
        {
            $grade="D";
        }
        else if(($nilai>=60)&&($nilai<75))
        {
            $grade="C";
        }
        else if(($nilai>=75)&&($nilai<85))
        {
            $grade="B";
        }
        else if(($nilai>=85)&&($nilai<100))
        {
            $grade="A";
        }
        else
        {
            $grade="Nilai anda di luar jangkuan";
        }
        echo "Nilai Anda : $nilai, dikonversi menjadi $grade";
        ?>
    </body>
</html>