<?php


function calPoints($operations)
{
        $stack = [];
        foreach ($operations as $key => $operation) {

                if ($operation == "C") {
                        array_pop($stack);
                } else if ($operation == "D") {
                        array_push($stack, $stack[count($stack) - 1] * 2);
                } else if ($operation == "+") {
                        array_push($stack, $stack[count($stack) - 1] + $stack[count($stack) - 2]);
                } else {
                        array_push($stack, $operation);
                }
        }
        if (is_null($stack)) {
                return  "0";
        } else {
                $result = array_sum($stack);
                return $result;
        }
}

$ops = ["5", "2", "C", "D", "+"];
$ops1 = ["5", "-2", "4", "C", "D", "9", "+", "+"];
$ops2 = ["1", "C"];

echo calPoints($ops1);
