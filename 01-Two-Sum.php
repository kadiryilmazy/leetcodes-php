<?php
echo "sa";
$nums = [3, 2, 4];
$target = 6;
function twoSum($nums, $target)
{

    for ($i = 0; $i < count($nums); $i++) {

        for ($j = 0; $j < count($nums); $j++) {
            if ($i !== $j && ($nums[$i] + $nums[$j] === $target)) {
                return [$i, $j];
            }
        }
    }
}

twoSum($nums, $target);

