<?php
function isValid(string $s): bool
{
        $sLength = strlen($s); //gelen stringi say
        if ($sLength % 2 !== 0) return false; //gelen string tek ise false döndür
        $bracketSet = ['(' => ')', '[' => ']', '{' => '}']; //key value olarak dizi oluştur
        $bracketStack = [];
 
        for ($i = 0; $i < $sLength; $i++) {
                if (array_key_exists($s[$i], $bracketSet)) {         
                        $bracketStack[] = $bracketSet[$s[$i]];
                } elseif (array_pop($bracketStack) !== $s[$i]) {
                        return false;
                }
        }
        return count($bracketStack) === 0;
}

//{[]}