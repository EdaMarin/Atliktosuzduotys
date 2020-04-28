<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP10</title>
</head>
<body>
    <?php
    function staciakampioPlotas($a, $b){
        $plotas = $a *$b;
        return $plotas;
    }
    echo 'Stačiakampio plotas:' . staciakampioPlotas(2, 3);
    ?>
</body>
</html>
