<link href="style.css" rel="stylesheet" media="all">
Задача №8<br>
<?php
$str = 'My favorite phrase Hello world !!!';
echo $str;
$strArr = explode(" ", $str);
echo '<pre>';
print_r($strArr);
echo '</pre>';

$x = 0;
$strRevers = array_reverse($strArr);
$cntStr = count($strRevers);
while ($x < $cntStr) {
    if ($x < $cntStr - 1) {
        echo$strRevers[$x] . '-';
    } else {
        echo $strRevers[$x];
    }
    $x++;
}
