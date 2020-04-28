<?php
    $cities3 = [
        'Tokijas' => [
            13.6,
            '1868',
            'Japonija'
            ],
        'Vašingtonas' =>[
            0.6,
            '1790',
            'JAV'
            ],
        'Maskva' => [
            11.5,
            '1147',
            'Rusija'
            ]
];
    $cities3['Londonas'][0] = 8.6;
    $cities3['Londonas'][1] = '43';
    $cities3['Londonas'][2] = 'Anglija';
print_r($cities3);
?>
<ul>
   <?php 
    echo '<li>' . $cities3['Londonas'][0] . '</li>';
    echo '<li>' . $cities3['Londonas'][1] . '</li>';
    echo '<li>' . $cities3['Londonas'][2] . '</li>';
    ?>
</ul>