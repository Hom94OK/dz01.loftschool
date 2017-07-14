<link href="style.css" rel="stylesheet" media="all">
Задача №7<br>
<h2>Таблица умножения</h2>
<table>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        $ox[] = $i;
        $oy[] = $i;
    }
    if (!empty($oy) && !empty($ox)) {
        foreach ($oy as $indexY) {
            echo '<tr>';
            foreach ($ox as $indexX) {
                $sum = $indexX * $indexY;
                echo '<td>';
                if ($indexX % 2 == 0 && $indexY % 2 == 0) {
                    echo "($sum)";
                } elseif ($indexX % 2 == 1 && $indexY % 2 == 1) {
                    echo "[$sum]";
                } else {
                    echo $sum;
                }
                echo '</td>';
            }
            echo '</tr>';
        }
    }
    ?>
</table>