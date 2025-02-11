<?php

$arr = [36, 58, 79, 19, 21, 22];
sort($arr);
$find = 21;

$l    = 0;
$r    = count($arr) - 1;
$flag = false;

while ($l <= $r) {

    $mid_index = (int) (($l + $r) / 2);

    if ($arr[$mid_index] == $find) {
        $flag = true;
        break;
    }

    if ($find > $arr[$mid_index]) {
        $l = $mid_index + 1;
    } else {
        $r = $mid_index - 1;
    }
}

echo $flag ? "YES\n" : "NO\n";
