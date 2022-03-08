<?php
$x = 0;
while ($x < 20) {
    $x++;
    if ($x == 9 || $x == 14)continue;

    echo '<br> bil '. $x;

    if ($x == 17)break;
}
?>