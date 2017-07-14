<link href="style.css" rel="stylesheet" media="all">
Задача №8<br>
<?php
$str = 'My favorite phrase Hello world';
echo $str;
$strArr = explode(" ", $str);
echo '<pre>';
print_r($strArr);
echo '</pre>';
$x = 0;
while ($x < count($strArr)) {
    echo $strArr[$x];
    $x++;
}
