<?php
$number = 123324;

/**
 * @param $number
 * @return bool
 */
function isPolinoid(int $number) :bool
{
    $numReverse = 0;
    $n = $number;
    while ($n > 0) {
        $numReverse = $numReverse * 10 + $n % 10;
        $n = (int)($n / 10);
    }
    return ($number == $numReverse);
}

var_dump(isPolinoid($number));