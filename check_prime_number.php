<?php

function isPrime($n)
{
    if ($n == 1) {
        return false;
    }

    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

echo(isPrime(5) ? "yes" : "no") . "\n";
