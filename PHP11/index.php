
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1</title>
</head>

<body>
<?php
    $country = 'Lietuva';
    $city = 'Vilnius';
    $population = '800000';
    ?>
    <ul>
        <li><?php echo $country ;?></li>
        <li><?php echo $city;?></li>
        <li><?php echo $population; ?></li>
    </ul>
    
    <?php
        $city = 'Vilnius';
        $capital = 'Lietuvos sostinė';
        echo ' "' .$city. ' - '. $capital . '" ';
    ?>
    
    <br>
    <?php
        $city = 'Vilnius';
        $country = 'Lietuva';
        echo ' "' .$city. ' ir '. $country . ' sparčiai auga" ';
    ?>
    
    <br>
    <?php
        $city = 'Vilnius';
        $country = 'Lietuva';
        $largest_population = True;
    if ($largest_population == True){
        echo '$largest_population: '. ' yra TRUE';
    }
    ?>
    
    <br>
    <?php
    $x = 10;
    $y = 7;
    $result = $x + $y;
    echo"<br>";
    echo $x. ' + ' .$y. ' = '. $result;
    
    echo"<br>";
     $result = $x - $y;
    echo $x. ' - ' .$y. ' = '. $result;
    
    echo"<br>";
     $result = $x * $y;
    echo $x. ' * ' .$y. ' = '. $result;
    
    echo"<br>";
     $result = $x * $y;
    echo $x. ' * ' .$y. ' = '. $result;
        
    echo"<br>";
     $result = $x / $y;
    echo $x. ' / ' .$y. ' = '. round($result,1);
    
    echo"<br>";
     $result = $x % $y;
    echo $x. ' % ' .$y. ' = '. $result;
    ?>
</body>
</html>