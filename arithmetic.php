<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}
$input1 = 4;W
$input2 = 5;
echo "The addition of $input1 and $input2 is equal to : " . add($input1,$input2) . PHP_EOL;
echo "The subtraction of $input1 and $input2 is equal to : " . subtract($input1,$input2) . PHP_EOL;
echo "The multiplication of $input1 and $input2 is equal to : " . multiply($input1,$input2) . PHP_EOL;
echo "The division of $input1 and $input2 is equal to : " . divide($input1,$input2) . PHP_EOL;
