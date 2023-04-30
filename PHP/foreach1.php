<html>
    <head>
        <title>Contoh foreach Tanpa key</title>
    </head>
    <body>
        <?php
        $array = array('PHP','Python','Ruby');
        foreach($array as $value)
        {
            echo $value, '<br/>';
        }
        ?>
    </body>
</html>