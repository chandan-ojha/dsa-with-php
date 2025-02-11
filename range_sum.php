<?php

$n = 5;
$v = [10, 20, 30, 40, 50];

$l = 3;
$r = 5;

$l--;
$r--;

$sum = 0;

for ($i = $l; $i <= $r; $i++) {
    $sum += $v[$i];
}

echo $sum . "\n";
