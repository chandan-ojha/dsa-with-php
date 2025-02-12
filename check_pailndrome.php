<?php

$str         = strtolower("chandan");
$i           = 0;
$j           = strlen($str) - 1;
$isPalindrom = true;

while ($i < $j) {
    if ($str[$i] != $str[$j]) {
        $isPalindrom = false;
        break;
    }
    $i++;
    $j--;
}

if ($isPalindrom) {
    echo "YES\n";
} else {
    echo "NO\n";
}
