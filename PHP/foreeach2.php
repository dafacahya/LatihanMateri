<html>
    <head>
        <title>Contoh Foreach dengan Key</title>
    </head>
    <body>
        <?php
        $array = array('Java','PHP','C++');
        foreach($array as $key => $value)
        {
            echo $key.' Yaitu Bagian dari '.$value.'<br/>';
        }
        ?>
    </body>
</html>