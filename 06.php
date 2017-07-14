<link href="style.css" rel="stylesheet" media="all">
<?php
echo 'Задача №6' . '<br><br>';
$bmw = ['model' => 'X5', 'speed' => '120', 'doors' => '5', 'year' => '2015'];
$toyota = ['model' => 'RV4', 'speed' => '105', 'doors' => '5', 'year' => '2016'];
$opel = ['model' => 'Cascada', 'speed' => '135', 'doors' => '2', 'year' => '2013'];
$cars = ['BMW' => $bmw, 'Toyota' => $toyota, 'Opel' => $opel];
foreach ($cars as $car => $characteristic) {
    echo 'CAR ' . $car . '<br>';
    foreach ($characteristic as $value => $key) {
        echo $key . ' ';
    }
    echo '<br><br>';
}
