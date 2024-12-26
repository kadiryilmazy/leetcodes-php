<?php

function searchInsert($nums, $target)
{
    $strlenArr = 0;
    $dumbKey = 0;
    $stacks = [];
    foreach ($nums as $key => $num) {
        if ($num == $target) {
            $dumbKey = $key;
            return $dumbKey;
        } else if ($num > $target) {
            echo "büyük";
            $dumbKey = $key;
            return $dumbKey;
        }
    }
    $dumbKey = $key + 1;
    return $dumbKey;
}







$nums = [1, 2, 3, 5, 6];
$target = 5;
$target1 = 2;
$target2 = 7;
echo searchInsert($nums, $target2);




// Input: nums = [1,3,5,6], target = 5
// Output: 2

// Input: nums = [1,3,5,6], target = 2
// Output: 1

// Input: nums = [1,3,5,6], target = 7
// Output: 4
