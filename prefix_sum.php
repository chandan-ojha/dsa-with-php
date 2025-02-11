<?php

$n = 5;
$v = [10, 20, 30, 40, 50];

$pre[0] = $v[0];

for ($i = 1; $i < $n; $i++) {
    $pre[$i] = $v[$i] + $pre[$i - 1];

}

$l = 1;
$r = 5;

$l--;
$r--;

$sum = 0;

if ($l == 0) {
    $sum = $pre[$r];
} else {
    $sum = $pre[$r] - $pre[$l - 1];
}

echo $sum . "\n";
