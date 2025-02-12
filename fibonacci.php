<?php

function fibbo($n, &$dp = [])
{
    if ($n == 0 || $n == 1) {
        return $n;
    }

    if (isset($dp[$n])) {
        return $dp[$n];
    }

    $dp[$n] = fibbo($n - 1, $dp) + fibbo($n - 2, $dp);
    return $dp[$n];
}

// echo fibbo(10);

// Generate Fibonacci series
$n  = 10;
$dp = [];
for ($i = 0; $i <= $n; $i++) {
    echo fibbo($i) . " ";
}

echo "\n";
