<?php

//recursion
function fact($n)
{
    if ($n == 0) {
        return 1;
    }

    $factorial = fact($n - 1);
    return $factorial * $n;
}

// echo fact(5);

//loop approach

$ans = 1;
$n   = 5;

for ($i = 1; $i <= $n; $i++) {
    $ans *= $i;
}

echo $ans;
