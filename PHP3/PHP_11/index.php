<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP11</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Ilgis: <input type="text" name="ilgis">
        Plotis: <input type="text" name="plotis">
        <input type="submit" value="suskaičiuoti">
    </form>
    <?php
    function staciakampioPlotas($a, $b){
        $plotas = $a *$b;
        return $plotas;
    }
    if (isset($_POST['ilgis']) && isset($_POST['plotis']))
    {
        $rezutatas =staciakampioPlotas($_POST['ilgis'], $_POST['plotis']);
        echo "Stčiakampio plotas yra {$_POST['ilgis']} * {$_POST['plotis']} = $rezutatas";
    }
    ?>
</body>
</html>
