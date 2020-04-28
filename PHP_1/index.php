<?php
$cities = [
    'Berlynas',
    'Roma',
    'Londonas'
];
$cities[] = 'Tokijas';
print_r($cities);
?>
<ul>
    <li><?php echo $cities[1];?></li>
</ul>
<?php
    $cities2 = [
        'Tokijas' => 13.6,
        'Vašingtonas' => 0.6,
        'Maskva' => 11.5,
];
    $cities2['Londonas'] = 8.6;
print_r($cities2);
?>
<ul>
   <?php echo '<li>' . $cities2['Tokijas'] . '</li>';  ?>
</ul>