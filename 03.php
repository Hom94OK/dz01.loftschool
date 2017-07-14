<link href="style.css" rel="stylesheet">
Задача №2<br>
<?php
define("PI", 3.141592, true);
if (defined("PI")) {
    echo 'Число PI ~ ' . PI . '<br>';
}
//define("PI", 43, true);
echo 'Число PI неизменное ~ ' . PI;
