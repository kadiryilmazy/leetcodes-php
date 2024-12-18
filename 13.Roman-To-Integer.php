<?php

function romanToInt($s)
{
    $romans = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];
    $total = 0;
    $len = strlen($s);

    for ($i = 0; $i < $len; $i++) {
        $currentStr = $romans[$s[$i]];
        $nextStr = $i + 1 < $len ? $romans[$s[$i + 1]] : 0;
        if ($currentStr >= $nextStr) {
            $total += $currentStr;
        } else {
            $total -= $currentStr;
        }
    }
    return $total;
}
$u = romanToInt('MCMXCIV');
echo $u;
