<link href="style.css" rel="stylesheet" media="all">
Задача №2<br>
<?php
echo '<br>Дана задача: На школьной выставке 80 рисунков. 23 из них выполнены фломастерами,';
echo 'рисунков, выполненные красками, на школьной выставке?<br>';
$navistavke = 80;
echo 'На выставке: ' . '<br>' . $navistavke . ' рисунков' . '<br>';
$flomasterom = 23;
echo  $flomasterom . ' рисунков фломастерами' . '<br>';
$karandasom = 40;
echo $karandasom . ' рисунков карандашами' . '<br>';
$sum = $navistavke-($flomasterom+$karandasom);
echo 'Красками ' . $navistavke . ' - ( ' . $flomasterom . ' + ' . $karandasom . ' ) = ' . $sum;
