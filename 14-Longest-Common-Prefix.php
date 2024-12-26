<?php



function longestCommonPrefix($strs)
{
    $prefix = "";
    $minLength = min(array_map('strlen', $strs));


    for ($i = 0; $i < $minLength; $i++) {
        $currentStr = $strs[0][$i];
        foreach ($strs as $str) {
            if ($str[$i] !== $currentStr) {
                return $prefix;
            }
        }
        $prefix .= $currentStr;
    }

    return $prefix;
}





$strs = ["flower", "flow", "flight"];
$strs2 = ["dog", "racecar", "car"];

echo longestCommonPrefix($strs);
